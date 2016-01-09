<?php

namespace PageMeta\Http\Controllers\Auth;

use PageMeta\User;
use Validator;
use PageMeta\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
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
        $notify = isset($data['notify']) ? $data['notify'] : 0;
        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'notify' => $notify,
            'api_key' => md5($data['email'].time()),
            'requests_starts_at' => \DB::raw('NOW()'),
            'requests_per_month' => config('app.defaults.requests_per_month'),
            'requests_left' => config('app.defaults.requests_per_month'),
        ]);

        $this->sendWelcomeEmail($user);

        return $user;
    }

    /**
     * @param $user
     */
    protected function sendWelcomeEmail($user)
    {
        try {
            \Mail::send('emails.register', ['user' => $user], function ($m) use ($user) {
                $m->from('hello@pagemeta.io', 'PageMeta API');
                $m->to($user->email)->subject('Welcome to PageMeta API');
            });
        } catch(\Exception $e) {
            dd($e);
        }

    }



}
