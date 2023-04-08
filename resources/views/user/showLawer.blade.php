@extends('user.main')
@section('content')


<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> يرحب بك  {{$lawer->username}}</h3>
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
                                    <h4 class="card-title">    ملف {{$lawer->username}} المحامي </h4>
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

                                

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <div class="row">
                                            <img class="card-img col-mb-6" style="width:50%" src="{{URL::asset('assets/file-store').'/'.$lawer->photo}}" alt="{{$lawer->photo}}" />
                                            <div class="col-mb-6" style="display:inline; margin-right:20px;">
                                                <h1>{{$lawer->fullname}} ({{$lawer->rank}})</h1>
                                                <ul>
                                                    <li>عمل علي  ( {{$lawer->issues->count()}} ) قضايا</li>
                                                    <li>اعطي عدد  ( {{$lawer->issues->count()}} ) من الاستشارات</li>
                                                </ul>
                                                
                                                <a class="btn btn-primary" href="{{route('lawer.chat', $lawer->id)}}">   مراسله {{$lawer->username}} المحامي </a>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="justify-content-center d-flex">
                                            
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