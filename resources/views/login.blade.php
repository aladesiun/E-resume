@extends('app')
@section('content')
<div>
<div class="hd_cont">
        <div class="hd_container"> 
            <div class="hd_wrap login_wrap">
                <div class="hd_top_box">
                    <h2 class="hd_txt">Login</h2>
                </div>
                <div class="">
                   <p class="job_p">Start with your most recent job and work backwards.</p>
                </div>
                <form method="" action="" class="login_form">
                    <div class="row form_row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-box form_b">
                                <p>Email</p>
                                <input type="email" class="form-control" placeholder="Email"/>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-box form_b">
                                <p>Password</p>
                                <input type="password" class="form-control" placeholder="*****"/>
                            </div>
                        </div>           
                    </div>
                    <div class="d_account">
                      <p><a href="/signup">Don't have an account?</a></p>
                    </div>
                    <div  type="submit" class="btn_box">
                        <button  class="btn nxt_btn">
                           Submit
                        </button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection