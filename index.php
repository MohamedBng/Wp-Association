<?php get_header() ?>


<?php  if (have_posts()) { ?>	
	

	<?php while (have_posts()) { the_post(); ?> 
		<div class="article">

			<div class="card bg-light mb-3" style="width: 70%;">
			    <div class="card-body" style="width: 100%;">
			    	<?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top', 'alt' => ''));?>

				    <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
				    <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
				    <p class="card-text"><?php the_content() ?></p>
				    <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
			    </div>
		    </div>

		</div>
<?php } ?> 

    	<?php montheme_pagination() ?>
<?php } 
else 
{ ?> 

<h1>Pas d'articles</h1>

<?php } ?> 

<?php get_footer() ?>