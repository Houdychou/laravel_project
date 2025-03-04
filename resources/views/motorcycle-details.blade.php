<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Détails - {{ $motorcycleDetails->name }}">
    <title>Détails - {{ $motorcycleDetails->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body data-bs-theme="dark">

<main class="container my-5">
    <h2 class="text-center mb-4">Détail de la marque</h2>

    <div class="card text-center">
        <div class="card-body">
            <h3 class="card-title text-info">{{ $motorcycleDetails->name }}</h3>
            <p class="text-muted mb-1">ID : <strong>{{ $motorcycleDetails->id }}</strong></p>
            <p class="text-muted mb-1">Créé le : <strong>{{ $motorcycleDetails->created_at->format('d/m/Y H:i') }}</strong></p>
            <p class="text-muted">Mis à jour le : <strong>{{ $motorcycleDetails->updated_at->format('d/m/Y H:i') }}</strong></p>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/motorcycle" class="btn btn-outline-primary">Revenir voir les motos</a>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
