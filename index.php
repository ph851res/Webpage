<?php
    if(isset($_POST['email']) && $_POST['email'] != '') {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "kontakt@pr-wohndesign.de";
        $body = "";

        $body.= "From: ".$userName. "\r\n";
        $body.= "Email: ".$userEmail. "\r\n";
        $body.= "From: ".$message. "\r\n";

        mail($to, $messageSubject, $body);
        }
    }
?>

<!DOCTYPE html>
<script>
    console.log(<?php echo json_encode($_POST); ?>);
</script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wohndesign</title>
	<link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/69588b72e2.js" crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <div class="background-image"></div>
    <header>
        <nav class="navbar">
            <div class="brand-title"><a href="index.php"><span>W</span>ohndesign</a></div>
            <div class="navbar-links">
                <ul >
                    <li class="nav_item"><a class="nav_link" href="index.php">Home</a></li>
                    <li class="nav_item"><a class="nav_link" href="#contact">Kontakt</a></li>
                </ul>
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="icon fa-solid fa-bars"></i>
                <!--<i class="icon fa-solid fa-times"></i>-->
            </label>
        </nav>
        <section class="hero-container">
            <div class="hero-heading">
                <h2 class="logo"><span>W</span>ohndesign Peter Ressel</h2>
                <h2 class="hidden">Entdecken Sie die Magie der Raumverwandlung</h2>
            </div>
        </section>
        <section class="card-container">
            <a href="#floor">
                <div class="card">
                    <div class="card-half card-text">
                        <h2>Parkett-/Teppichboden</h2>
                    </div>
                        <img class="card-half card-image" src="img/Büro_Parkett.jpg" alt="Parkettboden">
                    <div class="arrow-field">
                        <i class="fa-solid fa-arrow-right fa-rotate-90"></i>
                    </div>
                </div>
            </a>
            <a href="#cushion">
                <div class="card">
                    <div class="card-text">
                        <h2>Polster</h2>
                    </div>
                    <div class="card-image">
                        <img class="card-image" src="img/Polster.jpg" alt="Parkettboden">
                    </div>
                    <div class="arrow-field">
                        <i class="fa-solid fa-arrow-right fa-rotate-90"></i>
                    </div>
                </div>
            </a>
            <a href="#plisse">
                <div class="card">
                    <div class="card-text">
                        <h2>Fensterdekoration</h2>
                    </div>
                    <div class="card-image">
                        <img class="card-image" src="img/Plissee_2.jpg" alt="Parkettboden">
                    </div>
                    <div class="arrow-field">
                        <i class="fa-solid fa-arrow-right fa-rotate-90"></i>
                    </div>
                </div>
            </a>
        </section>
    </header>
    <main>
        <section class="container">
            
                <div class="slideshow-container">
                <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <img src="img/badezimmer_gesamt.jpg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/blaues_sofa_hof.jpeg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/bunter_stuhl.jpeg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/hocker_fell_schlafzimmer.jpg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/liege_türkis_schlafzimmer.jpg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/sessel_grün_büro.jpg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/treppe_flur.jpeg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/badezimmer_unten.jpg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/bank_weiß_büro.jpg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/flur.jpeg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/sessel_liege_hocker_schlafzimmer.jpg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/badezimmer_boden.jpg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/kissen_blau_garten.jpeg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/parket_neubau.jpeg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/stuhl_zebra.jpeg" class="slideshow-img">
                    </div>
                    <div class="mySlides fade">
                        <img src="img/flur_oben.jpeg" class="slideshow-img">
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
           
            <section id="floor" class="description">
                <div class="description-text">
                    <div class="card-header-description"><h2>Böden</h2></div>
                    <div class="card-body-description">
                        <ul>
                            <li>Fertigpakett verklebt und schwimmend verlegt</li>
                            <li>Massivpakett in geölter oder lackierter Ausführung</li>
                            <li>Renovierung von Parkett: abschleifen und Neuversieglung in geölter oder lackierter Ausführung</li>
                            <li>Teppichboden: verklebt oder lose</li>
                        </ul>
                    </div>
                    <div class="card-footer-description">
                        <a href="#contact"><button class="btn">Kontakt</button></a>
                    </div>
                </div>
                <img class="description-img" src="img/Badezimmer_Parkett_1.jpg" alt="Parkettboden">
            </section>
            <section id="cushion" class="description">
                <img class="description-img" src="img/Polster.jpg" alt="Parkettboden">
                <div class="description-text">
                    <div class="card-header-description"><h2>Polster</h2></div>
                    <div class="card-body-description">
                        <ul>
                            <li>Polsterei: Neubezug von Stühlen/Sofas/Sesseln</li>
                            <li>Traditionelle Polsterei und Industriepolsterei</li>
                        </ul>
                    </div>
                    <div class="card-footer-description">
                        <a href="#contact"><button class="btn">Kontakt</button></a>
                    </div>
                </div>
            </section>
            <section id="plisse" class="description">
                <div class="description-text">
                    <div class="card-header-description"><h2>Fensterdekoration</h2></div>
                    <div class="card-body-description">
                        <ul>
                            <li>Konfigutation und Montage von Plissees und Jalousien</li>
                            <li>Anfertigung und Anbringen von Vorhängen</li>
                        </ul>
                    </div>
                    <div class="card-footer-description">
                        <a href="#contact"><button class="btn">Kontakt</button></a>
                    </div>
                </div>
                <img class="description-img" src="img/Plissee_2.jpg" alt="Parkettboden">
            </section>
        </section>
        <section class="contact-section">
            <div class="contact-info">
                <h2>Kontaktieren Sie mich gerne</h2>
                <p>Termine und Beratung nach telefonsicher Vereinbarung.</p>
            </div>
            <div class="contact-form-card">
                <div class="contact-form-card-data">
                    <div class="contact-form-data">
                        <div class="contact-form-data-icon">
                            <i class="fa-solid fa-phone fa-2xl"></i>
                        </div>
                        <div class="contact-form-data-text">
                            <h3>Mobil</h3>
                            <p>+49 170 4340736</p>
                        </div>
                    </div>
                    <div class="contact-form-data">
                        <div class="contact-form-data-icon">
                            <i class="fa-solid fa-envelope fa-2xl"></i>
                        </div>
                        <div class="contact-form-data-text">
                            <h3>E-Mail</h3>
                            <p>kontakt@pr-wohndesign.de</p>
                        </div>
                    </div>
                </div>
                <form id="contact" action="index.php" method="POST">
                    <div class="input-group">
                        <!--<i class="fa-regular fa-envelope"></i>-->
                        <input type="email" id="email" name="email" required placeholder="Ihre Email">
                    </div>
                    <div class="input-grid input-group">
                        <div >
                            <!--<i class="fa-regular fa-user"></i>-->
                            <input type="text" id="name" name="name" placeholder="Ihr Name">
                        </div>
                        <div class="input-icon">
                            <!--<i class="fa-regular fa-comment-dots"></i>-->
                            <input type="text" id="subject" name="subject" placeholder="Ihr Betreff">
                        </div>
                    </div>
                    <div class="input-group">
                        <!--<i class="fa-regular fa-comment"></i>-->
                        <textarea name="message" id="message" name="message" rows="10" placeholder="Ihre Nachricht"></textarea>
                    </div>
                    <button class="btn" type="submit">Absenden</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-links">
            <a href="impressum.html">Impressum</a>
            <span class="seperator">|</span>
            <a href="datenschutz.html">Datenschutz</a>
        </div>
        <div class="footer-copyrights">
            <p>&copy; <span id="currentYear">2024</span> Wohndesign Peter Ressel. Alle Rechte vorbehalten.</p>
        </div>
    </footer>
</body>
</html>