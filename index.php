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
                    <a href="#">VIEW MENU</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section">
    <div class="container-fluid">
        <div class="about-row">

            <div class="about-image">
            </div>

            <div class="about-description">
                <div>
                    <h2>PETER GILMORE</h2>
                </div>

                <div>
                    <p>Peter’s appreciation of nature’s diversity and his endless experimentation in the kitchen and garden are the driving forces in his cooking. Peter leads the Quay team with a focus on excellence, innovation and hospitality.</p>
                </div>

                <div class="about-action">
                    <a href="#">READ MORE</a>
                </div>
            </div>

        </div>
    </div>
</section>


</body>
</html>

