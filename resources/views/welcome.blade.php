<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BFox.gg</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="#" class="navbar-brand"><img src="images/sample_fox_icon.png" id="logo">BudFox</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Matches</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Teams</a></li>
                </ul>
            </div>
        </nav>

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

            <div class="row mt-4">
                <div class="col-sm text-center">
                    <button type="button" class="btn btn-outline-danger mx-auto"><h3>View More</h3></button>    		
                </div>
            </div>
        </div>

        <hr />

        <div class="mt-3" id="content-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm mt-2">
                        <h1>MOBILE LEGENDS</h1>
                    </div>
                    <div class="col-sm mt-2 text-right">
                        <button type="button" class="btn btn-danger mx-auto"><h3>SHOW TEAM</h3></button>
                    </div>
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
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
