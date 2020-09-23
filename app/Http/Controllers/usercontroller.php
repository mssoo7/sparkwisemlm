<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class usercontroller extends Controller
{
    public function insert(Request $req){

        $response = Http::post('http://test.com');
        DB::beginTransaction();
        try{
        $wp_id=$response->wp_id;
        $wp_sponser=$response->wp_sponser;
        $cust_name=$response->name;
        $mobile=$response->mobile;
        $email=$response->email;
        $password=$response->password;
        $date=$response->join_date;
        $orderCheck=DB::table('user')->where('wp_id',$wp_id)->exists();
        if($orderCheck!=true){
            $getSponserID=DB::table('user')->where('wp_id',$wp_sponser)->select('id')->get();
            if(sizeof($getSponserID)>0){

                $sponserID=1;
            }else{

                $sponserID=$getSponserID[0]->id;
            }
        DB::table('user')->insert([
        'wp_id'=>$wp_id,
        'mobile'=>$mobile,
        'email'=>$email,
        'name'=>$cust_name,
        'password'=>$password,
        'sponsor_id'=>$sponserID,
        'date'=>$date
        ]);
        }
        DB::commit();
    }catch(\Exception $e){
        DB::rollback();
    }


  
}

}
