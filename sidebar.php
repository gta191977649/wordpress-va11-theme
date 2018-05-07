				<div class="col-md-3 text-center">
					<div class="list-group sidebar">
					<button type="button" class="btn btn-primary visible-xs" data-toggle="collapse" data-target="#narrow-results">展開</button>
					<div id="narrow-results" class="navbar-collapse collapse">
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
							
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>
					</div>
					</div>

				</div>