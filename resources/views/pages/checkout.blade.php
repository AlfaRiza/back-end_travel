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
                            <h1>Who is going?</h1>
                            <p>Trip to Ubud, Bali</p>

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
                                        <tr>
                                            <td> <img src="{{ url('frontend/images/pic-1.jpg') }}" height="60px"
                                                    class="rounded-circle"> </td>
                                            <td class="align-middle">
                                                Angga Risky
                                            </td>
                                            <td class="align-middle">
                                                CN
                                            </td>
                                            <td class="align-middle">
                                                N/A
                                            </td>
                                            <td class="align-middle">
                                                .Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/Group 4.jpg') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <img src="{{ url('frontend/images/pic-2.jpg') }}" height="60px"
                                                    class="rounded-circle"> </td>
                                            <td class="align-middle">
                                                Galih Pratama
                                            </td>
                                            <td class="align-middle">
                                                SG
                                            </td>
                                            <td class="align-middle">
                                                30 Days
                                            </td>
                                            <td class="align-middle">
                                                .Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/Group 4.jpg') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Member</h2>
                                <form action="#" class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername"
                                        placeholder="Username">
                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                        <option value="visa">Visa</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <label for="doePassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport"
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
                                        <p class=" text-detail">2 persons</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col d-flex justify-content-start ml-1">
                                        <p class=" text-main">Additional VISA</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <p class="text-detail">$ 190,00</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-start ml-1 text-main">
                                        <p class=" text-main">Trip Price</p>
                                    </div>
                                    <div class="d-flex justify-content-end text-detail">
                                        <p class=" text-detail">$ 80,00 / person</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-start ml-1 text-main">
                                        <p class=" text-main">Sub Total</p>
                                    </div>
                                    <div class="d-flex justify-content-end text-detail">
                                        <p class=" text-detail">$ 280,00</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-start ml-1 ">
                                        <p class="text-main">Total(+Unique Code)</p>
                                    </div>
                                    <div class="d-flex justify-content-end text-detail">
                                        <span class="text-blue">
                                            $ 279,
                                        </span>
                                        <span class="text-orange">32</span>
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
                            <a href="{{ route('success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail') }}" class="btn">
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
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('frontend/images/ic_doe.jpg') }}"/>'
            }
        });
    });
</script>
@endpush