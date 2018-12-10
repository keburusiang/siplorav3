<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
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
    protected $redirectTo = '/';

    public function showRegistrationForm(){
        return view('Auth/res');
    }

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


        return Validator::make($data,[
            'namaDepan' => ['required', 'string', 'max:255'],
            'namaBelakang' => ['required', 'string', 'max:255'],
            'date' => ['required'],
            'telp' => ['required', 'max:14' , 'min:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);
    }

    // public function store(Request $request){
    //     $messages = [
    //         'required' => 'Harus Di isi.',
    //         'email.required' => 'We need to know your e-mail address!',
    //         'same'    => 'The :attribute and :other must match.',
    //     ];
        
    //     $validator = Validator::make($request->all(),$messages, [
    //         'namaDepan' => ['required', 'string', 'max:255'],
    //         'namaBelakang' => ['required', 'string', 'max:255'],
    //         'date' => ['required'],
    //         'telp' => ['required', 'max:14' , 'min:8'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:6'],
    //     ]);

        

    //     if ($validator->fails()) {
    //         return redirect('/register')
    //                     ->withErrors($validator)
    //                     ->withInput();
    //     } else{
    //         $users = new User();
    //         $users -> namaDepan = $request->namaDepan;
    //         $users -> namaBelakang = $request->namaBelakang;
    //         $users -> notelp = $request->telp;
    //         $users -> tanggalLahir = $request->date;
    //         $users -> email = $request->email;
    //         $users -> password = bcrypt($request->password);
    //         $users->save();
    //     }

        
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'namaDepan' => $data['namaDepan'],
            'namaBelakang' => $data['namaBelakang'],
            'notelp' => $data['telp'],
            'tanggalLahir' => $data['date'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
