@extends('layout.guest')

@section('guest')
<section class="why-choose section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Offer Different Services To Improve Your Health</h2>
                    <img src="img/section-img.png" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <h3>Who We Are</h3>
                    <p>{!! $data->description !!}</p>
                </div>
                <!-- End Choose Left -->
            </div>
        </div>
    </div>
</section>
@endsection