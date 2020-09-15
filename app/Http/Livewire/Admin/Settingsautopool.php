<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\globalSettings\Globalsettings;
use Illuminate\Support\Facades\DB;

class Settingsautopool extends Component
{

    public $autopool_limit;

    public function mount(Globalsettings $data){

        $this->autopool_limit=$data->global_settings['autopool_limit'];
         
      }
    public function render()
    {
        return view('livewire.admin.settingsautopool');
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'autopool_limit' => 'required|numeric|min:1',
      
        ]);
    }
    public function autopool_update(){

        $validatedData = $this->validate([
            'autopool_limit' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','autopool_limit')
        ->update([
            'content' => $this->autopool_limit

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

    }

}
