<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        $hajj->status = 'Approved';

        $hajj->update();

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
