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
        <img id="loading" src="{{asset('images/ajax-loader2.gif', env('HTTPS'))}}" alt="loading..."/>
        <div id="mainCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
                <li data-target="#mainCarousel" data-slide-to="2"></li>
                <li data-target="#mainCarousel" data-slide-to="3"></li>
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

                <div class="item active bgded">
                    <img src="{{ asset('images/demo/backgrounds/outlet.jpg', env('HTTPS'))}}"
                         alt="slajd1"> <?php //slider2.jpg ?>
                    <div class="aligner">
                        <div class="carousel-caption">
                            <h3>Oszczędzaj i zarabiaj</h3>
                            <h3 class="highlight_lower">na wynegocjowanych</h3>
                            <h3 class="highlight_lower">specjalnych promocjach</h3>
                            </h3>
                            <a href="{{url('kontakt')}}" class="btn-block"><p class="btn">Dowiedz się więcej</p></a>
                        </div>
                    </div>
                </div>

                <div class="item bgded">
                    <img src="https://prostazmiana.pl/img/lp_4/bg.jpg" alt="slajd2"> <?php //slider3.jpg ?>
                    <div class="carousel-caption">
                        <h3>Negocjujemy dla Ciebie</h3>
                        <h3 class="highlight_lower">dodatkowe korzyści</h3>
                        <h3 class="highlight_lower">z oficjalnych promocji</h3>
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

                <div class="item bgded">
                    <img src="{{ asset('images/demo/backgrounds/outlet.jpg', env('HTTPS'))}}"
                         alt="slajd3"> <?php //slider6.jpg ?>
                    <div class="carousel-caption">
                        <h3>Bonusy i zniżki</h3>
                        <h3 class="highlight_lower">których nie otrzymasz</h3>
                        <h3 class="highlight_lower">w standardowej promocji</h3>
                        <a href="{{url('kontakt')}}" class="btn-block"><p class="btn">Dowiedz się więcej</p></a>
                    </div>
                </div>

                <div class="item bgded">
                    <img src="https://prostazmiana.pl/img/lp_4/bg.jpg" alt="slajd4"> <?php //slider3.jpg ?>
                    <div class="carousel-caption">
                        <h3>Negocjujemy dla Ciebie</h3>
                        <h3 class="highlight_lower">promocje dostępne</h3>
                        <h3 class="highlight_lower">tyko dla wybranych klientów</h3>
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
            <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
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

                    <div class="container-fluid table-item-container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 table-div">
                                <div class="table-item">
                                    <div class="table-logo">
                                        <img src="{{asset('images/logo.png', env('HTTPS'))}}" alt="logo"/>
                                    </div>
                                    <div class="table-header">
                                        <p>Oszczędź <span class="text-block text-nowrap">40 <span class="text-currency">zł</span></span>
                                        </p>
                                    </div>
                                    <div class="table-content">
                                        <p class="title">Abonament telefoniczny</p>
                                        <p class="table-offert-old offert-title">Podstawowa oferta</p>
                                        <p class="table-offert-old">0.2850 zł/kWh</p>

                                        <p class="table-offert-new offert-title">Wynegocjowana oferta</p>
                                        <p class="table-offert-new">0.2111 zł/kWh</p>

                                        <a href="#" class="btn">Korzystam</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 table-div hover">
                                <div class="table-item">
                                    <div class="table-logo">
                                        <img src="{{asset('images/logo.png', env('HTTPS'))}}" alt="logo"/>
                                    </div>
                                    <div class="table-header">
                                        <p>Oszczędź <span class="text-block text-nowrap">40 <span class="text-currency">zł</span></span>
                                        </p>
                                    </div>
                                    <div class="table-content">
                                        <p class="title">Prąd</p>
                                        <p class="table-offert-old offert-title">Podstawowa oferta</p>
                                        <p class="table-offert-old">0.2850 zł/kWh</p>

                                        <p class="table-offert-new offert-title">Wynegocjowana oferta</p>
                                        <p class="table-offert-new">0.2111 zł/kWh</p>

                                        <a href="#" class="btn">Korzystam</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 table-div">
                                <div class="table-item">
                                    <div class="table-logo">
                                        <img src="{{asset('images/logo.png', env('HTTPS'))}}" alt="logo"/>
                                    </div>
                                    <div class="table-header">
                                        <p>Oszczędź <span class="text-block text-nowrap">40 <span class="text-currency">zł</span></span>
                                        </p>
                                    </div>
                                    <div class="table-content">
                                        <p class="title">Abonament telefoniczny</p>
                                        <p class="table-offert-old offert-title">Podstawowa oferta</p>
                                        <p class="table-offert-old">0.2850 zł/kWh</p>

                                        <p class="table-offert-new offert-title">Wynegocjowana oferta</p>
                                        <p class="table-offert-new">0.2111 zł/kWh</p>

                                        <a href="#" class="btn">Korzystam</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page_steps" class="page text-left steps">
            <div class="container">
                <h1>Tylko 3 proste kroki dzielą Cię, aby zupełnie <span class="new-line"><span class="header_one">za darmo obniżyć</span> swoje miesięczne wydatki!</span>
                </h1>

                <div class="container-fluid circles no-margin-mobile">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="circle aligner all bgded bgcolor_transparent">
                            <div>
                                <h2></h2>
                            </div>
                        </div>
                        <div class="numeration"><p><span class="highlight text-block color_two">1.</span>Podajesz kilka
                                info</p></div>
                        <div class="numeration-description"><p>niezbędnych do negocjowania oferty dla Ciebie</p></div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="circle aligner all bgded bgcolor_transparent">
                            <div>
                                <h2></h2>
                            </div>
                        </div>
                        <div class="numeration"><p><span class="highlight text-block color_two">2.</span>Analizujemy
                                oferty</p></div>
                        <div class="numeration-description"><p>stale szperamy po Internetach w poszukiwaniu najlepszych
                                ofert dla Ciebie</p></div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="circle aligner all bgded bgcolor_transparent">
                            <div>
                                <h2></h2>
                            </div>
                        </div>
                        <div class="numeration"><p><span class="highlight text-block color_two">3.</span>Analizujemy
                                oferty</p></div>
                        <div class="numeration-description"><p>stale szperamy po Internetach w poszukiwaniu najlepszych
                                ofert dla Ciebie</p></div>
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
                                <img src="{{asset('images/demo/INTERNET_b.png', env('HTTPS'))}}" alt="icon"
                                     class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_two">Abonament</span> <span class="one-line">za Internet</span>
                                </h1>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <p>Chcesz dowiedzieć się jak mieć Internet o 50% taniej? Już dziś skorzystaj <span
                                    class="text-nowrap">z najkorzystniejszych</span> aktualnie promocji i obniż swój
                            abonament za Internet.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                    <div class="col-sm-12 col-md-4 tile tile_color_2">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/TELEFON_w.png', env('HTTPS'))}}" alt="icon"
                                     class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_one">Rachunek</span> telefoniczny</h1>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <p>Czy Twój rachunek telefoniczny spędza Ci sen <span class="text-nowrap">z powiek?</span> Nie
                            musi! Teraz to dziecinnie proste. Podpowiemy Ci w kilku krokach co zrobić, by spać
                            spokojnie.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                    <div class="col-sm-12 col-md-4 tile tile_color_1">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/INTERNET.png', env('HTTPS'))}}" alt="icon" class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_two">Abonament</span> <span class="one-line">za Internet</span>
                                </h1>
                            </div>
                        </div>
                        <div class="separator white"></div>
                        <p>Chcesz dowiedzieć się jak mieć Internet o 50% taniej? Już dziś skorzystaj <span
                                    class="text-nowrap">z najkorzystniejszych</span> aktualnie promocji i obniż swój
                            abonament za Internet.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                </div>
                <!-- two -->
                <div class="row no-margin">
                    <div class="col-sm-12 col-md-4 tile tile_color_1">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/KREDYTY_w.png', env('HTTPS'))}}" alt="icon"
                                     class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_two">Kredyt</span> gotówkowy</h1>
                            </div>
                        </div>
                        <div class="separator white"></div>
                        <p>Doradca monetkowo.pl pomoże Ci wybrać ofertę dopasowaną do Twoich potrzeb oraz podpowie
                            Ci
                            jak
                            negocjować z bankiem raty kredytu.</p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                    <div class="col-sm-12 col-md-4 tile tile_color_3">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/KONTO-BANKOWE_b.png', env('HTTPS'))}}" alt="icon"
                                     class="icon"/>
                            </div>
                            <div class="col-md-9">
                                <h1><span class="color_two new-line">Konto</span> bankowe</h1>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <p>Czy wciąż płacisz za prowadzenie swojego konta? Zrezygnuj z opłat! Skorzystaj z wiedzy
                            naszych
                            analityków i wybierz konto najlepsze <span class="text-nowrap">na rynku.</span></p>
                        <p class="btn">WIĘCEJ</p>
                    </div>
                    <div class="col-sm-12 col-md-4 tile tile_color_2">
                        <div class="container-fluid no-padding">
                            <div class="col-md-3 no-padding">
                                <img src="{{asset('images/demo/KREDYTY_w.png', env('HTTPS'))}}" alt="icon"
                                     class="icon"/>
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
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 opinion">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 opinion-img">
                                    <img src="{{asset('images/demo/avatar1.jpeg', env('HTTPS'))}}" alt="img"/>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 opinion-content">
                                    <p class="header">Lorem<span class="smaller">, ipsum</span></p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>Lorem ipsum dolor sit amet <a href="https://negocjujemypromocje.pl/">negocjujemypromocje.pl</a>.
                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi
                                        pretium
                                        a
                                        lectus at viverra. Fusce ac justo libero.</p>
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 opinion">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 opinion-img">
                                    <img src="{{asset('images/demo/avatar2.jpeg', env('HTTPS'))}}" alt="img"/>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 opinion-content">
                                    <p class="header">Mauris<span class="smaller">, pharetra</span></p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>In ultrices elementum eros a lacinia.
                                        Mauris suscipit finibus ipsum vitae tempor. Aliquam id neque tellus.
                                        Aliquam
                                        tortor metus, dapibus non rutrum in, pharetra ut tellus. <a
                                                href="https://negocjujemypromocje.pl/">negocjujemypromocje.pl</a>
                                    </p>
                                    <i class="fa fa-quote-right float-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 opinion">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 opinion-img">
                                    <img src="{{asset('images/demo/avatar1.jpeg', env('HTTPS'))}}" alt="img"/>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 opinion-content">
                                    <p class="header">Mauris<span class="smaller">, pharetra</span></p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>In ultrices elementum eros a lacinia.
                                        Mauris suscipit finibus ipsum vitae tempor. Aliquam id neque tellus.
                                        Aliquam
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
                    <div class="container-fluid flipper-main-container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper color_1">
                                        <div class="front">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6"
                                                         style="background: url({{asset('images/demo/tiles/tile1.jpg', env('HTTPS'))}}); background-size: 100% 100%;">
                                                    </div>

                                                    <div class="hidden-xs hidden-sm col-md-6">
                                                        <a href="http://www.google.pl"><span class="filler"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- back content -->
                                        <div class="back flex-container-always">
                                            <!-- front content -->
                                            <p class="flex-center">Aktualne oprocentowanie lokaty <span
                                                        class="bold text-bigger">2,05%</span></p>
                                            <a href="#" class="flex-center flipper-button">Lorem ipsum</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden-xs hidden-sm col-md-6">
                                <div class="flipper-height"
                                     style="background: url({{asset('images/demo/backgrounds/slider1.jpg', env('HTTPS'))}}); background-size: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper color_3">
                                        <div class="front">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6"
                                                         style="background: url({{asset('images/demo/tiles/tile2.jpg', env('HTTPS'))}}); background-size: 100% 100%;">
                                                    </div>

                                                    <div class="hidden-xs hidden-sm col-md-6">
                                                    </div>
                                                </div>
                                                <!-- back content -->
                                            </div>
                                        </div>
                                        <div class="back flex-container-always">
                                            <!-- front content -->
                                            <p class="flex-center">Zobacz jakie warunki możemy dla Ciebie <span
                                                        class="bold text-bigger">wynegocjować</span></p>
                                            <a href="#" class="flex-center flipper-button">Lorem ipsum</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-6">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper color_2">
                                        <div class="front">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6"
                                                         style="background: url({{asset('images/demo/tiles/tile3.jpg', env('HTTPS'))}}); background-size: 100% 100%;">
                                                    </div>

                                                    <div class="hidden-xs hidden-sm col-md-6"></div>
                                                </div>
                                                <!-- back content -->
                                            </div>
                                        </div>
                                        <div class="back flex-container-always">
                                            <!-- front content -->
                                            <p class="flex-center">Oferta T-mobile dla firm. Abonament <span
                                                        class="bold text-bigger">wysokości <span
                                                            class="text-nowrap">60 zł</span></span>
                                            </p>
                                            <a href="#" class="flex-center flipper-button">Lorem ipsum</a>
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
                <p>Pomożemy Ci zminimalizować <span class="bold text-bigger text-nowrap">Twoje wydatki.</span></p>
                <div class="container-fluid margin-vertical medium no-padding">
                    {!! Form::open(['url' => 'sendForm', 'id' => 'contact-form', 'class' => 'same-height contact-form']) !!}
                    <div class="col-xs-12 col-sm-6 scalable" style="height: 305px;">
                        {{Form::text('first_name', '', ['placeholder' => 'Twoje imię', 'maxlength' => 25, 'required', 'class' => 'name'])}}
                        {{Form::text('email', '', ['placeholder' => 'E-mail', 'maxlength' => 50, 'required', 'class' => 'email'])}}
                        {{Form::tel('tel', '', ['placeholder' => 'Numer telefonu', 'maxlength' => 20, 'required', 'class' => 'telephone', 'pattern' => '[0-9-]*'])}}
                        {{Form::select('subject', [null=> 'Wybierz temat', 1=>'Chcę poznać szczegóły oferty', 2=>'Współpraca', 3=>'Reklama', 4=>'Program Partnerski', 5=>'Uwagi do strony', 6=>'Korespondencja ogólna'], null, ['required'])}}
                    </div>
                    <div class="col-xs-12 col-sm-6 scalable margin-on-mobile" style="height: 305px;">
                        {{Form::textarea('contents', '', ['placeholder' => 'Treść wiadomości', 'maxlength' => 250])}}
                    </div>
                    <div class="col-xs-12 col-sm-6" style="float: right">
                        {{ Form::submit('Wyślij', ['class' => 'btn alternative'])}}
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <img src="{{asset('images/ajax-loader2.gif', env('HTTPS'))}}" alt="loading..."
                             class="hidden loading_ajax"/>
                        <div class="status"></div>
                    </div>
                    {!! Form::close() !!}

                    <div class="col-xs-12 col-sm-12 col-md-12 form-thank-you">
                    </div>
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
