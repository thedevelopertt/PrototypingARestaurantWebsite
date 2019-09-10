<!DOCTYPE>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="<?php use App\BlogInformation;

    echo esc_url(get_template_directory_uri())?>/dist/css/style.css">

    <?php wp_head(); ?>
</head>
<body>

<section class="landing_section">
    <div class="container">
        <div class="landing-row">
            <div class="landing-title">
                <img src="<?php echo BlogInformation::getSvgPath(); ?>quay-white.svg" alt="<?php BlogInformation::getBlogName();?>">
            </div>
            <div class="landing-lead">
                <p><?php echo BlogInformation::getBlogDescription()?></p>

                <div class="landing-action">
                    <a href="#">Make Reservation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="food-menu-section">
    <div class="container-fluid">
        <div class="food-menu-row">

            <div class="food-menu-image">
            </div>

            <div class="food-menu-description">
                <div>
                    <h2>MENU</h2>
                </div>
                <div>
                    <p>A progression of rare and beautiful ingredients where texture, flavour and harmony is paramount. Delve into the Quay dining experience with Peter Gilmore’s Ten Course Tasting Menu and thoughtfully curated Wine List by Fink Wine Director Amanda Yallop, and Quay Head Sommelier, Shanteh Wong</p>
                </div>

                <div class="food-menu-action">
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>

