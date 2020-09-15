<?php

namespace App\Http\Livewire\Admin;
use App\globalSettings\Globalsettings;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Settingsmintransferamt extends Component
{
public $min_withd,$other_transfer_amt,$self_transfer_amt;

    public function mount(Globalsettings $data){
            
    $this->min_withd=$data->global_settings['minimum_withdrawal'];
    $this->other_transfer_amt=$data->global_settings['min_wlt_trans_other'];
    $this->self_transfer_amt=$data->global_settings['min_wlt_trans_self'];
         
      }
    public function render()
    {
        return view('livewire.admin.settingsmintransferamt');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'min_withd' => 'required|numeric|min:1',
            'other_transfer_amt' => 'required|numeric|min:1',
            'self_transfer_amt' => 'required|numeric|min:1',
      
        ]);
    }

    public function min_withd_amt(){

        $validatedData = $this->validate([
            'min_withd' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','minimum_withdrawal')
        ->update([
            'content' => $this->min_withd

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }


    }
    public function other_transfer(){

        $validatedData = $this->validate([
            'other_transfer_amt' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','min_wlt_trans_other')
        ->update([
            'content' => $this->other_transfer_amt

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

        
    }
    public function self_transfer(){

        $validatedData = $this->validate([
            'self_transfer_amt' => 'required|numeric|min:1',
        ]);

        $Update=DB::table('settings')
        ->where('title','min_wlt_trans_self')
        ->update([
            'content' => $this->self_transfer_amt

        ]);
        if($Update){

            session()->flash('message', 'successfully updated.');

        }else{

            session()->flash('error', 'Somthings Went Wrong.');

        }

        
    }

}
