<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>



<div class="container clearfix">

	<nav class="menu">
		<ul class="menu">
			<li><a href="#">HOME</a></li>
			<li><a href="#">WORK</a></li>
			<img src="./wp-content/themes/theme-hackeryou/images/sylvia_logo_trimmed.png" alt="">
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">BLOG</a></li>
		</ul>
	</nav>
	<div class="menu nav__mobile">
		<div class="menu__trigger">
			<div class="menu__trigger-line"></div>
		</div>
		<div class="logo__mobile">
			<img src="./wp-content/themes/theme-hackeryou/images/sylvia_logo_trimmed.png" alt="">		
		</div>
	</div>

<ul id="menu__mobile" class="menu__mobile main-nav-scrolled">
	<li><a href="#">HOME</a></li>
	<li><a href="#">WORK</a></li>
	<li><a href="#">ABOUT</a></li>
	<li><a href="#">BLOG</a></li>
</ul>
	<div class="work">

		<div class="work_container myWork">
			<h2>My Work</h2>
		</div>
		

		
		<!-- // practice posts starts here -->
		<?php $workQuery = new WP_Query(
			array(
				'posts_per_page' => 6,
				'post_type' => 'portfolio'
				)
			); ?>
		<?php if ($workQuery->have_posts() ) : ?>
			<?php while ( $workQuery->have_posts() ) : $workQuery->the_post(); ?>
				
				
				<div class="work_container clear-left">
					<a href="<?php the_field('website_url'); ?>" target="_blank">
						<div class="work_square">
							<?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
							
						</div>
						<div class="bottom_square">
							<h2><?php the_title(); ?></h2>
							<h3><?php the_field('short_desc'); ?></h3>	
						</div>
					</a>
				</div>

				
			<?php endwhile;
		else :
			echo wpautop( 'Sorry, no posts were found' );
		endif;
		wp_reset_postdata();
		?>



	</div> <!-- work ends -->

</div> <!-- /.container -->

<!-- .about -->
<div class="about">
	<div class="profile_img">
		<img src="./wp-content/themes/theme-hackeryou/images/sylvia_portrait.jpg" alt="">
	</div>
	<h2>About Me</h2>
	<p>My name is Sylvia Nguyen and I am a Toronto-based Front-end Developer specializing in designing and building visually compelling and beautifully functional websites. My communications background allows me to apply meaningful and creative detailing across my various works along with a great interest to create an intuitive user experience.</p>
</div>

<div class="blog">
	<div class="container">
	<h2 class="blog_heading">From the Blog</h2>
	<div class="blog_line"></div>

	<?php $blogQuery = new WP_Query(
		array(
			'posts_per_page' => 3,
			'post_type' => 'blog'
			)
		); ?>
	<?php if ($blogQuery->have_posts() ) : ?>
		<?php while ( $blogQuery->have_posts() ) : $blogQuery->the_post(); ?>
			
			
			<div class="blog_container">
				<a href="<?php the_field('website_url'); ?>" target="_blank">
					<div class="blog_square">
						<?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
					</div>
					<div class="bottom_blog_square">
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?>
						
			
						</p>

					</div>

				</a>

			</div>

			
		<?php endwhile;
	else :
		echo wpautop( 'Sorry, no posts were found' );
	endif;
	wp_reset_postdata();
	?>

	</div> <!-- /.about -->

<!-- .form_section -->
<div class="form_section">
	<div class="container">
		<h2>Say Hello</h2>
		<p>I’m always connecting with new people who sometimes tell me about all the coolest mexican restaurants and coffee shops in the city. Know of any? If you’re not into either of those two things, I’d still love to hear from you!</p>
		<form>
			<input type="text" name="fullname" placeholder="Full Name">
			<br>
			<input type="text" name="email" placeholder="Email Address">
			<br>
			<textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
			<br>
			<input type="submit" value="Submit">
		</form>


	</div>



</div><!-- /.form_section -->
<?php get_footer(); ?>
</div>




