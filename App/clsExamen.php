<?php
require_once 'conexion.php';
class ClsExamen
{
    function ListarPreguntas()
    {
        $sql = 'SELECT * FROM preguntas';
        global $cnx;
        return $cnx->query($sql);
    }
   /* function CargarTarifario($nvl)
    {
        $sql = 'SELECT * FROM tarifario WHERE nivelUso BETWEEN 1 AND :nivel';
        global $cnx;
        $parametros = [
            ':nivel' => $nvl
        ];
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        return $pre;
    }*/
}

