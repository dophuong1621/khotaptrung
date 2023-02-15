<?php

namespace App\Http\Controllers\Bus;
use App\Http\Controllers\Controller;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $bus = Group::where('module','=','bus_category')->where('title', 'like', '%' . $search . '%')->orderBy('id','ASC')->get();
        // dd($bus);
        return view('category/bus.index',[
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
        return view('category/bus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['module'] = 'bus_category';
        Group::create($input);
        return Redirect::route('bus-category.index');
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
        $bus = Group::where('id', '=', $id)
            ->where('module','=','bus_category')
            ->first();
        // dd($bus);
        return view('category/bus.edit', [
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
        $category= Group::where('module','=','bus_category')->findOrFail($id);
        $input=$request->all();
        $category->update($input);
        return Redirect::route('bus-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::where('id',$id)->where('module','bus_category')->FirstOrFail()->delete();
        return Redirect::route('bus-category.index');
    }
}
