@extends('layouts.main')

@section('title', 'Parallax demo')

@section('content')
    <section id="page_intro" class="screen-height overlay bgded">
        <div class="screen-height center">
            <div class="heading">
                <h1>Lorem Ipsum</h1>
                <h1>Lorem Dorel</h1>
            </div>
        </div>
    </section>

    <section id="page_2" class="screen-height">
        <div class="screen-height content">
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
@stop

<?php /*

 <svg version="1.1" id="Layer_1" xmlns:x="&amp;ns_extend;" xmlns:i="&amp;ns_ai;" xmlns:graph="&amp;ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="250px" viewBox="0 0 255 296" enable-background="new 0 0 255 296" xml:space="preserve">
	        <g>
	          <path fill="#F3F3F3" d="M209.7,291.5h-77.6V141.8c0-18.2,0.4-34.8,1.2-49.9c-4.8,5.8-10.7,11.9-17.8,18.2l-32.1,26.5L43.7,87.8
	                                  l97.1-79.1h68.9V291.5z"></path>
	        </g>
	      </svg>

 */ ?>