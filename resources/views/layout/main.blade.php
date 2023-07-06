<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .flip-box {
            background-color: transparent;
         
            border: 1px solid #f1f1f1;
            perspective: 1000px;
        }

        .flip-box-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-inner {
            transform: rotateY(180deg);
        }

        .flip-box-front,
        .flip-box-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-box-front {
            background-color: #bbb;
            color: black;
        }

        .flip-box-back {
            background-color: #555;
            color: white;
            transform: rotateY(180deg);
        }
    </style>
</head>
<body class="antialiased">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
    @include('components.navbar')
    @yield('content')
@include('components.footer')
</html>