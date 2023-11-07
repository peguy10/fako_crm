@extends('layouts.app')
@section('title')
    {{__('messages.product.add_product')}}
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
                        <h1>Détails du sinistre #{{ $sinistre->id }}</h1>

                        <p><strong>ID de la police :</strong> {{ $sinistre->policy_id }}</p>
                        <p><strong>ID de l'utilisateur :</strong> {{ $sinistre->user_id }}</p>
                        <p><strong>Numéro du sinistre :</strong> {{ $sinistre->sinistre_num }}</p>
                        <p><strong>Immatriculation :</strong> {{ $sinistre->immatriculation }}</p>
                        <p><strong>Marque :</strong> {{ $sinistre->mark }}</p>
                        <p><strong>Puissance :</strong> {{ $sinistre->power }}</p>
                        <p><strong>Usage :</strong> {{ $sinistre->usage }}</p>
                        <p><strong>Zone :</strong> {{ $sinistre->zone }}</p>
                        <p><strong>Nom et prénom de l'adversaire :</strong> {{ $sinistre->name_adv }}</p>
                        <p><strong>Téléphone de l'adversaire :</strong> {{ $sinistre->tel_adv }}</p>
                        <p><strong>Email de l'adversaire :</strong> {{ $sinistre->email_adv }}</p>
                        <p><strong>Compagnie d'assurance de l'adversaire :</strong> {{ $sinistre->assurance_adv }}</p>
                        <p><strong>Numéro de contrat d'assurance de l'adversaire :</strong> {{ $sinistre->num_contrat_adv }}</p>
                        <p><strong>Description du sinistre :</strong></p>
                        <p>{{ $sinistre->description }}</p>

                        <div>
                            <label for="photos">Photos du sinistre :</label>
                            @if($sinistre->photos)
                                @foreach($sinistre->photos as $photo)
                                    <img src="{{ asset('storage/' . $photo) }}" alt="Photo du sinistre">
                                @endforeach
                            @else
                                Aucune photo disponible.
                            @endif
                        </div>

                        <div>
                            <label for="documents">Documents supplémentaires :</label>
                            @if($sinistre->documents)
                                @foreach($sinistre->documents as $document)
                                    <a href="{{ asset('storage/' . $document) }}" download>{{ $document }}</a>
                                @endforeach
                            @else
                                Aucun document supplémentaire disponible.
                            @endif
                        </div>

                        <a href="{{ route('sinistres.edit', $sinistre->id) }}">Modifier le sinistre</a>

                        <form action="{{ route('sinistres.destroy', $sinistre->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer le sinistre</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('default_image_url', asset('images/default-product.jpg') ,['id' => 'defaultImageUrl']) }}
@endsection
