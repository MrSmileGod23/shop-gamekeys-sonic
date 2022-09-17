@extends('layouts.app')

@section('title')
    Профиль : {{ $data->login }}
@endsection


@section('content')
    <div class="container">
    <div class="row bg-white rounded-3  p-2 shadowmy">

        <div class="row">
            <div class=" col-lg-1 p-0 d-flex d-lg-block justify-content-center">
                <img src="../img/slider3.jpg" class="img rounded-3" alt="Картинка из игры {{ $data->img }} " style="height: 120px; width:120px;background-size: cover;  object-fit: cover;object-position: center">
            </div>
            <div class="col-sm-6  ms-lg-5 d-flex flex-column justify-content-center">
                <div class="row text-center text-sm-start">
                   <h2 class="m-0 p-0"> {{ $data->login }}</h2>
                </div>
                <div class="row text-center text-sm-start">
                    <h6 class="m-0 p-0">   {{ $data->email }}</h6>
                </div>
            </div>
        </div>

    </div>
    <div class="row  mt-5 d-flex flex-column-reverse d-xxl-flex flex-xxl-row justify-content-between">
        <div class="col-xxl-8 rounded-pill">
            <h2 class="text-center text-white">Мои заказы</h2>

            @foreach($dataOrder as $el)
                <div class="row bg-white rounded-3 shadowmy text-center p-3 mt-4 mb-4 d-flex  flex-wrap">
                    <p class="col-lg-4 m-0  align-self-center">Дата:{{ $el->data }}</p>
                    <p class="col-lg-4 m-0  align-self-center">{{ $el->price }} руб</p>
                    <a  href="#" class="col-lg-4 m-0  align-self-center"><button class="btn btn-primary">Поподробней</button></a>
                </div>
            @endforeach

            {{$dataOrder->links('vendor.pagination.bootstrap-4')}}

        </div>

        <div class="col-xxl-3 bg-white rounded-2 p-2  text-center text-xxl-start h-100 shadowmy">
            <h5 class="text-black text-center mb-5">Настройки</h5>
            @auth()
            <div class="row mb-3">
                <p class="col ">Смена ника</p>
                <a  href="#" class="col"><button class="btn btn-primary ">Изменить</button></a>
            </div>
            <div class="row mb-3">
                <p class="col">Смена авы</p>
                <a  href="#" class="col"><button class="btn btn-primary">Изменить</button></a>
            </div>
            <div class="row mb-3">
                <p class="col">Смена email</p>
                <a  href="#" class="col"><button class="btn btn-primary">Изменить</button></a>
            </div>
            <div class="row mb-3">
                <p class="col">Смена пароля</p>
                <a  href="#" class="col"><button class="btn btn-primary">Изменить</button></a>
            </div>
                @if($data->id==1)
                    <div class="row mb-3">
                        <p class="col">Пользователи</p>
                        <a  href="#" class="col"><button class="btn btn-danger">Открыть</button></a>
                    </div>
                    <div class="row mb-3">
                        <p class="col">Ключи</p>
                        <a  href="#" class="col"><button class="btn btn-danger">Открыть</button></a>
                    </div>
                @endif
                <div class="row m-auto mb-3 justify-content-center ">
                <a class="btn btn-primary rounded-pill header_button " role="button" href="{{ route('logout') }}"   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> Выйти</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                    @csrf
                </form>
                </div>
            @endauth
        </div>
    </div>
    </div>
@endsection
