<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage maanch
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,600|Josefin+Slab:100" rel="stylesheet" type="text/css">
  <meta name="description" content="Across Seconds is a 4 piece experimental/post-prog instrumental rock band. Formed in 2016 in Mumbai, India, they decided to move beyond the clemency of spoken word and let their instruments speak for themselves. Ever since their inception, Across Seconds has always aimed at creating beautifully structured pieces of music that seem like a variegated dance between dreams and reality and take their listeners on a journey from oblivion to tranquility." />
  <meta name="keywords" content="across seconds, band, music, post rock, indian band, best indian band, top indian band,four lightyears from home, album, music album, post rock album, 4 light years from home, four light years from home, debut album, best album, promising indian band, best indie music, best indie band, best post rock band, post rock band from india" />

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="http://acrossseconds.com/img/artwork.jpg">

  <meta name="twitter:title" content="Across Seconds | Album out now">
  <meta name="twitter:description" content="Across Seconds is a 4 piece experimental/post-prog instrumental rock band. Formed in 2016 in Mumbai, India, they decided to move beyond the clemency of spoken word and let their instruments speak for themselves. Ever since their inception, Across Seconds has always aimed at creating beautifully structured pieces of music that seem like a variegated dance between dreams and reality and take their listeners on a journey from oblivion to tranquility.">
  <meta name="twitter:creator" content="@https://twitter.com/dhwlm">

  <!-- Open Graph -->
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Across Seconds | Album out now">
  <meta property="og:description" content="Across Seconds is a 4 piece experimental/post-prog instrumental rock band. Formed in 2016 in Mumbai, India, they decided to move beyond the clemency of spoken word and let their instruments speak for themselves. Ever since their inception, Across Seconds has always aimed at creating beautifully structured pieces of music that seem like a variegated dance between dreams and reality and take their listeners on a journey from oblivion to tranquility.">
  <meta property="og:url" content="http://acrossseconds.com/">
  <meta property="og:site_name" content="Across Seconds | Four Lightyears from Home">
  <meta property="og:image" content="http://acrossseconds.com/img/artwork.jpg" />


	<?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <meta name="google-site-verification" content="bMfbVCGaxYtesicWosp_RcLFzemk--AOsk4w4i7siFs" />
</head>

<body <?php body_class(); ?>>
<?php 
  $domain = "//acrossseconds.com";
?>
<div class="cursor"></div>

<header class="masthead" id="page-top">
  <nav class="navbar" id="main-menu">
    <input id="cross-icon" type="checkbox">
    <label for="cross-icon">
      <div class="menu open">
          <div class="menu_part"></div>
          <div class="menu_part"></div>
          <div class="menu_part"></div>
      </div>
    </label>
    
    <div class="menu-container d-flex justify-content-center align-items-center">

      <ul class="menu-items list-unstyled my-auto">
        <li class="menu-item">
          <a href="">About</a>
        </li>
        <li class="menu-item">
          <a href="">Store</a>
        </li>
        <li class="menu-item">
          <a href="">Music</a>
        </li>
        <li class="menu-item">
          <a href="">Gallery</a>
        </li>
      </ul>

    </div>
  </nav>
  

</header>
