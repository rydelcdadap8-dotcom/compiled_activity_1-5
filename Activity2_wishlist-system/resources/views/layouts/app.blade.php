<!DOCTYPE html>
<html>
<head>
    <title>Wishlist Tracker</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            margin: 0;
            color: #333;
        }

        header {
            background: rgba(0,0,0,0.3);
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 22px;
            letter-spacing: 1px;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 30px auto;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .btn {
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .btn-add { background: #27ae60; }
        .btn-view { background: #2980b9; }
        .btn-edit { background: #f39c12; }
        .btn-delete { background: #c0392b; }

        .btn:hover {
            opacity: 0.8;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background: #27ae60;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        a {
            margin-right: 5px;
        }
    </style>
</head>

<body>

<header>
    💎 Personal Wishlist Tracker
</header>

<div class="container">
    @yield('content')
</div>

</body>
</html>