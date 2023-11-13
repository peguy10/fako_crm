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
                        
                        <form class="form-horizontal" method="POST" action="{{ route('policies.update',$policy->id) }}">
                            @csrf
                            <input type="hidden" name="client_id" value="{{ $policy->client->id }}">
                            <div class="form-group mb-3 mt-4"><span class="h5">General Detail</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">business Type</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="exampleFormControlSelect1" name="business_type" value="{{ $policy->business_type }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Class</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="class" value="{{ $policy->class }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Policy type</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="exampleFormControlSelect1" name="policy_type" value="{{ $policy->policy_type }}">
                                    </div>
                                </div>
                                <div class="form-group mb-3 mt-4"><span class="h5">Insurer Detail</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">insurer</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="exampleFormControlSelect1" name="insurer" value="{{ $policy->insurer }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Insurer Branch</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="insurer_branch" value="{{ $policy->insurer_branch }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Insurance plan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="insurance_plan" value="{{ $policy->insurer_plan }}" >
                                    </div>
                                </div>



                                <div class="form-group mb-3 mt-4"><span class="h5">car Detail</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">immatriculation</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="immatriculation" value="{{ $policy->immatriculation }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">mark</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="mark" value="{{ $policy->mark }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Power</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="power" value="{{ $policy->power }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">genre</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="genre" value="{{ $policy->genre }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">nb_place</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="nb_place" value="{{ $policy->nb_place }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">cat</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="cat" value="{{ $policy->cat }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">zone</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="zone" value="{{ $policy->zone }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">serie</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="serie" value="{{ $policy->serie }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">date premier mc</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="date_mc" value="{{ $policy->date_mc }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">val_neuve</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="val_neuve" value="{{ $policy->val_neuve }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">val_venale</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="val_venale" value="{{ $policy->val_venale }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">val_acc</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="val_acc" value="{{ $policy->val_acc }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">attestation</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="attestation" value="{{ $policy->attestation }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">carte_rose</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="carte_rose" value="{{ $policy->carte_rose }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">ptac</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="ptac" value="{{ $policy->ptac }}">
                                    </div>

                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">inscription_number</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="inscription_number" value="{{ $policy->inscription_number }}">
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
                                        <select class="form-control" id="exampleFormControlSelect1" name="renewable_flag">
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
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="start_date" value="{{ $policy->start_date }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">expery_date</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="expery_date" value="{{ $policy->expery_date }}">
                                    </div>
                                </div>
                                <div class="form-group mb-3 mt-4"><span class="h5">policy Amounts</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">sum_insurer</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="sum_insurer" value="{{ $policy->sum_insurer }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">discount</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="discount" value="{{ $policy->discount }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">claim_bonus</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="claim_bonus" value="{{ $policy->claim_bonus }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Commission Base Premium</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="base_premium" value="{{ $policy->base_premium }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Other Premium</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="other_premium" value="{{ $policy->other_premium }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Total Premium</label>
                                    <div class="col-sm-4 mb-2">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="total_premium" value="{{ $policy->total_premium }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">GST</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="gst" value="{{ $policy->gst }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Premium with GST</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="exampleFormControlSelect1" name="premium_gst" value="{{ $policy->premium_gst }}">
                                    </div>
                                </div>
                                <div class="form-group mb-3 mt-4"><span class="h5">Policy Additional Details</span></div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">issue_date</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="exampleFormControlSelect1" name="issue_date" value="{{ $policy->issue_date }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Source</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="source" value="{{ $policy->source }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">user</label>
                                    <div class="col-sm-4 mb-2">
                                        <select class="form-select" id="exampleFormControlSelect1" name="user_id" required>
                                            <option selected="" disabled="">Select here !!!</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->username }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Location</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="location" value="{{$policy->location}}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">previous_insurer</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="previous_insurer" value="{{ $policy->previous_insurer }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">previous_insurance_plan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="previous_insurance_plan" value="{{ $policy->previous_insurance_plan }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Previous Source</label>
                                    <div class="col-sm-4 mb-2">
                                        <input class="form-control" id="exampleFormControlSelect1" name="previous_source" value="{{ $policy->previous_source }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Communicatio generation</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="exampleFormControlSelect1" name="co_generation" value="{{ $policy->co_generation }}">
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">deductible_details</label>
                                    <div class="col-sm-4 mb-2">
                                        <textarea cols="3" class="form-control" id="exampleFormControlSelect1" name="deductible_details">{{ $policy->deductible_details }}</textarea>
                                    </div>
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">additional_info</label>
                                    <div class="col-sm-4">
                                        <textarea cols="3" class="form-control" id="exampleFormControlSelect1" name="additional_info">{{ $policy->additional_info }}</textarea>
                                    </div>

                                </div>
                                <div class="form-group mb-3 mt-4"><span class="h5">Payment Details</span></div>
                                <div class="row">
                                    <label class="control-label col-sm-2 mb-0" for="exampleFormControlSelect1">Payement type</label>
                                    <div class="col-sm-4">
                                        <input class="form-contol" id="exampleFormControlSelect1" name="payment_type" value="{{ $policy->payment_type }}">
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
