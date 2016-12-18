<?php
/*///////////////////////////////////////////////////////////////////////
Part of the code from the book 
Building Findable Websites: Web Standards, SEO, and Beyond
by Aarron Walter (aarron@buildingfindablewebsites.com)
http://buildingfindablewebsites.com

Distrbuted under Creative Commons license
http://creativecommons.org/licenses/by-sa/3.0/us/
///////////////////////////////////////////////////////////////////////*/

//global $session;

function storeAddress($apikey1, $listid1){
    $your_apikey1 = $apikey1;
    $my_list_unique_id1 = $listid1;
	if(!$_GET['email1']){ return "No email address provided"; }
	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $_GET['email1'])) {
		return "Email address is invalid!";
	}
	require_once('MCAPI.class.php');
	$api1 = new MCAPI($your_apikey1);
	$list_id1 = $my_list_unique_id1;
	if($api1->listSubscribe($list_id1, $_GET['email1'], '') === true) {
		return 'Success! Check your email to confirm.';
	} else{
		return 'Error: ' . $api1->errorMessage;
	}
}

if(isset($_GET['ajax'])){
    echo storeAddress($_GET['apikey1'], $_GET['listid1']);
}