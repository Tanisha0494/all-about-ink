
<?php get_header(); //include header.php ?>

<?php get_sidebar('home'); ?>
<main class="cf">
	
		<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >


			<?php the_post_thumbnail('thumbnail', array('class' => 'thumb' )); //featured image (activate in functions.php) ?>

			<article class="entry-content cf" >
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
					if( is_single() OR is_page() ){ 
						the_content();
					}else{
						the_excerpt();//shortened content
					}
				?>
				</article>

						
		</section><!-- end post -->
		
		<?php endwhile; ?>


	<?php endif;  //end THE LOOP ?>

	</main>



<?php get_footer(); //include footer.php ?>