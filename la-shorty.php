<?php
/*
Plugin Name: FAU ZfL Shortcodes
Plugin URI: https://www.zfl.fau.de/
Description: Spezielle Shortcodes für den Kontext Lehramt an der FAU. Die Shortcodes erhöhen die Leserbarkeit der Texte vor allem durch das abbr-Element.
Author: Zentrum für Lehrerinnen- und Lehrerbildung der FAU
Author URI: https://www.zfl.fau.de/
Version: 1.2.1
Min WP Version: 4.0
*/

// Enable Shortcode in the WP title
add_filter( 'the_title', 'do_shortcode' );



// Shortcodes fuer ZFL
function abbr_mein_campus($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="mein campus ist das Verwaltungsportal für Studierende und biete folgende Dienste: persönlichen Daten ändern, für Prüfungen anmelden, Noten einsehen, aktuelle Studien- und Immatrikulationsbescheinigungen ausdrucken." rel="tooltip">mein campus</abbr> <a href="https://www.campus.uni-erlangen.de/" title="mein Campus in neuem Fenster öffnen"><i class="fa fa-external-link-square"></i></a>';
   return $out;
}

add_shortcode('mein campus', 'abbr_mein_campus');


function zfl_sc_staatsexamen($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="1. Staatsexamen, offizielle Bezeichnung: Erste Staatsprüfungen für ein Lehramt an öffentlichen Schulen" rel="tooltip">Staatsexamen</abbr>'; 
   return $out;
}

add_shortcode('staatsexamen', 'zfl_sc_staatsexamen');
add_shortcode('Staatsexamen', 'zfl_sc_staatsexamen');

function zfl_sc_staatsexamen2($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="2. Staatsexamen, offizielle Bezeichnung: Zweite Staatsprüfungen für ein Lehramt an öffentlichen Schulen" rel="tooltip">2. Staatsexamen</abbr>'; 
   return $out;
}

add_shortcode('2. Staatsexamen', 'zfl_sc_staatsexamen2');



function lakom($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="LehramtsstudiumKOMPAKT ist eine zusammenfassende und übersichtliche Darstellung des Lehramtsstudiums an der Friedrich-Alexander-Universität Erlangen-Nürnberg." rel="tooltip">Lehramtsstudium<sup>kompakt</sup></abbr>'; 
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
function abbr_fibs($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Fortbildung in bayerischen Schulen" rel="tooltip">FIBS</abbr>';
   return $out;
}

add_shortcode('FIBS', 'abbr_fibs');

function abbr_grundschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Grundschule" rel="tooltip"><span class="schularticon gs">GS</span></abbr>';
   return $out;
}

add_shortcode('gs', 'abbr_grundschule');
add_shortcode('GS', 'abbr_grundschule');

function abbr_mittelschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Mittelschule(n)" rel="tooltip"><span class="schularticon ms">MS</span></abbr>';
   return $out;
}

add_shortcode('ms', 'abbr_mittelschule');
add_shortcode('MS', 'abbr_mittelschule');

function abbr_hauptschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Hauptschule(n)" rel="tooltip"><span class="schularticon ms">HS</span></abbr>';
   return $out;
}

add_shortcode('hs', 'abbr_hauptschule');
add_shortcode('HS', 'abbr_hauptschule');

function abbr_realschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Realschule(n)" rel="tooltip"><span class="schularticon rs">RS</span></abbr>';
   return $out;
}

add_shortcode('rs', 'abbr_realschule');
add_shortcode('RS', 'abbr_realschule');

function abbr_gymnasium($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Gymnasium(en)" rel="tooltip"><span class="schularticon gym">GYM</span></abbr>';
   return $out;
}

add_shortcode('gym', 'abbr_gymnasium');
add_shortcode('GYM', 'abbr_gymnasium');
add_shortcode('GY', 'abbr_gymnasium');
add_shortcode('gy', 'abbr_gymnasium');

function abbr_beruflicheschule($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Berufliche Schule(n)" rel="tooltip"><span class="schularticon bs">BS</span></abbr>';
   return $out;
}

add_shortcode('bs', 'abbr_beruflicheschule');
add_shortcode('BS', 'abbr_beruflicheschule');


