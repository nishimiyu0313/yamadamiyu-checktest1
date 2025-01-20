@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')


<div class="admin__content">
    <div class="admin-form__heading">
        <h2>admin</h2>
    </div>
    <form class="search-form" action="/admin/search" method="get">
        @csrf
        <div class="search-form__item">
            <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}">
            <select class="search-form__item-gender" name="Category_gender">
                <option value="">性別</option>
                <option value="男性">男性</option>
                <option value="女性">女性</option>
                <option value="その他">その他</option>

            </select>
            <select class="search-form__item-select" name="Category_id">
                <option value="">お問い合わせの種類</option>
                <option value="商品のお届けについて">商品のお届けについて</option>
                <option value="商品の交換について">商品の交換について</option>
                <option value=" 商品トラブル"> 商品トラブル</option>
                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                <option value="その他">その他</option>
            </select>
            <form>
                <input type="date" name='date'>
            </form>
            </select>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-reset" type="submit">リセット</button>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-export" type="submit">エクスポート</button>
            </div>

            <div class="category-table">
                <table class="category-table__inner"></table>
                <tr class=" category-table__row">
                    <th class="category-table__header">お名前</th>
                </tr>
                <tr class="category-table__row">
                    <td class="category-table__item">
                        <form class="update-form" action="/admin/update" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="update-form__item">
                                <input class="update-form__item-input" type="text" name="name" value="">
                                <inpuut type="hidden" name="id" value="">
                            </div>

                    </td>
                </tr>
                <tr class=" category-table__row">
                    <th class="category-table__header">性別</th>
                </tr>
                <tr class="category-table__row">
                    <td class="category-table__item">
                        <form class="update-form" action="/admin/update" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="update-form__item">
                                <input class="update-form__item-input" type="text" name="gender" value="">
                                <inpuut type="hidden" name="id" value="">
                            </div>
                    </td>
                </tr>
                <tr class=" category-table__row">
                    <th class="category-table__header">メールアドレス</th>
                </tr>
                <tr class="category-table__row">
                    <td class="category-table__item">
                        <form class="update-form" action="/admin/update" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="update-form__item">
                                <input class="update-form__item-input" type="text" name="email" value="">
                                <inpuut type="hidden" name="id" value="">
                            </div>
                    </td>
                </tr>
                <tr class=" category-table__row">
                    <th class="category-table__header">お問い合わせの種類</th>
                </tr>
                <tr class="category-table__row">
                    <td class="category-table__item">
                        <form class="update-form" action="/admin/update" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="update-form__item">
                                <input class="update-form__item-input" type="text" name="kind" value="">
                                <inpuut type="hidden" name="id" value="">
                            </div>
                    </td>
                </tr>
            </div>
        </div>
</div>
@endsection