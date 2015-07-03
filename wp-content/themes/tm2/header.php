<html>
	<head>
		<meta charset="UTF-8"/>
		<?php wp_head();?>
	</head>
        <body <?php body_class( $class ); ?> style="background-image: url(<?php echo background_image(); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner" style="background-image: url(<?php echo header_image(); ?>);">
                                    <h1 style="color:#<?php echo get_header_textcolor(); ?>"><?php echo bloginfo("name");?></h1>
					<p><?php echo bloginfo("description");?></p>
				</div>

			</div>
		</div>
	</div>