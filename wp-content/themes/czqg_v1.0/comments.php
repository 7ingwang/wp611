<?php
/**
 * The default template for comments
 */
if (post_password_required()) :
    ?>
    <p class="nopassword"><?php esc_html_e('This post is password protected. Enter the password to view any comments.', 'CLOUDPRESS'); ?></p>
    <?php
    return;
endif;

// CLOUDPRESS comment part
if (!function_exists('CLOUDPRESS_comments')):

    function CLOUDPRESS_comments($comment, $args, $depth) {

        //get theme data
        global $comment_data;

        //translations
        $leave_reply = isset($comment_data['translation_reply_to_coment']) ? $comment_data['translation_reply_to_coment'] : esc_html__('Reply', 'CLOUDPRESS');
        ?>
        <!--Comment-->
        <div <?php comment_class('comment-box'); ?> id="comment-<?php comment_ID(); ?>">
            <a class="pull-left-comment" href="<?php the_author_meta('user_url'); ?>">
                <?php echo get_avatar($comment, 100, null, 'comments user', array('class' => array('img-fluid comment-img'))); ?>
            </a>
            <div class="media-body">
                <div class="comment-detail">
                    <h6 class="comment-detail-title"><?php esc_html(comment_author()); ?><time class="comment-date"><?php printf(esc_html__('%1$s  %2$s', 'CLOUDPRESS'), esc_html(get_comment_date()), esc_html(get_comment_time())); ?></time></h6>
                </div>
                </div>
                <div class="comment">
                    <?php comment_text(); ?>

                    <?php edit_comment_link(esc_html__('Edit', 'CLOUDPRESS'), '<p class="edit-link">', '</p>'); ?>

                    <?php if ($comment->comment_approved == '0') : ?>
                        <em class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'CLOUDPRESS'); ?></em><br/>
                    <?php endif; ?>

                    <div class="reply text-right">
                        <?php comment_reply_link(array_merge($args, array('reply_text' => $leave_reply, 'depth' => $depth, 'max_depth' => $args['max_depth'], 'per_page' => $args['per_page']))) ?>
                    </div>

                </div>	
            
        </div>
        <!--/Comment-->
        <?php
    }

endif;
?>

<?php if (have_comments()): ?>				
    <!--Comment Section-->
    <article class="comment-section">
        <div class="comment-title text-center">
            <h5>
                <?php comments_number(esc_html__('No comments so far', 'CLOUDPRESS'), esc_html__('1 comment so far', 'CLOUDPRESS'), esc_html__('% Comments', 'CLOUDPRESS')); ?>
            </h5>

        </div>				
        <?php wp_list_comments(array('callback' => 'CLOUDPRESS_comments')); ?>			
    </article>
    <!--/Comment Section-->
<?php endif; ?>

<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <nav id="comment-nav-below">
        <h1 class="assistive-text"><?php esc_html_e('Comment navigation', 'CLOUDPRESS'); ?></h1>
        <div class="nav-previous"><?php previous_comments_link(esc_html__('&larr; Older Comments', 'CLOUDPRESS')); ?></div>
        <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments &rarr;', 'CLOUDPRESS')); ?></div>
    </nav>
<?php endif; ?>

<?php if (!comments_open() && get_comments_number()) : ?>
    <p class="nocomments"><?php esc_html_e('Comments are closed.', 'CLOUDPRESS'); ?></p>
<?php endif; ?>


<?php
if ('open' == $post->comment_status) :
    if (get_option('comment_registration') && isset($user_ID)):
        ?>
        <p><?php
            echo sprintf(wp_kses(
                            /* translators: %s is Link to login */
                            __('You must be <a href="%s">logged in</a> to post a comment.', 'CLOUDPRESS'),
                            array(
                                'a' => array(
                                    'href' => array(),
                                ),
                            )
                    ), esc_url(site_url('wp-login.php')) . '?redirect_to=' . urlencode(esc_url(get_permalink())));
            ?></p>
        <?php
    else:

        echo '<article class="comment-form-section">';

        $CLOUDPRESS_comment_fields = array(
            'author' => '<div class="col-lg-4 col-xs-12"><input type="text" name="author" id="author" placeholder="' . esc_attr__('Name', 'CLOUDPRESS') . '"></div>',
            'email' => '<div class="col-lg-4 col-xs-12"><input type="text" name="email" id="email" placeholder="' . esc_attr__('Email', 'CLOUDPRESS') . '"></div>',
            'website' => '<div class="col-lg-4 col-xs-12"><input type="text" name="website" id="website" placeholder="' . esc_attr__('Website', 'CLOUDPRESS') . '"></div>',
        );

        function CLOUDPRESS_fields($CLOUDPRESS_comment_fields) {
            return $CLOUDPRESS_comment_fields;
        }

        add_filter('comment_form_default_fields', 'CLOUDPRESS_fields');

        $CLOUDPRESS_defaults = array(
            'fields' => apply_filters('comment_form_default_fields', $CLOUDPRESS_comment_fields),
            'comment_field' => '<div class="col-lg-12"><textarea id="comments" name="comment" placeholder="' . esc_attr__('Message', 'CLOUDPRESS') . '" rows="5"></textarea></div>',
            'logged_in_as' => '<p class="blog-post-info-detail">' . esc_html__("Logged in as", 'CLOUDPRESS') . ' ' . '<a href="' . esc_url(admin_url('profile.php')) . '">' . $user_identity . '</a>' . ' <a href="' . esc_url(wp_logout_url(get_permalink())) . '" title="' . esc_attr__('Log out of this account', 'CLOUDPRESS') . '">' . esc_html__("Logout", 'CLOUDPRESS') . '</a>' . '</p>',
            'id_submit' => 'blogdetail-btn',
            'label_submit' => esc_html__('Send Message', 'CLOUDPRESS'),
            'class_submit' => 'more-link btn-small btn-animate dark',
            'comment_notes_after' => '',
            'comment_notes_before' => '',
            'title_reply' => '<div class="comment-title"><h5>' . esc_html__('Leave a Reply', 'CLOUDPRESS') . '</h5></div>',
            'id_form' => 'commentform'
        );
        ob_start();
        comment_form($CLOUDPRESS_defaults);
        echo str_replace('class="comment-form"', 'class="form-inline"', ob_get_clean());

        echo '</article>';

    endif;
endif;
?>