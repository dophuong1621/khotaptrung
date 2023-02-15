<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class TrashedController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $user = User::onlyTrashed()->where('fullname', 'like', '%' . $search . '%')->paginate(3);  // or withTrashed
        // dd($user);
        return view('trashed', compact('user'));
    }

    public function forceDelete($id)
    {
        User::where('id', $id)->forceDelete();

        return Redirect::route('trashed.index');
    }

    public function restore($id)
    {
        User::where('id', $id)->withTrashed()->first()->restore();
        return Redirect::route('trashed.index');
    }

    public function restoreAll()
    {
        User::onlyTrashed()->restore();
        return redirect()->route('trashed.index');
    }
}
