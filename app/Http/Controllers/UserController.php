<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email ])->first();
        // return $user->password    //// just to check that every thing is working;
        if(!$user|| !Hash::check($req->password, $user->password))

        {
            return "username or password not matched";
        }
        else{

            $req->session()->put('user',$user);
            return redirect('/'); 
        }


}
}
