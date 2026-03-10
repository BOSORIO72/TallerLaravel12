<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Canchas</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f4f6f8; color: #333; }

        nav {
            background: #1a73e8;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            height: 56px;
        }
        nav .brand { color: #fff; font-weight: bold; font-size: 1.1rem; margin-right: auto; }
        nav a {
            color: #cfe2ff;
            text-decoration: none;
            padding: 0.4rem 0.8rem;
            border-radius: 4px;
            transition: background 0.2s;
        }
        nav a:hover { background: rgba(255,255,255,0.2); color: #fff; }

        main { max-width: 900px; margin: 2rem auto; padding: 0 1rem; }

        .card {
            background: #fff;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
        }

        h1 { margin-bottom: 1rem; color: #1a73e8; }
        h2 { margin-bottom: 0.5rem; }

        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 0.6rem 1rem; border-bottom: 1px solid #e0e0e0; }
        th { background: #f0f4ff; color: #1a73e8; }
        tr:hover td { background: #fafafa; }

        .btn {
            display: inline-block;
            padding: 0.4rem 1rem;
            background: #1a73e8;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }
        .btn:hover { background: #1558b0; }
        .btn-outline {
            background: transparent;
            border: 1px solid #1a73e8;
            color: #1a73e8;
        }
        .btn-outline:hover { background: #1a73e8; color: #fff; }

        .badge {
            display: inline-block;
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
            font-size: 0.8rem;
            background: #e8f0fe;
            color: #1a73e8;
        }

        .alert { padding: 1rem; border-radius: 6px; background: #fff3cd; border: 1px solid #ffc107; }
    </style>
</head>
<body>

<nav>
    <span class="brand">CanchasCuba</span>
    <a href="{{ route('home') }}">Inicio</a>
    <a href="{{ route('courts.index') }}">Canchas</a>
    <a href="{{ route('bookings.index') }}">Reservas</a>
    <a href="{{ route('reports.monthly') }}">Reportes</a>
</nav>

<main>
    @yield('content')
</main>

</body>
</html>
