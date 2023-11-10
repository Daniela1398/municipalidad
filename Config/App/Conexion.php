<?php
class Conexion{
    private $conect;
    define('host', 'tu_valor_de_host');
    define('NOMBRE_DE_LA_CONSTANTE', 'valor_de_la_constante');


    public function __construct()
    {
        $pdo ="mysql:host".host.";dbname=" .db. ";charset.";
        try {
            $this->conect = new PDO($pdo, user, pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexion".$e->getMessage();
        }
    }
    public function conect()
    {
        return $this->conect;
    }
}

?>