<aside class="cf">
<?php if(!dynamic_sidebar('Archive Sidebar')){ ?>
	<section class="widget">
		<?php 
		$type = get_post_type();

		switch ($type) {

			case 'history': ?>
				
				<h1>History</h1>

				<p>The history of Tattoos spans many of thousands of years and they are more popular then every before. Tattoos for many people are for self-expression. But they weren't always viewed as highly as now. Some places such as Japan still frown upon those who have tattoos and try get rid of their jobs. To know more about the history behind tattoos choose one of the categories on the side.</p>

			<?php break; ?>

			<?php case 'types': ?>
				
				<h1>Types</h1>

				<p>The American Academy of Dermatology distinguishes five types of tattoos: traumatic tattoos, also called "natural tattoos", that result from injuries, especially asphalt from road injuries or pencil lead, amateur tattoos, professional tattoos, both via traditional methods and modern tattoo machines, cosmetic tattoos, also known as "permanent makeup", and medical tattoos.</p>

			<?php break; ?>

			<?php case 'processes': ?>

				<h1>Processes</h1>

				<h2>Physiological process of tattooing</h2>

				<p>Tattooing involves the placement of pigment into the skin's dermis, the layer of dermal tissue underlying the epidermis. After initial injection, pigment is dispersed throughout a homogenized damaged layer down through the epidermis and upper dermis, in both of which the presence of foreign material activates the immune system's phagocytes to engulf the pigment particles. As healing proceeds, the damaged epidermis flakes away (eliminating surface pigment) while deeper in the skin granulation tissue forms, which is later converted to connective tissue by collagen growth. This mends the upper dermis, where pigment remains trapped within fibroblasts, ultimately concentrating in a layer just below the dermis/epidermis boundary. Its presence there is stable, but in the long term (decades) the pigment tends to migrate deeper into the dermis, accounting for the degraded detail of old tattoos.</p>

			<?php break; ?>

			<?php case 'machines': ?>
				
				<h1>Tattoo Machines</h1>

				<p>A tattoo machine is a hand-held device generally used to create a tattoo, a permanent marking of the skin with indelible ink. Modern tattoo machines use electromagnetic coils to move an armature bar up and down. Connected to the armature bar is a barred needle grouping that pushes ink into the skin. Tattoo artists generally use the term "machine", or even "iron", to refer to their equipment. The word "gun" is often used but many tattoo professionals dislike it. In addition to "coiled" tattoo machine there are also Rotary Tattoo Machines, which are powered by regulated motors rather than electromagnetic coils.</p>

			<?php break; ?>

			<?php case 'styles': ?>

				<h1>Styles</h1>

				<p>Just like any art form, tattoos can be expressed as line drawings, paintings, cartoons, a simplified or exagerated portrait (caricatures) or even as airbrushed creations. Tattoos may be classified into distinct styles, much as painting may be classified into the styles of impressionism, realism, cubism, etc. Each style incorporates specific artistic elements which many are not familiar with. So here’s a look at tattoos, not as a form of rebellion, a health hazard, or a display of “coolness,” but as an art form.</p>

			<?php break; ?>
			
			<?php default: ?>

				 <h1> Something went wrong check your code!</h1>

			<?php break; }?>
		
	</section>
<?php }  ?>
</aside>