<?php
$ablakcim = array(
'cim' => 'Romonyai Óvoda nem hivatalos weboldala'
);
$fejlec = array(
'kep' => './images/borito.png'
);
$video = array(
'link' => './images/video.mp4'
);

$oldalak = array(
		'/' => array('fajl' => 'fooldal', 'cim' => 'Főoldal', 'menu' => array(1,1)),
		'ovodankrol' => array('fajl' => 'ovodankrol', 'cim' => 'Óvodánkról', 'menu' => array(1,1)),
		'gyerekszaj' => array('fajl' => 'gyerekszaj', 'cim' => 'Gyerekszáj', 'menu' => array(1,1)),
		'galeria' => array('fajl' => 'galeria', 'cim' => 'Galéria', 'menu' => array(1,1)),
		'feltolt' => array('fajl' => 'feltolt', 'cim' => 'Képek feltöltése', 'menu' => array(1,1)),		
		'kapcsolat' => array('fajl' => 'kapcsolat', 'cim' => 'Kapcsolat', 'menu' => array(1,1)),
		'uzenetek' => array('fajl' => 'uzenetek', 'cim' => 'Üzenetek megtekintése', 'menu' => array(1,1)),
		'belepes' => array('fajl' => 'belepes', 'cim' => 'Belépés', 'menu' => array(1,0)),
		'kilepes' => array('fajl' => 'kilepes', 'cim' => 'Kilépés', 'menu' => array(0,1)),
		'belepes_feldolgoz' => array('fajl' => 'belepes_feldolgoz', 'cim' => '', 'menu' => array(0,0)),
		'regisztracio_feldolgoz' => array('fajl' => 'regisztracio_feldolgoz', 'cim' => '', 'menu' => array(0,0)),
		'kapcsolat_feldolgoz' => array('fajl' => 'kapcsolat_feldolgoz', 'cim' => '', 'menu' => array(0,0))	
	);
	
date_default_timezone_set('Europe/Brussels');
	$MAPPA = './gallery/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 500*1024;

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>