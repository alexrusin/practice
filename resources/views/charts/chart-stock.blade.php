<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Stock Graph</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    </head>
    <body>
        <div id="chart-app">

            <div>
                <stock-chart url="https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol=DRI&apikey=YPSEZZ91IMYTHW1Z"></wins-graph>
            </div>
            
        </div>

        <script src="/js/charts-stock.js"></script>
    </body>
</html>