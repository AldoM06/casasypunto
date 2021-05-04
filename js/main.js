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

//segundo listado de opciones


/*document.querySelectorAll('#opciones1 > .opcion1').forEach((opcion1) => {
	opcion1.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect1.innerHTML = e.currentTarget.innerHTML;
		select1.classList.toggle('active');
		opciones1.classList.toggle('active');
		hiddenInput.value = e.currentTarget.querySelector('.titulo').innerText;
	});
});

select1.addEventListener('click', () => {
	select1.classList.toggle('active');
	opciones1.classList.toggle('active');
});*/