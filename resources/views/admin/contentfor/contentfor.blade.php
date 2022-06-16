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

                            <form enctype='multipart/form-data' action="{{route('partnerheader')}}" method="post" style="padding: 30px; width: 100%;">
                                @if(session('headerok'))
                                    <div class="succses2">
                                        <p class="succsestext">
                                            <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                                            Вы удачно обновили  контент</p>
                                    </div>
                                @endif
                                @csrf
                                <br>
                                <label for="exampleInputPassword1">Вертикальный заголовок</label>
                                <br>
                                <br>

                                <input name="partnerheader" value="{{$header}}"  type="text" class="form-control input1" placeholder="{{$header}}">
                                <br>
                                <button  type="submit" class="btn btn-success">Сохранить изменения</button>
                            </form>
                        </div>





                        <br>
                        <br>
                        <div class="card-body">
                            <h3><a style="color: white" href="{{route('line1')}}">первая строка партнёров</a></h3>
                            <h3><a style="color: white" href="{{route('line2')}}">вторая строка партнёров</a></h3>
                            <h3><a style="color: white" href="{{route('line3')}}">третья строка партнёров</a></h3>
                            <br>
                            <br>
                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('createpartner')}}" method="post" style=" width: 100%;">
                                    @if(session('ok'))
                                        <div class="succses2">
                                            <p class="succsestext">
                                                <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                                                Вы удачно добавили  контент</p>
                                        </div>
                                    @endif

                                    <h1 style="display: flex; justify-content: center">Добавление партнёра</h1>
                                    <br><br>

                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <select name="line"  style="width: 37%; border-radius: 5px; height: 27px; background: #2a3038;    color: #fffff2;    border: none;" class="form-select" aria-label="Disabled select example" >
                                            <option disabled selected>Выберите строку добавления партнёра</option>
                                            <option name="line" value="line1">первая строка</option>
                                            <option name="line" value="line2">вторая строка</option>
                                            <option name="line" value="line3">третья строка</option>
                                        </select>
                                        <br>
                                        @if ($errors->has('line'))
                                            <div  style="    display: flex; justify-content: center; width: 37%; font-size: 13px" class="alert-danger">обязательное поле</div>
                                        @endif
                                        <br>
                                        <h4>Ссылка партнера</h4>
                                        <br>
                                        <input name="url" value=""  type="text" class="form-control input1" placeholder="">
                                        <br>
                                        <br>
                                        <h4 for="">Логотип партнёра
                                        </h4>
                                        <img src=""  id="blaha"  >
                                        <br>
                                        <input accept="image/*" style="display: none" name="photo" id="file-logo" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-logo" class="custom-file-upload btn btn-outline-success">
                                            Добавить Логотип

                                        </label>
                                        @if ($errors->has('photo'))
                                            <div  style="    display: flex; justify-content: center; width: 20%; font-size: 13px" class="alert-danger">{{ $errors->first('photo') }}</div>
                                        @endif
                                    </div>
                                    <button style="width:20%;" type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>

                            </div>
                            <br>
                            <br>

                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>







@endsection

