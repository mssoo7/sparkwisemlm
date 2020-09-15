<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class Kyc extends Component
{
    use WithFileUploads;
    public $name_on_docs,$docs_number,$scan_copy,$docs_type;
    public $ac_holder_name,$ac_number,$confirm_ac_number,$bank_name,$ifsc;
    public $bank_status,$docs_status;

    public function mount(){
        $id=session()->get('u_auto_id');
        $doc=DB::table('docs_kyc')->where('user_id',$id)->where('kyc_status',1)->get();
        $bank=DB::table('kyc_bank')->where('user_id',$id)->get();
        foreach($doc as $doc_status)
        {
            $this->docs_status=$doc_status->kyc_status;
        }
        foreach($bank as $bank_status)
        {
            $this->bank_status=$bank_status->kyc_status;
        }
     
        
    } 
    public function render()
    {
    $id=session()->get('u_auto_id');

    $data['doc_type']=DB::table('docs_type')->where('status',1)->get();
    $data['doc_check']=DB::table('docs_kyc')->where('user_id',$id)->get();
    $data['bankdetails']=DB::table('kyc_bank')->where('user_id',$id)->get();
       
        return view('livewire.user.kyc',$data);
    }

    public function updated($field)
{
    $this->validateOnly($field, [
        'docs_type' =>'required',
        'scan_copy' =>'',
        'docs_number'=>'required',
        'name_on_docs'  => 'required',
        'ac_number' =>'required',
        'confirm_ac_number' =>'required|same:ac_number',
        'bank_name'=>'required',
        'ifsc' =>'required',
        'ac_holder_name' => 'required',
        
    ]);
}

public function docsKyc(){

    $this->validate([
        'docs_type' =>'required',
        'scan_copy' =>'',
        'docs_number'=>'required',
        'name_on_docs'  => 'required',
    
    ]);

    $id=session()->get('u_auto_id');
    $docsCheck=DB::table('docs_kyc')
    ->where('doc_type',$this->docs_type)
    ->where('user_id',$id)->exists();
if($docsCheck){

session()->flash('msgdocserror', 'Are You Very Intelligent?');

}else{
    $docs=DB::table('docs_kyc')
        ->insert([
            'user_id'=>$id,
            'doc_type'=>$this->docs_type,
            'name'=>$this->name_on_docs,                                   'number'=>$this->docs_number, 
            'scan_copy'=>$this->scan_copy
        ]);

        if($docs){

        session()->flash('msgdocs', 'Document successfully updated.');
        }else{

        session()->flash('msgdocserror', 'Somthing Went Wrong.');
        }
    }
   return redirect('/account-setting/user/kyc');
}   

public function bankKyc(){

    $this->validate([
        'ac_number' =>'required',
        'confirm_ac_number' =>'required|same:ac_number',
        'bank_name'=>'required',
        'ifsc' =>'required',
        'ac_holder_name' => 'required',
    ]);

    $id=session()->get('u_auto_id');
    $bankCheck=DB::table('kyc_bank')
                ->where('acc_number',$this->ac_number)
                ->where('user_id',$id)->exists();
    if($bankCheck){

        session()->flash('msgbankerror', 'Bank A/C already exist.');

    }else{

  
    $bank=DB::table('kyc_bank')
        ->insert([
            'user_id'=>$id,
            'acc_holder_name'=>$this->ac_holder_name,                        'acc_number'=>$this->ac_number, 
            'IFSC'=>$this->ifsc,
            'bank_name' =>$this->bank_name
        ]);

        if($bank){

        session()->flash('msgbank', 'Bank Details successfully updated.');
        }else{

        session()->flash('msgbankerror', 'Somthing Went Wrong.');
        }
    }
   return redirect('/account-setting/user/kyc');
} 

}
