<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Potwierdzenie otrzymania wiadomości: {{$subject}} - NegocjujemyPromocje.pl</title>
</head>
<body>
<p style="font-size: 90%;
        color: #ccc;">Dziękujemy za kontakt z NegocjujemyPromocje.pl</p>
<p>Witamy!</p>
<p>Otrzymaliśmy od Ciebie następującą wiadomość:</p>
<div style="padding-top: 15px;
        border-bottom: solid 1px #ddd;
        height: 1px;
        margin-bottom: 10px;"></div>
<p>{{$name}}, <span style="font-weight: 700;">{{$email}}</span></p>
<p><span style="font-weight: 700">Telefon:</span> {{$tel}}</p>
<p style="margin-top: 20px;
        margin-bottom: 10px;"><span style="font-weight: 700">Temat:</span> {{$subject}}</p>
<p><span style="font-weight: 700">Wiadomość:</span></p>
<p>{{$contents}}</p>
<div style="padding-top: 15px;
        border-bottom: solid 1px #ddd;
        height: 1px;
        margin-bottom: 10px;"></div>
<p>Na otrzymaną wiadomość odpowiemy najszybciej jak to możliwe.</p>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin-ext');
    p, h1, h2, h3, h4, h5, h6 {
        font-family: 'Roboto', sans-serif;
    }
</style>