<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Ewallet extends Component
{
    use WithPagination;
    public $sortBy = 'id';
    public $sortDirection = 'desc';
    public $search = '';
    public $perPage=10;
    public $e_wallet;
    public function render()
    {
        $id=session()->get('u_auto_id');

    
        $eWallet=DB::table('user')->where('id',$id)->select('e_wallet')->get();
            $this->e_wallet=$eWallet[0]->e_wallet;
       
        $data['businessIncome']=DB::table('business_income')->where('userid',$id)->where('wallet_type','E-Wallet')->where(function ($query) {
            $query->where('amount','like','%'.$this->search.'%')
            ->orWhere('Remark','like','%'.$this->search.'%')
            ->orWhere('date','like','%'.$this->search.'%');
            })
            ->orderBy($this->sortBy,$this->sortDirection) 
            ->paginate($this->perPage);

        return view('livewire.user.ewallet',$data);
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
