<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Nav extends Component
{

    public $status,$name,$Ewallet,$leftDays;
    public function render()
    {
        $id=session()->get('u_auto_id');
        
        $user=DB::table('user')->where('id',$id)->select('status','name','e_wallet','mebership_days');

        foreach($user as $item){

            $this->status=$item->status;
            $this->name=$item->name;
            $this->Ewallet=$item->e_wallet;
            $this->leftDays=$item->mebership_days;
        }
        

        return view('livewire.user.nav');
    }
}
