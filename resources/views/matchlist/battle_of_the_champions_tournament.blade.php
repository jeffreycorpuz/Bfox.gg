@extends('layouts.master')

@section('title')
    bfox.gg
@endsection

@section('page_css')
    <link href="\assets/css/jquery.bracket.min.css" rel="stylesheet" />
    <style>
        body{
            background-color: #323C47;
            background-image: linear-gradient(315deg, #485461 0%, #28313b 74%);
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

        #container{
            width: 75%;
        }

        #content{
            margin: 0px;
            padding: 2rem;
            /* background-color: #323C47; */
            /* background-image: linear-gradient(315deg, #485461 0%, #28313b 74%); */
        }

        #title-1{
            border-bottom: 1px solid white;
            padding-bottom: 1rem;
            margin-bottom: 3rem;
            color: white;
        }

        #title-2{
            color: white;
            margin-bottom: 3rem;
        }

        #scoring-container{
            overflow-x: auto;
            overflow-y: hidden;
        }

        #scoring-table tbody{
            font-size: 12px;
            
        }

        #scoring-table thead th{
            border: 5px solid white;
        }

        #scoring-table tbody td{
            border: 5px solid white;
        }

        #scoring-table tbody .null-bracket{
            background-color: white;
        }

        #scoring-table tbody .victory{
            background-color: #7cef97;
            text-align: center;
            font-size: 1rem;
            color: black;
            font-weight: 100;
            font-family: 'Titillium Web', sans-serif;
        }

        #scoring-table tbody .defeat{
            background-color: #ff9b9b;
            text-align: center;
            font-size: 1rem;
            color: black;
            font-weight: 100;
            font-family: 'Titillium Web', sans-serif;
        }

        #playoffs-container{
            width: 80%;
            margin: auto;
        }

        #finals-container{
            width: 80%;
            margin: auto;
        }

        #line{
            border-top: 1px solid white;
            margin-top: 13px;
            width: 15%;
            display: flex;
            position: absolute;
            left: 25%;
            top: 35%;
        }

        #champ-title{
            position: absolute;
            left: 39.5%;
            top: 20%;
            color: white;
        }

        #champ-title img{
            height: 25px;
            margin-bottom: 6px;
            margin-rigth: 2px;
        }

        #champ-title:after {
            content: 'Champion'
        }

        #champion{
            border: 2px solid white;
            border-radius: 3px;
            height: 75px;
            width: 150px;
            background-color: #7cef97;
            display: flex;
            position: absolute;
            left: 40%;
            top: 30%;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 2240.98px) {
            #line{
                left: 37%;
                top: 35.5%;
            }
            #champ-title{
                left: 49.5%;
                top: 20%;
            }

            #champion{
                left: 50%;
                top: 30%;
            }
        }

        @media (max-width: 1760.98px) {
            #line{
                left: 47%;
                top: 35.5%;
            }
            #champ-title{
                left: 59.5%;
                top: 20%;
            }

            #champion{
                left: 60%;
                top: 30%;
                width: 150px;
            }
        }

        @media (max-width: 1470.98px) {
            #line{
                left: 59%;
                top: 35.5%;
            }
            #champ-title{
                left: 84%;
                top: 20%;
            }

            #champ-title:after {
                content: ''
            }

            #champion{
                left: 75%;
                top: 30%;
                width: 100px;
            }
        }

        
        /* Large devices (desktops, less than 1200px) */
        @media (max-width: 1333.98px) {
            #playoffs-container{
                width: 80%;
            }

            #finals-container{
                width: 80%;
            }

            #ub-container{
                width: 100%;
                margin: auto;
                overflow-x: auto;
                overflow-y: hidden;
            }

            #lb-container{
                width: 100%;
                margin: auto;
                overflow-x: auto;
                overflow-y: hidden;
            }

            #final-container{
                width: 100%;
                margin: auto;
                overflow-x: auto;
                overflow-y: hidden;
            }

            #line{
                left: 66%;
                top: 60%;
            }
            #champ-title{
                left: 87%;
                top: 30%;
            }

            #champion{
                left: 80%;
                top: 51%;
            }
        }

        @media (max-width: 1100.98px) {
            #line{
                left: 76%;
                top: 60%;
            }
            #champ-title{
                left: 100%;
                top: 30%;
            }

            #champion{
                left: 90%;
                top: 51%;
            }
        }
        
        /* Medium devices (tablets, less than 992px) */
        @media (max-width: 991.98px) {
            #playoffs-container{
                width: 100%;
            }

            #finals-container{
                width: 100%;
            }

            #ub-container{
                width: 100%;
                margin: auto;
                padding-bottom: 1rem;
            }

            #lb-container{
                width: 100%;
                margin: auto;
                overflow-x: auto;
                overflow-y: hidden;
            }

            #final-container{
                width: 100%;
                margin: auto;
                overflow-x: auto;
                overflow-y: hidden;
            }

            #line{
                left: 35%;
                top: 56%;
            }
            #champ-title{
                left: 54%;
                top: 30%;
            }

            #champion{
                left: 50%;
                top: 49%;
            }

            @media (max-width: 575.98px) {
                #line{
                    left: 105%;
                    top: 56%;
                }
                #champ-title{
                    left: 132%;
                    top: 30%;
                }

                #champion{
                    left: 120%;
                    top: 49%;
                }
            }
        }

    </style>
