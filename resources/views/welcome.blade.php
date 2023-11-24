<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liste des Membres</title>
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
  .content table, .content th, .content td {
    border: 1px solid #ddd;
  }
  .content th, .content td {
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
   
<div class="sidebar">
  <ul>
    <li><a href="#">Accueil</a></li>
    <li><a href="{{ route('membre.index') }}">Membres</a></li>
    <li><a href="">Utilisateurs</a></li>
  </ul>
</div>

<div class="content">
 @yield('content')
</div>

</body>
</html>
