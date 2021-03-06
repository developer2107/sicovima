<?php

namespace SICOVIMA\Http\Controllers\Auth;

use SICOVIMA\User;
use SICOVIMA\bitacora;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SICOVIMA\Http\Controllers\Controller;
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
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'tipo' => 'required',
            'nombreUsuario_Usu' => 'required',

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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        
    }

    protected function login(){
        return view("Proyecto.Desarrollo.Login.Login");
    }

    protected function authenticate(Request $request){
        if (Auth::attempt(['name' => $request['name'], 'password' => $request['password'],'estado'=>'Activo'])) {
        // if (Auth::attempt(['name' => $request['name'], 'password' => $request['password']])) {
            bitacora::bitacoras('Ingreso','Ingreso de usuario: '.Auth::user()->name);

            return redirect('/');
        }
        return redirect('login');
    }

}
