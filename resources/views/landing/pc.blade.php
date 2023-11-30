<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo|Landing</title>
    <link rel="stylesheet" href="{!! asset('css/pc.css') !!}">
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
            <a href="/pc.html">PC.</a>
        </div>
    </section>

    <section class="portafolio" id="portfolio">
        <h2>PC</h2>
        <p> Explora todos los videojuegos para los de PC </p>
        <ul class="cards">

            <li class="card">
                <img src="/img/homejuegos/ResidentevilRacooncity.jpg">
                <h3>Resident evil raccon city</h3>
                <p>Descargar Resident Evil Operation Raccoon City para PC en Español </p>
                <div class="content">
                    <div class="text">
                        <a href="https://pivigames.blog/r-re-city/">Link</a>
                    </div>
            </li>

            <li class="card">
                <img src="/img/PC/Left4dead.jpeg">
                <h3>Lef 4 Dead</h3>
                <p>Left 4 Dead (abreviado como L4D) es un videojuego cooperativo multijugador de disparos en primera
                    persona de acción y terror. </p>
                <div class="content">
                    <div class="text">
                        <a href="https://pivigames.blog/r-re-city/">Link</a>
                    </div>
            </li>

            <li class="card">
                <img src="/img/PC/dyinglingth.jpeg">
                <h3>Dying light</h3>
                <p>Dying Light: Enhanced Edition es todo lo que necesitas para comenzar tu aventura en este mundo
                    posapocalíptico gobernado por zombis. </p>
                <div class="content">
                    <div class="text">
                        <a href="https://pivigames.blog/dying-l1ght-pc-espanol-update-v1-47-online-steam-v4/">Link</a>
                    </div>
            </li>

            <li class="card">
                <img src="/img/PC/gta san andreas.jpg">
                <h3>gta san andreas</h3>
                <p>Descargue la última versión de Grand Theft Auto: San Andreas. Alcanza la cima del mundo del crimen
                    con esta versión para Android de un clásico.</p>
                <div class="content">
                    <div class="text">
                        <a href="https://es.wizcase.com/download/grand-theft-auto-san-andreas/">Link</a>
                    </div>
            </li>

            <li class="card">
                <img src="/img/PC/mortal kombat X.jpg">
                <h3>Mortal kombat X</h3>
                <p>Mortal Kombat X (o Mortal Kombat 10) es un juego de lucha para PC perteneciente a una saga famosa por
                    su gameplay visceral y sus personajes violentos.</p>
                <div class="content">
                    <div class="text">
                        <a href="https://mortal-kombat-x.softonic.com/descargar">Link</a>
                    </div>
            </li>

            <li class="card">
                <img src="/img/PC/halo.webp">
                <h3>Halo</h3>
                <p> En esta primera versión de Halo nos encontramos en un escenario futurista en medio de un universo
                    circular plagado de batallas que resolver y enigmas por descifrar ametralladora en mano. </p>
                <div class="content">
                    <div class="text">
                        <a href="https://halo.uptodown.com/windows">Link</a>
                    </div>
            </li>

            <li class="card">
                <img src="/img/PC/five-nights-at-freddys-14650-0.jpg">
                <h3>Five Nights at Freddy's</h3>
                <p>Five Nights at Freddy's es un juego de tipo Survival Horror en el que has de sobrevivir 5 noches en
                    tu nuevo trabajo de verano. </p>
                <div class="content">
                    <div class="text">
                        <a href="https://www.malavida.com/es/soft/five-nights-at-freddys/">Link</a>
                    </div>
            </li>

            <li class="card">
                <img src="/img/PC/five-nights-at-freddys4.webp">
                <h3>Five Nights at Freddy's 4</h3>
                <p>Descarga la última versión de Five Nights at Freddy's 4 para Windows. </p>
                <div class="content">
                    <div class="text">
                        <a src="https://five-nights-at-freddys-4.uptodown.com/windows/descargar">Link</a>
                    </div>
            </li>

            <li class="card">
                <img src="/img/PC/geometry-dash.png">
                <h3>Descargar Geometry Dash</h3>
                <p> Descarga Geometry Dash gratis en tu computadora y portátil a través del emulador de aplicaciones de
                    Android.</p>
                <div class="content">
                    <div class="text">
                        <a href="https://geometry-dash.softonic.com/">Link</a>
                    </div>
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
