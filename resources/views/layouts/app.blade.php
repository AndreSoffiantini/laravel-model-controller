<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        </style>
    </head>
    <body>
       <header>
            
       </header>

       <main>
            @yield('content')
       </main>

       <footer>
            <p>&copy; Movies 2022</p>
       </footer>
    </body>
</html>