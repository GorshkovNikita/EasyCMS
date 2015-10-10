<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="{{ asset('../vendor/tinymce/tinymce/tinymce.min.js') }}"></script>
        <title>@yield('title')</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <link href="{{ asset('cms/css/style.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('cms/js/js.js') }}"></script>

    </head>
    <body>
        <header>
            <div class="container">

            </div>
        </header>

        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <footer>
            <div class="container">
                EasyCMS &copy; 2015
            </div>
        </footer>
    </body>
</html>