<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Umrah;
use App\Registered;

class UmrahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umrah = Umrah::where('status', 'Pending')->paginate(10);

        return $umrah;
    }

    public function umrahDocx(){
        return Umrah::latest()->paginate(20);
    }

    public function umrahTotal(){
        return Umrah::latest()->paginate();
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
        return Umrah::findOrFail($id);
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
        $umrah = Umrah::findOrFail($id);

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
        $umrah->status = 'Approved';

        $umrah->update();
            
        return Registered::create([
            'reg_id' => $request['id'],
            'fullname' => $request['firstname'].' '.$request['middlename'].' '.$request['lastname'],
            'type' => auth('api')->user()->name
        ]);
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
