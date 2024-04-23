<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Website</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#">Film Website</a>
            </div>
            <ul class="nav-links">
                <li><a class="{{Route::currentRouteName() === 'home' ? 'blue' : ''}}" href="{{route('home')}}">Home</a></li>
                <li><a class="{{Route::currentRouteName() === 'movies' ? 'blue' : ''}}" href="{{route('movies')}}">Movies</a></li>
            </ul>
        </div>
    </nav>

    <!-- Resto del contenuto del tuo sito qui -->

</body>

</html>