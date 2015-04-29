<?php
/*
Plugin Name: FAU ZfL Shortcodes
Plugin URI: https://www.zfl.fau.de/
Description: Spezielle Shortcodes für den Kontext Lehramt an der FAU. Die Shortcodes erhöhen die Leserbarkeit der Texte vorallem durch das abbr-Element.
Author: Johannes B. Hartmann
Author URI: https://www.zfl.fau.de/
Version: 1.0
Min WP Version: 4.0
Max WP Version: 4.0.1
*/


// Enable Shortcode in the WP title
add_filter( 'the_title', 'do_shortcode' );



function lakom($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="LehramtsstudiumKOMPAKT ist eine zusammenfassende und übersichtliche Darstellung des Lehramtsstudiums an der Friedrich-Alexander-Universität Erlangen-Nürnberg.">Lehramtsstudium<sup>kompakt</sup></abbr>'; 
   return $out;
}

add_shortcode('lakom', 'lakom');
add_shortcode('lehramtsstudiumkompakt', 'lakom');



function beplus($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= 'Betriebspraktikum<sup>plus</sup>';
   return $out;
}

add_shortcode('beplus', 'beplus');

add_shortcode('betriebspraktikumplus', 'beplus');

function leplus($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= 'Lernförderung<sup>plus</sup>';
   return $out;
}

add_shortcode('leplus', 'leplus');


add_shortcode('lernfoerderungplus', 'leplus');


//Shortcodes fuer haufige Abkuerzungen
function abbr_grundschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Grundschule">GS</abbr>';
   return $out;
}

add_shortcode('gs', 'abbr_grundschule');
add_shortcode('GS', 'abbr_grundschule');

function abbr_mittelschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Mittelschule">MS</abbr>';
   return $out;
}

add_shortcode('ms', 'abbr_mittelschule');
add_shortcode('MS', 'abbr_mittelschule');

function abbr_hauptschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Hauptschule">HS</abbr>';
   return $out;
}

add_shortcode('hs', 'abbr_hauptschule');
add_shortcode('HS', 'abbr_hauptschule');

function abbr_realschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Realschule">RS</abbr>';
   return $out;
}

add_shortcode('rs', 'abbr_realschule');
add_shortcode('RS', 'abbr_realschule');

function abbr_gymnasium($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Gymnasium">GYM</abbr>';
   return $out;
}

add_shortcode('gym', 'abbr_gymnasium');
add_shortcode('GYM', 'abbr_gymnasium');
add_shortcode('GY', 'abbr_gymnasium');
add_shortcode('gy', 'abbr_gymnasium');

function abbr_beruflicheschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Berufliche Schule">BS</abbr>';
   return $out;
}

add_shortcode('bs', 'abbr_beruflicheschule');
add_shortcode('BS', 'abbr_beruflicheschule');


function abbr_lpo1($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<a href="http://www.gesetze-bayern.de/jportal/portal/page/bsbayprod.psml?showdoccase=1&doc.id=jlr-LehrPrOBY2008rahmen&doc.part=X&doc.origin=bs
" title="Lehramtsprüfungsordnung I - LPO I im Detail"><abbr title="Lehramtsprüfungsordnung I - LPO I: Ordnung der Ersten Prüfung für ein Lehramt an öffentlichen Schulen">LPO I</abbr></a>';
   return $out;
}

add_shortcode('lpo1', 'abbr_lpo1');
add_shortcode('lpoI', 'abbr_lpo1');

function abbr_lapo($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<a href="http://www.zuv.fau.de/universitaet/organisation/recht/studiensatzungen/Lehramt/word/LAPO_Lehramt.MAI2014.pdf
" title="LAPO in der Fassung vom 13. Mai 2014"><abbr title="Studien- und Prüfungsordnung für die Modulprüfungen im
Rahmen der Ersten Lehramtsprüfung sowie den
lehramtsbezogenen Masterstudiengang Gymnasium
an der Universität Erlangen-Nürnberg">LAPO</abbr></a>';
   return $out;
}

add_shortcode('lapo', 'abbr_lapo');
add_shortcode('LAPO', 'abbr_lapo');

function abbr_b_ed($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Bachelor of Education">B.Ed.</abbr>';
   return $out;
}

add_shortcode('b.ed.', 'abbr_b_ed');
add_shortcode('B.Ed.', 'abbr_b_ed');
add_shortcode('B.ed.', 'abbr_b_ed');

function abbr_b_a($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Bachelor of Arts">B.A.</abbr>';
   return $out;
}

