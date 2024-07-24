<!-- Author: https://github.com/filzarr -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    @vite('resources/css/app.css')
    <title>Inspektorat Sumut</title>
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="https://inspektorat.sumutprov.go.id/images/logo_inspektorat.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <style>
        body {
            font-family: 'Public Sans', sans-serif;
        }

        .flip-card {
            background-color: transparent;
            width: 250px;
            height: 200px;
            perspective: 1000px;
            border-radius: 10px;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        body {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;

        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {}

        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
        }
    </style>
</head>

<body class="antialiased">
    @include('sweetalert::alert')
    <x-Navbar></x-Navbar>
    @yield('content')
    @include('components.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script lang="javascript">
        window.onload = function() {

            document.getElementById('modalEl').click();
        };
        document.addEventListener('DOMContentLoaded', function() {
       
            console.log(window.location.href);
            const navbar = document.getElementById('navbar');
            const carousel = document.getElementById('carousel');
            if (window.location.pathname === '/') {
                navbar.classList.add('bg-transparent');
            } 
            else{
                navbar.classList.add('bg-white');
            }
            window.addEventListener('scroll', function() {
                const carouselHeight = carousel.offsetHeight;
                if (window.scrollY > carouselHeight) {
                    navbar.classList.add('bg-white');
                } else {
                    navbar.classList.remove('bg-white');
                }
            });
        });
    </script>
</body>

</html>
