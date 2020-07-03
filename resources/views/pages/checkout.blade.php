@extends('layouts.checkout')

@section('title', 'Detail Travel')
    
@section('content')
    <!-- Main -->
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
                                    <a href="index.html">Paket Travel</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="detail.html">Detail</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- row 1 -->
                <!-- row 2 -->
                <div class="row">
                    <div class="col-md-8 pl-lg-0">
                        <div class="card card-details">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h1>Who is going?</h1>
                            <p>Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }}</p>

                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($item->details as $detail)
                                        <tr>
                                            <td> <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60px"
                                                    class="rounded-circle"> </td>
                                            <td class="align-middle">
                                                {{ $detail->username }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->nationality }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                                            </td>
                                            <td class="align-middle">
                                                {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('checkout-remove', $detail->id) }}">
                                                    <img src="{{ url('frontend/images/Group 4.jpg') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    No Visitor
                                                </td>
                                            </tr>
                                        @endforelse
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Member</h2>
                                <form action="{{ route('checkout-create', $item->id) }}" method="POST" class="form-inline">
                                    @csrf
                                    <label for="username" class="sr-only">Name</label>
                                    <input type="text" name="username" required class="form-control mb-2 mr-sm-2" id="username"
                                        placeholder="Username">

                                    <label for="nationality" class="sr-only">Nationality</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="nationality" name="nationality" style="width: 50px"
                                    required
                                    placeholder="Nationality">

                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="is_visa" id="inputVisa" class="custom-select mb-2 mr-sm-2" required>
                                        <option value="visa">Visa</option>
                                        <option value="1">30 Days</option>
                                        <option value="0">N/A</option>
                                    </select>

                                    <label for="doe_passport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doe_passport" name="doe_passport"
                                            placeholder="DOE Passport">
                                    </div>

                                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>

                                </form>

                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You are only able to invite member that has registered in Nomads.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Detail Right -->
                    <div class="col-lg-4">
                        <div class="card card-details card-right">


                            <div class="trip-information">
                                <h2>Checkout Information</h2>
                                <div class="row">
                                    <div class="col d-flex justify-content-start ml-1 text-main">
                                        <p class=" text-main">Members</p>
                                    </div>
                                    <div class="d-flex justify-content-end text-detail">
                                        <p class=" text-detail">{{ $item->details->count() }} persons</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col d-flex justify-content-start ml-1">
                                        <p class=" text-main">Additional VISA</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <p class="text-detail">$ {{ $item->additional_visa }},00</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-start ml-1 text-main">
                                        <p class=" text-main">Trip Price</p>
                                    </div>
                                    <div class="d-flex justify-content-end text-detail">
                                        <p class=" text-detail">$ {{ $item->travel_package->price }} / person</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-start ml-1 text-main">
                                        <p class=" text-main">Sub Total</p>
                                    </div>
                                    <div class="d-flex justify-content-end text-detail">
                                        <p class=" text-detail">$ {{ $item->transaction_total }},00</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-start ml-1 ">
                                        <p class="text-main">Total(+Unique Code)</p>
                                    </div>
                                    <div class="d-flex justify-content-end text-detail">
                                        <span class="text-blue">
                                            $ {{ $item->transaction_total }},
                                        </span>
                                        <span class="text-orange">{{ mt_rand(0,99) }}</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="ml-3">
                            <h2>Payment Instruction</h2>
                            <p class="payment-instruction">Please complete your payment before to continue the wonderful
                                trip</p>
                            <!-- Bank 1 -->
                            <div class="bank">
                                <div class="bank-item pb-3 d-flex justify-content-start align-items-md-start">
                                    <div class="bank-main mr-2">
                                        <img src="{{ url('frontend/images/ic_bank.png') }}" class="bank-image" alt="">
                                    </div>
                                    <div class="description">
                                        <h3>PT. Nomads ID</h3>
                                        <p>
                                            0812 8122 1232
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End bank 1 -->
                            <!-- Bank 2 -->
                            <div class="bank">
                                <div class="bank-item pb-3 d-flex justify-content-start align-items-md-start">
                                    <div class="bank-main mr-2">
                                        <img src="{{ url('frontend/images/ic_bank.png') }}" class="bank-image" alt="">
                                    </div>
                                    <div class="description">
                                        <h3>PT. Nomads ID</h3>
                                        <p>
                                            0812 8122 1232
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Bank 2 -->
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail', $item->travel_package->slug) }}" class="btn">
                                <p class="btn-cancle">Cancle Booking</p>
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
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
    $('document').ready(function () {
        $('.datepicker').datepicker({
        format : 'yyyy-mm-dd',
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('frontend/images/ic_doe.jpg') }}"/>'
            }
        });
    });
</script>
@endpush