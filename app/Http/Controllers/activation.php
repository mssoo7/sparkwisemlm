<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class activation extends Controller
{
  
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
       $extra_days=5;
       $holding_validity=90;
       $membership_days=$validity_days+$extra_days;
    
       $userCheck=DB::table('user')->where('email',$email)
       ->orwhere('mobile',$mobile)->exists();

       if($userCheck){
           
        DB::beginTransaction();
        try {

        // Getting User All Details
        $getID=DB::table('user')->where('email',$email)->orwhere('mobile',$mobile)->select('id','index_no','sponsor_id','renew_status','hold_wallet','holding_status','e_wallet','mebership_days')->get();

        $userid=$getID[0]->id;
        $index_no=$getID[0]->index_no;
        $sponser =$getID[0]->sponsor_id;
        $renew_status=$getID[0]->renew_status;
        $holding_wallet=$getID[0]->hold_wallet;
        $holding_status=$getID[0]->holding_status;
        $mebership_days=$getID[0]->mebership_days;
        $Ewallet=$getID[0]->e_wallet;
       
    //Getting sponser All Details
        $getSponser=DB::table('user')->where('id',$sponser)->select('renew_status','e_wallet','hold_wallet','sponsor_id','holding_status')->get();
        $sponserStatus=$getSponser[0]->renew_status;
        $sponserEwallet=$getSponser[0]->e_wallet;
        $sponserHoldWallet=$getSponser[0]->hold_wallet;
        $sponserHoldStatus=$getSponser[0]->holding_status;
        $grandParentID=$getSponser[0]->sponsor_id;

        // Checking user Order No

        $checkOrder=DB::table('shoping_income')->where('userid',$userid)->select('order_no')->orderByDesc('order_no')->limit(1)->get();

        if($checkOrder[0]->order_no >=1){
          
           //Get Grant Parent Details by grant parent id
            $getGrandParentStatus=DB::table('user')->where('id',$grandParentID)->select('renew_status','holding_status','e_wallet','hold_wallet')->get();
            $grandParenstatus=$getGrandParentStatus[0]->renew_status;
            $grantParentHoldStatus=$getGrandParentStatus[0]->holding_status;
            $granParentEwallet=$getGrandParentStatus[0]->e_wallet;
            $grandParentHoldWallet=$getGrandParentStatus[0]->hold_wallet;

            //Start Condition for comission given
            $order_no=$checkOrder[0]->order_no + 1;
            $index_array=array(1,3,5,11);
            $inc=5;
            $last_no=end($index_array);
            $while_status = true;
            if($last_no < $index_no){   // 11< big no

                while($while_status)
                {
                    $while_status=false;
                    $last_no=$last_no+$inc;    // 16+5
                if($last_no < $index_no){

                    $while_status=true;
                }
                elseif($last_no == $index_no){  // 20 %

                    // calling comission20 function herer..

                    $this->comission20($userid,$sponser,$grandParentID,$order_no,$amount,$renew_status,$mebership_days,$validity_days,$holding_status,$holding_wallet,$granParentEwallet,$grandParenstatus,$Ewallet,$grantParentHoldStatus,$grandParentHoldWallet,$holding_validity);
                }
                elseif($last_no > $index_no){ // 30%

            // calling comission30 function herer..

                    $this->comission30($userid,$sponser,$order_no,$amount,$renew_status,$mebership_days,$validity_days,$holding_status,$holding_wallet,$sponserEwallet,$sponserStatus,$Ewallet,$sponserHoldStatus,$sponserHoldWallet,$holding_validity);
            }
         }

            }
            else{
                if(in_array($index_no,$index_array)){ // 20%

                    // calling comission20 function herer..

                    $this->comission20($userid,$sponser,$grandParentID,$order_no,$amount,$renew_status,$mebership_days,$validity_days,$holding_status,$holding_wallet,$granParentEwallet,$grandParenstatus,$Ewallet,$grantParentHoldStatus,$grandParentHoldWallet,$holding_validity);

                }else{ // 30%

                     // calling comission30 function herer..

                $this->comission30($userid,$sponser,$order_no,$amount,$renew_status,$mebership_days,$validity_days,$holding_status,$holding_wallet,$sponserEwallet,$sponserStatus,$Ewallet,$sponserHoldStatus,$sponserHoldWallet,$holding_validity); 
                }
            }
 
        }

       DB::commit();

     
       session()->flash('Renewmsg',"Succssfully Renewed");

   } catch (\Exception $e) {
       DB::rollback();

       session()->flash('newmsg',"Somthings went Wrong!");
   }
    
    }

// user Acticvation
       else{

        DB::beginTransaction();
        try {

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
                'mebership_days' => $membership_days,
             
            ]);

        if($id>=1){

        $comissoin=$amount*30/100;

        $insertShoppingID=DB::table('shoping_income')->insertGetId([

            'userid' => $id,
            'sponser_id' =>$sponser, 
            'under_team_id' =>$sponser,
            'order_no' =>1,
            'amount' =>$amount,
            'comission' =>$comissoin,
            'date' => $date 

                ]);
                
            }
            if($insertShoppingID > 0){

                $checkSponerStatus=DB::table('user')->where('id',$sponser)->select('renew_status','e_wallet','hold_wallet','holding_status')->get();

                foreach($checkSponerStatus as $status){
                    if($status->renew_status==1){

                         $main_wallet=$status->e_wallet;
                        $updatSponsor=DB::table('user')->where('id',$sponser)->update([

                            'e_wallet'=> $main_wallet+$comissoin

                            ]);

                            DB::table('shoping_income')->where('id',$insertShoppingID)->update([
                                'wallet_type'=>'e_wallet'
                                    ]);

                            DB::table('business_income')->insert([
                                'userid'=>$sponser,
                                'amount'=>$comissoin,
                                'wallet_type'=>"E-Wallet",
                                'date'=>date('Y-m-d h:i:s'),
                                'trans_type'=>'Credit',
                                'Remark'=>"Fast Start Income"
                            ]);

                          
                    }
                    else{

                        $holding_wallet=$status->hold_wallet;
                        DB::table('user')->where('id',$sponser)->update([
    
                            'hold_wallet' => $holding_wallet+$comissoin
    
                                ]);

                        if($status->holding_status==0){

                        DB::table('user')->where('id',$sponser)->update([
    
                                'hold_wallet_days' =>$holding_validity,
                                'holding_status'=>1
        
                                    ]);

                        }
                        DB::table('shoping_income')->where('id',$insertShoppingID)->update([
                            'wallet_type'=>'h_wallet'
                                ]);

                        DB::table('business_income')->insert([
                            'userid'=>$sponser,
                            'amount'=>$comissoin,
                            'wallet_type'=>"H-Wallet",
                            'date'=>date('Y-m-d h:i:s'),
                            'trans_type'=>'Credit',
                            'Remark'=>"Fast Start Income"
                        ]);

                       
                    }
                }
             
            }

            DB::commit();

            session()->flash('newmsg',"Product Purchased Succsessfully!");
    
        } catch (\Exception $e) {
            DB::rollback();

            session()->flash('newmsg',"Somthings went Wrong!");
        }
        
        }

     return redirect('/activation'); 
     
    }

