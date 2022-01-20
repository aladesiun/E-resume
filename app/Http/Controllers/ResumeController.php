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
            'email'=>'required | max:100',
            'name'=>'required | max:100',
            'address'=>'required | max:100',
            'country'=>'required | max:100',
            'city'=>'required | max:100',
            'phone'=>'required | max:100',
            'postal'=>'required | max:100',
            'summary'=>'required | max:1000',
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
        return redirect('/contact');

    }

    public function editcontact(Request $request){
        $this->validate($request,[
            'email'=>'required | max:100',
            'name'=>'required | max:100',
            'address'=>'required | max:100',
            'country'=>'required | max:100',
            'city'=>'required | max:100',
            'phone'=>'required | max:100',
            'postal'=>'required | max:100',
            'summary'=>'required | max:600',
        ]);
        $user = Auth::user()->id;
        $resume =  resume::where('user_id', $user)->first();
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
            HelperController::flashSession(true, 'contact edited  Successfully');
            return redirect('/skills');
        }
        HelperController::flashSession(true, 'An Error Occured');
        return redirect('/contact');

    }

    public function createskills(Request $request ){
        $this->validate($request,[
            'name'=>'required | max:100',

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
            'institution'=> 'required | max:100',
            'qualification'=> 'required | max:100',
            'field'=> 'required | max:100',
            'grad_date'=> 'required | max:100',
        ]);
        $user =Auth::user()->id;

        $education = new Education();
        $education->institution= $request->institution;
        $education->qualification= $request->qualification;
        $education->field= $request->field;
        $education->grad_date= $request->grad_date;
        $education->user_id= $user;
        if($education->save()){
            HelperController::flashSession(true, 'Education are uploaded successfully');
            return redirect('/');
        }
        HelperController::flashSession(true, 'error occured');


    }

    public function createExperience(Request $request){
        $this->validate($request,[
            'role_name'=>'required | max:100',
            'company_name'=>'required | max:100',
            'city'=>' max:100',
            'country'=>' | max:100',
            'summary'=>'required',
            'from'=>'required | max:100',
        ]);
        $user =Auth::user()->id;

        $experience = new Experience();
        $experience->role_name = $request->role_name;
        $experience->company_name = $request->company_name;
        $experience->role = $request->summary;
        $experience->city = $request->city;
        $experience->link = $request->link;
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
//        return view('cv')->with(['resumes'=>$resume, 'skills'=>$new_skill, 'roles'=>$new_role, 'experiences'=>$experience, 'educations'=>$education]);

        // selecting PDF view
        $pdf = PDF::loadView('cv', ['resumes'=>$resume, 'skills'=>$new_skill, 'roles'=>$new_role, 'experiences'=>$experience, 'educations'=>$education]);

        // download pdf file
        $username =Auth::user()->firstname;
        return $pdf->stream($username.'resume.pdf');

    }

    public function gethome(){
        if (Auth::user()){
            $user =Auth::user()->id;
            $resume = resume::where('user_id', $user)->get();
            $skill = skill::where('user_id',$user)->get();
            $experience = Experience::where('user_id',$user)->get();
            $education = Education::where('user_id',$user)->get();
            return view('home', ['resumes'=>$resume, 'skills'=>$skill,  'experiences'=>$experience, 'educations'=>$education]);
        }
        return view('home');

    }
}
