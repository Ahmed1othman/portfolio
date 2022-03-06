<?php

use App\Models\Info;
use App\Models\ActiveSection;
use App\Models\Custom;
use App\Models\NavBar;
use Illuminate\Support\Facades\Route;

if (!function_exists('navbar_hlp')) {
    function navbar_hlp()
    {

        $data = NavBar::where('active',1)->get();
        $result=[];
        foreach($data as $row){
            if(Route::has($row->route)){
                $result[]=$row;
            }
        }

        return $result;
    }

}
if (!function_exists('customPages')) {
    function customPages()
    {
        return Custom::where('active',1)->get();
    }

}
if (!function_exists('websiteInfo_hlp')) {
    function websiteInfo_hlp($option)
    {
        $row= Info::whereActive(1)->where('option',$option)->first();
        if($row){
            return $row->value;
        }
        return null;
    }
}
if (!function_exists('showSection_hlp')) {
    function showSection_hlp($section_name)
    {
        $row= ActiveSection::whereActive(1)->where('section_name',$section_name)->first();
        if($row){

            return '';
        }
        return 'hide-secttion';
    }
}
if (!function_exists('navbar_hlp')) {
    function navbar_hlp()
    {

        $data = NavBar::where('active',1)->get();
        $result=[];
        foreach($data as $row){
            if(Route::has($row->route)){
                $result[]=$row;
            }
        }
        return $result;
    }

}
