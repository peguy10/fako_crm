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
                    <a class="btn btn-outline-primary float-end"href="{{ route('products.index') }}">{{ __('messages.common.back') }}</a>
                </div>

                <div class="col-12">
                    @include('layouts.errors')
                </div>
                <div class="card">
                    <div class="card-body">
                        <h1>Créer une nouvelle police d'assurance</h1>
                        <form method="POST" action="{{ route('policies.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Client') }}</label>

                                <div class="col-md-6">
                                    <select name="client_id" id="client_id">
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->user->first_name }} {{ $client->user->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="policy_number" class="col-md-4 col-form-label text-md-right">{{ __('Policy Number') }}</label>

                                <div class="col-md-6">
                                    <input id="policy_number" type="text" class="form-control @error('policy_number') is-invalid @enderror" name="policy_number" value="{{ old('policy_number') }}" required autocomplete="policy_number" autofocus>

                                    @error('policy_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="coverage" class="col-md-4 col-form-label text-md-right">{{ __('Coverage') }}</label>

                                <div class="col-md-6">
                                    <input id="coverage" type="text" class="form-control @error('coverage') is-invalid @enderror" name="coverage" value="{{ old('coverage') }}" required autocomplete="coverage">

                                    @error('coverage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="beneficiaries" class="col-md-4 col-form-label text-md-right">{{ __('Beneficiaries') }}</label>

                                <div class="col-md-6">
                                    <input id="beneficiaries" type="text" class="form-control @error('beneficiaries') is-invalid @enderror" name="beneficiaries" value="{{ old('beneficiaries') }}" required autocomplete="beneficiaries">

                                    @error('beneficiaries')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="amount_insured" class="col-md-4 col-form-label text-md-right">{{ __('Amount Insured') }}</label>

                                <div class="col-md-6">
                                    <input id="amount_insured" type="number" step="0.01" class="form-control @error('amount_insured') is-invalid @enderror" name="amount_insured" value="{{ old('amount_insured') }}" required autocomplete="amount_insured">

                                    @error('amount_insured')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="premium" class="col-md-4 col-form-label text-md-right">{{ __('Premium') }}</label>

                                <div class="col-md-6">
                                    <input id="premium" type="number" step="0.01" class="form-control @error('premium') is-invalid @enderror" name="premium" value="{{ old('premium') }}" required autocomplete="premium">

                                    @error('premium')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

                                <div class="col-md-6">
                                    <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" required autocomplete="start_date">

                                    @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>

                                <div class="col-md-6">
                                    <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}" required autocomplete="end_date">

                                    @error('end_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="deductible" class="col-md-4 col-form-label text-md-right">{{ __('Deductible') }}</label>

                                <div class="col-md-6">
                                    <input id="deductible" type="number" step="0.01" class="form-control @error('deductible') is-invalid @enderror" name="deductible" value="{{ old('deductible') }}" autocomplete="deductible">

                                    @error('deductible')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="special_conditions" class="col-md-4 col-form-label text-md-right">{{ __('Special Conditions') }}</label>

                                <div class="col-md-6">
                                    <textarea id="special_conditions" class="form-control @error('special_conditions') is-invalid @enderror" name="special_conditions" required autocomplete="special_conditions">{{ old('special_conditions') }}</textarea>

                                    @error('special_conditions')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Add more form fields here if needed -->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('default_image_url', asset('images/default-product.jpg') ,['id' => 'defaultImageUrl']) }}
@endsection
