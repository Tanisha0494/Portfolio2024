<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tanisha_Rose_Development
 */

?>
<p class="breadcrumb-wrap"><a href="/" class="breadcrumb"> &larr; Home</a></p>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				trd_posted_on();
				trd_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
    
    <div class="one_half">
        <?php trd_post_thumbnail(); ?>
    </div>

	<div class="entry-content highlight one_half end">
        <h2> <?php echo get_the_title(); ?> Highlight</h2>

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'trd' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);?>
        
        <p><strong>Built at:</strong> <?php the_field('built_at'); ?> </p>
        <p><strong>CMS:</strong> <?php the_field('cms_used'); ?></p>
        <p><strong>Built With:</strong> <?php the_field('built_with'); ?></p>
        <p><strong>Work done:</strong></p>
        <?php
        $work_done = get_field('work_done');
        if( $work_done ): ?>
        <ul class="work-done">
            <?php foreach( $work_done as $work ): ?>
                <li><?php echo $work; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
		<a href="<?php echo esc_attr( get_field('link_to_website') ); ?>" class="btn lt-bl-btn">Visit Website</a>

        <?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'trd' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('.slide-show').slick({
		dots: true,
		arrows: false
	  });
    });
  </script>

	<footer class="entry-footer">
		<?php trd_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
