@extends('layouts.app')
@section('title')
    {{__('contrats')}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            @include('flash::message')
            <div class="row mb-3 ">
                <div class="col-lg-6"><h1>Liste des contrats</h1></div>
                <div class="col-lg-6"><a href="{{ route('contrats.create') }}" class="btn border-primary float-end text-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter un contrat</a></div>
            </div>
            
            


            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>subject</th>
                        <th>contrat value</th>
                        <th>contrat type</th>
                        <!-- Ajoutez d'autres colonnes si nécessaire -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contrats as $contrat)
                        <tr>
                            <td>{{ $contrat->id }}</td>
                            <td>{{ $contrat->client->user->first_name }}</td>
                            <td>{{ $contrat->subject }}</td>
                            <td>{{ $contrat->value }}</td>
                            <td>{{ $contrat->type }}</td>
                            <!-- Ajoutez d'autres colonnes si nécessaire -->
                            <td>
                                <form action="{{ route('contrats.destroy', $contrat->id) }}" method="POST" class="p-3">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('contrats.show', $contrat->id) }}"><i class="fa fa-eye text-primary" aria-hidden="true"></i></a>
                                    <a href="{{ route('contrats.edit', $contrat->id) }}"><i class="fa fa-file-pdf text-warning" aria-hidden="true"></i></a>
                                    {{-- <a href="{{ route('contrats.edit', $contrat->id) }}">Modifier</a> --}}
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
