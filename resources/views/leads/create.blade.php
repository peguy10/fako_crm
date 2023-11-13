@extends('layouts.app')
@section('title')
    {{__('ADD LEAD')}}
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
                    <a class="btn btn-outline-primary float-end"href="{{ route('leads.index') }}">{{ __('messages.common.back') }}</a>
                </div>

                <div class="col-12">
                    @include('layouts.errors')
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('leads.store')}}" class="text-center mt-3" method="POST">
                            @csrf
                            <fieldset>
                                <div class="form-card text-start">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
        
                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlSelect1">user</label>
                                                <select class="form-select" id="exampleFormControlSelect1" name="user_id">
                                                    <option selected="" disabled="">Select user here !!!</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->first_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
        
                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlSelect1">Source</label>
                                                <select class="form-select" id="exampleFormControlSelect1" name="source">
                                                    <option selected="" disabled="">Select source here !!!</option>
                                                    <option value="facebook">facebook</option>
                                                    <option value="google">google</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
        
                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlSelect1">status</label>
                                                <select class="form-select" id="exampleFormControlSelect1" name="status">
                                                    <option selected="" disabled="">Select status here !!!</option>
                                                    <option value="cancelled">cancelled</option>
                                                    <option value="success">success</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="name here!!!" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="form-label">Lead Generation Date</label>
                                                    <input type="date" class="form-control" name="lead_date" placeholder="select Expected Close Date" />
                                                </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">Lead Value</label>
                                                <input type="number" class="form-control" name="lead_value" placeholder="place Lead Value here!!!" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="form-label">Due Date</label>
                                                    <input type="date" class="form-control" name="due_date" placeholder="select Expected Close Date" />
                                                    <input type="hidden" class="form-control" name="audit_id" value="{{Auth::user()->id}}" readonly/>
                                                </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">phone</label>
                                                <input type="number" class="form-control" name="phone" placeholder="phone number here!!!" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">adresse</label>
                                                <input type="text" class="form-control" name="adresse" placeholder="place adress here!!!" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">city</label>
                                                <input type="text" class="form-control" name="city" placeholder="place city here!!!" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="form-label">lead description: </label>
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
