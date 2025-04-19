@extends('frontend.layouts.app')

@section('styles')
    <style>
        body {
            background-color: #E0E0E0;
        }

        .sec-title1 {
            color: #FFD715 !important;
        }

        .vs-food-wrapper .food-slider-layout1 h3 {
            font-family: "Poppins", sans-serif !important;
            font-size: 24px;
            letter-spacing: 1px;
            font-weight: 600;
            text-transform: capitalize;

        }

        .vs-food-wrapper .food-slider-layout1 .image-scale-hover {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
        }

        .vs-food-wrapper .food-slider-layout1 .image-scale-hover::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            pointer-events: none;
        }

        .vs-food-wrapper .food-slider-layout1 .image-scale-hover img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            box-shadow: 0px 0px 10px -5px grey;
        }

        @media screen and (max-width: 1199px) {
            .vs-food-wrapper .food-slider-layout1 .image-scale-hover img {
                height: 270px;
            }

            .vs-food-wrapper .food-slider-layout1 h3 {
                font-size: 22px;

            }

            .food-slider-layout1 .food-slide-title {
                left: 20px;
            }
        }

        @media screen and (max-width: 767px) {
            .vs-food-wrapper .food-slider-layout1 .image-scale-hover img {
                height: 250px;
            }
        }

        @media screen and (max-width: 575px) {
            .vs-food-wrapper .food-slider-layout1 h3 {
                font-size: 18px;

            }

            .food-slider-layout1 .food-slide-title {
                left: 10px;
            }

            .vs-food-wrapper .food-slider-layout1 .image-scale-hover img {
                height: 180px;
            }

            .vs-food-wrapper .food-slider-layout1 .image-scale-hover {
                border-radius: 10px;
            }
        }

        @media screen and (max-width: 399px) {
            .vs-food-wrapper .food-slider-layout1 .image-scale-hover {
                border-radius: 10px;
            }

            .vs-food-wrapper .food-slider-layout1 .image-scale-hover img {
                height: 120px;
            }

            .vs-food-wrapper .food-slider-layout1 h3 {
                font-size: 14px;
                font-weight: 500;


            }

            .food-slider-layout1 .food-slide-title {
                left: 5px;
            }
        }
    </style>
@endsection

@section('content')
    <section class="vs-food-wrapper py-60">
        <div class="container-fluid">
            <div class="food-box-area">
                <div class="vs-food-box link-inherit">
                    <div class="row align-items-center">
                        @foreach ($categories as $key => $category)
                            <div class="{{ $key == 0 ? 'col-lg-6' : 'col-lg-3' }} col-6  mb-3 px-2 px-sm-3">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <a href="{{ route('home.category.items', $category->id) }}">
                                            <img src="{{ asset('uploads/categories/' . $category->image) }}" alt="Food Image"
                                                class="w-100">
                                        </a>
                                        <h3 class="food-slide-title mb-0 text-white">
                                            <a href="{{ route('home.category.items', $category->id) }}">Smash Burgers</a>
                                        </h3>
                                    </div>

                                </div>

                            </div>
                        @endforeach



                    </div>
                </div>


            </div>

        </div>
    </section>
@endsection
