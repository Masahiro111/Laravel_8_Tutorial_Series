<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('');
        return $response->json();
    }

    public function getPostById($id)
    {
        $post = Http::get('' . $id);
        return $post->json();
    }

    public function addPost()
    {
        $post = Http::post('', [
            'userId' > 1,
            'titile' => 'New Post title',
            'body' => 'New Post Description'
        ]);

        return $post->json();
    }

    public function updatePost()
    {
        $response = Http::put('', [
            'title' => 'update title',
            'body' => 'updated desctiption',
        ]);

        return $response->json();
    }

    public function deletePost($id)
    {
        $response = Http::delete('' . $id);
        return $response->json();
    }
}
