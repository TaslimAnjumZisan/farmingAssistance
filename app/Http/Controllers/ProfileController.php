<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    function profileView()
    {
        $usertable = new UserModel();
        if (session()->has('username')) {
            $user = session()->get('username');
            // $investor="1";
            // $investor = $usertable->where('id', $user);

            if (!empty($user)) {
                $name = $usertable->where('username', $user)->pluck('name');
                foreach ($name as $n) {
                    $uname = $n;
                }
                $contact = $usertable->where('username', $user)->pluck('contact');
                foreach ($contact as $c) {
                    $ucontact = $c;
                }
                $email = $usertable->where('username', $user)->pluck('email');
                foreach ($email as $e) {
                    $uemail = $e;
                }
                $password = $usertable->where('username', $user)->pluck('password');
                foreach ($password as $p) {
                    $upassword = $p;
                }
                $acc = $usertable->where('username', $user)->pluck('bankaccountnumber');
                foreach ($acc as $a) {
                    $uaccountnumber= $a;
                }
                $dob = $usertable->where('username', $user)->pluck('dob');
                foreach ($dob as $d) {
                    $udob = $d;
                }
                $nid = $usertable->where('username', $user)->pluck('nidnumber');
                foreach ($nid as $n) {
                    $unid = $n;
                }
                return view("profile")->with("uname", $uname)
                    ->with("username", $user)
                    ->with("ucontact", $ucontact)
                    ->with("uemail", $uemail)
                    ->with("upassword", $upassword)
                    ->with("uaccountnumber", $uaccountnumber)
                    ->with("udob", $udob)
                    ->with("unid", $unid);
            } else {
                $output = "Wrong Info";
                return $output;
            }
        }
    }
    function profileUpdate(Request $request)
    {
    $user = session()->get('username');
    $usetable = new UserModel();
    $userupdate = $usetable->where('username', $user)->update(['name' => $request->name]);
    $userupdate = $usetable->where('username', $user)->update(['contact' => $request->contact]);
    $userupdate = $usetable->where('username', $user)->update(['email' => $request->email]);
    $userupdate = $usetable->where('username', $user)->update(['password' => $request->password]);
    $userupdate = $usetable->where('username', $user)->update(['bankaccountnumber' => $request->accountnumber]);
    $userupdate = $usetable->where('username', $user)->update(['dob' => $request->dob]);
    $userupdate = $usetable->where('username', $user)->update(['nidnumber' => $request->nidnumber]);
    return redirect()->intended('/profile');       
    }

    function deleteProfile(Request $request)
    {
        $user = session()->get('username');
        $usetable = new UserModel();
        $userupdate = $usetable->where('username', $user)->delete();
        return redirect()->intended('/login');
    }
}

