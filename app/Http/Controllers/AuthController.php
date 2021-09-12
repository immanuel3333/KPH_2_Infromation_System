<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function proses_login(Request $request)
    {
        request() -> validate(
            [
                'name' => 'required',
                'password' => 'required'
            ]);
            $kredensil = $request->only('name','password');
            if(Auth::attempt($kredensil)){
                $user = Auth::user();
                if($user->level == 'adminupt'){
                    return redirect()->intended('home');
                }elseif($user->level == 'adminunit'){
                    return redirect()->intended('home2');
                }
                elseif($user->level == 'adminunit2'){
                    return redirect()->intended('home3');
                }
                elseif($user->level == 'adminunit3'){
                    return redirect()->intended('home4');
                }
                elseif($user->level == 'adminunit4'){
                    return redirect()->intended('home5');
                }
                return redirect()->intended('/');

                return redirect('login');
            }else{
                return back()->withErrors(['password' => 'Password salah']);
            }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('landingpage');
    }

    public function edit()
    {
        return view('auth.edit');
    }

    public function update()
    {
        request()->validate([
            'old_password' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $currentPassword = auth()->user()->password;
        $old_password = request('old_password');

        if(Hash::check($old_password, $currentPassword)){
            auth()->user()->update([
                'password' => bcrypt(request('password')),
            ]);
            return back()->with('success','Password telah diganti');

        } else {
            return back()->withErrors(['old_password' => 'Pastikan password sesuai']);
        }
    }


}
