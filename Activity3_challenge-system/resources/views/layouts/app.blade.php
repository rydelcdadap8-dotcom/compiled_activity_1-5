<!DOCTYPE html>
<html>
<head>
    <title>Challenge Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            min-height: 100vh;
        }

        .card-glass {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .form-control, .form-select {
            background: rgba(255,255,255,0.9);
        }

        .title {
            font-weight: bold;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand">💎 Challenge Dashboard</span>
</nav>

<div class="container py-5">
    @yield('content')
</div>

</body>
</html>