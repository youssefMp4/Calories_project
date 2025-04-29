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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calories</title>
    <link rel="icon" href="assets/Logo.png" />
    <link rel="stylesheet" href="index.css">
    <script src="index.js" defer></script>
</head>

<body>
    <header>
        <nav class="app__navbar">
            <div class="app__navbar-logo">
                <a href="index.php"><img src="assets/Logo.png" alt="Logo" /></a>
            </div>
            <ul class="app__navbar-links">
                <li><a href="index.php#home">Accueil</a></li>
                <li><a href="index.php#about">A propos</a></li>
                <li><a href="index.php#menu">Menu</a></li>
                <li><a href="index.php#awards">Awards</a></li>
                <li><a href="index.php#contact">Find Us</a></li>
                <li><a href="index.php#hour">Horaires</a></li>
            </ul>
            <img class="account-icon" src="assets/compte.png">
    <h6 style="margin-right:30px;">Welcome, <span><?= $_SESSION['name']; ?></span></h6>
            <div class="app__navbar-login">
            <button onclick="window.location.href='logout.php'">Logout</button>
            </div>
        </nav>

       


    </header>

    <main>
        <div class="order-container">
            <div class="order-main-content">
                <div class="order-header">
                    <h2>Compose Your Salad</h2>
                    <button class="close-btn">&times;</button>
                </div>

                <div class="order-progress">
                    <div class="progress-step active" data-step="1">
                        <div class="step-number">1</div>
                        <div class="step-label">Base</div>
                    </div>
                    <div class="progress-step" data-step="2">
                        <div class="step-number">2</div>
                        <div class="step-label">Ingredients</div>
                    </div>
                    <div class="progress-step" data-step="3">
                        <div class="step-number">3</div>
                        <div class="step-label">Sauce</div>
                    </div>
                    <div class="progress-step" data-step="4">
                        <div class="step-number">4</div>
                        <div class="step-label">Drink</div>
                    </div>
                </div>

                <div class="order-content">
                    <!-- Step 1: Choose Base -->
                    <div class="order-step active" id="step-1">
                        <h3>Choose Your Base</h3>
                        <div class="options-grid">
                            <div class="option-card" data-id="1" data-name="Wrap" data-price="2.90" data-calories="297">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Wrap_.png" alt="Wrap">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Wrap</h4>

                                        <span class="calories">297 KCAL</span>
                                        <button class="info-btn">Info</button>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.90€</span>
                                    </div>
                                    <button class="add-btn">+</button>

                                </div>
                            </div>
                            <div class="option-card" data-id="2" data-name="Fusilli" data-price="2.80"
                                data-calories="242">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Fusilli.png" alt="Fusilli">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Fusilli</h4>
                                        <span class="calories">242 KCAL</span>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="3" data-name="Fusilli / Mesclun" data-price="2.80"
                                data-calories="183">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Fusilli_Mesclun.png" alt="Fusilli / Mesclun">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Fusilli / Mesclun</h4>
                                        <span class="calories">183 KCAL</span>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="4" data-name="Mesclun" data-price="2.80"
                                data-calories="6">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Mesclun.png" alt="Mesclun">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Mesclun</h4>
                                        <span class="calories">6 KCAL</span>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="5" data-name="Laitue Iceberg" data-price="2.80"
                                data-calories="8">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Laitue_Iceberg.png" alt="Laitue Iceberg ">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Laitue Iceberg</h4>
                                        <span class="calories">8 KCAL</span>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="6" data-name="Mâche" data-price="2.80" data-calories="6">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Mâche.png" alt="Mâche">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Mâche</h4>
                                        <span class="calories">6 KCAL</span>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="7" data-name="Riz" data-price="2.90" data-calories="240">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Riz.png" alt="Riz">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Riz</h4>
                                        <span class="calories">240 KCAL</span>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.90€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="8" data-name="Pousses d'épinards" data-price="2.80"
                                data-calories="4">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Pousses_dépinards.png" alt="Pousses d'épinards">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Pousses d'épinards</h4>
                                        <span class="calories">4 KCAL</span>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="9" data-name="Riz / Roquette" data-price="2.80"
                                data-calories="151">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Riz_Roquette.png" alt="Riz / Roquette">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Riz / Roquette</h4>
                                        <span class="calories">151 KCAL</span>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="10" data-name="Roquette" data-price="2.80"
                                data-calories="6">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BASE_-_Roquette.png" alt="Roquette">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Mesclun</h4>
                                        <span class="calories">6 KCAL</span>
                                    </div>

                                    <div class="option-details">
                                        <span class="price">2.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Step 2: Choose Ingredients -->
                    <div class="order-step" id="step-2">
                        <h3>Choose Your Ingredients <span class="selection-count">0/4</span></h3>
                        <div class="options-grid">
                            <div class="option-card" data-id="11" data-name="Carottes" data-price="1.75"
                                data-calories="15">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Carottes.png" alt="Carottes">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Carottes</h4>
                                        <span class="calories">15 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">1.75€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="12" data-name="Champignons" data-price="1.75"
                                data-calories="10">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Champignons.png" alt="Champignons">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Champignons</h4>
                                        <span class="calories">10 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">1.75€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="13" data-name="Cheddar" data-price="1.75"
                                data-calories="41">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/cheddar_200x200px.png" alt="Cheddar">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Cheddar</h4>
                                        <span class="calories">41 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="14" data-name="Concombres" data-price="0.80"
                                data-calories="86">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Concombres.png" alt="Concombres">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Concombres</h4>
                                        <span class="calories">86 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="15" data-name="Crevettes" data-price="0.80"
                                data-calories="40">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Crevettes.png" alt="Crevettes">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Crevettes</h4>
                                        <span class="calories">40 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="16" data-name="Croutons" data-price="0.80"
                                data-calories="264">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Croûtons.png" alt="Croutons">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Croutons</h4>
                                        <span class="calories">264 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="17" data-name="Edamame" data-price="0.80"
                                data-calories="165">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Edamame.png" alt="Edamame">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Edamame</h4>
                                        <span class="calories">165 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="18" data-name="Emince Poulet cuit Tex Mex"
                                data-price="0.80" data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/Poulet_Tex_Mex_Halal.png" alt="Emince Poulet cuit Tex Mex">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Emince Poulet cuit Tex Mex</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="19" data-name="Emmental" data-price="1.75"
                                data-calories="15">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Emmental.png" alt="Emmental">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Emmental</h4>
                                        <span class="calories">15 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">1.75€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="20" data-name="Feta AOP" data-price="1.75"
                                data-calories="10">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Feta.png" alt="Feta AOP">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Feta AOP</h4>
                                        <span class="calories">10 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">1.75€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="21" data-name="Falafel" data-price="1.75"
                                data-calories="41">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Falafels.png" alt="Falafel">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Falafel</h4>
                                        <span class="calories">41 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="22" data-name="Fourme d'Ambert" data-price="0.80"
                                data-calories="86">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Fourme_dambert-2.png" alt="Fourme d'Ambert">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Fourme d'Ambert</h4>
                                        <span class="calories">86 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="23" data-name="Jambon blanc" data-price="0.80"
                                data-calories="40">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Jambon_blanc.png" alt="Jambon blanc">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Jambon blanc</h4>
                                        <span class="calories">40 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="24" data-name="Jambon de pays" data-price="0.80"
                                data-calories="264">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Jambon_de_pays.png" alt="Jambon de pays">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Jambon de pays</h4>
                                        <span class="calories">264 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="25" data-name="Maïs" data-price="0.80"
                                data-calories="165">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Maïs.png" alt="Maïs">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Maïs</h4>
                                        <span class="calories">165 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="26" data-name="Mangue" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/mangue_5QvFejk.png" alt="Mangue">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Mangue</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="27" data-name="Mix de graines" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Mix_de_graines.png" alt="Mix de graines">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Mix de graines</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="28" data-name="Mozzarella" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Mozzarella.png" alt="Mozzarella">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Mozzarella</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="29" data-name="Noix" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Noix.png" alt="Noix">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Noix</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="30" data-name="Oeuf Dur" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Oeuf_dur-2.png" alt="Oeuf Dur">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Oeuf Dur</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="31" data-name="Oignons frits" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Oignons_frits.png" alt="Oignons frits">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Oignons frits</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="32" data-name="Olives vertes" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Olives_vertes_.png" alt="Olives vertes">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Olives vertes</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="33" data-name="Poivrons" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Poivrons.png" alt="Poivrons">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Poivrons</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="34" data-name="Poulet" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Poulet_Halal_sNi92yR.png" alt="Poulet">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Poulet</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="35" data-name="Poulet Pané" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Poulet_Pané_Halal_épicé_.png" alt="Poulet Pané">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Poulet Pané</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="36" data-name="Saumon fumé" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Saumon_Fumé.png" alt="Saumon fumé">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Saumon fumé</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="37" data-name="Tartare de tomates" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Tartare_Tomate_.png" alt="Tartare de tomates">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Tartare de tomates</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="38" data-name="Thon" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Thon.png" alt="Thon">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Thon</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="39" data-name="Tomates cerises rondes" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Tomates_cerises.png" alt="Tomates cerises rondes">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Tomates cerises rondes</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="40" data-name="Tomates cerises confites" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Tomates_cerises_confites.png"
                                        alt="Tomates cerises confites">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Tomates cerises confites</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="41" data-name="Patate douce rôtie" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/Ingredient_patate_douce.png" alt="Patate douce rôtie">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Patate douce rôtie</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="42" data-name="Guacamole" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Guacamole.png" alt="Guacamole">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Guacamole</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="43" data-name="Courgettes grillées" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Courgette_laniere.png" alt="Courgettes grillées">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Courgettes grillées</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="44" data-name="Pickles d'oignons rouges" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/INGR_-_Pickels_Oignons_rouges_ZLdNFsV.png"
                                        alt="Pickles d'oignons rouges">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Pickles d'oignons rouges</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="45" data-name="Comté" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/comte_Lw6NOvA.png" alt="Comté">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Comté</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="46" data-name="Cheddar râpé" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/cheddar_200x200px.png" alt="Cheddar râpé">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Cheddar râpé</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="47" data-name="Artichauts" data-price="0.80"
                                data-calories="160">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/artichauts_FJyEC3d.png" alt="Artichauts">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Artichauts</h4>
                                        <span class="calories">160 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">0.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Step 3: Choose Sauce -->
                    <div class="order-step" id="step-3">
                        <h3>Choose Your Sauce</h3>
                        <div class="options-grid">
                            <div class="option-card" data-id="48" data-name="Huile d'olive" data-price="0.70"
                                data-calories="45">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Huile_dolive_vierge.png" alt="Huile d'olive">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Huile d'olive</h4>
                                        <span class="calories">45 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="49" data-name="Miel Moutarde" data-price="0.00"
                                data-calories="35">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Miel_Moutarde.png" alt="Miel Moutarde">
                                </div>
                                <div class="option-info">

                                    <div class="option-details">
                                        <h4>Miel Moutarde</h4>
                                        <span class="calories">35 KCAL</span>

                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="50" data-name="Olive balsamique" data-price="0.00"
                                data-calories="78">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Olive_Balsamique.png" alt="Olive balsamique">
                                </div>
                                <div class="option-info">

                                    <div class="option-details">
                                        <h4>Olive balsamique</h4>
                                        <span class="calories">78 KCAL</span>

                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="51" data-name="Pesto" data-price="0.00"
                                data-calories="73">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Pesto.png" alt="Pesto">
                                </div>
                                <div class="option-info">

                                    <div class="option-details">
                                        <h4>Pesto</h4>
                                        <span class="calories">73 KCAL</span>

                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="52" data-name="Mayonnaise" data-price="0.00"
                                data-calories="73">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Ranch.png" alt="Mayonnaise">
                                </div>
                                <div class="option-info">

                                    <div class="option-details">
                                        <h4>Mayonnaise</h4>
                                        <span class="calories">73 KCAL</span>

                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="53" data-name="Tomate basilic" data-price="0.00"
                                data-calories="73">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Tomate_Basilic_mJ0Kw3v.png" alt="Tomate basilic">
                                </div>
                                <div class="option-info">

                                    <div class="option-details">
                                        <h4>Tomate basilic</h4>
                                        <span class="calories">73 KCAL</span>

                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="54" data-name="Harissa" data-price="0.00"
                                data-calories="73">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Piquante_-2.png" alt="Harissa">
                                </div>
                                <div class="option-info">

                                    <div class="option-details">
                                        <h4>Harissa</h4>
                                        <span class="calories">73 KCAL</span>

                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="55" data-name="Soja" data-price="0.00" data-calories="73">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Soja.png" alt="Soja">
                                </div>
                                <div class="option-info">

                                    <div class="option-details">
                                        <h4>Soja</h4>
                                        <span class="calories">73 KCAL</span>

                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="56" data-name="Yaourt - Herbes" data-price="0.00"
                                data-calories="73">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Yaourt_Herbes.png" alt="Yaourt - Herbes">
                                </div>
                                <div class="option-info">

                                    <div class="option-details">
                                        <h4>Yaourt - Herbes</h4>
                                        <span class="calories">73 KCAL</span>

                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="57" data-name="Sans Sauce" data-price="0.00"
                                data-calories="0">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/SAUCE_-_Sans_Sauce.png" alt="Sans Sauce">
                                </div>
                                <div class="option-info">

                                    <div class="option-details">
                                        <h4>Sans Sauce</h4>
                                        <span class="calories">0 KCAL</span>

                                    </div>
                                    <div class="option-details">
                                        <span class="price">Included</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Step 4: Choose Drink -->
                    <div class="order-step" id="step-4">
                        <h3>Choose Your Drink</h3>
                        <div class="options-grid">
                            <div class="option-card" data-id="58" data-name="Cristaline plate - 50cl" data-price="1.50" data-calories="0">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BOISSON_-_Cristaline_Plate.png" alt="Water">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Cristaline plate - 50cl</h4>
                                        <span class="calories">0 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">1.50€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="59" data-name="Fanta - 33cl" data-price="1.50"
                                data-calories="0">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BOISSON_-_Fanta_Orange.png" alt="Fanta - 33cl">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Fanta - 33cl</h4>
                                        <span class="calories">0 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">1.50€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="60" data-name="Coca-Cola Sans Sucre - 33cl" data-price="1.80"
                                data-calories="139">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BOISSON_-_Coca_Cola_sans_sucre.png" alt="Coca-Cola Sans Sucre - 33cl">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Coca-Cola Sans Sucre - 33cl</h4>
                                        <span class="calories">139 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">1.80€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="61" data-name="Boga lime" data-price="2.20"
                                data-calories="112">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BOISSON_-_bogalime.png" alt="Boga lime">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Boga lime</h4>
                                        <span class="calories">112 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">2.20€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="62" data-name="Boga cidre" data-price="2.20"
                                data-calories="112">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BOISSON_-_bogacidre.png" alt="Boga cidre">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Boga cidre</h4>
                                        <span class="calories">112 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">2.20€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="63" data-name="Shark" data-price="2.20"
                                data-calories="112">
                                <div class="option-image">
                                    <button class="info-btn">Info</button>
                                    <img src="images/BOISSON_-_shark.png" alt="Shark">
                                </div>
                                <div class="option-info">
                                    <div class="option-details">
                                        <h4>Shark</h4>
                                        <span class="calories">112 KCAL</span>
                                    </div>
                                    <div class="option-details">
                                        <span class="price">2.20€</span>
                                    </div>

                                    <button class="add-btn">+</button>
                                </div>
                            </div>
                            <div class="option-card" data-id="63" data-name="Red bull" data-price="2.20"
                            data-calories="112">
                            <div class="option-image">
                                <button class="info-btn">Info</button>
                                <img src="images/BOISSON_-_redbull.png" alt="Red bull">
                            </div>
                            <div class="option-info">
                                <div class="option-details">
                                    <h4>Red bull</h4>
                                    <span class="calories">112 KCAL</span>
                                </div>
                                <div class="option-details">
                                    <span class="price">2.20€</span>
                                </div>

                                <button class="add-btn">+</button>
                            </div>
                        </div>
                        <div class="option-card" data-id="63" data-name="Orangina" data-price="2.20"
                            data-calories="112">
                            <div class="option-image">
                                <button class="info-btn">Info</button>
                                <img src="images/BOISSON_-_orangina.png" alt="Orangina">
                            </div>
                            <div class="option-info">
                                <div class="option-details">
                                    <h4>Orangina</h4>
                                    <span class="calories">112 KCAL</span>
                                </div>
                                <div class="option-details">
                                    <span class="price">2.20€</span>
                                </div>

                                <button class="add-btn">+</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="order-controls">
                    <button class="cancel-btn">Cancel</button>
                    <button class="next-btn" id="next-btn" disabled>Next</button>
                </div>
            </div>

            <div class="order-summary">
                <h3>Order Summary</h3>
                <div class="summary-content">
                    <div class="summary-item">
                        <span class="item-number">1</span>
                        <span class="item-label">Base</span>
                        <span class="item-selection" id="base-selection">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not selected</span>
                        <span class="item-status">0/1</span>
                    </div>
                    <div class="summary-item">
                        <span class="item-number">2</span>
                        <span class="item-label">Ingredients</span>
                        <span class="item-selection" id="ingredients-selection">&nbsp; Not selected</span>
                        <span class="item-status">0/4</span>
                    </div>
                    <div class="summary-item">
                        <span class="item-number">3</span>
                        <span class="item-label">Sauce</span>
                        <span class="item-selection" id="sauce-selection">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not selected</span>
                        <span class="item-status">0/1</span>
                    </div>
                    <div class="summary-item">
                        <span class="item-number">4</span>
                        <span class="item-label">Drink</span>
                        <span class="item-selection" id="drink-selection">&nbsp;&nbsp;&nbsp;&nbsp;Not selected</span>
                        <span class="item-status">0/1</span>
                    </div>
                    <div class="summary-total">
                        <div class="total-calories">
                            <span class="label">Calories</span>
                            <span class="value" id="total-calories">0 kcal</span>
                        </div>
                        <div class="total-ingredients">
                            <span class="label">4 ingredients</span>
                            <span class="value" id="ingredients-price">0.00 €</span>
                        </div>
                        <div class="total-supplements">
                            <span class="label">Supplements</span>
                            <span class="value" id="extras-price">0.00 €</span>
                        </div>
                        <div class="total-price">
                            <span class="label">TOTAL</span>
                            <span class="value" id="total-price">0.00 €</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="app__footer section__padding" id="login">
      
    
        
    
        <div class="app__footer-links">
          <div class="app__footer-links_contact">
            <h1 class="app__footer-headtext">Contact Us</h1>
            <p class="p__opensans">contact@boumizasquare.com</p>
            <p class="p__opensans">+216 73216216</p>
          </div>
    
          <div class="app__footer-links_logo">
            <img class="logo2"src="assets/Logo2.png" alt="footer_logo" />
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
       <!-- Modal for ingredient info -->
    <div class="modal" id="info-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h3 id="modal-title">Ingredient Information</h3>
            <div id="modal-content">
                <p>Nutritional information and details about the ingredient will appear here.</p>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

   
    
   
</body>

</html>