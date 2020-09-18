<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Hwalletfaststart extends Component
{
    use WithPagination;
    public $sortBy = 'id';
    public $sortDirection = 'asc';
    public $search = '';
    public $perPage=10;
    public function render()
    {
        $id=session()->get('u_auto_id');
       
        $data['businessIncome']=DB::table('business_income')->where('userid',$id)->where('wallet_type','H-Wallet')->where(function ($query) {
            $query->where('amount','like','%'.$this->search.'%')
            ->orWhere('date','like','%'.$this->search.'%');
            })
            ->orderBy($this->sortBy,$this->sortDirection) 
            ->paginate($this->perPage);

        return view('livewire.user.hwalletfaststart',$data);
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
