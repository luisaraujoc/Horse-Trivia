<?php

include 'sys/conx.php';

function banco($server, $user, $password, $db, $consulta)
{

    $banco = new mysqli($server, $user, $password, $db);
    $resultado = $banco->query($consulta);
    $banco->close();
    return $resultado;
}

function registrar($server, $user, $password, $db, $query)
{
    
    banco($server, $user, $password, $db, $query);
}

function selec_perg($server, $user, $password, $db){
    $query = "SELECT * FROM `perguntas`;";
    $result = banco($server, $user, $password, $db, $query);
    $i = 0;

    while ($row = $result->fetch_assoc()){
        $p['ID'][$i] = $row['ID'];
        $p['Pergunta'][$i] = $row['Pergunta'];
        $p['ID_dificuldade'][$i] = $row['ID_dificuldade'];
        $p['ID_Assunto'][$i] = $row['ID_Assunto'];
        $i++;
    }
    
    return $p;
    json_encode($p);
}


function selec_opc($server, $user, $password, $db){
    $i = 0;
    


    // Query
    $query = "SELECT * FROM alternativas WHERE ID_pergunta = ?;";
    $result = banco($server, $user, $password, $db, $query);
    

    // While
    while ($row = $result->fetch_assoc()){
        $opc['ID'][$i] = $row['ID'];
        $opc['alternativa'][$i] = $row['Alternativa'];
        $opc['right'][$i] = $row['right'];
        $opc['ID_pergunta'][$i] = $row['ID_pergunta'];

        $i++;
    };
    
    return $opc['alternativa'];
    json_encode($opc);

}



?>