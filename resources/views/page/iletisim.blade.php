@extends('layout.app')
@section('content')
<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>{{ $user->MAIL }}</h5>
                    </div>
                </div>														
            </div>
            <div class="col-lg-8">
                <form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
                    <div class="row">	
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Adınız ve Soyadınız" class="common-input mb-20 form-control" required=""  type="text">
                        
                            <input name="email" placeholder="Mail Adresiniz" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"  class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Konu" class="common-input mb-20 form-control" required="" type="text">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Mesajınız"  required=""></textarea>				
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button type="button" class="genric-btn primary contact-send" style="float: right;">Mesajı Gönder</button>											
                        </div>
                    </div>
                </form>	
            </div>
        </div>
    </div>	
</section>
@endsection