<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="col">
        <div class="row m-4 justify-content-center">
            <div class="btn-group " role="group" aria-label="Basic example">
                <a class="btn btn-{{ (\Illuminate\Support\Facades\Session::get('website_language') == "en") ? "dark" : "light" }}" href="{{route('user.change-language', 'en')}}" role="button">EN</a>
                <a class="btn btn-{{ (\Illuminate\Support\Facades\Session::get('website_language') == "vi") ? "dark" : "light" }}" href="{{route('user.change-language', 'vi')}}" role="button">VI</a>
            </div>
        </div>
        <div class="row m-3 d-flex justify-content-center">
            <div class="btn-group btn-group-lg" role="group">
                <button type="button" class="btn btn-success">{{ __('messages.create') }}</button>
                <button type="button" class="btn btn-primary">{{ __('messages.list') }}</button>
                <button type="button" class="btn btn-warning">{{ __('messages.edit') }}</button>
                <button type="button" class="btn btn-danger">{{ __('messages.remove') }}</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
