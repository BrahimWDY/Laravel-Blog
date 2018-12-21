<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--link--}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <title>Article</title>
</head>
<body>


<section class="body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="NewPost">Nouveau Article <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="offset-md-4">


                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $Product->name }}</h5>
                            <p class="card-text">{{ $Product->description }}</p>
                        </div>

                        <p class="card-text price"><small class="text-muted">{{ $Product->price }} €</small></p>
                        <div class="boutton">
                            <a href="/products/edit/{{ $Product->id }}"><i class="fas fa-edit"></i></a>
                            <a href="/products/delete/{{ $Product->id }}"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $Product->created_at }}
                        </div>
                    </div>


        </div>
    </div>

</section>

</body>
</html>