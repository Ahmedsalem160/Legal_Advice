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
                            <li class="breadcrumb-item active"> {{$issue->name}}قضية
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session('success')}}
                </div>
            @endif
          <!-- Basic form layout section start -->
          <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> {{$issue->name}} قضية </h4>
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

                                    @if($issue->files->count()>0)
                                        <div class="row">
                                            @foreach($issue->files as $file)
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <img src="{{asset('storage/assets/file-store/').'/'.$file->name}}"
                                                             alt="{{$file->name}}" class="card-img-top mb-3"
                                                             height="150px" width="150px"/>
                                                        <div class="card-body"></div>
                                                        <div class="card-footer">
                                                            <form action="{{route('file.destroy', ['file'=>$file])}}" method="POST">
                                                                @csrf
                                                                @method('post')
                                                                <input type="submit" class="btn btn-danger" value="Delete"/>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            @endforeach
                                        </div>
                                    @else
                                        <p>there is no images here</p>
                                    @endif
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <form action="{{route('file.store',$issue)}}"
                                                class="dropzone"
                                                id="my-dropzone">
                                                @csrf
                                            </form>
                                        </div>
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

@section('script')
    <script>
        //my-awesome-dropzone
        Dropzone.options.myDropzone = {
            // Configuration options go here
            //paramName: "file", // The name that will be used to transfer the file
            acceptedFiles: 'image/*',
            maxFilesize: 5, // MB
            init:function{
                this.on('success', function(){
                    if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                        console.log("finished")
                        location.reload()
                    }
                })
            }
        }
    </script>
@stop