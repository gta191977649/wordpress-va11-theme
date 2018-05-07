<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-md-8 clearfix" role="main">

					
						
						<h1><?php _e("404","wpbootstrap"); ?></h1>
						<p><?php _e("啥都没找到","wpbootstrap"); ?></p>
													
				
			
				
					
					<p><?php _e("你可以尝试搜索一下你要找的东西","wpbootstrap"); ?></p>

					<div class="row">
						<div class="col col-lg-12">
							<?php get_search_form(); ?>
						</div>
					</div>
					
					
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>