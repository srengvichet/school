<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Mail;
use DB;
use App\Mail\ConfirmationEmail;
use Illuminate\Auth\Events\Registered;

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
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
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

    public function register(Request $request){
        $this->validator($request->all())->validate();
        event(new Registered($user= $this->create($request->all())));
        //php artisan make:mail ConfirmationEmail
        Mail::to($user->email)->send(new ConfirmationEmail($user));
        return redirect(route('login'))->with('status',"Please confirmed your email address.");
    }


    // public function register(Request $request){
    //     $input = $request->all();
        
    //     $validator = Validator::make($request->all(),[
    //         'name' =>'required|max:255',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password'=>'required|min:6|confirmed',
    //     ]);
    //     if($validator->passes()){
    //         $data = $this->create($input)->toArray();
    //         $data['token'] = str_random(25);

    //         DB::beginTransaction();
    //         try{
    //             $user = User::find($data['id']);
    //             $user->token = $data['token'];
    //             // dd($user->token);//"te1Fkr4qUhQb1W4cdSaB39haM
    //             $user->save();
    //             //emails.confirmation in resources/view/mails/confirmation.php
    //             Mail::send('emails.confirmation', $data, function($message) use ($data){
    //                 $message->to($data['email']);
    //                 $message->subject('Registeration Confirmation');
    //             });
    //         }catch(Exception $e){
    //             DB::rollback();
    //             return back();
    //         }
    //         return redirect(route('login'))->with('status','Confirmation email has been send, please check your email!');
    //     }
    //     return redirect()->back()->with('status',$validator->errors());
    // }


    public function confirmation($token){
        $user = User::where('token',$token)->first();
        if(!is_null($user)){
            $user->confirmed = 1;
            $user->token = "";
            $user->save();
            return redirect(route('login'))->with('status','Your activation is completed!');
        }
        return redirect(route('login'))->with('status','Somethin went wrong! please check email again!');
    }
}
