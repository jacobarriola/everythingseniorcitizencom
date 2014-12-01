<?php get_header( 'home' ); ?>
<?php $bgimg = get_field('header_background_image'); ?>
<section class="hero">
	<section class="hero-inner">
		<section class="hero-copy">
			<h1><?php the_field('site_title'); ?></h1>
			<p><?php the_field('site_description'); ?></p>	
		</section>
    <a href="<?php get_bloginfo('stylesheet_directory')?>/listing"><button><?php the_field('button'); ?> &#8594;</button></a>
	</section>
</section>

<?php get_footer(); ?>