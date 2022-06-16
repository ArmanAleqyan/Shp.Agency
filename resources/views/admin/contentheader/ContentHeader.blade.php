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

                                <form  enctype='multipart/form-data' action="{{route('admincontentheaderpost')}}" method="post" style=" width: 100%;">


                                    <h1 style="display: flex; justify-content: center">Редактировать Блок Home
                                    </h1>
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
                                        <label for="exampleInputEmail1">Логотип</label>
                                        <br>
                                        <img src="{{asset('storage/app/uploads/header/'.$genereallogo)}}" alt="fgvasf" id="blaha"  >
                                        <br>
                                        <input accept="image/*"  style="display: none" name="logo" id="file-logo" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-logo" class="custom-file-upload btn btn-outline-success">
                                            Изменить Логотип
                                        </label>
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <h1 for="exampleInputEmail1">Анимационное изображение</h1>
                                        <br>
                                        <img src="{{asset('storage/app/uploads/header/'.$canvasphoto)}}" id="blah" />
                                        <br>
                                        <input accept="image/*" style="display: none" name="canvasphoto"  id="file-upload" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-upload" class="custom-file-upload btn btn-outline-success">
                                            Изменить изображение анимации
                                        </label>
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Название первой формы </label>
                                        <br>
{{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="buttontext" value="{{$butontext}}"   type="text" class="form-control input1" placeholder="{{$butontext}}">
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Заголовок блока Home
                                        </label>
                                        <br>

                                        <span>Заголовок должен состоять из 4-ех слов</span>
                                        <input name="generaltitle" value="{{$generaltitle}}"  type="text" class="form-control input1" placeholder="{{$generaltitle}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>







@endsection

