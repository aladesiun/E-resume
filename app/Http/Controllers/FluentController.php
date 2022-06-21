<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\str;
class FluentController extends Controller
{
    public function fluent(){
        echo "<h1>Hello from fluent controller</h1>";
        $str1 ="hello guys";
        $slice = str::of($str1." "."from the bosses at the top")->slug('--');
        echo $slice;
    }
}
