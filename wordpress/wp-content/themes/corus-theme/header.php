<?php if (!defined('ABSPATH')) exit; // Never remove this, keep at the top of the files

global $post;

?><!DOCTYPE html>

<html lang="en"> 

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(); ?></title>


    <link type="text/css" href="/wp-content/themes/corus-theme/style.css" rel="stylesheet">
    <link type="text/css" href="/wp-content/themes/corus-theme/components/slick-slider/slick.css" rel="stylesheet">
    <link type="text/css" href="/wp-content/themes/corus-theme/components/slick-slider/slick-theme.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700;900&family=Open+Sans:wght@300;700;900&display=swap" rel="stylesheet">


    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

