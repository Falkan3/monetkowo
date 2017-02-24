@extends('layouts.main')

@section('title', 'Monetkowo')

@section('content')
    <?php /*
    <section id="page_intro" class="screen-height overlay bgded">
        <div class="screen-height center">
            <div class="heading">
                <h1>Lorem Ipsum</h1>
                <h1>Lorem Dorel</h1>
            </div>
        </div>
    </section>
 */ ?>
    <section id="page_intro" class="screen-height">
        <img id="loading" src="{{asset('images/ajax-loader.gif')}}" alt="loading..."/>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php /*
                <div class="item active bgded overlay">
                    <img src="{{ URL::asset('images/demo/backgrounds/slider1.jpg')}}" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Chania</h3>
                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                </div>
                */ ?>

                <div class="item active bgded overlay">
                    <img src="{{ URL::asset('images/demo/backgrounds/slider2.jpg')}}" alt="slajd1">
                    <div class="carousel-caption">
                        <h3>Skorzystaj z rad doradców</h3>
                        <h3 class="highlight_lower">negocjuj kwoty</h3>
                        <h3 class="highlight_lower">swoich rachunków</h3>
                        <a href="{{url('kontakt')}}" class="btn-block"><p class="btn">Dowiedz się więcej</p></a>
                    </div>
                </div>

                <div class="item bgded overlay">
                    <img src="{{ URL::asset('images/demo/backgrounds/slider3.jpg')}}" alt="slajd2">
                    <div class="carousel-caption">
                        <h3>Przełącz się z nami</h3>
                        <h3 class="highlight_lower">na wyższy poziom oszczędzania</h3>
                        <a href="{{url('kontakt')}}" class="btn-block"><p class="btn">Dowiedz się więcej</p></a>
                    </div>
                </div>

                <?php /*
                <div class="item bgded overlay">
                    <img src="{{ URL::asset('images/demo/backgrounds/slider4.jpg')}}" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Chania</h3>
                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                </div>

                <div class="item bgded overlay">
                    <img src="{{ URL::asset('images/demo/backgrounds/slider5.jpg')}}" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Chania</h3>
                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                </div>
                */ ?>

                <div class="item bgded overlay">
                    <img src="{{ URL::asset('images/demo/backgrounds/slider6.jpg')}}" alt="slajd3">
                    <div class="carousel-caption">
                        <h3>Minimalizuj koszty</h3>
                        <h3 class="highlight_lower">swojego domowego budżetu</h3>
                        <a href="{{url('kontakt')}}" class="btn-block"><p class="btn">Dowiedz się więcej</p></a>
                    </div>
                </div>

                <?php /*
                <div class="item bgded overlay">
                    <img src="{{ URL::asset('images/demo/backgrounds/slider7.jpg')}}" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Chania</h3>
                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                </div>
                */ ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class="content">
        <section id="page_table" class="page">
            <div class="container">
                <div class="row">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h1>Lorem Ipsum</h1>
                            </div>
                        </div>
                    </div>

                    <div class="table-container">
                        <div class="container-fluid">
                            <div class="row table-header">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <p>Nazwy produktów</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 table-hide-on-mobile">
                                    <p>Promocje standardowe</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 table-hide-on-mobile">
                                    <p>Super promocje</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 table-hide-on-mobile">
                                    <p>Oszczędności</p>
                                </div>
                            </div>
                        </div>

                        <div class="table-body table-hide-on-mobile">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <p>Lorem</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 table-show-on-mobile">
                            <div class="row table-show-on-mobile-contents">
                                <?php //NAME ELEMENTS ?>
                                <div class="container-fluid table-mobile-element">

                                    <?php //ONE NAME ELEMENT ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 name">
                                            <p>abc</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="container-fluid table-mobile-contents">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 1</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 1</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 2</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 2</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 3</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php //ONE NAME ELEMENT ?>

                                    <?php //ONE NAME ELEMENT ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 name">
                                            <p>abc</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="container-fluid table-mobile-contents">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 1</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 1</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 2</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 2</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 3</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php //ONE NAME ELEMENT ?>

                                    <?php //ONE NAME ELEMENT ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 name">
                                            <p>abc</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="container-fluid table-mobile-contents">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 1</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 1</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 2</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 2</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 3</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php //ONE NAME ELEMENT ?>

                                    <?php //ONE NAME ELEMENT ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 name">
                                            <p>abc</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="container-fluid table-mobile-contents">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 1</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 1</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 2</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 2</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 3</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php //ONE NAME ELEMENT ?>

                                    <?php //ONE NAME ELEMENT ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 name">
                                            <p>abc</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="container-fluid table-mobile-contents">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 1</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 1</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 2</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 2</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 3</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php //ONE NAME ELEMENT ?>

                                    <?php //ONE NAME ELEMENT ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 name">
                                            <p>abc</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="container-fluid table-mobile-contents">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 1</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 1</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 2</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 2</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content header 3</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <p>content 3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php //ONE NAME ELEMENT ?>

                                </div>
                                <?php //NAME ELEMENTS ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page_steps" class="page text-left steps">
            <div class="container">
                <h1>Tylko 4 proste kroki dzielą Cię, aby zupełnie <span class="new-line"><span class="header_one">za darmo obniżyć</span> swoje miesięczne wydatki!</span>
                </h1>

                <div class="container-fluid circles no-margin-mobile">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="circle aligner all bgded bgcolor_transparent">
                            <div>
                                <h2></h2>
                            </div>
                        </div>
                        <div class="numeration"><p><span class="downlight color_four">1.</span> Wniosek</p></div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="circle aligner all bgded bgcolor_transparent">
                            <div>
                                <h2></h2>
                            </div>
                        </div>
                        <div class="numeration"><p><span class="downlight color_four">2.</span> Weryfikacja</p></div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="circle aligner all bgded bgcolor_transparent">
                            <div>
                                <h2></h2>
                            </div>
                        </div>
                        <div class="numeration"><p><span class="downlight color_four">3.</span> Oferta</p></div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="circle aligner all bgded bgcolor_transparent">
                            <div>
                                <h2></h2>
                            </div>
                        </div>
                        <div class="numeration"><p><span class="downlight color_four">4.</span> Gotówka</p></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page_tiles" class="page">
            <div class="container-fluid no-padding">
                <div class="row no-margin">
                    <div class="col-sm-12 col-md-4 tile tile_color_3">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/INTERNET_b.png')}}" alt="icon" class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_two">Abonament</span> <span class="one-line">za Internet</span>
                                </h1>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <p>Chcesz dowiedzieć się jak mieć Internet o 50% taniej? Już dziś skorzystaj z
                            najkorzystniejszych
                            aktualnie promocji i obniż swój abonament za Internet.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                    <div class="col-sm-12 col-md-4 tile tile_color_2">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/TELEFON_w.png')}}" alt="icon" class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_one">Rachunek</span> telefoniczny</h1>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <p>Czy Twój rachunek telefoniczny spędza Ci sen z powiek? Nie musi! Teraz to dziecinnie
                            proste.
                            Podpowiemy Ci w kilku krokach co zrobić, by spać spokojnie.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                    <div class="col-sm-12 col-md-4 tile tile_color_1">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/INTERNET.png')}}" alt="icon" class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_two">Abonament</span> <span class="one-line">za Internet</span>
                                </h1>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <p>Chcesz dowiedzieć się jak mieć Internet o 50% taniej? Już dziś skorzystaj z
                            najkorzystniejszych
                            aktualnie promocji i obniż swój abonament za Internet.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                </div>
                <!-- two -->
                <div class="row no-margin">
                    <div class="col-sm-12 col-md-4 tile tile_color_1">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/KREDYTY_w.png')}}" alt="icon" class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_two">Kredyt</span> gotówkowy</h1>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <p>Doradca monetkowo.pl pomoże Ci wybrać ofertę dopasowaną do Twoich potrzeb oraz podpowie
                            Ci
                            jak
                            negocjować z bankiem raty kredytu.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                    <div class="col-sm-12 col-md-4 tile tile_color_3">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/KONTO-BANKOWE_b.png')}}" alt="icon" class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_two new-line">Konto</span> bankowe</h1>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <p>Czy wciąż płacisz za prowadzenie swojego konta? Zrezygnuj z opłat! Skorzystaj z wiedzy
                            naszych
                            analityków i wybierz konto najlepsze na rynku.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                    <div class="col-sm-12 col-md-4 tile tile_color_2">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/KREDYTY_w.png')}}" alt="icon" class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_one">Kredyt</span> gotówkowy</h1>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <p>Doradca monetkowo.pl pomoże Ci wybrać ofertę dopasowaną do Twoich potrzeb oraz podpowie Ci
                            jak negocjować z bankiem raty kredytu.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="page_opinions" class="page">
            <div class="container">
                <h1>Opinie</h1>
            </div>
            <div class="container-fluid opinions-bg">
                <div class="container opinions">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 opinion">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 opinion-img">
                                    <img src="{{asset('images/demo/avatar1.jpeg')}}" alt="img"/>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 opinion-content">
                                    <p class="header">Lorem<span class="smaller">, ipsum</span></p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>Lorem ipsum dolor sit amet <a href="https://negocjujemypromocje.pl/">negocjujemypromocje.pl</a>.
                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi pretium a
                                        lectus at viverra. Fusce ac justo libero.</p>
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 opinion">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 opinion-img">
                                    <img src="{{asset('images/demo/avatar2.jpeg')}}" alt="img"/>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 opinion-content">
                                    <p class="header">Mauris<span class="smaller">, pharetra</span></p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>In ultrices elementum eros a lacinia.
                                        Mauris suscipit finibus ipsum vitae tempor. Aliquam id neque tellus. Aliquam
                                        tortor metus, dapibus non rutrum in, pharetra ut tellus. <a
                                                href="https://negocjujemypromocje.pl/">negocjujemypromocje.pl</a>
                                    </p>
                                    <i class="fa fa-quote-right float-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 opinion">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 opinion-img">
                                    <img src="{{asset('images/demo/avatar1.jpeg')}}" alt="img"/>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 opinion-content">
                                    <p class="header">Mauris<span class="smaller">, pharetra</span></p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>In ultrices elementum eros a lacinia.
                                        Mauris suscipit finibus ipsum vitae tempor. Aliquam id neque tellus. Aliquam
                                        tortor metus, dapibus non rutrum in, pharetra ut tellus. <a
                                                href="https://negocjujemypromocje.pl/">negocjujemypromocje.pl</a>
                                    </p>
                                    <i class="fa fa-quote-right float-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page_cards" class="page">
            <div class="container">
                <div class="col-xs-8 col-sm-12 center-no-float" style="overflow: hidden;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper color_1">
                                        <div class="front flex-container-always">
                                            <!-- front content -->
                                            <p class="flex-center">Lorem Ipsum</p>
                                        </div>
                                        <div class="back"
                                             style="background: url({{asset('images/demo/tiles/tile1.jpg')}}); background-size: 100% 100%;">
                                            <!-- back content -->
                                            <a href="http://www.google.pl"><span class="filler"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper color_3">
                                        <div class="front flex-container-always">
                                            <!-- front content -->
                                            <p class="flex-center">Lorem Ipsum</p>
                                        </div>
                                        <div class="back"
                                             style="background: url({{asset('images/demo/tiles/tile2.jpg')}}); background-size: 100% 100%;">
                                            <!-- back content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="flipper-height"
                                     style="background: url({{asset(url('images/demo/backgrounds/slider1.jpg'))}}); background-size: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-sm-offset-3">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper color_2">
                                        <div class="front flex-container-always">
                                            <!-- front content -->
                                            <p class="flex-center">Lorem Ipsum</p>
                                        </div>
                                        <div class="back"
                                             style="background: url({{asset('images/demo/tiles/tile3.jpg')}}); background-size: 100% 100%;">
                                            <!-- back content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper color_1">
                                        <div class="front flex-container-always">
                                            <!-- front content -->
                                            <p class="flex-center">Lorem Ipsum</p>
                                        </div>
                                        <div class="back"
                                             style="background: url({{asset('images/demo/tiles/tile4.jpg')}}); background-size: 100% 100%;">
                                            <!-- back content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-sm-offset-6">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper color_3">
                                        <div class="front flex-container-always">
                                            <!-- front content -->
                                            <p class="flex-center">Lorem Ipsum</p>
                                        </div>
                                        <div class="back"
                                             style="background: url({{asset('images/demo/tiles/tile3.jpg')}}); background-size: 100% 100%;">
                                            <!-- back content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper color_2">
                                        <div class="front flex-container-always">
                                            <!-- front content -->
                                            <p class="flex-center">Lorem Ipsum</p>
                                        </div>
                                        <div class="back"
                                             style="background: url({{asset('images/demo/tiles/tile4.jpg')}}); background-size: 100% 100%;">
                                            <!-- back content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php /*
        <section id="page_3" class="page">
            <div class="container">
                <h1>O nas</h1>
                <p class="narrow-paragraph center-block"><span class="header_one normal-size">Monetkowo</span><span
                            class="header_two normal-size">.pl</span> to zespół analityków i doradców poszukujących
                    najkorzystniejszych dla klientów ofert
                    zarówno z branży finansowej jak i poza finansowej. Dbamy o to by produkty były dopasowane do potrzeb
                    naszych klientów. Podpowiadamy w jaki sposób obniżyć wysokość miesięcznych rachunków czy też
                    zmniejszyć ogólne koszty kredytu. </p>
            </div>
        </section>
        */ ?>

        <section id="page_contact" class="page">
            <div class="container">
                <h1 style="margin-bottom: 30px;">Skontaktuj się z nami!</h1>
                <p>Pomożemy Ci zminimalizować Twoje wydatki.</p>
                <div class="container-fluid margin-vertical medium">
                    {!! Form::open(['url' => 'sendForm', 'id' => 'contact-form', 'class' => 'same-height contact-form']) !!}
                    <div class="col-xs-12 col-sm-6 scalable" style="height: 305px;">
                        {{Form::text('first_name', '', ['placeholder' => 'Twoje imię', 'maxlength' => 25, 'required'])}}
                        {{Form::text('email', '', ['placeholder' => 'E-mail', 'maxlength' => 50, 'required'])}}
                        {{Form::text('tel', '', ['placeholder' => 'Numer telefonu', 'maxlength' => 20, 'required'])}}
                        {{Form::select('subject', [null=> 'Wybierz temat', 1=>'Chcę poznać szczegóły oferty', 2=>'Współpraca', 3=>'Reklama', 4=>'Program Partnerski', 5=>'Uwagi do strony', 6=>'Korespondencja ogólna'], null, ['required'])}}
                    </div>
                    <div class="col-xs-12 col-sm-6 scalable margin-on-mobile" style="height: 305px;">
                        {{Form::textarea('contents', '', ['placeholder' => 'Treść wiadomości', 'maxlength' => 250])}}
                    </div>
                    <div class="col-xs-12 col-sm-6" style="float: right">
                        {{ Form::submit('Wyślij', ['class' => 'btn alternative'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </section>
    </div>
@stop

<?php /*

 <svg version="1.1" id="Layer_1" xmlns:x="&amp;ns_extend;" xmlns:i="&amp;ns_ai;" xmlns:graph="&amp;ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="250px" viewBox="0 0 255 296" enable-background="new 0 0 255 296" xml:space="preserve">
	        <g>
	          <path fill="#F3F3F3" d="M209.7,291.5h-77.6V141.8c0-18.2,0.4-34.8,1.2-49.9c-4.8,5.8-10.7,11.9-17.8,18.2l-32.1,26.5L43.7,87.8
	                                  l97.1-79.1h68.9V291.5z"></path>
	        </g>
	      </svg>

 */ ?>

<?php /*
 <section id="page_steps" class="page text-left steps">
            <div class="container">
                <h1>Tylko 3 proste kroki dzielą Cię, aby zupełnie <span class="new-line"><span class="header_one">za darmo obniżyć</span> swoje miesięczne wydatki!</span>
                </h1>
                <div class="container-fluid btmspace-80 flex-container line-height-150">
                    <div class="col-sm-12 col-md-6 flex-container">
                        <div class="col-sm-12 col-md-6 number-column right-line" number-data="1"></div>
                        <div class="col-sm-12 col-md-6 flex-center">
                            <h2>Podajesz aktualnie posiadane <span class="header_one">stawki</span></h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 flex-center">
                        <p>Wybierz kategorię , która Cię interesuje i kliknij <span class="no-wrap">w przycisk</span>
                            "Dowiedz się więcej". Wpisz
                            poprawne dane do formularza kontaktowego i prześlij <span class="no-wrap">do nas</span>
                            zgłoszenie.</p>
                    </div>
                </div>

                <div class="container-fluid btmspace-80">
                    <div class="col-sm-12 col-md-6 margin-vertical medium mobile">
                        <img src="{{asset('images/demo/kroki_2_img.png')}}"/>
                    </div>
                    <div class="container-fluid margin-top-big no-margin-mobile line-height-150">
                        <div class="col-sm-12 col-md-6 flex-container float-r">
                            <div class="col-sm-12 col-md-6 number-column left-line col-lg-push-6" number-data="2"></div>
                            <div class="col-sm-12 col-md-6 col-lg-pull-6 flex-center">
                                <h2><span class="header_one">Negocjujemy </span><span
                                            class="text-nowrap">dla Ciebie</span> nowe warunki</h2>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <p class="margin-vertical-medium no-margin-mobile">Poczekaj na kontakt konsultanta. Po
                                przesłaniu zgłoszenia
                                będziemy <span class="no-wrap">do Ciebie</span> dzwonić w celu
                                uzupełnienia informacji.</p>
                        </div>
                    </div>

                </div>

                <div class="container-fluid btmspace-80 flex-container line-height-150">
                    <div class="col-sm-12 col-sm-12 col-md-6 flex-container">
                        <div class="col-sm-12 col-md-6 number-column right-line" number-data="3"></div>
                        <div class="col-sm-12 col-md-6 flex-center">
                            <h2>Wybierasz <span class="header_one">najlepszą</span> ofertę</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 flex-center">
                        <p class="padding-horizontal medium">Na podstawie podanych przez Ciebie danych, przedstawimy Ci
                            ofertę dopasowaną do Twoich
                            potrzeb. Pomożemy Ci również w negocjowaniu warunków wybranej przez Ciebie oferty.</p>
                    </div>
                </div>
            </div>
        </section>
 */ ?>
