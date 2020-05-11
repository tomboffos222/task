<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card w-100 mt-5 mb-5 p-5 text-black">
                        <form action="{{route('CreateLink')}}" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Введите адрес исходный ссылки" name="link">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Введите загаловок opengraph" name="title">
                            </div>
                            <div class="form-group">
                                <input type="text" name="description" id="" class="form-control" placeholder="Введите описание opengraph">
                            </div>
                            <div class="form-group">
                                <input type="file" name="image" id="" accept="image/x-png,image/gif,image/jpeg">
                            </div>
                            <div class="form-group"><input type="submit" value="Сократить ссылку" class="btn btn-primary"></div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    @if($links != null)
                        @foreach($links as $link)
                            <div class="card w-100 p-3 flex-row justify-content-between">

                                <a href="{{$link->route}}" id="link_{{$link->id}}">{{$link->route}}</a>
                                <button onclick="copy({{$link->id}})" id="button_{{$link->id}}" class="btn btn-primary">Скопировать</button>
                            </div>
                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function copy(id) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($('#link_'+id).text()).select();
            document.execCommand("copy");
            $temp.remove();
            $('#button_'+id).html('Скопировано')

        }

    </script>
    </body>

</html>
