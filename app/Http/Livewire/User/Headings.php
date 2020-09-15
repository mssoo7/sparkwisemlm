<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Headings extends Component
{

    public $heading_name;
    public $page_name;
   public function mount($heading_name,$page_name){
       
       $this->heading_name=$heading_name;
       $this->page_name=$page_name;

        }
    public function render()
    {
        return view('livewire.user.headings');
    }
}
