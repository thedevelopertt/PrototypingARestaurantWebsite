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

<section class="events-section">
    <div class="container-fluid">
        <div class="events-row">

            <div class="events-image">
            </div>

            <div class="events-description">
                <div>
                    <h2>EVENTS</h2>
                </div>

                <div>
                    <p>Celebrate at one of Australia’s most awarded restaurants, with panoramic views encompassing the Sydney Harbour Bridge and Sydney Opera House. From intimate dinner parties in the Private Dining Room, to large cocktail events in The Green Room.</p>
                </div>

                <div class="events-action">
                    <a href="#">VIEW EVENTS</a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="info-section">
    <div class="container-fluid">
        <div class="info-row">

            <div class="info-block">
                <div class="info-block-row">
                    <div class="info-title">
                        <h3>AWARDS</h3>
                    </div>

                    <div class="info-large-title">
                        <h2>QUAY NAMED HOTTEST RESTAURANT & DISH IN AUSTRALIA</h2>
                    </div>

                    <div class="info-lead">
                        <p>Quay was named 2019 Hottest Restaurant and Hottest Dish in Australia by John Lethlean in the Weekend Australian Hot 50.</p>
                    </div>

                    <div class="info-action">
                        <a href="#">VIEW STORY</a>
                    </div>
                </div>
            </div>

            <div class="info-block">
                <div class="info-block-row">
                    <div class="info-title">
                        <h3>FESTIVE SEASON</h3>
                    </div>

                    <div class="info-large-title">
                        <h2>THURSDAY LUNCH IN DECEMBER</h2>
                    </div>

                    <div class="info-lead">
                        <p>Quay to open Thursday Lunch in December. To celebrate the festive season, Quay will open for Thursday lunch in December.</p>
                    </div>

                    <div class="info-action">
                        <a href="#">ADD BOOKING</a>
                    </div>
                </div>
            </div>

            <div class="info-block">
                <div class="info-block-row">
                    <div class="info-title">
                        <h3>SPECIAL EVENT</h3>
                    </div>

                    <div class="info-large-title">
                        <h2>RARE & SPECIAL WHISKY DINNER</h2>
                    </div>

                    <div class="info-lead">
                        <p>This spring Bennelong & Quay invite you to join a very special Whisky dinner hosted by Fink Creative Director, John</p>
                    </div>

                    <div class="info-action">
                        <a href="#">BOOK SPECIAL</a>
                    </div>
                </div>
            </div>

            <div class="info-block">
                <div class="info-block-row">
                    <div class="info-title">
                        <h3>SPECIAL EVENT</h3>
                    </div>

                    <div class="info-large-title">
                        <h2>CHRISTMAS DAY</h2>
                    </div>

                    <div class="info-lead">
                        <p>Celebrate Christmas Day with friends and family on Sydney Harbour at Quay. Guests will enjoy a glass of Champagne and</p>
                    </div>

                    <div class="info-action">
                        <a href="#">BOOK CHRISTMAS</a>
                    </div>
                </div>
            </div>

            <div class="info-block">
                <div class="info-block-row">
                    <div class="info-title">
                        <h3>SPECIAL EVENT</h3>
                    </div>

                    <div class="info-large-title">
                        <h2>NEW YEAR’S EVE</h2>
                    </div>

                    <div class="info-lead">
                        <p>Celebrate a spectacular New Year’s Eve with absolute front row seats at Quay overlooking sparkling Sydney Harbour. Begin your evening</p>
                    </div>

                    <div class="info-action">
                        <a href="#">BOOK NEW YEAR'S</a>
                    </div>
                </div>
            </div>

            <div class="info-block">
                <div class="info-block-row">
                    <div class="info-title">
                        <h3>MORE INFO</h3>
                    </div>

                    <div class="info-large-title">
                        <h2>EVENTS AND STORIES</h2>
                    </div>

                    <div class="info-lead">
                        <p>Continue Reading our news.</p>
                    </div>

                    <div class="info-action">
                        <a href="#">READ HERE</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

</body>
</html>

