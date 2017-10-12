	<footer>
    <div class="top grid">
      <div class="grid-1-3 left">
        <address>
          <a class="icon email-icon fa fa-envelope-o" href="<?php echo get_site_url() ?>/contact/"></a>
          <script type="text/javascript">
            var $ = jQuery.noConflict();
            $(document).ready(function() {
              var e = "admissions"; // replace with your email username
              var t = "reseminary"; // replace with your email provider
              var n = ".edu"; // replace with your email provider TLD
              var r = "mailto:" + e + '@' + t + n; //href
              $('#hidden-email-footer').attr('href',r).html(e + '@'+t+n);
            });
          </script>
          <a class="email" id="hidden-email-footer" href="#">Please enable Javascript to view</a> <!--need to add from afl-->
        </address>
        <address>
          <a class="icon phone-icon fa fa-phone" href="<?php echo get_site_url() ?>/contact/"></a>
          <script type="text/javascript">
            var $ = jQuery.noConflict();
            $(document).ready(function() {
              var a = "1"; // extension if needed
              var e = "(610)"; // area code
              var t = "292"; // next 3 digits
              var n = "9852"; // final 4 digits
              var r = "tel:" + e + t + n; //href
              $('#hidden-phone-footer').attr('href',r).html(e + ' ' + t + ' ' + n);
            });
          </script>
          <a class="phone" id="hidden-phone-footer" href="#">Please enable Javascript to view</a> <!--need to add from afl-->
        </address>
      </div>
      <div class="grid-1-3 center">
        <p class="organization">Reformed Episcopal<br>Seminary</p>
        <address>826 Second Avenue<br> Blue Bell, PA 19422</address>
      </div>
      <div class="grid-1-3 right">
        <div class="social-media">
          <a class="icon facebook-icon fa fa-facebook" href="https://www.facebook.com/RESeminary/"></a>
          <a href="https://www.facebook.com/RESeminary/" class="social fb">facebook.com/reseminary</a>
        </div>
        <div class="social-media">
          <a class="icon twitter-icon fa fa-twitter" href="#"></a>
          <a href="#" class="social twitter">twitter.com/reseminary</a>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="affiliation grid">
        <div class="grid-1-2">
          <a id="rec" href="http://www.recus.org/">Reformed Episcopal Church</a>
        </div>
        <div class="grid-1-2">
          <a id="acna" href="http://www.anglicanchurch.net/">Anglican Church in North America</a>
        </div>
      </div>
      
      <div class="mediadei">
        Copyright &copy; <?php echo date("Y"); ?>, Reformed Episcopal Seminary<br>
        <a href="http://www.mediadei.org">Designed and built by Media Dei</a>
      </div>
    </div>
    <script type="text/javascript">
      //jQuery Count-Up Script
      jQuery(function ($) {  
        $('.counter').each(function() {
          var $this = $(this),
              countTo = $this.attr('data-count');
          $({ countNum: $this.text()}).animate({
            countNum: countTo
          },
          {
            duration: 4000,
            easing:'linear',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
              //alert('finished');
            }
          });  
        });
      });
    </script>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
