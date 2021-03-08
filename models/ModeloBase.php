<?php
require_once 'config/Conexion.php';
class ModeloBase{
    public $db;
    public function __construct()
    {
        $this->db = Conexion::conectar();
    }
    public function listarBase($tabla){
        $consulta="select * from $tabla order by idpartido desc";
        $ejecucion_consulta=mysqli_query($this->db,$consulta) or die(mysqli_error($this->db)); //evaluacion simple de consulta
        $verificacion=mysqli_num_rows($ejecucion_consulta);
        $resultado=array();
        if($verificacion>=1){
            $resultado=$ejecucion_consulta;
        }
        return $resultado;
    }

}