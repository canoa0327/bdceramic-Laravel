<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class MainController extends Controller
{
    public function index() 
    {
        $mAgent = array("iPhone","iPod","Android","Blackberry", 
        "Opera Mini", "Windows ce", "Nokia", "sony" );
        $chkMobile = false;
        for($i=0; $i<sizeof($mAgent); $i++){
            if(stripos( $_SERVER['HTTP_USER_AGENT'], $mAgent[$i] )){
                $chkMobile = true;
                break;
            }
        }

        if(session()->has('mgmt-login')) {
            $value = session()->get('mgmt-login');
        } else $value = false;

        if($chkMobile) {
            for($i = 1; $i <= 7; $i++) {
                $products = DB::table('product0' . $i)->limit(10)->get();
                $productImg = DB::table('files')->where('table_name', 'like', '%product0' . $i)->get();
            }
            return view('layouts.mobile.main', compact(['products', 'productImg']));
        } else return view('layouts.main', ['session' => $value]);
    }
}
