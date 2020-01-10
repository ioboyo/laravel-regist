<?php

namespace EVisaUK;
use EVisaUK\User;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
  protected $fillable = [
    'no_referensi',
    'status',
    'add_info',
    'user_id',
  ];


  public function user(){
    return $this->belongsTo('EVisaUK\User');
  }
}
