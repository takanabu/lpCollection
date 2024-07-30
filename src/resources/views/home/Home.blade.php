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

    <!-- アドセンス -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1125921042756654"
    crossorigin="anonymous"></script>


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
                    <a href="#lp">
                        LP
                    </a>
                </li>
                <li>
                    <a href="#news">
                        News
                    </a>
                </li>
                <li>
                    <a href="#references">
                        References
                    </a>
                </li>
                <li>
                    <a href="/blog"target="_blank">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="/contact"target="_blank">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="/privacy-policy"target="_blank">
                        Policy
                    </a>
                </li>
                <li>
                    <!-- 新規ページ開く及びｾｷｭﾘﾃｨ対策 -->
                    <a href=""
                    target=""
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

    <!-- lp -->
    <!-- idをヘッダーのa href="#about"と合わせるｸﾘｯｸで移動出来る -->
    <!-- classをwrapperで統一する事で幅が統一される -->
    <section id="lp" class="wrapper">
        <h2 class="sec-title">
            Lp Collection
        </h2>
        <ul>
            <li>
                <iframe src="/jsdesign" width="auto" height="auto">
                </iframe>
            </li>
            <li>
                <dl>
                    <a href="/jsdesign"target="_blank">
                        <dt>
                            一部クリックすると画像が動くサイト！
                        </dt>
                    </a>
                    <dd>
                        HTML、CSS、JavaScript、という技術で作成されています。
                    </dd>
                </dl>
            </li>
            <li>
                <iframe src="/bs5website" width="auto" height="auto"></iframe>
            </li>
            <li>
                <dl>
                    <a href="/bs5website"target="_blank">
                        <dt>
                            あらゆるところが動くおしゃれサイト！
                        </dt>
                    </a>
                    <dd>
                        HTML、CSS、JavaScript、Bootstrap5、という技術で作成されています。
                    </dd>
                </dl>
            </li>
            <li>
                <iframe src="/hcbackvideo" width="auto" height="auto"></iframe>
            </li>
            <li>
                <dl>
                    <a href="/hcbackvideo"target="_blank">
                        <dt>
                            文字の後ろで動画が動く幻想的なサイト！
                        </dt>
                    </a>
                    <dd>
                        HTML、CSS、だけの技術で作成されています。
                    </dd>
                </dl>
            </li>
            <li>
                <iframe src="/gpanime" width="auto" height="auto"></iframe>
            </li>
            <li>
                <dl>
                    <a href="/gpanime"target="_blank">
                        <dt>
                            写真が動いてるように見えるアニメーションサイト！
                        </dt>
                    </a>
                    <dd>
                        HTML、CSS、JavaScriptのgsap、で作成されています。
                    </dd>
                </dl>
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
    <section id="references" class="wrapper">
        <h2 class="sec-title">
            References
        </h2>
        <p>
            こちらのYouTubeチャンネルとサイトを参考にさせて頂きました！<br>
            非常にわかりやすく丁寧に手順を紹介してくれています。<br><br><br>
            <a href="https://www.youtube.com/@user-hl9uv6cv7k"target="_blank">
                プログラミングチュートリアル YouTubeチャンネル
            </a><br><br>
            <a href="https://code-jump.com/"target="_blank">
                Codejumpサイト
            </a>
        </p>
    </section>
</body>
</html>
