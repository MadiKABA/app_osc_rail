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
        < script src = "https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js" >
            <
            />
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

        .link_active {
            background: #009FE3;
        }
    </style>
</head>

<body>

    <div class="sidebar shadow bg-white">
        <div class="d-flex justify-content-center align-items-center mb-3">
            <img src="/logo.png" alt="logo osc rail" class="w-50" />
        </div>
        <ul>

            <li class="{{ request()->routeIs('home') ? 'link_active text-danger' : '' }}"><a
                    class="{{ request()->routeIs('home') ? 'link_active text-white fs-5' : '' }}"
                    href="{{ route('home') }}">
                    <span><i class="bi bi-house-dash-fill"></i></span>
                    Accueil</a></li>
            <li class="{{ request()->routeIs('membre.index') ? 'link_active text-danger' : '' }}"><a
                    class="{{ request()->routeIs('membre.index') ? 'link_active text-white fs-5' : '' }}"
                    href="{{ route('membre.index') }}">
                    <span>
                        <i class="bi bi-people-fill"></i>
                    </span>
                    Membres</a></li>
            <li class="{{ request()->routeIs('home') ? 'link_active text-danger' : '' }}"><a
                    class="{{ request()->routeIs('home') ? 'link_active text-white fs-5' : '' }}" href="#">
                    <span>
                        <i class="bi bi-person-workspace"></i>
                    </span>
                    Utilisateurs
                </a></li>

        </ul>
    </div>

    <div class="content">
        <div class="shadow d-flex justify-content-end align-items-center p-1 mb-5 pe-3">
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Decconxion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        @yield('content')
    </div>

</body>

</html>
