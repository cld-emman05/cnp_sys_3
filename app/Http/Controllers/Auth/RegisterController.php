<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use DB;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $$data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company' => 'string|max:255|nullable',
            'industry' => 'integer|min:1',
            'address' => 'string|nullable',
            'contact' => 'string|min:7|max:11|nullable',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $newUser = new User;
      $agent = new Agent;

      $user = DB::table('users')->insertGetId([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'address' => $data['address'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
      ]);

      $customer = DB::table('customers')->insertGetID([
        'company' => $data['company'],
        'industry_id' => $data['industry'],
        'user_id' => $user,
        'agent_id' => null,
      ]);

      return $newUser;
    }
}