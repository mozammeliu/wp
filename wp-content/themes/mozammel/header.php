      
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="banner" style="background-image: url(<?php echo header_image(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h1><?php bloginfo( 'name' ); ?></h1>

                    <h2><?php bloginfo( 'description' ); ?></h2>
                </div>
            </div>
        </div>
    </div>
</header>
