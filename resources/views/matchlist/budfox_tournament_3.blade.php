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

        .hr-line{
            border: 1px solid white ;
        }

        .game-span{
            color: #f0a500;
        }

        .schedule-container{
            overflow-x: auto;
            overflow-y: hidden;
        }

        .round-robin{
            width: 90px;
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
                <h1 id="title-2"> Budfox Tournament Season 3</h1>
            </div>
            <div class="col-lg-12">
                <h1 id="title-1"> Group Stage Participants</h1>
            </div>
            <div class="col-lg-12">
                <h1 id="title-2"> Group A</h1>
            </div>

            <div class="col-lg-12 mb-4">
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
                                    <td>GENETIKK</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>SORIENTE ESPORTS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>JINARLYN ESPORTS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>RAK ESPORTS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th  scope="row">5</th>
                                    <td>DENILICIOUS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>TUKMOL</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>NOPRACTICE GAMING</td>
                                    <td>0 - 0</td>
                                </tr>     
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Sᴍɪʀᴋ's ツ</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>COUP D.ETAT</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>INFINITY  </td>
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
                                    <td class="round-robin">GENETIKK<br/>&nbsp;</td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">SORIENTE<br/>ESPORTS</td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">JINARLYN<br />ESPORTS</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">RAK<br />ESPORTS</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">DENILICIOUS<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">TUKMOL<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">NOPRACTICE<br />GAMING</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">Sᴍɪʀᴋ's ツ<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">COUP D.ETAT<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">INFINITY<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>GENETIK</td>
                                    <td>SORIENTE<br />ESPORTS</td>
                                    <td>JINARLYN<br />ESPORTS</td>
                                    <td>RAK<br />ESPORTS</td>
                                    <td>DENILICIOUS</td>
                                    <td>TUKMOL</td>
                                    <td>NOPRACTICE<br />GAMING</td>
                                    <td>Sᴍɪʀᴋ's ツ</td>
                                    <td>COUP D.ETAT</td>
                                    <td>INFINITY</td>           
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <h1 id="title-2"> Group B</h1>
            </div>

            <div class="col-lg-12 mb-4">
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
                                    <td>ANAMUT</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>JASON</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>REVENGERS GAMER</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>HESOYAM</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th  scope="row">5</th>
                                    <td>NEVEREST</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>KORUPTED</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>SOCIETAS EUROPEAE(SE)</td>
                                    <td>0 - 0</td>
                                </tr>     
                                <tr>
                                    <th scope="row">8</th>
                                    <td>UNCROWNED KINGS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>BONAK ESPORTS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>ADIOS AMANIKABLE</td>
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
                                    <td class="round-robin">ANAMUT<br/>&nbsp;</td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">JASON<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">REVENGERS<br />GAMER</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">HESOYAM<br />&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">NEVEREST<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">KORUPTED<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">SOCIETAS<br />EUROPEAE(SE)</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">UNCROWNED<br/>KINGS</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">BONAK<br/>ESPORTS</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">ADIOS<br/>AMANIKABLE</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>ANAMUT</td>
                                    <td>JASON</td>
                                    <td>REVENGERS GAMER</td>
                                    <td>HESOYAM</td>
                                    <td>NEVEREST</td>
                                    <td>KORUPTED</td>
                                    <td>SOCIETAS<br />EUROPEAE(SE)</td>
                                    <td>UNCROWNED<br />KINGS</td>
                                    <td>BONAK<br />ESPORTS</td>
                                    <td>ADIOS<br />AMANIKABLE</td>           
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <h1 id="title-2"> Group C</h1>
            </div>

            <div class="col-lg-12 mb-4">
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
                                    <td>KATANGGAL</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>IMPOSTOR ESPORTS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MIRACULOUS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>AWIT</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th  scope="row">5</th>
                                    <td>SANNY WARRIORS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>CV19</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>SUICIDE ESPORTS</td>
                                    <td>0 - 0</td>
                                </tr>     
                                <tr>
                                    <th scope="row">8</th>
                                    <td>THE GOOD DEMON</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>DASAL ESPORTS</td>
                                    <td>0 - 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>ÆRIAL DOOM</td>
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
                                    <td class="round-robin">KATANGGAL<br/>&nbsp;</td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">IMPOSTOR<br/>ESPORTS</td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">MIRACULOUS<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">AWIT<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">SANNY<br/>WARRIORS</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">CV19<br/>&nbsp;</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">SUICIDE<br />ESPORTS</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">THE GOOD<br/>DEMON</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">DASAL<br/>ESPORTS</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                    <td class="round-robin"></td>
                                </tr>
                                <tr>
                                    <td class="round-robin">ÆRIAL<br/>DOOM</td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="round-robin"></td>
                                    <td class="null-bracket round-robin"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>KATANGGAL</td>
                                    <td>IMPOSTOR<br />ESPORTS</td>
                                    <td>MIRACULOUS</td>
                                    <td>AWIT</td>
                                    <td>SANNY<br />WARRIORS</td>
                                    <td>CV19</td>
                                    <td>SUICIDE<br />ESPORTS</td>
                                    <td>THE GOOD<br />DEMON</td>
                                    <td>DASAL<br />ESPORTS</td>
                                    <td>ÆRIAL<br />DOOM</td>           
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="playoffs-container">
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
                        <h5></h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> -->

    <!-- <hr class="hr-line" />

    <div>
        <div class="row mb-5" id="content">
            <div class="col-lg-12">
                <h1 id="title-2"> Matches Schedule</h1>
            </div>

            <div class="col-lg-12 schedule-container">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">September 21, 2020</th>
                            <th scope="col">September 22, 2020</th>
                            <th scope="col">September 23, 2020</th>
                            <th scope="col">September 24, 2020</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="game-span">GAME 1: </span>DALUZA vs SCYTHE</td>
                            <td><span class="game-span">GAME 1: </span>GREEVILS CREED vs KAIROS</td>
                            <td><span class="game-span">GAME 1: </span>KAIROS vs SSPH</td>
                            <td><span class="game-span">GAME 1: </span>BLKPNK vs NEXTGEN</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 2: </span>AD MELIORA vs MOB ESPORTS</td>
                            <td><span class="game-span">GAME 2: </span>DIVINE GEEKS vs RN</td>
                            <td><span class="game-span">GAME 2: </span>AD MELIORA vs RN</td>
                            <td><span class="game-span">GAME 2: </span>RN vs LOBRIN</td>
                        </tr>
                        
                        <tr>
                            <td><span class="game-span">GAME 3: </span>DALUZA vs GREEVILS CREED</td>
                            <td><span class="game-span">GAME 3: </span>SCYTHE vs BLKPNK</td>
                            <td><span class="game-span">GAME 3: </span>VICINITY vs SSPH</td>
                            <td><span class="game-span">GAME 3: </span>NEXTGEN vs AVENTUS</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 4: </span>AD MELIORA vs BFM KITSUNE</td>
                            <td><span class="game-span">GAME 4: </span>BFM KITSUNE vs DIVINE GEEKS</td>
                            <td><span class="game-span">GAME 4: </span>AD MELIORA vs OM</td>
                            <td><span class="game-span">GAME 4: </span>OM vs INFINITE SPORTS</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 5: </span>SCYTHE vs GREEVILS CREED</td>
                            <td><span class="game-span">GAME 5: </span>GREEVILS CREED vs SSPH</td>
                            <td><span class="game-span">GAME 5: </span>BLKPNK vs AVENTUS</td>
                            <td><span class="game-span">GAME 5: </span>DIVINE GEEKS vs OM</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 6: </span>AD MELIORA vs DIVINE GEEKS</td>
                            <td><span class="game-span">GAME 6: </span>MOB ESPORTS vs RN</td>
                            <td><span class="game-span">GAME 6: </span>MOB ESPORTS vs LOBRIN</td>
                            <td><span class="game-span">GAME 6: </span>RN vs DBES</td>
                        </tr>
                        
                        
                        <tr>
                            <td><span class="game-span">GAME 7: </span>DALUZA vs VICINITY</td>
                            <td><span class="game-span">GAME 7: </span>BLKPNK vs SIGRA SOLID</td>
                            <td><span class="game-span">GAME 7: </span>SCYTHE vs NEXTGEN</td>
                            <td><span class="game-span">GAME 7: </span>NEXTGEN vs SIGRA SOLID</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 8: </span>MOB ESPORTS vs BFM KITSUNE</td>
                            <td><span class="game-span">GAME 8: </span>BFM KITSUNE vs RN</td>
                            <td><span class="game-span">GAME 8: </span>AD MELIORA vs LOBRIN</td>
                            <td><span class="game-span">GAME 8: </span>DIVINE GEEKS vs LOBRIN</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 9: </span>DALUZA vs KAIROS</td>
                            <td><span class="game-span">GAME 9: </span>GREEVILS CREED vs BLKPNK</td>
                            <td><span class="game-span">GAME 9: </span>VICINITY vs BLKPNK</td>
                            <td><span class="game-span">GAME 9: </span>AVENTUS vs SIGRA SOLID</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 10:</span> MOB ESPORTS vs DIVINE GEEKS</td>
                            <td><span class="game-span">GAME 10:</span> MOB ESPORTS vs OM</td>
                            <td><span class="game-span">GAME 10:</span> AD MELIORA vs DBES</td>
                            <td><span class="game-span">GAME 10:</span> BFM KITSUNE vs DBES</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 11:</span> GREEVILS CREED vs VICINITY</td>
                            <td><span class="game-span">GAME 11:</span> VICINITY vs KAIROS</td>
                            <td><span class="game-span">GAME 11:</span> GREEVILS CREED vs AVENTUS</td>
                            <td><span class="game-span">GAME 11:</span> LOBRIN vs PALOMERS</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 12:</span> RN vs OM</td>
                            <td><span class="game-span">GAME 12:</span> LOBRIN vs DBES</td>
                            <td><span class="game-span">GAME 12:</span> BFM KITSUNE vs LOBRIN</td>
                            <td><span class="game-span">GAME 12:</span> BFM KITSUNE vs PALOMERS</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 13:</span> SCYTHE vs KAIROS</td>
                            <td><span class="game-span">GAME 13:</span> GREEVILS CREED vs NEXTGEN</td>
                            <td><span class="game-span">GAME 13:</span> SCYTHE vs AVENTUS</td>
                            <td><span class="game-span">GAME 13:</span> LOBRIN vs INFINITE SPORTS</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 14:</span> OM vs LOBRIN</td>
                            <td><span class="game-span">GAME 14:</span> BFM KITSUNE vs OM</td>
                            <td><span class="game-span">GAME 14:</span> OM vs DBES</td>
                            <td><span class="game-span">GAME 14:</span> MOB ESPORTS vs DBES</td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 15:</span> SCYTHE vs SSPH</td>
                            <td><span class="game-span">GAME 15:</span> DALUZA vs SSPH</td>
                            <td><span class="game-span">GAME 15:</span> DALUZA vs BLKPNK</td>
                            <td><span class="game-span">GAME 15:</span> PALOMERS vs INFINITE SPORTS</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-12 schedule-container">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">September 28, 2020</th>
                            <th scope="col">September 29, 2020</th>
                            <th scope="col">September 30, 2020</th>
                            <th scope="col" width="25%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="game-span">GAME 1: </span>DALUZA vs NEXTGEN</td>
                            <td><span class="game-span">GAME 1: </span>SSPH vs AVENTUS</td>
                            <td><span class="game-span">PLAYOFFS</span></td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 2: </span>AD MELIORA vs PALOMERS</td>
                            <td><span class="game-span">GAME 2: </span>OM vs PALOMERS</td>
                            <td><span class="game-span">PLAYOFFS</span></td>
                            <td> </td>
                        </tr>
                        
                        <tr>
                            <td><span class="game-span">GAME 3: </span>KAIROS vs BLKPNK</td>
                            <td><span class="game-span">GAME 3: </span>KAIROS vs NEXTGEN</td>
                            <td><span class="game-span">PLAYOFFS</span></td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 4: </span>DIVINE GEEKS VS DBES</td>
                            <td><span class="game-span">GAME 4: </span>RN vs INFINITE SPORTS</td>
                            <td><span class="game-span">PLAYOFFS</span></td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 5: </span>VICINITY vs NEXTGEN</td>
                            <td><span class="game-span">GAME 5: </span>KAIROS vs AVENTUS</td>
                            <td><span class="game-span">PLAYOFFS</span></td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 6: </span>BFM KITSUNE vs INFINITE SPORTS</td>
                            <td><span class="game-span">GAME 6: </span>DIVINE GEEKS vs PALOMERS</td>
                            <td><span class="game-span">PLAYOFFS</span></td>
                            <td> </td>
                        </tr>
                        
                        
                        <tr>
                            <td><span class="game-span">GAME 7: </span>SCYTHE vs VICINITY</td>
                            <td><span class="game-span">GAME 7: </span>VICINITY vs SIGRA SOLID</td>
                            <td><span class="game-span">SEMI FINALS GAME 1:</span> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 8: </span>MOB ESPORTS vs PALOMERS</td>
                            <td><span class="game-span">GAME 8: </span>AD MELIORA vs INFINITE SPORTS</td>
                            <td><span class="game-span">SEMI FINALS GAME 2:</span> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 9: </span>GREEVILS CREED vs SIGRA SOLID</td>
                            <td><span class="game-span">GAME 9: </span>SSPH vs SIGRA SOLID</td>
                            <td><span class="game-span">SEMI FINALS GAME 3:</span> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 10:</span> RN vs PALOMERS</td>
                            <td><span class="game-span">GAME 10:</span> DIVINE GEEKS vs INFINITE ESPORTS</td>
                            <td><span class="game-span">FINALS GAME 1:</span> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 11:</span> SSPH vs BLKPNK</td>
                            <td><span class="game-span">GAME 11:</span> KAIROS vs SIGRA SOLID</td>
                            <td><span class="game-span">FINALS GAME 2:</span></td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 12:</span> DALUZA vs AVENTUS</td>
                            <td><span class="game-span">GAME 12:</span> MOB ESPORTS vs INFINITE ESPORTS</td>
                            <td><span class="game-span">FINALS GAME 3</span></td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 13:</span> SSPH vs NEXTGEN</td>
                            <td><span class="game-span">GAME 13:</span> SCYTHE vs SIGRA SOLID</td>
                            <td><span class="game-span">FINALS GAME 4:</span> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 14:</span> DBES vs PALOMERS</td>
                            <td><span class="game-span">GAME 14:</span> DBES vs INFINITE SPORTS</td>
                            <td><span class="game-span">FINALS GAME 5</span></td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><span class="game-span">GAME 15:</span> VICINITY vs AVENTUS</td>
                            <td><span class="game-span">GAME 15:</span> DALUZA vs SIGRA SOLID</td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->

    

    <script src="\assets/js/jquery.min.js"></script>
    <script src="\assets/js/jquery.bracket.min.js"></script>
    <script>
        var minData1 = {
            teams: [
                ["DBES", null],
                ["NEXTGEN","AD MELIORA"],
                ["AVENTUS","DIVINE GEEKS"],
                ["BFM KITSUNE", "PALOMERS"]
            ],
            results : [
                [[], [1, 0], [], []],
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
                ["KAIROS", null],
                ["LOBRIN", "TBD"]
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