

@extends('dash')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{--route('admin.dash')--}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{--route('issue.index')--}}"> القضايا </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة قضية
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> إضافة قضية </h4>
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
                                    <div class="card-body">
                                        <form class="form" action="{{route('issue.store')}}" method="POST"
                                              enctype="multipart/form-data">
                                              @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات القضية </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم القضية </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم القضية  "
                                                                   name="name">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> نوع القضية </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل نوع القضية  "
                                                                   name="type">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الحكم </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل حكم القضية     "
                                                                   name="judge">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> العميل </label>
                                                            <select name="client_id" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر العميل  ">
                                                                    <option value="0">من فضلك أختر العميل  </option>
                                                                    @foreach($clients as $client)
                                                                        <option value="{{$client->id}}">{{$client->fullname}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            </select>
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الوصف ومعلومات عن القضية </label>
                                                            <textarea  value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="الوصف ومعلومات عن القضية     "
                                                                   name="description"></textarea>
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> المحامي </label>
                                                            <select name="lawer_id" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر المحامي  ">
                                                                    
                                                                    @foreach($lawers as $lawer)
                                                                        <option value="{{$lawer->id}}">{{$lawer->fullname}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            </select>
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> الأتعاب </label>
                                                                <input type="text" value="" id="name"
                                                                    class="form-control"
                                                                    placeholder="ادخل أتعاب القضيه     "
                                                                    name="salary">
                                                                <span class="text-danger"> </span>
                                                            </div>
                                                        
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> المحكمه </label>
                                                            <select name="court_id" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر المحكمه  ">
                                                                    <option value="0">من فضلك أختر المحكمه  </option>
                                                                    @foreach($courts as $court)
                                                                        <option value="{{$court->id}}">{{$court->name}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            </select>
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                

                                                <div class="row">
                                                    
                                                    

                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" name="status"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                   checked/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endSection



