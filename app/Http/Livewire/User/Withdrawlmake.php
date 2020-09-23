<?php

namespace App\Http\Livewire\User;

use App\globalSettings\Globalsettings;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Withdrawlmake extends Component
{
    public $Ewallet;
    public $amount,$receive_amt;

    public function render()
    {
        $id=session()->get('u_auto_id');

        $Eligiblty=DB::table('user')->where('id',$id)->select('e_wallet')->get();

        $this->Ewallet=$Eligiblty[0]->e_wallet;


        return view('livewire.user.withdrawlmake');
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'amount' => 'min:150|numeric',
         
        ]);
    }

    public function widthdrawl(Globalsettings $data){

      

        $id=session()->get('u_auto_id');
        $validatedData = $this->validate([
            'amount' => 'min:150|numeric',
        ]);
        $charges=$data->global_settings['withdrawal_charge'];
        $min_widthdrawl=$data->global_settings['minimum_withdrawal'];

        if($this->Ewallet>=$min_widthdrawl)
        {
            if($this->amount<=$this->Ewallet){
                DB::beginTransaction();
                try {
                $deduction=$this->amount*($charges/100);
                $rec_amt=$this->amount-$deduction;
                
                DB::table('withdrawal_request')->insert([
                   'userid'=>$id, 
                    'req_amt'=>$this->amount,
                    'amount'=>$rec_amt,
                    'charge'=>$deduction,
                    'date'=>date('Y-m-d h:i:s')
                ]);
                DB::table('user')->where('id',$id)->update([
                    'e_wallet'=>$this->Ewallet-$this->amount
                ]);

                DB::commit();
                session()->flash('success',"Widhdrawl Request Successfully Sent!");
                redirect('/withdrawl/user/withdrawlmake');

            } catch (\Exception $e) {
                DB::rollback();
                session()->flash('error',"Somthings went Wrong!");
                }
    
            }else{
                session()->flash('error',"Insufficient E-Wallet!");

                redirect('/withdrawl/user/withdrawlmake');

            }
        }else{

            return redirect('/dashboard');
            
        }
      
    }
}
