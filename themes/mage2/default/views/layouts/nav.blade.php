<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="padding:0;">
    <div class="container">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/mage2/laravel-ecommerce"><i class="fab fa-github"></i> GitHub</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/mage2ecommerce/"><i class="fab fa-facebook"></i> Facebook</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/mage2ecommerce/"><i class="fab fa-twitter"></i> Twitter</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Welcome msg!
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Sign In </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Create an Account</a>
            </li>
        </ul>
    </div>
</nav>

<header style="padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span style="font-size: 32px; font-weight: 500; margin-top: 10px;">
                        <img src="/img/logo.svg" alt="logo" class="logo">Mage2 Store
                    </span>
                </a>
            </div>
            <div class="col-md-6">
                <form class="navbar-form" action="{{ route('search.result') }}" method="get" role="search">
                    <div class="input-group" style="padding-top: 14px;">
                        <input type="text" class="form-control" placeholder="Search entire store here..." name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <i class="oi oi-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--<div class="col-md-1">
                <a class="nav-link" href="http://demo.mage2.website/cart/view">Cart (0)</a>
            </div>-->
        </div>
    </div>
</header>
   
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Hot Deals!</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                @include('layouts.category-tree',['categories', $categories])
                <li class="nav-item"><a class="nav-link" href="{{ route('cart.view') }}">Cart ({{$cart}})</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('checkout.index') }}">Checkout</a></li>
                <li class="dropdown nav-item">
                    <a href="{{ route('my-account.home') }}" title="My Account" class="nav-link">
                        My Account
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
