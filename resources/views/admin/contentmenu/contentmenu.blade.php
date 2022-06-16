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
                            <h1 style="display: flex; justify-content: center">Редактировать Блок Menu</h1>
                            @foreach($menu as $menuas)
                            <div  style="display: flex ; width: 100%; justify-content: center">
                                <form  enctype='multipart/form-data' action="{{route('contentmenupost',$menuas->id )}}" method="post" style=" width: 100%;">

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
                                        <label for="exampleInputPassword1">Название ссылок в меню</label>
                                        <br>
                                        <br>
                                        <input name="name" value="{{$menuas->name}}"   type="text" class="form-control input1" placeholder="{{$menuas->name}}">
                                    </div>
{{--                                    <div style="    display: grid;" class="form-group">--}}
{{--                                        <br>--}}
{{--                                        <label for="exampleInputPassword1">Url перый контента</label>--}}
{{--                                        <br>--}}
{{--                                        <br>--}}
{{--                                        <input name="url" value="{{$menuas->url}}"  type="text" class="form-control input1" placeholder="{{$menuas->url}}">--}}
{{--                                    </div>--}}
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>







@endsection

