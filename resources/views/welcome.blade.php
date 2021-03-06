<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>BocasDAO | Your Caribbean NFT getaway! | Get Passport now</title>
    <meta name="keywords"
          content="NFT, crypto, etherium, bitcoin, Blockchain, DAO, crypto island, crypto getaway, crypto hideaway, panama, bocas del toro, Caribbean, beach, Golden visa, residency.">
    <meta name="description"
          content="BocasDAO is creating a timeshare concept on NFTs with its top tier NFT offering Golden Visas for Panama. The crypto getaway will be developed in Bocas del Toro, Panama.">
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="1d69968d-d274-4615-9aec-b611433f2616"
            data-blockingmode="auto" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="public/js/jquery.scrollTo.js"/>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/5a61dfd9ab.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.8.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K3Z5W3HDH7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-K3Z5W3HDH7');
    </script>

</head>
<script>
    jQuery(document).ready(function ($) {
        $('a[href^="#"]').bind('click.smoothscroll', function (e) {
            e.preventDefault();
            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 40
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
    });
</script>
<style type="text/css">
    @font-face {
        font-family: font-boldao;
        src: url('{{ asset('fonts/negrita.otf') }}') format("opentype");
    }

    @font-face {
        font-family: font-lightdao;
        src: url('{{ asset('fonts/light.otf') }}') format("opentype");
    }

    @font-face {
        font-family: font-meddao;
        src: url('{{ asset('fonts/medium.ttf') }}') format("truetype");
    }


    .font-medao {
        font-family: font-meddao;
    }


    .font-boldao {
        font-family: font-boldao;
    }

    .font-lightdao {
        font-family: font-lightdao;
    }

</style>
<script id="CookieDeclaration" src="https://consent.cookiebot.com/1d69968d-d274-4615-9aec-b611433f2616/cd.js"
        type="text/javascript" async></script>

<body class="bg-darkblue max-width">
@extends('components/footer')
@extends('components/contact-form')
@extends('components/faqs')
@extends('components/title/roadmap')
@extends('components/title/passport')
@extends('components/content')
@extends('components/topsection')
@extends('components/navbar')
</body>
</html>
