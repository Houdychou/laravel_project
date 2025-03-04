<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Détails - {{ $motorcycleDetails->name }}">
    <title>Détails - {{ $motorcycleDetails->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
<main class="container my-5">
    <h2 class="text-center mb-4">Détails du {{ $motorcycleDetails->name }} </h2>
    <div class="table-responsive">
        <table class="table table-hover border table-striped text-center">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Créé le</th>
                <th>Mis à jour le</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $motorcycleDetails->id }}</td>
                <td>{{ $motorcycleDetails->name }}</td>
                <td>{{ number_format($motorcycleDetails->price) }}€</td>
                <td>{{ $motorcycleDetails->created_at }}</td>
                <td>{{ $motorcycleDetails->updated_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <a href="/motorcycle" class="btn btn-primary">Revenir voir les motos</a>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
