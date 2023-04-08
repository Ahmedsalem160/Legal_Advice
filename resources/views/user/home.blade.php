@extends('user.main')
@section('content')


<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> مرحبا بك!! </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع المحاميين بالموقع </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                {{--@include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')--}}

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        
                                        <div class="justify-content-center d-flex">
                                            @foreach($lawers as $lawer)
                                            <div class="card" style="width:400px">
                                                <img class="card-img-top" src="{{URL::asset('assets/file-store').'/'.$lawer->photo}}" alt="Card image">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{$lawer->fullname}}</h4>
                                                    <p class="card-text">
                                                        
                                                        {{$lawer->rank}}
                                                    </p>
                                                    <a href="{{route('show.lawer', $lawer->id)}}" class="btn btn-primary">See Profile</a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection