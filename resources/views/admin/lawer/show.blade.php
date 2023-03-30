@extends('dash')

@section('content')

<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> المحاميين </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> المحاميين
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
                                        <table
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th> أسم المحامي</th>
                                                <th>الاسم بالكامل</th>
                                                <th>الايميل</th>
                                                <th>الرقم القومي</th>
                                                <th>رقم النقابه</th>
                                                <th> الرتبه</th>
                                                <th> العنوان</th>
                                                <th> الراتب</th>
                                                <th> سنه التخرج</th>
                                                <th> التليفون</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($lawers as $lawer)
                                                    <tr>
                                                        <td>{{$lawer->username}}</td>
                                                        <td>{{$lawer->fullname}}</td>
                                                        <td>{{$lawer->email}}</td>
                                                        <td>{{$lawer->nation_id}}</td>
                                                        <td>{{$lawer->Syndicate_id}}</td>
                                                        <td>{{$lawer->rank}}</td>
                                                        <td>{{$lawer->address}}</td>
                                                        <td>{{$lawer->salary}}</td>
                                                        <td>{{$lawer->grad_year}}</td>
                                                        <td>{{$lawer->phone}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('lawer.edit', $lawer->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                                                                
                                                                <form action="{{route('lawer.destroy', $lawer->id)}}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="_method" value="delete">
                                                                    <button type="submit"
                                                                        value=""
                                                                        onclick=""
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                                        data-toggle="modal"
                                                                        data-target="#rotateInUpRight">
                                                                    حذف
                                                                    </button>
                                                                </form>
                                                               
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
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

@stop