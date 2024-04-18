<?php
require_once 'clsExamen.php';

$accion = $_POST['accion'];
controller($accion);

function controller($accion)
{
    $objExamen = new ClsExamen();

    switch ($accion) {
        case 'LISTAR_PREGUNTAS':
            $listadoPreguntas = $objExamen->ListarPreguntas();
            $listadoPreguntas = $listadoPreguntas->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($listadoPreguntas);
            break;
/*        case 'CARGAR_TARIFARIO':
            $nvl = $_POST['nivelIpress'];
            $tarifario = $objExamen->CargarTarifario($nvl);
            $tarifario = $tarifario->fetchAll(PDO::FETCH_OBJ);
            session_start();
            $_SESSION['active'] = true;
            $_SESSION['tarifario'] = [];
            foreach ($tarifario as $Examen) {
                array_push($_SESSION['tarifario'], $Examen->codigoCpms);
            }
            echo json_encode($tarifario);
            break;*/
        }
    }

/*    $listadoPreguntas = $objExamen->ListarPreguntas();
    $listadoPreguntas = $listadoPreguntas->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($listadoPreguntas);
*/
