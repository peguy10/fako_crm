@extends('layouts.app')
@section('title')
    {{__('leads')}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            @include('flash::message')
            <div class="row mb-3 ">
                <div class="col-lg-6"><h1>Liste des leads</h1></div>
                <div class="col-lg-6"><a href="{{ route('leads.create') }}" class="btn border-primary float-end text-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter un lead</a></div>
            </div>
            
            


            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lead Name</th>
                        <th>Phone</th>
                        <th>Lead value</th>
                        <th>Status</th>
                        <!-- Ajoutez d'autres colonnes si nécessaire -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leads as $lead)
                        <tr>
                            <td>{{ $lead->id }}</td>
                            <td>{{ $lead->name }}</td>
                            <td>{{ $lead->phone }}</td>
                            <td>{{ $lead->lead_value }}</td>
                            <td>{{ $lead->status }}</td>
                            <!-- Ajoutez d'autres colonnes si nécessaire -->
                            <td>
                                <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" class="p-3">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('leads.show', $lead->id) }}"><i class="fa fa-eye text-primary" aria-hidden="true"></i></a>
                                    <a href="{{ route('leads.edit', $lead->id) }}"><i class="fa fa-file-pdf text-warning" aria-hidden="true"></i></a>
                                    {{-- <a href="{{ route('leads.edit', $lead->id) }}">Modifier</a> --}}
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
