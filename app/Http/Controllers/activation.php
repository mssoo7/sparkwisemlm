<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\globalSettings\Globalsettings;
use App\Http\Livewire\User\Tree;

class activation extends Controller
{
  
    public $result=array(1,3,5,11);
    public $inc=5;
    public $last;
    public $while_status = true;


    

    public function operation(Request $req){
       
       $name= $req->input('name');
       $mobile= $req->input('mobile');
       $email= $req->input('email');
       $sponserid= $req->input('sponser');
       $amount=$req->input('amount');
       $userCode=$req->input('userCode');
       $date=date('Y-m-d h:i:s');
       $year=date('Y');
       $validity_days=30;
       $extra_days=0;
       $total_validity_day=$validity_days+$extra_days;
        // dd($total_validity_day);
 

       $userCheck=DB::table('user')->where('email',$email)
       ->orwhere('mobile',$mobile)->exists();

       if($userCheck){

        $getID=DB::table('user')->where('email',$email)->orwhere('mobile',$mobile)->select('id','index_no')->get();

        $userid=$getID[0]->id;
        $index_no=$getID[0]->index_no;

        $checkOrder=DB::table('shoping_income')->where('userid',$userid)->
           


       }
       else{

           $getSponserId=DB::table('user')->where('userid',$sponserid)->select('id')->get();
        foreach($getSponserId as $sponerID){
        $sponser = $sponerID->id;
            }

            $getLastUser=DB::table('user')->where('sponsor_id',$sponser)->select('id')->orderByDesc('id')->limit(1)->get();

         if(sizeof($getLastUser)==0){

           $indexNo=1;

         }else{

          $lastUser= $getLastUser[0]->id;
          $getIndexNo=DB::table('user')->where('id',$lastUser)->select('index_no')->get();

         $indexNo= $getIndexNo[0]->index_no + 1;
       
         }

            $getLastID=DB::table('user')->select('id')->orderByDesc('id')->limit(1)->get();

           $lastID=$getLastID[0]->id;

            $id=DB::table('user')->insertGetId([

                'name' => $name,
                'mobile' => $mobile,
                'email' => $email,
                'sponsor_id' => $sponser,
                'userid' => $userCode.$year.($lastID+1),
                'index_no' => $indexNo,
                'join_date' => $date,
                'expire_date' => (date('Y-m-d h:i:s', strtotime($date.'+'.$total_validity_day.'days'))),
                'user_left_days' => $validity_days,
                'extra_days' => $extra_days

            ]);

        if($id>=1){

        $comissoin=$amount*30/100;

        $inserToshopping=DB::table('shoping_income')->insert([

            'userid' => $id,
            'sponser_id' =>$sponser, 
            'under_team_id' =>$sponser,
            'order_no' =>1,
            'amount' =>$amount,
            'date' => $date 

                ]);
                
            }
            if($inserToshopping==true){

                $checkSponerStatus=DB::table('user')->where('id',$sponser)->select('renew_status','holding_status','main_wallet','holding_wallet','lost_wallet')->get();

                foreach($checkSponerStatus as $status){
                    if($status->renew_status==1){
                         $main_wallet=$status->main_wallet;
                        $updatSponsor=DB::table('user')->where('id',$sponser)->update([

                            'main_wallet'=> $main_wallet+$comissoin

                            ]);
                    }
                    elseif($status->holding_status==1){

                        $holding_wallet=$status->holding_wallet;
                        $updatSponsor=DB::table('user')->where('id',$sponser)->update([

                        'holding_wallet' => $holding_wallet+$comissoin

                            ]);

                    }else{

                        $lost_wallet=$status->lost_wallet;
                        $updatSponsor=DB::table('user')->where('id',$sponser)->update([

                            'lost_wallet' => $lost_wallet+$comissoin

                            ]);

                    }
                }
                

            }

        }



//hello

        // $this->last=end($this->result);
  
        // if($this->last < $this->index_no)  //11<21
        // {
        //     while($this->while_status)
        //      {
        //         $this->while_status = false;
        //        $this->last = $this->last + $this->inc;   //16+5=21
                 
        //         if($this->last < $this->index_no)   //21<21
        //          {
        //             $this->while_status = true;
        //          }
        //         elseif($this->last == $this->index_no)
        //         {   
        //             echo '20% big';
        //         }
        //         elseif($this->last > $this->index_no)
        //         {
        //             echo '30% big';
        //         }
        //     } 
            

        // }
        // else
        // {
        //     //11 ya 11 se chota

        //     if(in_array($this->index_no, $this->result))
        //     {
        //         echo '20% small';
        //     }
        //     else{

        //         echo '30% small';
        //     }
        // }
    
    }

}
