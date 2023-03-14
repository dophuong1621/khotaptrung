<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Item;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();

        // dd($usersHead);
        //box 1
        $top_nap = Item::where('module', 'top_nap')
            ->limit(5)
            ->orderBy('price', 'desc')
            ->get();
        //box 3
        $robloxReputation = Group::where('module', 'roblox_reputation')
            ->orderBy('id', 'asc')
            ->limit(4)
            ->get();
        //box 4
        $superDeliciousAccount = Group::where('module', 'super_delicious_account')
            ->orderBy('id', 'asc')
            ->limit(12)
            ->get();
        //box 5
        $openingGame = Group::where('module', 'opening_game')
            ->orderBy('id', 'asc')
            ->limit(4)
            ->get();
        //box 6
        $ortherGame = Group::where('module', 'orther_game')
            ->orderBy('id', 'asc')
            ->limit(4)
            ->get();
        return view('users.trang-chu', [
            'topNap' => $top_nap,
            'users' => $usersHead,
            'reputation' => $robloxReputation,
            'openingGame' => $openingGame,
            'ortherGame' => $ortherGame,
            'superDeliciousAccount' => $superDeliciousAccount,
        ]);
    }
}
