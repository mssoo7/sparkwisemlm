<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
class Withdrawalpending extends Component
{
    public $sortBy = 'user_name';
    public $form_id;
    public $sortDirection = 'asc';
    public $perPage = 10;
    public $search = '';
    public $remark;

    public function render()
    {
        $data['withdrawal_pending']=DB::table('withdrawal_table')->where('status','Open')
        ->where(function ($query) {
        $query->where('user_name','like','%'.$this->search.'%')
        ->orWhere('user_id','like','%'.$this->search.'%')
        ->orWhere('date','like','%'.$this->search.'%')
        ->orWhere('req_amt','like','%'.$this->search.'%');
        }) 
        ->orderBy($this->sortBy,$this->sortDirection)->paginate($this->perPage);
        return view('livewire.admin.withdrawalpending',$data);
    }
    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        return $this->sortBy = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function viewDetails($tr_id){
        
        $this->form_id=$tr_id;

    }
    public function approved($id,$userid,$amount){

        DB::beginTransaction();
        try {
     
        DB::table('withdrawal_request')->where('id',$id)->update([
            'payment_date'=>date('Y-m-d h:i:s'),
            'remark'=>$this->remark,
            'status'=>'Closed'
        ]);

        DB::table('business_income')->insert([

            'userid'=>$userid,
            'trans_for'=>$userid,
            'amount'=>$amount,
            'wallet_type'=>'E-Wallet',
            'date'=>date('Y-m-d h:i:s'),
            'trans_type'=>'debit',
            'Remark'=>'Withdrawl From E-Wallet'
        ]);

        DB::commit();
        session()->flash('success',"Approved Successfully!");
        redirect('/admin/withdrawalpending');

    } catch (\Exception $e) {
        DB::rollback();
        session()->flash('error',"Somthings went Wrong!");
        }



    }
    public function rejected($id,$userid,$amount){

        DB::beginTransaction();
        try {

        DB::table('withdrawal_request')->where('id',$id)->update([
            'payment_date'=>date('Y-m-d h:i:s'),
            'remark'=>$this->remark,
            'status'=>'Rejected'
        ]);
            $getEwallet=DB::table('user')->where('id',$userid)->select('e_wallet')  ->get();
            $ewallet=$getEwallet[0]->e_wallet;
        DB::table('user')->where('id',$userid)->update([
            'e_wallet'=>$ewallet+$amount
        ]);

        DB::commit();
        session()->flash('success',"Request Rejected!");
        redirect('/admin/withdrawalpending');

    } catch (\Exception $e) {
        DB::rollback();
        session()->flash('error',"Somthings went Wrong!");
        }
     

    }
}
