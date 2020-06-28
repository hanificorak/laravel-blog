@extends('layout.app')
@section('content')
<section class="about-banner">
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Hakkımda				
                </h1>	
                <p class="text-white link-nav"><a href="/">Ana Sayfa </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> Hakkımda</a></p>
            </div>	
        </div>
    </div>
</section>
<section class="home-about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 home-about-left">
                <img class="img-fluid" src="/images/about.jpg" alt="">
            </div>
            <div class="col-lg-5 col-md-6 home-about-right">
                <h6>Hakkımda</h6>
                <h1 class="text-uppercase">Hakkımda</h1>
                <p>
                   {!! $user->HAKKIMDA !!}
                </p>
            </div>
        
        </div>
    </div>	
</section>
@endsection