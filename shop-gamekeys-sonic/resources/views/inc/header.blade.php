@section('header')
<div id="header" class="mb-5">
    <nav class="navbar navbar-expand-xxl navbar-light bg-white pt-1 pb-1 shadowmy">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto align-items-start  align-items-xxl-center">
                    <a class="navbar-brand me-3 pb-0 mb-3 mb-xxl-0 mt-3 mt-xxl-0" href="{{ route('all-data') }}">
                        <img src="/img/logo.png" alt="" width="70">
                        SonicGames
                    </a>
                    <a class="btn btn-primary rounded-pill me-3 mb-3 mb-xxl-0  header_button shadowbutton" href="{{ route('catalog') }}" role="button">Каталог</a>
                    <a class="btn btn-primary rounded-pill me-3 mb-3 mb-xxl-0 header_button shadowbutton" href="{{ route('stocks') }}" role="button">Акции</a>
                    <a class="btn btn-primary rounded-pill me-3 mb-3 mb-xxl-0 header_button shadowbutton" href="{{ route('preorder') }}" role="button">Предзаказ</a>
                    <a class="btn btn-primary rounded-pill me-3 mb-3 mb-xxl-0 header_button shadowbutton" href="{{ route('about') }}" role="button">О нас</a>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto align-items-start  align-items-xxl-center d-inline-flex flex-column-reverse d-xxl-inline-flex flex-xxl-row ">

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="btn btn-primary rounded-pill me-3 header_button shadowbutton" href="{{ route('login') }}" role="button">Войти</a>
                            </li>
                        @endif

{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
                    @else

                        <li class="nav-item mb-3 mb-xxl-0">
                            <a class="navbar-brand pb-0 pt-0 " href="/">
                                  <img src="/img/cart.png" alt="cart" width="50">
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary rounded-pill me-3  header_button shadowbutton" href="{{ route('user',Auth::user()->id)}}" role="button">Профиль</a>
                           </ul>
                            </div>

                    @endguest

            </div>
    </nav>
</div>

