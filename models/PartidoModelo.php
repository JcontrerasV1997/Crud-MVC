<?php
require_once 'models/ModeloBase.php';
class PartidoModelo extends ModeloBase
{
    public $idpartido;
    public $nombre;
    public $num_seguidores;
    public $nombre_lider;
    public $num_alcaldes;
    public $num_concejales;
    public $lema;
    public function __construct()
    {
        parent:: __construct();
    }
    public function guardarDatos(){
     $consulta= "INSERT INTO partido(nombre,num_seguidores,nombre_lider,num_alcaldes,num_concejales,lema) 
                                    values ('{$this->nombre}',
                                            '{$this->num_seguidores}',
                                            '{$this->nombre_lider}',
                                            '{$this->num_alcaldes}', 
                                            '{$this->num_concejales}', 
                                            '{$this->lema}')";      
        $guardar= $this->db->query($consulta);
        return $guardar;
}
    public function actualizarDatos(){
        $consulta= "UPDATE partido SET nombre='{$this->nombre}', 
                                       num_seguidores='{$this->num_seguidores}', 
                                       nombre_lider='{$this->nombre_lider}',
                                       num_alcaldes='{$this->num_alcaldes}',
                                       num_concejales='{$this->num_concejales}',
                                       lema='{$this->lema}'
                    WHERE idpartido = {$this->idpartido}";
                    $actualizar=$this->db->query($consulta);
                    return $actualizar;
      }
    public function eliminarDatos($idpartido){
        $consulta= "DELETE from partido where idpartido= $idpartido";
                    $eliminar=$this->db->query($consulta);
                    return $eliminar;
      }

    function getIdpartido()
    {
        return $this->idpartido;
    }

    function setIdpartido($idpartido)
    {
        $this->idpartido = $idpartido;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getNum_seguidores()
    {
        return $this->num_seguidores;
    }

    function setNum_seguidores($num_seguidores)
    {
        $this->num_seguidores = $num_seguidores;
    }

    function  getNombre_lider()
    {
        return $this->nombre_lider;
    }

    function  setNombre_lider($nombre_lider)
    {
        $this->nombre_lider = $nombre_lider;
    }

    function getNum_alcaldes()
    {
        return $this->num_alcaldes;
    }

    function  setNum_alcaldes($num_alcaldes)
    {
        $this->num_alcaldes = $num_alcaldes;
    }

    function getNum_concejales()
    {
        return $this->num_concejales;
    }

    function setNum_concejales($num_concejales)
    {
        $this->num_concejales = $num_concejales;
    }

    function getLema()
    {
        return $this->lema;
    }

    function setLema($lema)
    {
        $this->lema = $lema;
    }
}
