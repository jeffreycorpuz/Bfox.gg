@extends('layouts.master')

@section('title')
    bfox.gg
@endsection

@section('page_css')
    <script src="https://kit.fontawesome.com/cf37de91f8.js" crossorigin="anonymous"></script>  

    <style>
        #banner{
            height: 35vh;
            font-family: 'Alfa Slab One', cursive;
            justify-content: center;
            align-items: center;
            display: flex;
            text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white, 1px 1px 0 white;
        }

        #banner::after {
            height: 40vh;
            content: "";
            background-image: url('/images/content-1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            opacity: 0.5;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;   
        }

        #banner h1{
            margin: 0px;
        }

        #contact-us .row{
            height: 50vh;
            color: white;
            font-family: 'Titillium Web', sans-serif;
            margin-bottom: 3rem;
        }

        #reach-us{
            border-radius: 20px 0px 0px 20px;
            background-color: #485461;
            background-image: linear-gradient(315deg, #485461 0%, #28313b 74%);
        }

        #reach-us h3{
            margin-bottom: 3rem;
            width: 145px;
            border-bottom: 1px solid red;
        }

        #reach-us a{
            padding: 0px;
        }

        #reach-us span{
            font-size: 18px;
            color: white;
        }

        #reach-us i{
            margin-right: 1rem;
            font-size: 24px;
        }

        #reach-us .twitter-link:hover{
            color: #1DA1F2 !important;
        }

        #reach-us .facebook-link:hover{
            color: #3C5A99;
        }

        #reach-us .instagram-link:hover{
            color: #B43162;
        }

        #reach-us .weibo-link:hover{
            color: #DF2029;
        }

        #reach-us .gmail-link:hover{
            color: #3A6742;
        }

        #email-form{
            border-radius: 0px 20px 20px 0px;
            background-color: #485461;
        }

        .success-message{
            color: white;
        }

        #email-form input{
            padding: 0px;
            background-color: #485461;
            border: 0;
            border-bottom: 2px solid #4a5777;
            border-radius: 0px;
            color: white;

        }

        #email-form textarea{
            padding: 0px;
            background-color: #485461;
            border: 0;
            border-bottom: 2px solid #4a5777 ;
            border-radius: 0px;
            color: white;
            overflow-y: auto;

        }


        input[type="text"]::placeholder { /* Firefox, Chrome, Opera */ 
            color: #757575;
        } 
        
        input[type="text"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
            color: #757575; 
        } 
        
        input[type="text"]::-ms-input-placeholder { /* Microsoft Edge */ 
            color: #757575; 
        }

        input[type="email"]::placeholder { /* Firefox, Chrome, Opera */ 
            color: #757575; 
        } 
        
        input[type="email"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
            color: #757575; 
        } 
        
        input[type="email"]::-ms-input-placeholder { /* Microsoft Edge */ 
            color: #757575; 
        } 

        textarea[id="exampleFormControlTextarea1"]::placeholder { /* Firefox, Chrome, Opera */ 
            color: #757575; 
        } 
        
        textarea[id="exampleFormControlTextarea1"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
            color: #757575; 
        } 
        
        textarea[id="exampleFormControlTextarea1"]::-ms-input-placeholder { /* Microsoft Edge */ 
            color: #757575; 
        }

        #button-container{
            width: 100%;
            display: flex;
            justify-content: flex-end;
            right: 0.5rem;
            bottom: 1rem;
            position: absolute;
        }

        #email-form form button{
            height: 6rem;
            border-radius: 5rem;
            border: 1px solid white;
            color: white;
            transition: all 1s ease;
        }

        #email-form button:hover {
            transform: scale(1.1);
        }
    </style>
@endsection

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="navbar-brand"><img src="images/real_logo.jpg" id="logo">BudFox</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/matches" class="nav-link">Matches</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link active"><u>Contact</u></a></li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <!-- banner -->
    <div class="mt-3" id="banner">
        <div class="container">
            <div class="col-sm text-center">
                <h1 class="display-4">Contact Us</h1>
                <p>Feel free to reach out to us.</p>
            </div>
        </div>
    </div>

    <div class="container mb-4" id="contact-us">
        <div class="row mb-5">
            <div class="col-lg-4 p-5" id="reach-us">
                <h3 id="title-container" class="pb-3">Reach us at:</h3>

                <a href="https://twitter.com/bfoxesports" class="nav-link twitter-link"><span class="twitter-link"><i class="fab fa-twitter"></i>@bfoxesports</span></a>
                <br />
                <a href="https://www.facebook.com/BfoxMobileLegends/" class="nav-link"><span class="facebook-link"><i class="fab fa-facebook-f"></i> /BfoxMobileLegends</span></a>
                <br />
                <a href="https://www.instagram.com/bfoxesports" class="nav-link"><span class="instagram-link"><i class="fab fa-instagram"></i>@bfoxesports</span></a>
                <br />
                <a href="#" class="nav-link" ><span class="weibo-link"><i class="fab fa-weibo"></i><span class="weibo-link">@BfoxMobileLegends</span></a>
                <br />
                <a href="https://mail.google.com/mail/u/0/" class="nav-link"><span class="gmail-link"><i class="fab fa-google"></i>bfox@gmail.com</span></a>
            </div>

            <div class="col-lg-8 p-5" id="email-form">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>

                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>

                        <strong id="success-message">{{ $message }}</strong>
                    </div>
                @endif

                <form method="post" action="{{ url('send-mail') }}">

                    {{ csrf_field() }}

                    <label class="font-weight-bold">Name </label>
                    <br />
                    <input type="text" name="full_name" class="form-control" placeholder="Name">

                    <label class="font-weight-bold">Email </label>
                    <br />
                    <input type="email" name="email" class="form-control" placeholder="Email">

                    <label class="font-weight-bold">Subject </label>
                    <br />
                    <input type="text" name="subject" class="form-control" placeholder="Write a reason for contacting us">

                    <label class="font-weight-bold">Message </label>
                    <br />
                    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Write a Message..."></textarea>
                    
                    <div id="button-container">
                        <div><button type="submit" class="btn btn-success mx-auto mt-3">Send Now</button></div>
                    </div>

                </form>

                
                
            </div>
        </div>
    </div>
@endsection
