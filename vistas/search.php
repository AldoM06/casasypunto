<style>
.contenedor {
	width: 80%;
	max-width: 100px;
	margin: 5px;
	padding: 40px 0;
}

.selectbox,
.selectbox1 {
	margin: auto;
	position: relative;
}

.select,
.select1 {
	background: #FFF;
	width: 100%;
    height: 60%;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, .16);
	border-radius: 10px;
	cursor: pointer;
	display: flex;
	justify-content: space-between;
	align-items: center;
	transition: .2s ease all;
	margin-bottom: 30px;
	padding: 30px;
	position: relative;
	z-index: 200;
	border: 2px solid transparent;
}

.select.active,
.select:hover,
.select1.active,
.select1:hover {
	box-shadow: 0px 5px 10px rgba(0, 0, 0, .16);
	border: 2px solid #213f8f;
}

.select.active:before,
.select1.active:before {
	content: "";
	display: block;
	height: 0;
	width: auto;
	border-top: 15px solid #213f8f;
	border-right: 15px solid transparent;
	border-bottom: 15px solid transparent;
	border-left: 15px solid transparent;
	position: absolute;
	bottom: -15px;
	left: calc(50% - 15px);
}

.select i,
.select1 i{
	font-size: 20px;
	margin-left: 20px;
	color: #213f8f;
}

.titulo {
	margin-bottom: 15px;
	color: #000;
	font-weight: 300;
	font-size: 15px;
}

.descripcion {
	font-size: 10px;
	color: #434343;
    
}

.opciones,
.opciones1 {
	background: #fff;
	border-radius: 10px;
	box-shadow: 0px 5px 10px rgba(0,0,0,.16);
	max-height: 100px;
	overflow: auto;
	z-index: 80;
	width: 100%;
    height: 60%;
	display: none;
}

.opciones.active,
.opciones1.active {
	display: block;
	animation: fadeIn .3s forwards;
}

@keyframes fadeIn {
	from {
		transform: translateY(-200px) scale(.5);
	}
	to {
		transform: translateY(0) scale(1);
	}
}

.contenido-opcion,
.contenido-opcion1 {
	width: 100%;
	display: flex;
	align-items: center;
	transition: .2s ease all;
}

.opciones .contenido-opcion,
.opciones1 .contenido-opcion1 {
	padding: 30px;
}

.contenido-opcion img,
.contenido-opcion1 img {
	width: 60px;
	height: 60px;
	margin-right: 30px;
}

.opciones .contenido-opcion:hover,
.opciones1 .contenido-opcion1:hover{
	background: #213F8F;
}

.opciones .contenido-opcion:hover .titulo,
.opciones .contenido-opcion:hover .descripcion,
.opciones1 .contenido-opcion1:hover .titulo,
.opciones1 .contenido-opcion1:hover .descripcion{
	color: #fff;
}

@media screen and (max-width: 800px){
	.selectbox {
		width: 100%;
	}
}
#desc{
	width: 300px;
	height: 20px;
    border-color: #27C5E2;
}
</style>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<div class="container mt-5">
    <div class="row justify-content-start" >
        <div class="">

            <div class="col sm" class="contenedor">
                <form action="">
                    <div class="selectbox">
                        <div class="select" >
                            <div class="contenido-select">
                                <h1 class="titulo">Selecciona que deseas hacer</h1>
                                <p class="descripcion">Comprar o traspasar un inmueble</p>
                            </div>
                            <i class="fas fa-angle-down"></i>
                        </div>

                        <div class="opciones" id="opciones">
                            <a href="#" class="opcion">
                                <div class="contenido-opcion">
                                    <img src="img/money.svg" alt="" width="100000px">
                                    <div class="textos">
                                        <h1 class="titulo">Comprar</h1>
                                        <p class="descripcion">Ok!Te encontraremos<br> tu mejor opción.</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="opcion">
                                <div class="contenido-opcion">
                                    <img src="img/change.svg" alt=""width="2" height="2">
                                    <div class="textos">
                                        <h1 class="titulo">Traspasar</h1>
                                        <p class="descripcion">Vamos a traspasar <br> tu vivienda.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <input type="hidden" name="pais" id="inputSelect" value="">
                </form>
            </div>
        </div>

        <!-- Opciones de inmuebles -->
        <div class="">
            <div class="col sm" class="contenedor">
                <form action="">
                    <div class="selectbox1">
                        <div class="select1" id="select1">
                            <div class="contenido-select1">
                                <h1 class="titulo">Selecciona que tipo de inmueble quieres</h1>
                                <p class="descripcion">Puedes seleccionar si necesitas una casa,<br> departamento o ambos</p>
                            </div>
                            <i class="fas fa-angle-down"></i>
                        </div>

                        <div class="opciones1" id="opciones1">
                            <a href="#" class="opcion1">
                                <div class="contenido-opcion1">
                                    <img src="img/home.svg" alt="">
                                    <div class="textos">
                                        <h1 class="titulo">Casas</h1>
                                        <p class="descripcion">Vamos a buscar casas.</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="opcion1">
                                <div class="contenido-opcion1">
                                    <img src="img/regular.svg" alt="">
                                    <div class="textos">
                                        <h1 class="titulo">Departamentos</h1>
                                        <p class="descripcion">Vamos a buscar departamentos.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <input type="hidden" name="tipo" id="inputSelect1" value="">
                </form>
            </div>
        </div>
        <div class="">

            <div class="col-24" class="contenedor">
                <form action="">
                    <div class="selectbox">
                        <div class="select1" id="select1">
                            <div class="contenido-select1">
                                <label for="desc"><h1 class="titulo">Escribe tu colonia</h1></label>
                                <input type="text" name="desc" id="desc" class="form-control" value="" required="required" pattern="" title="">
                                
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
	<script src="js/main.js"></script>