<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    //
    public static function flashSession($status, $msg){
        session()->flash('status', $status);
        session()->flash('message', $msg);
    }
}
