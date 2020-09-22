<?php
/**
 * Header file for the Heimat Zero one WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Heimat_one_zero
 * @subpackage heimat_one_zero
 * @since Heimat_one_zero 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">

    <header class="blog-header">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-lg-4">Newsletter</div>
            <div class="col-lg-4">know (y)our Heimat</div>
            <div class="col-lg-4">Suche</div>
        </div>
    </header>
    <div class="nav-scroller py-1 mb-2">
        <nav class="d-flex justify-content-between">
            <a href="#">Aktuelles</a>
            <a href="#">Regionen</a>
            <a href="#">Aktivitäten</a>
        </nav>
    </div>
    <div class="jumbotron p-4 p-md-5 rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"> Jetzt Neu Wandern im Enzkreis</h1>
        </div>
    </div>

    <div class="row mb-5 " style="height: 250px;">
	    <?php $query=new WP_Query(array('post_type' => 'posts',"posts_per_page"=>2)); ?>
            <?php print_r($query->posts); ?>

	        <?php foreach ($posts as $post): ?>
                <div class="col-md-6 h-100 d-inline-flex">
                    <div class="row w-100 no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary"><?php echo (get_cat_name(($post->post_category)[0])); ?></strong>
                            <h3 class="mb-0"><?php echo $post->post_title ?></h3>
                            <div class="mb-1 text-muted"><?php echo (new \DateTime($post->post_date))->format('d.m.Y H:i:s'); ?></div>
                            <p class="card-text mb-auto"><?php echo $post->post_excerpt; ?></p>
                            <a href="<?php echo get_permalink($post->ID,false); ?>"><?php _e("Continue reading");?></a>
                        </div>
                        <?php if(has_post_thumbnail($post->ID)): ?>
                            <div class="col-auto pt-4 pr-4 d-none d-lg-block">
	                            <?php $img=get_the_post_thumbnail($post->ID,array( 189, 189 ),['class'=>"rounded float-right"]);?>
                                <?php echo $img;?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach;  ?>
    </div>

</div>

<main class="container" role="main">

