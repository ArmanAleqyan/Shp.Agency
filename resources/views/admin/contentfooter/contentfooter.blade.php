@extends('layouts.default')
@section('title')
    Admin
@endsection
@section('quill_links')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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

                                <form  enctype='multipart/form-data' action="{{route('contentfooter1')}}" method="post" style=" width: 100%;">

                                    @if(session('ok'))
                                        <div class="succses2">
                                            <p class="succsestext">
                                                <img class="succsesimg" src="{{asset('storage/app/uploads/Galochka.png')}}"/>
                                                Вы удачно обновили  контент</p>
                                        </div>
                                    @endif

                                    <h1 style="display: flex; justify-content: center">Первая таблица</h1>
                                    <br><br>
                                    @csrf

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Название компании</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="line1" value= "{{$line1}}"type="text" class="form-control input1" placeholder="{{$line1}}">
                                    </div>

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Год основания</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="line2" value="{{$line2}}"   type="text" class="form-control input1" placeholder="{{$line2}}">
                                    </div>


                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>
                            </div>
                        </div>

                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentfooter2')}}" method="post" style=" width: 100%;">


                                    <h1 style="display: flex; justify-content: center">Вторая таблица</h1>
                                    <br><br>
                                    @csrf

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Контакты</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="line3" value= "{{$line3}}"type="text" class="form-control input1" placeholder="{{$line3}}">
                                    </div>

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Номер телефона</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="phone" value="{{$phone}}"   type="text" class="form-control input1" placeholder="{{$phone}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Телеграм</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="telegram" value="{{$telegram}}"   type="text" class="form-control input1" placeholder="{{$telegram}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">WhatsApp</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="whatsapp" value="{{$WhatsApp}}"   type="text" class="form-control input1" placeholder="{{$WhatsApp}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Напишите нам</label>
                                        <br>
                                        <br>
                                        <input name="line7" value="{{$line7}}"   type="text" class="form-control input1" placeholder="{{$line7}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Почта</label>
                                        <br>
                                        <br>
                                        <input name="email" value="{{$email}}"   type="text" class="form-control input1" placeholder="{{$email}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentfooter3')}}" method="post" style=" width: 100%;">


                                    <h1 style="display: flex; justify-content: center">Третья таблица</h1>
                                    <br><br>
                                    @csrf

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Адрес</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="adres" value= "{{$address}}"type="text" class="form-control input1" placeholder="{{$address}}">
                                    </div>

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Политика конфиденциальности</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="privacy" value="{{$privacy}}"   type="text" class="form-control input1" placeholder="{{$privacy}}">
                                    </div>
                                    <div style="" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Политика конфиденциальности текст</label>
                                        <br>
                                      
                                        <br>
                                        <!-- *обязательно заполнить текст -->
                                        <div class="form-group">
                             
                             <textarea class="ckeditor form-control" style="backround-color: !transparent" name="privacytext">{!! json_decode($privacytext) !!}</textarea>
                         </div>
                                        <!-- <div  id="editor" >
                                        
                                                  </div>
                                        <input  type="hidden" id="quill_html" value="{!! json_decode($privacytext) !!}"  name="privacytext" enctype="multipart/form-data" > -->

                    
                                        <!-- <textarea style="height: 280px;" name="privacytext" value="{{$privacytext}}"   type="text" class="form-control input1" placeholder="{{$privacytext}}"></textarea> -->
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Политика в отношении файлов cookie</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="cookie" value="{{$cookie}}"   type="text" class="form-control input1" placeholder="{{$cookie}}">
                                    </div>
                                    <div style="  " class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Политика в отношении файлов cookie текст</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <div class="form-group">
                             
                                <textarea class="ckeditor form-control" style="backround-color: !transparent" name="cookietext">{!! json_decode($cookietext) !!}</textarea>
                            </div>
                                    
                                    </div>


                                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form  enctype='multipart/form-data' action="{{route('contentfooter4')}}" method="post" style=" width: 100%;">


                                    <h1 style="display: flex; justify-content: center">Четвёртая таблица</h1>
                                    <br><br>
                                    @csrf

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Instagram</label>
                                        <br>
                                                                                <h4>Добавте username инстаграма</h4>
                                        <br>
                                        <input name="instagram" value= "{{$instagram}}"type="text" class="form-control input1" placeholder="{{$instagram}}">
                                    </div>

                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Facebook</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="facebook" value="{{$facebook}}"   type="text" class="form-control input1" placeholder="{{$facebook}}">
                                    </div>
                                    <br>
                                    <div style="    display: grid;" class="form-group">
                                        <br>
                                        <label for="exampleInputPassword1">Linkdine</label>
                                        <br>
                                        {{--                                        <h3>{{$butontext}}</h3>--}}
                                        <br>
                                        <input name="linkdine" value="{{$linkdine}}"   type="text" class="form-control input1" placeholder="{{$linkdine}}">
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




<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{'header': 1}, {'header': 2}],               // custom button values
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
        [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
        [{'direction': 'rtl'}],                         // text direction
        [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
        [{'header': [1, 2, 3, 4, 5, 6, false]}],
        [{'color': []}, {'background': []}],          // dropdown with defaults from theme
        [{'font': []}],
        [{'align': []}],
        ['clean']
    ];
    var quill = new Quill('#editor', {
        modules: {
            syntax: true,
            toolbar: toolbarOptions,
        },
        theme: 'snow'
    });
</script>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
    </script>




    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{'header': 1}, {'header': 2}],               // custom button values
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
        [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
        [{'direction': 'rtl'}],                         // text direction
        [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
        [{'header': [1, 2, 3, 4, 5, 6, false]}],
        [{'color': []}, {'background': []}],          // dropdown with defaults from theme
        [{'font': []}],
        [{'align': []}],
        ['clean']
    ];
    var quill = new Quill('#editors', {
        modules: {
            syntax: true,
            toolbar: toolbarOptions,
        },
        theme: 'snow'
    });

</script>


@endsection
