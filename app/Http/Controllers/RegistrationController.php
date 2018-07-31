<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Mail\Welcome;
class RegistrationController extends Controller
{
    public function create (){

    	return view('registration.create');

    }

    public function store(){

      // validate the form

      $this->validate(request(), [

        'name' => 'required',

        'email' => 'required|email',

        'password' => 'required|confirmed' //makes sure that password field matches the password_confiramtion field

        //A field name followed by '_confirmation automatically correlates to
        //the original field name and can be used to confirm they are identical
      ]);

      // create and save the User

      $user = User::create(([
      'name' => request('name'),
      'email' => request('email'),
     'password' => bcrypt(request('password'))
   ]));

      // sign them in

      auth()->login($user);

    

      \Mail::to($user)->send(new Welcome($user)) ->
      // redirect to home

    	 redirect()->home();

    }
}
