<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {

        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(5)
        ]);
    }

    public function edit(User $user)
    {
        //  abort_if(current_user()->isNot($user), '404'); simple way

        // Policy way
        //  $this->authorize('edit', $user); or use in route

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {



        $attributes = \request()->validate([
            'username' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'banner' => ['file'],
            'avatar' => ['file'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed']
        ]);

        if (\request('banner')) {
            $attributes['banner'] = \request('banner')->store('banners');
        }
        if (\request('avatar')) {
            $attributes['avatar'] = \request('avatar')->store('avatars');
        }

        $user->update($attributes);

        $notification = array(
            'message' => 'Profile updated successfully',
            'alert-type' => 'success'
        );
        // Another way to implement toast is yoeunes/toast library in vender folder => google for that <3

        return redirect($user->path())->with($notification);
    }
}
