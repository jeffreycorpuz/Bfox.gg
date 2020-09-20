@extends('layouts.master')

@section('title')
    bfox.gg
@endsection

@section('page_css')
    <style>
        #title-container{
            font-family: 'Alfa Slab One', cursive;
        }

        #banner{
            height: 60vh;
        }

        .carousel-inner > .carousel-item > img {
            object-fit:cover;
            height: 60vh !important;
            width: 350px;
        }

        #news-feed .row .col-sm {
            position: relative;
            padding: 0;
        }

        #news-feed .row .col-sm p {
            position: absolute;
            top: 9rem;
            left: 0;
            background-color: black;
            width: 100%;
            padding-top: 0.5rem;
            padding-bottom: 4rem;
            opacity: 0.5;
        }

        #news-feed .row .col-sm h6 {
            color: white;
            position: absolute;
            top: 9.5rem;
            z-index: 1;
        }

        #news-feed .row .col-sm small {
            position: absolute;
            right: 1.5rem;
            bottom: 0.5rem;
            z-index: 1;
        }

        #news-feed .row .col-sm small a {
            color: #E51937;
            text-decoration: none;
        }

        #news-feed .row #nf-1 {
            background-size: 100%;
            overflow: hidden;
        }

        #news-feed .row #nf-1 .inner-div {
            height: 210px;
            width: 100%;
            background-image: url('/images/Sample_news_1.jpg');
            background-size: 100%;
            background-position: center;
            transition: all 1s ease;
        }

        #news-feed .row #nf-1 .inner-div:hover {
            transform: scale(1.2);
        }

        #news-feed .row #nf-2 {
            background-size: 100%;
            overflow: hidden;
        }

        #news-feed .row #nf-2 .inner-div {
            height: 210px;
            width: 100%;
            background-image: url('/images/Sample_news_2.png');
            background-size: 100%;
            background-position: center;
            transition: all 1s ease;
        }

        #news-feed .row #nf-2 .inner-div:hover {
            transform: scale(1.2);
        }

        #news-feed .row #nf-3 {
            background-size: 100%;
            overflow: hidden;
        }

        #news-feed .row #nf-3 .inner-div {
            height: 210px;
            width: 100%;
            background-image: url('/images/Sample_news_3.jpg');
            background-size: 100%;
            background-position: center;
            transition: all 1s ease;
        }

        #news-feed .row #nf-3 .inner-div:hover {
        transform: scale(1.2);
        }

        #footer{
            height: 5vh;
            color: white;
            background-color: #323232;
        }

    </style>
@endsection

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="navbar-brand"><img src="images/sample_fox_icon.png" id="logo">BudFox</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link active"><u>Home</u></a></li>
                <li class="nav-item"><a href="/matches" class="nav-link">Matches</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" id="banner">
            <div class="carousel-item active">
                <img src="images/pexels-borja-lopez-1346154.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/pexels-lucie-liz-3165335.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/pexels-soumil-kumar-735911.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-5" id="news-feed">
        <div class="row">
            <div class="col-sm">
                <h1 id="title-container">NEWS</h1>
            </div>
        </div>

        <div class="row mt-2">

            <div class="col-sm ml-1 mr-1" id="nf-1">
                <div class="inner-div">
                                
                </div>
                <p>
                    <h6 class="pl-2"> Sample Team Lorem ipsum dolor sit amet, consectetur</h6>
                    <small><a href="#">Read more >>> </a></small>
                </p>
            </div>

            <div class="col-sm ml-1 mr-1" id="nf-2">
                <div class="inner-div">
                                
                </div>
                <p>
                    <h6 class="pl-2"> Sample Team Lorem ipsum dolor sit amet, consectetur</h6>
                    <small><a href="#">Read more >>> </a></small>
                </p>
            </div>

            <div class="col-sm ml-1 mr-1" id="nf-3">
                <div class="inner-div">
                                
                </div>
                <p>
                    <h6 class="pl-2"> Sample Team Lorem ipsum dolor sit amet, consectetur</h6>
                    <small><a href="#">Read more >>> </a></small>
                </p>
            </div>
        </div>

        <div class="row mt-4 mb-5">
            <div class="col-sm text-center">
                <button type="button" class="btn btn-outline-danger mx-auto"><h3>View More</h3></button>    		
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm mt-2">
                    <small>Copyright 2019. BudFoxPhilippines.gg / All Rights Reserved.</small>
                </div>
                <div class="col-sm mt-2 text-right">
                    <small>Powered by: Creogram</small>
                </div>
            </div>
        </div>
    </div>
    
@endsection