@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="register">
    <div class="register__title">
        <h2 class="register__title-item">商品登録</h2>
    </div>
    <form action="" class="register__form">
        <div class="register__content">
            <div class="register__content-item">
                <p class="input__title">商品名<span class="required">必須</span></p>
            </div>
            <div class="register__input">
                <input type="text" class="input__item" name="name" value="name" placeholder="商品名を入力">
            </div>
            <div class="error">
                @error('name')
                {{ message }}
                @enderror
            </div>
        </div>
        <div class="register__content">
            <div class="register__item">
                <p class="input__title">値段<span class="required">必須</span></p>
            </div>
            <div class="register__input">
            <input type="text" class="input__item" name="price" value="price" placeholder="値段を入力">
            </div>
            <div class="error">
                @error('price')
                {{ message }}
                @enderror
            </div>
        </div>
        <div class="register__img">
            <div class="register__item">
                <p class="input__title">商品画像<span class="required">必須</span></p>
            </div>
            <div class="register__input">
            <select name="image" id="" class="select__img">
                <option value="">ファイルを選択</option>
            </select>
            </div>
            <div class="error">
                @error('image')
                {{ message }}
                @enderror
            </div>
        </div>
        <div class="register__radio">
            <div class="register__item">
                <p class="input__title">季節<span class="required">必須</span></p>
            </div>
            <div class="register__season">
            <label><input type="checkbox" class="input__season" name="season" value="1">春</label>
            <label><input type="checkbox" class="input__season" name="season" value="2">夏</label>
            <label><input type="checkbox" class="input__season" name="season" value="3">秋</label>
            <label><input type="checkbox" class="input__season" name="season" value="4">冬</label>
            </div>
            <div class="error">
                @error('season')
                {{ message }}
                @enderror
            </div>
        </div>
        <div class="register__content">
            <div class="register__item">
                <p class="input__title">商品説明<span class="required">必須</span></p>
            </div>
            <div class="register__input">
                <textarea class="input__item" name="description" cols="30" rows="4" placeholder="商品の説明を入力" value="description"></textarea>
            </div>
            <div class="error">
                @error('description')
                {{ message }}
                @enderror
            </div>
        </div>
        <div class="button">
            <button class="back__button">戻る</button>
            <button class="register__button">登録</button>
        </div>
    </form>
</div>

@endsection
