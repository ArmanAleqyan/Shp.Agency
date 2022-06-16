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

                                <form  enctype='multipart/form-data' action="{{route('contenttwopost')}}" method="post" style=" width: 100%;">


                                    <h1 style="display: flex; justify-content: center">Редактирование второго блока </h1>
                                    <br><br>
                                    @csrf
                                    @if(session('ok'))
                                        <div class="succses2">
                                            <p class="succsestext">
                                                <img class="succsesimg" src="{{asset('storage/app/uploads/Galochka.png')}}"/>
                                                Вы удачно обновили  контент</p>
                                        </div>
                                    @endif
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Текст О НАС 1-я часть
                                        </label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="abouttextone" value="@if($abouttextone){{$abouttextone}}@else @endif "  type="text" class="form-control input1" placeholder="@if($abouttextone){{$abouttextone}}@else @endif">
                                    </div>

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Текст О НАС 2-я часть
                                        </label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="abouttextwo" value="@if($abouttexttwo) {{$abouttexttwo}} @else @endif"   type="text" class="form-control input1" placeholder="@if($abouttexttwo) {{$abouttexttwo}} @else @endif">
                                    </div>


                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Название формы </label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="buttoncontact" value="@if($buttoncontact) {{$buttoncontact}} @else @endif"  type="text" class="form-control input1" placeholder="@if($buttoncontact) {{$buttoncontact}} @else @endif">
                                    </div>
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

