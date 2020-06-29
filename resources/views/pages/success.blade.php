@extends('layouts.success')
@section('title', 'Checkout Success')

@section('content')
<main>
    <section class="section-success d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
                <h1>Yeay Success</h1>
                <p>We've send you email for email instruction</p>
                <br>
                <p>please read it as well</p>
                <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </section>
</main>
@endsection


