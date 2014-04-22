<div id="comments">

<?php

//////////////////////
// DISPLAY COMMENTS //
//////////////////////

?>

<?php // So no one can just go to comments.php ?>
<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  
<?php endif; ?>  

<?php // DISPLAYING THE COMMENTS ?>
<?php if($comments): ?>  

	<?php // The number of comments ?>
	<h4 class="single-comments-counter"><?php comments_number('0','1','%'); ?> Comments</h4>
	<ul class="comments-list">
    <?php foreach ($comments as $comment) : ?>  
    	<li class="comments-item" id="comment-<?php comment_id(); ?>">
	        <?php if ($comment->comment_approved == '0') : ?>  
	        	<p class="unapproved-comment">Your comment is waiting for approval</p>
	        <?php endif; ?>  
            <div class="comments-header-container">
    	        <?php echo get_avatar(get_comment_author_email(), 22); ?>
    	        <h4 class="comment-author"><?php comment_author(); ?></h4>
    	        <p class="comment-date"><?php comment_date(); ?></p>
            </div><!-- end .comments-header-container -->
	        <div class="comment-text-container"><?php comment_text(); ?></div>
	        <p class="edit-comment-link"><?php edit_comment_link('edit'); ?> </p>
        </li>
    <?php endforeach; ?>  
	</ul>
<?php else : ?>  
	<p>No comments</p>
<?php endif; ?> 

<?php 

//////////////
// THE FORM // 
//////////////

?>

<?php if(comments_open()) : ?>  
    <?php if(get_option('comment_registration') && !$user_ID) : ?>  
    	<!--Need to login dude!-->
    	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>  
    <div class="add-comment-container">
        <h2 class="subheader add-comment-header">Say Something</h3>
    	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">  

        <?php if($user_ID) : ?>  
        	<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

        <?php else : ?>  
        	<p class="comment-input"><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />  
                <label for="author"><small>Name <?php if($req) echo "<span class='required'>(required)</span>"; ?></small></label>
            </p>  
            <p class="comment-input">
            	<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />  
                <label for="email"><small>Email (will not be published) <?php if($req) echo "<span class='required'>(required)</span>"; ?></small></label>
            </p>  
            <p class="comment-input">
            	<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />  
                <label for="url"><small>Website</small></label>
            </p>  

        <?php endif; ?>  

        <p class="comment-input"><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>  
        <p><input class="comment-submit" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />  
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
        <?php do_action('comment_form', $post->ID); ?>  

    	</form>
    </div><!--end add-comments-container -->
    <?php endif; ?>  
<?php else : ?>  
	<!-- Comments must be closed... :( -->
<?php endif; ?>  

</div><!-- end #comments -->
