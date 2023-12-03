<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shortener</title>
        @vite('resources/sass/app.scss')
    </head>
    <style>
        body {
            padding-top: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .main-field {
            min-width: 50%;
            display: flex;
            flex-direction: row;
            gap: 5px;
        }
    </style>
    <body>
    <form action="{{ route('url.store') }}" method="post" class="main-field">
        @csrf
        <input type="text" name="base_url" class="form-control" placeholder="Enter url">
        <button type="submit" class="btn btn-primary col-2">Generate url</button>
        @error('base_url')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>
    </body>
</html>

