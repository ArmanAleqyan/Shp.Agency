@extends('layouts.default')
@section('title')

    Admin
@endsection

@section('content')


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

            </div>



            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">


                                <form  enctype='multipart/form-data' action="{{route('contentthreepost1')}}" method="post" style=" width: 100%;">
                                    @if(session('ok'))
                                        <div class="succses2">
                                            <p class="succsestext">
                                                <img class="succsesimg" src="{{asset('storage/app/uploads/Galochka.png')}}"/>
                                                Вы удачно обновили  контент</p>
                                        </div>
                                    @endif
                                    <h1 style="display: flex; justify-content: center">Наши Услуги
                                    </h1>
                                        <br>
                                   <h3 style="display: flex; justify-content: center">Вертикальный Загаловок</h3>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Заголовок</label>

                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="header" value="{{$header}}"  type="text" class="form-control input1" placeholder="{{$header}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения </button>
                                        <br>
                                        <br>
                                    <h3 style="display: flex; justify-content: center">    1-я таблица</h3>
                                    <br><br>

                                    @csrf

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">1-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="line1" value="{{$line1}}"  type="text" class="form-control input1" placeholder="{{$line1}}">
                                    </div>

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">2-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="line2" value="{{$line2}}"   type="text" class="form-control input1" placeholder="{{$line2}}">
                                    </div>


                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">3-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="line3" value="{{$line3}}"   type="text" class="form-control input1" placeholder="{{$line3}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">4-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="line4" value="{{$line4}}"   type="text" class="form-control input1" placeholder="{{$line4}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">5-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="line5"  value="{{$line5}}"  type="text" class="form-control input1" placeholder="{{$line5}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">6-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="line6" value="{{$line6}}"  type="text" class="form-control input1" placeholder="{{$line6}}">
                                    </div>
                                    <br><br>
                                    <button type="submit" class="btn btn-success">Сохранить изменения </button>

                                    <br>
                                    <br>
                                    <br>
                                    <h1 style="display: flex; justify-content: center">2-я таблица</h1>

                                    @csrf
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">1-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="line13" value="{{$line13}}"  type="text" class="form-control input1" placeholder="{{$line13}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">2-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="line14" value="{{$line14}}"   type="text" class="form-control input1" placeholder="{{$line14}}">
                                    </div>


                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">3-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="line15"  value="{{$line15}}"  type="text" class="form-control input1" placeholder="{{$line15}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">4-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="line16"  value="{{$line16}}"  type="text" class="form-control input1" placeholder="{{$line16}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">5-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="line17"  value="{{$line17}}"  type="text" class="form-control input1" placeholder="{{$line17}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">6-я строка </label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="line18"  value="{{$line18}}"  type="text" class="form-control input1" placeholder="{{$line18}}">
                                    </div>
                                    <br><br>

                                    <button type="submit" class="btn btn-success">Сохранить изменения </button>

                                        <br><br>
                                        <br>
                                        <h1 style="display: flex; justify-content: center">3-я таблица</h1>
                                        <br><br>
                                        @csrf
                                        <br>
                                        <div style="    display: grid;" class="form-group">
                                            <br>
                                            <label for="exampleInputPassword1">1-я строка</label>
                                            <br>
                                            {{--                                        <h3>{{$butontext}}</h3>--}}
                                            <br>
                                            <input name="line7" value="{{$line7}} "  type="text" class="form-control input1" placeholder="{{$line7}}">
                                        </div>
                                        <br>
                                        <div style="    display: grid;" class="form-group">
                                            <br>
                                            <label for="exampleInputPassword1">2-я строка</label>
                                            <br>
                                            {{--                                        <h3>{{$butontext}}</h3>--}}
                                            <br>
                                            <input name="line8" value="{{$line8}}"   type="text" class="form-control input1" placeholder="{{$line8}}">
                                        </div>


                                        <div style="    display: grid;" class="form-group">
                                            <br>
                                            <label for="exampleInputPassword1">3-я строка</label>
                                            <br>
                                            {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                            <br>
                                            <input name="line9"  value="{{$line9}}"   type="text" class="form-control input1" placeholder="{{$line9}}">
                                        </div>
                                        <br>
                                        <div style="    display: grid;" class="form-group">
                                            <br>
                                            <label for="exampleInputPassword1">4-я строка</label>
                                            <br>
                                            {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                            <br>
                                            <input name="line10"  value="{{$line10}}"  type="text" class="form-control input1" placeholder="{{$line10}}">
                                        </div>
                                        <br>
                                        <div style="    display: grid;" class="form-group">
                                            <br>
                                            <label for="exampleInputPassword1">5-я строка</label>
                                            <br>
                                            {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                            <br>
                                            <input name="line11" value="{{$line11}}"   type="text" class="form-control input1" placeholder="{{$line11}}">
                                        </div>
                                        <br>
                                        <div style="    display: grid;" class="form-group">
                                            <br>
                                            <label for="exampleInputPassword1">6-я строка</label>
                                            <br>
                                            {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                            <br>
                                            <input name="line12"  value="{{$line12}}"  type="text" class="form-control input1" placeholder="{{$line12}}">
                                        </div>
                                        <br><br>
                                        <button type="submit" class="btn btn-success">Сохранить изменения </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>







@endsection