@endsection

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <a href="#" class="navbar-brand"><img src="\images/real_logo.jpg" id="logo">BudFox ESPORTS</a>
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
    <div>
        <div class="row mb-5" id="content">
            <div class="col-lg-12">
                <h1 id="title-1"> Group Stage Participants</h1>
            </div>

            <div class="col-lg-12">
                <div class="row" >
                    <div class="col-lg-4">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="3" class="text-center">Standings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-success" scope="row">1</th>
                                    <td class="text-success">NextGen <br/>ESPORTS</td>
                                    <td class="text-success">8 - 1</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>DALUZA <br/>ESPORTS</td>
                                    <td>7 - 2</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Fleekzy <br/>ESPORTS</td>
                                    <td>6 - 3</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">4</th>
                                    <td>BLKPNK <br/>ESPORTS</td>
                                    <td>6 - 3</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Imperialist <br/>ESPORTS</td>
                                    <td>6 - 3</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Budfox <br/>Sikaynam</td>
                                    <td>5 - 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>UTX <br/>ESPORTS</td>
                                    <td>4 - 5</td>
                                </tr>
                                
                                
                                <tr>
                                    <th class="text-danger" scope="row">8</th>
                                    <td class="text-danger">Budfox <br/>Stack</td>
                                    <td class="text-danger">2 - 7</td>
                                </tr>
                                <tr>
                                    <th class="text-danger" scope="row">9</th>
                                    <td class="text-danger">Cough <br/>ESPORTS</td>
                                    <td class="text-danger">1 - 8</td>
                                </tr>
                                <tr>
                                    <th class="text-danger" scope="row">10</th>
                                    <td class="text-danger">Quinn <br/>ESPORTS</td>
                                    <td class="text-danger">0 - 9</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-8" id="scoring-container">
                        <table class="table table-dark" id="scoring-table">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="11" class="text-center"> Budfox Tournament Standing </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Quinn <br/>ESPORTS</td>
                                    <td class="null-bracket"></td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                </tr>
                                <tr>
                                    <td>NextGen <br/>ESPORTS</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="null-bracket"></td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 -0</td>
                                    <td class="victory">1 -0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">DQ</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                </tr>
                                <tr>
                                    <td>Imperialist <br/>ESPORTS</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="null-bracket"></td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                </tr>
                                <tr>
                                    <td>Fleekzy <br/>ESPORTS</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="null-bracket"></td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                </tr>
                                <tr>
                                    <td>BLKPNK <br/>ESPORTS</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="null-bracket"></td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                </tr>
                                <tr>
                                    <td>Cough <br/>ESPORTS</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="null-bracket"></td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                </tr>
                                <tr>
                                    <td>UTX <br/>ESPORTS</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="null-bracket"></td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                </tr>
                                <tr>
                                    <td>DALUZA <br/>ESPORTS</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">DQ</td>
                                    <td class="victory"> 1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="null-bracket"></td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                </tr>
                                <tr>
                                    <td>Budfox <br/>Stack</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="null-bracket"></td>
                                    <td class="defeat">0 - 1</td>
                                </tr>
                                <tr>
                                    <td>Budfox <br/>Sikaynam</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="victory">1 - 0</td>
                                    <td></td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="null-bracket"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Quinn <br/>ESPORTS</td>
                                    <td>NextGen <br/>ESPORTS</td>
                                    <td>Imperialist <br/>ESPORTS</td>
                                    <td>Fleekzy <br/>ESPORTS</td>
                                    <td>BLKPNK <br/>ESPORTS</td>
                                    <td>Cough <br/>ESPORTS</td>
                                    <td>UTX <br/>ESPORTS</td>
                                    <td>DALUZA <br/>ESPORTS</td>
                                    <td>Budfox <br/>Stack</td>
                                    <td>Budfox <br/>Sikaynam</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="playoffs-container">
        <div class="row mb-5" id="content">
            <div class="col-lg-12">
                <h1 id="title-1"> Playoffs Match</h1>
            </div>

            <div class="col-lg-6">
                <div id="ub-container">
                    <h3 id="title-2">Lower Bracket</h3>
                    <div class="tournament-1"></div>
                </div>
            </div>

            <div class="col-lg-6" id="ub-container">
                <div>
                    <h3 id="title-2">Finals Bracket</h3>
                    <div class="tournament-2"></div>

                    <div id="line"></div>
                    <h3 id="champ-title"><img src="\images/champion.jpg" alt=""></h3>
                    <div id="champion">
                        <h5>DALUZA</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="\assets/js/jquery.min.js"></script>
    <script src="\assets/js/jquery.bracket.min.js"></script>
    <script>
        var minData1 = {
            teams: [
                ["Fleekzy", null],
                ["BLKPNK",null],
                ["Imperialist",null],
                ["Sikaynam", "UTX"]
            ],
            results : [
                [[], [], [], [1,0]],
                [[0, 1], [1, 0]],
                [[1,0]]
            ]
        }

        $('.tournament-1').bracket({
            teamWidth: 100,
            scoreWidth: 25,
            matchMargin: 50,
            roundMargin: 50,
            skipConsolationRound: true,
            init: minData1
        });

        var minData2 = {
            teams: [
                ["NextGen", null],
                ["Daluza","BLKPNK"]
            ],
            results : [
                [[], [2, 0]],
                [[0,3]]
            ]
        }

        $('.tournament-2').bracket({
            teamWidth: 100,
            scoreWidth: 25,
            matchMargin: 50,
            roundMargin: 50,
            skipConsolationRound: true,
            init: minData2
        });

    </script>
@endsection