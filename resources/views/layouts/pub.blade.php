<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? env('APP_NAME') }}</title>
    <link rel="icon" type="image/x-icon" href="{{url('/assets/logo/favicon.jpg')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="McSmart App - Daily knowledge to make you smarter">
    <meta name="author" content="McSmart App">
    <meta name="description" content="Daily knowledge to make you smarter. Download now on iOS and Android.">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="og:site_name" content="McSmart App - Daily knowledge to make you smarter">
    <meta name="og:type" content="article">
    <meta name="og:image" content="{{url('/assets/logo/logo.png')}}">
    <meta name="og:url" content="https://mcsmart.app">

    @stack('page-meta')

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="{{asset('/assets/vendor/fontawesome/css/all.css')}}"
    >
    <link
        rel="stylesheet"
        href="{{asset('/assets/vendor/latest/bootstrap.min.css')}}"
    >

    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Yeseva+One&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap');

        body {
            font-family: 'Nunito', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }

        .footer {
            background-color: #000000;
            color: #fff;
            padding: 10px 0;
            font-family: 'Montserrat', sans-serif;
        }

        .c-footer-left, .c-footer-right {
            text-align: center;
        }
        .c-footer-right {
            margin-top: 5px;
        }
        .f-inter {
            font-family: 'Inter', sans-serif;
        }
        .c-dmobile {
            display: block;
        }
        .c-hmobile {
            display: none;
        }

        @media only screen and (min-width: 768px) {
            .c-footer-right {
                text-align: right !important;
                margin-top: 0 !important;
            }
            .c-footer-left {
                text-align: left !important;
            }
            .c-dmobile {
                display: none !important;
            }
            .c-hmobile {
                display: inline !important;
            }
        }
    </style>

    @stack('page-css')
</head>
<body>

    @yield('main')

    <script src="{{asset('/assets/vendor/latest/jquery.slim.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/latest/bootstrap.bundle.min.js')}}"></script>
   
    @stack('page-js')
</body>
</html>