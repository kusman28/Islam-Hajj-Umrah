<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hajj;
use App\HajjRegistered;
use Illuminate\Support\Facades\Auth;


class HajjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hajj = Hajj::where('status', 'Pending')->paginate(10);

        return $hajj;
        
        // return Hajj::latest()->paginate(10);
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
        return Hajj::findOrFail($id);
        // $hajj = Hajj::findOrFail($id);

        // return $hajj;
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
        $hajj = Hajj::findOrFail($id);
        // $hajj = Hajj::findOrFail($id);
        // $hajj->firstname = $request->firstname;
        // $hajj->status = 'Approved';
        // $hajj->update();

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
            'email' => 'required|email|string',
            'nationality' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'job' => 'required',
            'company' => 'required',
            'contact_company' => 'required',
            // 'picture' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
            // 'iqama_pic' => 'required',
            // 'passport_pic' => 'required',
            // 'passport_pic' => 'required',
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
        $hajj->status = 'Approved';

        $hajj->update();
        
        // $user_id = Auth::user()->id;
        $user = \App\User::find($id);

        return HajjRegistered::create([
            'hajj_id' => $request['id'],
            'fullname' => $request['firstname'].' '.$request['middlename'].' '.$request['lastname'],
            'approved_by' => $user->name
        ]);

    }

    // public function test($name) {
    //     $user = \App\User::find($name);
    //     return $user->name;
    // }

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
