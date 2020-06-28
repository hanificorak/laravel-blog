@extends('layout.app')
@section('content')
<section class="post-content-area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ $arr->KAPAK_PATH }}" alt="">
                        </div>									
                    </div>
                    <div class="col-lg-3  col-md-3 meta-details">
                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Hanifi Çorak</a> <span class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ $arr->KAYIT_ZAMANI }}</a> <span class="lnr lnr-calendar-full"></span></p>
                            <ul class="social-links col-lg-12 col-md-12 col-6">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>																				
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <h3 class="mt-20 mb-20">{{ $arr->BASLIK }}</h3>
                        <p class="excert">
                            {{ $arr->OZET }}
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <div class="quotes">
                            {!! $arr->ICERIK !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget user-info-widget">
                        <img src="/images/about.jpg" alt="" style="width: 135px;border-radius: 50%;">
                        <a href="#"><h4>Hanifi Çorak</h4></a>
                        <p>
                            Full Stack Web Developer
                        </p>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <p>
                            2017 yılında girdiğim yazılım sektörüne projeler geliştirerek ve yeni teknolojilerden faydalanarak kendimi geliştiriyorum ve aynı zamanda öğrendiğim bilgileri blog sayfamda paylaşıyorum.
                        </p>
                    </div>
            </div>
        </div>
    </div>	
</section>
@endsection