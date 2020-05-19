<!DOCTYPE html>
<html lang="ja">

<head>

<meta charset="utf-8">

<title><?php require "include/siteName.php"; ?>｜<?php the_title(); ?></title>
<?php require "include/description.php"; ?>
<link rel="canonical" href="/" />
<?php require "include/common.php"; ?>    
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/www/css/single.css?01"/>
<?php wp_enqueue_script( 'jquery' ); ?>
<?php wp_head(); ?>

</head>
<body>
<?php get_header(); ?>

  <div id="wrapper">

    <div id="wrap">
      	<?php
		  if(has_post_thumbnail()):
		    the_post_thumbnail( '', array('class' => 'page_picture') );
		  else:
		?>
		
		<?php endif; ?>

      	<?php
	      if ( have_posts() ) :
	      while ( have_posts() ) : the_post();
	    ?>
	    <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 mb">
			<h1 class="h1_heading_blue"><?php the_title(); ?></h1>
			<p class="str_content2"><?php the_content(); ?></p>
	    </div>
		<?php
			endwhile;
			endif;
		?>

        <p class="pageTop"><a href="#"></a></p>
    </div><!-- wrap -->
  </div><!-- wrapper -->

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>

