@extends('layouts.app')

@section('title')
    Акции
@endsection


@section('content')
    <div class="container">
        <div class="row p-3 ">
            <div class="text-center fs-2 mb-2 text-white">Акции недели</div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-3 g-4 justify-content-around">
            @foreach($data as $el)
                <div class="col d-flex flex-row justify-content-around">
                    <div class="card" style="width: auto;border-radius: 40px;max-width: 450px;">
                        <img src="../img/{{ $el->img }}" class="card-img-top" alt="Картинка из игры {{ $el->name }} " style="border-radius: 40px 40px 0px 0px">
                        <div class="card-body">
                            <h5 class="card-title w-100 text-center fs-4">{{ $el->name }}</h5>
                            <p class="card-text">Дата релиза: {{ $el->release }}</p>
                            <p class="card-text">Жанр: {{ $el->genre['name']}}</p>
                            <p class="card-text">Издатель: {{ $el->publisher['name'] }}</p>
                        </div>
                        <div class="justify-content-between d-flex p-4 flex-row flex-wrap align-content-center">
                            <p class=""><strike>{{ $el->price}}</strike> {{ $el->price-$el->discount}} р.</p>
                        <a href="{{route('getGame',[$el->publisher['slug'],$el->genre['slug'],$el->slug])}}" class=" btn btn-primary text-center">Подробней</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-3 ">
            <div class="text-center fs-2 mb-2 text-white">Самые низкие цены</div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-3 g-4 ">
            @foreach($dataMin as $el)
                <div class="col d-flex flex-row justify-content-around">
                    <div class="card" style="width: auto;border-radius: 40px;max-width: 450px;">
                        <img src="../img/{{ $el->img }}" class="card-img-top" alt="Картинка из игры {{ $el->name }} " style="border-radius: 40px 40px 0px 0px">
                        <div class="card-body">
                            <h5 class="card-title w-100 text-center fs-4">{{ $el->name }}</h5>
                            <p class="card-text">Дата релиза: {{ $el->release }}</p>
                            <p class="card-text">Жанр: {{ $el->genre['name']}}</p>
                            <p class="card-text">Издатель: {{ $el->publisher['name'] }}</p>
                        </div>
                        <div class="justify-content-between d-flex p-4 flex-row flex-wrap align-content-center">
                            <p class=""><strike>{{ $el->price}}</strike> {{ $el->price-$el->discount}} р.</p>
                            <a href="{{route('getGame',[$el->publisher['slug'],$el->genre['slug'],$el->slug])}}" class=" btn btn-primary text-center">Подробней</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
