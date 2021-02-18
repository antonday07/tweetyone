<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{

    public function store(User $user)
    {

        // have auth user follow the user
        auth()->user()->toggleFollow($user);

        return back();
    }
}
