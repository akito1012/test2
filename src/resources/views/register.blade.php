@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')">
@endsection

@section('content')

<div class="register">
    <div class="register__title">
        <h2 class="register__title-item">商品登録</h2>
    </div>
    <form action="" class="register__form">
        <div class="register__content">
            <div class="register__item">
                <p>商品名<span>必須</span></p>
            </div>
            <div class="register__input">
                <input type="text" class="input__item" name="name" value="name" placeholder="商品名を入力">
            </div>
            <div class="error"></div>
        </div>
        <div class="register__content">
            <div class="register__item">
                <p>値段<span>必須</span></p>
            </div>
            <div class="register__input">
            
            </div>
            <div class="error"></div>
        </div>
        <div class="register__img">
            <div class="register__item">
                <p>商品画像<span>必須</span></p>
            </div>
            <div class="register__input">
            
            </div>
            <div class="error"></div>
        </div>
    <div class="register__radio">
            <div class="register__item">
                <p>季節<span>必須</span></p>
            </div>
            <div class="register__input">
            
            </div>
            <div class="error"></div>
        </div>
        <div class="register__content">
            <div class="register__item">
                <p>商品説明<span>必須</span></p>
            </div>
            <div class="register__input">
            
            </div>
            <div class="error"></div>
        </div>
        <div class="button">
            <button class="back__button">戻る</button>
            <button class="register__button">登録</button>
        </div>
    </form>
</div>
