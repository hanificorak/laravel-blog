require('./bootstrap');
window.jQuery  = require('jquery')
window.$  = require('jquery')
require('../template/js/popper.min.js')
require('../template/js/easing.min.js')
require('../template/js/hoverIntent.js')
require('../template/js/superfish.min.js')
require('../template/js/jquery.magnific-popup.min.js')
require('../template/js/jquery.tabs.min.js')
require('../template/js/jquery.nice-select.min.js')
require('../template/js/isotope.pkgd.min.js')
require('../template/js/simple-skillbar.js')
// require('../template/js/waypoints.min.js')
require('../template/js/jquery.counterup.min.js')
require('../template/js/jquery.ajaxchimp.min.js')
require('../template/js/owl.carousel.min.js')
require('../template/js/main.js')

{/* <script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>			
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  <script src="js/easing.min.js"></script>			
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>	
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>	
<script src="js/jquery.tabs.min.js"></script>						
<script src="js/jquery.nice-select.min.js"></script>	
<script src="js/isotope.pkgd.min.js"></script>			
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/simple-skillbar.js"></script>							
<script src="js/owl.carousel.min.js"></script>							
<script src="js/mail-script.js"></script>	
<script src="js/main.js"></script>	 */}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

require('./SiteJS');

