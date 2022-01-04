@extends('app')
@section('content')
<div>
    <div class="hd_cont">
        <div class="hd_container">
        <div class="hd_container contact_wrap">
            <div class="hd_wrap">
                <div class="hd_top_box">
                    <h2 class="hd_txt">Contact</h2>
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
                   <p class="job_p">Fill in your personal details here</p>
                </div>
                @if(count($resume) == 0 )

                <form method="post" action="/create-contact" class="main_form">
                    @csrf
                        <div class="row form_row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box form_b" >
                                    <p>Email</p>
                                    <input name="email" type="text" class="form-control" placeholder="Your Email"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box">
                                    <p>Address</p>
                                    <input name="address" type="text" class="form-control" placeholder="Your address"/>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box form_b">
                                    <p>city/town</p>
                                    <input name="city" type="text" class="form-control" placeholder="Your city"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box">
                                    <p>country</p>
                                    <input name="country" type="text" class="form-control" placeholder="Your country"/>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-box form_b">
                                    <p>Phone</p>
                                    <input name="phone" type="number" class="form-control" placeholder="+123"/>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-box">
                                    <p>post code</p>
                                    <input name="postal" type="text" class="form-control" placeholder="e.g 3 3 72"/>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-box form_b">
                                    <p>Name</p>
                                    <input name="name" type="text" class="form-control" placeholder="Your Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="row form_row last_row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-box">
                                    <p>summary</p>
                                    <textarea id="textarea" class="form-control" placeholder="Professional summary" name="summary">

                                </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn_box">
                            <button class="btn back_btn">
                                Back
                            </button>
                            <button  class="btn nxt_btn" type="submit">
                                Send
                            </button>
                        </div>
                </form>
                    @else
                    @foreach($resume as $contact)
                        @if($contact->user_id == Auth::user()->id)
                            <form method="post" action="/edit-contact" class="main_form">
                                @csrf
                            <div class="row form_row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box form_b" >
                                            <p>Email</p>
                                            <input name="email" type="text" class="form-control" placeholder="Your Email" value="{{$contact->email}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <p>Address</p>
                                            <input name="address" type="text" class="form-control" placeholder="Your address" value="{{$contact->address}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form_row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box form_b">
                                            <p>city/town</p>
                                            <input name="city" type="text" class="form-control" placeholder="Your city" value="{{$contact->city}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <p>country</p>
                                            <input name="country" type="text" class="form-control" placeholder="Your country" value="{{$contact->country}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form_row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-box form_b">
                                            <p>Phone</p>
                                            <input name="phone" type="number" class="form-control" placeholder="+123" value="{{$contact->phone}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-box">
                                            <p>post code</p>
                                            <input name="postal" type="text" class="form-control" placeholder="e.g 3 3 72" value="{{$contact->postal}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-box form_b">
                                            <p>Name</p>
                                            <input name="name" type="text" class="form-control" placeholder="Your Name" value="{{$contact->name}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form_row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-box">
                                            <p>Present summary</p>
                                            <textarea  class="form-control" placeholder="Professional summary" readonly>{{$contact->name}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form_row last_row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-box">
                                            <p>New summary</p>
                                            <textarea  class="form-control text_area" placeholder="Professional summary" name="summary" aria-placeholder="{!!$contact->summary!!}"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_box">
                                    <button class="btn back_btn">
                                        Back
                                    </button>
                                    <button  class="btn nxt_btn" type="submit">
                                        edit
                                    </button>
                                </div>
                            <div class="success_popup">
                                <p>contact created successfully, Editting Mode</p>
                                <i class="far fa-check check_ic"></i>
                            </div>
                            </form>
                        @endif
                    @endforeach
                    @endif
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
