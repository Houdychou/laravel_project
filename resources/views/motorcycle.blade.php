<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Liste des motos">
    <title>Liste des Motos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/main.css">
</head>

<body class="bg-light">

<!-- HEADER -->
<header class="bg-dark text-white py-3 text-center">
    <h1>Motos</h1>
</header>

<!-- MAIN -->
<main class="container my-5">
    <h2 class="text-center mb-4">Liste des Motos</h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover text-center">
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
            @foreach ($motorcycles as $moto)
                <tr>
                    <td>{{ $moto->id }}</td>
                    <td>{{ $moto->name }}</td>
                    <td>{{ $moto->price }}€</td>
                    <td>{{ $moto->created_at }}</td>
                    <td>{{ $moto->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
