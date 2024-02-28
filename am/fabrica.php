<?
    include_once('modelo1.php');
    include_once('modelo2.php');
    class fabrica
    {
        public function getModelo($tipo)
        {
            switch($tipo)
            {
                case 'modelo1': return new modelo1();
                case 'modelo2': return new modelo2();
            }
        }
        public function ejecutaSQL($sql)
        {}
    }
?>