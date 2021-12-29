<?php

namespace App\Http\Controllers;
use App\Models\Experience;
use App\Models\Education;
use App\Models\resume;
use App\Models\skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;


class ResumeController extends Controller
{
    public function getresumetemp(){
        return view('resumetemp.sample1');
    }

    public function create(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'name'=>'required',
            'address'=>'required',
            'country'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'postal'=>'required',
            'summary'=>'required',
        ]);

        $resume = new resume();
        $resume->email = $request->email;
        $resume->name = $request->name;
        $resume->address = $request->address;
        $resume->country = $request->country;
        $resume->city = $request->city;
        $resume->phone = $request->postal;
        $resume->summary= $request->summary;
        $resume->experience_id= $request->experience_id;
        $resume->user_id= Auth::user()->id;
        $resume->skill_id= $request->skill_id;
        if ($resume->save()){
            HelperController::flashSession(true, 'Resume created Successfully');
            return redirect('/skills');
        }
        HelperController::flashSession(true, 'An Error Occured');
        return redirect('/create');

    }

    public function createskills(Request $request ){
        $this->validate($request,[
            'name'=>'required',

        ]);
        $user =Auth::user()->id;
        $skill = new skill();
        $skill->name = $request->name;
        $skill->user_id = $user;
        if ($skill->save()){
            HelperController::flashSession(true, 'Skills are uploaded successfully');
            return redirect('/');

        }

    }

    public function createEducation(Request $request){
        $this->validate($request,[
            'institution'=> 'required',
            'qualification'=> 'required',
            'field'=> 'required',
            'grad_date'=> 'required',
        ]);
        $user =Auth::user()->id;

        $education = new Education();
        $education->institution= $request->institution;
        $education->qualification= $request->qualification;
        $education->field= $request->field;
        $education->grad_date= $request->grad_date;
        $education->user_id= $user;
        if($education->save()){
            HelperController::flashSession(true, 'Skills are uploaded successfully');
            return redirect('/');
        }
        HelperController::flashSession(true, 'error occured');
        return redirect('/education');


    }

    public function createExperience(Request $request){
        $this->validate($request,[
            'role_name'=>'required',
            'company_name'=>'required',
            'city'=>'required',
            'country'=>'required',
            'summary'=>'required',
            'from'=>'required',
            'to'=>'required',
        ]);
        $user =Auth::user()->id;

        $experience = new Experience();
        $experience->role_name = $request->role_name;
        $experience->company_name = $request->company_name;
        $experience->role = $request->summary;
        $experience->city = $request->city;
        $experience->country = $request->country;
        $experience->from = $request->from;
        $experience->to = $request->to;
        $experience->user_id = $user;
        if ($experience->save()){
            HelperController::flashSession(true, 'work experience are uploaded successfully');
            return redirect('/education');


        }

    }

    public function getresume(){
        $user =Auth::user()->id;
        $resume = resume::where('id', $user)->get();
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
        return view('resumetemp.sample1', ['resumes'=>$resume, 'skills'=>$new_skill, 'roles'=>$new_role,
            'experiences'=>$experience, 'educations'=>$education]);
    }

    public function gethome(){
        if (Auth::user()){
            $user =Auth::user()->id;
            $resume = resume::where('id', $user)->get();
            $skill = skill::where('user_id',$user)->get();
            $experience = Experience::where('user_id',$user)->get();
            $education = Education::where('user_id',$user)->get();
            return view('home', ['resumes'=>$resume, 'skills'=>$skill,  'experiences'=>$experience, 'educations'=>$education]);
        }
        return view('home');

    }
}
