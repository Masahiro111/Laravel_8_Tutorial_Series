<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post31;
use Illuminate\Http\Request;

class Post31Controller extends Controller
{

    public function addPost()
    {
        $post = new Post31();
        $post->title = "first post title";
        $post->body = "first post description";
        $post->save();
        return "post has been created successfully!";
    }

    public function addComment($id)
    {
        $post = Post31::find($id);
        $comment = new Comment();
        $comment->comment = "first comment";
        $post->comments()->save($comment);
        return "comment has been posted";
    }

    public function getCommentsByPost($id)
    {
        $comments = Post31::find($id)->comments;
        return $comments;
    }
}
