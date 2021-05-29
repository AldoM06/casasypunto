<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETH-I</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">
    <style>
        h1{
            color: white;
            background-image: linear-gradient(to top,#00D8FF 0%, #437A84 100%);
            background-size: 100%;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-text-fill-color:  transparent;

        }
        .titleh1{
            align-items: center;
            text-align: center;
        }
        p{
            color: white;
            padding: 20px;
            margin-left: 50px;
        }

        .container-c{
            justify-content: center !important;
            align-items: center !important;
            text-align:center;

        }
        .center-c{
            justify-content: center !important;
            align-items: center !important;
            text-align:center;

        }
        h2{
            color:white;
        }
  
        .img1{
            margin:10px auto;
            border-radius:30px;
            border: 1px solid #999;
            width:80%;
            height:70%;
            background-size: 100% 100%;
            background-repeat:no-repeat;
            background-size: cover;
            }
        .p-inv{
            font-size:18px;
        }


        .modal-login {		
            color: #636363;
            width: 350px;
        }
        .modal-login .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
        }
        .modal-login .modal-header {
            border-bottom: none;   
            position: relative;
            justify-content: center;
        }
        .modal-login h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -15px;
        }
        .modal-login .form-control:focus {
            border-color: #70c5c0;
        }
        .modal-login .form-control, .modal-login .btn {
            min-height: 40px;
            border-radius: 3px; 
        }
        .modal-login .close {
            position: absolute;
            top: -5px;
            right: -5px;
        }	
        .modal-login .modal-footer {
            background: #ecf0f1;
            border-color: #dee4e7;
            text-align: center;
            justify-content: center;
            margin: 0 -20px -20px;
            border-radius: 5px;
            font-size: 13px;
        }
        .modal-login .modal-footer a {
            color: #999;
        }		
        .modal-login .avatar {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -70px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background: #232537;
            padding: 15px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }
        .modal-login .avatar img {
            width: 100%;
        }
        .modal-login.modal-dialog {
            margin-top: 80px;
        }
        .modal-login .btn, .modal-login .btn:active {
            color: #fff;
            border-radius: 4px;
            background: #232537 !important;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border: none;
        }
        .modal-login .btn:hover, .modal-login .btn:focus {
            background: #232537 !important;
            outline: none;
        }
        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
        }
    </style>
</head>
<body>
    <?php include_once('vistas/nav.php'); ?>
    
    <div class="container-fluid container-c">
    <div class="row">
        <div class="col-12">
            <h1 class="title">Selecciona la forma en la que te gustaria invertir.</h1>
            </div>
                <div class="container-fluid center-c">
                    <div class="row">
                        <div class="col-6">
                            <p class="p-inv">Invierte con nosotros  y obtén un atractivo rendimiento superior a  los bancos ademas de la seguridad de invertir en un negocio 100% rentable.</p>
                            <img class="img1" src="img/invest.jpg" alt="">
                        </div>

                        <div class="col-6">
                            <p  class="p-inv">Invierte en nuestros tokens y deja que tu dinero crezca en la blockchain puedes encontrar más información..</p>
                            <img class="img1" src="img/trader.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                        <a type="button" class="btn btn-outline-info" href="#myModal" class="trigger-btn" data-toggle="modal">Contactenme</a>

                        </div>
                        <div class="col-6">
                        <a href="../javascript/inde.php" type="button" class="btn btn-outline-info">¡Quiero saber más!</a>

                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>


    
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="img/mobile.svg" alt="Phone">
				</div>				
				<h4 class="modal-title">Contactenme. </h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Nombre" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Celular" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Enviar</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="index.php">ETH-Inmuebles</a>
			</div>
		</div>
	</div>
</div>     

    
<footer>
    <?php include_once('vistas/footer.php'); ?>
</footer>
|   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="vistas/js/main.js"></script>

</body>
</html>