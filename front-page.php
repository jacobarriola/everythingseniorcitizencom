<?php get_header(); ?>
<?php $bgimg = get_field('header_background_image'); ?>
<div class="hero" style="background-image: url(<?php echo $bgimg; ?>)">
	<div class="hero-inner">
    <a href="" class="hero-logo"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png
" alt="Logo Image"></a>
		<div class="hero-copy">
			<h1><?php the_field('site_title'); ?></h1>
			<p><?php the_field('site_description'); ?></p>	
		</div>
    <a href="<?php get_bloginfo('stylesheet_directory')?>/listing"><button><?php the_field('button'); ?> &#8594;</button></a>
	</div>
</div>

<?php get_footer(); ?>