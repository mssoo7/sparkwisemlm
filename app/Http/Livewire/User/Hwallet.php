<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Hwallet extends Component
{
    use WithPagination;
    public $sortBy = 'id';
    public $sortDirection = 'desc';
    public $search = '';
    public $perPage=10;
  
    public $h_wallet;
    public function render()
    {
        $id=session()->get('u_auto_id');

    
        $hWallet=DB::table('user')->where('id',$id)->select('hold_wallet')->get();
            $this->h_wallet=$hWallet[0]->hold_wallet;
       
            

        $data['businessIncome']=DB::table('business_income')->where('userid',$id)->where(function ($q1){   
            $q1->where('wallet_type','H-Wallet')
            ->orWhere('trans_status',1);
                    })

                     // this means SELECT * FROM `business_income` WHERE `userid`=$id AND (`wallet_type`="H-wallet" OR `trans_status`=1)"
                     
            ->where(function ($query) {
            $query->where('amount','like','%'.$this->search.'%') 
            ->orWhere('Remark','like','%'.$this->search.'%')
            ->orWhere('date','like','%'.$this->search.'%');
            })
            ->orderBy($this->sortBy,$this->sortDirection) 
            ->paginate($this->perPage);


        return view('livewire.user.hwallet',$data);
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

}
