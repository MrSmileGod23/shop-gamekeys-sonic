@extends('layouts.app')

@section('title')
    {{ $data->name }}
@endsection


@section('content')
    <div class="container bg-white  rounded-3">
        <div class="row">
            <div class="col-12 p-0 col-xl-6">
                <img src="/../img/{{ $data->img }}" class="img-fluid  rounded-3" style="height: 100%;background-size: cover;  object-fit: cover;object-position: center">
            </div>
            <div class="col-12 p-0 col-xl-6 p-4">
                <div class="row mb-3 m-0"><span class="p-0 fs-4 w-auto"> {{ $data->name }}</span></div>
                <div class="row mb-2 m-0"><span class="p-0 text-primary w-auto">Жанр:</span> {{ $data->genre['name'] }}</div>
                <div class="row mb-2 m-0"><span class="p-0 text-primary w-auto">Издатель:</span> {{ $data->publisher['name'] }}</div>
                <div class="row mb-2 m-0"><span class="p-0 text-primary w-auto">Платформа:</span> {{ $data->platform }}</div>
                <div class="row mb-2 m-0"><span class="p-0 text-primary w-auto">Дата релиза:</span> {{ $data->release }}</div>
                @if($data->amount>2000)
                    <div class="row d-inline-block mb-2 m-0"><span class="p-0 text-primary">Кол-во ключей:</span><span class="text-success p-0">Много</span></div>
                @endif
                @if($data->amount>1000 && $data->amount<2000)
                    <div class="row d-inline-block mb-2 m-0">Кол-во ключей:<span class="text-info">Нормально</span></div>
                @endif
                @if($data->amount<1000)
                    <div class="row d-inline-block mb-2 m-0">Кол-во ключей:<span class="text-danger">Мало</span></div>
                @endif
                <div class="row mb-2 m-0"><span class="p-0 text-primary w-auto">Описание:</span>{{ $data->info }}</div>
                <div class="d-flex flex-column justify-content-between flex-sm-row">
                    <div>
                        <div class="row mb-2 m-0"><span class="p-0 text-primary w-auto">Цена:</span> {{ $data->price- $data->discount }} руб.</div>
                        @if($data->discount!=null)
                            <div class="row mb-2 m-0"><span class="p-0 text-primary w-auto">Скидка:</span>{{ $data->discount}} руб</div>
                        @endif
                    </div>
                    <div class="d-flex align-items-end">
                        <a href="" class="btn btn-primary fs-5 rounded-pill ps-5 pe-5 pt-2 pb-2 text-center">В корзину</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="text-center fs-2 mb-2 mt-5 text-white">Рекомендуемые игры</div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-3 g-4 ">
            @foreach($random as $el)
                <div class="col">
                    <div class="card mb-3 mt-5 flex-row shadowmy border-0" style="max-width: 560px;border-radius:20px;min-height:260px" >
                        <div class="row g-0">
                            <div class="col-xxl-5">
                                <img src="/../img/{{ $el->img }}" class="img-fluid" alt="Картинка из игры {{ $el->name }} " style="border-radius:20px 0px 0px 20px;height: 100%;background-size: cover;  object-fit: cover;object-position: center">
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
