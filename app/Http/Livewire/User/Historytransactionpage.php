<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Historytransactionpage extends Component
{
    public function render()
    {

        $id= $id=session()->get('u_auto_id');
        $data['transact']=DB::table('business_income')->where('userid',$id)->orderByDesc('id')->get();
        
        return view('livewire.user.historytransactionpage',$data);
    }
}
