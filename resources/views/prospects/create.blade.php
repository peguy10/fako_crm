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
                        <form id="form-wizard1" class="text-center mt-3" method="POST">
                        @csrf
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card text-start">
                                <div class="row">
                                    <div class="col-7">
                                            <h3 class="mb-4">Prospects Information:</h3>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlSelect1">client *</label>
                                                <select class="form-select" id="exampleFormControlSelect1" name="client_id">
                                                    <option selected="" disabled="">Select client here !!!</option>
                                                    @foreach ($clients as $client)
                                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlSelect1">classification</label>
                                                <select class="form-select" id="exampleFormControlSelect1" name="classification">
                                                    <option selected="" disabled="">Select Classification here !!!</option>
                                                    @foreach ($classifications as $classification)
                                                    <option value="{{ $classification->libelle }}">{{ $classification->libelle }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlSelect1">proposed_insurer</label>
                                                <select class="form-select" id="exampleFormControlSelect1" name="proposed_insurer">
                                                    <option selected="" disabled="">Select proposed here !!!</option>
                                                    @foreach ($proposeds as $proposed)
                                                        <option value="{{ $proposed->libelle }}">{{ $proposed->libelle }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlSelect1">location</label>
                                                <input class="form-control" type="text" id="exampleFormControlSelect1" name="location" placeholder="location here !!!">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlSelect1">Prospect Owner *</label>
                                                <input class="form-control" type="text" id="exampleFormControlSelect1" name="prospect_owner" placeholder="prospect owner here !!!">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Lead Generation Date: *</label>
                                                    <input type="date" class="form-control" name="lead_date" placeholder="select Expected Close Date" />
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Due Date: *</label>
                                                    <input type="date" class="form-control" name="due_date" placeholder="select Expected Close Date" />
                                                </div>
                                        </div>
                                </div>
                            </div>
                            <button type="reset" class="btn btn-secondary">reset</button>
                            <button type="submit"  class="btn btn-primary next action-button float-end">submit</button>
                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('default_image_url', asset('images/default-product.jpg') ,['id' => 'defaultImageUrl']) }}
@endsection
