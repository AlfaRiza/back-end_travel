@extends('layouts.checkout')

@section('title', 'Detail Travel')
    

@section('content')
<main>
    <section class="section-details-header">

    </section>
    <!-- detail konten -->
    <section class="section-details-content">
        <div class="container">
            <!-- row 1 -->
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Paket Travel</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Detail
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- row 1 -->
            <!-- row 2 -->
            <div class="row">
                <div class="col-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->location }}</p>
                        <!-- Galery -->
                        <div class="gallery">
                            @if ($item->galleries->count())
                                <div class="xzoom-container">
                                    <img src="{{ Storage::url($item->galleries->first()->image) }}" alt="" class="xzoom" id="xzoom-default"
                                        xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                                </div>
                                <div class="xzoom-thumbs">
                                    @foreach ($item->galleries as $gallery)
                                    <a href="{{ Storage::url($gallery->image) }}">
                                        <img src="{{ Storage::url($gallery->image) }}" alt="" class="xzoom-gallery"
                                            width="120px" xpreview="{{ Storage::url($gallery->image) }}">
                                    </a>
                                    @endforeach
                                    
                                </div>
                            @endif
                        </div>
                        <!-- Akhir Galery -->
                        <h2>Tentang wisata</h2>
                        <p>
                            {!! $item->about !!}
                        </p>
                        <div class="features">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <img src="{{ url('frontend/images/ic_event.png') }}" class="features-image" alt="">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>{{ $item->featured_event }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ url('frontend/images/ic_event.png') }}" class="features-image" alt="">
                                    <div class="description">
                                        <h3>Bahasa</h3>
                                        <p>{{ $item->language }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ url('frontend/images/ic_event.png') }}" class="features-image" alt="">
                                    <div class="description">
                                        <h3>Food</h3>
                                        <p>{{ $item->foods }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Detail Right -->
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <!-- Photo trip member -->
                        <div class="d-inline-flex">
                            <div class="members my-2">
                                <div class="members my-2">
                                    <img src="frontend/images/avatar-1.png" class="member-image mr-1" alt="">
                                </div>
                            </div>
                            <div class="members my-2">
                                <div class="members my-2">
                                    <img src="frontend/images/avatar-2.png" class="member-image mr-1 rounded-circle"
                                        alt="">
                                </div>
                            </div>
                            <div class="members my-2">
                                <div class="members my-2">
                                    <img src="frontend/images/avatar-3.png" class="member-image mr-1 rounded-circle"
                                        alt="">
                                </div>
                            </div>
                            <div class="members my-2">
                                <div class="members my-2">
                                    <img src="frontend/images/detail-2.jpg" class="member-image mr-1 rounded-circle"
                                        alt="">
                                </div>
                            </div>
                            <div class="members my-2">
                                <div class="members my-2">
                                    <img src="frontend/images/detail-3.jpg" class="member-image mr-1 rounded-circle"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <div class="trip-information">
                            <div class="row">
                                <div class="col d-flex justify-content-start ml-1 text-main">
                                    <p>Date of Departure</p>
                                </div>
                                <div class="d-flex justify-content-end text-detail">
                                    <p>{{ \Carbon\Carbon::create($item->date_of_departure)->format('F, n, Y') }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start ml-1 text-main">
                                    <p>Duration</p>
                                </div>
                                <div class="d-flex justify-content-end text-detail">
                                    <p>{{ $item->duration }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start ml-1 text-main">
                                    <p>Type</p>
                                </div>
                                <div class="d-flex justify-content-end text-detail">
                                    <p>{{ $item->type }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start ml-1 text-main">
                                    <p>Price</p>
                                </div>
                                <div class="d-flex justify-content-end text-detail">
                                    <p>Rp.{{ $item->price }},00/person</p>
                                </div>
                            </div>
                        </div>
                        <hr class="ml-3">
                    </div>
                    <div class="join-container">
                        @auth
                            <form action="{{ route('checkout_process', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-block btn-join-now mt-3 py-2">Join Now</button>
                            </form>
                        @endauth
                        @guest
                        <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                            Login or Register to Join
                        </a>
                        @endguest
                    </div>
                </div>
            </div>
            <!-- row 2 -->
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $('document').ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15,
        });
    });
</script>
@endpush