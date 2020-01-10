<?php

namespace EVisaUK;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use EVisaUK\Passport;
use EVisaUK\Application;
use EVisaUK\Verification;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
       'email',
       'user_name',
       'id_customer',
       'password',
       'contact_number',
    ];

    protected $hidden = [
        'password', 'remember_token','role',
    ];

    public function passport()
    {
      return $this->hasOne('EVisaUK\Passport');
    }
    public function application(){
      return $this->hasOne('EVisaUK\Application');
    }
    public function verification(){
      return $this->hasOne('EVisaUK\Verification');
    }

}
