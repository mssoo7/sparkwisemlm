<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Changepassword extends Component
{

    public $current_password,$new_password,$confirm_password;
    public function render()
    {
        return view('livewire.user.changepassword');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'current_password' =>'required',
            'confirm_password'=>'required|same:new_password',
            'new_password' =>'required|min:6|max:16'
            
        ]);
    }
    public function changePass(){

    $this->validate([
        'current_password' =>'required',
        'confirm_password'=>'required|same:new_password',
        'new_password' =>'required|min:6|max:16'
       
    ]);
    $id=session()->get('u_auto_id');
    $userCheck=DB::table('user')
                ->where('id',$id)
                ->where('password',$this->current_password)->exists();
    if($userCheck){

        DB::table('user')->where('id',$id)->update(['password'=>$this->new_password]);

        session()->flash('msgpasssucess', 'Password Successfully Updated.');

    }else{
        session()->flash('msgpasserror', 'Current Password Wrong Enter.');

    }

    return redirect('/account-setting/user/changepassword');
}
}
