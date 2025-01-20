<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo">
                FashionablyLate
            </a>
        </div>
    </header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">＊</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="last_name" placeholder="（例）山田" 　value="{{ old('last_name') }}" />
                            <input type="text" name=" first_name" placeholder="（例）太郎" 　value="{{ old('first_name') }}" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->

                        </div>

                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">＊</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <input type="radio" name="gender" value="1" checked>
                            <label for="men" value="男性">男性</label>
                            <input type="radio" name="gender" value="2" checked>
                            <label for="women" value="女性">女性</label>
                            <input type="radio" name="gender" value="3" checked>
                            <label for="other" value="その他">その他</label>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                            @error('gender')
                            {{ $massage }}
                            @enderror
                        </div>

                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">メールアドレス</span>
                                <span class="form__label--required">＊</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                                </div>
                                <div class="form__error">
                                    <!--バリデーション機能を実装したら記述します。-->
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">電話番号</span>
                                <span class="form__label--required">＊</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="tel" name="tel" maxlength="5" placeholder="090" />-
                                    <input type="tel" name="tel" maxlength="5" placeholder="1234" />-
                                    <input type="tel" name="tel" maxlength="5" placeholder="5678" value="{{ old('tel') }}" />
                                </div>

                                <div class="form__error">
                                    <!--バリデーション機能を実装したら記述します。-->
                                    @error('tel')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">住所</span>
                                <span class="form__label--required">＊</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />

                                </div>
                                <div class="form__error">
                                    <!--バリデーション機能を実装したら記述します。-->
                                    @error('address')
                                    {{ $message }}
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">建物名</span>
                                <span class="form__label--required">＊</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="text" name="building" placeholder="千駄ヶ谷1-2-3" value="{{ old('building') }}" />
                                </div>
                                <div class="form__error">
                                    <!--バリデーション機能を実装したら記述します。-->
                                    @error('building')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">お問い合わせの種類</span>
                                <span class="form__label--required">＊</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <select name="category_id">
                                        <option value="">選択してください</option>
                                        <option value="商品のお届けについて">商品のお届けについて</option>
                                        <option value="商品の交換について">商品の交換について</option>
                                        <option value=" 商品トラブル"> 商品トラブル</option>
                                        <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                                        <option value="その他">その他</option>
                                    </select>
                                </div>
                                <div class="form__error">
                                    <!--バリデーション機能を実装したら記述します。-->

                                </div>
                            </div>
                        </div>

                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">お問い合わせ内容</span>
                                <span class="form__label--required">＊</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--textarea">
                                    <textarea name="detail" placeholder="お問い合わせ内容をご記入ください"></textarea>
                                </div>
                            </div>
                            <div class="form__error">
                                <!--バリデーション機能を実装したら記述します。-->
                                @error('detail')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form__button">
                            <button class="form__button-submit" type="submit">確認画面</button>
                        </div>
            </form>
        </div>
    </main>
</body>

</html>