<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calories</title>
  <link rel="icon" href="ASSETS/Logo.png" />
  <link rel="stylesheet" href="index.css " />
  <script src="./index.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="app__navbar">
    <div class="app__navbar-logo">
      <img src="assets/Logo.png" alt="Logo" />
    </div>
    <ul class="app__navbar-links ">
      <li><a href="#home">Accueil</a></li>
      <li><a href="#about">A propos</a></li>
      <li><a href="#menu">Menu</a></li>
      <li><a href="#awards">Awards</a></li>
      <li><a href="#contact">Find Us</a></li>
      <li><a href="#hour">Horaires</a></li>
    </ul>
    <img class="account-icon" src="assets/compte.png">
    <h5 style="margin-right:30px;">Welcome, <span><?= $_SESSION['name']; ?></span></h5>
    <div class="app__navbar-commande">
      <button onclick="toggleOrderPopup(true)">Commander</button>
    </div>
    <div class="app__navbar-login">
    <button onclick="window.location.href='logout.php'">Logout</button>
    </div>
  </nav>



  <!-- Popup Commander -->
  <div id="order-popup" class="order-popup hidden">
    <div class="order-popup-container">
      <div >
        <h2>COMMANDER</h2>
        <button class="close-popup" onclick="toggleOrderPopup(false)">✖</button>
      </div>
      <form id="orderForm" onsubmit="handleOrderSubmit(event)">
        <label for="restaurant-select"><strong>1 / 3</strong> Sélectionner votre restaurant de retrait</label>
        <select id="restaurant-select" class="restaurant-select" required>
          <option value="" disabled selected>Choisissez un restaurant</option>
          <option value="angers"> Angers Eseo</option>
          <option value="toulouse"> Toulouse Jean Jaurès</option>
          <option value="bordeaux">Bordeaux Mériadeck</option>
          <option value="paris">Paris Montparnasse</option>
          <option value="lyon"> Lyon Part-Dieu</option>
        </select>

        <p><strong>2 / 3</strong> Sélectionner le jour</p>

        <input type="date" class="restaurant-select" required />




        <p><strong>3 / 3</strong> Sélectionner l'horaire</p>
        <select class="restaurant-select time-select">
          <option>11:00 – 15:00</option>
          <option>15:00 – 18:00</option>
          <option>18:00 – 00:00</option>
        </select>

        <button class="validate-btn" type="submit">VALIDER</button>
      </form>
    </div>
  </div>

  <!-- Accueil -->
  <section class="app__header app__wrapper section__padding" id="home">
    <div class="app__wrapper_info p__opensans">
      <p>You are what you eat.</p>
      <img src="assets/spoon.png" alt="spoon" />
      <h1 class="app__header-h1">Don’t try to eat less. Try to eat right.</h1>
      <p class="p__opensans">
        Chez Calories, nous vous proposons une expérience gastronomique saine et délicieuse.
      </p>
      <br />
      <a href="https://www.boumizasquare.com" target="_blank" rel="noopener noreferrer">
          <button type="button" class="custom__button">Découvrir</button>
      </a>
    </div>
    <div class="app__wrapper_img">
      <img src="assets/welcome.png" alt="header img" />
    </div>
  </section>

  <!-- À propos -->
  <section class="app__aboutus app__bg flex__center section__padding" id="about">
    <div class="app__aboutus-overlay flex__center">
      <img src="assets/bg.png" alt="bgimg" />
    </div>
    <div class="app__aboutus-content flex__center">
      <div class="app__aboutus-content_about">
        <h1 class="headtext">About Us</h1>
        <img src="assets/spoon.png" alt="about_spoon" class="spoon__img" />
        <p class="p__opensans">Chez Calories, Nous Vous Proposons Une Expérience...</p>
        <a href="https://www.boumizasquare.com" target="_blank" rel="noopener noreferrer">
        <button type="button" class="custom__button">Know More</button>
        </a>
      </div>
      <div class="app__aboutus-content_knife flex__center">
        <img src="assets/knife.png" alt="about_knife" />
      </div>
      <div class="app__aboutus-content_history">
        <h1 class="headtext">Concept</h1>
        <img src="assets/spoon.png" alt="about_spoon" class="spoon__img" />
        <p class="p__opensans">Composez de délicieuses salades selon vos goûts...</p>
        <a href="https://www.boumizasquare.com" target="_blank" rel="noopener noreferrer">
        <button type="button" class="custom__button">Know More</button>
        </a>
      </div>
    </div>
  </section>

  <!-- Menu et bar -->
  <section><img src="assets/Bar.png" class="bar" alt="about_bar" /></section>
  <section id="menu"><img src="assets/Menu.png" class="menu" alt="menu_png" /></section>

  <!-- Vidéo -->
  <section class="video-container">
    <video src="assets/salad.mp4" class="video-cropped" autoplay loop muted></video>
  </section>

  <!-- Galerie TikTok -->
  <div class="app__gallery flex__center">
    <div class="app__gallery-content">
      <h2>Tiktok</h2>
      <h1>Video Gallery</h1>
      <p class="p__opensans">Don't try to eat less. Try to eat right 🇹🇳🥗</p>
      <a href="https://www.tiktok.com/@calories_tn?lang=en">
        <button type="button" class="custom__button">View More</button>
      </a>
    </div>
    <div class="app__gallery-images">
      <div class="app__gallery-images_container" id="scrollContainer">
        <div class="app__gallery-images_card"><iframe src="https://www.tiktok.com/embed/7402314800111373573"
            class="gallery__video"></iframe></div>
        <div class="app__gallery-images_card"><iframe src="https://www.tiktok.com/embed/7401865148224359686"
            class="gallery__video"></iframe></div>
        <div class="app__gallery-images_card"><iframe src="https://www.tiktok.com/embed/7401560415706025222"
            class="gallery__video"></iframe></div>
        <div class="app__gallery-images_card"><iframe src="https://www.tiktok.com/embed/7401504213722828038"
            class="gallery__video"></iframe></div>
      </div>
      <div class="app__gallery-images_arrows">
        <button class="gallery__arrow-icon" onclick="scrollGallery('left')">&lt;&lt;</button>
        <button class="gallery__arrow-icon" onclick="scrollGallery('right')">&gt;&gt;</button>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div class="app__bg app__wrapper section__padding" id="contact">
    <div class="app__wrapper_info">
      <h2>Contact</h2>
      <h4>Find Us</h4>
      <div class="map__container" id="mapContainer" style="display: none;">
        <iframe src="https://www.google.com/maps/embed?..."></iframe>
      </div>
      <button type="button" class="custom__button" onclick="toggleElements()">Visit Us</button>
    </div>
    <div class="app__wrapper_img">
      <img src="assets/findus.png" alt="Find Us" />
    </div>
  </div>

  <!-- Horaires -->
  <section id="hour">
    <img src="assets/hour.png" alt="Your description" class="image-overlay" />
    <img src="assets/back.png" class="img-cropped" />
  </section>
  <!-- Footer -->
  <footer class="app__footer section__padding" id="login">
    

    <div class="app__newsletter">
      <div class="app__newsletter-heading">
        <h1>Subscribe To Our Newsletter!</h1>
        <p class="p__opensans">And never miss latest Updates!</p>
      </div>
      <div class="app__newsletter-input flex__center">
        <input type="email" placeholder="Enter your email address" />
        <button type="button" class="custom__button">Subscribe</button>
      </div>
    </div>

    <div class="app__footer-links">
      <div class="app__footer-links_contact">
        <h1 class="app__footer-headtext">Contact Us</h1>
        <p class="p__opensans">contact@boumizasquare.com</p>
        <p class="p__opensans">+216 73216216</p>
      </div>

      <div class="app__footer-links_logo">
        <img src="assets/Logo2.png" alt="footer_logo" />
        <p class="p__opensans">"The key to successful leadership today is influence, not authority."</p>

      </div>

      <div class="app__footer-links_work">
        <h1 class="app__footer-headtext">Adresses</h1>
        <p class="p__opensans">
          <a href="https://www.google.com/maps/place/..." target="_blank" rel="noopener noreferrer">
            Adresse : 000, Yasser Arafet Z4, Sousse Sahloul 4054
          </a>
        </p>
      </div>
    </div>

    <div class="footer__copyright">
      <p>Copyright © 2024 Calories. Tous droits réservés.</p>
    </div>
  </footer>

</body>

</html>