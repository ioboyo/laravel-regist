<?php

namespace EVisaUK\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
  public function index(){
    return view('pages.upload');
  }

  public function store(Request $request)
  {
    $path = $request->file('user_upload')->storeAs('public',$request->user()->passport->given_name.'_'. $request->user()->id_customer.'.pdf');

    // return $path;

    return view('pages.confirm');

  }
}
