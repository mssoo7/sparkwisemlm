<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
class Withdrawalpending extends Component
{
    public $sortBy = 'name';
public $form_id;
    public $sortDirection = 'asc';
    public $perPage = 10;
    public $search = '';

    public function render()
    {
        $data['withdrawal_pending']=DB::table('withdrawal_pending')
        ->where(function ($query) {
        $query->where('name','like','%'.$this->search.'%')
        ->orWhere('userid','like','%'.$this->search.'%')
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
}
