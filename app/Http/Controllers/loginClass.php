<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class loginClass extends Controller
{
    public function Login_button(Request $req){

        $user_id=$req->input('user_id');
        $password=$req->input('password');

        $users = DB::table('user')->where('userid', $user_id)
                    ->where('password',$password)->exists();
 
        if($users){
            $user = DB::table('user')->select('id','name','userid')
                    ->where('userid',$user_id)->get();
                   
        foreach($user as $item){
            
            $req->session()->put('user_id',$item->userid);
            $req->session()->put('user_name',$item->name);
            $req->session()->put('u_auto_id',$item->id);
                    }         

            return redirect('/dashboard');

                    }
                    else{
            return "User Id and Password Worng.";

                    }

    }
}
