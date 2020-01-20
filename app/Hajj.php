<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hajj extends Model
{
    protected $table = 'hajj';
    protected $fillable = [
        'fullname',
        'firstname',
        'middlename',
        'lastname',
        'gender',
        'birthday',
        'iqama_no',
        'iqama_exp_date',
        'passport_no',
        'passport_exp_date',
        'mobile_no',
        'whatsapp_no',
        'email',
        'nationality',
        'address',
        'city',
        'job',
        'company',
        'contact_company',
        'picture',
        'iqama_pic',
        'passport_pic',
        'status',
    ];
    
}
