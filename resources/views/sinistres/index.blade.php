@extends('layouts.app')
@section('title')
    {{__('Sinistres')}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            @include('flash::message')
            <div class="row mb-3 ">
                <div class="col-lg-6"><h1>Liste des sinistres</h1></div>
                <div class="col-lg-6"><a href="{{ route('sinistres.create') }}" class="btn border-primary float-end text-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter un sinistre</a></div>
            </div>
            
            


            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sinistre Num</th>
                        <th>Immatriculation</th>
                        <th>Marque</th>
                        <!-- Ajoutez d'autres colonnes si nécessaire -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sinistres as $sinistre)
                        <tr>
                            <td>{{ $sinistre->id }}</td>
                            <td>{{ $sinistre->sinistre_num }}</td>
                            <td>{{ $sinistre->immatriculation }}</td>
                            <td>{{ $sinistre->mark }}</td>
                            <!-- Ajoutez d'autres colonnes si nécessaire -->
                            <td>
                                <form action="{{ route('sinistres.destroy', $sinistre->id) }}" method="POST" class="p-3">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('sinistres.show', $sinistre->id) }}"><i class="fa fa-eye text-primary" aria-hidden="true"></i></a>
                                    <a href="{{ route('sinistres.edit', $sinistre->id) }}"><i class="fa fa-file-pdf text-warning" aria-hidden="true"></i></a>
                                    {{-- <a href="{{ route('sinistres.edit', $sinistre->id) }}">Modifier</a> --}}
                                    <button type="submit" class="border-0 bg-transparent"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button>
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
