<?php

namespace App\Http\Livewire\Admin;

use App\globalSettings\Globalsettings;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Settingswithdrawal extends Component
{

    public $withd_charg,$minimum_withdrawal;
    public function mount(Globalsettings $data){

      $this->withd_charg=$data->global_settings['withdrawal_charge'];
      $this->minimum_withdrawal=$data->global_settings['minimum_withdrawal'];
       
    }

    public function render()
    {
      
        return view('livewire.admin.settingswithdrawal');
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'withd_charg' => 'required|numeric|min:1',
            'minimum_withdrawal' => 'required|numeric|min:1',
      
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
            'minimum_withdrawal' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','minimum_withdrawal')
        ->update([
            'content' => $this->minimum_withdrawal

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }


    }
}
