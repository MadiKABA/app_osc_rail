@extends('welcome')
@section('content')
<header>
    <h1>Liste Des Membres</h1>
    <div>
      <button>Exporter</button>
      <button>Nouveau Membres</button>
    </div>
  </header>
  
  <table>
    <tr>
      <th>Nom</th>
      <th>Contact</th>
      <th>Genre</th>
      <th>Activité</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>Diarra DIOUF</td>
      <td>+221 77 100 00 00</td>
      <td>Masculin</td>
      <td>Menagere</td>
      <td><button>Retirer</button></td>
    </tr>
    <!-- Répétez les lignes ci-dessus pour chaque membre. -->
  </table>
@endsection