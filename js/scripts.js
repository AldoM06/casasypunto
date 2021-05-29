  
 $(document).ready(function(){
 
  
  $(document).on("click", "#add-photo", function(){
        $("#add-new-photo").click();
    });
    
    // -> Abrir el inspector de archivos

    // Cachamos el evento change
    
    $(document).on("change", "#add-new-photo", function () {
    
        console.log(this.files);
        var files = this.files;
        var element;
        var supportedImages = ["image/jpeg", "image/png", "image/gif" , "image/jpg"];
        var seEncontraronElementoNoValidos = false;

        for (var i = 0; i < files.length; i++) {
            element = files[i];
            
            if (supportedImages.indexOf(element.type) != -1) {
                createPreview(element);
            }
            else {
                seEncontraronElementoNoValidos = true;
            }
        }

        //Aquí empieza la creación de un nuevo input file
        $("#add-new-photo").removeAttr("id");
        var newInputFile = createInputFile();
        $("#add-photo-container").append(newInputFile);

        if (seEncontraronElementoNoValidos) {
            alert("Se encontraron archivos no validos.");
        }
        else {
            alert("Todos los archivos se subieron correctamente.");
        }
    
    });
    
    // -> Cachamos el evento change

    // Eliminar previsualizaciones
    
    $(document).on("click", "#Images .image-container", function(e){
        $(this).parent().remove();
    });
    
    // -> Eliminar previsualizaciones

    // Eliminar imagenes subidas

    $(document).on("click", "#MyImages .image-container", function (e) {
        var parent = $(this).parent();
        var id = $(parent).attr("data-id");
        var data = {
            id : id
        }
        $.post("delete.php", data, function(res) {
            if (res == "true") {
                alert("¡Imagenes eliminadas correctamente!");
                $(parent).remove();
            }
            else {
                alert("Lo sentimos, hubo un error eliminando esta imagen.");
            }
        });
    });

    // -> Eliminar imagenes subidas

});

//FOMATO DE PARALABRAS DE BASE DE DATOS


//instanciamos el elemento input
/*
var input = document.getElementById('estado');

//función que capitaliza la primera letra
function capitalizarPrimeraLetra() {
  //almacenamos el valor del input
  var palabra = input.value;
  //Si el valor es nulo o undefined salimos
  if(!input.value) return;
  // almacenamos la mayuscula
  var mayuscula = palabra.substring(0,1).toUpperCase();
  //si la palabra tiene más de una letra almacenamos las minúsculas
  if (palabra.length > 0) {
    var minuscula = palabra.substring(1).toLowerCase();
  }
  //escribimos la palabra con la primera letra mayuscula
  input.value = mayuscula.concat(minuscula);
  return palabra;
}
*/

  //AUTOCOMPLETAR

  function autocompletarE(){
    const inputEstado = document.querySelector('#estado');
    let indexFocus = -1;

    var estado = function(){
        const tipoEstado = this.value.toUpperCase();
        if(!tipoEstado) return false;
  
        //CREA LISTA DE SUGERENCIAS
  
        const divList = document.createElement('div');
        divList.setAttribute('id',this.id + '-lista-autocompletar');
        divList.setAttribute('class','lista-autocompletar-estado');
        this.parentNode.appendChild(divList);
  
        //CONEXION A BASE DE DATOS
  
        httpRequest('./connect/controller.php?tipo=' + tipoEstado, function(){
            console.log(this.responseText);
            const arr =  JSON.parse(this.responseText);
              console.log(arr);
            if(arr.length ==0) return false;
              arr.forEach(item => {
              if(item.substr(0, tipoEstado.length).toUpperCase() == tipoEstado){
                  console.log(item);
                  const elementoLista = document.createElement('div');
                  elementoLista.innerHTML = `<strong>${item.substr(0, tipoEstado.length)}</strong>${item.substr(tipoEstado.length)} `;
                  elementoLista.addEventListener('click',function(){
                      inputEstado.value = this.innerText;
                      cerrarLista();
                      return false;
                  });
                  divList.appendChild(elementoLista);
                  
              }
        });
        });
    }
    inputEstado.addEventListener('input', estado);   
}

