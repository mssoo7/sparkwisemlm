<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Nav extends Component
{

    public $status,$renew_status,$name,$Ewallet,$leftDays;
    public function render()
    {
        $id=session()->get('u_auto_id');
        
        $userdata=DB::table('user')->where('id',$id)->select('renew_status','status','name','e_wallet','mebership_days')->get();

        foreach($userdata as $item){
            $this->status=$item->status;
            $this->renew_status=$item->renew_status;
            $this->name=$item->name;
            $this->Ewallet=(float)$item->e_wallet; // typecasting
            $this->leftDays=$item->mebership_days;
        }
        

        return view('livewire.user.nav');
    }
}
