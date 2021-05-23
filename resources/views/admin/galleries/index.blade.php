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
                <h5 class="page-title">Add Images to Gallery</h5>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            @if (Session::has('flash_message_error'))
                            <div class="alert alert-error alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{!! session('flash_message_error') !!}</strong>
                            </div>
                        @endif
                        @if (Session::has('flash_message_success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
                        @endif
                            <h4 class="mt-0 header-title">Create Gallery</h4>

                            <form class="" enctype="multipart/form-data" method="POST" action="{{ route('submitImage') }}">{{csrf_field()}}
                                <div class="form-group">
                                    <label>Name</label>
                                    <div>
                                        <input type="text" name="name" class="form-control" required placeholder="Enter Image Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <div>
                                        <textarea name="description" placeholder="Enter Image Description"  required class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <div>
                                       <input type="file" name="image" required class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Submit
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

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">View Created Galleries</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{$gallery->id}}</td>
                                <td>{{$gallery->name}}</td>
                                <td>{{$gallery->description}}</td>
                                <td>
                                    @if (!empty($gallery->image))
                                      <a href="{{ asset('Gallery_images/'.$gallery->image) }}" target="_blank" class="btn btn-primary btn-block">Click to View Image</a>
                                      {{--  <img src="{{ asset('Gallery_images/'.$gallery->image) }}" style="width:60px;">  --}}
                                    @endif
                                  </td>
                                  <td>{{ date('F j, Y g:i a',strtotime($gallery->created_at)) }}</td>
                                <div class="fr"><td class="center"><a href="{{ route('editImage', $gallery->id) }}" class="btn btn-primary btn-sm"><i class="ti-pencil"></i></a>
                                    <a  href="{{ route('deleteImage', $gallery->id )}}" class="btn btn-primary btn-sm"><i class="ti-trash"></i></a></td>
                                </div>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->
@endsection
