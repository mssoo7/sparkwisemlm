<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
class Withdrawlreject extends Component
{
    use WithPagination;

    public $sortBy = 'id';
    public $sortDirection = 'desc';
    public $perPage = 10;
    public $search = '';
    public function render()
    {
        
        $id=session()->get('u_auto_id');
        $data['rejected']=DB::table('withdrawal_request')->where('userid',$id)
        ->where('status','Rejected')
        ->where(function ($query) {
        $query->where('req_amt','like','%'.$this->search.'%')
        ->orWhere('charge','like','%'.$this->search.'%')
        ->orWhere('amount','like','%'.$this->search.'%')
        ->orWhere('date','like','%'.$this->search.'%')
        ->orWhere('payment_date','like','%'.$this->search.'%')
        ->orWhere('remark','like','%'.$this->search.'%');
        }) 
        ->orderBy($this->sortBy,$this->sortDirection)->paginate($this->perPage);
        return view('livewire.user.withdrawlreject',$data);
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
