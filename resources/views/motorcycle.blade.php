<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Liste des motos">
    <title>Liste des Motos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
<header class="bg-dark text-white py-3 text-center">
    <h1>Motos</h1>
</header>

<main class="container my-5">
    <h2 class="text-center mb-4">Liste des Motos</h2>
    <div class="row">
        @foreach ($motorcycles as $moto)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $moto->name }}</h5>
                        <p class="card-text"><strong>Créé le :</strong> {{ $moto->created_at }}</p>
                        <p class="card-text"><strong>Mis à jour le :</strong> {{ $moto->updated_at }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
