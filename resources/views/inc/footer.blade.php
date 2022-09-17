@section('footer')
    <div class="bg-white mt-5 shadowmy">
        <footer class="d-flex container flex-wrap justify-content-between align-items-center py-3 my-4">
            <p class="col-md-6 mb-0">© 2021 SonicGames, Inc</p>
            <div class="d-flex col-6 justify-content-center justify-content-xxl-end">
            <ul class="nav col-xl-3 d-flex flex-column">
                <li class="nav-item "><a href="/" class="nav-link px-2 text-black">Главная</a></li>
                <li class="nav-item"><a href="{{ route('catalog') }}" class="nav-link px-2 text-black">Каталог</a></li>
                <li class="nav-item"><a href="{{ route('stocks') }}" class="nav-link px-2 text-black">Акции</a></li>
            </ul>
            <ul class="nav col-xl-3  d-flex flex-column">
                <li class="nav-item "><a href="{{ route('preorder') }}" class="nav-link px-2 text-black">Предзаказ</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-black">О нас</a></li>
            </ul>
            </div>
        </footer>
    </div>
