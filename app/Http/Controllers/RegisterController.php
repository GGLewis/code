<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller{
    public function sign_up(Request $request ){

        $this->validate($request,[
           'name' => 'required',
           'firstname' => 'required',
           'email' => ['required','unique:users'],
           'password' => ['required','min:8']
        ]);
   
           $user = new User ();
           $user->name = $request->name;
           $user->firstname = $request->firstname;
           $user->email = $request->email;
           $user->password =  bcrypt($request->password);
           $user->save();
   
        notify()->success('success','Inscription effectuée avec succès');
       return back();
   
        }



        public function login(Request $request ){
            //validate the data
            $this->validate($request, [
                'email' => ['required', 'email'],
                'password' => ['required', 'min:8'],
            ]);
        
            //check if the user exists
            $user = User::where('email', $request->email)->first();
            if($user){
                //check if the password is correct
                if(Hash::check($request->password, $user->password)){
                    //login the user
                    Auth::login($user);
                    smilify('success', 'You are successfully reconnected');
                    return redirect()->route('home');
                }else{

                    notify()->error(' Incorrect password');
                    return back();
                }
            }else{

                notify()->error('User does not exist');
                return back();
            
        
        
        }
        }
}
