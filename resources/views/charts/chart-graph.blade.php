<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Charts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    </head>
    <body>
        <div id="chart-app">
            <div class="container">
                <graph :labels="['January', 'February', 'March']" 
                    :values="[10, 42, 4]"
                    color="red" 
                    border-color="black"
                    ></graph>
            </div>

            <div class="container">
                <graph :labels="['April', 'May', 'June']" 
                    :values="[13, 25, 33]"
                    color="blue" 
                    border-color="green"
                    ></graph>
            </div>
            
        </div>

        <script src="/js/chartsapp.js"></script>
    </body>
</html>