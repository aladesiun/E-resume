<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\experience;
use App\Models\Education;
use App\Models\resume;
use App\Models\skill;
use Illuminate\Support\Facades\Auth;

class ComponentController extends Controller
{
    //
    public function getcontact(){
        $user = Auth::user()->id;
        $resume = resume::where('user_id', $user)->get();
        return view('contact',['resume'=>$resume]);
    }
    public function getskill(){
        $user = Auth::user()->id;
        $skill = skill::where('user_id', $user)->get();
        return view('skills',['skill'=>$skill]);
    }
    public function gethistory(){
        $user = Auth::user()->id;
        $experience = experience::where('user_id', $user)->get();
        return view('work-history',['experience'=>$experience]);
    }
    public function geteducation(){
        $user = Auth::user()->id;
        $education = education::where('user_id', $user)->get();
        return view('education',['education'=>$education]);
    }
}
