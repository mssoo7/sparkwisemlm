<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class leadership extends Controller
{

    public function leadershipBonus(){

    //     $getDate=DB::table('shoping_income')->where('userid',$id)->select(month('date'))

    // }
    // return view('admin/leadership-bonus');
        $bonus = DB::table('leadership_bonus')->get();

        return view('admin.leadership-bonus',compact('bonus'));
    }
}
