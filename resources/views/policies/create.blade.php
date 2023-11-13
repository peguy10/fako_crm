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
                        {{-- <form method="POST" action="{{ route('policies.store') }}">
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
                        </form> --}}

                        <form class="form-horizontal" method="POST" action="{{ route('policies.store') }}">
                            @csrf
                            {{-- <input type="hidden" name="client_id" value="{{ $client->id }}"> --}}
                            <div class="form-group mb-3 mt-4"><span class="h5">General Detail</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">client</label>
                                    <div class="col-sm-4 mb-2">
                                        <select class="form-select" id="exampleFormControlSelect1" name="client_id">
                                            <option selected="" disabled="">Select here !!!</option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}">{{ $client->user->first_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">business Type</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="exampleFormControlSelect1" name="business_type">

                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Class</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="class">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Policy type</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="exampleFormControlSelect1" name="policy_type">
                                    </div>
                                </div>
                                <div class="form-group mb-3 mt-4"><span class="h5">Insurer Detail</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">insurer</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="exampleFormControlSelect1" name="insurer">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Insurer Branch</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="insurer_branch">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Insurance plan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="insurance_plan">
                                    </div>
                                </div>



                                <div class="form-group mb-3 mt-4"><span class="h5">car Detail</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">immatriculation</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="immatriculation">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">mark</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="mark">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Power</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="power">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">genre</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="genre">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">nb_place</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="nb_place">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">cat</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="cat">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">zone</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="zone">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">serie</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="serie">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">date premier mc</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="date_mc">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">val_neuve</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="val_neuve">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">val_venale</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="val_venale">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">val_acc</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="val_acc">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">attestation</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="attestation">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">carte_rose</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="carte_rose">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">ptac</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="ptac">
                                    </div>

                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">inscription_number</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="inscription_number">
                                    </div>
                                </div>



                                <div class="form-group mb-3 mt-4"><span class="h5">policy Detail</span></div>
                                <div class="form-group row">
                                <!--  <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">client Ref num</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="client_num_ref">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">cover note number</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="note_num">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Policy Number</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="policy_number">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Renewable Flag</label>
                                    <div class="col-sm-4">
                                        <select class="form-select" id="exampleFormControlSelect1" name="renewable_flag">
                                            <option value="Y">Y</option>
                                            <option value="N">N</option>
                                        </select>
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Next Premium Due Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="date_due">
                                    </div>
                                    -->
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">start_date</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="start_date">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">expery_date</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="expery_date">
                                    </div>
                                </div>
                                <div class="form-group mb-3 mt-4"><span class="h5">policy Amounts</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">sum_insurer</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="sum_insurer">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">discount</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="discount">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">claim_bonus</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="claim_bonus">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Commission Base Premium</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="base_premium">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Other Premium</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="other_premium">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Total Premium</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="total_premium">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">GST</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="gst">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Premium with GST</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="premium_gst">
                                    </div>
                                </div>
                                {{-- <div class="form-group mb-3 mt-4"><span class="h5">Nominee Details</span></div>
                                <div class="form-group row">
                                    <div class="table-responsive mt-4">
                                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Relations</th>
                                                    <th>Date of Birth</th>
                                                    <th>Gender</th>
                                                    <th>Benefit %</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($nominees as $nominee)
                                                <tr>
                                                    <td>{{ $nominee->name }}</td>
                                                    <td>{{ $nominee->relation }}</td>
                                                    <td>{{ $nominee->hbd }}</td>
                                                    <td>{{ $nominee->gender }}</td>
                                                    <td>{{ $nominee->benefit }}</td>
                                                    <td><i class="fas fa-trash-alt    "></i></td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="6" align="right"> <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">+</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> --}}
                                <div class="form-group mb-3 mt-4"><span class="h5">Policy Additional Details</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">issue_date</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="issue_date">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Source</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="source">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">user</label>
                                    <div class="col-sm-4 mb-2">
                                        <select class="form-select" id="exampleFormControlSelect1" name="user_id">
                                            <option selected="" disabled="">Select here !!!</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->first_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Location</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="location">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">previous_insurer</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="previous_insurer">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">previous_insurance_plan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="previous_insurance_plan">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Previous Source</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="previous_source">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Communicatio generation</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="exampleFormControlSelect1" name="co_generation">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">deductible_details</label>
                                    <div class="col-sm-4 mb-2">
                                        <textarea cols="3" class="form-control" id="exampleFormControlSelect1" name="deductible_details"></textarea>
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">additional_info</label>
                                    <div class="col-sm-4">
                                        <textarea cols="3" class="form-control" id="exampleFormControlSelect1" name="additional_info"></textarea>
                                    </div>

                                </div>
                                <div class="form-group mb-3 mt-4"><span class="h5">Payment Details</span></div>
                                <div class="row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Payement type</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="payment_type"> 
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">client Ref num</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="ref_num">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">bank_name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="bank_name">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Payment date</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="payment_date">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Payment Amount</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="amount">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">collected_date</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="collected_date">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">remarks</label>
                                    <div class="col-sm-4">
                                        <textarea cols="3" class="form-control" id="exampleFormControlSelect1" name="remarks"></textarea>
                                    </div>
                                </div>
                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('default_image_url', asset('images/default-product.jpg') ,['id' => 'defaultImageUrl']) }}
@endsection
