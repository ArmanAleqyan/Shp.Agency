@extends('layouts.default')

@section('title')

@endsection


@section('content')


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

            </div>



            <div class="row ">
                <div class="col-12 grid-margin">
                  <h2 style="display: flex; justify-content: center">Войти в страницу администратора</h2>
                    <div class="card">

                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form action="{{route('loginsend')}}" method="post" style="    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">

                                    @csrf
                                    <div class="form-group" style="max-width: 300px; width: 100%">
                                        <label for="exampleInputEmail1">Почтовый адрес</label>
                                        <input name="email" type="email" class="form-control input1" aria-describedby="emailHelp" placeholder="Enter email">
                                        @if ($errors->has('email'))
                                            <div  style="font-size: 13px" class="alert-danger">Неверный логин</div>
                                        @endif
                                    </div>
                                    <div class="form-group" style="max-width: 300px; width: 100%">
                                        <label for="exampleInputPassword1">Пароль</label>
                                        <input name="password"  type="password" class="form-control input1" id="exampleInputPassword1" placeholder="Password">

                                        @if ($errors->has('password'))
                                            <div  style="font-size: 13px" class="alert-danger">неверный пароль</div>
                                        @endif

                                        @if (Session::has('error'))
                                                <div  style="font-size: 13px" class="alert-danger">{!! Session::get('error') !!}</div>
                                        @endif


                                    </div>

                                    <button type="submit" class="btn btn-success" style="max-width: 200px; width: 100%">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>























{{--<div style="display: flex ; justify-content: center">--}}
{{--    <form action="loginsend" method="post">--}}
{{--        @csrf--}}
{{--        <div class="form-group">--}}
{{--            <label for="exampleInputEmail1">Email address</label>--}}
{{--            <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">--}}

{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="exampleInputPassword1">Password</label>--}}
{{--            <input name="password"  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
{{--        </div>--}}

{{--        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--    </form>--}}
{{--</div>--}}



    @endsection
