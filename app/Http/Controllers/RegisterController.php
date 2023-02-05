<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;

class RegisterController extends Controller
{
    function getregister(Request $request)
    {
    
    $this->validate($request,
       [ 'name'=>'required','alpha',
       'username'=>'required|min:5|max:20|unique:investor,username',
       'contact'=>'required|max:14|min:11',
       'bankaccount'=>'required',
        'email'=>'required|email|unique:investor,email',
        'dob'=>'required',
        'nidnumber'=>'required|max:16',
        'password'=>'required|min:8',
        'file'=>'required'
    ]
    );
    if (isset($error))
    {
    $output="<h1>Submitted</h1>";
    $output.="name: ".$request->name;
    $output.="username: ".$request->username;
    $output.="<br>email: ".$request->email;
    $output.="<br>email: ".$request->dob;
    $output.="<br>contact: ".$request->contact;
    $output.="<br>nidnumber: ".$request->nidnumber;
    $output.="<br>bankaccount: ".$request->bankaccount;
    $output.="<br>password: ".$request->password;
    $output.="<br>file: ".$request->file;
    return $output;
    }
    else{
        $usetable=new UserModel();
        $usetable->name=$request->name;
        $usetable->username=$request->username;
        $usetable->contact=$request->contact;
        $usetable->email=$request->email;
        $usetable->password=$request->password;
        $usetable->dob=$request->dob;
        $usetable->nidnumber=$request->nidnumber;
        $usetable->bankaccountnumber=$request->bankaccount;
       
        $usetable->save();
        return redirect()->intended('/login');
    }
    }
    
}

?>
