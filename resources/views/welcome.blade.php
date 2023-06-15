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
    <div class="w-full h-12 bg-[#13345B] px-24">
        <div class="flex justify-between w-full h-full items-center text-[#EFEFF0]">
            <ul class="flex  gap-3">
                <li>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a>
                </li>
                <li>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg></a>
                </li>
                <li>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg></a>
                </li>
                <li>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg></a>
                </li>
            </ul>
            <div class="flex text-xs gap-5">
                <p>DOWNLOAD</p>
                <p>BUKU TAMU</p>
                <p>BANTUAN</p>
            </div>
        </div>
    </div>
    <div class="w-full h-20 bg-[#214E6D] px-20" id="navbar">
        <div class="flex justify-between w-full align-middle items-center h-full">
            <div class="flex">
                <img src="logo_inspektorat.png" class=" inline h-16" alt="">
                <div class="grid font-medium text-white/90 text-2xl">
                    <p class="-mb-3">Inspektorat</p>
                    <p class="">Sumatera Utara</p>
                </div>
            </div>
            <div class="">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border  md:flex-row md:space-x-8 md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white  rounded md:bg-transparent t"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="py-2 pl-3 pr-4 flex items-center justify-between w-full  text-white">Profile <svg
                                class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="py-2 pl-3 pr-4 flex items-center justify-between w-full  text-white">Irban <svg
                                class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="py-2 pl-3 pr-4 flex items-center justify-between w-full  text-white">Regulasi <svg
                                class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="py-2 pl-3 pr-4 flex items-center justify-between w-full  text-white">Pedoman Dan
                            Standar <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white  rounded md:bg-transparent t"
                            aria-current="page">PPID</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white  rounded md:bg-transparent t"
                            aria-current="page">Saber Pungli</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class=" text-white bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <div id="default-carousel" class="relative w-full " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden  md:h-[35rem]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="slide1.jpg"
                    class=" brightness-50  absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute left-56 top-56">
                    <p class=" text-white  text-3xl block font-semibold w-[30rem]">Channel Layanan Pengaduan Masyarakat
                        Terkait Pembangunan Sumatera Utara</p>
                    <button
                        class=" bg-cyan-700 p-2 mt-3 font-medium rounded-md text-white text-lg">Selengkapnya</button>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="slide1.jpg"
                    class=" brightness-50  absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute left-56 top-56">
                    <p class=" shadow-lg text-white  text-3xl block font-semibold w-[30rem]">Channel Layanan Pengaduan
                        Masyarakat Terkait Pembangunan Sumatera Utara</p>
                    <button
                        class=" bg-cyan-700 p-2 mt-3 font-medium rounded-md text-white text-lg">Selengkapnya</button>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="slide1.jpg"
                    class=" brightness-50  absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute left-56 top-56">
                    <p class=" shadow-lg text-white  text-3xl block font-semibold w-[30rem]">Channel Layanan Pengaduan
                        Masyarakat Terkait Pembangunan Sumatera Utara</p>
                    <button
                        class=" bg-cyan-700 p-2 mt-3 font-medium rounded-md text-white text-lg">Selengkapnya</button>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="slide1.jpg"
                    class=" brightness-50  absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute left-56 top-56">
                    <p class=" shadow-lg text-white  text-3xl block font-semibold w-[30rem]">Channel Layanan Pengaduan
                        Masyarakat Terkait Pembangunan Sumatera Utara</p>
                    <button
                        class=" bg-cyan-700 p-2 mt-3 font-medium rounded-md text-white text-lg">Selengkapnya</button>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="slide1.jpg"
                    class=" brightness-50  absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute left-56 top-56">
                    <p class=" shadow-lg text-white  text-3xl block font-semibold w-[30rem]">Channel Layanan Pengaduan
                        Masyarakat Terkait Pembangunan Sumatera Utara</p>
                    <button
                        class=" bg-cyan-700 p-2 mt-3 font-medium rounded-md text-white text-lg">Selengkapnya</button>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                    </path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="w-full mt-20 px-28">
        <div class="flex justify-between gap-10">
            <div class=" w-3/6">
                <div class="flex justify-start">
                    <p class=" text-4xl uppercase font-bold text-[#3E6E8B]">Berita Terkini</p>
                </div>
                <div class="grid grid-rows-6 mt-20 gap-10">
                    <div class="flex gap-10">
                        <img src="tes.jpg" class="  w-52 h-40 rounded-xl drop-shadow-2xl border border-black/10"
                            alt="">
                        <div class=" grid justify-stretch">
                            <p class="text-[#3E6E8B] text-lg font-bold">UPACARA HARLAH PANCASILA 2023 ITPROVSU</p>
                            <p class=" text-sm font-bold text-black/80">15 Juni 2023 Posted By Admin </p>
                            <p class=" capitalize text-sm font-semibold break-words text-black/70">Medan (01/06),
                                Pelaksanaan Upacara Bendera dalam rangka memperingati Hari Lahir Pancasila Tahun 2023
                                Inspektorat Provinsi Sumatera Utara pada Hari Kamis (01/06/2023) dilaksanakan di
                                Lapangan Upacara Inspektorat Provsu di Jlan KH. Wahid Hasyim No. 8 Medan.</p>
                        </div>
                    </div>

                </div>
                <div class="flex justify-start">
                    <p class=" font-semibold text-[#3E6E8B] text-xl">Lihat Berita Lainnya</p>
                </div>
            </div>
            <div class="w-2/6 px-10">
                <div class="w-full   border-2 border-black/5 bg-[#EFEFF0] px-5 py-3 rounded-md">
                    <div class="w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Inpektur
                        Inspektorat Sumatera Utara</div>
                    <div class=""><img src="kepala.png" class=" h-60 mt-3 w-full" alt=""></div>
                    <div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Link
                        Terkait</div>
                    <div class="grid grid-cols-3 gap-10 mt-5">
                        <img src="link1.png" alt="" class="  border-4 border-black/10 shadow-md">
                        <img src="link2.jpeg" alt="" class=" border-4 border-black/10 shadow-md">
                        <img src="link3.jpeg" alt="" class=" border-4 border-black/10 shadow-md">
                    </div>
                    <div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Statistik
                        Pengunjung</div>
                    <div class=" mt-5 w-full">
                        <ul class="list-image-checkmark space-y-2  text-black/90 font-semibold text-lg px-5   w-full">
                            <li class="w-full">
                                <div class="w-full flex justify-between">
                                    <p>Pengunjung</p>
                                    <p>1000</p>
                                </div>
                            </li>
                            <li class="w-full">
                                <div class="w-full flex justify-between">
                                    <p>Pengunjung</p>
                                    <p>1000</p>
                                </div>
                            </li>
                            <li class="w-full">
                                <div class="w-full flex justify-between">
                                    <p>Pengunjung</p>
                                    <p>1000</p>
                                </div>
                            </li>
                            <li class="w-full">
                                <div class="w-full flex justify-between">
                                    <p>Pengunjung</p>
                                    <p>1000</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Newslatter
                    </div>
                    <div class=" mt-5 w-full">
                        <p class=" font-semibold text-black/50 text-sm">Subscribe untuk mendapatkan berita terbaru dari
                            kami</p>
                        <input type="text"
                            class="w-full border-black/30 shadow-lg rounded-sm placeholder:text-center mt-3 h-12"
                            placeholder="Masukkan email ">
                        <button class=" bg-blue-500 text-white w-full mt-5 py-3 font-semibold">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full mt-10 px-28 py-10 bg-[#EFEFF0]">
        <div class="flex justify-start">
            <p class=" font-bold text-3xl text-[#3E6E8B] underline underline-offset-8">Agenda</p>
        </div>
        <div class="flex justify-start">
            <ul class="flex mt-10 gap-5 text-lg font-semibold">
                <li class="text-[#3E6E8B]">Semua</li>
                <li>Festival</li>
                <li>Pertemuan</li>
                <li>Workshop</li>
            </ul>
        </div>
        <div class="grid grid-cols-3 mt-10 gap-10">
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>


        </div>
        <div class="flex w-full justify-center mt-10">
            <p class=" font-semibold text-[#3E6E8B] text-xl">Lihat Seluruh Agenda</p>
        </div>
    </div>
    <div class="w-full mt-10 px-28  mb-10">
        <div class="flex justify-start">
            <p class=" font-bold text-3xl text-[#3E6E8B] underline underline-offset-8">Galeri Foto</p>
        </div>

        <div class="grid grid-cols-5 gap-2 mt-10">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div class="flip-box-back">
                        <h2>Paris</h2>
                        <p>What an amazing city</p>
                    </div>
                </div>
            </div>
          
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
        </div>

    </div>
    <div class="w-full mt-16 px-28  mb-10">
        <div class="flex justify-start">
            <p class=" font-bold text-3xl text-[#3E6E8B] underline underline-offset-8">Galeri Video</p>
        </div>
        <div class="grid grid-cols-3 gap-16 mt-10  w-full items-center">
            <div class="relative">
                <img src="tes.jpg" class=" grayscale" alt="">
                <div class="absolute text-white top-2/4 right-2/4 "><svg xmlns="http://www.w3.org/2000/svg"
                        width="50" height="50" fill="currentColor" class="bi bi-play-circle"
                        viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                    </svg></div>
            </div>
            <div class="relative">
                <img src="tes.jpg" class=" grayscale" alt="">
                <div class="absolute text-white top-2/4 right-2/4 "><svg xmlns="http://www.w3.org/2000/svg"
                        width="50" height="50" fill="currentColor" class="bi bi-play-circle"
                        viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                    </svg></div>
            </div>
            <div class="relative">
                <img src="tes.jpg" class=" grayscale" alt="">
                <div class="absolute text-white top-2/4 right-2/4 "><svg xmlns="http://www.w3.org/2000/svg"
                        width="50" height="50" fill="currentColor" class="bi bi-play-circle"
                        viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                    </svg></div>
            </div>
            {{-- <iframe height="200" width="400" src="https://www.youtube.com/embed/faR3YhwqXgs"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe> --}}
            {{-- <iframe height="250" width="400" src="https://www.youtube.com/embed/faR3YhwqXgs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe height="200" width="400" src="https://www.youtube.com/embed/faR3YhwqXgs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
        </div>

    </div>
    <div class="w-full mt-10 px-28 py-10 bg-[#EFEFF0]">
        <div class="flex justify-center">
            <p class="font-bold text-3xl text-[#3E6E8B] underline underline-offset-8">Data Pegawai Inspektorat</p>
        </div>
        <div id="fullWidthTabContent" class="border-t  dark:border-gray-600">
            <div class="   rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
                aria-labelledby="stats-tab">
                <dl
                    class="grid max-w-screen-xl grid-cols-2 gap-8  mx-auto text-center text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Contributors</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold text-center">90</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Top Forbes companies</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Organizations</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <div class="mt-16 w-full px-28 bg-[#3E6E8B] py-10">
        <div class="grid grid-cols-5 gap-20">
            <div class="">
                <div class="flex justify-start">
                    <p class="font-bold text-2xl text-white/80 ">Alamat</p>
                </div>

                <p class="font-bold mt-5 text-white/80 ">Jl. K.H. Wahid Hasyim No.8, Merdeka, Kec. Medan Baru, Kota
                    Medan, Sumatera Utara 20222</p>

            </div>
            <div class="">
                <div class="flex justify-start">
                    <p class="font-bold text-2xl text-white/80 ">Program</p>
                </div>
                <ul class="font-bold mt-5 text-white/80 ">
                    <li>Saber Pungli</li>
                    <li>PPID</li>
                </ul>

            </div>
            <div class="">
                <div class="flex justify-start">
                    <p class="font-bold text-2xl text-white/80 ">Visi Misi</p>


                </div>
            </div>
            <div class=" col-span-2 w-full h-96"><iframe class=" w-full min-h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.057349129756!2d98.65560627488736!3d3.5742878963998845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fd668f63c3f%3A0x3838ce024c2994ea!2sInspektorat%20Provinsi%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1686853138098!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe></div>


        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
