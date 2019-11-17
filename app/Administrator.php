<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_name', 'admin_username', 'admin_email', 'admin_password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'admin_password', 'remember_token',
    ];
    // protected $table= 'administrators';
    protected $primaryKey= 'admin_id';
    // protected $appends = ['email'];

    // public function getEmailAttribute() {
    //     return $this->admin_email;
    // }
    
    // public function setEmailAttribute($value) {
    //     $this->attributes['admin_email'] = $value;
    // }

    // protected $appends = ['email'];
    // public function getAuthIdentifier()
    // {
    //     return $this->admin_email;
    // }

    // public function getEmailAttribute()
    // {
    //     return $this->admin_email();
    // }


    public function getAuthPassword()
    {
        return $this->admin_password;
    }

    // public function getReminderEmail()
    // {
    //     return $this->admin_email;
    // }
}
