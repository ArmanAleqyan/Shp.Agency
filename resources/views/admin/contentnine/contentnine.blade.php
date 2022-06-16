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

                                <form  enctype='multipart/form-data' action="{{route('contentnine1')}}" method="post" style=" width: 100%;">
                                    <h1 style="display: flex; justify-content: center">Редактирование блока  Team</h1>
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
                                        <label for="exampleInputPassword1">Вертикальный заголовок</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}

                                        <input name="header" value="{{$headerTeam}}"  type="text" class="form-control input1" placeholder="{{$headerTeam}}">
                                    </div>

                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>
                            </div>
                        </div>

                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentnine2')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <br>
                                        <img src="{{asset('storage/app/uploads/Team/'.$photoTeam1)}}" id="blah" />
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo1"  id="file-upload" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-upload" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность специалиста
                                        </label>
                                        <br>
                                        <input name="text1" value="{{$textTeam1}}"  type="text" class="form-control input1" placeholder="{{$textTeam1}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Имя специалиста  </label>
                                        <br>
                                        <input name="name1" value="{{$name1}}"  type="text" class="form-control input1" placeholder="{{$name1}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                    <br><br>
                                    <a href="{{route('deletecontent1')}}"><button style="width: 19%;" type="button" class="btn btn-danger">Удалить  карточку</button></a>
                                </form>
                            </div>
                        </div>
                        <br><br>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentnine3')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="display: grid;" class="form-group">
                                        <br>
                                        <br>
                                        <img src="{{asset('storage/app/uploads/Team/'.$photoTeam2)}}" alt="2" class="photo2"/>
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo2"  id="photo22" class=" btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo22" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность специалиста
                                        </label>
                                        <br>
                                        <input name="text2" value="{{$textTeam2}}"  type="text" class="form-control input1" placeholder="{{$textTeam2}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Имя специалиста  </label>
                                        <br>
                                        <input name="name2" value="{{$name2}}"  type="text" class="form-control input1" placeholder="{{$name2}}">
                                    </div>

                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                    <br><br>
                                    <a href="{{route('deletecontent2')}}"><button style="width: 19%;" type="button" class="btn btn-danger">Удалить  карточку</button></a>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentnine4')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <img  alt="3" src="{{asset('storage/app/uploads/Team/'.$photoTeam3)}}" class="photo3" />
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo3"  id="photo33" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo33" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность специалиста</label>
                                        <br>
                                        <input name="text3" value="{{$textTeam3}}"  type="text" class="form-control input1" placeholder="{{$textTeam3}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Имя специалиста  </label>
                                        <br>
                                        <input name="name3" value="{{$name3}}"  type="text" class="form-control input1" placeholder="{{$name3}}">
                                    </div>

                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                    <br><br>
                                    <a href="{{route('deletecontent3')}}"><button style="width: 19%;" type="button" class="btn btn-danger">Удалить  карточку</button></a>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentnine5')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <img src="{{asset('storage/app/uploads/Team/'.$photoTeam4)}}"  alt="4" class="photo4" />
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo4"  id="photo44" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo44" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность специалиста</label>
                                        <br>
                                        <input name="text4" value="{{$textTeam4}}"  type="text" class="form-control input1" placeholder="{{$textTeam4}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Имя специалиста  </label>
                                        <br>
                                        <input name="name4" value="{{$name4}}"  type="text" class="form-control input1" placeholder="{{$name4}}">
                                    </div>

                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                    <br><br>
                                    <a href="{{route('deletecontent4')}}"><button style="width: 19%;" type="button" class="btn btn-danger">Удалить  карточку</button></a>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentnine6')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <img src="{{asset('storage/app/uploads/Team/'.$photoTeam5)}}" alt="5" class="photo5" />
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo5"  id="photo55" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo55" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность специалиста</label>
                                        <br>
                                        <input name="text5" value="{{$textTeam5}}"  type="text" class="form-control input1" placeholder="{{$textTeam5}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Имя специалиста  </label>
                                        <br>
                                        <input name="name5" value="{{$name5}}"  type="text" class="form-control input1" placeholder="{{$name6}}">
                                    </div>

                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                    <br><br>
                                    <a href="{{route('deletecontent5')}}"><button style="width: 19%;" type="button" class="btn btn-danger">Удалить  карточку</button></a>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentnine7')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <img src="{{asset('storage/app/uploads/Team/'.$photoTeam6)}}" alt="6" class="photo6" />
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo6"  id="photo66" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo66" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>

                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность специалиста</label>
                                        <br>
                                        <input name="text6" value="{{$textTeam6}}"  type="text" class="form-control input1" placeholder="{{$textTeam6}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Имя специалиста  </label>
                                        <br>
                                        <input name="name6" value="{{$name6}}"  type="text" class="form-control input1" placeholder="{{$name6}}">
                                    </div>

                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                    <br><br>
                                    <a href="{{route('deletecontent6')}}"><button style="width: 19%;" type="button" class="btn btn-danger">Удалить  карточку</button></a>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">
                                <form  enctype='multipart/form-data' action="{{route('contentnine8')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>

                                        <br>
                                        <img src="{{asset('storage/app/uploads/Team/'.$photoTeam7)}}" alt="7" class="photo7" />
                                        <br>
                                        <input  accept="image/*" style="display: none" name="photo7"  id="photo77" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="photo77" class="custom-file-upload btn btn-outline-success">
                                            Изменить фотографию
                                        </label>
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность специалиста</label>
                                        <br>
                                        <input name="text7" value="{{$textTeam7}}"  type="text" class="form-control input1" placeholder="{{$textTeam7}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Имя специалиста  </label>
                                        <br>
                                        <input name="name7" value="{{$name7}}"  type="text" class="form-control input1" placeholder="{{$name7}}">
                                    </div>

                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                    <br><br>
                                    <a href="{{route('deletecontent7')}}"><button style="width: 19%;" type="button" class="btn btn-danger">Удалить  карточку</button></a>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>

    </div>







@endsection

