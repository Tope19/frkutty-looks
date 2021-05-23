@extends('web.layouts.app2')
@section('title')
Gallery
@endsection
@section('content')
<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section bread-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="#">Home</a>
                        <span>Gallery</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="breadcrumb-text">
                        <h3>Gallery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-controls">
                        <ul>
                            <li class="active" data-filter=".all">All gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gallery-filter">
                @forelse($galleriesAll as $gallery)
                <div class="col-lg-6 mix all fashion">
                    <div class="gs-item">
                        <img src="{{ asset('Gallery_images/'.$gallery->image) }}" alt="" />
                    </div>
                </div>
                @empty
                <div class="col-lg-6 mix all fashion">
                    <div class="gs-item">
                        <h1 style="color: red">No Images Found</h1>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

@endsection
