

<style>
    .navbar{
        color: black !important;
        font-size: 15px;
        font-weight: bold;
        box-shadow:0 0 0 1px rgba(255,255,255,0.4);
    

        }
    #registersell{
        border-radius: 40px;
    }
    .modal-backdrop.show {
    opacity: .8;
    filter: alpha(opacity=80); /* Para versiones anteriores de IE */
    border-radius: 10px;
    }
    .modal {
  opacity: .8;
}
</style>
<nav id="nav-id" class=" navbar navbar-expand-sm navbar-dark">
        <div  class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" href="index.php" alt="Logo" width="120px">
            </a>
            <button class="navbar-toggler"
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul  class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="../casasypunto/about.php">Conócenos</a></li>
                    <li class="nav-item"><a class="nav-link" href="../casasypunto/project.php">Proyecto</a></li>
                    <li class="nav-item"><a class="nav-link" href="../casasypunto/invest.php" >Quiero invertir</a></li>
                    <li class="nav-item"><a class="nav-link"  class="btn btn-default btn-rounded mb-4"
                     data-toggle="modal" data-target="#modalLoginForm">Quiero vender</a></li>
                    <li class="nav-item"><a class="nav-link" href="../casasypunto/loginview.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a></li>
                </ul>
            </div>
        </div>
    </nav>
<div  class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" class="registersell">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Ingresa los siguientes datos para vender tu propiedad.</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Tu correo</label>
        </div>

        <div class="md-form mb-4">
        <i class="fas fa-user-friends"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Tu nombre</label>
        </div>

        <div class="md-form mb-4">
        <i class="fas fa-mobile"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Número celular</label>
        </div>

        <div class="md-form mb-4">
        <i class="fas fa-house-user"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Tipo de vivienda</label>
        </div>
        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Metros cuadrados construidos</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-outline-info">Contáctenme</button>
      </div>
    </div>
  </div>
</div>

<!--Inversiones-->
