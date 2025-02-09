<?php
	if(!isset($_COOKIE["user"]) || $_COOKIE["user"] != "admin") {
		die("Only admins are allowed!");
	}
	if (isset($_GET["user"])) {
		$user = $_GET["user"];
	} else {
		$user = "";
	}
	require_once __DIR__ . '/vendor/autoload.php';
	$mpdf = new \Mpdf\Mpdf(["allowAnnotationFiles" => true]);
	$mpdf->WriteHTML("Hello $user");
	$mpdf->WriteHTML("Friendly tip, go to the documentation and seek for annotation, maybe youll find something interesting..");
	$mpdf->WriteHTML("Another tip, use Firefox");
	$mpdf->Output();
	
	//Do not forget that in order to run code there is a file 2218b21bfdba3807605ee1ecd8b39a3b74c4b83b42f51771491d4789d128a8f0.php
?>
