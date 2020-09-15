<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Globalsettings\Globalsettings;
class Settingsactivation extends Component
{
    public $activation_amount,$point_wallet_topup,$sponsor_income_topup,$cmc_fund;
    public function mount(Globalsettings $data){

        $this->activation_amount=$data->global_settings['activation_amount'];
        $this->point_wallet_topup=$data->global_settings['point_wallet_topup'];
        $this->sponsor_income_topup=$data->global_settings['sponsor_income_topup'];

        $getCmc=DB::table('income_extra')->where('id',1)->where('tree',1)->get();

        foreach($getCmc as $item)
        {

        $this->cmc_fund=$item->cmc_fund;
        }
    
    }
    public function render()
    {
      
        return view('livewire.admin.settingsactivation');
    }

    public function updated($field){

        $this->validateOnly($field, [
            'activation_amount' => 'required|numeric|min:1',
            'point_wallet_topup' => 'required|numeric|min:1',
            'sponsor_income_topup' => 'required|numeric|min:1',
            'cmc_fund' => 'required|numeric|min:1',
        ]);
    }
    public function activationAmount(){
        $validatedData = $this->validate([
            'activation_amount' => 'required|numeric|min:1',
        ]);
        
        $Update=DB::table('settings')
        ->where('title','activation_amount')
        ->update([
            'content' => $this->activation_amount

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }

    public function pointWalletTopup(){
        $validatedData = $this->validate([
            'point_wallet_topup' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','point_wallet_topup')
        ->update([
            'content' => $this->point_wallet_topup

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }

    public function sponsorIncomeTopup(){
        $validatedData = $this->validate([
            'sponsor_income_topup' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','sponsor_income_topup')
        ->update([
            'content' => $this->sponsor_income_topup

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }


    }

    public function cmcFund(){
        $validatedData = $this->validate([
            'cmc_fund' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('income_extra')
        ->where('id',1)
        ->update([
            'cmc_fund' => $this->cmc_fund

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }


    }
}
