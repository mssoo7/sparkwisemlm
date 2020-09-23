<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class fetchorder extends Controller
{
    public function insert(Request $req){

        DB::beginTransaction();
        try{
        $userid=$req->userid;
        $sponserid=$req->sponserid;
        $orderid=$req->orderid;
        $amount=$req->amount;
        $validity=$req->validity;
        $date=date('Y-m-d h:i:s');
        $orderCheck=DB::table('fetch_order_table')->where('orderid',2)->exists();
        if($orderCheck!=true){
        DB::table('fetch_order_table')->insert([
        'wp_userid'=>$userid,
        'wp_sponserid'=>$sponserid,
        'orderid'=>$orderid,
        'amount'=>$amount,
        'validity'=>$validity,
        'date'=>$date
        ]);
        }
        DB::commit();
    }catch(\Exception $e){
        DB::rollback();
    }


  
}

 

}
