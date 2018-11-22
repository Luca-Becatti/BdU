<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = 'pareri';

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
    	$messages = [
    			'nome.required' => 'Nome obbligatorio',
    			'nome.string' => "Il Nome deve essere composto da soli caratteri",
    			'nome.max' => "Il nome può contenere massimo 255 caratteri",
    			'password.confirmed' => 'La conferma della password non corrisponde',
    			//il campo Edificio_incongruo non è necessario perchè quando non viene passato il valore di default è 0.
    	];
    	
        return Validator::make($data, [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:bdu_utenti', //Modificata la riga. bdu_utenti prima era users
            'password' => 'required|string|min:4|confirmed',
        ],$messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    	
        $user =  User::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        /*
        $user
        ->roles()
        ->attach(Role::where('name', 'guest')->first());
       */
        return $user;
    }
}