function abbr_lpo1($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Lehramtsprüfungsordnung I - LPO I: Ordnung der Ersten Prüfung für ein Lehramt an öffentlichen Schulen" rel="tooltip">LPO I</abbr> <a href="http://gesetze-bayern.de/Content/Document/BayLPO_I?AspxAutoDetectCookieSupport=1" target="_blank" title="Lehramtsprüfungsordnung I auf externer Seite Anzeigen"><i class="fa fa-external-link-square"></i></a>';
   return $out;
}

add_shortcode('lpo1', 'abbr_lpo1');
add_shortcode('lpoI', 'abbr_lpo1');
add_shortcode('LPOI', 'abbr_lpo1');
add_shortcode('LPO-I', 'abbr_lpo1');

function abbr_lpo2($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Lehramtsprüfungsordnung II - LPO II: Ordnung der Zweiten Prüfung für ein Lehramt an öffentlichen Schulen" rel="tooltip">LPO II</abbr> <a href="http://www.gesetze-bayern.de/jportal/?quelle=jlink&docid=jlr-Lehr2StPrOBY2004rahmen&psml=bsbayprod.psml&max=true&aiz=true" target="_blank" title="Lehramtsprüfungsordnung II auf externer Seite Anzeigen"><i class="fa fa-external-link-square"></i></a>';
   return $out;
}

add_shortcode('LPO-II', 'abbr_lpo2');

function abbr_lapo($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Studien- und Prüfungsordnung für die Modulprüfungen im
Rahmen der Ersten Lehramtsprüfung sowie den
lehramtsbezogenen Masterstudiengang Gymnasium
an der Universität Erlangen-Nürnberg" rel="tooltip">LAPO</abbr>';
   return $out;
}

add_shortcode('lapo', 'abbr_lapo');
add_shortcode('LAPO', 'abbr_lapo');

function abbr_b_ed($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Bachelor of Education" rel="tooltip">B.Ed.</abbr>';
   return $out;
}

add_shortcode('b.ed.', 'abbr_b_ed');
add_shortcode('B.Ed.', 'abbr_b_ed');
add_shortcode('B.ed.', 'abbr_b_ed');

function abbr_b_a($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Bachelor of Arts" rel="tooltip">B.A.</abbr>';
   return $out;
}

add_shortcode('b.a.', 'abbr_b_a');
add_shortcode('B.A.', 'abbr_b_a');
add_shortcode('B.a.', 'abbr_b_a');


function abbr_b_sc($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Bachelor of Science" rel="tooltip">B.Sc.</abbr>';
   return $out;
}

add_shortcode('b.sc.', 'abbr_b_sc');
add_shortcode('B.Sc.', 'abbr_b_sc');
add_shortcode('B.sc.', 'abbr_b_sc');


function abbr_m_ed($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Master of Education" rel="tooltip">M.Ed.</abbr>';
   return $out;
}

add_shortcode('m.ed.', 'abbr_m_ed');
add_shortcode('M.Ed.', 'abbr_m_ed');
add_shortcode('M.ed.', 'abbr_m_ed');

function abbr_fau($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Friedrich-Alexander-Universität Erlangen-Nürnberg" rel="tooltip">FAU</abbr>';
   return $out;
}

add_shortcode('FAU', 'abbr_fau');
add_shortcode('fau.', 'abbr_fau');

function abbr_zfl($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Zentrum für Lehrerinnen- und Lehrerbildung" rel="tooltip">ZfL</abbr>';
   return $out;
}

add_shortcode('zfl', 'abbr_zfl');
add_shortcode('ZFL', 'abbr_zfl');
add_shortcode('ZfL', 'abbr_zfl');


function abbr_ssc($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Studierenden Service Center" rel="tooltip">SSC</abbr>';
   return $out;
}

add_shortcode('SSC', 'abbr_ssc');
add_shortcode('ssc', 'abbr_ssc');

function abbr_kw($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );
	$out .= '<abbr title="Kalenderwoche" rel="tooltip">KW</abbr>';
   return $out;
}

