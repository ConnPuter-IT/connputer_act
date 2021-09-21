<?php
/**
 * Created by PhpStorm.
 * User: Büro
 * Date: 21.09.2018
 * Time: 18:12
 */

header( "Content-Type: text/html; charset=utf-8" );
error_reporting( E_ALL );

include_once( "helper.php" );
include_once( "f_emailcheck.php" );

$vorname  = null;
$nachname = null;
$email    = null;
$betreff  = null;
$comment  = null;
$wir      = null;

if ( isset( $_POST["vorname"] ) ) {
	$vorname = ( $_POST["vorname"] );
};
if ( isset( $_POST["nachname"] ) ) {
	$nachname = ( $_POST["nachname"] );
};
if ( isset( $_POST["email"] ) ) {
	$email = ( $_POST["email"] );
};
if ( isset( $_POST["betreff"] ) ) {
	$betreff = ( $_POST["betreff"] );
};
if ( isset( $_POST["comment"] ) ) {
	$comment = ( $_POST["comment"] );
};

$vorname  = trim( htmlspecialchars( $vorname ) );
$nachname = trim( htmlspecialchars( $nachname ) );
$email    = trim( htmlspecialchars( $email ) );
$betreff  = trim( htmlspecialchars( $betreff ) );
$comment  = trim( htmlspecialchars( $comment ) );

// Betreff auf maximale Länge prüfen:
$x = strlen( $betreff );
if ( $x > 25 ) {
	$y       = $x - 25;
	$betreff = substr( $betreff, 0, - $y );
};
$betreff = "=?utf-8?q?" . quoted_printable_encode( $betreff ) . "?=";

// Absender für Mailfuß zusammensetzen:
$absender = "Abs.: " . $nachname . ', ' . $vorname . " (" . $email . ")";

// Kommentar zusammensetzen:
$comment = $comment . "\n\n\n" . $absender;
$comment = wordwrap( $comment, 72 );

// Mailheader bauen:
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=utf-8";
$headers[] = "From: {$email}";
// falls Bcc benötigt wird:
$headers[] = "Bcc: arananka@gmx.de";
$headers[] = "Reply-To: {$email}";
$headers[] = "Subject: {$betreff}";
$headers[] = "X-Mailer: PHP/" . phpversion();

// echo_r( $comment );
// echo_r( $headers );

// Empfängeradresse festlegen:
$wir = "info@connputer.de";
//$wir = "arananka@gmx.de";

// Mail versenden:
mail( $wir, $betreff, $comment, implode( "\r\n", $headers ) );

// Nach dem Senden zurück zum Formular:
header( "LOCATION: ../../sites/kontakt.php?ifsend=0/#formular" );
exit;
