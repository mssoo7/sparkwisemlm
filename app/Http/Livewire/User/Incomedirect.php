<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Incomedirect extends Component
{
    public function render()
    {
        $id=session()->get('u_auto_id');

        $data['shoppingincome']=DB::table('shoppingincome')->where('sponser_id',$id)->where('order_no',1)->get();

        return view('livewire.user.incomedirect',$data);
    }
}
