<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Dashboard extends Component
{
    public $total_user,$active_user,$hold_user,$blocked_user,$withdrawl_request,$total_purchase,$total_hold,$total_ewallet,$total_lost,$total_ehwallet,$total_income;
    public function render()
    {
        $this->total_user=DB::table('user')->count('id');
        $this->active_user=DB::table('user')->where('renew_status',1)->count('id');
        $this->hold_user=DB::table('user')->where('renew_status',0)->count('id');
        $this->blocked_user=DB::table('user')->where('status','blocked')->count('id');
        $this->withdrawl_request=DB::table('withdrawal_request')->where('status','Open')->count('id');
        $this->total_purchase=DB::table('shoping_income')->sum('amount');
        $this->total_ewallet=DB::table('user')->sum('e_wallet');
        $this->total_hold=DB::table('user')->sum('hold_wallet');
        $this->total_lost=DB::table('user')->sum('lost_wallet');
        $this->total_ehwallet=DB::table('user')->sum('eh_wallet');

    $this->total_income= $this->total_purchase-($this->total_ewallet+ $this->total_hold+ $this->total_lost+$this->total_ehwallet);
        return view('livewire.admin.dashboard');
    }
}
