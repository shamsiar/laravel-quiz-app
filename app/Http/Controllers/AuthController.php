<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        if (Auth::check()) {

            return redirect()->route("home");
        }
        return view('frontend.login');
    }

    public function register()
    {
        return view('frontend.register');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // dd(Auth::user()->is_admin);
            if (Auth::user()->is_admin) {
                return redirect()->route('dashboard')->withSuccess('You have Successfully loggedin');
            } else {
                return redirect()->route('home')->withSuccess('You have Successfully loggedin');
            }
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($request->password == $request->repassword) {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('home')->withSuccess('You have Registered Successfully.');
            }

            // return redirect()->route('home')->withSuccess('Great! You have Registered Successfully.');
        } else {
            return redirect('login')->withSuccess('Password does not match.');
        }
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
