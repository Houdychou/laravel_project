<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Liste des Marques">
    <title>Liste des Marques</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
<header class="bg-dark text-white py-3 text-center">
    <h1>Marques</h1>
</header>

<main class="container my-5">
    <h2 class="text-center mb-4">Liste des Marques</h2>
    <div class="table-responsive">
        <table class="table table-hover border table-striped text-center">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Créé le</th>
                <th>Mis à jour le</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->id }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->created_at }}</td>
                    <td>{{ $brand->updated_at }}</td>
                    <td><a href="/brand/{{ $brand->id }}" class="btn btn-primary">Voir les détails</a></td>
                </tr>
            @endforeach
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
