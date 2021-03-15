<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinkit</title>
    <link rel="stylesheet" href="{{ asset('./styles/partials/base.css') }}">
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    @yield('linkRef')
    <script src="{{ asset('./js/app.js') }}" defer></script>
</head>
<body>
    <header>
        <h1>Trinkit</h1>
        <p>Organizador de colecionáveis</p>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
    
    </footer>
</body>
</html>