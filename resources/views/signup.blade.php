@extends('app')
@section('content')
<div>
<div class="hd_cont">
        <div class="hd_container"> 
            <div class="hd_wrap sign_up">
                <div class="hd_top_box">
                    <h2 class="hd_txt">Signup</h2>
                </div>
                <div class="">
                   <p class="job_p">Start with your most recent job and work backwards.</p>
                </div>
                <form method="" action="" class="login_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box form_b">
                                <p>firstname</p>
                                <input type="email" class="form-control" placeholder="Email"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box form_b">
                                <p>lastname</p>
                                <input type="password" class="form-control" placeholder="*****"/>
                            </div>
                        </div>           
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box form_b">
                                <p>Email</p>
                                <input type="email" class="form-control" placeholder="Email"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box form_b">
                                <p>Password</p>
                                <input type="password" class="form-control" placeholder="*****"/>
                            </div>
                        </div>           
                    </div>
                    <div class="row">
                      <div class="form-box">
                          <p>Confirm password</p>
                         <input type="password" class="form-control" placeholder="Confirm Password"/>
                      </div>
                    </div>
                    <div  type="submit" class="btn_box">
                        <button  class="btn nxt_btn">
                           Submit
                        </button>
                        <div class="arrow_back">
                            <i class="fal fa-arrow-alt-left arrow_bck"></i>
                            <a href="/login" class="arrow_back">Back</a>
                       </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection