<?php

function bd($server, $user, $passw, $db, $query){

    $banco = new mysqli($server, $user, $passw, $db);
    $result = $banco-> query(query);
    $banco->close();
    
    
    return $result;
}



?>