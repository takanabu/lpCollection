<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- アドセンス -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1125921042756654"
    crossorigin="anonymous"></script>



    <title>Javascript-Design</title>
    <link rel="stylesheet" href="{{ asset('css/JsDesign.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <nav>
            <div class="logo-area">
                <img src="./img/logo.png" alt="" class="logo"/>
                <h2>Interior Design</h2>
            </div>

            <div class="nav-links">
                <ul>
                    <a href=""><li>Home</li></a>
                    <a href=""><li>Detail</li></a>
                    <a href=""><li>Shop</li></a>
                    <a href=""><li>Contact</li></a>
                </ul>
            </div>
        </nav>

        <!-- information section -->
        <div class="information">
            <div class="overlay">
                <img src="./img/pc.png" class="pc"/>
                <div id="circle">
                    <div class="feature one">
                        <img src="./img/camera.png" alt="">
                        <div>
                            <h1>camera</h1>
                            <p>Beautiful lens.</p>
                        </div>
                    </div>
                    <div class="feature two">
                        <img src="./img/processor.png" alt="">
                        <div>
                            <h1>processor</h1>
                            <p>Processor is very important.</p>
                        </div>
                    </div>
                    <div class="feature three">
                        <img src="./img/battery.png" alt="">
                        <div>
                            <h1>Battery</h1>
                            <p>Battery is Powerful.</p>
                        </div>
                    </div>
                    <div class="feature four">
                        <img src="./img/display.png" alt="">
                        <div>
                            <h1>Display</h1>
                            <p>Beautiful display.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- control section -->
        <div class="control">
            <img src="./img/arrow.png" id="upBtn">
            <h3>Feature</h3>
            <img src="./img/arrow.png" id="downBtn">
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>