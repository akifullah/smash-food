@extends('admin.layouts.main')
@section('content')
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">

                    <div class="container-fluid dashboard">
                        <div class="row ">
                            <!-- Column -->
                            <div class="col-lg-4  col-md-6 px-2">
                                <div class="card box-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <a href="{{ route('admin.categories') }}">
                                                <div
                                                    class="round round-lg text-white d-flex align-items-center justify-content-center rounded-circle bg-info">
                                                    <i data-feather="monitor" class="fill-white feather-lg"></i>
                                                </div>
                                            </a>
                                            <div class="ms-2 align-self-center">
                                                <h3 class="mb-0">14</h3>
                                                <h6 class="text-muted mb-0">Total Categories</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-4 col-md-6 px-2 ">
                                <div class="card box-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <a href="{{ route('admin.products.index') }}">
                                                <div
                                                    class="round round-lg text-white d-flex align-items-center justify-content-center rounded-circle bg-info">
                                                    <i data-feather="monitor" class="fill-white feather-lg"></i>
                                                </div>
                                            </a>
                                            <div class="ms-2 align-self-center">
                                                <h3 class="mb-0">88</h3>
                                                <h6 class="text-muted mb-0">Total Products</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-4 col-md-6 px-2 ">
                                <div class="card box-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <a href="{{ route('admin.products.index') }}">
                                                <div
                                                    class="round round-lg text-white d-flex align-items-center justify-content-center rounded-circle bg-info">
                                                    <i data-feather="monitor" class="fill-white feather-lg"></i>
                                                </div>
                                            </a>
                                            <div class="ms-2 align-self-center">
                                                <h3 class="mb-0">14</h3>
                                                <h6 class="text-muted mb-0">Total Orders</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Row -->
@endsection


