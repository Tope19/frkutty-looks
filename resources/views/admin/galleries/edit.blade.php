@extends('admin.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Drixo</a></li>
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active">Form Validation</li>
                    </ol>
                </div>
                <h5 class="page-title">Update Images to Gallery</h5>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Update Gallery</h4>

                            <form class="" enctype="multipart/form-data" method="POST" action="{{ route('updateImage' , $galleryDetails->id) }}">{{csrf_field()}} 
                                <div class="form-group">
                                    <label>Name</label>
                                    <div>
                                        <input type="text" name="name" value="{{ $galleryDetails->name }}" class="form-control" required placeholder="Enter Image Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <div>
                                        <textarea name="description"  required class="form-control">
                                            {{ $galleryDetails->description }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <div>
                                        <input type="file" name="image" class="form-control" value="{{ $galleryDetails->image }}" id="image" />
                                        <input type="hidden" name="current_image" value="{{ $galleryDetails->image }}">
                                        @if (!empty($galleryDetails->image))
                                        <a href="{{ asset('Gallery_images/'.$galleryDetails->image) }}" target="_blank" class="btn btn-primary btn-block">Click to View Image</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Update
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->
@endsection
