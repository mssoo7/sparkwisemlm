<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Incomedirect extends Component
{
    use WithPagination;
    public $sortBy = 'user_name';
    public $sortDirection = 'asc';
    public $search = '';
    public $perPage=10;
    public function render()
    {
        $id=session()->get('u_auto_id');

        $data['shoppingincome']=DB::table('shoppingincome')->where('sponser_id',$id)->where('order_no',1)->where(function ($query) {
            $query->where('user_name','like','%'.$this->search.'%')
            ->orWhere('comission','like','%'.$this->search.'%')
            ->orWhere('amount','like','%'.$this->search.'%')
            ->orWhere('date','like','%'.$this->search.'%');
            })
            ->orderBy($this->sortBy,$this->sortDirection) 
            ->paginate($this->perPage);

        return view('livewire.user.incomedirect',$data);
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
