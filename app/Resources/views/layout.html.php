<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
		
		<!--
                 _            _             _           _                 
                (_)          | |           | |         (_)                
  __ _ _ __ __ _ _  ___ _ __ | |_ ______ __| | ___  ___ _  __ _ _ __  ___ 
 / _` | '__/ _` | |/ _ \ '_ \| __|______/ _` |/ _ \/ __| |/ _` | '_ \/ __|
| (_| | | | (_| | |  __/ | | | |_      | (_| |  __/\__ \ | (_| | | | \__ \
 \__,_|_|  \__, |_|\___|_| |_|\__|      \__,_|\___||___/_|\__, |_| |_|___/
            __/ |                                          __/ |          
           |___/                                          |___/           

-->		
		
        <title>Tattookunst Schranz - Tattoo und Piercing - Beckenried Nidwalden</title>
        <meta name="description" content="Tattoo- und Piercingkunst in Beckenried. Wir entwerfen für jeden unserer Kunden ein individuelles Tattoo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="theme-color" content="red">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="one-page">

        <div class="wrapper">
			
            <header id="master-header" class="full-screen overlayed">
			
                <div class="bg-overlay"></div>
                <div id="media-container"></div>
				<div id="home"></div>

                <div class="top-header">

                    <div class="container">

                        <!-- ============ Main Navigation - START ============ -->

                        <a id="nav-toggle" href="#"><span></span></a>
                        <nav id="nav-menu">
                            <ul>
                                <li><a title="Home" href="#home">Home</a></li>
                                <li><a title="Tattoos und Piercings" href="#studio">Tattoos und Piercings</a></li>
                                <li><a title="Portfolio" href="#portfolio">Portfolio</a></li>
                                <li><a title="Kontakt" href="#kontakt">Kontakt</a></li>
                                <li><a title="Anfrage" href="#anfrage">Anfrage</a></li>
                            </ul>
                        </nav>

                         <!-- ============ Main Navigation - ENDE ============ -->
                        

                    </div>
                </div>

                <div id="brand">

                    <h1 id="logo"><img src="/static/img/logo.png" alt="The Tattooist - Tattoo Studio"></h1>
                    <div class="info">
                        <span>Tattoos</span><img src="/static/img/divider.png" alt=""><span>Piercings</span>
                    </div>

                </div>

            </header>

            <!-- ============ Main Header - END ============ -->

            <div id="main">

                <!-- ============ Contacts Bar - START ============ -->

                <div id="contacts-bar" class="row">
                    <div class="address col-md-6"><strong>Tattookunst Schranz</strong>, Seestrasse 16 - 6375 Beckenried</div>
                    <div class="other col-md-6">
                        <span class="contact"><i class="fa fa-phone"></i>Tel: <strong>041 620 17 09</strong></span>
                        <span class="contact"><i class="fa fa-envelope"></i>Email: <a href="mailto:tattookunst@gmail.com"><strong>tattookunst@gmail.com</strong></a></span>
                    </div>
                </div>

                <!-- ============ Contacts Bar - END ============ -->
                
                
                
                <!-- ============ About Us - START ============ -->
                

                <div id="studio" class="section white">

                    <div class="section-title bg-glyph pen center">
                        <h1><?= $this->input("HomepageTitel", ["width" => 540]); ?></h1>
                        <h2><?= $this->input("HomepageUntertitel", ["width" => 540]); ?></h2>
                    </div>

                    <div class="content container">

                        <div class="row">

                            <div class="col-md-6">

                                <h3><?= $this->input("titel_ueber_uns", ["width" => 540]); ?></h3>
                                <p><?= $this->textarea("text_ueber_uns", [
                                    "nl2br" => true,
                                    "height" => 300,
                                    "placeholder" =>
                                    "Textblock Über uns..." ]); ?></p>
                                <hr>
                                <h3><?= $this->input("titel_unser_service", ["width" => 540]); ?></h3>
                                <p><?= $this->textarea("text_unser_service", [
                                    "nl2br" => true,
                                    "height" => 300,
                                    "placeholder" =>
                                    "Textblock unser Service..." ]); ?></p>
                                <hr>
                                <div class="tabs">
                                    <ul>
                                        <li class="title-tab"><a href="#tattoo">Tattoo</a></li>
                                        <li class="title-tab"><a href="#piercing">Piercing</a></li>
                                    </ul>
                                    <div class="content-tab">
                                        <div id="tattoo" class="tab">
                                            <?= $this->textarea("text_tattoo", [
                                            "nl2br" => true,
                                            "height" => 300,
                                            "placeholder" =>
                                            "Hier steht was zu Tattoos..." ]); ?>
                                        </div>
                                        <div id="piercing" class="tab">
                                            <?= $this->textarea("text_percings", [
                                            "nl2br" => true,
                                            "height" => 300,
                                            "placeholder" =>
                                            "Der Piercing Bereich..." ]); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <?= $this->image("studio-bild1"); ?>                                
                                <?= $this->image("studio-bild2"); ?>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- ============ About Us - END ============ -->
                

                <!-- ============ Last Works - START ============ -->

                <div id="portfolio" class="section">
                
                    <div class="section-title bg-glyph pen center">
                        <h2><?= $this->input("titel_unsere_arbeiten", ["width" => 540]); ?></h2>
                    </div>  
                    
                    <div class="content container">
                        
                        <div class="works">
                            
                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <?= $this->image("portfolio1"); ?>
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-01.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <img src="/static/img/tattoos/tattoo-02.jpg" alt="Work 02">
                                    <div class="thumb-links">
                                        <a class="zoom" href="/static/img/tattoos/tattoo-02.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <img src="/static/img/tattoos/tattoo-03.jpg" alt="Work 03">
                                    <div class="thumb-links">
                                        <a class="zoom" href="/static/img/tattoos/tattoo-03.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/tattoos/tattoo-04.jpg" alt="Work 04">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-04.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6"> 

                                <div class="work-thumb">
                                    <img src="img/tattoos/tattoo-05.jpg" alt="Work 05">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-05.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/tattoos/tattoo-06.jpg" alt="Work 06">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-06.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/tattoos/tattoo-07.jpg" alt="Work 07">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-07.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/tattoos/tattoo-08.jpg" alt="Work 08">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-08.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/tattoos/tattoo-09.jpg" alt="Work 09">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-09.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/tattoos/tattoo-10.jpg" alt="Work 10">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-10.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">
                         
                                <div class="work-thumb">
                                    <img src="img/tattoos/tattoo-12.jpg" alt="Work 12">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-12.jpg"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="work col-md-3 col-sm-6">

                                <div class="work-thumb">
                                    <img src="img/tattoos/tattoo-13.jpg" alt="Work 13">
                                    <div class="thumb-links">
                                        <a class="zoom" href="img/tattoos/tattoo-13.jpg"></a>
                                    </div>
                                </div>
                                
                                

                            </div>

                        </div>

                    </div>

                </div>
                
                <!-- ============ Portfolio Fertig ============ --> 

                <!-- ============ Instagram Banner Start ============ -->
                
                <!-- <div class="section-title bg-glyph pen center fullwidht">
                        <h2>Aktuelle Arbeiten auf Instagram</h2>
                    </div>

                <a class="instagram-bar feed-bg" href="https://www.instagram.com/tattookunst_nidwalden_swiss/"></a>
                    <hr class="md-divider"> -->

                <!-- ============ Instagram Banner Ende ============ -->

                <!-- ============ Call to Action Banner ============ -->

                <div id="anfrage" class="section cta dark">

                    <h2><?= $this->input("titel_anfrage", ["width" => 540]); ?></h2>

                    <div class="cta-info"><?= $this->input("titel-vor-anfrage", ["width" => 540]); ?><strong><?= $this->input("titel_anfrage_fett", ["width" => 540]); ?></strong></div>

                    <a class="btn md light btn-popup" href="#request"><i class="fa fa-thumb-tack"></i>Anfrage</a>

                   <!-- ============ Anfrage Start ============ -->

                    <form id="request" class="contact-form popup mfp-hide" action="mailer/appointment.php" method="post">

                        <div class="head"><img src="img/logo.png" alt="logo"></div>
                        <h3 class="focus-title"><i class="fa fa-thumb-tack"></i>Anfrage Tattoo und Piercing</h3>

                        <label>
                            <strong>Vorname *</strong>
                            <input class="required" type="text" name="first_name">
                        </label>
                        <label>
                            <strong>Nachname *</strong>
                            <input class="required" type="text" name="last_name">
                        </label>
                        <label>
                            <strong>E-Mail *</strong>
                            <input class="required" type="text" name="email">
                        </label>
                        <label>
                            <strong>Telefon *</strong>
                            <input class="required" type="text" name="phone">
                        </label>
                        <div class="radio label">
                            <strong>Was intressiert Dich?</strong>
                            <label>
                                <input type="radio" value="Black &amp; White" name="color" checked>
                                <span class="radio-replacer"></span>
                                <span>Tattoo</span>
                            </label>
                            <label>
                                <input class="required" type="radio" value="Color" name="color">
                                <span class="radio-replacer"></span>
                                <span>Piercing</span>
                            </label>
                        </div>
                        <label><strong>Beschreibung *</strong>
                            <textarea class="required" name="description"></textarea>
                        </label>
                        <hr>
                         <label>
                            <input class="required" type="checkbox" name="check">
                            <span class="checkbox-replacer"></span>
                            <strong>SPAM Schutz *</strong>
                        </label>
                        <hr>
                        <p>( <strong>*</strong> ) = Pflichtfelder</p>
                        <input class="submit btn md" type="submit" name="submit" value="Request Appointment">
                        <input type="hidden" name="form_type" value="appointment">

                    </form>

                    <!-- ============ Anfrage Ende ============ -->


                </div>

                <!-- ============ Call to Action - END ============ -->

 

 

                <!-- ============ Contact form - START ============ -->

                <div id="kontakt" class="section">

                    <div class="section-title bg-glyph pen center">
                        <h2><?= $this->input("titel_kontaktieren_uns", ["width" => 540]); ?></h2>
                    </div>

                    <div class="content container">

                        <form class="contact-form row" action="mailer/contact.php" method="post">
                            <div class="col-md-6">
                                <label><strong>Name *</strong>
                                    <input class="required" type="text" name="name">
                                </label>
                                <label><strong>Email *</strong>
                                    <input class="required" type="text" name="email">
                                </label>
                                <label><strong>Betreff</strong>
                                    <select name="subject">
                                        <option value="Subject 1">Tattoo</option>
                                        <option value="Subject 2">Piercing</option>
                                        <option value="Subject 3">Sonstiges</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label><strong>Nachricht *</strong>
                                    <textarea class="required" name="message"></textarea>
                                </label>
                                <p>( <strong>*</strong> ) = Pflichtfeld</p>
                                <input class="submit btn md" type="submit" name="submit" value="Nachricht senden">
                            </div>
                            <input type="hidden" name="form_type" value="contact">
                        </form>

                    </div>

                </div>

                <!-- ============ Contact form - END ============ -->

                <!-- ============ Map - START ============ -->

                <div id="map"></div>

                <!-- ============ Map - END ============ -->

            </div>

            <!-- ============ Footer - START ============ -->

            <footer class="dark">

                <div class="container">

                    <div class="row">

                        <div class="footer-col col-md-4 col-sm-6">

                            <h3 class="focus-title"><?= $this->input("footer_ueber_uns", ["width" => 540]); ?></h3>
                            <p><img width="200" class="align-center" src="img/logo.png" alt="Tattookunst Schranz Logo"></p><br>
                            <p>Willkomen bei Tattoo- und Piercingkunst in Beckenried. Wir haben keine Kataloge oder Vorlagen sondern entwerfen für jeden unserer Kunden ein individuelles Tattoo.</p>

                        </div>

                        <div class="footer-col col-md-4 col-sm-6">

                            <h3 class="focus-title"><i class="fa fa-clock-o"></i><?= $this->input("titel_oeffnungszeiten", ["width" => 540]); ?></h3>
                            <dl class="working-days">
                                <dt>Montag</dt>
                                <dd><?= $this->input("montag", ["width" => 540]); ?></dd>
                                <dt>Dienstag</dt>
                                <dd><?= $this->input("dienstag", ["width" => 540]); ?></dd>
                                <dt>Mittwoch</dt>
                                <dd><?= $this->input("mittwoch", ["width" => 540]); ?></dd>
                                <dt>Donnerstag</dt>
                                <dd><?= $this->input("donnerstag", ["width" => 540]); ?></dd>
                                <dt>Freitag</dt>
                                <dd><?= $this->input("freitag", ["width" => 540]); ?></dd>
                                <dt>Samstag</dt>
                                <dd><?= $this->input("samstag", ["width" => 540]); ?></dd>
                                <dt>Sonntag</dt>
                                <dd><?= $this->input("sonntag", ["width" => 540]); ?></dd>
                            </dl>

                        </div>

                        <div class="footer-col footer-contacts col-md-4 col-sm-12">

                            <div class="contact-item"><span>Tattookunst Schranz</span> <strong>Seestrasse 16<br>6375 Beckenried</strong></div>
                            <div class="contact-item"><span>Tel:</span> <strong>041 620 17 09</strong></div>
                            <div class="contact-item"><span>Email:</span> <strong><a href="mailto:tattookunst@gmail.com">tattookunst@gmail.com</a></strong></div>
                            <div class="contact-item">
                                <span>Folge uns</span>
                                <ul class="social-links">
                                    <li><a title="Facebook" href="https://www.facebook.com/pages/Tattookunst/207075735979118"><i class="fa fa-facebook"></i></a></li>
                                    <li><a title="Instagram" href="https://www.instagram.com/tattookunst_nidwalden_swiss/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="copyright">
                    &copy; 2018 - <strong>Tattookunst Schranz</strong> - <a class="light btn-popup" href="#impressum">Impressum</a>
                    
                    <!-- ============ Impressum Popup START ============ -->         
                    
                    <form id="impressum" class="contact-form popup mfp-hide">

                        <div class="head"><img src="/static/img/logo.png" alt="logo"></div>
                        <h3 class="focus-title"><i class="fa fa-thumb-tack"></i>Impressum</h3>

                        <p><strong>Firma:</strong> Tattookunst Schranz<br><strong>Adresse:</strong> Seestrasse 16, 6375 Beckenried<br><strong>Telefon:</strong> 041 620 17 09<br><strong>E-Mail-Adresse:</strong> <a href="mailto:tattookunst@gmail.com">tattookunst@gmail.com</a><br><br>
                        <strong>Rechtliche Hinweise</strong><br>Diese Website verwendet Cookies. Cookies sind kleine Textdateien, die beim Besuch dieser Website in Ihrem Computer dauerhaft oder temporär gespeichert werden. Zweck der Cookies ist insbesondere die Analyse der Nutzung dieser Website zur statistischen Auswertung sowie für kontinuierliche Verbesserungen. In Ihrem Browser können Sie Cookies in den Einstellungen jederzeit ganz oder teilweise deaktivieren. Bei deaktivierten Cookies stehen Ihnen allenfalls nicht mehr alle Funktionen dieser Website zur Verfügung.<br><br><strong>Kontept und Realisation</strong><br>Argient-Designs<br>Riedmatt 5<br>6373 Ennetbürgen<br><br><strong>Tel:</strong> 081 850 05 95<br><strong>Mail:</strong> hello@argient-designs.ch<br><strong>Web:</strong> <a href="https://argient-designs.ch">https://argient-designs.ch</a></p>
                    </form>
                    
                    <!-- ============ Impressum Popup ENDE ============ --> 
                    
                </div>

            </footer>

            <!-- ============ Footer - ENDE ============ -->

            <div class="content-loader">
                <div class="loader"></div>
            </div>
        </div>
        
         <!-- ============ ASSETS und STUFF ============ -->

        <script src="/static/js/jquery.min.js"></script>
        <script src="/static/js/common.js"></script>
        <script src="/static/js/config.js"></script>
        <script src="/static/js/main.js"></script>
        


    <script>
        var imgSlider = ['img/slide-1.jpg', 'img/slide-2.jpg', 'img/slide-3.jpg'];  
        $('#media-container').backstretch(imgSlider, { duration: 2500, fade: 850 });
    </script>

        <!-- Google Maps Scripts -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAuFo4eOReQHpeTH8uDhrSztKQVfDFMrI"></script>
        <script src="/static/js/map.js"></script>

    </body>
</html>