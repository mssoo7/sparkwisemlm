<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Transactionwallet extends Component
{
    public $userid,$showuserID;
    public $name,$mobile,$email,$main_wallet,$earning_wallet,$point_wallet,$status;

    public function render()
    {
        return view('livewire.admin.transactionwallet');
    }

    public function findUser(){


        $data= DB::table('user')->where('userid',$this->userid)->exists();
        if($data){

            $user= DB::table('user')->where('userid',$this->userid)->get();
       
        $this->showuserID=$user[0]->userid;
        $this->name=$user[0]->name;
        $this->mobile=$user[0]->mobile;
        $this->email=$user[0]->email;
        $this->main_wallet=$user[0]->main_wallet;
        $this->earning_wallet=$user[0]->current_bal;
        $this->point_wallet=$user[0]->point_wallet;
        $this->status=$user[0]->status;
    
        }else{

            session()->flash('msgerror', 'User Not Exist!');
        }

            }
     public function updateWallet($id){

dd($id);                

            }

        }
