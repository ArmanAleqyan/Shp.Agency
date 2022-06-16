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
@foreach($email as $emails)
                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentemailpost', $emails->id)}}" method="post" style=" width: 100%;">
                                    <br>
                                    @if(session('ok'))
                                        <div class="succses2">
                                            <p class="succsestext">
                                                <img class="succsesimg" src="{{asset('storage/app/uploads/Galochka.png')}}"/>
                                                Вы удачно обновили  контент</p>
                                        </div>
                                    @endif
                                    @csrf
                                    <div style="    display: grid;" class="form-group">
                                        <h1 style="display: flex; justify-content: center">Почта получения форм</h1>
                                        <br>
{{--                                        <label for="exampleInputPassword1">Почта получения форм</label>--}}
{{--                                        <br>--}}
                                        {{--                                        <h3>{{$generaltitle}}</h3>--}}
                                        <br>
                                        <div style="display: flex;justify-content: end;align-items: center;">
                                        <img  onclick="myFunction()"  style="    margin-right: 10px; cursor: pointer; position: absolute;width: 22px;z-index: 5;display: flex;" src="{{asset('imagesProject/pencil-solid.svg')}}" alt="da">
                                        <input  disabled id="myText" style="background: slategray; position: relative; z-index: 1;" name="email" value="{{$emails->email}}"  type="email" class="form-control input1" placeholder="{{$emails->email}}" >
                                        </div>
                                    </div>

                                    <script>
                                        function myFunction() {
                                            document.getElementById("myText").disabled = false;
                                            document.getElementById("myText").style.backgroundColor= "#2A3038";
                                        }
                                        function myFunction2() {
                                            document.getElementById("myText").disabled = true;
                                            document.getElementById("myText").style.backgroundColor= "slategray";
                                        }
                                    </script>

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

