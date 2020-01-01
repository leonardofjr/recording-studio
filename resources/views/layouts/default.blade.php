<html>
    <head>
        <title>Migtikueliz Beats - @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:300,400|Oswald:200,300,400|Roboto:100,300,400|Vollkorn" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="./css/app.css">

    </head>
    <body>
        


        <div id="app" class="container" style="position: relative;">
            <img src="../imgs/mic.png" style="position:absolute; bottom: 0; width: 200px; z-index: 10000" alt="">
            <app></app>
         
        </div>
    </body>

    <script src="./js/app.js"></script>
    <script src="./toggler.js"></script>
</html>


