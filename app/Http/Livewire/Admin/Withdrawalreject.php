<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
class Withdrawalreject extends Component
{
    use WithPagination;

    public $sortBy = 'user_name';

    public $sortDirection = 'asc';
    public $perPage = 10;
    public $search = '';
    public function render()
    {
        
        $data['rejected']=DB::table('withdrawal_table')
        ->where('status','Rejected')
        ->where(function ($query) {
        $query->where('user_name','like','%'.$this->search.'%')
        ->orWhere('user_id','like','%'.$this->search.'%')
        ->orWhere('req_amt','like','%'.$this->search.'%')
        ->orWhere('date','like','%'.$this->search.'%')
        ->orWhere('payment_date','like','%'.$this->search.'%')
        ->orWhere('remark','like','%'.$this->search.'%');
        }) 
        ->orderBy($this->sortBy,$this->sortDirection)->paginate($this->perPage);

        return view('livewire.admin.withdrawalreject',$data);
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
