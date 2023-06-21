<?php
    function iniciarSessao(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    function eliminarTag($array)
    {
        $lista = null;
        foreach($array as $registro => $valor)
        {
            $lista[$registro] = htmlentities($valor);
        }
        return $lista;
    }