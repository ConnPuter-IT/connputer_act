<!DOCTYPE html>
<html lang="de">
<head>
    <title>ConnPuter Kontakt</title>
	<?php include_once( "../sites/static/head.html" ); ?>
</head>

<body>

<?php
include_once( "../sites/static/header.html" );
?>

<!-- MAIN kontakt.php -->
<div class="container-fluid aktu-bg">
    <div class="container">
        <h1 class="heading-container">Kontakt</h1>
        <div class="bredcumb-con">
            <ul class="my-breadcumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid aktue-con">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 about-text-container">
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <div class="col-xs-12 col-md-12 map-container no-padding">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1048.7218336986548!2d12.380294603858413!3d51.30569797344352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a6f9c09822295f%3A0x21818522591fc2ee!2sConnPuter+%2F+Dominik+Rein!5e0!3m2!1sen!2sin!4v1525255440853"
                                    width="100%" height="550" frameborder="0"
                                    style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 contact-info">
                        <div class="col-xs-12 col-md-12">
                            <h2 class="contact-us">Kontaktaufnahme</h2>
                            <div class="address our-address">
                                <div class="address__icon">
                                    <i class="fa fa-map-marker"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="address__details ">
                                    <h2 class="ct__title">unsere adresse</h2>
                                    <p>ConnPuter
                                        <br>Dominik Rein
                                        <br>Bornaische Str. 72
                                        <br>04277 Leipzig </p>
                                </div>
                            </div>
                            <div class="address opening-hours">
                                <div class="address__icon">
                                    <i class="fa fa-envelope-open"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="address__details"
                                     style="padding:25px !important">
                                    <h2 class="ct__title">
                                        Öfnungszeiten</h2>
                                    <p>
                                        <span>Montag bis Freitag <br>
                                            10 bis 18 Uhr</span>
                                    Uhr</span>
                                    </p>
                                </div>
                            </div>
                            <div class="address phone-number">
                                <div class="address__icon">
                                    <i class="fa fa-phone"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="address__details"
                                     style="padding:30px !important">
                                    <h2 class="ct__title">telefon & fax</h2>
                                    <p>Tel.: 0 341-58 067 604<br>
                                        Fax: 0 341-58 067 605<br>
                                        Mail: info@connputer.de</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Formular START -->
                    <div class="col-xs-12 col-md-12 product-description contact-container">
                        <a id="formular"></a>
                        <h2>Fragen? Anregungen? Kritik? Schreiben Sie uns!</h2>
                        <div class="abstand"></div>
                        <div class="form-group has-success">
                            <label class="control-label" for="sendgood"></label>
                            <input
								<?php // Auslösen der Sendebestätigung:
								if ( isset( $_GET["ifsend"] ) ) {
									echo "type=text";
								} else {
									echo "type=hidden";
								};
								?>
                                    class="form-control"
                                    id="sendgood"
                                    placeholder="Ihr Kommentar wurde versendet. Wir melden uns Bei Ihnen."
                                    readonly
                                    style="background-color: #c9e2b3; border-color:#5e5e5e"
                            >
                        </div>
                        <form class="form-horizontal"
                              action="../php/validation.php"
                              method="post"
                              name="formula_one"
                              accept-charset="UTF-8"
                              autocomplete="off">
                            <div class="form-group">
                                <label for="vorname"></label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <input type="text"
                                           class="form-control"
                                           id="vorname"
                                           name="vorname"
                                           placeholder="Vorname"
                                           required
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nachname"></label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <input type="text"
                                           class="form-control"
                                           id="nachname"
                                           name="nachname"
                                           placeholder="Nachname"
                                           required
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <input type="text"
                                           class="form-control"
                                           id="email"
                                           name="email"
                                           pattern="(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|'(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*')@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])"
                                           placeholder="EMail"
                                           title="Geben Sie eine gültige E-Mail Adresse in der Form max.musterman@host.de ein!"
                                           required
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="betreff"></label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <input type="text"
                                           class="form-control"
                                           id="betreff"
                                           name="betreff"
                                           placeholder="Betreff (max. 25 Zeichen)"
                                           maxlength="25"
                                           required
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comment">Ihr Kommentar</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control"
                                              rows="5"
                                              cols="50"
                                              wrap="hard"
                                              id="comment"
                                              name="comment"
                                              maxlength="999"
                                              required
                                    >
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="submit"
                                            class="btn btn-primary">Absenden
                                    </button>
                                </div>
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="reset"
                                            class="btn btn-danger">Zurücksetzen
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Formular END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MAIN End -->

<?php include_once( "../sites/static/footer.html" ); ?>

</body>
</html>
