<?php

namespace App\Http\Controllers;

use App\Models\{Post, User};
use App\Http\Resources\PostResource;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return PostResource::collection(
            Post::where('user_id', $user->id)->paginate(5)
        );
    }
}
