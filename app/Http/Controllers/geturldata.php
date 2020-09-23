<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class geturldata
{

  public function add()
  {
    $out= $this->result(0,0);
    if($out){
     
    }else{
      echo 'error';
    }
  }

  public function result($a,$b){

    $sumStatus=false;

    $r=$a+$b;
    if($r>0){
      $sumStatus=true;
    
    }
    return $r;

  }
}
