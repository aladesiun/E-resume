@extends('app')
@section('content')
<div>
    <div class="hd_cont">
        <div class="hd_container"> 
            <div class="hd_wrap">
                <div class="hd_top_box">
                    <h2 class="hd_txt">Tell us about your work experience</h2>
                    <div class="tp_box">
                        <div class="icon_wrap">
                            <i class="far fa-eye"></i>
                            <p><a href="" class="eb_link">Preview</a></p>
                        </div>
                        <div class="icon_wrap">
                            <i class="far fa-lightbulb"></i>
                            <p><a href="" class="eb_link">Tips</a><s/p>
                        </div>
                    </div>
                </div>
                <div class="">
                   <p class="job_p">Start with your most recent job and work backwards.</p>
                </div>
                <form method="" action="">
                    <div class="row form_row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-box form_b" >
                          <p>job title</p>
                          <input type="text" class="form-control" placeholder="e.g. Account representative"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-box">
                           <p>Employer</p>
                           <input type="text" class="form-control" placeholder="e.g. Account representative"/>
                        </div>
                    </div>
                    </div>
                    <div class="row form_row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-box form_b">
                           <p>city/town</p>
                           <input type="text" class="form-control" placeholder="e.g. Account representative"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-box">
                           <p>country</p>
                           <input type="text" class="form-control" placeholder="e.g. Account representative"/>
                        </div>
                    </div>
                    </div>
                    <div class="row form_row last_row">
                    <div class="col-lg-6 col-md-6">
                       <div class="form-box form_b">
                           <p>start date</p>
                           <input type="text" class="form-control" placeholder="e.g. Account representative"/>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                       <div class="form-box">
                           <p>end date</p>
                           <input type="text" class="form-control" placeholder="e.g. Account representative"/>  
                      </div>
                    </div>
                    </div>
                </form>

                <div class="btn_box">
                  <button class="btn back_btn">
                      Back
                  </button>
                  <button  class="btn nxt_btn">
                     Next
                  </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 