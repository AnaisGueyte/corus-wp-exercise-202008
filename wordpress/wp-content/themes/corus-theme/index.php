<?php get_header(); 

$image_1 = get_field( "slide_image_1", get_the_id()); 
$image1 = $image_1['url']; 

$image_2 = get_field( "slide_image_2", get_the_id()); 
$image2 = $image_2['url']; 

$image_3 = get_field( "slide_image_3", get_the_id()); 
$image3 = $image_3['url']; 

?> 

<article>
    <section class="hero">
    	<div class="hero-title">
    		<h1><?php the_title(); ?></h1>
    	</div>
    	<hr>
		<div class="your-class">
		  <div><img src="<?php echo $image1; ?>"/></div>
		  <div><img src="<?php echo $image2; ?>"/></div>
		  <div><img src="<?php echo $image3; ?>"/></div>
		</div> 

	</section>
</article>



<?php get_footer(); ?>

