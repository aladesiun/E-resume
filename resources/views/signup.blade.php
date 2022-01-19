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
                   <p class="job_p">Let's get to know you.</p>
                </div>
                <form method="post" action="/register" class="signup_form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box form_b">
                                <p>firstname</p>
                                <input name="firstname" type="text" class="form-control" placeholder="firstname"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box form_b">
                                <p>lastname</p>
                                <input name="lastname" type="text" class="form-control" placeholder="lastname"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-box form_b">
                                <p>Email</p>
                                <input name="email" type="email" class="form-control" placeholder="Email"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                            <div class="form-box">
                                <p>Confirm password</p>
                                <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Password"/>
                            </div> 
                      </div>
                      <div class="col-lg-6 col-md-6">
                            <div class="form-box form_b">
                                <p>Password</p>
                                <input name="password" type="password" class="form-control" placeholder="*****"/>
                            </div>
                       </div>
                    </div>
                    <div   class="btn_box">
                        <button type="submit" class="btn nxt_btn">
                           Sign in
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
