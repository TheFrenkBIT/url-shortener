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
    .form-field {
        display: flex;
        flex-direction: row;
        gap: 5px;
    }
    .main-field {
        width: 50%;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .result-field {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 10px;
    }
</style>
<body>
    <div class="main-field">
        <form action="{{ route('url.store') }}" method="post" class="form-field">
            @csrf
            <input type="text" name="base_url" class="form-control" placeholder="Enter url" value="{{ $url->base_url }}">
            <button type="submit" class="btn btn-primary col-2">Generate url</button>
            @error('base_url')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>
        <div class="result-field">
            <span class="text-primary h2">Shortened link:</span>
            <a href="{{ Request::getSchemeAndHttpHost() }}/{{ $url->code }}" class="h2">{{ Request::getSchemeAndHttpHost() }}/{{ $url->code }}</a>
        </div>
    </div>
</body>
</html>

