@extends('layouts.app')
@section('title')
    {{__('Modifier la police : '.$policy->policy_number )}}
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
                        <h1>Edit Policy</h1>
        <form action="{{ route('policies.update', $policy->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="policy_number">Policy Number:</label>
                <input type="text" class="form-control" id="policy_number" name="policy_number" value="{{ $policy->policy_number }}">
            </div>
            <div class="form-group">
                <label for="coverage">Coverage:</label>
                <input type="text" class="form-control" id="coverage" name="coverage" value="{{ $policy->coverage }}">
            </div>
            <div class="form-group">
                <label for="beneficiaries">Beneficiaries:</label>
                <input type="text" class="form-control" id="beneficiaries" name="beneficiaries" value="{{ $policy->beneficiaries }}">
            </div>
            <div class="form-group">
                <label for="amount_insured">Amount Insured:</label>
                <input type="number" step="0.01" class="form-control" id="amount_insured" name="amount_insured" value="{{ $policy->amount_insured }}">
            </div>
            <div class="form-group">
                <label for="premium">Premium:</label>
                <input type="number" step="0.01" class="form-control" id="premium" name="premium" value="{{ $policy->premium }}">
            </div>
            <div class="form-group">
                <label for="start_date">Start Date:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $policy->start_date }}">
            </div>
            <div class="form-group">
                <label for="end_date">End Date:</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $policy->end_date }}">
            </div>
            <div class="form-group">
                <label for="deductible">Deductible:</label>
                <input type="number" step="0.01" class="form-control" id="deductible" name="deductible" value="{{ $policy->deductible }}">
            </div>
            <div class="form-group">
                <label for="special_conditions">Special Conditions:</label>
                <textarea class="form-control" id="special_conditions" name="special_conditions">{{ $policy->special_conditions }}</textarea>
            </div>
            <div class="form-group">
                <label for="client_id">Client:</label>
                <select class="form-control" id="client_id" name="client_id">
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}" {{ $client->id == $policy->client_id ? 'selected' : '' }}>{{ $client->user->first_name }} {{ $client->user->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('default_image_url', asset('images/default-product.jpg') ,['id' => 'defaultImageUrl']) }}
@endsection
