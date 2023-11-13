@extends('layouts.app')
@section('title')
    {{__('NEW Contract')}}
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
                    <a class="btn btn-outline-primary float-end"href="{{ route('contrats.index') }}">{{ __('messages.common.back') }}</a>
                </div>

                <div class="col-12">
                    @include('layouts.errors')
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('contrats.store')}}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="form-card text-start">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
        
                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlSelect1">client</label>
                                                <select class="form-select" id="exampleFormControlSelect1" name="client_id">
                                                    <option>Select client here !!!</option>
                                                    @foreach($clients as $client)
                                                        <option value="{{ $client->id }}">{{ $client->user->first_name }} {{ $client->user->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">subject</label>
                                                <input type="text" class="form-control" name="subject" placeholder="place subject here!!!" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">type</label>
                                                <input type="text" class="form-control" name="type" placeholder="place type here!!!" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">Contract Value</label>
                                                <input type="number" class="form-control" name="value" placeholder="place Contract Value here!!!" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">Start Date</label>
                                                <input type="date" class="form-control" name="start_date" placeholder="select Expected Close Date" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="form-label">End Date</label>
                                                    <input type="date" class="form-control" name="end_date" placeholder="select Expected Close Date" />
                                                    <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}"/>
                                                </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="form-label">Description: </label>
                                                    <textarea rows="3" cols="10" class="form-control" name="description" placeholder="description of leads"></textarea>
                                                </div>
                                        </div>
                                    </div>
                                </div>
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
