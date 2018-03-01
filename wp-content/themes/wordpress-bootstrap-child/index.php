<?php get_header(); ?>
				<div class="container">
			<div id="content" class="clearfix row">
				<div class="col-md-12">
				<div id="main" class="col-md-12 main-ltgov main-ltgov-news clearfix" role="main">
					<div class="page-header"><h1>2015 Press Releases</h1></div>
					<div class="col-md-8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('margin-bottom-5 clearfix'); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<p class="meta"><div class="date"><?php
							  // If we are in a loop we can get the post ID easily
							  $date = get_post_meta( get_the_ID(), 'news_date', true );
							  echo $date;
							  // To get the price of a random product we will need to know the ID
							  $date = get_post_meta( $news_id, 'news_date', true );
							  echo $date;
							?> </div>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</p>
							<!-- <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p> -->
							
						
						</header> <!-- end article header -->
					
				
						<!-- <section class="post_content clearfix">
							<?php the_content( __("Read more &raquo;","wpbootstrap") ); ?>
						</section> --> <!-- end article section -->
						
						<!-- <footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>
							
						</footer> --> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
				<!-- 	<?php if (function_exists('wp_bootstrap_page_navi')) { // if expirimental feature is active ?>
						
						<?php wp_bootstrap_page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>	 -->	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
					</div>
				<?php get_sidebar(); // sidebar 1 ?>
				</div> <!-- end #main -->
    
				
    		</div>
			</div> <!-- end #content -->
			</div>

<?php get_footer(); ?>