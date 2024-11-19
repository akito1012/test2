@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="list">
    <form action="/products/register" class="update__form" method="get">
        <div class="list__header">
            <span class="list__header-span">商品一覧</span>
            <button class="list__header-button" type="submit">+商品を追加</button>
        </div>
    </form>
    <form action="" class="search__form">
        <div class="list__search">
            <div class="search__float">
                <div class="search__input">
                    <input type="text" class="search__input-txt" name="search" value="" placeholder="商品名で検索">
                </div>
                <div class="search__button">
                    <button class="search__button-submit">検索</button>
                </div>
                <div class="sort__item">
                    <p class="sort__item-p">価格順で表示</p>
                </div>
                <div class="sort__select">
                    <select name="" id="" class="select__item">
                        <option value="">価格で並べ替え</option>
                    </select>
                </div>
            </div>
    </form>
    <form action="" class="form__detail">
        <div class="search-card">
            @foreach( $products as $product)
                <div class="search-card__inner">
                    <img src="{{ asset('storage/{{ $product->image') }}" alt="フルーツ" >
                    <input type="hidden" class="search-card__image" name="image" value="{{ $product['id'] }}">
                </div>
                <div class="search-card__item">
                <input type="hidden"  class="search-card__item-input" name="name" value="{{ $product['id'] }}">{{ $product['name'] }}
                <input type="hidden"  class="search-card__item-input" name="name" value="{{ $product['id'] }}">{{ $product['price'] }}
                </div>
            @endforeach
            <div class="paginate">
                {{ $products->links() }}
            </div>
        </div>
    </form>
</div>

@endsection