<?php

require("../dbconnect.php");
require("../includes/functions.php");

/*
*** USAGE SAMPLES ***

<script language="javascript" src="feeds/cartnumitems.php"></script>

*/

$cartitems = count($_SESSION["cart"]["products"])+count($_SESSION["cart"]["addons"])+count($_SESSION["cart"]["domains"])+count($_SESSION["cart"]["renewals"]);

$items = ($cartitems==1) ? 'item' : 'items';

widgetoutput('Tiene <b>'.$cartitems.'</b> '.$items.' en su cesta');

function widgetoutput($value) {
    echo "document.write('".addslashes($value)."');";
    exit;
}

?>