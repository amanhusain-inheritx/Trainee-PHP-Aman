<!DOCTYPE html>
<html>
<head>
    <title>Laravel App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            margin-top: 30px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 15px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            background: #3490dc;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #2779bd;
        }

        .list-item {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .badge {
            background: #38c172;
            color: #fff;
            padding: 3px 8px;
            border-radius: 5px;
            font-size: 12px;
        }

        .danger {
            background: #e3342f;
        }

        a {
            text-decoration: none;
            color: #3490dc;
        }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>