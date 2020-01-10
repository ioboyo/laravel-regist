<?php

namespace EVisaUK;

use Illuminate\Database\Eloquent\Model;
use EVisaUK\User;

class Passport extends Model
{
    protected $fillable = [
     /* 'date_issue',
      'expiry_date',
      'no_passport', */
      'given_name',
      'last_name',
      'birth',
      'place_of_birth',
    ];

    protected $hidden = [
      'user_id',
    ];

    public $timestamps = false;

    public function user(){
      return $this->belongsTo('EVisaUK\User');
    }
}
