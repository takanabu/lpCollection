<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>エンジニアブログ</title>
    <link rel="stylesheet" href="{{ asset('css/Blog.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
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

    <div id="contents">
        <main id=main-contents>
            <div id=main-top>
                <div id=main-top-bottom></div>
                    <div class=main-top-text>
                        <p style="text-align: left; font-size: 80%">当サイトはアフィリエイト広告を利用しています</p>
                    </div>
                </div>
            </div>
            <div class="toppost-list-box">
                <input type="radio" name="switch" id="tab-1" checked>
                <input type="radio" name="switch" id="tab-2">
                <input type="radio" name="switch" id="tab-3">
                <input type="radio" name="switch" id="tab-4">
                <input type="radio" name="switch" id="tab-5">
                <ul class=tabBtn-mag>
                    <li>
                        <label for="tab-1">最新記事</label>
                    </li>
                    <li>
                        <label for="tab-2">サイト作成方法</label>
                    </li>
                    <li>
                        <label for="tab-3">４５歳から始めたプログラミング</label>
                    </li>
                    <li>
                        <label for="tab-4">プログラミング教室どうだった？</label>
                    </li>
                </ul>
            </div>
            <div class="toppost-list-box-inner">
                <div class="post-list-mag autoheight">
                    <article class="post-list-item">
                        <a class="post-list-link">
                            <div class="post-list-inner">
                                <div class="post-list-thumb">
                                    <img src="" class="" alt="" decoding="" fetchpriority="" data-srcset="" data-sizes="" data-eio-rwidth="" data-eio-rheight="" sizes="" srcset="">
                                    <noscript>
                                        "<img src="" class="" decoding="async" fetchpriority="high" sizes="" data-eio="l" />"
                                    </noscript>
                                </div>
                                <div class="post-list-meta vcard">
                                    <span class="post-list-cat category-specialzedblog" syyle="" >

                                    </span>

                                </div>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
        </main>
        <aside>
            <section class="author">
                <img src="./img/blog/MabuGaku.png" alt="">
                <h4>Gacu</h4>
                <p>
                    コーチテックのプログラミング講座卒業後
                </p>
            </section>
        </aside>
    </div>
</body>
</html>
