@extends('layouts.app')

@section('title')
    Предзаказы
@endsection


@section('content')

    <div class="container">
        <div class="row p-3 ">
            <div class="text-center fs-2 mb-2 text-white">Предзаказы</div>
            @foreach($data as $el)
                <div class="col d-flex justify-content-around flex-column">
                <div class="col">
                    <div class="card mb-3 mt-5 flex-row shadowmy border-0" style="max-width: 100%;border-radius:20px;min-height:210px" >
                        <div class="row g-0">
                            <div class="col-xxl-5">
                                <img src="../img/{{ $el->img }}" class="img-fluid" alt="Картинка из игры {{ $el->name }} " style="border-radius:20px 0px 0px 20px;height: 100%;background-size: cover;  object-fit: cover;object-position: center">
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
                                        <a href="{{route('getGame',[$el->publisher['slug'],$el->genre['slug'],$el->slug])}}" class="btn btn-primary text-center pe-5 ps-5 pt-3 pb-3 rounded-pill shadowbutton">Подробней</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                </div>
        </div>
        <div class="text-center justify-content-center w-100 d-flex"> {{$data->links('vendor.pagination.bootstrap-4')}}</div>
    </div>
@endsection
