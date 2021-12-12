<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./resources/css/home.css">
        <link rel="stylesheet" type="text/css" href="./resources/css/defaults.css">

        <!-- Favicon Stuff -->
        <link rel="apple-touch-icon" sizes="180x180" href="./resources/media/Favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./resources/media/Favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./resources/media/Favicons/favicon-16x16.png">
        <link rel="manifest" href="./resources/media/Favicons/site.webmanifest">
        <link rel="mask-icon" href="./resources/media/Favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
      <div class="visitorCounter">
        <?php
          $servername = "localhost";
          $username = "fate1405";
          $password = ")qvIfQ(z1u?l";
          $dbname = "worms";

          $conn = new mysqli($servername, $username, $password, $dbname);


          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          $sql = "UPDATE maindatadb SET Visitors = Visitors + 1;";

          $conn->query($sql);
        ?>
      </div>
        <section class="header section">
            <nav class="navbar">
                <div class="navbar-brand">
                    <div class="navbar-item image">
                        <a href="./home.php"><figure class="is-flex is-align-items-center is-justify-content-center image is-128x128">
                            <img alt="Logo" src="./resources/media/Zuiderheide Favicon.png">
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
                        <a href="./webpages/Flora/flora_index.html" class="navbar-item">
                            <button class="button my-button is-light is-medium" id="flora">Flora</button>
                        </a>
                        <a href="./webpages/Fauna/fauna_index.html" class="navbar-item">
                            <button class="button my-button is-light is-medium" id="fauna">Fauna</button>
                        </a>
                        <a href="./webpages/map.html" class="navbar-item">
                            <button class="button my-button is-light is-medium" id="map">Map</button>
                        </a>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                <button class="button is-light my-button is-medium" id="other">Other</button>
                            </a>
                            <div class="navbar-dropdown">
                                <a href="./webpages/contact.html" class="navbar-item my-button">Contact</a>
                                <a href="./webpages/about.html" class="navbar-item my-button">About</a>
                                <a href="./webpages/gallery.html" class="navbar-item my-button">Gallery</a>
                                <a href="./webpages/stats.php" class="navbar-item my-button">Statistics</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        
        <section class="my-content section">

          <div class="columns welcome">
            <div class="column is-half">
              <img src="./resources/media/images/IMG_3827.jpeg" alt="Tree in Zuiderheide">
            </div>
            <div class="column">
              <div class="content box">
                <div class="block">
                  <h1 class="heading title is-2">
                    Welcome to the Zuiderheide
                  </h1>
                </div>
                <div class="block">
                  <p class="content">
                    The Zuiderheide is a Nature Reserve managed by the Goois Natuurreservaat. It is freely open to the public and is home to many species of plants and animals. Separating the urban areas of Laren and Hilversum, the Zuiderheide is comprised of a wide variety of biomes including forests, heathlands and sandy downs.
                  </p>
                  <p class="content">
                    There are myriad interesting natural structures to be found in and around the Heide and its centralised location in the Netherlands makes it a location of interest for residents and tourists alike. This website aims to document the flora and fauna of this beautiful park. For information on its creation, click below.
                  </p>
                </div>
                <div class="block">
                  <a href="./webpages/about.html" class="button is-medium is-fullwidth">About Us</a>
                </div>
              </div>
            </div>
          </div>
          <div class="columns flora">
            <div class="column">
              <div class="content box">
                <div class="block">
                  <h1 class="heading title is-2">
                    Discover Our Flora
                  </h1>
                </div>
                <div class="block">
                  <p class="content">
                    The Zuiderheide is home to many species of interesting plants. From wild raspberries to common moss, it is the archetypical European smorgasbord of flora. Perhaps most notable of all the species would be the signature purple flowering heath, which grows a bright, unmistakable purple in the spring.
                  </p>
                  <p class="content">
                    It is most famous of all the plants of the Goois Heides, and the Zudierheide displays it proudly. However, there is still much more to the flora of this Heide that what initially catches the eye. Learn more below.
                  </p>
                </div>
                <div class="block">
                  <a href="./webpages/Flora/flora_index.html" class="button is-medium is-fullwidth">Find out More</a>
                </div>
              </div>
            </div>
            <div class="column is-half">
              <img src="./resources/media/images/IMG_3824.jpeg" alt="Zuiderheide Heath">
            </div>
          </div>
          <div class="columns fauna">
            <div class="column is-half">
              <img src="./resources/media/images/IMG_4284.jpg" alt="Box-Elder Beetle">
            </div>
            <div class="column">
              <div class="content box">
                <div class="block">
                  <h1 class="heading title is-2">
                    Discover Our Fauna
                  </h1>
                </div>
                <div class="block">
                  <p class="content">
                    The Zuiderheide, like many other nature reserves, is the habitat of innumerable animals. From Roe Deer to Box-Elder Beetles, the Zuiderheide manages to be a safe haven for animals of any character. This website focusses mainly on the entomological side of the animal kingdom, exploring the many insects and other critters that dwell in the undergrowth of this vast sanctuary.
                  </p>
                  <p class="content">
                    Many esoteric creatures are documented, who might go their entire lives ignored by humans. Of course, there are a few larger species, especially mammals, discussed, so as to not favour the little ones too much. Click below for more information.
                  </p>
                </div>
                <div class="block">
                  <a href="./webpages/Fauna/fauna_index.html" class="button is-medium is-fullwidth">Find out More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="columns map">
            <div class="column">
              <div class="content box">
                <div class="block">
                  <h1 class="heading title is-2">
                    Explore the Map
                  </h1>
                </div>
                <div class="block">
                  <p class="content">
                    Before this website was created, the Zuiderheide had yet to be charted. Only crude pathways and basic tree cover were visible using Google Maps. This is the only known detailed map of the Zuiderheide, with information regarding gradients, biome, interesting natural landforms and man-made structures.
                  </p>
                  <p class="content">
                    In addition to this, many sites have been given unique and descriptive names (albeit Anglicised). With this map, you will be able to traverse the Zuiderheide with ease, visiting all important or interesting locations, some of which might’ve not been immediately evident. Click below for more information.
                  </p>
                </div>
                <div class="block">
                  <a href="./webpages/map.html" class="button is-medium is-fullwidth">Find out More</a>
                </div>
              </div>
            </div>
            <div class="column is-half">
              <img src="./resources/media/images/IMG_3849.jpeg" alt="Ariel view of Leeuwenkuil">
            </div>
          </div>
          <div class="columns other">
            <div class="column is-half">
              <img src="./resources/media/images/IMG_3836.jpeg" alt="Mushrooms in grass">
            </div>
            <div class="column">
              <div class="content box">
                <div class="block">
                  <h1 class="heading title is-2">
                    Find Something Else
                  </h1>
                </div>
                <div class="block">
                  <p class="content">
                    If none of the resources above were compelling enough to warrant a click, or if you’ve explored them all already, there is still much content available. For any enquiries or suggestions, please contact below. For a comprehensive view of all media, check out the gallery. If you’ve enjoyed the experience, please rate us on the statistics page!
                  </p>
                </div>
                <div class="block">
                  <a href="./webpages/contact.html" id="block1" class="button is-large is-fullwidth">
                    Contact
                  </a>
                </div>
                <div class="block">
                  <a href="./webpages/gallery.html" class="button is-large is-fullwidth">
                    Gallery
                  </a>
                </div>
                <div class="block">
                  <a href="./webpages/stats.php" class="button is-large is-fullwidth">
                    Rate Us
                  </a>
                </div>
              </div>
            </div>
          </div>

        </section>
    </body>
</html>