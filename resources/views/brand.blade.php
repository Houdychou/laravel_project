<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Liste des Marques">
    <title>Marques</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">

<main class="container my-5">
    <h2 class="text-center mb-4">Liste des Marques</h2>

    <div class="row g-4">
        @foreach ($brands as $brand)
            <div class="col">
                <div class="card p-3">
                    <div class="card-body">
                        <h4 class="card-title">{{ $brand->name }}</h4>
                        <p class="text-muted mb-1">Créé le : {{ $brand->created_at->format('d/m/Y H:i') }}</p>
                        <p class="text-muted">Mis à jour le : {{ $brand->updated_at->format('d/m/Y H:i') }}</p>
                        <a href="/brand/{{ $brand->id }}" class="btn btn-primary mt-2">Voir les détails</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="/motorcycle" class="btn btn-outline-primary">Voir les motos</a>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
