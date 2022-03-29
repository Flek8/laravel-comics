@extends('layouts.base')

@section('pageTitle', 'Home page')

@section('content')
<div id="merchandise">
    <ul>
        <li><img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">DIGITAL COMICS</li>
        <li><img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">DC MERCHANDISE</li>
        <li><img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">SUBSCRIPTION</li>
        <li><img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">COMIC SHOP LOCATOR</li>
        <li><img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">DC POWER VISA</li>
    </ul>
</div>
@endsection