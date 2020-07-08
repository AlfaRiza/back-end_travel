@extends('layouts.login')

@section('title', 'Register')
@section('content')
<main>
    <div class="register-container">
        <div class="container">
            <div class="row">
                <div class="col-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('frontend/images/logo.png') }}" class="w-25 mb-4" alt="">
                            </div>
                            <form action="{{ route('register') }}" method="POST" >
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                                id="password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="confirmpassword">Confirm Password</label>
                                            <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control "
                                                id="confirmpassword">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-register btn-block">Sign Up</button>
                                <p class="text-center mt-4">
                                    <a href="#" class="p-register">Saya sudah punya akun</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-4 offset-1 section-right">
                    <h1 class="mb-4 title-register">Your journey <br> begin now</h1>
                    <img src="{{ url('frontend/images/register.svg') }}" width="90%" alt="">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
