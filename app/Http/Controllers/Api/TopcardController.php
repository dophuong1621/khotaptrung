<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Item;

class TopcardController extends Controller
{
    public function topCard()
    {
        return Item::where('module', 'top_nap')->limit(5)->orderBy('price', 'desc')->get();
    }

    public function robloxReputation()
    {
        return Group::where('module', 'roblox_reputation')->orderBy('id', 'asc')->limit(4)->get();
    }

    public function superDeliciousAccount()
    {
        return Group::where('module', 'super_delicious_account')->orderBy('id', 'asc')->limit(12)->get();
    }

    public function openingGame()
    {
        return Group::where('module', 'opening_game')->orderBy('id', 'asc')->limit(12)->get();
    }

    public function ortherGame()
    {
        return Group::where('module', 'orther_game')->orderBy('id', 'asc')->limit(12)->get();
    }
}
