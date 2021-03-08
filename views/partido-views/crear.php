<?php
if(isset($_POST["submit"])) {
     $nombre = $_POST["nombre"];
     $num_seguidores = $_POST["num_seguidores"];
     $nombre_lider = $_POST["nombre_lider"];
     $num_alcaldes = $_POST["num_alcaldes"];
     $num_concejales= $_POST["num_concejales"];
     $lema=$_POST["lema"];  
	}
?>
<div class="container">
    <form  method="POST">
<div class="form-group">
    <label class="col-md-4 control-label" for="Nombre Completo">Nombre Partido</label>
    <div class="col-md-4">
        <input id="Nombre Completo" name="nombre" type="text" placeholder="" class="form-control input-md" required="">
    </div>

    <label class="col-md-4 control-label" for="Nombre Completo">Numero de seguidores</label>
    <div class="col-md-4">
        <input id="Nombre Completo" name="num_seguidores" type="text" placeholder="" class="form-control input-md" required="">
    </div>

    <label class="col-md-4 control-label" for="Nombre Completo">Nombre Lider</label>
    <div class="col-md-4">
        <input id="Nombre Completo" name="nombre_lider" type="text" placeholder="" class="form-control input-md" required="">
    </div>

    <label class="col-md-4 control-label" for="Nombre Completo">Numero de Alcaldes</label>
    <div class="col-md-4">
        <input id="Nombre Completo" name="num_alcaldes" type="text" placeholder="" class="form-control input-md" required="">
    </div>

    <label class="col-md-4 control-label" for="Nombre Completo">Numero de Concejales</label>
    <div class="col-md-4">
        <input id="Nombre Completo" name="num_concejales" type="text" placeholder="" class="form-control input-md" required="">
    </div>

    <label class="col-md-4 control-label" for="Nombre Completo">Lema</label>
    <div class="col-md-4">
        <input id="Nombre Completo" name="lema" type="text" placeholder="" class="form-control input-md" required="">
    </div>
    <input type="submit" name="submit" value="enviar">
    </form>
</div>
 </div>