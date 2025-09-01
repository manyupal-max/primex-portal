<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeX Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">PrimeX</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('clients.index') }}">Clients</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projects.index') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('payments.index') }}">Payments</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
