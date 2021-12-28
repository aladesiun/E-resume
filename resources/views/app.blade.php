<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- CSS--->
        <link href="{{asset('assets/main.css')}}" rel="stylesheet">
        <!--- Boostrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="nav_bar">
                <div class="navbar_wrap">
                    <div class="nav_lg">
                      <img src="{{asset('assets/img/pp-removebg-preview.png')}}" alt="IMG" class="navbar_logo">
                    </div>
                    <div class="navbar_links">
                        <ul>
                           <li class="nav-item">
                               <a href="/" class="nav-link">
                                  Home
                               </a>
                            </li>
                            <li class="nav-item">
                               <a href="/history" class="nav-link">
                                   Work history
                               </a>
                            </li>
                            <li class="nav-item">
                               <a href="/education" class="nav-link">
                                  Education
                               </a>
                            </li>
                            <li class="nav-item">
                               <a href="/skills" class="nav-link">
                                  Skills
                               </a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link">
                                  Contact
                               </a>
                            </li>
                            @if(Auth::user())
                                <li class="nav-item">
                                    <a href="/logout" class="nav-link">
                                        Logout
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a  class="nav-link user-lk">
                                        <i class="fal fa-user"></i>{{Auth::user()->lastname}}
                                    </a>
                                </li>
                            @else
                            <li class="nav-item">
                                <a href="/login" class="nav-link">
                                  Login
                               </a>
                            </li>
                                @endif
                        </ul>
                    </div>
                    <i class="fad fa-bars menu_bar"></i>
                </div>
            </nav>
        </header>
        @yield('content')
        @include('notification')

        <footer>
          <div class="footer_wrapper">
              <div class="footer_cont">
                <p class="reserved_txt">© 2021, Bold Limited. All rights reserved.</p>
              </div>
          </div>
        </footer>
    </body>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="{{asset('assets/main.js')}}"></script>
    </html>
