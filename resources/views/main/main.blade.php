@extends('layouts.main')

@section('title', 'Parallax demo')

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
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ URL::asset('images/demo/backgrounds/stock1.jpg')}}" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Chania</h3>
                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ URL::asset('images/demo/backgrounds/stock2.jpeg')}}" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Chania</h3>
                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                </div>
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

    <section id="page_2" class="">
        <div class="content">
            <h1>Jak to działa</h1>
            <div class="container btmspace-80">
                <div class="col-sm-12 col-sm-4 col-md-4 number-column right-line" number-data="1"></div>
                <div class="col-sm-12 col-sm-8 col-md-8 number-column-vertical-center">
                    <h2>Testowy tekst</h2>
                </div>
            </div>

            <div class="container btmspace-80">
                <div class="number-container">
                    <div class="col-sm-6 col-sm-4 col-md-4 number-column left-line float-r" number-data="2"></div>
                </div>
                <div class="col-sm-12 col-sm-8 col-md-8 number-column-vertical-center">
                    <h2>Testowy tekst</h2>
                </div>
            </div>

            <div class="container btmspace-80">
                <div class="col-sm-12 col-sm-4 col-md-4 number-column right-line" number-data="3"></div>
                <div class="col-sm-12 col-sm-8 col-md-8 number-column-vertical-center">
                    <h2>Testowy tekst</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="page_3" class="">
        <div class="content">
            <div class="col-sm-12 col-sm-6 col-md-6 tile tile_color_2">
                <h1>TEST</h1>
                <div class="separator white"></div>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
            </div>
            <div class="col-sm-12 col-sm-6 col-md-6 tile tile_color_3">
                <h1>TEST</h1>
                <div class="separator"></div>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
            </div>
            <!-- two -->
            <div class="col-sm-12 col-sm-6 col-md-6 tile tile_color_3">
                <h1>TEST</h1>
                <div class="separator"></div>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
            </div>
            <div class="col-sm-12 col-sm-6 col-md-6 tile tile_color_1">
                <h1>TEST</h1>
                <div class="separator white"></div>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
                <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
            </div>
        </div>
    </section>
@stop

<?php /*

 <svg version="1.1" id="Layer_1" xmlns:x="&amp;ns_extend;" xmlns:i="&amp;ns_ai;" xmlns:graph="&amp;ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="250px" viewBox="0 0 255 296" enable-background="new 0 0 255 296" xml:space="preserve">
	        <g>
	          <path fill="#F3F3F3" d="M209.7,291.5h-77.6V141.8c0-18.2,0.4-34.8,1.2-49.9c-4.8,5.8-10.7,11.9-17.8,18.2l-32.1,26.5L43.7,87.8
	                                  l97.1-79.1h68.9V291.5z"></path>
	        </g>
	      </svg>

 */ ?>