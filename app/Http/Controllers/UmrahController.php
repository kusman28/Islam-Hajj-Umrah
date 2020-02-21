<?php

namespace App\Http\Controllers;

use App\Umrah;
use Illuminate\Http\Request;

class UmrahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('umrah');
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
        $umrah = new Umrah();

        $rules = [
            'mobile_no' => 'required|digits_between:10,11'
        ];
        
        $this->validate($request, [
            'firstname' => 'required|string|min:3',
            'middlename' => 'required|string|min:3',
            'lastname' => 'required|string|min:3',
            'gender' => 'required',
            'birthday' => 'required',
            'iqama_no' => 'required|numeric|digits:10',
            'iqama_exp_date' => 'required',
            'passport_no' => 'required|numeric',
            'passport_exp_date' => 'required',
            'mobile_no' => 'required|numeric|digits_between:10,11',
            'whatsapp_no' => 'required|numeric',
            'email' => 'required|string',
            'nationality' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'job' => 'required',
            'company' => 'required',
            'contact_company' => 'required',
            'picture' => 'required|image|mimes:jpg,png,gif,jpeg|max:4096',
            'iqama_pic' => 'required',
            'passport_pic' => 'required',
        ]);
        $umrah->fullname = $request->input('firstname'). ' '.$request->input('middlename'). ' '.$request->input('lastname');
        $umrah->firstname = $request->input('firstname');
        $umrah->middlename = $request->input('middlename');
        $umrah->lastname = $request->input('lastname');
        $umrah->gender = $request->input('gender');
        $umrah->birthday = $request->input('birthday');
        $umrah->iqama_no = $request->input('iqama_no');
        $umrah->iqama_exp_date = $request->input('iqama_exp_date');
        $umrah->passport_no = $request->input('passport_no');
        $umrah->passport_exp_date = $request->input('passport_exp_date');
        $umrah->mobile_no = $request->input('mobile_no');
        $umrah->whatsapp_no = $request->input('whatsapp_no');
        $umrah->email = $request->input('email');
        $umrah->nationality = $request->input('nationality');
        $umrah->address = $request->input('address');
        $umrah->city = $request->input('city');
        $umrah->job = $request->input('job');
        $umrah->company = $request->input('company');
        $umrah->contact_company = $request->input('contact_company');


        if ($request->hasfile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = '2x2_' . $request->input('firstname') . time() . '.' . $extension;
            $file->move(public_path('images/picture/'), $filename);
            $umrah->picture = $filename;
        } else {
            return $request;
            $umrah->picture = '';
        }

        if ($request->hasfile('iqama_pic')) {
            $file = $request->file('iqama_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = 'Iqama_' . $request->input('firstname') . time() . '.' . $extension;
            $file->move(public_path('images/iqama/'), $filename);
            $umrah->iqama_pic = $filename;
        } else {
            return $request;
            $umrah->iqama_pic = '';
        }

        if ($request->hasfile('passport_pic')) {
            $file = $request->file('passport_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = 'Passport_' . $request->input('firstname') . time() . '.' . $extension;
            $file->move(public_path('images/passport/'), $filename);
            $umrah->passport_pic = $filename;
        } else {
            return $request;
            $umrah->passport_pic = '';
        }

        $umrah->save();

        return view('successUmrah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Umrah  $umrah
     * @return \Illuminate\Http\Response
     */
    public function show(Umrah $umrah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Umrah  $umrah
     * @return \Illuminate\Http\Response
     */
    public function edit(Umrah $umrah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Umrah  $umrah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Umrah $umrah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Umrah  $umrah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Umrah $umrah)
    {
        //
    }
}
