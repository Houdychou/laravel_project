<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Détails - {{ $brandDetails->name }}">
    <title>Détails - {{ $brandDetails->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">

<main class="container my-5">
    <h2 class="text-center mb-4">Détail de la marque</h2>

    <div class="card text-center">
        <div class="card-body">
            <h3 class="card-title text-info">{{ $brandDetails->name }}</h3>
            <p class="text-muted mb-1">ID : <strong>{{ $brandDetails->id }}</strong></p>
            <p class="text-muted mb-1">Créé le : <strong>{{ $brandDetails->created_at->format('d/m/Y H:i') }}</strong></p>
            <p class="text-muted">Mis à jour le : <strong>{{ $brandDetails->updated_at->format('d/m/Y H:i') }}</strong></p>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/brand" class="btn btn-outline-primary">Revenir voir les marques</a>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
