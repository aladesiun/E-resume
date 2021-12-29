<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Education;
use App\Models\resume;
use App\Models\skill;
use Illuminate\Support\Facades\Auth;

class ComponentController extends Controller
{
    //
    public function getcontact(){
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id);
        return view('contact',['resume'=>$resume]);
    }
    public function getskill(){}
    public function gethistory(){}
    public function geteducation(){}
}
