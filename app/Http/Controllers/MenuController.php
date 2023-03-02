<?php

namespace App\Http\Controllers;

use App\Models\User;

class MenuBooking extends Controller
{
    public function user()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();

        return view('layouts_user.header', [
            'users' => $usersHead,
        ]);
    }
}
