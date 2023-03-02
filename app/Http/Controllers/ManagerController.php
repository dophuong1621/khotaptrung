<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManagerController extends Controller
{
    public function recharge()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.recharge', [
            'users' => $usersHead
        ]);
    }


    public function info()
    {
        $sessionId = session()->get('id');
        $users = User::where('id', $sessionId)->get();
        return view('users.info', [
            'users' => $users
        ]);
    }
    public function notification()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.notification', [
            'users' => $usersHead
        ]);
    }
    public function withdrawItems()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.withdraw-items', [
            'users' => $usersHead
        ]);
    }
    public function voucher()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.list-voucher', [
            'users' => $usersHead
        ]);
    }
    public function historyGame()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.history.game', [
            'users' => $usersHead
        ]);
    }
    public function historyAddCard()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.history.add_cart', [
            'users' => $usersHead
        ]);
    }
    public function historyTransaction()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.history.transaction', [
            'users' => $usersHead
        ]);
    }
    public function historyBuyNick()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.history.buy_nick', [
            'users' => $usersHead
        ]);
    }
    public function historyItems()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.history.buy_items', [
            'users' => $usersHead
        ]);
    }
    public function historyService()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.history.service', [
            'users' => $usersHead
        ]);
    }

    public function boxLeft()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.box-left-content', [
            'users' => $usersHead
        ]);
    }

    public function modal()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.modal', [
            'users' => $usersHead
        ]);
    }
}
