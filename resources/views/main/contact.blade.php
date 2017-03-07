@extends('layouts.contact')

@section('title', 'Kontakt | Monetkowo')

@section('content')
    <div class="header-separator"></div>
    <div class="content">
        <?php /*
        <section id="page_1" class="page">
            <div class="container">
                <h1>O nas</h1>
                <p class="narrow-paragraph center-block line-height-150"><span class="header_one normal-size">Monetkowo</span><span
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
                        {{Form::tel('tel', '', ['placeholder' => 'Numer telefonu', 'maxlength' => 20, 'required'])}}
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