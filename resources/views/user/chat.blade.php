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
                                    <h3 class="card-title">    محادثة مع {{$lawer->username}} المحامي </h3>
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
                                        <h1> الدردشه</h1>
                                        @if(!empty($messages))
                                            <div class="chat"><!-- الوعاء -->
                                                <div class="message">
                                                    <ul style="style-decoration:none">
                                                        @foreach($messages as $message)
                                                            {{$message->user->name}}:<li ><span class="text">{{$message->text}}</span></li>
                                                        @endforeach
                                                    </ul>
                                                        
                                                </div>
                                            </div>
                                        @else
                                            <div class="alert alert-success">أبدأ المحادثه الأن</div>
                                        @endif
                                        <form action="{{route('advice.store',$lawer->id)}}" class="form" method="post">
                                            @csrf
                                            <textarea class="form-control" name="text" id="" cols="60" rows="10"></textarea>
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i>   ارسال
                                                </button>
                                            </div>
                                        </form>
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