// define function for 30% comission 
    public function comission30($userid,$sponser,$order_no,$amount,$renew_status,$mebership_days,$validity_days,$holding_status,$holding_wallet,$sponserEwallet,$sponserStatus,$Ewallet,$sponserHoldStatus,$sponserHoldWallet,$holding_validity) {
        $insertShoppingID=DB::table('shoping_income')->insertGetId([

            'userid'=>$userid,
            'sponser_id' =>$sponser,
            'under_team_id' =>$sponser,
            'order_no' =>$order_no,
            'amount' =>$amount,
            'comission' => $amount*(30/100),
            'date' =>date('Y-m-d h:i:s')
        ]);

        DB::table('user')->where('id',$userid)->update([
                
            'under_team_id' =>$sponser
        ]);

if($insertShoppingID > 0){

    if($renew_status == 0){
        DB::table('user')->where('id',$userid)->update([

            'mebership_days'=>$mebership_days+$validity_days,
       
           ]);

        if($holding_status==1){

            DB::table('business_income')->insert([
                'userid'=>$userid,
                'amount'=>$holding_wallet,
                'wallet_type'=>"E-Wallet",
                'date'=>date('Y-m-d h:i:s'),
                'trans_type'=>'Credit',
                'trans_status'=>1,
                'Remark' =>"Transfer H-Wallet To E-Wallet"
            ]);

            DB::table('user')->where('id',$userid)->update([

                'e_wallet'=>$Ewallet+$holding_wallet,
                'hold_wallet' =>0,
                'holding_status'=>0,
                'hold_wallet_days'=>0,
                'renew_status'=>1
            ]);
        }
        else{

            DB::table('user')->where('id',$userid)->update([

            'renew_status' =>1,
             'mebership_days'=>$mebership_days+$validity_days
              
            ]);

        }
    }
            else{

                DB::table('user')->where('id',$userid)->update([

                 'mebership_days'=>$mebership_days+$validity_days
                  
                ]);
            }
        if($sponserStatus == 1){

            DB::table('user')->where('id',$sponser)->update([

                'e_wallet'=>$sponserEwallet+($amount*(30/100))
            ]);

            DB::table('business_income')->insert([
                'userid'=>$sponser,
                'amount'=>$amount*(30/100),
                'wallet_type'=>"E-Wallet",
                'date'=>date('Y-m-d h:i:s'),
                'trans_type'=>'Credit',
                'Remark'=>"Pass Up Income"
            ]);

            DB::table('shoping_income')->where('id',$insertShoppingID)->update([
                'wallet_type'=>'e_wallet'
                    ]);


        }else{

            DB::table('user')->where('id',$sponser)->update([

                'hold_wallet'=>$sponserHoldWallet+($amount*(30/100))

            ]);

            if($sponserHoldStatus==0){

                DB::table('user')->where('id',$sponser)->update([
                    'holding_status'=>1,
                    'hold_wallet_days'=>$holding_validity

                ]);


            }
            DB::table('business_income')->insert([
                'userid'=>$sponser,
                'amount'=>$amount*(30/100),
                'wallet_type'=>"H-Wallet",
                'date'=>date('Y-m-d h:i:s'),
                'trans_type'=>'Credit',
                'Remark'=>"Pass Up Income"
            ]);

          
            DB::table('shoping_income')->where('id',$insertShoppingID)->update([
                'wallet_type'=>'h_wallet'
                    ]);
        }
    }
    }

    // define function for 20% comission

    public function comission20($userid,$sponser,$grandParentID,$order_no,$amount,$renew_status,$mebership_days,$validity_days,$holding_status,$holding_wallet,$granParentEwallet,$grandParenstatus,$Ewallet,$grantParentHoldStatus,$grandParentHoldWallet,$holding_validity){
        $insertShoppingID=DB::table('shoping_income')->insertGetId([
            'userid'=>$userid,
            'sponser_id' =>$sponser,
            'under_team_id' =>$grandParentID,
            'order_no' =>$order_no,
            'amount' =>$amount,
            'comission' => $amount*(20/100),
            'date' =>date('Y-m-d h:i:s')
        ]);

        DB::table('user')->where('id',$userid)->update([
                
            'under_team_id' =>$grandParentID
        ]);

        if($insertShoppingID > 0){

            if($renew_status == 0){

                DB::table('user')->where('id',$userid)->update([

                    'mebership_days'=>$mebership_days+$validity_days,
               
                   ]);

                if($holding_status==1){

                    DB::table('business_income')->insert([
                        'userid'=>$userid,
                        'amount'=>$holding_wallet,
                        'wallet_type'=>"E-Wallet",
                        'date'=>date('Y-m-d h:i:s'),
                        'trans_type'=>'Credit',
                        'trans_status'=>1,
                        'Remark' =>"Transfer H-Wallet To E-Wallet"
                    ]);

                    DB::table('user')->where('id',$userid)->update([

                        'e_wallet'=>$Ewallet+$holding_wallet,
                        'hold_wallet' =>0,
                        'holding_status'=>0,
                        'hold_wallet_days'=>0,
                        'renew_status'=>1
                    ]);
                }
                else{

                    DB::table('user')->where('id',$userid)->update([

                    'renew_status' =>1,
                     'mebership_days'=>$mebership_days+$validity_days
                      
                    ]);

                }
    
            }
            else{

                DB::table('user')->where('id',$userid)->update([

                 'mebership_days'=>$mebership_days+$validity_days
                  
                ]);

            }
        if($grandParenstatus == 1){

            DB::table('user')->where('id',$grandParentID)->update([

                'e_wallet'=>$granParentEwallet+($amount*(20/100))

            ]);

            DB::table('business_income')->insert([
                'userid'=>$grandParentID,
                'amount'=>$amount*(20/100),
                'wallet_type'=>"E-Wallet",
                'date'=>date('Y-m-d h:i:s'),
                'trans_type'=>'Credit',
                'Remark'=>"Pass Up Income"
            ]);


            DB::table('shoping_income')->where('id',$insertShoppingID)->update([
                'wallet_type'=>'e_wallet'
                    ]);


        }else{

            DB::table('user')->where('id',$grandParentID)->update([
                'hold_wallet'=>$grandParentHoldWallet+($amount*(20/100))

            ]);
            
            if($grantParentHoldStatus==0){

                DB::table('user')->where('id',$grandParentID)->update([

                    'holding_status'=>1,
                    'hold_wallet_days'=>$holding_validity

                ]);

            }
            DB::table('business_income')->insert([
                'userid'=>$grandParentID,
                'amount'=>$amount*(20/100),
                'wallet_type'=>"H-Wallet",
                'date'=>date('Y-m-d h:i:s'),
                'trans_type'=>'Credit',
                'Remark'=>"Pass Up Income"
            ]);


            DB::table('shoping_income')->where('id',$insertShoppingID)->update([
                'wallet_type'=>'h_wallet'
                    ]);

        }
    }
    }

}
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



