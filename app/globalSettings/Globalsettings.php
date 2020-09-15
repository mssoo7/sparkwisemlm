<?php

namespace App\globalSettings;
use Illuminate\Support\Facades\DB;
class Globalsettings{
    
    public $data;
    public $title,$content;
    public $global_settings=array();
    public function __construct()
    {
       
        $global_settings=array();
        $data=DB::table('settings')->get();

        
 foreach($data as $key=>$value){

     $this->title=$value->title;
     $this->content=$value->content;

    $global_settings[$this->title]= $this->content;


 }
$this->global_settings= $global_settings;
 
    }


}