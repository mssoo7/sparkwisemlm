<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\globalSettings\Globalsettings;
use Illuminate\Support\Facades\DB;

class Settingscmc extends Component
{
    public $cmcpool_limit_sponser,$cmcpool_limit_group,$cmcpool_limit_day;

    public function mount(Globalsettings $data){
            
    $this->cmcpool_limit_sponser=$data->global_settings['cmcpool_limit_sp'];
    $this->cmcpool_limit_group=$data->global_settings['cmcpool_limit_grp'];
    $this->cmcpool_limit_day=$data->global_settings['cmcpool_limit_day'];
         
      }
    public function render()
    {
        return view('livewire.admin.settingscmc');
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'cmcpool_limit_sponser' => 'required|numeric|min:1',
            'cmcpool_limit_group' => 'required|numeric|min:1',
            'cmcpool_limit_day' => 'required|numeric|min:1',
      
        ]);
    }

    public function cmcpooLimitSponser(){

        $validatedData = $this->validate([
            'cmcpool_limit_sponser' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','cmcpool_limit_sp')
        ->update([
            'content' => $this->cmcpool_limit_sponser

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }


    }
    public function cmcpooLimitGroup(){

        $validatedData = $this->validate([
            'cmcpool_limit_group' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','cmcpool_limit_grp')
        ->update([
            'content' => $this->cmcpool_limit_group

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }
    
    }
    public function cmcpooLimitDay(){

        $validatedData = $this->validate([
            'cmcpool_limit_day' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','cmcpool_limit_day')
        ->update([
            'content' => $this->cmcpool_limit_day

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

        
    }
}
