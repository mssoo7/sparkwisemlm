<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Directinactiveuser extends Component
{
    use WithPagination;
    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $search = '';
    public $perPage=10;
    public function render()
    {
        $id=session()->get('u_auto_id');

        $data['myteam']=DB::table('user')->where('under_team_id',$id)->where('status','Blocked')->where(function ($query) {
            $query->where('name','like','%'.$this->search.'%')
            ->orwhere('status','like','%'.$this->search.'%');
            })
            ->orderBy($this->sortBy,$this->sortDirection) 
            ->paginate($this->perPage);

        return view('livewire.user.directinactiveuser',$data);
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
