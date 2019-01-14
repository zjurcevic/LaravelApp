<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = \App\Account::with(['bank', 'person'])->paginate();
        return view('accounts/index', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persons = \App\Person::all();
        $banks = \App\Bank::all();
        return view('accounts/create', ['persons' => $persons],['banks' => $banks]);
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
            'account_number' => 'required|max:255',
            'account_iban' => 'required|max:255',
            'account_currency' => 'required|max:25',
            'account_type' => 'required|max:50',
            'account_limit' => 'max:50',
            'account_interest' => 'max:10',
            'account_balance' => 'required|max:50',
            'account_openDate' => 'required|max:50',
            'account_closeDate' => 'max:50',
            'person_id' => 'required',
            'bank_id' => 'required'
        ]);
    
        if ($validator->fails()) 
        {
            return redirect()->action('AccountController@create')
                ->withErrors($validator);
        }
    
        $data = $request->input();
        \App\Account::create($data);
        return redirect()->action('AccountController@index');
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
        \App\Account::destroy($id);
        return redirect()->action('AccountController@index');
    }
}
