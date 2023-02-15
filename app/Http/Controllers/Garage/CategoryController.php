<?php

namespace App\Http\Controllers\Garage;
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
        $garage = Group::where('module','=','garage_category')->where('title', 'like', '%' . $search . '%')->orderBy('id','ASC')->get();
        // var_dump($garage);
        return view('category/garage.index',[
            'garage' => $garage
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category/garage.create');
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
        $input['module'] = 'garage_category';
        Group::create($input);
        return Redirect::route('garage-category.index');
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
        $garage = Group::where('id', '=', $id)
            ->where('module','=','garage_category')
            ->first();
        // dd($garage);
        return view('category/garage.edit', [
            'garage' => $garage,
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
        $category= Group::where('module','=','garage_category')->findOrFail($id);
        $input=$request->all();
        $category->update($input);
        return Redirect::route('garage-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::where('id',$id)->where('module','garage_category')->FirstOrFail()->delete();
        return Redirect::route('garage-category.index');
    }
}
