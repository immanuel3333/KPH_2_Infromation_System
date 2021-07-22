<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function NIP(){
        return 'nip';
    }

    public function login(Request $request)
    {   
        $input = $request->all();
  
        $this->validate($request, [
            'nip' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->nip, FILTER_VALIDATE_EMAIL) ? 'email' : 'nip';

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
        $this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);

        return $this->sendLockoutResponse($request);
    }

    if ($this->attemptLogin($request)) {
        if(Auth::user()->status=='admin1')
        {
            return redirect('/home');
        }
        else{
            return $this->sendLoginResponse($request);
        }
        
    }
    if ($this->attemptLogin($request)) {
        if(Auth::user()->status=='admin')
        {
            return redirect('/home2');
        }
        else{
            return $this->sendLoginResponse($request);
        }
        
    }

        if(auth()->attempt(array($fieldType => $input['nip'], 'password' => $input['password'])))
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('landingpage')
                ->with('error','NIP atau Sandi anda salah.');
        }
          
    }
}
