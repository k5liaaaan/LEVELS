<!DOCTYPE html>
<html lang="ja">

<head>

<meta charset="utf-8">

<title><?php require "include/siteName.php"; ?>｜not found</title>
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
      <div class="container">

      	<p>お探しのページはありません</p>

        <p class="pageTop"><a href="index.php#"></a></p>
      </div><!-- content -->
    </div><!-- wrap -->
  </div><!-- wrapper -->

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>