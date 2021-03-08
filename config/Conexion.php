<?php

class Conexion{
    public static function conectar(){
        $conexion=new mysqli("localhost","root","","partidos");
        $conexion->query("set names 'utf8'");
        return $conexion;
    }
}
   