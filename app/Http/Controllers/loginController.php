<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class loginController extends Controller
{
    function checklogin(Request $request)
    {
        
        $gotPassword="";

        $usertable=new UserModel();

        $givenUsername=$request->username;

        $givenPassword=$request->password;

        $testPassword = $usertable->where('username', $givenUsername)->pluck('password');
            foreach ($testPassword as $p) {
                $gotPassword = $p;
            }

            if ($gotPassword==$givenPassword)
            {
            session()->put("username",$givenUsername);
            return redirect()->intended('/dashboard');
            }
            else
            {
            $output="Given Input IS not Correct";
            return $output;
            }
    }
}
