<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo|Landing</title>
    <link rel="stylesheet" href="{!! asset('css/psp.css') !!}">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <h2 class="logo"><a href="/img/pawel-kadysz-CuFYW1c97w8-unsplash.jpg">LOGO</a></h2>

            <input type="checkbox" id="menu-toggler">

            <label for="menu-toggler" id="hamburger-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z" />
                </svg>
            </label>

            <ul class="all-links">
                <li><a href="{{ url('landing/home') }}">Home</a></li>
                <li><a href="{{ url('landing/pc') }}">PC</a></li>
                <li><a href="{{ url('landing/ps') }}">PS</a></li>
                <li><a href="{{ url('landing/psp') }}">PSP</a></li>
                <li><a href="{{ url('landing/viewtable') }}">tabla</a></li>
            </ul>

        </nav>
    </header>

    <section class="inicio" id="home">
        <div class="content">
            <div class="text">
                <h1> Videojuegos</h1>
                <p>EXPLORAR POR CATEGORÍA</p>
            </div>
            <a href="">PS3</a>
        </div>
    </section>

    <section class="portafolio" id="portfolio">
        <h2>Portafolio</h2>
        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem id quae accusantium. </p>
        <ul class="cards">
            <li class="card">
                <img alt="img">
                <h3>Titulo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem id quae accusantium. </p>
            </li>
            <li class="card">
                <img alt="img">
                <h3>Titulo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem id quae accusantium. </p>
            </li>
            <li class="card">
                <img alt="img">
                <h3>Titulo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem id quae accusantium. </p>
            </li>
        </ul>
    </section>

    <footer>
        <div>
            <span>Copyright © 2023 All Rights Reserved</span>
            <span class="link">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
            </span>
        </div>
    </footer>

</body>

</html>
