<?php 

//Pour les scripts JS spécifique à chaque page
$specialScriptPage = false;
if ((isset($_GET['page'])) && (!isset($_GET['component']))) {
	switch ($_GET['page']) {
		case 'dashboard':
			$specialScriptPage = '/js/pages/dashboard-js.php';
			break;
		case 'dataTables':
			$specialScriptPage = '/js/pages/dataTables-js.php';
			break;
		
		default:
			$specialScriptPage = '/js/pages/dashboard-js.php';
			break;
	}
}
//Si pas de parametres URL de page ou de elements
if ((!isset($_GET['page'])) && (!isset($_GET['component']))) {
	$specialScriptPage = '/js/pages/dashboard-js.php';
}

require_once('/src/head.php'); 
require_once('/src/header.php');
require_once('/src/sidebar.php');  
require_once('/src/breadcum.php'); 
require_once('/src/content.php'); 
require_once('/src/footer.php'); 
require_once('/src/scripts.php');
if($specialScriptPage) {
	require_once($specialScriptPage); 
}
require_once('/src/endPage.php'); 
?>