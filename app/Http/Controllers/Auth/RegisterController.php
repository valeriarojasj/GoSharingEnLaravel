<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class RegisterController extends Controller
{
  public function showRegisterForm(){

    return view('register');
  }

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
    {   $messages = [
      'first_name.required' => 'Ingrese su nombre',
      'first_name.max' => 'El nombre es muy largo',
      'email.required' => 'Ingrese su email',
      'email.max' => 'El email es muy largo',
      'email.unique' => 'El email ya existe',
      'email.email' => 'Ingrese un email válido',
      'password.required' => 'Ingrese su contraseña',
      'password.min' => 'La contraseña es muy corta, minimo 8 caracteres',
      'password.confirmed' => 'Las contraseñas no coinciden',
      'avatar.image' => 'El formato de imagen no es válido',
      'avatar.between' => 'Solo se permiten imagenes entre 10KB y 8MB',
      'last_name.required' => 'Ingrese su apellido',

      'last_name.max' => 'El apellido es muy largo',
    ];
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' =>['nullable', 'image', 'between:10,8000'],
            'last_name' => ['required','string', 'max:50' ]
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
      $ruta = '';
        if (isset($data['avatar'])) {
            //muevo el archivo
            $ruta = $data['avatar']->store('public');
            $ruta = basename($ruta);
          }

        return User::create([
            'first_name' => $data['first_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'last_name'=> $data['last_name'],
            'avatar'=>$ruta


        ]);

    }
    public function showRegistrationForm()
    {
        return view('auth/register');
    }
}
