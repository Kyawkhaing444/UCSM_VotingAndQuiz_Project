<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quiz_user;
use Session;
use Auth;

class CodeController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:code');
    }

    public function showLoginForm()
    {
      Session::flash('Message','If you are first year student , we have plan for you.Plz go to Technology Club counter and get the code to log in , thank you !');
      return view('auth.code');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
          'name' => 'required',
          'password' => 'required',
          'name_c' => 'required'

      ]);

      // Attempt to log the user in
      if (Auth::guard('code')->attempt([ 'name' => $request->name , 'password' => $request->password ], $request->remember)) {
        // if successful, then redirect to their intended location

            Quiz_user::where('name','=',$request->name)->update(['sec_name' => $request->name_c]);

            $request->session()->put('name', $request->name);



            return redirect('Homequiz');


      }else{
        Session::flash('Message','Incorrect ID or Password. Please , Contact technology club\'s counter.');
        return redirect()->back()->withInput($request->only('password', 'remember'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('password', 'remember'));
    }
}
