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

    <section class="formulaire">
        <Div class="container">
            <div class="offset-md-3 col-md-6">
                <form>
                    @if( !empty($error) )
                                <div class="alert alert-danger" role="alert">
                                    {{ $error  }}
                                </div>
                    @endif
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Titre de l'article</label>
                        <input name="name" class="form-control" id="exampleFormControlInput1" value="{{ $produit->name }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Article</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $produit->description }}</textarea>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">€</span>
                        </div>
                        <input name="price" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{ $produit->price }}">
                    </div>

                    <div class="form-group" style="visibility: hidden;">
                        <p>Date de création :</p>
                    </div>


                    <button type="submit" class="btn btn-primary btn1">valider</button>
                </form>
            </div>
        </Div>
    </section>

</section>

</body>
</html>