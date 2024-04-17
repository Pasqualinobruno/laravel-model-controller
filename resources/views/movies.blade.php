@extends('layaouts.app')

@section('content')

<body>
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Card Image">
                    <div class="card-content">
                        <ul>
                            <li>
                                <h3>Titolo: {{$movie['title']}}</h3>
                            </li>
                            <li>
                                <p>Titolo originale: {{$movie['original_title']}}</p>
                            </li>
                            <li>
                                <p>Nazionalità: {{$movie['nationality']}}</p>
                            </li>
                            <li>
                                <p>Data di uscita: {{$movie['date']}}</p>
                            </li>
                            <li>
                                <p>Voto: {{$movie['vote']}}</p>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

@endsection