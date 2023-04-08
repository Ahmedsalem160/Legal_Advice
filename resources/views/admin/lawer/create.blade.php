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
                                <li class="breadcrumb-item active">إضافة محامي
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة محامي </h4>
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
                                        <form class="form" action="{{route('lawer.store')}}" method="POST"
                                              enctype="multipart/form-data">
                                              @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات المحامي </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم المحامي </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم المحامي  "
                                                                   name="username">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم المحامي بالكامل</label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder=" اسم المحامي بالكامل"
                                                                   name="fullname">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الرقم القومي </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل  الرقم القومي  "
                                                                   name="nation_id">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم النقابه </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل  الرقم القومي  "
                                                                   name="Syndicate_id">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان</label>
                                                            <input  value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="الوصف ومعلومات عن القضية     "
                                                                   name="address"/>
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> المرتب الشهري </label>
                                                                <input type="text" value="" id="name"
                                                                    class="form-control"
                                                                    placeholder="ادخل المرتب الشهري     "
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
                                                                <optgroup label="من فضلك أختر الرتبه  ">
                                                                    <option value="جدول عام">جدول عام</option>
                                                                    <option value="أبتدائي">أبتدائي</option>
                                                                    <option value="استئناف">استئناف</option>
                                                                    <option value="نقض">نقض</option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">رقم المحمول </label>
                                                                <input type="text" value="" id="name"
                                                                    class="form-control"
                                                                    placeholder="ادخل رقم رقم     "
                                                                    name="phone">
                                                                <span class="text-danger"> </span>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  الصوره   </label>
                                                            <input type="file" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل  الصوره الخاص به  "
                                                                   name="photo">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  سنه التخرج  </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل  سنه التخرج  "
                                                                   name="grad_year">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الايميل الخاص به  </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل  الايميل الخاص به  "
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