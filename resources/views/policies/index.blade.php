@extends('layouts.app')
@section('title')
    {{__('Police')}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            <div class="col-12">
                @include('layouts.errors')
            </div>
            <div class="row">
                <div class="col-lg-6"><h1>Liste des polices d'assurance</h1></div>
                <div class="col-lg-6">
                    <a href="{{ route('policies.create') }}" class="btn btn-primary mb-3 float-end"><i class="fa fa-plus-circle" aria-hidden="true"></i> Créer une nouvelle police</a>
                </div>
            </div>

            
            <table class="table">
                <thead>
                    <tr>
                        <th>Numéro de police</th>
                        <th>Client</th>
                        <th>Montant assuré</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($policies as $policy)
                        <tr>
                            <td>{{ $policy->policy_number }}</td>
                            <td>{{ $policy->client->user->first_name }}</td>
                            <td>{{ $policy->amount_insured }} XAF</td>
                            <td>{{ $policy->start_date }}</td>
                            <td>{{ $policy->end_date }}</td>
                            <td>{{ $policy->status }}</td>
                            <td>
                                <a href="{{ route('policies.show', $policy) }}" class="p-1"><i class="fa fa-eye text-primary" aria-hidden="true"></i></a>
                                <a href="{{ route('policies.edit', $policy) }}" class="p-1"><i class="fa fa-edit text-success" aria-hidden="true"></i></a>
                                <form action="{{ route('policies.destroy', $policy) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1 border-0" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette police ?')"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ Form::hidden('currency', getCurrencySymbol(),['id' => 'currency']) }}
@endsection
