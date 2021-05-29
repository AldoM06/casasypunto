<style>
  body{
    overflow-x: hidden;

  }
 body::-webkit-scrollbar {
  overflow-x: hidden;
  width: 9px;
}
 
body::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6 px rgba(0, 0, 0, 0.3);
  border-radius: 10px;
}
 
body::-webkit-scrollbar-thumb {
   border-radius: 10px;
   box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5); 
   background-color: gray;
   outline: 1px solid black;
}
</style>
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
</head>
<body>
    <?php include_once('vistas/nav.php'); ?>
    <?php include_once('vistas/carousel.php'); ?>
    <?php include_once('vistas/publicity.php'); ?>
    <?php include_once('vistas/search.php'); ?>
    <?php include_once('vistas/location.php'); ?>
    <?php include_once('vistas/invertir.php'); ?>

<footer>
    <?php include_once('vistas/footer.php'); ?>
</footer>

<!--<div>
  <div class="select">Probando los js</div>
</div>-->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="vistas/js/main.js"></script>
</body>
</html>