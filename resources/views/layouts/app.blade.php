<style>
body{
    background-color: #212529 !important;
}    

.display-4, .lead, h5{
    color:white;
}

code{
    color:#007bff !important;
}
</style>

<!doctype html>
<html lang="{{config('app.locale')}}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Wish Wish Wish!</title>
            <link href="{{asset('img/icon.jpg')}}" rel="icon">
            <link rel= "stylesheet" href="{{asset('css/myown.css')}}">
        </head>
        <body>
            @include('include.navbar')
            <div class="container">@include('include.messages')</div>
            @yield('content')
        </body>
        @include('include.footer')
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
</html>