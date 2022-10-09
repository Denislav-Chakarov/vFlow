<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta id='csrf_token' name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
        integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>vFlow</title>
</head>

<body>
    <div class='darkness'>
    </div>
    <div class='wrapper'>
        <nav>
            <div class="animated-progress progress-red">
                <span data-progress="100"></span>
            </div>
            <a style='text-decoration:none;' href='{{route('home')}}' class='Logo'>
                <img width='50' height='30' style="vertical-align:middle" src='{{URL('/images/myLogo.jpg')}}'>
                <span style='position:relative;top:0.15rem !important;color:white;'>vFlow</span>
            </a>
            @if(!Request()->routeIs('home'))
            <div class='links'>
                <ul class='nav-links'>
                    <li><a href='{{route('home')}}'>TOPICS</a></li>
                    <li><a href='{{route('home')}}'>SERIES</a></li>
                    <li><a href='{{route('home')}}'>DISCUSSIONS</a></li>
                    <li><a href='{{route('home')}}'>PODCAST</a></li>
                </ul>
            </div>
            @endif
            <div class='mobileLinks' id='navBar'>
                <ul class='mobile-links'>
                    <li><a href='{{route('home')}}'>TOPICS</a></li>
                    <li><a href='{{route('home')}}'>SERIES</a></li>
                    <li><a href='{{route('home')}}'>DISCUSSIONS</a></li>
                    <li><a href='{{route('home')}}'>PODCAST</a></li>
                    @if(\Auth::check())
                    <li><a href="{{route('logout')}}">Logout</a></li>
                    @else
                    <li><span class='signIn'>SIGN IN</span></li>
                    <li><a href='{{route('home')}}'>SIGN UP</a></li>
                    @endif
                </ul>
            </div>
            <div class='rightNav'>
                @if(\Auth::check())
                <i id='searchIcon' class="fa-solid fa-magnifying-glass"></i>
            
                <a href='#'><img class='userImage' src="{{URL('AvatarImgs/defaultLaravelProfile.jpg')}}" alt=""></a>
                @else
                <span id='signIn' class='signIn'>SIGN IN</span>
                <span id='getStarted' style='padding:0.3rem 0.7rem;border:1px solid white;border-radius:16px;'>GET
                    STARTED
                    FOR
                    FREE</span>
                @endif
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        @include('layouts.authentication.signIn')
        @include('layouts.authentication.signUp')
        @include('layouts.authentication.forgotPW')
        @yield('content')

    </div>
    @if(\Auth::check())
    <div class='sideMenu'>
        <i id='closeSideMenu' class="fa-solid fa-circle-xmark"></i>
        <div class='row'>
            <div class='col-4'>
                <div class='left-side'>
                    <div class='userTop' style='display:flex;'>
                        <a href='#'><img class='userImageProfile' src="{{URL('AvatarImgs/defaultLaravelProfile.jpg')}}" alt=""></a>
                        <div style='margin-left:1rem;margin-top:0.4rem;'>
                            <span style='color:white;'>{{Session::get('user')}}</span>
                            <br>
                            <span style='color:gray;font-size:0.6em;'>Guest Plan</span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class='middle'>
                        <a href='#' style='margin-left:-1.1rem;display:inline-block;width:140px;' class='menuChoice' href="{{route('home')}}">
                            <span style='color:white;font-size:1.1em;' class='beforeLine'>&ensp;&ensp;What's new</span>
                            <br>
                            <span style='font-size:0.55em;color:gray;' class='beforeLine2'>&ensp;&ensp;&ensp;//new content for ya</span>
                        </a>
                        <br>
                        <br>
                        <a href='#' style='margin-left:-1.1rem;display:inline-block;width:140px;' class='menuChoice' href="{{route('home')}}">
                            <span style='color:white;font-size:1.1em;' class='beforeLine'>&ensp;&ensp;My Library</span>
                            <br>
                            <span style='font-size:0.55em;color:gray;' class='beforeLine2'>&ensp;&ensp;&ensp;// keep going</span>
                        </a>
                        <br>
                        <br>
                        <a href='#' style='margin-left:-1.1rem;display:inline-block;width:140px;' class='menuChoice' href="{{route('home')}}">
                            <span style='color:white;font-size:1.1em;' class='beforeLine'>&ensp;&ensp;My Profile</span>
                            <br>
                            <span style='font-size:0.55em;color:gray;' class='beforeLine2'>&ensp;&ensp;&ensp;// everyone sees this page</span>
                        </a>
                        <br>
                        <br>
                        <a href='#' style='margin-left:-1.1rem;display:inline-block;width:160px;' class='menuChoice' href="{{route('home')}}">
                            <span style='color:white;font-size:1.1em;' class='beforeLine'>&ensp;&ensp;Gift an Account</span>
                            <br>
                            <span style='font-size:0.55em;color:gray;' class='beforeLine2'>&ensp;&ensp;&ensp;// from the kidness of you</span>
                        </a>
                        <br>
                        <br>
                        <a href='#' style='margin-left:-1.1rem;display:inline-block;width:140px;' class='menuChoice' href="{{route('home')}}">
                            <span style='color:white;font-size:1.1em;' class='beforeLine'>&ensp;&ensp;Settings</span>
                            <br>
                            <span style='font-size:0.55em;color:gray;' class='beforeLine2'>&ensp;&ensp;&ensp;// make a tweak</span>
                        </a>
                        <br>
                        <br>
                        
                        <a href='{{route('logout')}}' style='margin-left:-1.1rem;display:inline-block;width:140px;' class='menuChoice' href="{{route('home')}}">
                            <span style='color:white;font-size:1.1em;' class='beforeLine'>&ensp;&ensp;Logout</span>
                            <br>
                            <span style='font-size:0.55em;color:gray;' class='beforeLine2'>&ensp;&ensp;&ensp;// but.. why?</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-8'>
                <div class='horizontalLine'></div>
                <div class=right-side>
                    <h6 style='color:white'>Notifications</h6>
                    <div class='notifications' style='text-align:center; margin-top:8rem;'>
                        <img width=160 height=160 src="{{URL('images/nothing-to-see-here-account-slideout-icon.png')}}" alt="">
                        <p style='font-size:0.8em;color:rgb(78, 78, 78);'>When other Laracasts users mention {{'@' . Session::get('user')}} or respond to forum threads you've created, you'll receive a notification here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <footer>
        <div class='microphone-footer'>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 col-12'>
                    <div class='top-part-footer'>
                        <h4>Want us to email you occasionally with<br>vFlow news?</h4>
                        <br>
                        <form method="post">
                            <div class="input-group" style='display:flex;justify-content:center;'>
                                <input
                                    style='padding:0.8rem 1.3rem;border:none;border-top-left-radius:14px; border-bottom-left-radius:14px;'
                                    type="text" placeholder="Enter your email address" aria-label="Recipient' s
                                username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <input type='submit'
                                        style='background-color:#4A97D4;color:white;border:none;border-top-right-radius:14px;border-bottom-right-radius:14px;'
                                        class="input-group-text" id="basic-addon2">
                                </div>
                            </div>
                        </form>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-lg-6'>
                    <h4>vFlow</h4>
                    <p style='color:rgb(181, 181, 181);'>Nine out of ten doctors recommend vFlow over competing brands.
                        Come inside, see for yourself,
                        and massively level up your development skills in the process.</p>
                    <div style='display:flex;'>
                        <i class="fa-brands fa-youtube footerIcons"></i>&ensp;&ensp;
                        <i class="fa-brands fa-twitter footerIcons"></i>&ensp;&ensp;
                        <i class="fa-brands fa-github-alt footerIcons"></i>
                    </div>
                </div>
                <div class='col-lg-2'>
                    <h5>Learn</h4>
                        <ul class='footerList'>
                            <li>Sign Up</li>
                            <li>Sign In</li>
                            <li>Pricing</li>
                            <li>Series</li>
                            <li>Larabits</li>
                            <li>Topics</li>
                            <li>What's new</li>
                            <li>Search</li>
                            <li>Commercial</li>
                        </ul>
                </div>
                <div class='col-lg-2'>
                    <h5>Discuss</h4>
                        <ul class='footerList'>
                            <li>Forum</li>
                            <li>Podcast</li>
                            <li>Blog</li>
                            <li>Support</li>
                        </ul>
                </div>
                <div class='col-lg-2'>
                    <h5>Extra</h4>
                        <ul class='footerList'>
                            <li>Gift Certificates</li>
                            <li>Teams</li>
                            <li>FAQ</li>
                            <li>Assets</li>
                            <li>Get a Job</li>
                            <li>Privacy</li>
                            <li>Terms</li>
                        </ul>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-lg-12 col-12'>
                    <hr style='background-color:rgb(181, 181, 181);'>
                    <p style='font-size:0.8em;color:rgb(181, 181, 181);text-align:center;'>© vFlow 2022. All rights
                        reserved. Yes, all
                        of them. That means you,
                        Todd.</p>
                    <p style='font-size:0.8em;color:rgb(181, 181, 181);text-align:center;'>Created by Denislav |
                        Inspired by: <a target='_blank' href='https://laracasts.com/'>Laracast</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type='module' src="{{ asset('js/main.js') }}"></script>
</body>

</html>