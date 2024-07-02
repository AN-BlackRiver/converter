<!doctype html>
<html lang="ru">
<head>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Converter</title>
</head>
<body>
    <div class="col-6 mt-3">
        <form action="{{route('convert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <input name="file" type="file" class="form-control" id="inputGroupFile02">
                <button class="btn btn-success" type="submit">Конвертировать</button>
            </div>
            @error('file')<a class="text-danger">{{$message}}</a>@enderror
        </form>
    </div>
</body>
</html>
