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

                                <form  enctype='multipart/form-data' action="{{route('contentjobsheaderpost1')}}" method="post" style=" width: 100%;">
                                    <h1 style="display: flex; justify-content: center">Редактирование блока Careers</h1>
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
                                        <label for="exampleInputPassword1">Вертикальный заголовок
                                        </label>
                                        <br>
                                        <input name="header" value="{{$job1[0]->title}}"  type="text" class="form-control input1" placeholder="{{$job1[0]->title}}">
                                    </div>

                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>

                            </div>

                            <br>
                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentjobspost1')}}" method="post" style=" width: 100%;">
                                    <h1 style="display: flex; justify-content: center">Редактирование вакансий  Careers</h1>
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность</label>
                                        <br>
                                        <input name="job1" value="{{$job1[0]->job}}"  type="text" class="form-control input1" placeholder="{{$job1[0]->job}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Описание работы</label>
                                        <br>
                                        <input name="jobfunction1" value="{{$job1[0]->jobfunction}}"  type="text" class="form-control input1" placeholder="{{$job1[0]->jobfunction}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>

                            </div>
                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentjobspost2')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность</label>
                                        <br>
                                        <input name="job2" value="{{$job2[0]->job}}"  type="text" class="form-control input1" placeholder="{{$job2[0]->job}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Описание работы</label>
                                        <br>
                                        <input name="jobfunction2" value="{{$job2[0]->jobfunction}}"  type="text" class="form-control input1" placeholder="{{$job2[0]->jobfunction}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>

                            </div>
                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentjobspost3')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность</label>
                                        <br>
                                        <input name="job3" value="{{$job3[0]->job}}"  type="text" class="form-control input1" placeholder="{{$job3[0]->job}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Описание работы</label>
                                        <br>
                                        <input name="jobfunction3" value="{{$job3[0]->jobfunction}}"  type="text" class="form-control input1" placeholder="{{$job3[0]->jobfunction}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>

                            </div>
                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentjobspost4')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность</label>
                                        <br>
                                        <input name="job4" value="{{$job4[0]->job}}"  type="text" class="form-control input1" placeholder="{{$job4[0]->job}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Описание работы</label>
                                        <br>
                                        <input name="jobfunction4" value="{{$job4[0]->jobfunction}}"  type="text" class="form-control input1" placeholder="{{$job4[0]->jobfunction}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>

                            </div>
                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentjobspost5')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность</label>
                                        <br>
                                        <input name="job5" value="{{$job5[0]->job}}"  type="text" class="form-control input1" placeholder="{{$job5[0]->job}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Описание работы</label>
                                        <br>
                                        <input name="jobfunction5" value="{{$job5[0]->jobfunction}}"  type="text" class="form-control input1" placeholder="{{$job5[0]->jobfunction}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>
                            </div>
                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentjobspost6')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность</label>
                                        <br>
                                        <input name="job6" value="{{$job6[0]->job}}"  type="text" class="form-control input1" placeholder="{{$job6[0]->job}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Описание работы</label>
                                        <br>
                                        <input name="jobfunction6" value="{{$job6[0]->jobfunction}}"  type="text" class="form-control input1" placeholder="{{$job6[0]->jobfunction}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>
                            </div>
                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentjobspost7')}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Должность</label>
                                        <br>
                                        <input name="job7" value="{{$job7[0]->job}}"  type="text" class="form-control input1" placeholder="{{$job7[0]->job}}">
                                    </div>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Описание работы</label>
                                        <br>
                                        <input name="jobfunction7" value="{{$job7[0]->jobfunction}}"  type="text" class="form-control input1" placeholder="{{$job7[0]->jobfunction}}">
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

