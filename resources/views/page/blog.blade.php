@extends('layout.app')
@section('content')
<section class="post-content-area " style="margin-top: 10%">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                @foreach ($blog as $el)
                    <div class="single-post row">
                        <div class="col-lg-3  col-md-3 meta-details">
                            <div class="user-details row">
                                <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Hanifi Çorak</a> <span class="lnr lnr-user"></span></p>
                                <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ $el->KAYIT_ZAMANI }}</a> <span class="lnr lnr-calendar-full"></span></p>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 ">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ $el->KAPAK_PATH }}" alt="">
                            </div>
                            <a class="posts-title" href="/blog/{{ $el->BASLIK_SLUG }}"><h3>{{ $el->BASLIK }}</h3></a>
                            <p class="excert">
                                {{ $el->OZET }}
                            </p>
                            <a href="/blog/{{ $el->BASLIK_SLUG }}" class="primary-btn">Detaylar</a>
                        </div>
                    </div>
                @endforeach
        
                
         
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
    </div>	
</section>
@endsection