<?php

namespace App;

use App\User;
use App\Notifications\HajjRegistered;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Hajj extends Model
{
    use Notifiable, LogsActivity;
    protected static $logFillable = true;
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

    public static function boot()
    {
        parent::boot();

        static::created(function($model) {
            Notification::send(User::all(), new HajjRegistered($model));
        });
    }
    
}


// if ($request->hasfile('picture')) {
//     $file = $request->file('picture');
//     $extension = $file->getClientOriginalExtension();
//     $filename = time() . '.' . $extension;
//     $file->move(public_path('images/documents/'), $filename);
//     $hajj->picture = $filename;
// } else {
//     return $request;
//     $hajj->picture = '';
// }