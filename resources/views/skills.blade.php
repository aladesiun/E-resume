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
                            <p><a href="" class="eb_link">Preview</a></p>
                        </div>
                        <div class="icon_wrap">
                            <i class="far fa-lightbulb"></i>
                            <p><a href="" class="eb_link">Tips</a><s/p>
                        </div>
                    </div>
                </div>
                <div class="">
                   <p class="job_p">Let see what you got!</p>
                </div>
                <form method="" action="">
                    <div class="row form_row txt_area_row">
                        <div class="col-lg-12">
                           <div class="form-box">
                               <textarea class="form-control txt_area">

                               </textarea>
                           </div>
                        </div>
                    </div>
                </form>

                <div class="btn_box txt_area_box">
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