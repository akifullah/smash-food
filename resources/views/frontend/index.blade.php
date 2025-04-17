@extends('frontend.layouts.app')

@section('styles')
    <!-- GOBOLD FONT -->
    <link href="https://fonts.cdnfonts.com/css/gobold?styles=26043,26021,26029" rel="stylesheet">



    <!-- OWL CAROUSEL CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

    <style>
        #main-header {
            position: sticky;
            top: 0;
            background-color: #000 !important;
            height: 100px;
            display: flex;
            align-items: center;

        }

        #header-menu {
            padding: 10px 15px;
        }

        #header-menu .header-logo img {
            width: 135px;
        }

        #header-menu ul li a {
            color: #fff;
            transition: .5s ease;
            padding: 0;
            position: relative;
            font-weight: 600;
        }

        #header-menu ul li a:after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -3px;
            transform: translateX(-50%);
            width: 0%;
            height: 3px;
            background-color: #FFD715;
            border-radius: 5px;
            transition: .5s ease;
        }

        #header-menu ul li a.m-btn:after {
            background-color: transparent;
        }

        #header-menu ul li a.active:after,
        #header-menu ul li a:hover:after {
            width: 100%;
        }

        #header-menu ul li a.active {
            color: #FFD715;
        }


        #header-menu .call-us-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dark-style a:hover,
        #header-menu .call-us-btn a:hover {
            color: #FFD715;
        }

        #header-menu .call-us-btn:hover {
            border-color: #FFD715;
            background-color: #FFD715;
            color: #151515;
        }

        #header-menu .m-btn {
            border: 1px solid #FFD715;
            border-radius: 7px;
            padding: 8px 18px;
            font-weight: 600;
            color: #151515;
            background-color: #FFD715;

        }

        #header-menu .m-btn:hover {
            color: #FFD715;
            background-color: transparent;
        }

        #header-menu .header-btn a {
            margin: 0 5px;
            white-space: nowrap;
        }

        #header-menu .cart-btn {
            all: unset;
            border: 1px solid #FFD715;
            border-radius: 7px;
            padding: 8px 18px;
            color: #151515;
            font-weight: 600;
            background-color: #FFD715;
            cursor: pointer;
            transition: 0.5s ease;
            font-family: "Roboto" sans-serif;

        }

        #header-menu .cart-btn span {
            color: #151515;
            transition: .5s ease;
        }

        #header-menu .cart-btn i {
            color: #151515;
            transition: .5s ease;
            margin-right: 5px;
        }

        #header-menu .cart-btn:hover span,
        #header-menu .cart-btn:hover {
            color: #FFD715 !important;
            background-color: transparent;
        }

        #header-menu .cart-btn:hover i {
            color: #FFD715;
        }

        #header-menu .user-icon i {
            font-size: 12px;

        }

        #header-menu .user-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid #fff;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #header-menu .user-icon:hover {
            color: #151515;
            background-color: #FFD715;
            border-color: #FFD715;
        }

        #header-menu .menu-wrap {
            /* min-width: 600px; */
            margin-right: auto;
            padding-left: 80px;
        }

        .right-btn-wrap {
            /* width: 500px; */
        }

        .tel-no {
            color: #FFD715 !important;
        }

        @media (max-width:1199px) {
            #header-menu .header-logo img {
                width: 100px;
            }

            #header-menu ul li {
                margin: 0px 5px;

            }

        }

        @media (max-width:991px) {
            #main-header {
                height: 70px;

            }

            #header-menu .menu-wrap {
                width: 100%;
                padding-left: 0;
            }

            #menu-popup-handle {
                all: unset;
                font-size: 20px;
                color: #fff;
                margin-right: 10px;
                cursor: pointer;
                transition: .5s ease;
            }

            #menu-popup-handle:hover {
                color: #FFD715;
            }

            .menu-wrap {
                position: relative;
            }

            .menu-wrap .main-menu.show {
                pointer-events: all;
                opacity: 1;
            }

            .menu-wrap .main-menu {
                display: block !important;
                pointer-events: none;
                opacity: 0;
                position: absolute;
                right: 30px;
                top: 50px;
                border: 1px solid #FFD715;
                width: 200px;
                border-radius: 10px;
                background-color: #151515;
                overflow: hidden;
                transition: .5s ease;
            }

            .menu-wrap .main-menu ul {
                display: grid;
                text-align: left;
            }

            .menu-wrap .main-menu ul li {
                margin: 0;
            }

            .menu-wrap .main-menu ul li a {
                display: block;
                padding: 8px 15px !important;
                font-size: 16px;
                transition: .5s ease;
            }

            .menu-wrap .main-menu ul li a:hover {
                color: #151515 !important;
                background-color: #FFD715;
            }
        }

        /* STICKY HEADER
                        .sticky-header-wrap{
                            background-color: #151515;
                        }
                        .sticky-header-wrap .logo img{
                            width: 80px;
                        }
                        .sticky-header-wrap ul li a{
                            text-shadow: none !important;
                            color: #fff;
                        } */

        .cart-section {
            padding: 50px 20px;
        }

        .cart-section .cart-wrapper {
            background-color: #000;
            padding: 20px 20px;
            padding-top: 0;
            border-radius: 8px;
        }


        .cart-section .cart-wrapper .no-item {
            color: #E0E0E0 !important;
        }

        .cart-section .cart-wrapper h6 {
            color: #FFD715 !important;
            font-size: 14px;
        }

        .cart-section .cart-wrapper .cart-header h4 {
            font-size: 28px;
            color: #fefefe;
            font-family: "Poppins", sans-serif;
            margin-bottom: 30px;
            text-transform: capitalize;
            font-weight: 600;
            color: #FFD715;

        }

        .item-qty-btns {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
        }

        .item-qty-btns input {
            all: unset;
            width: 40px;
            height: 40px;
            text-align: center;
            border: 1px solid transparent;
            margin: 0;
            color: #FFD715;

        }

        .item-qty-btns button {
            all: unset;
            margin: 0;
            text-align: center;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            font-size: 12px;
            color: #151515;
            background-color: #FFD715;
            border: 1px solid #FFD715;
            cursor: pointer;
            transition: .5s ease !important;
        }

        .item-qty-btns button:hover {
            color: #FFD715;
            background-color: #000;
            border: 1px solid #000;
        }

        .cart-checkout-btn {
            margin-top: 20px;
        }

        .cart-checkout-btn a,
        .cart-section .cart-wrapper .cart-header button {
            all: unset;
            width: 100%;
            padding: 5px 15px;
            box-sizing: border-box;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            color: #151515;
            background: #FFD715;
            border: 1px solid #FFD715;
            cursor: pointer;
            display: block;
            transition: .5s ease;
            border-radius: 60px;
        }

        .cart-checkout-btn a:hover,
        .cart-section .cart-wrapper .cart-header button:hover {
            color: #FFD715;
            background-color: transparent;
        }

        /* .cart-checkout-btn {
                        text-align: right;
                    } */

        /* .cart-checkout-btn a {
                        font-size: 24px;
                        display: inline-block;
                        font-weight: 500;
                        padding: 10px 25px;
                        width: 150px;
                        margin-left: auto;
                        text-align: center;
                    } */

        .carts-item-wrap {
            margin-top: 30px;

        }



        .carts-item-wrap ul li {
            display: flex;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding: 15px 0;
        }

        .carts-item-wrap ul li:last-child {
            border-bottom: none;
        }


        .carts-item-wrap ul li .item-data {
            width: 100%;
        }

        .carts-item-wrap ul li .item-image {
            width: 80px;
            margin-right: 20px;
        }

        .carts-item-wrap ul li .item-image img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            background-color: #151515;
        }

        .carts-item-wrap ul li h3 {
            color: #FFD715;
            font-size: 18px;
            font-weight: 500;
            font-family: "Poppins", sans-serif !important;
            margin: 0;

        }

        .item-price {
            margin-left: 70px;
        }

        .item-price h5 {
            font-size: 18px;
            color: #FFD715;
            font-weight: 500;
            margin: 0;
            font-family: "Poppins", sans-serif;
            text-align: right;

        }

        .add-extra {
            margin-top: 20px;
            display: grid;
        }

        .add-extra a {
            font-size: 12px;
            color: #FFD715;
        }

        .add-extra span {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
            display: block;
            line-height: 1.6;
            font-weight: 300;
        }



        .remove-item {
            all: unset;
            color: #FFD715;
            transition: .5s ease;
            cursor: pointer;
        }

        .remove-item:hover {
            color: #fff;
        }

        .item-total {
            max-width: 300px;
            margin-left: auto;
        }

        .item-total h4 {
            color: #fefefe;
            font-family: "Poppins", sans-serif;

        }

        .item-total p {
            font-size: 22px;
            color: #fefefe;
            font-family: "Poppins", sans-serif;

        }

        .m-btn {
            border: 1px solid #FFD715;
            padding: 8px 18px;
            font-weight: 600;
            color: #FFD715;
            background-color: transparent;
            width: 100%;
            border-radius: 60px;
            transition: .5s ease;
        }

        .m-btn:hover {
            color: #000;
            background-color: #FFD715;

        }


        .cart-btn-wrap {
            position: relative;
        }

        .sideCard {
            background-color: #000;
            padding: 10px 20px;
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            width: 400px;
            height: 500px;
            overflow-y: auto;
            opacity: 1;
            display: none;
            z-index: 100;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
        }

        .cart-btn-wrap:hover .sideCard {
            opacity: 1;
            display: block;
        }

        .sideCard .basket {
            color: #FFD715;
            font-size: 24px;
            font-weight: 500;
            margin-top: 10px;
        }
    </style>

    <style>
        /* POPPINS FONST  */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *,
        html {
            font-family: "Poppins", sans-serif;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        .wrapper {
            overflow: hidden;
        }

        body {
            background-color: #E0E0E0;
            overflow-x: hidden;
        }

        .overlay {
            position: relative;
            isolation: isolate;
        }

        .overlay:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            transition: .5s ease;
            z-index: -1;
        }

        .hero-section {
            width: 100%;
        }

        /* OUR MENU SECTION */
        .our-menu-section {
            margin: 50px 0;
            padding: 0 10px;
        }

        .our-menu-section .our-menu {
            background-color: #0E111A;
            border-radius: 15px;
            padding: 15px 0;
            padding-left: 40px;

        }

        .our-menu-section .our-menu h2 {
            font-size: 70px;
            font-weight: 700;
            color: #FFD715;
            font-family: 'Gobold Bold', sans-serif;

        }

        .our-menu-section .our-menu p {
            color: #ddd;
            font-size: 18px;

        }

        .our-menu-section .our-menu a {
            max-width: 300px;
            display: block;
            padding: 10px 30px;
            border: 1px solid #FFD715;
            border-radius: 5px;
            text-align: center;
            font-size: 22px;
            font-weight: 500;
        }

        .our-menu-section .our-menu a:hover {
            color: #0E111A;
            background-color: #FFD715;
        }

        @media screen and (max-width: 991px) {
            .our-menu-section .our-menu h2 {
                font-size: 50px;
                font-weight: 800;
            }
        }

        @media screen and (max-width: 575px) {
            .our-menu-section .our-menu {
                padding: 15px 10px;
                padding-top: 25px;


            }

            .our-menu-section .our-menu h2 {
                font-size: 35px;
            }

            .our-menu-section .our-menu a {
                font-size: 18px;
            }

        }

        /* OUR MENU SECTION END */

        /* CARD SECTION START */
        .card-section {
            padding: 0 10px;
        }

        .card-section .box-card {
            background: url("https://smashinit.co.uk/frontend/assets/img/home/story-bg.jpg");
            background-position: center;
            background-size: cover;
            border-radius: 15px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 300px;
            transition: .5s ease;
            position: relative;
            isolation: isolate;
        }

        .card-section .box-card.box-card1::after {
            background: rgba(0, 0, 0, 0.8);
        }

        .time-detail {
            background-color: transparent;
            width: calc(100% - 50px);
            padding: 10px;
        }

        .time-detail h5 {
            font-size: 20px;
            margin: 0;
            padding: 0;
            text-align: center;
            font-weight: 600;
            color: #fefefe;
            font-family: "Poppins", sans-serif;

        }

        .time-detail h4 {
            font-size: 28px;
            text-align: center;
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            color: #FFD715;
            margin-bottom: 25px;
            position: relative;

        }

        .time-detail h4:after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 100px;
            border-bottom: 1px solid #FFD715;
        }

        .time-detail .hours .day {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .time-detail .hours .day p {
            margin: 0;
            /* color: rgba(255, 255, 255, 0.8); */
            color: #FFD715;
        }

        .time-detail .hours .day.active {
            background-color: #E0E0E0;
        }

        .time-detail .hours .day.active p {
            color: #151515;
        }


        .card-section .box-card h3 {
            font-size: 45px;
            color: #FFD715;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            max-width: 450px;
            text-align: center;
        }

        .card-section .box-card2 {
            background: url("https://smashinit.co.uk/frontend/assets/img/home/location-bg.jpg");
            background-position: center;
            background-size: cover;
        }

        .card-section .box-card:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 15px;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            transition: .5s ease;
            z-index: -1;
        }

        .card-section .box-card:hover:after {
            background: rgba(0, 0, 0, 0.8);

        }

        .card-section .box-card img {
            max-width: 235px;
        }

        @media screen and (max-width: 991px) {
            .card-section .box-card {
                height: 200px;

            }

            .card-section .box-card img {
                max-width: 180px;
            }


            .card-section .box-card h3 {
                font-size: 34px;
            }

        }


        @media screen and (max-width: 575px) {
            .card-section .box-card h3 {
                font-size: 30px;
            }


            .time-detail {
                width: calc(100% - 20px);
            }

            .time-detail h4 {
                font-size: 22px;

            }

        }



        /* CARD SECTION END */

        /* FRACHISE SECTION START */
        .franchise-section {
            padding: 130px 10px;
            background-image: url("https://smashinit.co.uk/frontend/assets/img/home/location-bg.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .franchise-section h2 {
            font-size: 70px;
            font-weight: 700;
            color: #fff;
            font-family: "Poppins", sans-serif;

        }

        .franchise-section h2 span {
            color: #FFD715;
        }

        .franchise-section p {
            color: #fefefe;
            font-size: 18px;
            max-width: 775px;
            margin: 0 auto;
            line-height: 1.4;
            text-align: justify;

        }

        .franchise-section a {
            max-width: 300px;
            display: block;
            padding: 10px 30px;
            border: 1px solid #FFD715;
            border-radius: 5px;
            text-align: center;
            font-size: 22px;
            font-weight: 500;
            margin: 30px auto;
        }

        .franchise-section a:hover {
            color: #0E111A;
            background-color: #FFD715;
        }

        @media screen and (max-width: 991px) {
            .franchise-section h2 {
                font-size: 60px;
            }
        }

        @media screen and (max-width: 575px) {
            .franchise-section h2 {
                font-size: 35px;
            }

            .franchise-section p {
                font-size: 16px;

            }

            .franchise-section a {
                max-width: 250px;
                font-size: 20px;
            }

        }

        /* FRACHISE SECTION END */


        /* ABOUT SECTION START */
        .about-section {
            margin-top: 0px;
            background-image: url("https://smashinit.co.uk/frontend/assets/img/home/about-bg.jpg");

        }

        /* ABOUT SECTION END */

        /* JOIN SECTION START */
        .join-section {
            padding: 100px 0;
            background: #0E111A;
        }

        .join-section .join-text {
            max-width: 450px;
            margin-bottom: 30px;
        }

        .join-section .join-text h4 {
            font-family: "Poppins", sans-serif;
            font-size: 34px;
            font-weight: 600;
            color: #fefefe;
            text-transform: uppercase;
            margin-bottom: 0;
        }

        .join-section .join-text h2 {
            font-size: 68px;
            font-weight: 700;
            color: #FFD715;
            font-family: "Poppins", sans-serif;
        }

        .join-section .join-text img {
            margin-bottom: 10px;
        }

        .join-section .join-text p {
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 30px;
            line-height: 1.4;
            color: rgba(255, 255, 255, 0.8);
        }

        .join-section .join-text a {
            max-width: 200px;
            display: block;
            padding: 10px 30px;
            color: #FFD715;
            border: 1px solid #FFD715;
            border-radius: 5px;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            margin: 20px 0;
        }

        .join-section .join-text a:hover {
            color: #0E111A;
            background-color: #FFD715;
            border-color: #FFD715;
        }


        .join-section .join-img img {
            border-radius: 15px;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media screen and (max-width: 991px) {
            .join-section .join-text h4 {
                font-family: "Poppins", sans-serif;
                font-size: 28px;
            }

            .join-section .join-text h2 {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 991px) {


            .join-section .join-text h2 {
                font-size: 40px;
            }
        }


        /* JOIN SECTION END  */
    </style>
@endsection





@section('content')
    <div class="wrapper">


        <!--==============================
                Hero Area
            ==============================-->

        <section class="hero-section">
            <div class="hero-slide owl-carousel owl-theme">
                <div class="item">
                    <div class="banner-img">
                        <img src="https://smashinit.co.uk/frontend/assets/img/home/banner1.webp" alt="Banner ">
                    </div>
                </div>

                <div class="item">
                    <div class="banner-img">
                        <img src="https://smashinit.co.uk/frontend/assets/img/home/banner2.webp" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="banner-img">
                        <img src="https://smashinit.co.uk/frontend/assets/img/home/banner3.webp" alt="Banner">
                    </div>
                </div>

            </div>
        </section>
        <!-- HERO SECTION END -->



        <!-- OUR MENU SECTION START -->
        <section class="our-menu-section">
            <div class="container">
                <div class="our-menu row align-items-center">
                    <div class="col-md-5 col-lg-4 mb-5">
                        <h2>OUR MENU</h2>
                        <p>Choose from our wide range selection, best in town</p>
                        <div class="menu-link">
                            <a href="https://smashinit.co.uk/shop">Order Online</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="our-menu-img">
                            <img src="https://smashinit.co.uk/frontend/assets/img/home/our-menu.png" alt="Image">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- OUR MENU SECTION END -->

        <!-- CARD SECTION -->
        <section class="card-section">
            <div class="container px-0">
                <div class="row">

                    <div class="col-md-6 mb-5">
                        <!-- <a href="https://smashinit.co.uk/about"> -->

                        <div class=" box-card box-card1">
                            <!-- <img src="https://smashinit.co.uk/frontend/assets/img/home/story.png" alt="Image"> -->
                            <div class=" time-detail">

                                <!-- <h5>HERE'S OUR</h5> -->
                                <h4>OPENING HOURS</h4>

                                <div class="hours">

                                    <div class="day ">
                                        <p>Monday</p>
                                        <p>16:30-23:00</p>
                                    </div>

                                    <div class="day ">
                                        <p>Tuesday</p>
                                        <p>16:30-23:00</p>
                                    </div>

                                    <div class="day ">
                                        <p>Wednesday</p>
                                        <p>16:30-23:00</p>
                                    </div>

                                    <div class="day active">
                                        <p>Thursday</p>
                                        <p>16:30-23:00</p>
                                    </div>

                                    <div class="day ">
                                        <p>Friday</p>
                                        <p>16:30-23:00</p>
                                    </div>

                                    <div class="day ">
                                        <p>Saturday</p>
                                        <p>16:30-23:00</p>
                                    </div>

                                    <div class="day ">
                                        <p>Sunday</p>
                                        <p>16:30-23:00</p>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <!-- </a> -->

                    </div>

                    <div class="col-md-6 mb-5 ">
                        <a href="https://smashinit.co.uk/gallery">

                            <div class="box-card box-card2 h-100">
                                <!-- <img src="https://smashinit.co.uk/frontend/assets/img/home/location.png" alt="Image"> -->
                                <h3>The SMASH 'IN' IT <br /> Location</h3>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- CARD SECTION END -->

        <!-- FRACHISE SECTION START -->
        <!-- <section class="franchise-section overlay">
                <div class="container">
                    <div class="franchise-text text-center">
                        <h2><span>FRANCHISE</span> <br /> OPPORTUNITIES</h2>
                        <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                            to become part of our network. We support our franchise partners with a programme tailor-made to
                            answer your every need. From store location, design and fitting to staff training and sales plans.
                        </p>

                        <a href="/about">
                            Learn More
                        </a>
                    </div>
                </div>
            </section> -->
        <!-- FRACHISE SECTION END -->

        <!-- JOIN SECTION START -->
        <div class="join-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="join-text">
                            <!-- <img src="https://smashinit.co.uk/frontend/assets/img/home/join.png" alt="Image"> -->
                            <h4>Join The</h4>
                            <h2>SMASH CLUB</h2>

                            <p>SMASH 'IN' IT members get early access to menu items, free merchandise and exclusive
                                discounts every month</p>

                            <a href="/user-login">JOIN NOW</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="join-img">
                            <img src="https://smashinit.co.uk/frontend/assets/img/home/join-banner.webp" alt="Image">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- JOIN SECTION END -->

        <!-- ABOUT SECTION START -->
        <!-- <section class="franchise-section about-section overlay">
                <div class="container">
                    <div class="franchise-text text-center">
                        <h2><span>ABOUT</span></h2>
                        <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                            to become part of our network. We support our franchise partners with a programme tailor-made to
                            answer your every need. From store location, design and fitting to staff training and sales plans.
                        </p>

                        <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                            to become part of our network. We support our franchise partners with a programme tailor-made to
                            answer your every need. From store location, design and fitting to staff training and sales plans.
                        </p>

                        <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                            to become part of our network. We support our franchise partners with a programme tailor-made to
                            answer your every need. From store location, design and fitting to staff training and sales plans.
                        </p>

                        <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                            to become part of our network. We support our franchise partners with a programme tailor-made to
                            answer your every need. From store location, design and fitting to staff training and sales plans.
                        </p>

                        <a href="/about">
                            Learn More
                        </a>
                    </div>
                </div>
            </section> -->
        <!-- ABOUT SECTION END -->
    </div>
@endsection

@section('js')
    <!-- JQUERY CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- OWL CAROUSEL JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $('.hero-slide').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
@endsection



{{-- <style>
    #footer {
        background-color: #E0E0E0;
    }

    #footer .footer-widget-wrapper {
        border-bottom: 1px solid white !important;
        margin: 0 20px;
    }

    #footer .menu li a {
        font-family: "Poppins", Sans-serif;
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0px;
        color: #000;
        margin: 3px 0;
        transition: .5s ease;
    }

    #footer .menu li a:hover {
        color: #FFD715;
    }

    #footer .menu li a:before {
        display: none;
        background-color: red;
    }

    #footer h3 {
        font-family: "Poppins", Sans-serif;
        font-size: 22px;
        color: #0E111A;
        font-weight: 700;

    }

    #footer .social-links ul li {
        margin: 3px;
    }

    #footer .social-links ul li a {
        width: 40px;
        height: 40px;
        color: #000;
        border: 1px solid #000;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    #footer .social-links ul li a:hover {
        border-color: #FFD715;
    }

    #footer .footer-copyright a:hover {
        color: #000;
    }

    #footer p.address span,
    #footer p.address {
        font-size: 16px;
        line-height: 1.6;
        color: #000;
    }

    #footer p.address span {
        letter-spacing: 2px;
    }


    #footer .ft-bottom {
        padding: 15px 50px;
        background-color: #000;
    }

    #footer .ft-bottom .ft-logo {
        min-width: 120px !important;
    }

    #footer .ft-bottom p {
        margin-bottom: 0;
        margin-top: 10px;
        font-size: 16px;
        color: #fff;
        font-weight: 300 !important;
    }

    #footer .ft-bottom .links ul {
        margin: 15px 0;
    }

    #footer .ft-bottom .links ul li {
        padding: 0px 10px;
        border-right: 1px solid #fff;
        line-height: .8;
        margin: 8px 0;
    }

    #footer .ft-bottom .links ul li:last-child {
        border-right: none;
    }

    #footer .ft-bottom .links ul li a {
        color: #fff;
        font-size: 18px;
        font-weight: 400 !important;
    }

    #footer .ft-bottom .links ul li a:hover {
        color: #FFD715;
        text-decoration: underline;
    }

    .widget_title {
        font-family: "Poppins", Sans-serif !important;
    }

    .widget_shopping_cart .cart_list li.mini_cart_item a {
        font-family: "Poppins", Sans-serif;
    }

    .scrollToTop {
        color: #000 !important;
        background-color: #FFD715;
    }

    .scrollToTop:hover {
        color: #FFD715 !important;
        background-color: #0E111A !important;
    }

    .scrollToTop:hover:before {
        border-color: #0E111A !important;
    }

    .scrollToTop:before {
        border-color: #FFD715;
    }

    @media (max-width: 767px) {
        .widget_shopping_cart .cart_list li.mini_cart_item {
            padding: 10px 10px 5px 60px;
        }

        .widget_shopping_cart .cart_list li.mini_cart_item img {
            width: 50px;
            height: 50px;
            top: 10px;
        }

    }



    @media (max-width: 575px) {
        #footer h3 {
            margin-bottom: 5px;
        }

        #footer .ft-bottom {
            padding: 15px 15px;
        }

        #footer p,
        #footer h3,
        #footer .menu li {
            text-align: center;
        }

        .sidemenu-wrapper .closeButton {
            width: 35px;
            height: 35px;
            line-height: 30px;
            font-size: 18px;
        }

        .sidemenu-wrapper .sidemenu-content {
            width: 300px;
            padding: 80px 15px;
        }

        .widget_title {
            font-size: 18px;
            margin-bottom: 10px;
            font-family: "Poppins", Sans-serif !important;
        }


        .widget_shopping_cart .cart_list li.mini_cart_item {
            padding: 5px 10px 5px 50px;
        }

        .widget_shopping_cart .cart_list li.mini_cart_item img {
            width: 40px;
            height: 40px;
            top: 10px;
        }

        .widget_shopping_cart .cart_list li.mini_cart_item a {
            font-size: 14px;
        }

        .vs-btn {
            padding: 10px 25px;
            font-size: 14px;
        }
    }
</style> --}}
