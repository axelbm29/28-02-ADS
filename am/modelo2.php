<?
    include_once('conexion.php');
    class modelo2 extends fabrica
    {
        public function ejecutaSQL($sql)
        {
            conexion::getInstancia();
            $respuesta = mysql_query($sql);
            $numero_filas = mysql_num_rows($respuesta);
            if($numero_filas > 0)
            {
                for($i=0;$i<$numero_filas;$i++)
                    $fila[$i] = mysql_fetch_array($respuesta);
                return($fila);
            }
            else
                return NULL;
        }
    }
?>