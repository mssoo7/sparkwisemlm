<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
class Kycrequest extends Component
{
    use WithPagination;

    public $sortBy = 'name';

    public $sortDirection = 'asc';
    public $perPage = 10;
    public $search = '';

    public function render()
    {
      
        $data['kyc']=DB::table('user')
        ->where('kyc_status','=',1)
        ->where(function ($query) {
        $query->where('name','like','%'.$this->search.'%')
        ->orWhere('userid','like','%'.$this->search.'%')
        ->orWhere('mobile','like','%'.$this->search.'%')
        ->orWhere('join_date','like','%'.$this->search.'%')
        ->orWhere('status','like','%'.$this->search.'%');
        }) 
        ->select('userid','name','mobile','join_date','status')
        ->orderBy($this->sortBy,$this->sortDirection)->paginate($this->perPage);

        // dd($data['kyc']);

        return view('livewire.admin.kycrequest',$data);
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
