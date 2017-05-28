<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|unique:users|max:255',
            'fname' => 'required|string|max:32',
            'mname' => 'required|string|max:32',
            'lname' => 'required|string|max:32',
            'email' => 'required|email|max:255|unique:users',
            'birth_date' => 'required|date|before:'.date('2000-1-1'),
            'phone' => 'numeric|min:500000000',
            'password' => 'required|min:6|confirmed',
        ],[

            ]
            ,[
                'username' => 'username',
                'fname' => 'First Name',
                'mname' => 'Middle Name',
                'lname' => 'Last Name',
                'email' => 'Email',
                'birth_date' => 'Birth Date',
                'phone' => 'Phone',
                'twittr' => 'Twitter',
                'facebook' => 'Facebook',
                'linkedin' => 'LinkedIn',
                'web_page' => 'Web Page',
                'password' => 'Password',
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'birth_date' => $data['birth_date'],
            'phone' => $data['phone'],
            'twittr' => $data['twittr'],
            'facebook' => $data['facebook'],
            'linkedin' => $data['linkedin'],
            'web_page' => $data['web_page'],
            'password' => bcrypt($data['password']),
            'account_type' => 'lite',
        ]);
    }
}
