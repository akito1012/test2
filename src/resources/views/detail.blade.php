@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')

<div class="detail">
    <form action="" class="detail__form">
        <div class="detail__nav">
            <nav class="nav__item">商品一覧</nav>
            <label>キウイ</label>
        </div>
        <div class="float">
            <div class="img">
                <p>img</p>
            </div>
            <select name="" id="" class="select__img">
                <option value="">ファイルを選択</option>
            </select>
            <div class="error">error</div>
        </div>
        <div class="detail__content">
            <div class="input__inner">
                <div class="input__title">商品名</div>
                <div class="input__item">
                    <input type="text" class="input__item-txt" name="name" value="" placeholder="商品名を入力">
                </div>
                <div class="error">error</div>
            </div>
            <div class="input__inner">
                <div class="input__title">値段</div>
                <div class="input__item">
                    <input type="text" class="input__item-txt" name="place" value="" placeholder="値段を入力">
                </div>
                <div class="error">error</div>
            </div>
            <div class="input__inner">
                <div class="input__title">季節</div>
                <div class="input__item">
                    <label><input type="radio" class="input__season" name="season" value="1">春</label>
                    <label><input type="radio" class="input__season" name="season" value="2">夏</label>
                    <label><input type="radio" class="input__season" name="season" value="3">秋</label>
                    <label><input type="radio" class="input__season" name="season" value="4">冬</label>
                </div>
                <div class="error">error</div>
            </div>
        </div>
        <div class="detail__textarea">
            <div class="textarea__title">商品説明</div>
            <textarea name="description" id="" class="textarea__item" value="" cols="30" row="4" placeholder="商品の説明を入力"></textarea>
            <div class="error">error</div>
        </div>
        <div class="detail__button">
            <button class="back__button">戻る</button>
            <button class="keep__button">変更を保存</button>
        </div>
    </form>
</div>

@endsection