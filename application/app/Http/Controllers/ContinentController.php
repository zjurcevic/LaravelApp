<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continents = \App\Continent::paginate();
        return view('continents/index', ['continents' => $continents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('continents/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $data = $request->input();
       // \App\Continent::create($data);
       // return redirect()->action('ContinentController@index');

       $validator = \Validator::make($request->all(), [
        'continent_name' => 'required|max:255',
        'number_of_countries' => 'required',
        'native_name' => 'max:50'
    ]);

    if ($validator->fails()) 
    {
        return redirect()->action('ContinentController@create')
            ->withErrors($validator);
    }

    $data = $request->input();
    \App\Continent::create($data);
    return redirect()->action('ContinentController@index');


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Continent::destroy($id);
        return redirect()->action('ContinentController@index');
    }
}
