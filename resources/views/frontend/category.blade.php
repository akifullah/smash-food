
<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SMASH 'IN' IT</title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="Burgerfy">
    <meta name="keywords" content="Burgerfy" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==============================
	   Google Web Fonts
	============================== -->
 <script>
        
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cookie&family=Roboto:wght@300;400;500;700&family=Rufina:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Favicons - Place favicon.ico in the root directory -->

    <link rel="icon" type="image/png" sizes="192x192" href="https://smashinit.co.uk/frontend/assets/img/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://smashinit.co.uk/frontend/assets/img/icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://smashinit.co.uk/frontend/assets/img/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://smashinit.co.uk/frontend/assets/img/icon.png">
    <link rel="manifest" href="https://smashinit.co.uk/frontend/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://smashinit.co.uk/frontend/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/app.min.css"> -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/bootstrap.min.css">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/flaticon.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/fontawesome.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/jquery.datetimepicker.min.css">
    <!-- Layer Slider -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/layerslider.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/magnific-popup.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/nice-select.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/style.css">
    <!-- Theme Color CSS -->
    <link rel="stylesheet" href="https://smashinit.co.uk/frontend/assets/css/theme-color1.css">
    <link rel="stylesheet" id="themeColor" href="#">
    
    <link rel="stylesheet" href="https://smashinit.co.uk/css/custom-style.css">
    <style>
        body {
            font-family: "Poppins", sans-serif !important;
        }
    </style>

</head>        <style>
        .dark-footer .widget_nav_menu a:before{
            display: none;
        }
    </style>
<body>

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
    #header-menu .call-us-btn a:hover{
        color: #FFD715 ;
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
        margin-right: auto ;
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
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 10px;
    }

    .cart-btn-wrap:hover .sideCard {
        opacity: 1;
        display: block;
    }

    .sideCard .basket{
        color: #FFD715;
        font-size: 24px;
        font-weight: 500;
        margin-top: 10px;
    }


    
    
</style>


<header class="header-wrapper  header-layout2 bg-dark dark-style py-2 py-lg-0 px-xl-115 " id="main-header">



    <div class="container-fluid position-relative" id="header-menu">
        <div class="d-flex justy-content-between align-items-center">
            <div class="">
                <div class="header-logo">
                    <a href="https://smashinit.co.uk"><img src="https://smashinit.co.uk/frontend/assets/img/Smash-in-it-logo.png"
                            alt="Logo"></a>
                </div>
            </div>
            <div class="  menu-wrap  d-flex justy-content-between">
                <nav id="main-menu" class="main-menu menu-style1 link-inherit mx-auto text-xl-left mobile-menu-active ">
                    <ul class="p-0 text-left text-lg-center">

                        <li>
                            <a class="active" href="https://smashinit.co.uk/shop">Our
                                Menu</a>

                        </li>
                        <li>
                            <a class=""
                                href="https://smashinit.co.uk/about">About</a>

                        </li>
                        <!-- <li>
                            <a href="https://smashinit.co.uk/blog">Blog</a>

                        </li> -->
                        <li>
                            <a class=""
                                href="https://smashinit.co.uk/contact">Contact</a>

                        </li>
                        <li>
                            <a class=""
                                href="https://smashinit.co.uk/gallery">Gallery</a>

                        </li>

                                                    <li class="d-block d-lg-none">
                                <a class=""
                                    href="https://smashinit.co.uk/user-login"><i class="fas fa-user mr-1"></i> Sign in</a>
                            </li>

                        


                        <li>
                            <a href="https://smashinit.co.uk/shop" class="m-btn d-none d-lg-block text-uppercase">Order Online</a>

                        </li>



                    </ul>
                </nav>
                <div class="d-flex align-items-center ml-auto">


                                            <a href="https://smashinit.co.uk/shop" class="m-btn d-block d-lg-none text-uppercase mx-3">Order Online</a>


                    




                    <button type="button" id="menu-popup-handle" class=" d-block text-theme  d-lg-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="d-none d-lg-block right-btn-wrap">
                <div class="header-right d-none d-lg-flex align-items-center justify-content-end">

                    <div class="header-btn  d-flex align-items-center ml-auto ">

                        
                            <a class=""
                                href="https://smashinit.co.uk/user-login"><i class="fas fa-user mr-1"></i> Sign in</a>


                        

                        <!-- <a href="tel:01613708094" class="tel-no">01613708094</a>
                        <a href="tel:01613708094" class="call-us-btn"><i class="fas fa-phone-alt"></i></a> -->
                        <!-- <a href="#" class="icon-btn text-theme mr-15 searchBoxTggler"><i class="fal fa-search"></i></a> -->


                        <div class="cart-btn-wrap">

                            <a href="https://smashinit.co.uk/cart" class="icon-btn text-theme  cart-btn ">
                                <!-- <span class="number bg-theme">9</span> -->
                                <i class="fas fa-shopping-cart "></i>
                                <span id="header_total">&pound;0 / 0
                                    item</span>
                            </a>

                            <div class="sideCard cart-section">

                                <h3 class="basket">Your Basket</h3>
                                <div class="row cart-wrapper px-3">
                                                                                                                <div class="col-12 ">
                                            <div class="empty-cart text-center">
                                                <h2 class="text-upppercase">Your basket is Empty!</h2>

                                                <!-- <a href="https://smashinit.co.uk/shop">continue shopping</a> -->

                                            </div>

                                        </div>
                                                                    </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<script>
    let menuHandle = document.querySelector("#menu-popup-handle");
    let mainMenu = document.querySelector("#main-menu");

    menuHandle.addEventListener("click", () => {
        mainMenu.classList.toggle("show");
    })
