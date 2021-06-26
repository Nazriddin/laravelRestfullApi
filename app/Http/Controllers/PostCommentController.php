<?php

namespace App\Http\Controllers;

use App\Models\{Post, Comment};
use App\Http\Resources\CommentResource;

class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return CommentResource::collection(
            Comment::where('post_id', $post->id)->paginate(5)
        );
    }
}
