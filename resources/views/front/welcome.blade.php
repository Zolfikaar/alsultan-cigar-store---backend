@extends('front.layouts.app')

@section('content')
<!-- hero section -->
<div class="hero">
    <div class="hero-bg">
        <div class="blur-filter"></div>
        <img src="{{ asset('assets/imgs/valiant-made--KJYZPKYdDM-unsplash.jpg') }}" alt="">
    </div>

    <div class="hero-caption">
        <div class="container">
            <h1>اهلا بكم في متجر السلطان للسيجار</h1>
            <p>
                متجر السيجار الاول في العراق حيث تجدون اجود انواع السيجار الكوبي و غير الكوبي و مختلف منتجات
                التبوغ من ارقى المناشئ العالمية
            </p>
            <a href="shop.html"><button type="button" class="btn btn-light">تسوق الأن </button></a>
        </div>
    </div>
</div>

<!-- Featured Products -->
<section id="featured" class=" my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h1>منتجاتنا</h1>
        <hr class="mx-auto">
        <p>هذه بعض منتجاتنا المميزة التي تناسب مختلف الاذواق</p>
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img src="{{ asset('assets/imgs/sml-shop/2h-media-DshsYq97xfU-unsplash.jpg') }}" class="img-fluid mb-3">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">كوهيبا بلو</h5>
            <h4 class="p-price">$16.00</h4>
            <button class="buy-btn">أضف للسلة</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img src="{{ asset('assets/imgs/sml-shop/valiant-made-E7j41pR4xJg-unsplash.jpg') }}" class="img-fluid mb-3">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">بوليفار ليبرتادور</h5>
            <h4 class="p-price">$18.00</h4>
            <button class="buy-btn">أضف للسلة</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img src="{{ asset('assets/imgs/sml-shop/2h-media-DshsYq97xfU-unsplash.jpg') }}" class="img-fluid mb-3">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">مونتيكرستو</h5>
            <h4 class="p-price">$17.50</h4>
            <button class="buy-btn">أضف للسلة</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img src="{{ asset('assets/imgs/sml-shop/valiant-made-E7j41pR4xJg-unsplash.jpg') }}" class="img-fluid mb-3">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">دافيدوف</h5>
            <h4 class="p-price">$22.00</h4>
            <button class="buy-btn">أضف للسلة</button>
        </div>
    </div>
</section>

<!-- Start Testimonials Section -->
<div class=" testimonials">

    <div class="container text-center mt-5 py-5">
        <h1>اراء الزبائن</h1>
        <hr class="mx-auto">
        <p>هذه بعض اراء زبائننا المميزين</p>
    </div>

    <div class="clients-cards">
        <div class="client-card">
            <img class="client-img" src="{{ asset('assets/imgs/portriat/Allan_ODette2.jpg') }}" alt="Emily R.">
            <p class="client-msg">أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس

                أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت</p>
            <h4 class="client-name">احمد الدراجي</h4>

        </div>
        <div class="client-card">
            <img class="client-img" src="{{ asset('assets/imgs/portriat/hmcg.jpg') }}" alt="Thomas S.">
            <p class="client-msg">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود
                تيمبور

                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد

            </p>
            <h4 class="client-name">باسم مختار </h4>

        </div>
        <div class="client-card">
            <img class="client-img" src="{{ asset('assets/imgs/portriat/Headshot_010.jpg') }}" alt="Jennie F.">
            <p class="client-msg">سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم

                دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينتوري فيرأتاتيس ايت</p>
            <h4 class="client-name">امين القيسي</h4>

        </div>
    </div>
</div>
<!-- End Testimonials Section -->


<div class="sec">
    <div class="container">
        <h1 class="text-center">تواصل معنا</h1>
    </div>
</div>
@endsection
