<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Historytransactionpage extends Component
{
    use WithPagination;
    public $sortBy = 'id';
    public $sortDirection = 'asc';
    public $search = '';
    public $perPage=10;
    public function render()
    {

        $id= $id=session()->get('u_auto_id');
        $data['transact']=DB::table('business_income')->where('userid',$id)->where(function ($query) {
            $query->where('amount','like','%'.$this->search.'%')
            ->orWhere('wallet_type','like','%'.$this->search.'%')
            ->orWhere('amount','like','%'.$this->search.'%')
            ->orWhere('date','like','%'.$this->search.'%')
            ->orWhere('trans_type','like','%'.$this->search.'%')
            ->orWhere('Remark','like','%'.$this->search.'%');
            })
            ->orderBy($this->sortBy,$this->sortDirection) 
            ->paginate($this->perPage);
        
        return view('livewire.user.historytransactionpage',$data);
    }
}
