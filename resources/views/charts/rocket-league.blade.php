<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rocket League</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    </head>
    <body>
        <div id="chart-app">

            <div>
                <h1>Rocket League Wins Comparison</h1>
                <wins-graph :player="{{$jeffrey}}" :opponent="{{$taylor}}"></wins-graph>
            </div>
            
        </div>

        <script src="/js/charts-rocket.js"></script>
    </body>
</html>