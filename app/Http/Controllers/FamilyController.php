<?php

namespace EVisaUK\Http\Controllers;

use Illuminate\Http\Request;

class FamilyController extends Controller
{

    public function index()
    {
        return view('pages.family');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
      $employment = new Employment;
      $passport->no_passport = $request->no_passport;
      $passport->expiry_date = $request->expiry_date;
      $passport->given_name = $request->given_name;
      $passport->date_issue = $request->date_issue;
      $passport->last_name = $request->last_name;
      $passport->date_of_birth = $request->date_of_birth;
      $passport->place_of_birth = $request->place_of_birth;
      $passport->address = $request->address;
      $passport->user_id = auth()->user()->id;
      $passport->save();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
