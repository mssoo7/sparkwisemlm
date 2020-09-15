<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use config\session;
class Profile extends Component
{
 use WithFileUploads;

public $alt_mobile,$upi,$name,$email,$mobile,$address,$pincode,$dist,$state,$upi_hide;
// public $profile_image;

public function updated($field)
{
    $this->validateOnly($field, [

        'alt_mobile' => 'required|numeric|digits:10',
        'upi'=>'required'
    ]);
}

public function profileUpdate(){
    
    $id=session()->get('u_auto_id');
    
    // $this->profile_image->store('public/profile');
    $this->validate([

        'alt_mobile' => 'required|numeric|digits:10'
    
    ]);

    if($this->upi_hide != ""){
         DB::table('user')
            ->where('id',$id)
            ->update(['alt_mobile' => $this->alt_mobile]);

    }else{
     DB::table('user')
        ->where('id',$id)
        ->update(['alt_mobile' => $this->alt_mobile, 'upi' => $this->upi]);
    }
    session()->flash('messageprofile', 'Profile successfully updated.');
}

public function updateAdress(){

    $id=session()->get('u_auto_id');

    DB::table('kyc_address')
    ->updateOrInsert(
        ['user_id' => $id],
        ['pincode' =>$this->pincode,
                'address' =>$this->address, 
                'dist' =>$this->dist,
                'state' =>$this->state
            ]);
 
    session()->flash('messageaddres', 'Address successfully updated.');

    // $users_id = DB::table('kyc_address')->where('user_id', $id)->exists();
    // if($users_id){

    //     DB::table('kyc_address')->where('user_id', $id)
    //     ->update([
    //         'pincode' =>$this->pincode,
    //         'address' =>$this->address, 
    //         'dist' =>$this->dist,
    //         'state' =>$this->state
    //         ]);
        
    // }else{



    // }
    



}

    public function render()
    {
        // $id=session()->get('u_auto_id');

        // $usertbl=DB::table('user')->select('name',
        //         'email','mobile','alt_mobile','upi')->where('id',$id)->get();

      
        //         // dd($data['user']);
        //         //  var_dump($data['user'][0]);
        //         // echo $user->name;
        // $this->name = $usertbl['name'];
        // dd($this->name);
        return view('livewire.user.profile',);
    }

    public function mount()
    {
        $id=session()->get('u_auto_id');
        $usertbl=DB::table('user')->select('name',
        'email','mobile','alt_mobile','upi')->where('id',$id)->get();

        $addresstbl=DB::table('kyc_address')->select('address',
        'pincode','dist','state')->where('id',$id)->get();


    $this->name=$usertbl[0]->name;
    $this->email=$usertbl[0]->email;
    $this->mobile=$usertbl[0]->mobile;
    $this->alt_mobile=$usertbl[0]->alt_mobile;
    $this->upi=$usertbl[0]->upi;
    $this->upi_hide=$usertbl[0]->upi;


foreach($addresstbl as $addrs)
{
  
        $this->address=$addrs->address;
        $this->pincode=$addrs->pincode;
        $this->dist=$addrs->dist;
        $this->state=$addrs->state;
}
     

          

  }
}
