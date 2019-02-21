<?php

include 'header.php';

if ($_SERVER['REQUEST_URI']=='/') {
	include 'home.php';
} else {
	include '404.php';
}
	
include 'footer.php';

?>
