<?php

namespace App\Http\Controllers\Bus;
use App\Http\Controllers\Controller;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bus = Item::where('module','=','bus')->orderBy('id','ASC')->get();
        // dd($bus);
        return view('bus-category.index',[
            'bus' => $bus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bus =  Item::where('id', '=', $id)
            ->where('module','=','bus')
            ->first();
        // dd($bus);
        return view('bus.edit', [
            'bus' => $bus,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=Item::where('module','=','bus')->findOrFail($id);
        $input=$request->all();
        $item->update($input);
        return Redirect::route('bus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
