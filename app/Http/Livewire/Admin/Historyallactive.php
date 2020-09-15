<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Historyallactive extends Component
{
    use WithPagination;
    public $sortBy = 'user_name';
    public $sortDirection = 'asc';
    public $search = '';
    public $perPage=10;
    public function render()
    {
        // $main_raw_data=array();
        // $maindata=array();
        // $maindatafinal=array();
        // $count=1;
        $data['active_user']=DB::table('active_history')
        ->where(function ($query) {
            $query->where('user_name','like','%'.$this->search.'%')
            ->orWhere('user_id','like','%'.$this->search.'%')
            ->orWhere('activation_amount','like','%'.$this->search.'%')
            ->orWhere('active_date','like','%'.$this->search.'%')
            ->orWhere('active_by_name','like','%'.$this->search.'%')
            ->orWhere('active_by_user','like','%'.$this->search.'%');
            })
            ->orderBy($this->sortBy,$this->sortDirection) 
            ->paginate($this->perPage);
       
// foreach($raw_data as $raw){

//     if(empty($main_raw_data)){

//         $maindata['act_type'] = $raw->active_type;
//         $maindata['act_date'] = $raw->active_date;
//         $maindata['wallet_type'] =$raw->wallet_type;
//         $maindata['act_amount'] = $raw->activation_amount;

//     }
// if($raw->userid == $raw->active_by_id){
//       $maindata['user_name']=$raw->name;
//       $maindata['act_by_name']=$raw->name;
//       $maindata['user_id']=$raw->user_id;
//       $maindata['act_by_id']=$raw->user_id;
// }
// else{

//     if($raw->userid==$raw->user_id_main)
//     {
//         $maindata['user_name']=$raw->name;
//         $maindata['user_id']=$raw->user_id;
//     }
//     else
//     {
//         $maindata['act_by_name']=$raw->name;
//         $maindata['act_by_id']=$raw->user_id;
//     }
//   }

//   if($count%2==0)
//   {
//     array_push($maindatafinal,$maindata);
//     $maindata=array();
//   }
//   $count++;


// }

// $data['act_data']=$maindatafinal;

        return view('livewire.admin.historyallactive',$data);
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
