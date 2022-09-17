@extends('layouts.app')

@section('title')
Главная
@endsection


@section('content')
    <div id="carouselExampleDark" class="carousel carousel-white slide shadowmy " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="../img/slider1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h3>Играйте с друзьями</h3>
                    <p class="fs-5">У нас имеется большой ассортимент кооперативных игр!</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../img/slider2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h3>Постоянные акции</h3>
                    <p class="fs-5">Каждую неделю у нас обновляются скидки!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/slider3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h3>Горячие новинки</h3>
                    <p class="fs-5">Мы публикуем все сразу,как только появляется анонс!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container ">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-3 g-4 ">
            @foreach($data as $el)
                <div class="col">
            <div class="card mb-3 mt-5 flex-row shadowmy border-0" style="max-width: 560px;border-radius:20px;min-height:260px" >
                <div class="row g-0">
                    <div class="col-xxl-5">
                        <img src="../img/{{ $el->img }}" class="img-fluid" alt="Картинка из игры {{ $el->name }} " style="border-radius:20px 0px 0px 20px;height: 100%;background-size: cover;  object-fit: cover;object-position: center">
                    </div>
                    <div class="col-xxl-7 ">
                        <div class="d-flex flex-column justify-content-around h-100 align-items-center">
                            <div >
                            <p class="card-title w-100 text-center fs-4">{{ $el->name }}</p>
                            <p class="card-text  text-center">{{ $el->price - $el->discount}} руб</p>
                                @if($el->discount!=null)
                                    <p class="card-text  text-center">Скидка:{{ $el->discount}} руб</p>
                                @endif
                            </div>
                            <div>
                                <a href="{{route('getGame',[$el->publisher['slug'],$el->genre['slug'],$el->slug])}}" class=" btn btn-primary text-center">Подробней</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
