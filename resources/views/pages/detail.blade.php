@extends('layouts.app')

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
                        <h1>Nusa Peninda</h1>
                        <p>Republik of Indonesia Raya</p>
                        <!-- Galery -->
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/details-1.jpg" alt="" class="xzoom" id="xzoom-default"
                                    xoriginal="frontend/images/details-1.jpg">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery"
                                        width="120px" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery"
                                        width="120px" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery"
                                        width="120px" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery"
                                        width="120px" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery"
                                        width="120px" xpreview="frontend/images/details-1.jpg">
                                </a>
                            </div>
                        </div>
                        <!-- Akhir Galery -->
                        <h2>Tentang wisata</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ipsam aperiam, aliquam
                            repudiandae laborum omnis ipsa voluptas dolor libero qui eum quam perspiciatis sunt
                            pariatur saepe reprehenderit dolore quod fuga!
                            Laborum corporis delectus eum ipsum at nisi deserunt dolore sint, mollitia aspernatur
                            explicabo iure illo consectetur voluptatum dolorem expedita autem quasi, fugit,
                            praesentium repellendus animi saepe voluptatibus eius. Obcaecati, enim?
                            Optio et fuga, id sapiente dolore consequatur, fugiat ad beatae, illum labore odit animi
                            natus? Nulla illo cupiditate libero ab dolorem corporis sapiente rem! Labore dolorem
                            aliquid at distinctio. Sed.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nobis, nesciunt dolor quis
                            nisi pariatur temporibus dicta? Officia iusto impedit esse ex pariatur veritatis aliquid
                            maxime, odit, ad labore eos!</p>
                        <div class="features">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <img src="frontend/images/ic_event.png" class="features-image" alt="">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontend/images/ic_event.png" class="features-image" alt="">
                                    <div class="description">
                                        <h3>Bahasa</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontend/images/ic_event.png" class="features-image" alt="">
                                    <div class="description">
                                        <h3>Food</h3>
                                        <p>Local food</p>
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
                                    <p>22 Aug 2020</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start ml-1 text-main">
                                    <p>Duration</p>
                                </div>
                                <div class="d-flex justify-content-end text-detail">
                                    <p>4D 3N</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start ml-1 text-main">
                                    <p>Type</p>
                                </div>
                                <div class="d-flex justify-content-end text-detail">
                                    <p>Open Trip</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start ml-1 text-main">
                                    <p>Price</p>
                                </div>
                                <div class="d-flex justify-content-end text-detail">
                                    <p>Rp.3.200.000/person</p>
                                </div>
                            </div>
                        </div>
                        <hr class="ml-3">
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
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