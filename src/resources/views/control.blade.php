@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/control.css') }}">
@endsection

@section('content')
<div class="control__content">

    <div class="control__heading">
        <h2>Admin</h2>
    </div>

    <div class="form">
        <form action="/control" method="get" class="form-inner">
            <input type="text" class="form__text" placeholder="名前やメールアドレスを入力してください" />
                <select name="" id="" class="form__gender">
                    <option value="">性別</option>
                    <option value="">男性</option>
                    <option value="">女性</option>
                </select>
                <select name="" id="" class="form__category">
                    <option value="">お問い合わせの種類</option>
                    <option value="">商品のお届けについて</option>
                    <option value="">商品の交換について</option>
                    <option value="">商品トラブル</option>
                    <option value="">ショップへのお問い合わせ</option>
                    <option value="">その他</option>
                </select>
            <input type="date" class="form__date" />
            <input type="submit" class="form__submit" value="検索" />
            <input type="reset" class="form__reset" />
        </form>
    </div>

    <div class="control__table">
        <table class="control__table-inner" cellspacing="10">
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th>&emsp;&emsp;&emsp;&emsp;</th>
            </tr>
            <tr>
                <td>
                    <div class="confirm-table__text-name">
                        <input class="confirm-table__text-first_name" type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                        <input class="confirm-table__text-last_name" type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>

@endsection