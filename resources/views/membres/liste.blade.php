@extends('welcome')
@section('content')
    <header>
        <h1>Liste Des Membres</h1>
        <div class=" d-flex justify-content-between align-items-center">
            <button class="mx-3">Exporter</button>
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Nouveau Membres
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Ajouter un membre</h5>
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
                                    <div class="row mb-1">
                                        <label for="email"
                                            class="col-md-12  col-form-label text-md-start">{{ __('Email') }}</label>
                                        <div class="col-md-12">
                                            <input id="email" type="email"
                                                class="form-control border-2 @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="email"
                                            class="col-md-12  col-form-label text-md-start">{{ __('Téléphone') }}</label>
                                        <div class="col-md-12">
                                            <input id="email" type="tel"
                                                class="form-control border-2 @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="email"
                                            class="col-md-12  col-form-label text-md-start">{{ __('Date Naissance') }}</label>
                                        <div class="col-md-12">
                                            <input id="email" type="date"
                                                class="form-control border-2 @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="email"
                                            class="col-md-12  col-form-label text-md-start">{{ __('Genre') }}</label>
                                        <div class="col-md-12">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Selectionner un Genre</option>
                                                <option value="1">Dakar</option>
                                                <option value="2">Matam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="email"
                                            class="col-md-12  col-form-label text-md-start">{{ __('Départements') }}</label>
                                        <div class="col-md-12">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Selectionner un departementss</option>
                                                <option value="1">Homme</option>
                                                <option value="2">Femme</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="email"
                                            class="col-md-12  col-form-label text-md-start">{{ __('Activités') }}</label>
                                        <div class="col-md-12">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Selectionner une activités</option>
                                                <option value="1">Vendeuse</option>
                                                <option value="2">Artisanat</option>
                                            </select>
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
    <div class="my-5 d-flex justify-content-between align-items-center">
        <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Departement</option>
                <option value="1">Dakar</option>
                <option value="2">Faty</option>
                <option value="3">Matam</option>
            </select>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="mx-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Genre</option>
                    <option value="1">Homme</option>
                    <option value="2">Femme</option>
                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Activite</option>
                    <option value="1">musicien</option>
                </select>
            </div>
        </div>
    </div>
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
