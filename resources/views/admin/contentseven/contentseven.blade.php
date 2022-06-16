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

                                <form  enctype='multipart/form-data' action="{{route('contentsevenpost')}}" method="post" style=" width: 100%;">
                                    <h1 style="display: flex; justify-content: center">Обновить контент Baker Mackenzie Legal</h1>
                                    <br><br>
                                    @if(session('ok'))
                                        <div class="succses2">
                                            <p class="succsestext">
                                                <img class="succsesimg" src="{{asset('storage/app/uploads/Galochka.png')}}"/>
                                                Вы удачно обновили  контент</p>
                                        </div>
                                    @endif
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Главный заголовок</label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="generaltitle" value="{{$generaltitle}}"  type="text" class="form-control input1" placeholder="{{$generaltitle}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Левый заголовок</label>
                                        <br>
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <input name="lefttitle" value="{{$lefttitle}}"  type="text" class="form-control input1" placeholder="{{$lefttitle}}">
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <img src="{{asset('storage/app/uploads/contentseven/'.$logo_exist1)}}" alt="fgvasf" id="blaha"  >
                                        <br>
                                        <input style="display: none" name="photo1" id="file-logo" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-logo" class="custom-file-upload btn btn-outline-success">
                                            Изменить лого
                                        </label>
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <img src="{{asset('storage/app/uploads/contentseven/'.$logo_exist2)}}" id="blah" />
                                        <br>
                                        <input  style="display: none" name="photo2"  id="file-upload" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-upload" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <img  alt="3" src="{{asset('storage/app/uploads/contentseven/'.$logo_exist3)}}" class="photo3" />
                                        <br>
                                        <input  style="display: none" name="photo3"  id="photo33" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo33" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <img  alt="4" src="{{asset('storage/app/uploads/contentseven/'.$logo_exist4)}}" class="photo4" />
                                        <br>
                                        <input  style="display: none" name="photo4"  id="photo44" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo44" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>


                                    <button type="submit" class="btn btn-success">Обновить контент Baker Mackenzie Legal</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>







@endsection

