<?php

?>
<footer id="colophon" class="site-footer">
	<div class="container-fluid">			 
    <div class="row fatfooter" role="complementary">
      <div class="col-md-2 mobile-hidden1 first quarter left widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
      </div><!-- .first .widget-area -->
 
      <div class="col-md-2 col-2nd1 mobile-hidden second quarter widget-area">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
      </div><!-- .second .widget-area -->
 
      <div class="col-md-4 col-3rd1 third quarter widget-area">
        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
      </div><!-- .third .widget-area -->
 
      <div class="col-md-4 fourth quarter right widget-area">
        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
      </div><!-- .fourth .widget-area -->
    </div><!-- #fatfooter -->						
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<div class="footer-credit site-footer">
  <ul class="social-icons mt-0 p-4 desktop-hidden">
    <li><a href="https://www.instagram.com/elementsbarrefit/" target="_blank"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://www.facebook.com/elementsbarrefit/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCs6FPRZ6O0HvtoLYwJ7_NSg" target="_blank"><i class="fab fa-youtube"></i></a></li>
  </ul>
  <p>© COPYRIGHT ELEMENTS HOLDINGS <?php echo date("Y"); ?> | <a href="https://ipstudio.co" style="color: #fff; font-weight: bold;">by IPSTUDIO</a></p>
</div>

</div><!-- #page -->


<script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5239921618837213"
     crossorigin="anonymous"></script>

</script>


<!-- Modal -->
<div class="modal fade" id="studioModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body demo">
		  <h5 class="modal-title"><?php echo get_field('book_modal_title', 'option'); ?></h5>
		  <ul>
			  <?php 
			  $location_button = get_field('book_modal_buttons', 'option');
			  foreach($location_button as $location): ?>
			  <li><a class="btn btn-outline-primary text-dark location-choose" href="<?php echo $location['button_url']; ?>"><?php echo $location['button_text']; ?></a></li>
			  <?php endforeach; ?>
		  </ul>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="buyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body demo">
		  <h5 class="modal-title"><?php echo get_field('buy_modal_title', 'option'); ?></h5>
		  <ul>
			  <?php 
			  $location_button = get_field('buy_modal_buttons', 'option');
			  foreach($location_button as $location): ?>
			  <li><a class="btn btn-outline-primary text-dark location-choose" href="<?php echo $location['button_url']; ?>"><?php echo $location['button_text']; ?></a></li>
			  <?php endforeach; ?>
		  </ul>
      </div>
    </div>
  </div>
</div>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5239921618837213"
     crossorigin="anonymous"></script>































<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-51451560-be33-4972-a4d3-41d0f1568d25"></div>
  
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-ccd5e994-941e-424a-b1c1-576d2197db91"></div>

<script src="https://api.callwidget.co/embed?iID=eyJpdiI6ImIyaWFtdGlQeEhISEpDVXdyVHVrMXc9PSIsInZhbHVlIjoiRGdoXC81TmNYOWpTOXc2eUJLdXVqNHc9PSIsIm1hYyI6Ijk5NmM5MTA2ZTQ1Y2U4MGQ4MzYzYTEzZWQ2MmM4NDYxNDU3NzM4ZmI1MjUyM2JkZTM3ODg1YWU4NzA4NDZjOWYifQ=="></script>








<?php wp_footer() ?>

</body>
</html>
