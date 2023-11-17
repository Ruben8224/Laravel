<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo|Landing</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
                <li><a href="/index.html">Inicio</a></li>
                <li><a href="/pc/pc.html">PC</a></li>
                <li><a href="/ps/ps.html">PS</a></li>
                <li><a href="/psp/psp.html">PSP</a></li>
            </ul>

        </nav>
    </header>

    <section class="inicio" id="home">
        <div class="content">
            <div class="text">
                <h1> Videojuegos</h1>
                <p>EXPLORAR POR CATEGORÍA</p>
            </div>
            <a href="/pc/pc.html">PC.</a>
            <a href="/ps/ps.html">PS</a>
            <a href="/psp/psp.html">PSP</a>
        </div>
    </section>

    <section class="portafolio" id="portfolio">
        <h2>Explorar</h2>
        <p> Explora todas las categorías en PC, ps y psp</p>
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
                <img src="/img/homejuegos/Naruto.jpeg">
                <h3>Naruto Shippuden Ultimate Ninja 6</h3>
                <p>Descarga el juego de Naruto Shippuden Ultimate Ninja 6 para la consola PlayStation 2,
                    <br>en formato ISO 1 link por Google Drive, MEGA, MediaFire y 1fichier.
                </p>
                <div class="content">
                    <div class="text">
                        <a href="https://www.gamesgx.net/ps2/naruto-shippuden-ultimate-ninja-6">Link</a>
                    </div>
            </li>

            <li class="card">
                <img src="/img/homejuegos/dragon Ball Z - Shin Budokai.jpeg">
                <h3>Juego Dragon Ball Z - Shin Budokai</h3>
                <p>La popular serie Dragon Ball Z comienza su viaje en PSP con este título exacto.
                    <br>Shin Budokai es un juego de duelo con 7 modos de historia y muchos personajes para elegir.
                </p>
                <div class="content">
                    <div class="text">
                        <a href="https://www.gamulator.com/es/roms/psp/dragon-ball-z-shin-budokai">Link</a>
                    </div>
            </li>
        </ul>
    </section>

    <footer>
        <div>
            <span>Copyright © 2023 All Rights Reserved</span>
            <span class="link">
                <a href="https://www.facebook.com/">Facebook</a>
                <a href="https://www.instagram.com/">Instagram</a>
            </span>
        </div>
    </footer>

</body>

</html>
