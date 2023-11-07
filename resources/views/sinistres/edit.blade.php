@extends('layouts.app')
@section('title')
    {{__('Modifier la police : '.$sinistre->id )}}
@endsection
@section('header_toolbar')
@endsection
@section('content')
    @php $styleCss = 'style'; @endphp
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-end mb-5">
                    <h1>@yield('title')</h1>
                    <a class="btn btn-outline-primary float-end"href="{{ route('policies.index') }}">{{ __('messages.common.back') }}</a>
                </div>

                <div class="col-12">
                    @include('layouts.errors')
                </div>
                <div class="card">
                    <div class="card-body">
                        <h1>Modifier le sinistre #{{ $sinistre->id }}</h1>

                            <form action="{{ route('sinistres.update', $sinistre->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div>
                                    <label for="policy_id">ID de la police :</label>
                                    <input type="text" name="policy_id" id="policy_id" value="{{ $sinistre->policy_id }}" required>
                                </div>

                                <div>
                                    <label for="user_id">ID de l'utilisateur :</label>
                                    <input type="text" name="user_id" id="user_id" value="{{ $sinistre->user_id }}" required>
                                </div>

                                <div>
                                    <label for="sinistre_num">Numéro du sinistre :</label>
                                    <input type="text" name="sinistre_num" id="sinistre_num" value="{{ $sinistre->sinistre_num }}" required>
                                </div>

                                <div>
                                    <label for="immatriculation">Immatriculation :</label>
                                    <input type="text" name="immatriculation" id="immatriculation" value="{{ $sinistre->immatriculation }}" required>
                                </div>

                                <div>
                                    <label for="mark">Marque :</label>
                                    <input type="text" name="mark" id="mark" value="{{ $sinistre->mark }}" required>
                                </div>

                                <div>
                                    <label for="power">Puissance :</label>
                                    <input type="text" name="power" id="power" value="{{ $sinistre->power }}" required>
                                </div>

                                <div>
                                    <label for="usage">Usage :</label>
                                    <input type="text" name="usage" id="usage" value="{{ $sinistre->usage }}" required>
                                </div>

                                <div>
                                    <label for="zone">Zone :</label>
                                    <input type="text" name="zone" id="zone" value="{{ $sinistre->zone }}" required>
                                </div>

                                <div>
                                    <label for="ptac">PTAC :</label>
                                    <input type="number" name="ptac" id="ptac" value="{{ $sinistre->ptac }}" required>
                                </div>

                                <div>
                                    <label for="passager">Qualité du passager :</label>
                                    <select name="passager" id="passager" required>
                                        <option value="">Sélectionnez une option</option>
                                        <option value="Conducteur" {{ $sinistre->passager == 'Conducteur' ? 'selected' : '' }}>Conducteur</option>
                                        <option value="Passager avant" {{ $sinistre->passager == 'Passager avant' ? 'selected' : '' }}>Passager avant</option>
                                        <option value="Passager arrière" {{ $sinistre->passager == 'Passager arrière' ? 'selected' : '' }}>Passager arrière</option>
                                        <option value="Piéton" {{ $sinistre->passager == 'Piéton' ? 'selected' : '' }}>Piéton</option>
                                        <option value="Autre" {{ $sinistre->passager == 'Autre' ? 'selected' : '' }}>Autre</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="date_h">Date et heure de l'accident :</label>
                                    <input type="datetime-local" name="date_h" id="date_h" value="{{ $sinistre->date_h }}" required>
                                </div>

                                <div>
                                    <label for="lieu">Lieu de l'accident :</label>
                                    <input type="text" name="lieu" id="lieu" value="{{ $sinistre->lieu }}" required>
                                </div>

                                <div>
                                    <label for="venant">Venant de :</label>
                                    <input type="text" name="venant" id="venant" value="{{ $sinistre->venant }}" required>
                                </div>

                                <div>
                                    <label for="allant">Allant vers :</label>
                                    <input type="text" name="allant" id="allant" value="{{ $sinistre->allant }}" required>
                                </div>

                                <div>
                                    <label for="circonstance">Circonstances de l'accident :</label>
                                    <textarea name="circonstance" id="circonstance" required>{{ $sinistre->circonstance }}</textarea>
                                </div>

                                <div>
                                    <label for="croquis">Croquis de l'accident :</label>
                                    <input type="file" name="croquis" id="croquis">
                                </div>

                                <div>
                                    <label for="temoins">Témoins :</label>
                                    <textarea name="temoins" id="temoins">{{ $sinistre->temoins }}</textarea>
                                </div>
                                <div>
                                    <label for="name_adv">Nom et prénom de l'adversaire :</label>
                                    <input type="text" name="name_adv" id="name_adv" required>
                                </div>

                                <div>
                                    <label for="tel_adv">Téléphone de l'adversaire :</label>
                                    <input type="tel" name="tel_adv" id="tel_adv">
                                </div>

                                <div>
                                    <label for="email_adv">Email de l'adversaire :</label>
                                    <input type="email" name="email_adv" id="email_adv">
                                </div>

                                <div>
                                    <label for="assurance_adv">Compagnie d'assurance de l'adversaire :</label>
                                    <input type="text" name="assurance_adv" id="assurance_adv">
                                </div>

                                <div>
                                    <label for="num_contrat_adv">Numéro de contrat d'assurance de l'adversaire :</label>
                                    <input type="text" name="num_contrat_adv" id="num_contrat_adv">
                                </div>

                                <div>
                                    <label for="description">Description du sinistre :</label>
                                    <textarea name="description" id="description" required></textarea>
                                </div>

                                <div>
                                    <label for="photos">Photos du sinistre :</label>
                                    <input type="file" name="photos" id="photos">
                                </div>

                                <div>
                                    <label for="documents">Documents supplémentaires :</label>
                                    <input type="file" name="documents" id="documents">
                                </div>

                                <button type="submit">Enregistrer</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('default_image_url', asset('images/default-product.jpg') ,['id' => 'defaultImageUrl']) }}
@endsection