</script>
    
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

    @media  screen and (max-width: 1199px) {
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

    @media  screen and (max-width: 767px) {
        .vs-food-wrapper .food-slider-layout1 .image-scale-hover img {
            height: 250px;
        }
    }

    @media  screen and (max-width: 575px) {
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

    @media  screen and (max-width: 399px) {
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

<!--==============================
      Food Menu Area
    ==============================-->
<section class="vs-food-wrapper py-60">
    <div class="container-fluid">
        <div class="food-box-area">
            <div class="vs-food-box link-inherit">
                <!-- <h1 class="sec-title1 text-font3 text-theme text-center">Our Menu</h1>
                <div class="sec-line text-center" bis_skin_checked="1">
                    <img src="https://smashinit.co.uk/frontend/assets/img/shape/sec-title-1.png" alt="Section Shape Icon">
                </div> -->
                <div class="row align-items-center">

                    
                        <div class="col-lg-6 col-12  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/1">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714803580.webp" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/1">Meals</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/2">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714323511.jpg" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/2">Smash Burgers</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/3">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714323522.jpg" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/3">chicken in mix</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/4">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714802776.webp" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/4">Classic Burgers</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/5">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714803056.webp" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/5">Loaded Fries (New)</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/6">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714803169.webp" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/6">Wraps</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/7">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714323993.jpg" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/7">Chicken Tenders</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/8">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714324023.jpeg" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/8">Premium Sides</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/9">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714803948.webp" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/9">Kids</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/10">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714324045.png" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/10">Fries</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/11">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714324104.jpg" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/11">Shakes</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/12">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714324373.jpeg" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/12">Dips</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/13">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714804684.png" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/13">Drinks</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                        <div class="col-lg-3 col-6  mb-3 px-2 px-sm-3">
                            <a href="https://smashinit.co.uk/category-items/14">
                                <div class="food-slider-layout1 ">
                                    <div class="image-scale-hover">
                                        <img src="https://smashinit.co.uk/category_images/category_1714324701.webp" alt="Food Image"
                                            class="w-100">
                                        <h3 class="food-slide-title mb-0 text-white"><a
                                                href="https://smashinit.co.uk/category-items/14">American</a>
                                        </h3>
                                    </div>

                                </div>
                            </a>
                        </div>
                    
                </div>
            </div>


        </div>

    </div>
</section>


    <style>
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

    #footer p.address span{
        letter-spacing: 2px;
    }


    #footer .ft-bottom {
        padding: 15px 50px;
        background-color: #000;
    }

    #footer .ft-bottom .ft-logo {
        min-width: 120px !important;
    }
    #footer .ft-bottom p{
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

    #footer .ft-bottom .links ul li a{
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

    .scrollToTop{
        color: #000 !important;
        background-color: #FFD715;
    }
    .scrollToTop:hover{
        color: #FFD715 !important;
        background-color: #0E111A !important;
    }
    .scrollToTop:hover:before{
        border-color: #0E111A !important;
    }
    .scrollToTop:before{
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
</style>
<!--==============================
			Footer Area
	==============================-->



<div>
    <!--==============================
        Subscribe Form
    ==============================-->
    <!-- <section class="vs-subscribe-wrapper vs-subscribe-layout2 py-lg-100 py-40">
            <div class="container">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-6 col-xl-5">
                        <div class="vs-subscribe mb-4 mb-xl-0 text-center text-xl-left">
                            <h2 class="text-white mb-1">Subscribe to our newsletter</h2>
                            <p class="text-white text-md mb-0">Get updates for new products</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-7 pl-xl-5">
                        <form action="#" class="vs-subscribe-form subscribe-form-style1 d-sm-flex ">
                            <span class="subscribe-form-icon"><i class="fal fa-envelope text-title"></i></span>
                            <input type="email" class="form-control" placeholder="Your Email Address">
                            <button type="submit" class="vs-btn style1">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
    <footer class="footer-wrapper footer-layout1 dark-footer " id="footer">
        <div
            class="footer-widget-wrapper border-top footer-widget-layout1 pt-40 pt-lg-100 pb-10 pb-lg-70 z-index-common">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-xl-8">
                        <div class="widget widget_nav_menu   ">
                            <div class="menu-all-pages-container">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 mb-4 mb-sm-5">
                                        <h3>Useful Links</h3>
                                        <ul class="menu">
                                            <li><a href="/category-items/1">Meals</a></li>
                                            <li><a href="/category-items/2">Smash Burgers</a></li>
                                            <li><a href="/category-items/3">Chicken in Mix</a></li>
                                            <li><a href="/category-items/4">Classic Burgers</a></li>
                                            <li><a href="/category-items/5">Loaded Fries</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-md-4 mb-4 mb-sm-5">
                                        <h3>Quick Links</h3>

                                        <ul class="menu">
                                            <li><a href="/category-items/6">Wraps</a></li>
                                            <li><a href="/category-items/7">Chicken Tinders</a></li>
                                            <li><a href="/category-items/8">Premium Sides</a></li>
                                            <li><a href="/category-items/9">Kids</a></li>
                                            <li><a href="/category-items/10">Fries</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-md-4 mb-4 mb-sm-5">
                                        <h3>Address</h3>

                                        <p class="address">
                                            302 Edge Lane,
                                            Droylsden,
                                            Manchester
                                            M43 6JH

                                        </p>
                                        <p class="address">Phone: <a href="tel:01612708094" style="color: black;">0161 270 8094</a></p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-4">
                        <div class="widget pt-0">
                            <div class="vs-widget-about text-center text-sm-left">
                                <h3>Follow Us</h3>
                                <div class="social-links links-has-border">
                                    <ul class="justify-content-center justify-sm-content-left">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0" />
        <div class="ft-bottom">
            <div class="d-flex flex-column align-items-center justify-content-center ">
                <div class="links mx-auto">
                    <ul class="d-flex align-items-center justify-content-center flex-wrap list-unstyled ">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Service Disclaimer</a></li>
                    </ul>
                </div>

                <p>Smash 'IN' IT &copy; 2024.  All Rights Reserved</p>
            </div>
        </div>
        <!-- <div class="footer-copyright text-center bg-theme py-3 link-inherit z-index-common">
            <div class="container">
                <p class="text-white mb-0">Copyright <i class="fal fa-copyright"></i> 2022 <a
                        href="https://smashinit.co.uk/">SMASH 'IN' IT</a> - All rights reserved by <a
                        href="https://webspires.co.uk">Webspires</a>.</p>
            </div>
        </div> -->
    </footer>
</div>


<!--********************************
					Code End  Here
	******************************** -->

<!--==============================
    Sidemenu
============================== -->

<div class="sidemenu-wrapper  d-lg-block  ">
    <div class="sidemenu-content ">
        <button class="closeButton border-theme text-theme bg-theme-hover sideMenuCls"><i
                class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Cart</h3>
            <div class="widget_shopping_cart_content">
                                                    <h3>No Items in Cart</h3>
                            </div>
        </div>
    </div>
</div>
<!-- Scroll Top Top Button -->
<a href="#" class="scrollToTop icon-btn bg-theme border-before-theme"><i class="far fa-angle-up"></i></a>    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="https://smashinit.co.uk/frontend/assets/js/vendor/jquery.min.js"></script>
    <script src="https://smashinit.co.uk/frontend/assets/js/vendor/jquery-migrate-3.0.0.min.js"></script>
    <!-- Slick Slider -->
     
    <script src="https://smashinit.co.uk/frontend/assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://smashinit.co.uk/frontend/assets/js/bootstrap.min.js"></script>
    <!-- Layer Slider -->
    <script src="https://smashinit.co.uk/frontend/assets/js/greensock.min.js"></script>
    <script src="https://smashinit.co.uk/frontend/assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="https://smashinit.co.uk/frontend/assets/js/layerslider.transitions.js"></script>
    <!-- Counter js -->
    <script src="https://smashinit.co.uk/frontend/assets/js/jquery.counterup.min.js"></script>
    <script src="https://smashinit.co.uk/frontend/assets/js/waypoints.min.js"></script>
    <!-- Date Picker -->
    <script src="https://smashinit.co.uk/frontend/assets/js/jquery.datetimepicker.min.js"></script>
    <!-- Magnific Popup -->
    <script src="https://smashinit.co.uk/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select -->
    <script src="https://smashinit.co.uk/frontend/assets/js/jquery.nice-select.min.js"></script>
    <!-- Custom Carousel -->
    <script src="https://smashinit.co.uk/frontend/assets/js/vscustom-carousel.min.js"></script>
    <!-- Mobile Menu -->
    <script src="https://smashinit.co.uk/frontend/assets/js/vsmenu.min.js"></script>
    <!-- Form Js -->
    <script src="https://smashinit.co.uk/frontend/assets/js/ajax-mail.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
    <!-- Main Js File -->
    <script src="https://smashinit.co.uk/frontend/assets/js/main.js"></script>
    
    <script>
   
    
        function remove_from_cart(item_id)
        {
             $.ajax({
                url: "https://smashinit.co.uk/item-remove-from-cart",
                type: 'GET',
                data: { item_id: item_id},
                success: function (response) {
                    console.log(response);
                   // $('#total').html(response.item_total.toFixed(2));
                    var header_total = '&pound;' + response.total.toFixed(2) + ' / ' + response.total_items + ' ' + response.item_label;
                    var cart_total =  '&pound;' + response.total.toFixed(2);
                    $('#header_total').html(header_total);
                    $('.cart_total').html(cart_total);
                    $('.cart_item_li_'+item_id).remove();
                    window.location.reload();
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
          
        }
    </script>
    
</body>

</html>
