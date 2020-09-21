@extends('layouts.master')

@section('title')
    bfox.gg
@endsection

@section('page_css')
    <link href="assets/css/jquery.bracket.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="assets/js/parallax.min.js"></script>

    <style>
        body{
            background-color: #323C47;
            background-image: linear-gradient(315deg, #485461 0%, #28313b 74%);
            color: white;
        }

        #navbar{
            /* background-color: #323C47; */
            /* background-image: linear-gradient(315deg, #485461 0%, #28313b 74%); */
            color: #f0a500;
        }

        #navbar a{
            color: #f0a500;
        }

        #navbar a u{
            padding-bottom: 2px;
            border-bottom: 2px solid #f0a500;
            text-decoration: none;
        }

        .container-parallax{
            max-width: 80%;
            margin: 0 auto;
            /*background: #f9f9f9;*/
            font-size: 24px;
            padding: 25px;
        }

        .parallax {
            min-height: 300px;
            background: transparent;
            /* text-align: center; */
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .parallax h3{
            background-color: white;
            padding: 1rem;
        }

        .parallax h3 a{
            color: black;
            font-family: 'Titillium Web', sans-serif;
        }

        .parallax h3 a:hover{
            color: grey;
            text-decoration: line-through;
        }
    </style>
@endsection

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <a href="#" class="navbar-brand"><img src="images/real_logo.jpg" id="logo">BudFox ESPORTS</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/matches" class="nav-link"><u>Matches</u></a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container-parallax">

        <h1> Portal: Tournaments </h1>
        <hr>
        <br />
        <h3 class="title-2">Ongoing:</h3>
        <div class="parallax" data-parallax="scroll" data-image-src="images/photo-2.png">
            <h3> <a href="/tournament/2">Budfox Tournament 2</a></h3>
        </div>

        <br />
        <h3>Most Recent:</h3>
        <div class="parallax" data-parallax="scroll" data-image-src="images/photo-1.jpg">
            <h3> <a href="/tournament/1">Battle of the Champions Budfox Tournament</a></h3>
        </div>
    </div>
@endsection