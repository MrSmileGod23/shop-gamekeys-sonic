@extends('layouts.app')

@section('title')
    Каталог
@endsection


@section('content')
    <div class="text-center fs-2 mb-5 text-white">Каталог</div>
    <div class=" row d-flex justify-content-around ">
        <div class="col-12 bg-white col-xl-3 shadowmy rounded-3 h-100 ">
            <div class="text-center fs-2 mb-2">Фильтры</div>
            <div class="row p-1 flex-column ">
                <div class="text-start fs-4 mb-2">Жанры</div>
                <ul class="ms-3">
                @foreach($genre as $el)
                    <li>
                        <a href="{{route('catalogGenre',[$el->slug,$el->id])}}" class="text-decoration-none btn-link text-start">{{$el->name}}</a>
                    </li>

                @endforeach
                </ul>
                <div class="text-start fs-4 mb-2">Издатели</div>
                <ul class="ms-3">
                    @foreach($publisher as $el)
                        <li>
                            <a href="{{route('catalogPublisher',[$el->slug,$el->id])}}" class="text-decoration-none btn-link text-start">{{$el->name}}</a>
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-12 col-xl-7">
            @foreach($data as $el)
                <div class="col d-flex justify-content-around flex-column">
                    <div class="col">
                        <div class="card mb-3 flex-row shadowmy border-0" style="max-width: 100%;border-radius:20px;min-height:210px" >
                            <div class="row g-0">
                                <div class="col-xxl-5">
                                    <img src="/../img/{{ $el->img }}" class="img-fluid" alt="Картинка из игры {{ $el->name }} " style="border-radius:20px 0px 0px 20px;height: 100%;background-size: cover;  object-fit: cover;object-position: center">
                                </div>
                                <div class="col-xxl-7 ">
                                    <div class="d-flex flex-row justify-content-between h-100 p-3">
                                        <div>
                                            <p class="card-title fs-2">{{ $el->name }}</p>
                                            <p class="card-text"><i class="fs-5">Дата релиза:</i> {{ $el->release }}</p>
                                            <p class="card-text"><i class="fs-5">Жанр: </i>{{ $el->genre['name']}}</p>
                                            <p class="card-text"><i class="fs-5">Издатель: </i>{{ $el->publisher['name'] }}</p>
                                        </div>
                                        <div class="align-items-end d-flex">
                                            <a href="{{route('getGame',[$el->publisher['slug'],$el->genre['slug'],$el->slug])}}" class="btn btn-primary text-center pe-2 ps-2 pt-2 pb-2 rounded-pill shadowbutton">Подробней</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                <div class="text-center justify-content-center w-100 d-flex"> {{$data->links('vendor.pagination.bootstrap-4')}}</div>
        </div>
    </div>

@endsection
