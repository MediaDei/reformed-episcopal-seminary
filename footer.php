	<footer>
		<div class="mediadei">
			&copy; <?php echo date("Y"); ?>, ORGANIZATION | <a href="http://www.mediadei.org">Designed and built by Media Dei</a>
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