add_shortcode('b.a.', 'abbr_b_a');
add_shortcode('B.A.', 'abbr_b_a');
add_shortcode('B.a.', 'abbr_b_a');


function abbr_b_sc($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Bachelor of Science">B.Sc.</abbr>';
   return $out;
}

add_shortcode('b.sc.', 'abbr_b_sc');
add_shortcode('B.Sc.', 'abbr_b_sc');
add_shortcode('B.sc.', 'abbr_b_sc');


function abbr_m_ed($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Master of Education">M.Ed.</abbr>';
   return $out;
}

add_shortcode('m.ed.', 'abbr_m_ed');
add_shortcode('M.Ed.', 'abbr_m_ed');
add_shortcode('M.ed.', 'abbr_m_ed');

function abbr_fau($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Friedrich-Alexander-Universität Erlangen-Nürnberg">FAU</abbr>';
   return $out;
}

add_shortcode('FAU', 'abbr_fau');
add_shortcode('fau.', 'abbr_fau');

function abbr_zfl($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Zentrum für Lehrerinnen- und Lehrerbildung">ZfL</abbr>';
   return $out;
}

add_shortcode('zfl', 'abbr_zfl');
add_shortcode('ZFL', 'abbr_zfl');
add_shortcode('ZfL', 'abbr_zfl');



function abbr_lp($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Leistungspunkte nach dem ECTS (European Credit Transfer System)">LP</abbr>';
   return $out;
}

add_shortcode('lp', 'abbr_lp');
add_shortcode('LP', 'abbr_lp');


function abbr_la($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Lehramt">LA</abbr>';
   return $out;
}

add_shortcode('la', 'abbr_la');
add_shortcode('LA', 'abbr_la');


function abbr_gop($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Grundlagen- und Orientierungsprüfung">GOP</abbr>';
   return $out;
}

add_shortcode('gop', 'abbr_gop');
add_shortcode('GOP', 'abbr_gop');

function abbr_zula($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Zulassungsarbeit, offizielle Bezeichnung: schriftliche Hausarbeit (nach § 29 LPO I)">Zula</abbr>';
   return $out;
}

add_shortcode('Zula', 'abbr_zula');
add_shortcode('ZA', 'abbr_zula');

function abbr_zulassungsarbeit($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Offizielle Bezeichungen: schriftliche Hausarbeit (nach § 29 LPO I)">Zulassungsarbeit</abbr>';
   return $out;
}

add_shortcode('Zulassungsarbeit', 'abbr_zulassungsarbeit');

function abbr_sha($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Zulassungarbeit, offizielle Bezeichungen: schriftliche Hausarbeit (nach § 29 LPO I)">schriftliche Hausarbeit</abbr>';
   return $out;
}

add_shortcode('schriftliche Hausarbeit', 'abbr_zulassungsarbeit');

function abbr_bafoeg($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Bundesausbildungsförderungsgesetz">BAföG</abbr>';
   return $out;
}

add_shortcode('BAföG', 'abbr_bafoeg');


function abbr_fauschulnetz($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="FAU-Schulnetz ist die Vereinigung aller Projekte und Kooperationen zwischen Schulen und der Friedrich-Alexander-Universität Erlangen-Nürnberg">FAU-Schulnetz</abbr>';
   return $out;
}

add_shortcode('FAU-Schulnetz', 'abbr_fauschulnetz');


function abbr_fauschuleinnovativ($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="FAU-SchuleINNOVATIV: Ist ein Prädikat welches für besondere FAU-Schulen verliehen wird.">FAU-Schule<sup>innovativ</sup></abbr>';
   return $out;
}

add_shortcode('FAU-Schule-innovativ', 'abbr_fauschuleinnovativ');


function style_tabby_always_accordion($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="FAU-SchuleINNOVATIV: Ist ein Prädikat welches für besondere FAU-Schulen verliehen wird.">FAU-Schule<sup>innovativ</sup></abbr>';
   return $out;
}

add_shortcode('FAU-Schule-innovativ', 'style_tabby_always_accordion');




function abstand($atts, $content = null) {
   return '<div class="abstand"></div>';
}
add_shortcode( 'abstand', 'abstand' );




if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'Kontakt', 150, 193, true ); //300 pixels wide (and unlimited height)
	}


function startpfeil($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<img src="https://www.zfl.fau.de/system/themes/zflchild/img/pfeil-gruen.png">';
   return $out;
}
add_shortcode('startpfeil', 'startpfeil');


/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	add_management_page( 'Shortcodes you may Use', 'LA-Shorty Shortcodes', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
	
	
}

