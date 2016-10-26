@extends('layouts.main')

@section('title', 'Parallax demo')

@section('content')
    <div class="main">
        <?php /*
        <div class="container">

            <!-- ################################################################################################ -->
            <div class="wrapper row3">
                <main class="container clear">
                    <!-- main body -->
                    <!-- ################################################################################################ -->
                    <ul class="nospace group services">
                        <li class="one_quarter first">
                            <article><i class="fa fa-leanpub"></i>
                                <h6 class="heading">Vitae blandit</h6>
                                <p>Fusce quis ultricies turpis phasellus ipsum ante pulvinar sed libero non interdum.</p>
                                <footer><a href="#">Read More &raquo;</a></footer>
                            </article>
                        </li>
                        <li class="one_quarter">
                            <article><i class="fa fa-life-ring"></i>
                                <h6 class="heading">Dolor rhoncus</h6>
                                <p>Vitae sagittis purus magna at est curabitur cursus massa sit amet egestas pulvinar.</p>
                                <footer><a href="#">Read More &raquo;</a></footer>
                            </article>
                        </li>
                        <li class="one_quarter">
                            <article><i class="fa fa-automobile"></i>
                                <h6 class="heading">Augue molestie</h6>
                                <p>Nulla nec molestie purus ac aliquam neque vivamus auctor mauris eu commodo ultricies.</p>
                                <footer><a href="#">Read More &raquo;</a></footer>
                            </article>
                        </li>
                        <li class="one_quarter">
                            <article><i class="fa fa-bank"></i>
                                <h6 class="heading">Nulla finibus</h6>
                                <p>Nunc fringilla magna non elit hendrerit in volutpat velit tempus aliquam malesuada.</p>
                                <footer><a href="#">Read More &raquo;</a></footer>
                            </article>
                        </li>
                    </ul>
                    <!-- ################################################################################################ -->
                    <!-- / main body -->
                    <div class="clear"></div>
                </main>
            </div>
            <!-- ################################################################################################ -->
        </div>
*/ ?>

        <?php /*<div id="wall_1" class="image" data-stellar-background-ratio="0.4"></div>*/ ?>
        <div class="container">
            <div id="content_1" class="content">
                <h1>Jak to działa</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit
                    anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa
                    qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="container center">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <img src="{{ URL::asset('images/demo/125x125.png') }}"/>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <img src="{{ URL::asset('images/demo/125x125.png') }}"/>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <img src="{{ URL::asset('images/demo/125x125.png') }}"/>
                    </div>
                </div>
            </div>
        </div>


        <!-- ################################################################################################ -->
        <div class="wrapper flex-wrapper overlay bgded" style="background-image:url('images/demo/backgrounds/03.png')">
            <section id="clients" class="flexslider centred">
                <!-- ################################################################################################ -->
                <div class="center btmspace-50">
                    <h2 class="heading btmspace-80">Slider z logotypami firm, które porównujemy</h2>
                </div>
                <!-- ################################################################################################ -->
                <div class="center btmspace-50"><i class="fa fa-3x fa-chevron-down" style="opacity:.2;"></i></div>
                <!-- ################################################################################################ -->
                <ul class="carousel-items">
                    <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                </ul>
                <!-- ################################################################################################ -->
            </section>
        </div>
        <!-- ################################################################################################ -->

        <?php /*
    <!-- ################################################################################################ -->
    <div class="wrapper flex-wrapper row3">
        <section id="latest" class="flexslider centred">
            <!-- ################################################################################################ -->
            <div class="center btmspace-50">
                <h2 class="heading">Proin tincidunt aliquet</h2>
                <p>Fringilla nulla non lobortis lacus eu varius lacus integer ultrices quam ut turpis lobortis, a
                    condimentum risus cursus. Sed luctus massa a elit tristique et eleifend ante iaculis etiam interdum
                    mauris.</p>
            </div>
            <!-- ################################################################################################ -->
            <ul class="carousel-items">
                <li><a href="#">
                        <figure><img src="images/demo/320x210.png" alt="">
                            <figcaption>
                                <time datetime="2045-04-06">6<sup>th</sup> April</time>
                                <h2 class="heading">Efficitur turpis</h2>
                                <p>Turpis sit amet volutpat dui dictum et etiam et lacus cursus&hellip;</p>
                            </figcaption>
                        </figure>
                    </a></li>
                <li><a href="#">
                        <figure><img src="images/demo/320x210.png" alt="">
                            <figcaption>
                                <time datetime="2045-04-06">6<sup>th</sup> April</time>
                                <h2 class="heading">Pulvinar aliquam</h2>
                                <p>Pellentesque velit eget fermentum ante integer euismod vitae&hellip;</p>
                            </figcaption>
                        </figure>
                    </a></li>
                <li><a href="#">
                        <figure><img src="images/demo/320x210.png" alt="">
                            <figcaption>
                                <time datetime="2045-04-06">6<sup>th</sup> April</time>
                                <h2 class="heading">Tincidunt libero</h2>
                                <p>Auctor phasellus diam ipsum vestibulum quis lorem non feugiat&hellip;</p>
                            </figcaption>
                        </figure>
                    </a></li>
                <li><a href="#">
                        <figure><img src="images/demo/320x210.png" alt="">
                            <figcaption>
                                <time datetime="2045-04-06">6<sup>th</sup> April</time>
                                <h2 class="heading">Condimentum tempor</h2>
                                <p>Curabitur id ullamcorper justo in lobortis nunc ut nibh faucibus&hellip;</p>
                            </figcaption>
                        </figure>
                    </a></li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
 */ ?>

        <div class="container">
            <div id="content_6" class="content">

                <h1>Kontakt</h1>

                <div class="row">
                    <div class="email_form">
                        <h6 class="title">Podaj swoje dane kontaktowe:</h6>
                        <div class="center">
                            <div class="row">
                                <form class="btmspace-30" method="post" action="#">
                                    <fieldset>
                                        <legend>Kontakt:</legend>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <input class="btmspace-15" type="text" value="" placeholder="Imię">
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <input class="btmspace-15" type="text" value=""
                                                   placeholder="Numer telefonu">
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <button type="submit" value="submit" class="center_mrg full_width">
                                                Negocjuj
                                            </button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper flex-wrapper overlay bgded" style="background-image:url('images/demo/backgrounds/03.png')">
            <div class="container">
                <div class="row">
                    <div class="circle-section">
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="circle-container">
                                <div class="outer-ring"></div>
                                <!-- Used for more of a gyroscope type effect
                                <div class="outer-outer-ring"></div>
                                -->
                                <div class="circle">
                                    <div class="front">
                                        <h3>TEST</h3>
                                        <h2>83.12</h2>
                                        <p>testest</p>
                                        <p>testest</p>
                                    </div>
                                    <div class="back">
                                        <p>BACK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="circle-container">
                                <div class="outer-ring"></div>
                                <!-- Used for more of a gyroscope type effect
                                <div class="outer-outer-ring"></div>
                                -->
                                <div class="circle">
                                    <div class="front">
                                        <h3>TEST</h3>
                                        <h2>83.12</h2>
                                        <p>testest</p>
                                        <p>testest</p>
                                    </div>
                                    <div class="back">
                                        <p>BACK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="circle-container">
                                <div class="outer-ring"></div>
                                <!-- Used for more of a gyroscope type effect
                                <div class="outer-outer-ring"></div>
                                -->
                                <div class="circle">
                                    <div class="front">
                                        <h3>TEST</h3>
                                        <h2>83.12</h2>
                                        <p>testest</p>
                                        <p>testest</p>
                                    </div>
                                    <div class="back">
                                        <p>BACK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="circle-container">
                                <div class="outer-ring"></div>
                                <!-- Used for more of a gyroscope type effect
                                <div class="outer-outer-ring"></div>
                                -->
                                <div class="circle">
                                    <div class="front">
                                        <h3>TEST</h3>
                                        <h2>83.12</h2>
                                        <p>testest</p>
                                        <p>testest</p>
                                    </div>
                                    <div class="back">
                                        <p>BACK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="wall_2" class="image" data-stellar-background-ratio="0.4"></div>

        <!-- ################################################################################################ -->
        <div class="wrapper flex-wrapper overlay bgded" style="background-image:url('images/demo/backgrounds/02.png')">
            <div id="testimonials" class="flexslider clear">
                <!-- ################################################################################################ -->
                <ul class="slides clear">
                    <li>
                        <div class="centred group flex-content">
                            <blockquote class="two_third first">Interdum nisl aenean non sodales eros eu facilisis
                                tellus
                                vivamus sed tortor at libero gravida, tempus a vel massa integer eget tristique mi
                                pellentesque quis tellus ante pellentesque sed sapien placerat tincidunt elit vel porta
                                sem.
                            </blockquote>
                            <figure class="one_third"><img class="circle" src="images/demo/125x125.png" alt="">
                                <figcaption><strong>J.Doe</strong><br>
                                    <em>Position, Company Name</em></figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div class="centred group flex-content">
                            <blockquote class="two_third first">Etiam quis dolor justo vivamus vel dolor tincidunt
                                eleifend
                                augue ut eleifend eros, pellentesque lobortis diam ultrices facilisis gravida magna urna
                                faucibus erat a tempus metus ligula id tellus sed sit amet mauris et orci maximus.
                            </blockquote>
                            <figure class="one_third"><img class="circle" src="images/demo/125x125.png" alt="">
                                <figcaption><strong>J.Doe</strong><br>
                                    <em>Position, Company Name</em></figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div class="centred group flex-content">
                            <blockquote class="two_third first">Phasellus imperdiet viverra massa eget ultricies nam
                                hendrerit semper lobortis duis tristique mi nec nunc finibus vestibulum, morbi commodo
                                porta
                                leo et blandit nisi sed eget nulla a eros viverra bibendum nam eget nunc enim.
                            </blockquote>
                            <figure class="one_third"><img class="circle" src="images/demo/125x125.png" alt="">
                                <figcaption><strong>J.Doe</strong><br>
                                    <em>Position, Company Name</em></figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
        </div>
        <!-- ################################################################################################ -->

        <div class="container">
            <div id="content_6" class="content">

                <h1>Newsletter</h1>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="email_form">
                            <h6 class="title">Podaj swój adres E-mail</h6>
                            <form class="btmspace-30" method="post" action="#">
                                <fieldset>
                                    <legend>Newsletter:</legend>
                                    <input class="btmspace-15" type="text" value="" placeholder="E-mail">
                                    <button type="submit" value="submit" class="center_mrg">Wyślij</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
