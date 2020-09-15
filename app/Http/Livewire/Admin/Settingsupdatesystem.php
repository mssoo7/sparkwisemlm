<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\globalSettings\Globalsettings;
use Illuminate\Support\Facades\DB;

class Settingsupdatesystem extends Component
{
    public $company_phone,$company_email,$company_address,$trans_code,$user_code,$admin_referral_id,$global_admin_name,$global_url,$store_url,$news_ticker;

    public function mount(Globalsettings $data){
            
    $this->company_phone=$data->global_settings['company_phone'];
    $this->company_email=$data->global_settings['company_email'];
    $this->company_address=$data->global_settings['company_address'];
    $this->trans_code=$data->global_settings['trans_code'];
    $this->user_code=$data->global_settings['user_code'];
    $this->admin_referral_id=$data->global_settings['admin_referral_id'];
    $this->global_admin_name=$data->global_settings['global_admin_name'];
    $this->global_url=$data->global_settings['global_url'];
    $this->store_url=$data->global_settings['store_url'];
    $this->news_ticker=$data->global_settings['news_ticker'];

         
      }

    public function render()
    {
        return view('livewire.admin.settingsupdatesystem');
    }

    // public function updated($field){

    //     $this->validateOnly($field, [
    //         'company_phone' => 'required',
    //         'company_email' => 'required',
    //         'company_address' => 'required',
    //         'trans_code' => 'required',
    //         'user_code' => 'required',
    //         'admin_referral_id' => 'required',
    //         'global_admin_name' => 'required',
    //         'global_url'=> 'required',
    //         'store_url'=> 'required',
    //         'news_ticker'=> 'required',

      
    //     ]);

    // }

    public function companyPhone(){
        $validatedData = $this->validate([
            'company_phone' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','company_phone')
        ->update([
            'content' => $this->company_phone

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function companyEmail(){
        $validatedData = $this->validate([
            'company_email' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','company_email')
        ->update([
            'content' => $this->company_email

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function companyAddress(){
        $validatedData = $this->validate([
            'company_address' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','company_address')
        ->update([
            'content' => $this->company_address

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function transCode(){
        $validatedData = $this->validate([
            'trans_code' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','trans_code')
        ->update([
            'content' => $this->trans_code

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function userCode(){
        $validatedData = $this->validate([
            'user_code' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','user_code')
        ->update([
            'content' => $this->user_code

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function adminReferralId(){
        $validatedData = $this->validate([
            'admin_referral_id' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','admin_referral_id')
        ->update([
            'content' => $this->admin_referral_id

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function globalAdmiName(){
        $validatedData = $this->validate([
            'global_admin_name' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','global_admin_name')
        ->update([
            'content' => $this->global_admin_name

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function globalUrl(){
        $validatedData = $this->validate([
            'global_url' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','global_url')
        ->update([
            'content' => $this->global_url

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function storeUrl(){
        $validatedData = $this->validate([
            'store_url' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','store_url')
        ->update([
            'content' => $this->store_url

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function newsTicker(){
        $validatedData = $this->validate([
            'news_ticker' => 'required',
        ]);

        $Update=DB::table('settings')
        ->where('title','news_ticker')
        ->update([
            'content' => $this->news_ticker

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }


}
