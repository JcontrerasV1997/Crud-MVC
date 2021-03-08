<?php
class PartidoController{
   
    public function listar(){
        require_once 'models/PartidoModelo.php';
        $partido = new PartidoModelo();
        $listado_partidos=$partido->listarBase('partido');
        require_once 'views/partido-views/listar.php';
    }

    public function crear(){
        require_once 'models/PartidoModelo.php';
        $partido= new PartidoModelo();
        require_once 'views/partido-views/crear.php';
        if(isset($_POST["nombre"],$_POST["num_seguidores"],$_POST["nombre_lider"],
                    $_POST["num_alcaldes"],$_POST["num_concejales"],$_POST["lema"])){
                    $partido->setNombre($nombre);
                    $partido->setNum_seguidores($num_seguidores);
                    $partido->setNombre_lider($nombre_lider);
                    $partido->setNum_alcaldes($num_alcaldes);
                    $partido->setNum_concejales($num_concejales);
                    $partido->setLema($lema);
                    $partido->guardarDatos();
                    header("Location: index.php?action=listar");
        }
    }

    public function actualizar(){
        require_once 'models/PartidoModelo.php';
        $partido= new PartidoModelo();
        require_once 'views/partido-views/actualizar.php';
        if(isset($_POST["idpartido"],$_POST["nombre"],$_POST["num_seguidores"],$_POST["nombre_lider"],
                $_POST["num_alcaldes"],$_POST["num_concejales"],$_POST["lema"])){
        $partido->setIdpartido($idpartido);
        $partido->setNombre($nombre);
        $partido->setNum_seguidores($num_seguidores);
        $partido->setNombre_lider($nombre_lider);
        $partido->setNum_alcaldes($num_alcaldes);
        $partido->setNum_concejales($num_concejales);
        $partido->setLema($lema);
        $partido->actualizarDatos();
        header("Location: index.php?action=listar");
}
    }

    public function eliminar(){
        require_once 'models/PartidoModelo.php';
        $partido= new PartidoModelo();
        $partido->eliminarDatos($_GET["id"]);
        header("Location: index.php?action=listar");
        
    }

    public function charts(){
        require_once 'models/PartidoModelo.php';
        $partido  = new PartidoModelo();
        $partidos =$partido->listarBase("partido");
        $verificacion=mysqli_num_rows($partidos);
    $valor1=array();
    $valor2=array();

    if($verificacion>0){
        foreach ($partidos as $column =>$value) {
            $valor1[]=$value['num_seguidores'];
            $valor2[] =$value['num_alcaldes'];
        }
    }
    $datosX=json_encode($valor1);
    $datosY=json_encode($valor2);
    require_once 'views/partido-views/charts.php';
    }
}