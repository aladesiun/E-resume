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
                            <p><a href="/resume" target="_blank" class="eb_link">Preview</a></p>
                        </div>
                        <div class="icon_wrap">
                            <i class="fas fa-download"></i>
                            <p><a href="/getresume" class="eb_link" target="_blank">Download</a></p>
                        </div>
                    </div>
                </div>
                <div class="">
                   <p class="job_p">Show us the experience you got.</p>
                </div>
                <form method="post" action="/create-experience" class="main_form">
                    @csrf
                    @if(count($experience) == 0 )
                        <div class="row form_row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box form_b" >
                                    <p>job title</p>
                                    <input name="role_name" type="text" class="form-control" placeholder="e.g. Account representative"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box">
                                    <p>Employer</p>
                                    <input name="company_name" type="text" class="form-control" placeholder="e.g. Account representative"/>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box form_b">
                                    <p>city/town</p>
                                    <input name="city" type="text" class="form-control" placeholder="e.g. Account representative"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box">
                                    <p>country</p>
                                    <input name="country" type="text" class="form-control" placeholder="e.g. Account representative"/>
                                </div>
                            </div>
                        </div>

                        <div class="row form_row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box form_b">
                                    <p>start date</p>
                                    <input name="from" type="date" class="form-control" placeholder="e.g. Account representative"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box">
                                    <p>end date</p>
                                    <input name="to" type="date" class="form-control" placeholder="e.g. Account representative"/>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row last_row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-box">
                                    <p>Role summary</p>
                                    <textarea id="textarea" class="form-control" placeholder="Pleases select a listing system you prefer at the menu bar" name="summary">

                                </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn_box re_btn">
                           <button  class="btn nxt_btn sub_btn" type="submit">
                                Submit
                            </button>
                            <div>
                                <a class="btn back_btn" href="/skills">
                                   Back
                                </a>
                                <a class="btn next_btn" href="/education">
                                    Next
                                </a>
                            </div>
                        </div>

                    @else
                            <div class="success_popup history_popup">
                                <p>you can create more work history you have {{count($experience)}}</p>
                            </div>
                            @if($experience[0]->user_id == Auth::user()->id)
                                <div class="row form_row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box form_b" >
                                            <p>job title</p>
                                            <input name="role_name" type="text" class="form-control" placeholder="e.g. Account representative"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <p>Employer</p>
                                            <input name="company_name" type="text" class="form-control" placeholder="e.g. Account representative"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form_row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box form_b">
                                            <p>city/town</p>
                                            <input name="city" type="text" class="form-control" placeholder="e.g. Account representative"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <p>country</p>
                                            <input name="country" type="text" class="form-control" placeholder="e.g. Account representative"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form_row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box form_b">
                                            <p>start date</p>
                                            <input name="from" type="date" class="form-control" placeholder="e.g. Account representative"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <p>end date</p>
                                            <input name="to" type="date" class="form-control" placeholder="e.g. Account representative"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form_row last_row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-box">
                                            <p>Role summary</p>
                                            <textarea id="textarea" class="form-control" placeholder="Pleases select a listing system you prefer at the menu bar" name="summary">

                                </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_box re_btn">
                                    <button  class="btn nxt_btn sub_btn" type="submit">
                                        Submit
                                    </button>
                                    <div>
                                        <a class="btn back_btn" href="/skills">
                                            Back
                                        </a>
                                        <a class="btn next_btn" href="/education">
                                          Next
                                        </a>
                                   </div>
                                </div>

                            @endif
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
