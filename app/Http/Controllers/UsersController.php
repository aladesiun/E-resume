<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function register(Request $request){
        $this->validate($request,[
            'firstname'=>'required|max:100',
            'lastname'=>'required|max:100',
            'email'=>'required|unique:resumes',
            'password'=>'required|min:5',
            'confirm_password'=>'required|min:5'
        ]);
        if( !$this->validate($request,[
            'firstname'=>'required|max:100',
            'lastname'=>'required|max:100',
            'email'=>'required|unique:resumes',
            'password'=>'required|min:5',
            'confirm_password'=>'required|min:5'
        ])){
            HelperController::flashSession(false, 'email already taken' );

        }

        if ($request->confirm_password !== $request->password){
            HelperController::flashSession(false, 'password doesn\'t match' );

            return redirect('/signup');
        }

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            $credentials = ['email' => $request->email, 'password' => $request->password];
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                $userlog =Auth::user();

                HelperController::flashSession(true, 'login Successfully');

                return redirect('/');
            }
        }
        HelperController::flashSession(true, 'authentication failed, invalid details');
        return 'authentication failed';
    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:5'
        ]);
        $credentials = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            HelperController::flashSession(true, 'login  Successfully');

            return redirect('/');

        }
        HelperController::flashSession(true, 'authentication failed, invalid details');

        return redirect('/login');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
