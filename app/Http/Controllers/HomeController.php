<?php

namespace EVisaUK\Http\Controllers;
use Illuminate\Http\Request;
use App\Passport;
use App\User;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }
}
