<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{

    public function home()
    {
        return view('users.trang-chu');
    }

    public function recharge()
    {
        return view('users.recharge');
    }

    public function repass()
    {
        return view('users.repass');
    }
    public function info()
    {
        return view('users.info');
    }
    public function notification()
    {
        return view('users.notification');
    }
    public function withdrawItems()
    {
        return view('users.withdraw-items');
    }
    public function voucher()
    {
        return view('users.list-voucher');
    }
    public function historyGame()
    {
        return view('users.history.game');
    }
    public function historyAddCard()
    {
        return view('users.history.add_card');
    }
    public function historyTransaction()
    {
        return view('users.history.transaction');
    }
    public function historyBuyNick()
    {
        return view('users.history.buy_nick');
    }
    public function historyItems()
    {
        return view('users.history.buy_item');
    }
    public function historyService()
    {
        return view('users.history.service');
    }
}
