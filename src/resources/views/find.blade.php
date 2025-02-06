@extends('layouts.app')

@section('title', 'find.blade.php')

@section('content')


<div class="admin__content">
    <div class="admin-form__heading">
        <h2>admin</h2>
    </div>
    <form action="find" method="post">
        @csrf
        <div class="seach-form__item">
            <input type="text" name="input" value="{{$input ?? ''}}">
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
            <input type="submit" value="検索">
            <div class="search-form__button">
            </div>
            <button class="search-form__button-reset" type="submit">リセット</button>
        </div>
        <div class="search-form__button">
            <button class="search-form__button-export" type="submit">エクスポート</button>
        </div>
    </form>
    @if (@isset($item))
    <table>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
        </tr>
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->category}}</td>
        </tr>
    </table>
    @endif
</div>
</div>
</div>
@endsection