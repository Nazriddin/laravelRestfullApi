<?php

namespace App\Http\Controllers;

use App\Models\{User, Comment};
use App\Http\Resources\CommentResource;

class UserCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return CommentResource::collection(
            Comment::where('user_id', $user->id)->paginate(5)
        );
    }
}
