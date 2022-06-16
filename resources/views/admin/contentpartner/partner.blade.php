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

                        <div style="    display: grid;" class="form-group">
                            <form enctype='multipart/form-data' action="{{route('eventcontentcreate')}}" method="post" style="padding: 30px; width: 100%;">
                                @csrf
                                <br>
                                <label for="exampleInputPassword1">Вертикальный заголовок</label>
                                <br>
                                <br>

                                <input name="lefttitle" value="{{$eventheader[0]->leftitle}}"  type="text" class="form-control input1" placeholder="{{$eventheader[0]->leftitle}}">
                                <br>
                                <button type="submit" class="btn btn-success">Сохранить изменения</button>
                            </form>
                        </div>


                        <h1 style="display: flex; justify-content: center">Мероприятия</h1>
                        <br>
                        <br>
                        <ol style="cursor: pointer">
                            @foreach($post as $posts)
                                <li>
                                    <a style="color: white" href="{{route('updateevent' , $posts->id)}}">     {{$posts->title}}     </a>
                                </li>
                            @endforeach
                        </ol>





                        <br>
                        <br>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">
                                @if(session('ok'))
                                    <div class="succses2">
                                        <p class="succsestext">
                                            <img class="succsesimg" src="{{asset('storage/app/uploads/Galochka.png')}}"/>
                                            Вы удачно обновили  контент</p>
                                    </div>
                                @endif
                                <form  enctype='multipart/form-data' action="{{route('eventcontentcreate')}}" method="post" style=" width: 100%;">
                                    <h1 style="display: flex; justify-content: center">Добавление мероприятий</h1>
                                    <br><br>

                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <br>
                                        <label for="">Изображение 1
                                        </label>
                                        <img src=""  id="blaha"  >
                                        <br>
                                        <input accept="image/*" style="display: none" name="photo" id="file-logo" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-logo" class="custom-file-upload btn btn-outline-success">
                                            Добавить изображение

                                        </label>
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

