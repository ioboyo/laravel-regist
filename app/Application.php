<?php

namespace EVisaUK;

use Illuminate\Database\Eloquent\Model;
use EVisaUK\User;

class Application extends Model
{
  protected $fillable = [
    'interview_date',
    'no_referensi',
    'date_arrival',
  ];

  protected $hidden = [
    'user_id',
  ];


  public function user(){
    return $this->belongsTo('EVisaUK\User');
  }
}
