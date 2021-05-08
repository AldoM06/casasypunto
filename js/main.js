const select = document.querySelector('#select');
const opciones = document.querySelector('#opciones');
const contenidoSelect = document.querySelector('#select .contenido-select');
const hiddenInput = document.querySelector('#inputSelect');

const select1 = document.querySelector('#select1');
const opciones1 = document.querySelector('#opciones1');
const contenidoSelect1 = document.querySelector('#select1 .contenido-select1');
const hiddenInput1 = document.querySelector('#inputSelect1');

document.querySelectorAll('#opciones > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect.innerHTML = e.currentTarget.innerHTML;
		select.classList.toggle('active');
		opciones.classList.toggle('active');
		hiddenInput1.value = e.currentTarget.querySelector('.titulo').innerText;
	});
});

select.addEventListener('click', () => {
	select.classList.toggle('active');
	opciones.classList.toggle('active');
});

function initMap() {
	map = new google.maps.Map(document.getElementById("map"), {
	  center: { lat: -34.397, lng: 150.644 },
	  zoom: 8,
	});
  }

//MARCAR TODAS


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
  
  function marcarHijos(source) {
	var form2 = document.getElementById("form2");
	var checkboxes = form2.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
	for (i = 0; i < checkboxes.length; i++) //recorremos todos los controles
	{
	  if (checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
	  {
		checkboxes[i].checked = source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
	  }
	}
  }