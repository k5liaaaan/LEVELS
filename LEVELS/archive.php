<!DOCTYPE html>
<html lang="ja">

<head>

<meta charset="utf-8">

<title><?php require "include/siteName.php"; ?>｜NEWS</title>
<?php require "include/description.php"; ?>
<link rel="canonical" href="/" />
<?php require "include/common.php"; ?>    
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/www/css/plus.css"/>
<?php wp_enqueue_script( 'jquery' ); ?>
<?php wp_head(); ?>

</head>
<body>
<?php get_header(); ?>

  <div id="wrapper">

    <div id="wrap">

	  	<div class="plus_main">
	      	<h1 class="archiveTitle">LEVELS NEWS</h1>
			<?php
				if ( have_posts() ) {
			  	while ( have_posts() ){
			    	the_post();
			?>
			<a href="<?php the_permalink() ?>">
		    <article class="archiveBox">
		    	<div class="archiveBoxData">
		    		<h2 class="archiveBoxTitle"><?php the_title(); ?></h2>
		      		<P class="archiveBoxTime"><?php echo get_the_date(); ?></P>
		    	</div>
		     	<span class="archiveBoxText"><?php the_excerpt(); ?></span> 
		    </article>
		    </a>
		    <?php
			  }
			}
			?>
			<?php if( function_exists("the_pagination") ) the_pagination(); ?>	
	  	</div>
	  	
	    <p class="pageTop"><a href="#"></a></p>
    </div><!-- wrap -->
  </div><!-- wrapper -->

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>