//AUTOCOMPLETAR MUNICIPIO

function autocompletarM(){
    const inputEstado = document.querySelector('#municipio');
    let indexFocus = -1;

    var municipio = function(){
        const tipoMunicipio = this.value.toUpperCase();
        if(!tipoMunicipio) return false;
  
        //CREA LISTA DE SUGERENCIAS
  
        const divList = document.createElement('div');
        divList.setAttribute('id',this.id + '-lista-autocompletar');
        divList.setAttribute('class','lista-autocompletar-municipio');
        this.parentNode.appendChild(divList);
  
        //CONEXION A BASE DE DATOS
  
        httpRequest('./connect/controllerm.php?tipo=' + tipoMunicipio, function(){
            console.log(this.responseText);
            const arr =  JSON.parse(this.responseText);
              console.log(arr);
            if(arr.length ==0) return false;
              arr.forEach(item => {
              if(item.substr(0, tipoMunicipio.length).toUpperCase() == tipoMunicipio){
                  console.log(item);
                  const elementoLista = document.createElement('div');
                  elementoLista.innerHTML = `<strong>${item.substr(0, tipoMunicipio.length)}</strong>${item.substr(tipoMunicipio.length)} `;
                  elementoLista.addEventListener('click',function(){
                      inputEstado.value = this.innerText;
                      cerrarListaM();
                      return false;
                  });
                  divList.appendChild(elementoLista);
                  
              }
        });
        });

    }

    inputEstado.addEventListener('input', municipio);
        
}


//LOCALIDADES

function autocompletarL(){
    const inputLocalidad = document.querySelector('#localidad');
    let indexFocus = -1;

    var localidad = function(){
        const tipoLocalidad = this.value.toUpperCase();
        if(!tipoLocalidad) return false;
  
        //CREA LISTA DE SUGERENCIAS
  
        const divList = document.createElement('div');
        divList.setAttribute('id',this.id + '-lista-autocompletar');
        divList.setAttribute('class','lista-autocompletar-localidad');
        this.parentNode.appendChild(divList);
  
        //CONEXION A BASE DE DATOS
  
        httpRequest('./connect/controllerL.php?tipo=' + tipoLocalidad, function(){
            console.log(this.responseText);
            const arr =  JSON.parse(this.responseText);
              console.log(arr);
            if(arr.length ==0) return false;
              arr.forEach(item => {
              if(item.substr(0, tipoLocalidad.length).toUpperCase() == tipoLocalidad){
                  console.log(item);
                  const elementoLista = document.createElement('div');
                  elementoLista.innerHTML = `<strong>${item.substr(0, tipoLocalidad.length)}</strong>${item.substr(tipoLocalidad.length)} `;
                  elementoLista.addEventListener('click',function(){
                      inputEstado.value = this.innerText;
                      cerrarListaM();
                      return false;
                  });
                  divList.appendChild(elementoLista);
                  
              }
        });
        });

    }

    inputLocalidad.addEventListener('input', localidad);
        
}

function cerrarLista(){
    console.log("Entra a borrar")
    const items = document.querySelectorAll('.lista-autocompletar-estado');
    items.forEach(item => {
        item.parentNode.removeChild(item);
    });
    indexFocus=-1;
}

function cerrarListaM(){
    console.log("Entra a borrar")
    const items = document.querySelectorAll('.lista-autocompletar-municipio');
    items.forEach(item => {
        item.parentNode.removeChild(item);
    });
    indexFocus=-1;
}

function cerrarListaL(){
    console.log("Entra a borrar")
    const items = document.querySelectorAll('.lista-autocompletar-localidad');
    items.forEach(item => {
        item.parentNode.removeChild(item);
    });
    indexFocus=-1;
}

function httpRequest(url, callback){
    const http =  new XMLHttpRequest();
    http.open('GET', url)
    http.send();

    http.onreadystatechange =  function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}

autocompletarE();
autocompletarM();
//autocompletarL();


