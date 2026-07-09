@extends('layouts.app')

@section('content')

<!-- SLIDER -->
<div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1709880945165-d2208c6ad2ec?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); height:50vh; background-size:cover;">
            <div class="d-flex justify-content-center align-items-center h-100 text-white">
                <div class="text-center">
                    <h1><b>Fee Voucher Management System</b></h1>
                    <p>Manage payments easily</p>
                    <a href="/voucher" class="btn btn-warning">Create Voucher</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- FEATURES -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="mb-5"><b><u>CORE FEATURES</u></b></h2>

        <div class="row">

            <div class="col-md-4">
                <div class="card feature-card p-4">
                    <i class="fa fa-file-invoice fa-2x mb-3"></i>
                    <h5>Voucher Creation</h5>
                    <p>Generate vouchers quickly</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card p-4">
                    <i class="fa fa-database fa-2x mb-3"></i>
                    <h5>Secure Records</h5>
                    <p>All data stored safely</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card p-4">
                    <i class="fa fa-chart-line fa-2x mb-3"></i>
                    <h5>Reports</h5>
                    <p>Detailed analytics</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection