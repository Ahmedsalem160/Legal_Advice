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
                                <li class="breadcrumb-item"><a href="{{--route('lawer.index')--}}"> المحاميين </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل محامي
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
                                    <h4 class="card-title" id="basic-layout-form"> تعديل محامي </h4>
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
                                        <form class="form" action="{{route('lawer.update',$lawer->id)}}" method="post"
                                              enctype="multipart/form-data">
                                              {{method_field('put')}}
                                              @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات المحامي </h4>
                                                <input type="hidden" name="lawer_id" value="{{$lawer->id}}"/>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم المحامي </label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   value="{{ $lawer->username }}"
                                                                   name="username">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم المحامي بالكامل</label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   value="{{$lawer->fullname}}"
                                                                   name="fullname">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الرقم القومي </label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   value="{{$lawer->nation_id}}"
                                                                   name="nation_id">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم النقابه </label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   value="{{$lawer->Syndicate_id}}"
                                                                   name="Syndicate_id">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان</label>
                                                            <input   id="name"
                                                                   class="form-control"
                                                                   value="{{$lawer->address}}"
                                                                   name="address"/>
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> المرتب الشهري </label>
                                                                <input type="text"  id="name"
                                                                    class="form-control"
                                                                    value="{{$lawer->salary}}"
                                                                    name="salary">
                                                                <span class="text-danger"> </span>
                                                            </div>
                                                        
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> الرتبه </label>
                                                            <select name="rank" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر اتجاه اللغة ">
                                                                    <option value="جدول عام"@if($lawer->rank  === "جدول عام" ){{'selected'}}@endif> جدول عام</option>
                                                                    <option value="أبتدائي" @if($lawer->rank  === "أبتدائي" ){{'selected'}}@endif> أبتدائي</option>
                                                                    <option value="استئناف" @if($lawer->rank  === "استئناف" ){{'selected'}}@endif> استئناف</option>
                                                                    <option value="نقض"     @if($lawer->rank  === "نقض" ){{'selected'}}@endif>      نقض</option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">رقم المحمول </label>
                                                                <input type="text"  id="name"
                                                                    class="form-control"
                                                                    value="{{$lawer->phone}}"
                                                                    name="phone">
                                                                <span class="text-danger"> </span>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  الصوره   </label>
                                                            <input type="file"  id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل  الصوره الخاص به  "
                                                                   name="photo">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  سنه التخرج  </label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   value="{{$lawer->grad_year}}"
                                                                   name="grad_year">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الايميل الخاص به  </label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   value="{{$lawer->email}}"
                                                                   name="email">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> كلمه السر  </label>
                                                            <input type="password" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل  كلمه السر  "
                                                                   name="password">
                                                            <span class="text-danger"> </span>
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
                                                    <i class="la la-check-square-o"></i> تعديل
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