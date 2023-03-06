<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;

class PostController extends Controller
{
    public function listPost()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        $post = Item::where('module', 'post')->get();

        return view('users.post.list', [
            'users' => $usersHead,
            'post' => $post,
        ]);
    }

    public function showPost($id)
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        $postShow = Item::where(['id' => $id, 'module' => 'post'])->firstorFail();

        $dongGia = Item::where(['module' => 'post'])->limit(8)->get();


        return view('users.post.show', [
            'users' => $usersHead,
            'postShow' => $postShow,
            'dongGia' => $dongGia,
        ]);
    }
}
