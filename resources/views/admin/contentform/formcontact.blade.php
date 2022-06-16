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
                                <form  enctype='multipart/form-data' action="{{route('formcontactuspost')}}" method="post" style=" width: 100%;">


                                    <h1 style="display: flex; justify-content: center">Редактирование контента формы  Contact us</h1>
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
                                        <span>Форма не должна содержать более 35-и слов </span>

                                        <textarea  value="{{$contactus}}" name="form" id="" cols="30" rows="10" class="form-control input1" placeholder="{{$contactus}}"></textarea>
{{--                                        <input name="form" value=""  type="text" class="form-control input1" placeholder="">--}}
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div  style="display: flex ; width: 100%; justify-content: center">
                                <form  enctype='multipart/form-data' action="{{route('formcontactuspost2')}}" method="post" style=" width: 100%;">


                                    <h1 style="display: flex; justify-content: center">Редактирование контента формы  Send Cv</h1>
                                    <br><br>


                                    @csrf

                                    <div style="    display: grid;" class="form-group">

                                        <br>
                                        <span>Форма не должна содержать более 27-и слов </span>

                                        <textarea value="{{$cv}}" name="form" id="" cols="30" rows="10" class="form-control input1" placeholder="{{$cv}}"></textarea>
                                        {{--                                        <input name="form" value=""  type="text" class="form-control input1" placeholder="">--}}
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

