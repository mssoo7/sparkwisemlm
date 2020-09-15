<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\globalSettings\Globalsettings;
use Illuminate\Support\Facades\DB;

class Settingspointwalletuse extends Component
{
    public $point_wallet_require,$maximum_amt;
    public function mount(Globalsettings $data){

      $this->point_wallet_require=$data->global_settings['min_point_wallet'];
      $this->maximum_amt=$data->global_settings['max_point_wallet_use'];
       
    }
    public function render()
    {
        return view('livewire.admin.settingspointwalletuse');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'point_wallet_require' => 'required|numeric|min:1',
            'maximum_amt' => 'required|numeric|min:1',
      
        ]);
    }
    public function point_wallet(){

        $validatedData = $this->validate([
            'point_wallet_require' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','min_point_wallet')
        ->update([
            'content' => $this->point_wallet_require

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }
    public function maximaum_amt(){

        $validatedData = $this->validate([
            'maximum_amt' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','max_point_wallet_use')
        ->update([
            'content' => $this->maximum_amt

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }


    }
}
