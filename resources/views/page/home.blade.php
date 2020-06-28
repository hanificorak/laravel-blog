@extends('layout.app')
@section('content')
<section class="banner-area" style="height: 600px">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 banner-left">
                <h6>{{ $user->GOREV }}</h6>
                <h1>{{ $user->AD }} {{ $user->SOYAD }}</h1>
                <p>
                    {{ $user->KISA_OZGECMIS }}
                </p>
                <a href="#" class="primary-btn text-uppercase">Hakkımda</a>
            </div>
            <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end mbl-d-none">
                <img class="img-fluid" src="/images/hero.png" alt="" style="    margin-bottom: 42%;"> 
            </div>
        </div>
    </div>					
</section>
<section class="home-about-area mt-5">
    <div class="container mb-5">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3 col-md-3 home-about-left ">
                <img class="img-fluid" src="{{ $user->IMAGE }}" alt="" style="border-radius: 50%">
            </div>
            <div class="col-lg-8 col-md-9 home-about-right">
                <h6>Hakkımda</h6>
                <h1 class="text-uppercase">Kısa Özgeçmiş</h1>
                <p>
                    {{ $user->KISA_OZGECMIS }}
                </p>
                <a href="/hakkimda" class="primary-btn text-uppercase">Hakkımda</a>
            </div>
        </div>
    </div>	
</section>
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1>Blog Yazılarım</h1>
                <p>
                   Yazılım alanında öğrendiğim bilgileri, paylaşmak istediğim yazıları blog sayfamda paylaşıyorum. 
                </p>
            </div>
        </div>
        <div class="row">	
           @foreach ($blog as $item)
           <div class="single-recent-blog col-lg-4 col-md-4">
            <div class="thumb">
                <img class="f-img img-fluid mx-auto" src="{{ $item->KAPAK_PATH }}" alt="">	
            </div>
            <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    {{-- <img class="img-fluid" src="/images/logo.png" alt=""> --}}
                    <a href="#"><span>{{ $item->BASLIK }}</span></a>
                </div>
                <div class="meta">
                 {{$item->KAYIT_ZAMANI}}
                   
                </div>
            </div>							
            <a href="/blog/{{ $item->BASLIK_SLUG }}">
                <h4>{{ $item->BASLIK }}</h4>
            </a>
            <p>
                {{ $item->OZET }}
            </p>
        </div>
           @endforeach
    </div>	
</section>
@endsection