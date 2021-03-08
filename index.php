<?php require_once 'controllers/PartidoControlador.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Proyecto MVC</title>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<div class="row">
	    <div class="col-md-4">
    		<div class="card mb">
              <div class="card-body mb">
                <h5 class="card-title">Listado de datos</h5>
                <a href="?action=listar">LISTAR</a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
    		<div class="card mb">
              <div class="card-body mb">
                <h5 class="card-title">Registrar Datos</h5>
                <a href="?action=crear">CREAR</a>
              </div>
            </div>
        </div>
	</div>
	</div>
</div>
<hr>
<?php
   $controlador = new PartidoController();
   if(isset($_GET['action'])){
       $action=$_GET['action'];
       $controlador->$action();
   }else{
       echo "seleccione la opcion";
   }
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</html>