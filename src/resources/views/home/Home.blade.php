<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ディスクリプション -->
    <meta name="description" content="こんな魔法のようなＬＰが描けるの！？　といったようなプログラミングでこんな事が出来ます！的なことをゆるく紹介していくサイトです" />

    <!-- フォント -->
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">

    <!-- CSSとリセットを適用 -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">

    <title>Magic Code</title>

</head>

<body>
    <!-- ヘッダー -->
    <header id="header">
        <h1 class="site-title">
            <a href="">
                Magic Code
            </a>
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="#about">
                        About
                    </a>
                </li>
                <li>
                    <a href="#LP">
                        LP collection
                    </a>
                </li>
                <li>
                    <a href="#blog">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        Contact
                    </a>
                </li>
                <li>
                    <!-- 新規ページ開く及びｾｷｭﾘﾃｨ対策 -->
                    <a href="https://www.Twitter.com"
                    target="_blank"
                    rel="noopener noreferrer"
                    ><img src="./img/home/twitter.png" alt="Twitter" class="icon"
                    /></a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- メイン -->
    <div id="main">

    <!-- 画像のﾚｷﾎﾟﾝｼﾌﾞ設定 -->
    <!-- sourece ｽﾏﾎｻｲｽﾞの時の設定  -->

        <picture>
            <source media="(max-width: 600px)" srcset="./img/home/main-lp2.jpg" />
            <img src="./img/home/main-lp.jpg" alt="">
        </picture>
    </div>

    <!-- about -->
    <section id="about" class="wrapper">
        <h2 class="sec-title">
            About
        </h2>
        <ul>
            <li>Magic Code サイト</li>
        </ul>
        <p>
            このサイトはプログラミングの技術を使って魔法のような ＬＰ ( Landing Page ランディングページ 商品やサービスの紹介を1ページにまとめたwebページ )を紹介していくサイトです。<br>
            今後は紹介したＬＰのコードの描き方も紹介していこうと思っています。
        </p>
    </section>

    <!-- works -->
    <!-- idをヘッダーのa href="#about"と合わせるｸﾘｯｸで移動出来る -->
    <!-- classをwrapperで統一する事で幅が統一される -->
    <section id="works" class="wrapper">
        <h2 class="sec-title">
            Works
        </h2>
        <ul>
            <li>
                <iframe src="https://www..com" width="500" height="300"></iframe>
                <iframe src="https://www..com" width="500" height="300"></iframe>
                <iframe src="https://www..com" width="500" height="300"></iframe>
                <iframe src="https://www..com" width="500" height="300"></iframe>
            </li>
        </ul>
    </section>


    <!-- News -->
    <section id="news" class="wrapper">
        <h2 class="sec-title">
            News
        </h2>

        <!-- dlﾀｸﾞは説明リストの事 -->
        <!-- dtは日付 -->
        <!-- ddは本文 -->
        <dl>
            <dt>2024/07/27</dt>
            <dd>本サイトをリリースしました</dd>
        </dl>
    </section>


    <!-- References -->
    <section id="References" class="wrapper">
        <h2 class="sec-title">
            References
        </h2>
        <p>
            こちらのYouTubeチャンネルを参考にさせて頂きました！<br>
            非常にわかりやすく丁寧にコードを紹介してくれています。
        </p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/v=rDTDAWxTF1A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </section>




</body>
</html>
