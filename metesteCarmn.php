// Get the last 10 posts in the special_cat category.
<?php query_posts( 'category_name=special_cat&posts_per_page=10' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<!-- Do special_cat stuff... -->
<?php endwhile; ?>
:::::::::::::::::::
<?php get_header(); ?>
<div class="main">
<?php query_posts('posts_per_page=20'); ?>
<?php get_template_part('loop'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

// Get the last 10 posts in the special_cat category.
<?php query_posts( 'category_name=special_cat&posts_per_page=10' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<!-- Do special_cat stuff... -->
	
<?php endwhile; ?>

<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				::::::::::::::::::::::::::::::::::

<?php if(have_posts()):?>
	<ul>
		<?php while(have_posts()): the_post(); ?>
			<li><?php the_title() ?></li>
				<?php endwhile ?>
	</ul>
	<?php else: ?>
	<h2>pas d'articles</h2>
<?php endif; ?>



<?php if( have_posts() ) :?>
	<ul><?php while( have_posts() ) : the_post(); ?>
    <li><?php the_title(); ?></li>
    <?php the_content(); ?>
	</ul>
<?php endwhile; endif; ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="post">
			<h2><?php the_title(); ?></h2>
      
        	<?php the_post_thumbnail(); ?>
            
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>
            
      		<?php the_excerpt(); ?>
              
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
		</article>