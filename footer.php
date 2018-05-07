
		
		</div> <!-- end #container -->
		
			<footer role="contentinfo">
				<div class="container text-center">
					
					 
					  <div id="widget-footer" class="clearfix row">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
						<?php endif; ?>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
						<?php endif; ?>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
						<?php endif; ?>
					  </div>
						
						<nav class="clearfix">
							<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
						</nav>
						
						
				
						<p >&copy; <?php bloginfo('name'); ?> 2017 | <i class="fa fa-twitter" aria-hidden="true"></i> プロジェクトスパルウ WEB解决方案 | Theme: Episodes</p>
					
				
				</div>
			</footer> <!-- end footer -->		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<audio id='audio_hover' src='https://api.project-sparrow.ml/mouse_hover.ogg'/>
		<audio id='audio_click' src='https://api.project-sparrow.ml/buttonclick.ogg'/>
	</body>

</html>