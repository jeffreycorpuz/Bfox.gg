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
                <h1 id="title-2"> Budfox Tournament 2</h1>
            </div>
            <div class="col-lg-12">
                <h1 id="title-1"> Group Stage Participants</h1>
            </div>
            <div class="col-lg-12">
                <h1 id="title-2"> Group A</h1>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="3" class="text-center">Standings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>DALUZA</td>
                                    <td>1 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>GREEVILS<br />CREED</td>
                                    <td>1 - 0</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">3</th>
                                    <td>VICINITY</td>
                                    <td>1 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>KAIROS</td>
                                    <td>1 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>SSPH</td>
                                    <td>1 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>BLKPNK</td>
                                    <td>1 - 0</td>
                                </tr>
                                
                                
                                <tr>
                                    <th scope="row">7</th>
                                    <td>NEXTGEN</td>
                                    <td>1 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>AVENTUS</td>
                                    <td>1 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>SIGRA SOLID</td>
                                    <td>1 - 0</td>
                                </tr>
                                <tr>
                                    <th class="text-danger" scope="row">10</th>
                                    <td class="text-danger">Scythe</td>
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
                                    <td>DALUZA</td>
                                    <td class="null-bracket"></td>
                                    <td class="victory">1 - 0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>SCYTHE</td>
                                    <td class="defeat">0 - 1</td>
                                    <td class="null-bracket"></td>
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
                                    <td>GREEVILS<br />CREED</td>
                                    <td></td>
                                    <td class="victory">1 - 0</td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>VICINITY</td>
                                    <td></td>
                                    <td class="victory">1 - 0</td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>KAIROS</td>
                                    <td></td>
                                    <td class="victory">1 - 0</td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>SSPH</td>
                                    <td></td>
                                    <td class="victory">1 - 0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>BLKPNK</td>
                                    <td></td>
                                    <td class="victory">1 - 0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>NEXTGEN</td>
                                    <td></td>
                                    <td class="victory">1 - 0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>AVENTUS</td>
                                    <td></td>
                                    <td class="victory">1 - 0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>SIGRA<br />SOLID</td>
                                    <td></td>
                                    <td class="victory">1 - 0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>DALUZA</td>
                                    <td>SCYTHE</td>
                                    <td>GREEVILS<br />CREED</td>
                                    <td>VICINITY</td>
                                    <td>KAIROS</td>
                                    <td>SSPH</td>
                                    <td>BLKPNK</td>
                                    <td>NEXTGEN</td>
                                    <td>AVENTUS</td>
                                    <td>SIGRA<br />SOLID</td>           
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <h1 id="title-2"> Group B</h1>
            </div>

            <div class="col-lg-12">
                <div class="row">
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
                                    <td class="text-success">MOB<br />ESPORTS</td>
                                    <td class="text-success">1 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>AD<br />MELIORA</td>
                                    <td>0 - 1</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">3</th>
                                    <td>BFM<br />KITSUNE</td>
                                    <td>0 - 0</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">4</th>
                                    <td>DIVINE<br />GREEKS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>RN</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>OM</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>LOBRIN</td>
                                    <td>0 - 0</td>
                                </tr>
                                
                                
                                <tr>
                                    <th scope="row">8</th>
                                    <td>DBES</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>PALOMERS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>INFINITE SPORTS</td>
                                    <td>0 - 0</td>
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
                                    <td>AD<br />MELIORA</td>
                                    <td class="null-bracket"></td>
                                    <td class="defeat">0 - 1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>MOB<br />ESPORTS</td>
                                    <td class="victory">1 - 0</td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>BFM<br />KITSUNE</td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>DIVINE<br />GEEKS</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>RN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>OM</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>LOBRIN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>DBES</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>PALOMERS</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>INFINITE<br />SPORTS</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="null-bracket"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>AD<br />MELIORA</td>
                                    <td>MOB<br />ESPORTS</td>
                                    <td>BFM<br />KITSUNE</td>
                                    <td>DIVINE<br />GEEKS</td>
                                    <td>RN</td>
                                    <td>OM</td>
                                    <td>LOBRIN</td>
                                    <td>DBES</td>
                                    <td>PALOMERS</td>
                                    <td>INFINITE<br />SPORTS</td>
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
                    <h3 id="champ-title"><img src="images/champion.jpg" alt=""></h3>
                    <div id="champion">
                        <h5></h5>
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
                ["TBD", "TBD"],
                ["TBD","TBD"],
                ["TBD","TBD"],
                ["TBD", "TBD"]
            ],
            results : [
                [[], [], [], []],
                [[], []],
                [[]]
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
                ["TBD", "TBD"],
                ["TBD", "TBD"]
            ],
            results : [
                [[], []],
                [[]]
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