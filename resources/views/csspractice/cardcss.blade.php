<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Card CSS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/app-card.css">
    </head>
    <body>
        <div class="card">
            <!-- left side -->
            <div class="card-left">
                <a href="#">PHP</a>

                <img src="https://laracasts.com/images/thumbnails/tooling-default.svg">

                <span>Intermediate Difficulty</span>
            </div>

            <!-- right side -->
            <div class="card-right">
                <h3 class="card-title"><a href="#">Testing Jargon</a></h3>
                <p>
                    There's no two ways about it: terminology in testing world is incredibly overwhelming.
                    Let's fix that! Bit by bit, we'll break all of these confusing concepts down as bes as we can.
                </p>
                <div>
                    <img src="https://laracasts.com/images/icons/books.svg">
                    5 lessons

                    <img src="https://laracasts.com/images/icons/clock.svg">
                    53:10 min
                </div>
            </div>
        </div>
    </body>
</html>
