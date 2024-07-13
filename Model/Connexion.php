
<?php
// classe connexion;Connexion unique;Classe instanciee qu'une seule fois dans le code
class Connexion
{
    private static $instance;
    private  $connexion;
    private function __construct()
    {
        $servname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gestion_ecole";
        $this->connexion = new mysqli($servname, $username, $password, $dbname);
    }
    public function getConnexion()
    {
        return $this->connexion;
    }
    public  static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Connexion();
        }
        return self::$instance;
    }
}
