@extends('welcome')
@section('content')
    <header>
        <h1>Liste Des Secteurs d'Activités</h1>
        <div class=" d-flex justify-content-between align-items-center">
           
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Nouveau Secteur d'activité 
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Ajouter un Secteur d'activité </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="w-100" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-1">
                                        <label for="email"
                                            class="col-md-12  col-form-label text-md-start">{{ __('Nom') }}</label>
                                        <div class="col-md-12">
                                            <input id="email" type="text"
                                                class="form-control border-2 @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                autofocus>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="password"
                                            class="col-md-12 col-form-label text-md-start">{{ __('Prénom') }}</label>
                                        <div class="col-md-12">
                                            <input id="password" type="text"
                                                class="form-control border-2 @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-12 offset-md-12">
                                            <button type="submit" class="w-100 btn btn-primary">
                                                {{ __('Enregistrer') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <table>
        <tr>
            <th>Nom</th>
        </tr>
        <tr>
            <td>Diarra DIOUF</td>
        </tr>
        <!-- Répétez les lignes ci-dessus pour chaque membre. -->
    </table>
@endsection
