<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class UserController extends Controller
{
    public function loginPageOrRedirect(Request $req){

        if(Auth::check()){
            return redirect('/home')->with('message','Jesteś już zalogowany');
        }else{
            // return 'red';
            return view('login',['req'=>$req]);
        }
    }


    public function authenticateUserOrError(Request $request){


        $this->validate($request, [
            'email' => 'required|email',
            'haslo' => 'required',
        ]);

        // return'2';

        $remember_me = $request->has('remember') ? true : false;

        if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('haslo')], $remember_me)){
            return redirect('/')->with('message','Zalogowano Poprawnie');
        }


        return redirect('/login')->with('loginError','Niepoprawne dane logowania');

        // $request->session()->flash('flash', ['loginError' => ' dane logowania']);
        // ->with('loginError', 'Niepoprawne dane logowania')

    }

    public function registerUserOrError(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'haslo' => 'required',
            'haslo2' => 'required',
            'name' => 'required',
        ]);

        // dd(1);

        // check if mail arleady exists " return back with msg
        $userExists = User::where('email', $request->get('email'))->first() ? true : false;
        if($userExists) return back()->with('loginError', 'Konto z takim adresem już istnieje');

        // check password | return with message
        $password_diff = ($request->get('haslo') != $request->get('haslo') ) ? true : false;
        if($password_diff) return back()->with('loginError', 'Oba pola z hasłem muszą być takie same');


        $user = new User();
        $user->password = Hash::make($request->get('haslo'));
        $user->email = $request->get('email');
        $user->name =  $request->get('name');
        $user->save();

        // dd($user);

        Auth::login($user);
        return redirect('/home');

    }

    public function logOutUser(Request $req){
        Auth::logout();
        return redirect('/')->with('message', 'Poprawnie wylogowano');
    }

}
