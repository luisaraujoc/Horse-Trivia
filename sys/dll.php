<?php

include 'sys/conx.php';

function banco($server, $user, $password, $db, $consulta)
{

    $banco = new mysqli($server, $user, $password, $db);
    $resultado = $banco->query($consulta);
    $banco->close();
    return $resultado;
}

function selec_perg($server, $user, $password, $db){
    $query = "SELECT * FROM `perguntas`;";
    $result = banco($server, $user, $password, $db, $query);
    $i = 0;

    while ($row = $result->fetch_assoc()){
        $p['ID'][$i] = $row['ID'];
        $p['Pergunta'][$i] = $row['pergunta'];
        $p['ID_dificuldade'][$i] = $row['ID_dificuldade'];
        $p['ID_Assunto'][$i] = $row['ID_Assunto'];
        $i++;
    }

    return $p;
    json_encode($p);
}

function selec_opc($server, $user, $password, $db) {
    $p = selec_perg($server, $user, $password, $db);
    $query = "SELECT * FROM `alternativas` WHERE `ID_pergunta` = ".$p['id'].";";
    $result = banco($server, $user, $password, $db, $query);
    $i = 0;

    while ($row = $result->fetch_assoc()){
        $opc['ID'][$i] = $row['ID'];
        $opc['alternativa'][$i] = $row['Alternativa'];
        $opc['right'][$i] = $row['right'];

        $i++;
    };

    return $opc;
    json_encode($opc);

};

