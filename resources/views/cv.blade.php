        <style type="text/css" id="static">
            *,html{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                scroll-behavior: smooth;
                text-transform: capitalize;

            }
                body{
                    font-family: sans-serif!important;

                }
                :root{
                    --lightgray:#aa1945;
                    --color:#aa1945;
                }

                h6{
                    color: #aa1945;
                    font-weight: 700;
                    font-size: 18px!important;
                    margin-bottom: 0px!important;
                    white-space: nowrap;
                    margin-right: 5px;
                }
                h6::after{
                    content: "";
                    display: inline-block;
                    width: 200px;
                    height: 12px;
                    margin-right: -100%;
                    margin-left: 5px;
                    background: #aa1945;
                    opacity: 0.3;
                }
                .contact-title{
                    color: #aa1945;
                    font-weight: 700;
                    font-size: 18px!important;
                    margin-bottom: 0px!important;
                    white-space: nowrap;
                    margin-right: 5px;
                }
                .contact-title::after{
                    content: "";
                    display: inline-block;
                    width: 150px;
                    height: 12px;
                    margin-right: -100%;
                    margin-left: 5px;
                    background: #aa1945;
                    opacity: 0.3;
                }


                .wrapper{
                    border: 1px solid #000;
                    /*max-width: 1200px;*/
                    width: 100%;

                    height: auto;
                    margin: auto;
                }
                .cv_wrap{
                    width: 89%;
                    margin: auto;
                }
                .top_cont{
                    height: 60px;
                    width:100%;
                    background-color: #aa1945;
                    opacity: 0.3;

                    margin-bottom: 10px;
                }
                .user_name h1{
                    color: var(--color);
                    font-family: sans-serif;
                    font-size: 46px;
                    font-weight: 700;
                    margin-bottom: 10px;
                }
                .line{
                    width: 100%;
                    height: 1.5px;
                    background-color: #aa1945;
                    margin: auto;
                    margin-bottom:2.5rem;
                }


                .contact{
                    width: 100%;
                    margin-left: auto;
                }

                .contact span p:nth-child(2){

                }
                .span_a p,.span_b p{
                    margin-bottom: 10px!important;
                }
                .contact span p{
                    color: #000;
                    font-weight: 500;
                    margin-bottom: 0px;
                }
                a{
                    color: #000!important;
                    text-decoration: none!important;
                }
                .email_span p{
                    padding-bottom: 9px;
                }
                .summary_det,.contact_det,.work_det,.skills_det,.education_det{

                }
                .summary p{
                    color: #000;
                    font-weight: 500;
                    margin-bottom: 43px;
                    line-height: 23px;
                }
                .contact_det .box2{display: none;
                    width:81%;
                    height: 15px;
                    background-color: #aa1945;
                }
                .work_det .box3{display: none;
                    width:81%;
                    height: 15px;
                    background-color: #aa1945;
                }
                .skills_det .box4{display: none;
                    width:86%;
                    height: 15px;
                    background-color: #aa1945;
                }
                .education_det .box5{display: none;
                    width:86%;
                    height: 15px;
                    background-color: #aa1945;
                }
                .skills ul li p{
                    color: #000;
                    font-weight: 500;
                }
                .skills ul li{
                    line-height: 2;
                }
                .skills ul{
                    margin-bottom: 30px;
                }
                .summary_det .box
               {
                    display: none;
                    width: 66%;
                    height: 15px;
                    background-color: #aa1945;
                }
                .detailed_box{
                    margin-bottom:16px;
                }
                .detailed_box ul,.skills ul{
                    padding-left: 21px;
                }
                .detailed_box ul li p{
                    margin-bottom: 9px;
                }
                .sp_txt{
                    margin-bottom: 8px;
                }
                .laut p{
                    margin-bottom: 12px;
                }
                .row{
                    display: flex;
                }
                .link{
                    margin-bottom: 24px;
                    margin-left: 10px;
                    font-family: "Rage Italic";
                    color: #aa1945 !important;
                }
                .sp_line{
                    margin-left: -15px;
                }
                /*@media only screen  and (max-width:770px) {*/
                /*    .user_name h1{*/
                /*        font-size: 28px;*/
                /*    }*/
                /*}*/
                /*@media only screen  and (max-width:546px) {*/
                /*    .user_name h1{*/
                /*        font-size: 19px;*/
                /*    }*/

                /*}*/
                /*@media only screen  and (max-width:699px) {*/
                /*.row{*/
                /*    display: block;*/
                /*}*/
                /*.summary{*/
                /*    width: 100%;*/
                /*}*/
                .work_wrap,.work_history{
                    width: 100%;
                }
            .summary-holder ul li{
                width: 65%;

                word-break: break-all;
                white-space: pre-wrap;
            }

            .summary-holder{
                overflow-x: hidden!important;
                padding: 25px 17px 25px 0;
                display: table-cell;
                width: 65%;



            }

            .contact-holder{
                padding: 25px 0 25px 17px;
                display: table-cell;

                vertical-align: top;
            }
            .top-area{
                display: table;
                table-layout: fixed;
                width: 100%;
                border-collapse: collapse

            }
            .work-skils{
                display: table;
                table-layout: fixed;

                width: 100%;
                border-collapse: collapse
            }
            .work{
                width: 65%;
                padding: 25px 17px 25px 0;
                height: auto;
                display: table-cell;
                min-height: 1000px;
            }

            .skills{
                padding: 25px 0 25px 17px;
                display: table-cell;
                vertical-align: top;
            }
            .sum-txt{

            }
            .role-cont{
                margin-left: 10px;
            }
            .contact li{
                text-decoration: none!important;
            }
            .light-txt{
                font-weight: normal!important;
            }
        </style>
   @if(count($resumes) == 0)
       <h1>create resume first</h1>
   @else

       @foreach($resumes as $res)
            <div class="cv_wrap">
                <div class="top_cont"></div>
                <div class="user_name">
                    <h1>{{$res->name}}</h1>
                </div>
                <div class="line"></div>
                <div class="top-area">
                          <div class="summary-holder">

                              <div class="summary_det">
                                  <h6>PROFESSIONAL SUMMARY</h6>
                                  <div class="box">
                                  </div>
                              </div>
                              <div class="sum-txt">

                                      <p>{!!$res->summary!!}</p>
                              </div>

                          </div>

                            <div class=" contact-holder">
                                <div class="contact">
                                    <div class="contact_det">
                                        <h5 class="contact-title">CONTACT</h5>
                                        <div class="box2">
                                        </div>
                                    </div>
                                    <span class="span_a">
                                <p>
                                    <b>Address:</b>
                                    <span clas="light-txt">{{$res->address}}
                                    {{$res->City}}, {{$res->country}} </span>
                                    </p>
                                </span>
                                    <span class="span_b ">
                                    <p>
                                        <b>Poster:</b>
                                        <span class="light-txt">{{$res->postal}}</span>
                                    </p>
                                </span>
                                    <span class="span_b ">
                                    <p>
                                        <b>Phone:</b>
                                        <span class="light-txt">{{$res->phone}}</span>
                                    </p>
                                </span>
                                    <span class="email_span">
                                    <p>
                                    <b>Email:</b>
                                    <a href="#" class="light-txt">{{$res->email}}</a>
                                    </p>
                                </span>
                                    <div class="line"></div>
                                </div>
                            </div>
                    </div>
                <div class="work-skils">
                               <div class="work">
                                   <div class="work_det">
                                       <h6>WORK HISTORY</h6>
                                       <div class="box3"></div>
                                   </div>
                                   @foreach($experiences as $exp)
                                   <div class="detailed_box">
                                       <p class="sp_txt"><b>{{$exp->role_name}}</b>, {{$exp->from}} to {{$exp->to}} </p>
                                       <p class="sp_txt"><b>{{$exp->company_name}} </b> - {{$exp->city}} , {{$exp->country}}</p>
                                       <i class="link">{{$exp->link}}</i>
                                       <div class="role-cont">
                                                  <p>
                                                    {!! $exp->role !!}
                                                  </p>
                                       </div>
                                   </div>
                                   @endforeach
                               </div>

                                    <div class="skills">
                                        <div class="skills_det">
                                            <h6>SKILLS</h6>
                                            <div class="box4"></div>
                                        </div>
                                        <ul>
                                            @foreach($skills as $skill)
                                                @foreach($skill as $full_skill)
                                                <li>{{$full_skill}}</li>
                                                @endforeach
                                            @endforeach
                                        </ul>
                                    </div>
                            </div>
                <div class="row">
                        <div>
                                <div class="education_det">
                                    <h6>EDUCATION</h6>
                                    <div class="box5"></div>
                                </div>
                            @foreach($educations as $education)
                                <div class="laut">
                                    <p><b>{{$education->qualification}}, {{$education->field}}</b></p>
                                    <p><b>{{$education->institution}}</b>-{{$education->city}}, <b>Expected in:</b> {{$education->grad_date}}</p>
                                    <div class="line"></div>
                                </div>
                            @endforeach
                            </div>
                        </div>
            </div>
       @endforeach
   @endif
