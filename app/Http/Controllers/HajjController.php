<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hajj;

class HajjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hajj');
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
        $this->validate($request, [
            'firstname' => 'required|string|min:3',
            'middlename' => 'required|string|min:3',
            'lastname' => 'required|string|min:3',
            'gender' => 'required',
            'birthday' => 'required',
            'iqama_no' => 'required|numeric',
            'iqama_exp_date' => 'required',
            'passport_no' => 'required|numeric',
            'passport_exp_date' => 'required',
            'mobile_no' => 'required|numeric|max:11',
            'whatsapp_no' => 'required|numeric',
            'email' => 'required|string',
            'nationality' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'job',
            'company',
            'contact_company',
            'picture' => 'required',
            'iqama_pic' => 'required',
            'passport_pic' => 'required',
        ]);

        Hajj::create([
            'fullname' => $request['firstname'].' '.$request['middlename'].' '.$request['lastname'],
            'firstname' => $request['firstname'],
            'middlename' => $request['middlename'],
            'lastname' => $request['lastname'],
            'gender' => $request['gender'],
            'birthday' => $request['birthday'],
            'iqama_no' => $request['iqama_no'],
            'iqama_exp_date' => $request['iqama_exp_date'],
            'passport_no' => $request['passport_no'],
            'passport_exp_date' => $request['passport_exp_date'],
            'mobile_no' => $request['mobile_no'],
            'whatsapp_no' => $request['whatsapp_no'],
            'email' => $request['email'],
            'nationality' => $request['nationality'],
            'address' => $request['address'],
            'city' => $request['city'],
            'job' => $request['job'],
            'company' => $request['company'],
            'contact_company' => $request['contact_company'],
            'picture' => $request['picture'],
            'iqama_pic' => $request['iqama_pic'],
            'passport_pic' => $request['passport_pic'],
        ]);

        return view('HajjRegistrationSuccess');
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
