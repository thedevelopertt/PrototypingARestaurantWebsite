<!DOCTYPE>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/dist/css/style.css">
</head>
<body>

<section class="landing_section">
</section>

<section class="article-section">
    <div class="article-row">
	    <?php while(have_posts()){
		    the_post();
		    ?>
            <div class="article-wrapper">
                <a class="article-preview" href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <h2><?php the_title() ?></h2>
                    <p><?php the_excerpt(); ?></p>
                </a>

                <div class="content">
				    <?php if(!is_home()){
					    the_content();
				    }?>
                </div>
            </div>
	    <?php }?>
    </div>
</section>

</body>
</html>

