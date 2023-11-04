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
                        <h1>Policy Details</h1>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Policy Number</td>
                                    <td>{{ $policy->policy_number }}</td>
                                </tr>
                                <tr>
                                    <td>Coverage</td>
                                    <td>{{ $policy->coverage }}</td>
                                </tr>
                                <tr>
                                    <td>Beneficiaries</td>
                                    <td>{{ $policy->beneficiaries }}</td>
                                </tr>
                                <tr>
                                    <td>Amount Insured</td>
                                    <td>{{ $policy->amount_insured }}</td>
                                </tr>
                                <tr>
                                    <td>Premium</td>
                                    <td>{{ $policy->premium }}</td>
                                </tr>
                                <tr>
                                    <td>Start Date</td>
                                    <td>{{ $policy->start_date }}</td>
                                </tr>
                                <tr>
                                    <td>End Date</td>
                                    <td>{{ $policy->end_date }}</td>
                                </tr>
                                <tr>
                                    <td>Deductible</td>
                                    <td>{{ $policy->deductible }}</td>
                                </tr>
                                <tr>
                                    <td>Special Conditions</td>
                                    <td>{{ $policy->special_conditions ?? 'None' }}</td>
                                </tr>
                                <tr>
                                    <td>Client Name</td>
                                    <td>{{ $policy->client->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('default_image_url', asset('images/default-product.jpg') ,['id' => 'defaultImageUrl']) }}
@endsection
