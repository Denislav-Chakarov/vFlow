@extends('masterLayout.master')

@section('content')


<!-- <h1>this is content page</h1> -->
<div class='mainContent'>
    <div>
        <img id='landingImage' src='{{URL('/images/laravelBG.png')}}'>
    </div>
    <div class='menuCoding'>
        <div class='firstMenu'>
            <span style='color:#DF424C;font-weight:bold;'>"menu"<span style='color:white;'> => [</span></span><br>
            <a class='menuChoice' href="{{route('home')}}">
                <span class='beforeLine'>&ensp;&ensp;//deep dives</span>
                <br>
                <span class='beforeLine2'>&ensp;"browse" => <span class='destinationMenu'>"Series"</span>,</span>

            </a>
            <a class='menuChoice' href="{{route('home')}}">
                <span class='beforeLine'>&ensp;&ensp;//pick a category</span>
                <br>
                <span class='beforeLine2'>&ensp;"find" => <span class='destinationMenu'>"Topics"</span>,</span>

            </a>
            <a class='menuChoice' href="{{route('discussMain')}}">
                <span class='beforeLine'>&ensp;&ensp;//engage the
                    community</span>
                <br>
                <span class='beforeLine2'>&ensp;"discuss" => <span class='destinationMenu'>"Forum"</span>,</span>

            </a>
            <a class='menuChoice' href="{{route('home')}}">
                <span class='beforeLine'>&ensp;&ensp;//watch our
                    ad</span>
                <br>
                <span class='beforeLine2'>&ensp;"play" => <span class='destinationMenu'>"Commercial"</span>,</span>

            </a>
            <a class='menuChoice' href="{{route('home')}}">
                <span class='beforeLine'>&ensp;&ensp;//you know what to do</span>
                <br>
                <span class='beforeLine2'>&ensp;"join" => <span class='destinationMenu'>"Sign
                        Up"</span>,</span>

            </a>
            <br>
            <span style='color:white;font-weight:bold;'>],</span>
        </div>
        <div class='secondMenu'>
            <span style='color:#DF424C;font-weight:bold;'>"stats"<span style='color:white;'> => [</span></span><br>
            <a class='menuChoice' href="{{route('home')}}">
                <span class='beforeLine'>&ensp;&ensp;//multi-episode training</span>
                <br>
                <span class='beforeLine2'>&ensp;"series" => <span class='destinationMenu'>"162"</span>,</span>

            </a>
            <a class='menuChoice' href="{{route('home')}}">
                <span class='beforeLine'>&ensp;&ensp;//new ones every week</span>
                <br>
                <span class='beforeLine2'>&ensp;"lessons" => <span class='destinationMenu'>"2137"</span>,</span>

            </a>
            <a class='menuChoice' href="{{route('home')}}">
                <span class='beforeLine'>&ensp;&ensp;//hours and hours of content</span>
                <br>
                <span class='beforeLine2'>&ensp;"hours" => <span class='destinationMenu'>"364"</span>,</span>

            </a>
            <br>
            <span style='color:white;font-weight:bold;'>]</span>
        </div>
    </div>
</div>
<br>
<br>
<div class='secondSection'>
    <p style='font-size:1.2em;text-align:center;'>Want to ask something so you can reach <span
            style='color:#328AF1;'>the next
            level?</span><br>Check out the topics bellow which <span style='color:#328AF1;'>interests you.</span></p>
    <br>
    <br>
    <div class='container'>
        <div class='row'>
            @include('layouts.home.categories',['categories' => $categories])
        </div>

    </div>

</div>
@stop