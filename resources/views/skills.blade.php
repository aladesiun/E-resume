@extends('app')
@section('content')
<div>
    <div class="hd_cont">
        <div class="hd_container">
            <div class="hd_wrap">
                <div class="hd_top_box">
                    <h2 class="hd_txt">Skills</h2>
                    <div class="tp_box">
                        <div class="icon_wrap">
                            <i class="far fa-eye"></i>
                            <p><a href="/resume" class="eb_link">Preview</a></p>
                        </div>
                        <div class="icon_wrap">
                            <i class="fas fa-download"></i>
                            <p><a href="" class="eb_link">Download</a></p>
                        </div>
                    </div>
                </div>
                <div class="">
                   <p class="job_p">Let see what you got!</p>
                </div>
                <form method="post" action="/create-skills" class="main_form">
                    @csrf
                    @if(count($skill) == 0 )

                    <div class="row form_row txt_area_row">
                        <div class="col-lg-12">
                           <div class="form-box">
                               <textarea  name="name" class="form-control txt_area" id="textarea" placeholder="saparate the skills with a comma ','">

                               </textarea>
                           </div>
                        </div>
                    </div>
                    <div class="btn_box txt_area_box re_btn">
                      <button  class="btn nxt_btn sub_btn" type="submit">
                        Submit
                      </button>
                      <div>
                           <a class="btn back_btn" href="/contact">
                              Back
                            </a>
                            <a class="btn next_btn" href="/work-history">
                              Next
                            </a>
                      </div>
                    </div>
                    @else
                            @if(count($skill)>=1)
                            @if($skill[0]->user_id == Auth::user()->id)
                                <div class="row form_row txt_area_row">
                                    <div class="col-lg-12">
                                        <div class="form-box">
                               <textarea  name="name" class="form-control txt_area" id="textarea" placeholder="saparate the skills with a comma ','">

                               </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_box txt_area_box re_btn">
                                    <button  class="btn nxt_btn sub_btn" type="submit">
                                        Submit
                                    </button>
                                    <div>
                                        <a class="btn back_btn" href="/contact">
                                            Back
                                       </a>
                                       <a class="btn next_btn" href="/work-history">
                                         Next
                                        </a>
                                   </div>
                               </div>
                                <div class="success_popup skills_popup">
                                    <p>you can create more skills</p>
                                </div>
                            @endif
                        @endif
                    @endif

                </form>

            </div>
        </div>
    </div>
</div>


@endsection
