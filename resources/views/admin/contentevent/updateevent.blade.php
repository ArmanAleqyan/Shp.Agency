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

                        <h1 style="display: flex; justify-content: center">Мероприятия </h1>
                        <br>
                        <br>



                                <ol style="cursor: pointer">
                                    @foreach($link as $links)
                                   <li>
                                       <a style="color: white" href="{{route('updateevent' , $links->id)}}">

                                       {{$links->title}}   </a>
                                   </li>
                                    @endforeach
                                </ol>


                        <br>
                        <br>

                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">
                          @foreach($post as $posts)
                                <form  enctype='multipart/form-data' action="{{route('updateeventpost', $posts->id)}}   " method="post" style=" width: 100%;">
                                    <h1 style="display: flex; justify-content: center">Обновить Мероприятия {{$posts->title}}</h1>
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
                                        <label for="exampleInputPassword1">Заголовок</label>
                                        <br>
                                        <input name="title" value="{{$posts->title}}"  type="text" class="form-control input1" placeholder="">
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <label for="">Обновить иконку заголовка</label>
                                        <img  src="{{asset('storage/app/uploads/event/'.$posts->icon)}}" class="photo4 img1" />
                                        <br>
                                        <input  accept="image/*" style="display: none" name="icon" value="{{$posts->icon}}"  id="photo44" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo44" class="custom-file-upload btn btn-outline-success">
                                            Обновить иконку
                                        </label>
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <br>
                                        <label for="">Изображение 1 </label>
                                        <img src="{{asset('storage/app/uploads/event/'.$posts->photo1)}}"  id="blaha"  >
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo" id="file-logo" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-logo" class="custom-file-upload btn btn-outline-success">
                                            Обновить изображение
                                        </label>
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <br>
                                        <label for="">Изображение 2</label>
                                        <img src="{{asset('storage/app/uploads/event/'.$posts->photo2)}}"  id="blah" />
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo1"  id="file-upload" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-upload" class="custom-file-upload btn btn-outline-success">
                                            Обновить изображение
                                        </label>
                                    </div>
                                    <br>
                                    <div style="display: grid;" class="form-group">
                                        <br>
                                        <br>
                                        <label for="">Изображение 3</label>
                                        <img src="{{asset('storage/app/uploads/event/'.$posts->photo3)}}"  class="photo2"/>
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo2"  id="photo22" class=" btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo22" class="custom-file-upload btn btn-outline-success">
                                            Обновить изображение
                                        </label>
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <label for="">Изображение 4</label>
                                        <img src="{{asset('storage/app/uploads/event/'.$posts->photo4)}}" class="photo3" />
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo3"  id="photo33" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo33" class="custom-file-upload btn btn-outline-success">
                                            Обновить изображение
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                    <br>
                                    <br>

                                </form>

                            @endforeach
                            </div>
                            <a href="{{route('deleteevent',$post[0]->id)}}"><button type="submit" class="btn btn-danger">Удалить мероприятия </button></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>







@endsection

