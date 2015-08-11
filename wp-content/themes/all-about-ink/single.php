<?php get_header(); //include header.php ?>

<main class="cf">
	
	<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

			<?php the_post_thumbnail('ink_pic', array('class' => 'ink' )); //featured image (activate in functions.php) ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('cf post'); ?> >
			
			<h2 class="post-title" > 

				<a href="<?php the_permalink(); ?>"> 

					<?php the_title(); ?> 

				</a>

			</h2>

			

			<article class="entry-content cf" >
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
					if( is_single() OR is_page() ){ 
						the_content();
					}else{
						the_excerpt();//shortened content
					}
				?>
			</article>

			<article class="postmeta"> 
				<span class="author"> Posted by: <?php the_author(); ?></span>
				<span class="date"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></span>
				<span class="categories"><?php the_category(); ?></span>
				<span class="tags"><?php the_tags(); ?></span> 
			</article><!-- end postmeta -->
						
		</section><!-- end post -->
		
		<?php endwhile; ?>

		<section class="pagination">
			
			<?php // use the standard wordpress navigation 
			previous_post_link( '%link ', ' %title >'  ); ?>

			<?php next_post_link( '%link ', '< %title '  ); ?>

		</section>
		
		<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main>

<?php get_footer(); //include footer.php ?>