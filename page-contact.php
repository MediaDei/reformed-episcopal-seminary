<?php get_header(); ?>
<section class="contact">
  <div class="connect">
    <h2 class="connect">Connect with us</h2>
    <div class="grid">
      <div class="grid-1-3">
        <div class="contact-item">
          <p class="type">Email</p>
          <div class="icon"><a id="email-button" class="icon-email fa fa-envelope"></a></div>
          <script type="text/javascript">
            var $ = jQuery.noConflict();
            $(document).ready(function() {
              var e = "admissions"; // replace with your email username
              var t = "reseminary"; // replace with your email provider
              var n = ".edu"; // replace with your email provider TLD
              var r = "mailto:" + e + '@' + t + n; //href
              $('#hidden-email-admissions').attr('href',r).html(e + '@'+t+n);
              $('#email-button').attr('href',r);
            });
          </script>
          <a class="text-line" id="hidden-email-admissions" href="#">Please enable Javascript to view</a>
          <script type="text/javascript">
            var $ = jQuery.noConflict();
            $(document).ready(function() {
              var e = "registrar"; // replace with your email username
              var t = "reseminary"; // replace with your email provider
              var n = ".edu"; // replace with your email provider TLD
              var r = "mailto:" + e + '@' + t + n; //href
              $('#hidden-email-registrar').attr('href',r).html(e + '@'+t+n);
            });
          </script>
          <a class="text-line" id="hidden-email-registrar" href="#">Please enable Javascript to view</a>
        </div>
        <div class="background-bar left"></div>
      </div>

      <div class="grid-1-3">
        <div class="contact-item">
          <p class="type">Phone</p>
          <div class="icon"><a id="phone-button" class="icon-phone fa fa-phone-square"></a></div>
          <script type="text/javascript">
            var $ = jQuery.noConflict();
            $(document).ready(function() {
              var a = "Phone:"; // extension if needed or type of #
              var e = "(610)"; // area code
              var t = "292"; // next 3 digits
              var n = "9852"; // final 4 digits
              var r = "tel:" + e + t + n; //href
              $('#hidden-phone-main').attr('href',r).html(a + ' ' + e + ' ' + t + ' ' + n);
              $('#phone-button').attr('href',r);
            });
          </script>
          <a class="text-line" id="hidden-phone-main" href="#">Please enable Javascript to view</a> <!--need to add from afl-->
          <script type="text/javascript">
            var $ = jQuery.noConflict();
            $(document).ready(function() {
              var a = "Fax:"; // extension if needed or type of #
              var e = "(610)"; // area code
              var t = "292"; // next 3 digits
              var n = "9853"; // final 4 digits
              var r = "tel:" + e + t + n; //href
              $('#hidden-phone-fax').attr('href',r).html(a + ' ' + e + ' ' + t + ' ' + n);
            });
          </script>
          <a class="text-line" id="hidden-phone-fax" href="#">Please enable Javascript to view</a> <!--need to add from afl-->
        </div>
        <div class="background-bar center"></div>
      </div>

      <div class="grid-1-3">
        <div class="contact-item">
          <p class="type">Social</p>
          <div class="icon"><a class="icon-fb fa fa-facebook-square" href="https://www.facebook.com/reseminary/"></a></div>
          <a class="text-line" href="https://www.facebook.com/reseminary/">facebook.com/reseminary</a>
          <a class="text-line" href="https://www.twitter.com/reseminary/">twitter.com/reseminary</a>
        </div>
        <div class="background-bar right"></div>
      </div>
    </div>
  </div>
  <div class="address">
    <h2 class="address">Address</h2>
    <div class="building-photo"></div>
    <div class="address-box">
      <p>Reformed Episcopal Seminary</p>
      <address>826 Second Avenue<br>Blue Bell, PA, 19422</address>
    </div>
  </div>
  <div class="bottom-photo"></div>
</section>
<?php get_footer(); ?>
