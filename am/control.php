<?
    include_once('fabrica.php');
    $objetoFabrica = new fabrica();
    /*$objetoModelo = $objetoFabrica -> getModelo('modelo1');
    if($objetoModelo -> ejecutaSQL("SELECT login from usuario WHERE login = 'gato'"))
        echo "ok";
    else
        echo "nn";*/
    $objetoModelo = $objetoFabrica -> getModelo('modelo2');
    $resultado = $objetoModelo -> ejecutaSQL("SELECT P.etiquetaPrivilegio, P.rutaPrivilegio,
                                                      P.iconoPrivilegio
                                               FROM usuario U, privilegio P, usuarioPrivilegio UP
                                               WHERE U.login = 'perro' AND
                                                     U.login = UP.login AND
                                                     P.idPrivilegio = UP.idPrivilegio");
    
    if($resultado != NULL)
        print_r($resultado);
    else
        echo "no hay";
?>