<?php

namespace App\Http\Controllers;
use App\Models\Education;
use App\Models\experience;
use App\Models\resume;
use App\Models\skill;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HTMLPDFController extends Controller
{
    //
    public function htmlPdf()
    {
        $user =Auth::user()->id;
        $resume = resume::where('user_id', $user)->get();
        $skill = skill::where('user_id',$user)->get();
        $experience = Experience::where('user_id',$user)->get();
        $education = Education::where('user_id',$user)->get();
        $new_skill= array();
        foreach ($skill as $sk){
            $name_skills = explode(",",$sk->name);
            array_push($new_skill, $name_skills);
        }
        $new_role = array();
        foreach ($experience as $esp){
            $roles = explode(",",$esp->role);
            array_push($new_role, $roles);
        }

        // selecting PDF view
        $pdf = PDF::loadView('cv', ['resumes'=>$resume, 'skills'=>$new_skill, 'roles'=>$new_role, 'experiences'=>$experience, 'educations'=>$education]);

        // download pdf file
        $username =Auth::user()->firstname;
        return $pdf->download($username.'resume.pdf');
    }
}
