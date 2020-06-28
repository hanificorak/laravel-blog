<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Hakkımda</h4>
                    <p>
                        {{ $user->KISA_OZGECMIS }}
                    </p>
                    <p class="footer-text">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm Hakları Saklıdır - {{ $user->AD }} {{ $user->SOYAD }}
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h4>Takip Edin!</h4>
                    <p>Sosyal Medya Hesaplarım</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="{{ $user->FACEBOOK_URL }}"><i class="fa fa-facebook"></i></a>
                        <a href="{{ $user->TWITTER_URL }}"><i class="fa fa-twitter"></i></a>
                        <a href="{{ $user->INSTAGRAM_URL }}"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>
