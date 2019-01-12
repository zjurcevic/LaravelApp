<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = \App\Person::with(['city', 'accounts'])->paginate();
        return view('persons/index', ['persons' => $persons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = \App\City::all();
        return view('persons/create', ['cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'person_oib' => 'required|max:255',
            'person_firstName' => 'required',
            'person_lastName' => 'required',
            'person_sex' => 'max:10',
            'person_dob' => 'required',
            'person_telephone' => 'max:15',
            'person_email' => 'max:50',
            'person_address' => 'max:200',
            'city_id' => 'required'
        ]);
    
        if ($validator->fails()) 
        {
            return redirect()->action('PersonController@create')
                ->withErrors($validator);
        }
    
        $data = $request->input();
        \App\Person::create($data);
        return redirect()->action('PersonController@index');
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
        //
    }
}
