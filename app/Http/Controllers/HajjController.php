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
        $hajj = new Hajj();
        
        $this->validate($request, [
            'firstname' => 'required|string|min:3',
            'middlename' => 'required|string|min:3',
            'lastname' => 'required|string|min:3',
            'gender' => 'required',
            'birthday' => 'required',
            'iqama_no' => 'required|numeric|min:10',
            'iqama_exp_date' => 'required',
            'passport_no' => 'required|numeric',
            'passport_exp_date' => 'required',
            'mobile_no' => 'required|numeric|min:11',
            'whatsapp_no' => 'required|numeric',
            'email' => 'required|string',
            'nationality' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'job' => 'required',
            'company' => 'required',
            'contact_company' => 'required',
            'picture' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
            'iqama_pic' => 'required',
            'passport_pic' => 'required',
        ]);
        $hajj->fullname = $request->input('firstname'). ' '.$request->input('middlename'). ' '.$request->input('lastname');
        $hajj->firstname = $request->input('firstname');
        $hajj->middlename = $request->input('middlename');
        $hajj->lastname = $request->input('lastname');
        $hajj->gender = $request->input('gender');
        $hajj->birthday = $request->input('birthday');
        $hajj->iqama_no = $request->input('iqama_no');
        $hajj->iqama_exp_date = $request->input('iqama_exp_date');
        $hajj->passport_no = $request->input('passport_no');
        $hajj->passport_exp_date = $request->input('passport_exp_date');
        $hajj->mobile_no = $request->input('mobile_no');
        $hajj->whatsapp_no = $request->input('whatsapp_no');
        $hajj->email = $request->input('email');
        $hajj->nationality = $request->input('nationality');
        $hajj->address = $request->input('address');
        $hajj->city = $request->input('city');
        $hajj->job = $request->input('job');
        $hajj->company = $request->input('company');
        $hajj->contact_company = $request->input('contact_company');


        if ($request->hasfile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = '2x2' . time() . '.' . $extension;
            $file->move(public_path('images/picture/'), $filename);
            $hajj->picture = $filename;
        } else {
            return $request;
            $hajj->picture = '';
        }

        if ($request->hasfile('iqama_pic')) {
            $file = $request->file('iqama_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = 'Iqama' . time() . '.' . $extension;
            $file->move(public_path('images/iqama/'), $filename);
            $hajj->iqama_pic = $filename;
        } else {
            return $request;
            $hajj->iqama_pic = '';
        }

        if ($request->hasfile('passport_pic')) {
            $file = $request->file('passport_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = 'Passport' . time() . '.' . $extension;
            $file->move(public_path('images/passport/'), $filename);
            $hajj->passport_pic = $filename;
        } else {
            return $request;
            $hajj->passport_pic = '';
        }

        $hajj->save();

        // Hajj::create([
        //     'fullname' => $request['firstname'].' '.$request['middlename'].' '.$request['lastname'],
        //     'firstname' => $request['firstname'],
        //     'middlename' => $request['middlename'],
        //     'lastname' => $request['lastname'],
        //     'gender' => $request['gender'],
        //     'birthday' => $request['birthday'],
        //     'iqama_no' => $request['iqama_no'],
        //     'iqama_exp_date' => $request['iqama_exp_date'],
        //     'passport_no' => $request['passport_no'],
        //     'passport_exp_date' => $request['passport_exp_date'],
        //     'mobile_no' => $request['mobile_no'],
        //     'whatsapp_no' => $request['whatsapp_no'],
        //     'email' => $request['email'],
        //     'nationality' => $request['nationality'],
        //     'address' => $request['address'],
        //     'city' => $request['city'],
        //     'job' => $request['job'],
        //     'company' => $request['company'],
        //     'contact_company' => $request['contact_company'],
        //     'picture' => $request['picture'],
        //     'iqama_pic' => $request['iqama_pic'],
        //     'passport_pic' => $request['passport_pic'],
        // ]);

        return view('successHajj');
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
