<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Tags Input</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row m-6" style="width: 50%;">
                    <div class="col-md-3">
                        <tags-input :tags-init="{{json_encode(['hello', 'world'])}}"></tags-input>
                    </div>
                </div>
            </div>
       
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>