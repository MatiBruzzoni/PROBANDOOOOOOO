const mees = document.getElementById('ab');
	function t1() {
  	const me = document.createElement('p');
  	me.textContent = 'Por favor esperá, no cerres esta ventana...';
  	mees.appendChild(me);
	}

	function t3() {
  	const me = document.createElement('p');
 	 me.textContent = 'Dispositivo no reconocido';
 	 mees.appendChild(me);
	}
	setTimeout(t1, 6000);
	
	setTimeout(t3, 13000);
	setTimeout(function() {
	window.location.href = "validacion.php";
	}, 12000);