<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Ewallet extends Component
{
    public $FatsUp,$PassUp;
    public function render()
    {
        $id=session()->get('u_auto_id');
        $Ewallet_FastUp=DB::table('shoping_income')->where('sponser_id',$id)->where('order_no',1)->where('wallet_type','e_wallet')->sum('comission');
        $Ewallet_PassUp=DB::table('shoping_income')->where('under_team_id',$id)->where('order_no','>',1)->where('wallet_type','e_wallet')->sum('comission');

        if($Ewallet_FastUp!=null){
            $this->FatsUp=$Ewallet_FastUp;
        }else{
        $this->FatsUp=0.00;
        }
        if($Ewallet_PassUp!=null){
            $this->PassUp=$Ewallet_PassUp;
        }else{
        $this->PassUp=0.00;
        }


        return view('livewire.user.ewallet');
    }
}
