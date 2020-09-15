<?php

namespace App\Http\Livewire\Admin;

use App\globalSettings\Globalsettings;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Settingswithdrawal extends Component
{

    public $withd_charg,$self_transfer_charge;
    public function mount(Globalsettings $data){

      $this->withd_charg=$data->global_settings['withdrawal_charge'];
      $this->self_transfer_charge=$data->global_settings['fund_trans_charge_self'];
       
    }

    public function render()
    {
      
        return view('livewire.admin.settingswithdrawal');
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'withd_charg' => 'required|numeric|min:1',
            'self_transfer_charge' => 'required|numeric|min:1',
      
        ]);
    }
    public function withdrawal_charge(){

        $validatedData = $this->validate([
            'withd_charg' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','withdrawal_charge')
        ->update([
            'content' => $this->withd_charg

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function self_transfer(){

        $validatedData = $this->validate([
            'self_transfer_charge' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','fund_trans_charge_self')
        ->update([
            'content' => $this->self_transfer_charge

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }


    }
}
