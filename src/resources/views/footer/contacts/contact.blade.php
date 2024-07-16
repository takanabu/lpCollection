<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/contact">
                おといあわせフォーム
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>
                    お問い合わせ
                </h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class=form__group-title>
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">必須
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="プログラミング太郎" />
                        </div>
                        <div class="form__error">
                            <!-- 後でバリデーション記載 -->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class=form__group-title>
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">必須
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="abcd@efg.com" />
                        </div>
                        <div class="form__error">
                            <!-- 後でバリデーション記載 -->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">
                            お問い合わせ内容
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea class="form__input--text" name="content" placeholder="" >
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">
                        送信
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>