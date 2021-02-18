<?php


namespace App\Traits;


use App\Like;
use App\User;
use Illuminate\Database\Eloquent\Builder;

trait Likeable
{
    public function scopeWithLikes(Builder $query) {


// left JOIN (
//            Select tweet_id, SUM(liked) as Likes, SUM(! liked) as Dislikes from likes GROUP BY tweet_id
//) Likes on likes.tweet_id = tweets.id
        $query->leftJoinSub(
            'select tweet_id, SUM(liked) as likes, SUM(not liked) as dislikes from likes GROUP BY tweet_id',
            'likes',
                'likes.tweet_id',
            'tweets.id'
        );

    }

    public function isLikedBy(User $user) {
        return (bool) $user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();
    }
    public function isDislikedBy(User $user) {
        return (bool) $user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', false)
            ->count();
    }
    public function removeLikeOrDislike($user = null, $liked = true) {
        $removeLiked = $user->likes
            ->where('user_id', auth()->id())
            ->where('tweet_id', $this->id)
            ->where('liked', $liked)
            ->first();
        if ($removeLiked) {

            $removeLiked->delete();
            return true;
        }
        return false;

    }


    public function like($user = null, $liked = true)
    {
        //Check if tweet liked then remove like
        $checkLiked = $this->removeLikeOrDislike(current_user(), true);
        if ($checkLiked) {
            return back();
        }

        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),

        ],
            [
                'liked' => $liked
            ]);

    }



    public function dislike($user = null) {

        $checkLiked = $this->removeLikeOrDislike(current_user(), false);
        if ($checkLiked) {
            return back();
        }
        $this->like($user,false);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }
}
