<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{

    public function index()
    {

        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store() {

        $attribute = \request()->validate([
            'body' => 'required|max:255'
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attribute['body']
        ]);
        $notification = array(
            'message' => 'Tweet created successfully!',
            'alert-type' => 'info'
        );
        return redirect('/tweets')->with($notification);
    }

    public function destroy(Tweet $tweet) {

        $tweet->delete();

        return back();
    }
}