function abbr_ukw($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );
	if(date("W") % 2 == 0){
	$out .= '<abbr title="Heute: keine ungerade Kalenderwoche" rel="tooltip">ungerade KW</abbr>';
	} else {
	$out .= '<abbr title="Heute: ungerade Kalenderwoche" rel="tooltip"><span style="color:#688835;" rel="tooltip">ungerade KW <i class="fa fa-check-circle" rel="tooltip"></i></span></abbr>';
	}
   return $out;
}

add_shortcode('ungerade-KW', 'abbr_ukw');

function abbr_gkw($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );
	if(date("W") % 2 == 0){
	$out .= '<abbr title="Heute: gerade Kalenderwoche" rel="tooltip"><span style="color:#688835;" rel="tooltip">gerade KW <i class="fa fa-check-circle" rel="tooltip"></i></span></abbr>';
	} else {
	$out .= '<abbr title="Heute: keine gerade Kalenderwoche" rel="tooltip">gerade KW</abbr>';
	}
   return $out;
}

add_shortcode('gerade-KW', 'abbr_gkw');

function zfl_hinweis($atts, $content = null) {
	extract(shortcode_atts(array(
        'hinweis'      	=> 'Bitte hinweis eingeben',
	'beschriftung'	=> 'keine',
    ), $atts));
	
	if ( $beschriftung == 'keine'){
	$trennzeichen = '';
	$beschriftung = '';
	} else {
	$trennzeichen = ': ';
	}

	if($hinweis == 'keiner' || $hinweis == 'kein' || $hinweis =='0'){
	$out .= '';
	} else {
	$out .= '<span style="color: #C22A26;" rel="tooltip"><i class="fa fa-exclamation-triangle" rel="tooltip"></i></span>' . ' ' . $beschriftung . $trennzeichen . $hinweis;
	}
   return $out;
}

add_shortcode('Achtung', 'zfl_hinweis');


function abbr_fapo($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Einschlägige Fachstudien- und Prüfungsordnung" rel="tooltip">FAPO</abbr>';
   return $out;
}

add_shortcode('FAPO', 'abbr_fapo');
add_shortcode('fapo', 'abbr_fapo');


function abbr_lp($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Leistungspunkte nach dem ECTS (European Credit Transfer System)" rel="tooltip">LP</abbr>';
   return $out;
}

add_shortcode('lp', 'abbr_lp');
add_shortcode('LP', 'abbr_lp');


function abbr_la($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Lehramt" rel="tooltip">LA</abbr>';
   return $out;
}

add_shortcode('la', 'abbr_la');
add_shortcode('LA', 'abbr_la');


function abbr_gop($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );
	$out .= '<acronym title="Grundlagen- und Orientierungsprüfung" rel="tooltip">GOP</acronym>';
   return $out;
}

add_shortcode('gop', 'abbr_gop');
add_shortcode('GOP', 'abbr_gop');

function abbr_zula($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Zulassungsarbeit, offizielle Bezeichnung: schriftliche Hausarbeit (nach § 29 LPO I)" rel="tooltip">Zula</abbr>';
   return $out;
}

add_shortcode('Zula', 'abbr_zula');


function abbr_za($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Zulassungsarbeit, offizielle Bezeichnung: schriftliche Hausarbeit (nach § 29 LPO I)" rel="tooltip">ZA</abbr>';
   return $out;
}
add_shortcode('ZA', 'abbr_za');

function abbr_zulassungsarbeit($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Offizielle Bezeichungen: schriftliche Hausarbeit (nach § 29 LPO I)" rel="tooltip">Zulassungsarbeit</abbr>';
   return $out;
}

add_shortcode('Zulassungsarbeit', 'abbr_zulassungsarbeit');

function abbr_sha($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Zulassungarbeit, offizielle Bezeichungen: schriftliche Hausarbeit (nach § 29 LPO I)" rel="tooltip">schriftliche Hausarbeit</abbr>';
   return $out;
}

add_shortcode('schriftliche Hausarbeit', 'abbr_zulassungsarbeit');

function abbr_bafoeg($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="Bundesausbildungsförderungsgesetz" rel="tooltip">BAföG</abbr>';
   return $out;
}

add_shortcode('BAföG', 'abbr_bafoeg');


