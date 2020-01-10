<?php

namespace EVisaUK\Http\Controllers\Auth;

use EVisaUK\User;
use EVisaUK\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{


    use RegistersUsers;

    protected $redirectTo = '/home';


    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'user_name' => 'required|string|max:20',
            'contact_number' => 'required|string|max:15',
            'id_customer' => 'required|string|max:10',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'user_name' => $data['user_name'],
            'contact_number' => $data['contact_number'],
            'id_customer' => $data['id_customer'],
            'password' => bcrypt($data['password']),

        ]);
    }
}
