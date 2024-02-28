<?
    class conexion
    {
        private static $instancia = NULL;
        private function conexion()
        {
            mysql_connect('localhost','root','12345');
            mysql_select_db('ejemplo');
        }
        public static function getInstancia()
        {
            if(self::$instancia == NULL)
                self::$instancia = new conexion();
            return self::$instancia;
        }
    }
?>