function abbr_fauschulnetz($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="FAU-Schulnetz ist die Vereinigung aller Projekte und Kooperationen zwischen Schulen und der Friedrich-Alexander-Universität Erlangen-Nürnberg" rel="tooltip">FAU-Schulnetz</abbr>';
   return $out;
}

add_shortcode('FAU-Schulnetz', 'abbr_fauschulnetz');


function abbr_fauschuleinnovativ($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="FAU-SchuleINNOVATIV: Ist ein Prädikat welches für besondere FAU-Schulen verliehen wird." rel="tooltip">FAU-Schule<sup>innovativ</sup></abbr>';
   return $out;
}

add_shortcode('FAU-Schule-innovativ', 'abbr_fauschuleinnovativ');


function abbr_bc($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= 'Bildungschancen';
   return $out;
}

add_shortcode('BC', 'abbr_bc');

// Shortcodes Ende


function style_tabby_always_accordion($content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	$out .= '<abbr title="FAU-SchuleINNOVATIV: Ist ein Prädikat welches für besondere FAU-Schulen verliehen wird." rel="tooltip">FAU-Schule<sup>innovativ</sup></abbr>';
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

	$out .= '<img src="https://www.zfl.fau.de/system/themes/zflchild/img/pfeil-gruen.png" rel="tooltip">';
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
	echo '<div class="wrap" rel="tooltip">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
	
	
}

/** accordion */

function clear_string($str, $how = '-') {
$search = array("ä", "ö", "ü", "ß", "Ä", "Ö",
                "Ü", "&", "é", "á", "ó",
                " :)", " :D", " :-)", " :P",
                " :O", " ;D", " ;)", " ^^",
                " :|", " :-/", ":)", ":D",
                ":-)", ":P", ":O", ";D", ";)",
                "^^", ":|", ":-/", "(", ")", "[", "]",
                "<", ">", "!", "\"", "§", "$", "%", "&",
                "/", "(", ")", "=", "?", "`", "´", "*", "'",
                "_", ":", ";", "²", "³", "{", "}",
                "\\", "~", "#", "+", ".", ",",
                "=", ":", "=)");
$replace = array("ae", "oe", "ue", "ss", "Ae", "Oe",
                 "Ue", "und", "e", "a", "o", "-", "-",
                 "-", "-", "-", "-", "-", "-", "-", "-", "-",
                 "-", "-", "-", "-", "-", "-", "-", "-", "-",
                 "-", "-", "-", "-", "-", "-", "-", "-", "-",
                 "-", "-", "-", "-", "-", "-", "-", "-", "-",
                 "-", "-", "-", "-", "-", "-", "-", "-", "-",
                 "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");
$str = str_replace($search, $replace, $str);
$str = strtolower(preg_replace("/[^a-zA-Z0-9]+/", trim($how), $str));
return $str;
}

function genRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function accordion_shortcode( $atts, $content = null ) {

// initialise $firsttab flag so we can tell whether we are building the first tab

global $reset_firstaccordion_flag;
static $firstaccordion = TRUE;

if ($GLOBALS["reset_firstaccordion_flag"] === TRUE) {
	$firstaccordion = TRUE;
	$GLOBALS["reset_firstaccordion_flag"] = FALSE;
}

// extract title & whether open
	extract(shortcode_atts(array(
		'title' => '',
		'icon' => '',
		'class' => '',
		'element' => 'h3',
		'color' => '',
		'lp' => '',
		'righttext' => '',
		'righticon' => '',
		'tableid' => '',
		'tablerow' => '',
		'tablecolumn' => ''
	), $atts) );



	if ( $tableid ) {
	$title = $title . do_shortcode( '[table-cell id=' . $tableid . ' row=' . $tablerow . ' column=' . $tablecolumn. ' /]');
	}

	$tabtarget = sanitize_title_with_dashes( $title );

	//initialise urltarget
	$urltarget = '';

	//grab the value of the 'target' url parameter if there is one
	if ( isset ( $_REQUEST['target'] ) ) {
		$urltarget = sanitize_title_with_dashes( $_REQUEST['target'] );
	}

	//	Set Tab Panel Class - add active class if the open attribute is set or the target url parameter matches the dashed version of the tab title
	$tabcontentclass = "tabcontent";

	if ( ( $open ) || ( isset( $urltarget ) && ( $urltarget == $tabtarget ) ) ) {
		$tabcontentclass .= " responsive-tabs__panel--active";
	}

	$addicon = '';
	$addrighticon = '';


	if ( $icon ) {
		$addicon = '<span class="fa fa-' . $icon . '"></span>';
	}

	if ( $righticon ) {
		$addrighticon = '<span class="fa fa-' . $righticon . '"></span> ';
	}
	
	$lpprint = '';

	// wenn daten aus Tabelle stelle direkt workshopphase dar

	if ( $tableid ) {
		$lpprint = $addrighticon . '<span class="righttext">' . do_shortcode( '[table-cell id=' . $tableid . ' row=' . $tablerow . ' column=9 /]') . '</span>';
	}	

	if ( $lp ) {
		$lpprint = '<span class="leistungspunkte' . $icon . '">' . $lp . ' <abbr title="Leistungspunkte nach dem ECTS (European Credit Transfer System)">LP</abbr></span>';
	}

	if ( $righttext ) {
		$lpprint = $addrighticon . '<span class="righttext">' . $righttext . '</span>';
	}
	
	$colorclass = '';
	
	if ( $color ) {
		$question_color = 'faq-question-'.$color.'"';
		$answer_color = 'faq-answer-'.$color.'"';
		$colorclose = '-'.$color;
	}

// test whether this is the first tab in the group
	if ( $firstaccordion ) {

		// Set flag so we know subsequent tabs are not the first in the tab group
		$firstaccordion = FALSE;

		// Build output if we are making the first tab
		$url_title = clear_string($title, $how = '-');
		$close = genRandomString(4);
		return '<div id="faq-block"><div class="faq-list" data-speed="200"><div class="single-faq expand-faq"><'.$element.' id="'.$url_title.'" class="faq-question expand-title ' . $question_color .'" >'.$addicon.' '.$title.' '.$lpprint.' </'.$element.'><div class="faq-answer ' . $answer_color . '" rel="'.$url_title.'" >';
	}

    else {
		// Build output if we are making a non-first tab
		$url_title = clear_string($title, $how = '-');
		$close = genRandomString(4);
		return  '</div></div><div class="single-faq expand-faq"><'.$element.' id="'.$url_title.'" class="faq-question expand-title ' . $question_color .'" >'.$addicon.' '.$title.' '.$lpprint.'</'.$element.'><div class="faq-answer ' . $answer_color . '" rel="'.$url_title.'">';
	}
}
add_filter( 'the_content', 'shortcode_unautop' );
add_shortcode('accordion', 'accordion_shortcode');


function accordion_ending_shortcode($atts, $content = null) {
	$GLOBALS["reset_firstaccordion_flag"]=TRUE;
   	return '</div></div></div></div>';
}
add_filter( 'the_content', 'shortcode_unautop' );
add_shortcode( 'accordion_ending', 'accordion_ending_shortcode' );


function touchbox_shortcode($atts) {
	extract(shortcode_atts(array(
        	'title'     => 'titel',
		'subtitle'     => '',
		'content'	=> 'content',
		'link' 		=> '#',
		'linktitle' 	=> '',
		'titleicon' 	=> 'play',
		'subtitleicon' 	=> '',
		'linkicon' 	=> 'external-link-square'

    ), $atts));
	
	if ( $link == '#'){
		$out = '<span title="'. $content .'" rel="tooltip" class="touchbox title"><i class="fa fa-' . $titleicon . '"></i> ' . $title .'</span><br><span class="touchbox subtitle">' . $subtitle . '</span>';
	} else {
		$out = '<span title="'. $content .'" rel="tooltip" class="touchbox title"><i class="fa fa-' . $titleicon . '"></i> ' . $title . '</span><br>
		<i class="fa fa-' . $subtitleicon . '"></i> <span class="touchbox subtitle">' . $subtitle . '</span> <a href="'.$link.'" title="Details auf externer Seite Anzeigen"><i class="fa fa-' . $linkicon . '"></i> Link</a>';	
	}
   return $out;
}

add_shortcode('touchbox', 'touchbox_shortcode');

