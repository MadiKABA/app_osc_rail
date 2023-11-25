<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <title>APP OSC RAIL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 200px;
            position: fixed;
            height: 100%;
            background: #f0f0f0;
            padding: 20px 0;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 10px;
            text-align: center;
        }

        .sidebar ul li:hover {
            padding: 10px;
            text-align: center;
            background: #009FE3;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            display: block;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        .content header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content header button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .content table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .content table,
        .content th,
        .content td {
            border: 1px solid #ddd;
        }

        .content th,
        .content td {
            text-align: left;
            padding: 8px;
        }

        .content th {
            background-color: #f0f0f0;
        }

        .content button {
            background-color: #ff0000;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="sidebar shadow bg-white">
        <div class="d-flex justify-content-center align-items-center">
            <img src="/logo.png" alt="logo osc rail" class="w-50" />
        </div>
        <ul>
            <li><a href="#">

                </a></li>
            <li><a href="#">
                    <span><i class="bi bi-house-dash-fill"></i></span>
                    Accueil</a></li>
            <li><a href="{{ route('membre.index') }}">
                    <span>
                        <i class="bi bi-people-fill"></i>
                    </span>
                    Membres</a></li>
            <li><a href="">
                    <span>
                        <i class="bi bi-person-workspace"></i>
                    </span>
                    Utilisateurs
                </a></li>

        </ul>
    </div>

    <div class="content">
        <div class="shadow d-flex justify-content-end align-items-center p-1 mb-5">
            kaba
        </div>
        @yield('content')
    </div>

</body>

</html>
