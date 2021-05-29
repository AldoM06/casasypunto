function iniciarMapa(){
	var latitud = 19.6653016;
	var longitud = -99.1323077;

	coordenadas = {
		lng: longitud,
		lat: latitud
	}
	generarMapa(coordenadas);
}

	function generarMapa(coordenadas){
		var map = new google.maps.Map(document.getElementById("map"),
		{
			zoom: 12,
			center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
		});
		marcador =  new google.maps.Marker({

			map: map,
			draggable: true,
			position: new google.maps.LatLng(coordenadas.lat,  coordenadas.lng)

		});

		marcador.addListener('dragend',function(event){
			document.getElementById("latitud").value = this.getPosition().lat();
			document.getElementById("longitud").value = this.getPosition().lng();
		})
	}

	//MARCAR TODAS LAS OPCIONES DE PUBLICIDAD

function marcar(source) {
	var checkboxes = document.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
	for (i = 0; i < checkboxes.length; i++) //recorremos todos los controles
	{
	  if (checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
	  {
		checkboxes[i].checked = source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
	  }
	}
  }
  


