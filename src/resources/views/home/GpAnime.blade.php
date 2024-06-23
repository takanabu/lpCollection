<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GsapAnime</title>
        <link rel="stylesheet" href="{{ asset('css/GpAnime.css') }}">
    </head>
    <body>
        <header>
            <nav>
                <h3 id="logo">Car Shop</h3>
                <img src="./img/gpanime/menu.png"  alt="" class="menu"/>
            </nav>

            <section>
                <div class="hero">
                    <img src="./img/gpanime/car.jpg"  alt=""/>
                    <h1 class="headline">Big Dream</h1>
                </div>
            </section>
        </header>

        <div class="slider"></div>

        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

        <script src="{{ asset('js/GpAnime.js') }}"></script>
    </body>
</html>