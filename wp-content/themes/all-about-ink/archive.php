<?php get_header(); //include header.php ?>

<?php get_sidebar('archive') ?>

<main class="cf">
	
	<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

	<a href="<?php the_permalink(); ?>">

		<figure id="post-<?php the_ID(); ?>" <?php post_class('cf effect-steve'); ?> >
			
			<?php the_post_thumbnail('ink_pic', array('class' => 'ink' )); //featured image (activate in functions.php) ?>
			
			<figcaption>
			
				<h2 class="post-title" > <?php the_title(); ?> </h2>

				<article class="entry-content cf" >

					<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
						if( is_single() OR is_page() ){ 
							the_content();
						}else{
							the_excerpt();//shortened content
						}
					?>

				</article>
			</figcaption>
		</figure>
	</a><!-- end post -->
		
		<?php endwhile; ?>

		
		<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main>



<?php get_footer(); //include footer.php ?>