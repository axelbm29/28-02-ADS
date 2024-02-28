<?
    include_once('conexion.php');
    class modelo1 extends fabrica
    {
        public function ejecutaSQL($sql)
        {
            conexion::getInstancia();
            $respuesta = mysql_query($sql);
            $numero_filas = mysql_num_rows($respuesta);
            if($numero_filas > 0)
                return TRUE;
            else
                return FALSE;
        }
    }
?>