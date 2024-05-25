<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>エンジニアブログ</title>
    <link rel="stylesheet" href="{{ asset('css/Blog.css') }}">
</head>
<body>
    <header>
        <div class="wrapper">
        <h2>エンジニアのブログ</h2>
        </div>

        <nav>
            <ul class="wrapper">
                <li><a href="#">新着</a></li>
                <li><a href="#">コラム</a></li>
                <li><a href="#">カテゴリ</a></li>
                <li><a href="#">コンタクト</a></li>
            </ul>
        </nav>
    </header>

    <div class="new-article wrapper">
        <article>
            <img src="./img/blog/pc01.jpg" alt="">
            <p>半年間で６９万円のプログラミング教室の受講料は高かった？安かった？</p>
            <div><a href="#">もっと読む</a></div>
        </article>
        <article>
            <img src="./img/blog/pc02.jpg" alt="">
            <p>プログラミング未経験の４５歳がプログラミング教室を卒業してその後は</p>
            <div><a href="#">もっと読む</a></div>
        </article>
        <article>
            <img src="./img/blog/pc03.jpg" alt="">
            <p>プログラミングで食べていくというのは短距離走ではなくマラソンだったのか？</p>
            <div><a href="#">もっと読む</a></div>
        </article>
    </div>
    <div class="container wrapper">
        <main>
            <article>
                <h1>フロントエンドの最新技術</h1>
                <ul>
                    <li>2022/01/15</li>
                    <li>カテゴリ</li>
                </ul>
                <img src="./img/blog/pc01.jpg" alt="">
                <div class="article-intro">
                    <p>
                    最新のフロントエンド技術について思うこと。
                    </p>
                </div>
                <div>
                    <a href="#">もっと読む</a>
                </div>
            </article>
            <article>
                <h1>フロントエンドの最新技術</h1>
                <ul>
                    <li>2022/01/15</li>
                    <li>カテゴリ</li>
                </ul>
                <img src="./img/blog/pc01.jpg" alt="">
                <div class="article-intro">
                    <p>
                    最新のフロントエンド技術について思うこと。
                    </p>
                </div>
                <div>
                    <a href="#">もっと読む</a>
                </div>
            </article>
            <article>
                <h1>フロントエンドの最新技術</h1>
                <ul>
                    <li>2022/01/15</li>
                    <li>カテゴリ</li>
                </ul>
                <img src="./img/blog/pc01.jpg" alt="">
                <div class="article-intro">
                    <p>
                    最新のフロントエンド技術について思うこと。
                    </p>
                </div>
                <div>
                    <a href="#">もっと読む</a>
                </div>
            </article>
        </main>
        <aside>
            <section class="author">
                <img src="./img/blog/MabuGaku.png" alt="">
                <h4>Mabu GAku</h4>
                <p>
                    コーチテックのプログラミング講座卒業後
                </p>
            </section>
            <section class="ranking">
                <h4>ランキング</h4>
                <div class="ranking-article">
                    <a href="#">
                        <img src="./img/blog/pc01.jpg" alt="">
                        <p>HTML/CSS入門</p>
                    </a>
                </div>
                <div class="ranking-article">
                    <a href="#">
                        <img src="./img/blog/pc02.jpg" alt="">
                        <p>Javascript入門</p>
                    </a>
                </div>
                <div class="ranking-article">
                    <a href="#">
                        <img src="./img/blog/pc01.jpg" alt="">
                        <p>Python入門</p>
                    </a>
                </div>
            </section>
            <section class="archive">
                <h4>アーカイブ</h4>
                <ul>
                    <li><a href="#">2022/01/25(XX日)</a></li>
                    <li><a href="#">2022/01/25(XX日)</a></li>
                    <li><a href="#">2022/01/25(XX日)</a></li>
                    <li><a href="#">2022/01/25(XX日)</a></li>
                    <li><a href="#">2022/01/25(XX日)</a></li>
                    <li><a href="#">2022/01/25(XX日)</a></li>
                    <li><a href="#">2022/01/25(XX日)</a></li>
                    <li><a href="#">2022/01/25(XX日)</a></li>
                </ul>
            </section>
        </aside>
    </div>
</body>
</html>
