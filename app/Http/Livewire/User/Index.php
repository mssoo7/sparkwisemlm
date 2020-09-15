<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Index extends Component
{
public $e_wallet;
    public function render()
    {
        $id=session()->get('u_auto_id');

        $user_data=DB::table('user')->where('id',$id)->get();

        // dd($user_data);
        foreach($user_data as $row)
        {
        $this->e_wallet=$row->main_wallet;
        }

        return view('livewire.user.index');
    }
}
