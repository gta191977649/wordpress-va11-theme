<?php
/*
The comments page for Bones
*/

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
  	<div class="alert alert-info"><?php _e("This post is password protected. Enter the password to view comments.","wpbootstrap"); ?></div>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->
<div class="bt-comments">
<?php if ( have_comments() ) : ?>
	<?php if ( ! empty($comments_by_type['comment']) ) : ?>
	<p>&#8220;<?php the_title(); ?>&#8221; 共 <?php comments_number( '無評論', '1 條評論', '% 條評論');?> </p>

	<div id="comment-nav">
		<ul>
	  		<li><?php previous_comments_link( __("Older comments","wpbootstrap") ) ?></li>
	  		<li><?php next_comments_link( __("Newer comments","wpbootstrap") ) ?></li>
	 	</ul>
	</div>
	
	
	<?php wp_list_comments('type=comment&callback=wp_bootstrap_comments'); ?>
	
	
	<?php endif; ?>
	
	<?php if ( ! empty($comments_by_type['pings']) ) : ?>
		<h3 id="pings">Trackbacks/Pingbacks</h3>
		
		<ul class="pinglist">
			<?php wp_list_comments('type=pings&callback=list_pings'); ?>
		</ul>
	<?php endif; ?>
	
	<div id="comment-nav">
		<ul class="clearfix">
	  		<li><?php previous_comments_link( __("Older comments","wpbootstrap") ) ?></li>
	  		<li><?php next_comments_link( __("Newer comments","wpbootstrap") ) ?></li>
		</ul>
	</div>

	<?php if ( ! comments_open() ) : ?>
		<p class="alert alert-info"><?php _e("討論貼已經關閉","wpbootstrap"); ?>.</p>
	<?php endif; ?>

<?php endif; ?>

</div>
<?php if ( comments_open() ) : ?>

	<?php /*$comment_args = array( 'title_reply'=>'Got Something To Say:',

'fields' => apply_filters( 'comment_form_default_fields', array(

'author' => '<div class="input-group">' . '<label for="author">' . __( '昵称' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .

        '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',   

    'email'  => '<div class="input-group">' .

                '<label for="email">' . __( '邮箱' ) . '</label> ' .

                ( $req ? '<span>*</span>' : '' ) .
				
				
                '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</div>',

    'url'    => '' ) ),
				

    'comment_field' => '<div class="input-group">' .
				
                '<label for="comment">' . __( '留言' ) . '</label>' .

                '<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .

                '</div>',

    'comment_notes_after' => '',
	'label_submit' => __('提交'),

);
*/
comment_form(); ?>

<?php endif; // if you delete this the sky will fall on your head ?>
