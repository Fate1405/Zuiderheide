<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Statistics</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../resources/css/stats.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/defaults.css">
        <script src="../resources/scripts/jquery.js"></script>
        <script src="../resources/scripts/stats.js"></script>

        <!-- Favicon Stuff -->
        <link rel="apple-touch-icon" sizes="180x180" href="../resources/media/Favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../resources/media/Favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../resources/media/Favicons/favicon-16x16.png">
        <link rel="manifest" href="../resources/media/Favicons/site.webmanifest">
        <link rel="mask-icon" href="../resources/media/Favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <section class="header block">
            <nav class="navbar">
                <div class="navbar-brand">
                    <div class="navbar-item image">
                        <a href="../home.php"><figure class="is-flex is-align-items-center is-justify-content-center image is-128x128">
                            <img alt="Logo" src="../resources/media/Zuiderheide Favicon.png">
                          </figure></a>
                    </div>
                    <div class="navbar-item">
                        <h1 class="title my-title is-1 is-size-4-mobile" id="myitle">The Zuiderheide</h1>
                    </div>
                </div>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
                <div class="navbar-menu">
                    <div class="navbar-end">
                        <a href="./Flora/flora_index.html" class="navbar-item">
                            <button class="button my-button is-light is-medium" id="flora">Flora</button>
                        </a>
                        <a href="./Fauna/fauna_index.html" class="navbar-item">
                            <button class="button my-button is-light is-medium" id="fauna">Fauna</button>
                        </a>
                        <a href="./map.html" class="navbar-item">
                            <button class="button my-button is-light is-medium" id="map">Map</button>
                        </a>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                <button class="button is-light my-button is-medium" id="other">Other</button>
                            </a>
                            <div class="navbar-dropdown">
                                <a href="./contact.html" class="navbar-item my-button">Contact</a>
                                <a href="./about.html" class="navbar-item my-button">About</a>
                                <a href="./gallery.html" class="navbar-item my-button">Gallery</a>
                                <a href="./stats.php" class="navbar-item my-button">Statistics</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <section class="main-content block">
            <div class="columns">
                <div class="column is-1"></div>
                <div class="box column is-4">
                    <h2 class="subtitle is-3" id="visitor-heading">Total Visitors</h2>
                    <p class="content block" id="counter">
                        <?php

                            $servername = "localhost";
                            $username = "fate1405";
                            $password = ")qvIfQ(z1u?l";
                            $dbname = "worms";

                            $conn = new mysqli($servername, $username, $password, $dbname);


                            if ($conn->connect_error) {
                                die("Connection failed: Contact Fate1405 for Help");
                            }
                            
                            $sql = "SELECT Visitors FROM maindatadb";

                            $result = $conn->query($sql);

                            $row = $result->fetch_assoc();

                            echo reset($arr);
                        
                        ?>
                    </p>
                </div>
                <div class="column is-2"></div>
                <div class="box column is-4">
                    <h2 class="subtitle is-3" id="visitor-heading">Rate Us</h2>
                    <fieldset>
                        <p class="content" id="star-rating">
                            <span class="icon">
                                <i class="far fa-star" onclick="updateStarVisuals(1)" id="star1"></i>
                            </span>
                            <span class="icon">
                                <i class="far fa-star" onclick="updateStarVisuals(2)" id="star2"></i>
                            </span>
                            <span class="icon">
                                <i class="far fa-star" onclick="updateStarVisuals(3)" id="star3"></i>
                            </span>
                            <span class="icon">
                                <i class="far fa-star" onclick="updateStarVisuals(4)" id="star4"></i>
                            </span>
                            <span class="icon">
                                <i class="far fa-star" onclick="updateStarVisuals(5)" id="star5"></i>
                            </span>
                        </p>
                        <button class="button block is-fullwidth" onclick="sendData()" id="submit-btn">Submit</button>
                        <p class="content block" id="thanks"></p>
                    </fieldset>
                </div>
                <div class="column is-1"></div>
            </div>
        </section>
    </body>
</html>