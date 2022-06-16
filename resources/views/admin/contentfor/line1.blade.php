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






                        <br>
                        <br>
                        <div class="card-body">
                            <h3><a style="color: white" href="{{route('line1')}}">первая строка партнёров</a></h3>
                            <h3><a style="color: white" href="{{route('line2')}}">вторая строка партнёров</a></h3>
                            <h3><a style="color: white" href="{{route('line3')}}">третья строка партнёров</a></h3>
                            <br>
                            <br>
                            <h1 style="display: flex; justify-content: center">Первая строка Обновление партнёров</h1>
                            @if(session('ok'))
                                <div class="succses2">
                                    <p class="succsestext">
                                        <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                                        Вы удачно добавили  контент</p>
                                </div>
                            @endif
                            <?php
                            $n = 0;
                            $l = 0;
                            $i =0;
                            ?>
                            @foreach($partner as $partners)
                            <?php
                            $n++;
                            $l++;
                            $i++;
                            ?>
                            <div  style="display: flex ; width: 100%; justify-content: center">
                                <form  enctype='multipart/form-data' action="{{route('updatepartner', $partners->id)}}" method="post" style=" width: 100%;">
                                    <br><br>
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        @if ($errors->has('line'))
                                            <div  style="    display: flex; justify-content: center; width: 37%; font-size: 13px" class="alert-danger">обязательное поле</div>
                                        @endif
                                        <br>
                                        <h4>Ссылка партнера</h4>
                                        <br>
                                        <input name="url" value="{{$partners->url}}"  type="text" class="form-control input1" placeholder="">
                                        <br>
                                        <br>
                                        <h4 for="">Логотип партнёра
                                        </h4>
                                        <img src="{{asset('storage/app/uploads/partner/'.$partners->logo)}}"  id="blahas<?php echo $n; ?>"  >
                                        <br>
                                        <input accept="image/*" style="display: none" name="photo" id="file-logos<?php echo $l;?>" class="btn btn-outline-success" type="file"/>
                                        <label style="width: 20%;" for="file-logos<?php echo $i;?>" class="custom-file-upload btn btn-outline-success">
                                            Добавить Логотип
                                        </label>
                                        @if ($errors->has('photo'))
                                            <div  style="    display: flex; justify-content: center; width: 20%; font-size: 13px" class="alert-danger">{{ $errors->first('photo') }}</div>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                    <br><br>
                                    <a href="{{route('deletepartner', $partners->id)}}"><button type="button" style="width: 19%;" type="submit" class="btn btn-danger">Удалить партнёра</button></a>
                                </form>

                            </div>
                            @endforeach
                            <br>
                            <br>

                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>







@endsection

