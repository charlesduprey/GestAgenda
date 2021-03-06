<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-color: #ecf0f5;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .title2 {
                font-size: 40px;
            }

            a:link, a:visited, a:hover, a:active {
                color: black;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">GestAgenda</div>

                <br><br>
                <hr/>
                <br><br>

                <div class="title2"><a href="{{ url('/auth/login') }}">Se connecter</a></div>
            </div>
        </div>
    </body>
</html>