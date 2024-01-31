<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jQuery Responsive Carousel - Owl Carusel">
    <meta name="author" content="Bartosz Wojciechowski">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet'
        type='text/css'>
    <link href="{{ asset('front-end/owl/assets/css/custom.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Owl Carousel Assets -->
    <link href="{{ asset('front-end/owl/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/owl/owl-carousel/owl.theme.css') }}" rel="stylesheet">

    <link href="{{ asset('front-end/owl/assets/js/google-code-prettify/prettify.css') }}" rel="stylesheet">
    <style>
        #carousell .item img {
            display: block;
            width: 100%;
            object-fit: cover;

            @media (max-width: 767px) {
                #owl .item img {
                    height: auto;
                }
            }

            @media (min-width: 768px) {
                #owl .item img {
                    height: 100vh;
                }
            }
        }
    </style>
    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('front-end/owl/assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('front-end/owl/assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('front-end/owl/assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('front-end/owl/assets/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('front-end/owl/assets/ico/favicon.png') }}">

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body id="home">