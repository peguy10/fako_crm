@extends('layouts.app')
@section('title')
    {{__('POLICE D\'ASSURANCE')}}
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex flex-wrap align-items-center">
                                    {{-- <div class="profile-img position-relative me-3 mb-3 mb-lg-0">
                                        <img src="{{asset('images/avatars/avtar_1.png')}}" alt="User-Profile" class="theme-color-purple-img img-fluid rounded-pill avatar-100">
                                        <img src="{{asset('images/avatars/avtar_2.png')}}" alt="User-Profile" class="theme-color-blue-img img-fluid rounded-pill avatar-100">
                                        <img src="{{asset('images/avatars/avtar_4.png')}}" alt="User-Profile" class="theme-color-green-img img-fluid rounded-pill avatar-100">
                                        <img src="{{asset('images/avatars/avtar_5.png')}}" alt="User-Profile" class="theme-color-yellow-img img-fluid rounded-pill avatar-100">
                                        <img src="{{asset('images/avatars/avtar_3.png')}}" alt="User-Profile" class="theme-color-pink-img img-fluid rounded-pill avatar-100">
                                    </div> --}}
                                    <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                        <h4 class="me-2 h4">{{ $policies->client->user->full_name}} <a href="{{ route('billing',$policies->id) }}" class="btn btn-primary">blling</a></h4>
                                    </div>
                                </div>
                                <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab" id="profile-pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-bs-toggle="tab" href="#profile-feed" role="tab" aria-selected="false">General details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-activity" role="tab" aria-selected="false">Policy details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-friends" role="tab" aria-selected="false">Additional details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab" aria-selected="false">payment </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="profile-content tab-content">
                        <div id="profile-feed" class="tab-pane fade active show">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row col-sm-12">
                                            <div class="col-sm-6">
                                                <ul class="list-inline p-0 m-0">
                                                    <li>
                                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                                        <h5 class="float-left mb-2 text-primary">CLIENT INFO</h5>
                                                        <span class="h6">NAME :</span> <small class="float-right mt-1">{{ $policies->client->user->full_name}}</small><br>
                                                        <span class="h6">EMAIL :</span> <small class="float-right mt-1">{{ $policies->client->user->email}}</small><br>
                                                        <span class="h6">PHONE :</span> <small class="float-right mt-1">{{ $policies->client->user->contact}}</small><br>
                                                        <span class="h6">ADRESSE:</span> <small class="float-right mt-1">{{ $policies->client->adresse}}</small><br>
                                                        <span class="h6">CITY:</span> <small class="float-right mt-1">{{ $policies->client->city->name}}</small><br>
                                                        <span class="h6">NIU:</span> <small class="float-right mt-1">{{ $policies->client->niu}}</small><br>
                                                        <span class="h6">CNI:</span> <small class="float-right mt-1">{{ $policies->client->cni}}</small><br>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list-inline p-0 m-0">
                                                <li>
                                                    <div class="timeline-dots timeline-dot1 border-success text-success"></div>
                                                    <h5 class="float-left mb-2 text-primary">INSURANCE DETAILS</h5>
                                                    <span class="h6">BUSINESS TYPE :</span> <small class="float-right mt-1">{{ $policies->business_type}}</small><br>
                                                    {{-- <span class="h6">POLICY TYPE :</span> <small class="float-right mt-1">{{ $policies->pol}}</small><br> --}}
                                                    <span class="h6">CLASS :</span> <small class="float-right mt-1">{{ $policies->class}}</small><br>
                                                    <span class="h6">INSURER:</span> <small class="float-right mt-1">{{ $policies->insurer}}</small><br>
                                                    <span class="h6">INSURER BRANCH:</span> <small class="float-right mt-1">{{ $policies->insurer_branch}}</small><br>
                                                    <span class="h6">INSURANCE PLAN:</span> <small class="float-right mt-1">{{ $policies->insurance_plan}}</small><br>
                                                    </li>
                                                </ul>                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="profile-activity" class="tab-pane fade">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row col-sm-12">
                                            <div class="col-sm-12">
                                                <ul class="list-inline p-0 m-0">
                                                    <li>
                                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                                        <h5 class="float-left mb-2 text-primary">CLIENT INFO</h5>
                                                        {{-- <span class="h6">CLIENT REF NUM :</span> <small class="float-right mt-1">{{ $policies->ref_num}}</small><br> --}}
                                                        <span class="h6">POLICY NUMBER :</span> <small class="float-right mt-1">{{ $policies->policy_number}}</small><br>
                                                        <span class="h6">COVER NOTE NUMBER :</span> <small class="float-right mt-1"></small>{{ $policies->note_num}}<br>
                                                        <span class="h6">START DATE :</span> <small class="float-right mt-1">{{ date('d M Y', strtotime($policies->start_date)) }}</small><br>
                                                        <span class="h6">EXPERY DATE:</span> <small class="float-right mt-1">{{ date('d M Y', strtotime($policies->expery_date)) }}</small><br>
                                                        <span class="h6">NEXT PREMIUM DUE DATE:</span> <small class="float-right mt-1">{{ date('d M Y', strtotime($policies->due_date)) }}</small><br>
                                                        <span class="h6">RENEWABLE FLAG:</span> 
                                                        <small class="float-right mt-1"> 
                                                        @if ($policies->renewable_flag == 'Y')
                                                        YES
                                                        @else
                                                        NO
                                                        @endif
                                                        </small><br>
                                                    </li>
                                                </ul>
                                            </div>
                                            {{-- <div class="col-sm-12">
                                                <div class="table-responsive mt-4">
                                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Relations</th>
                                                                <th>Date of Birth</th>
                                                                <th>Gender</th>
                                                                <th>Benefit %</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($nominees as $nominee)
                                                            <tr>
                                                            <td>{{ $nominee->name }}</td>
                                                            <td>{{ $nominee->relation }}</td>
                                                            <td>{{ $nominee->hbd }}</td>
                                                            <td>{{ $nominee->gender }}</td>
                                                            <td>{{ $nominee->benefit }} %</td>
                                                            </tr>   
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>                                
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="profile-friends" class="tab-pane fade">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row col-sm-12">
                                            <div class="col-sm-6">
                                                <ul class="list-inline p-0 m-0">
                                                    <li>                                    
                                                        <div class="timeline-dots timeline-dot1 border-success text-success"></div>
                                                        <h5 class="float-left mb-2 text-primary">INSURANCE DETAILS</h5>
                                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                                        <span class="h6">ISSUE DATE :</span> <small class="float-right mt-1">{{date('d, M Y', strtotime( $policies->issue_date))}}</small><br>
                                                        <span class="h6">USER TO ASSIGN :</span> <small class="float-right mt-1">{{ $policies->user->full_name}}</small><br>
                                                        <span class="h6">PREVIOUS INSURER :</span> <small class="float-right mt-1">{{ $policies->previous_insurer}}</small><br>
                                                        <span class="h6">PREVIOUS SOURCE:</span> <small class="float-right mt-1">{{ $policies->previous_source}}</small><br>
                                                        {{-- <p><span class="h6">DEDUCTIBLE DETAILS :</span>  {{ $policies->deductible_details }}</p> --}}
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list-inline p-0 m-0">
                                                    <li>                                    
                                                        <div class="timeline-dots timeline-dot1 border-success text-success"></div>
                                                        <h5 class="float-left mb-2 text-primary">INSURANCE DETAILS</h5>
                                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                                        <span class="h6">SOURCE :</span> <small class="float-right mt-1">{{ $policies->source}}</small><br>
                                                        <span class="h6">LOCATION :</span> <small class="float-right mt-1">{{ $policies->location}}</small><br>
                                                        <span class="h6">PREVIOUS INSURANCE PLAN :</span> <small class="float-right mt-1">{{ $policies->previous_insurance_plan}}</small><br>
                                                        <span class="h6">COMMUNICATION GENERATION:</span> <small class="float-right mt-1">{{ $policies->co_generation}}</small><br>
                                                        {{-- <p><span class="h6">ADDITIONAL INFO :</span>  {{ $policies->additional_info }}</p> --}}
                                                    </li>
                                                </ul>                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="profile-profile" class="tab-pane fade">
                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row col-sm-12">
                                            <div class="col-sm-6">
                                                <ul class="list-inline p-0 m-0">
                                                    <li>
                                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                                        <h5 class="float-left mb-2 text-primary">POLICY AMOUNT</h5>
                                                        <span class="h6">SUM INSURER :</span> <small class="float-right mt-1">{{ $policies->sum_insurer}}</small><br>
                                                        <span class="h6">CLAIM BONUS :</span> <small class="float-right mt-1">{{ $policies->claim_bonus}}</small><br>
                                                        <span class="h6">OTHER PREMIUM :</span> <small class="float-right mt-1">{{ $policies->other_premium}}</small><br>
                                                        <span class="h6">GST:</span> <small class="float-right mt-1">{{ $policies->gst}}</small><br>
                                                        <span class="h6">DISCOUNT :</span> <small class="float-right mt-1">{{ $policies->discount}}</small><br>
                                                        <span class="h6">COMMUTION BASE PREMIUM :</span> <small class="float-right mt-1">{{ $policies->base_premium}}</small><br>
                                                        <span class="h6">TOTAL PREMIUM :</span> <small class="float-right mt-1">{{ $policies->total_premium}}</small><br>
                                                        <span class="h6">PREMIUM WITH GST:</span> <small class="float-right mt-1">{{ $policies->premium_gst}}</small><br>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list-inline p-0 m-0">
                                                <li>
                                                    <div class="timeline-dots timeline-dot1 border-success text-success"></div>
                                                    <h5 class="float-left mb-2 text-primary">PAYMENT DETAILS</h5>
                                                    <span class="h6">PAYMENT TYPE :</span> <small class="float-right mt-1">{{ $policies->payment_type}}</small><br>
                                                    <span class="h6">BANK NAME :</span> <small class="float-right mt-1">{{ $policies->bank_name}}</small><br>
                                                    <span class="h6">PAYMENT AMOUNT :</span> <small class="float-right mt-1">{{ $policies->amount}}</small><br>
                                                    <span class="h6">PAYMENT DATE:</span> <small class="float-right mt-1">{{ date('d M Y', strtotime($policies->payment_date))}}</small><br>
                                                    <span class="h6">COLLECTED DATE :</span> <small class="float-right mt-1">{{ date('d M Y', strtotime($policies->collected_date))}}</small><br>
                                                    </li>
                                                </ul>                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('default_image_url', asset('images/default-product.jpg') ,['id' => 'defaultImageUrl']) }}
@endsection
