@extends('app')
@section('content')
<div>
<div class="hd_cont">
    <div class="full">

    <div class="hd_container">
                <div class="hd_wrap">
                    <div class="hd_top_box">
                        <h2 class="hd_txt">Education</h2>
                        <div class="tp_box">
                            <div class="icon_wrap">
                                <i class="far fa-eye"></i>
                                <p><a href="/resume" class="eb_link" target="_blank">Preview</a></p>
                            </div>
                            <div class="icon_wrap">
                                <i class="far fa-lightbulb"></i>
                                <p><a href="/getresume" class="eb_link" target="_blank">Download</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="job_p">present educational background or certificate.</p>
                    </div>
                    <form method="post" action="create-education">
                        @csrf
                        @if(count($education) == 0 )

                        <div class="row form_row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box form_b" >
                                    <p>institution name</p>
                                    <input name="institution" type="text" class="form-control" placeholder="Institution name"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box">
                                    <p>qualification</p>
                                    <input name="qualification" type="text" class="form-control" placeholder="e.g. master.."/>
                                </div>
                            </div>
                        </div>

                        <div class="row form_row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-box form_b">
                                    <p>city/town</p>
                                    <input name="city" type="text" class="form-control" placeholder=" city"/>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-box">
                                    <p>country</p>
                                    <input name="country" type="text" class="form-control" placeholder="country"/>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-box form_b">
                                    <p>field</p>
                                    <input name="field" type="text" class="form-control" placeholder="field of study"/>
                                </div>
                            </div>
                        </div>

                        <div class="row form_row last_row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-box">
                                    <p>graduation date</p>
                                    <input name="grad_date" type="date" class="form-control" placeholder="dd/mm/yy "/>
                                </div>
                            </div>
                        </div>

                    <div class="btn_box">
                        <button type="submit" class="btn nxt_btn">
                           Submit
                        </button>
                        <div>
                            <a class="btn back_btn" href="/work-history">
                              Back
                            </a>
                        </div>
                    </div>
                        @else
                            <div class="success_popup">
                                <p>you can create more education you have {{count($education)}}</p>
                            </div>
                            @if($education[0]->user_id == Auth::user()->id)
                            <div class="row form_row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box form_b" >
                                        <p>institution name</p>
                                        <input name="institution" type="text" class="form-control" placeholder="Institution name"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <p>qualification</p>
                                        <input name="qualification" type="text" class="form-control" placeholder="e.g. master.."/>
                                    </div>
                                </div>
                            </div>

                            <div class="row form_row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-box form_b">
                                        <p>city/town</p>
                                        <input name="city" type="text" class="form-control" placeholder=" city"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-box">
                                        <p>country</p>
                                        <input name="country" type="text" class="form-control" placeholder="country"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-box form_b">
                                        <p>field</p>
                                        <input name="field" type="text" class="form-control" placeholder="field of study"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row form_row last_row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-box">
                                        <p>graduation date</p>
                                        <input name="grad_date" type="date" class="form-control" placeholder="dd/mm/yy "/>
                                    </div>
                                </div>
                            </div>

                            <div class="btn_box">
                                <button type="submit" class="btn nxt_btn">
                                    Submit
                                </button>
                                <div>
                                    <a class="btn back_btn" href="/work-history">
                                    Back
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
</div>


@endsection
