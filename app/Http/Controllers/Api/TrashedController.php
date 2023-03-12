<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TrashedController extends Controller
{
    public function index(Request $request)
    {
        return User::onlyTrashed()->paginate(3);
    }

    public function forceDelete($id)
    {
        return User::where('id', $id)->forceDelete();
    }

    public function restore($id)
    {
        return User::where('id', $id)->withTrashed()->first()->restore();
    }

    public function restoreAll()
    {
        return User::onlyTrashed()->restore();
    }
}
