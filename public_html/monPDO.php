<?php
/**
 * classe d'accès aux donnéees, Utilise les services de la classe PDO
 * les attributs sont tous static ,les 4 premiers pour la connexion
 * $MonPdo qui contiendra l'unique instance de la classe
 */ 
class MonPdo {
    private static $serveur ='mysql:host=localhost';
    private static $bdd ='dbname=u115344559_xnovasite';
    private static $user ='u115344559_xnova';
    private static $password='Xnova2020';
    private static $monPdo;
    private static $unPdo = null;


    // constructeur privée crée l'instance de PDO qui sera solicité
    //pour toutes les methodes de la classe
    private function __construct() {
    MonPdo::$unPdo = new PDO( MonPdo::$serveur.';'.MonPdo::$bdd, MonPdo::$user, MonPdo::$password);
    MonPdo::$unPdo->query("SET CHARACTER SET utf8");
    MonPdo::$unPdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     
  
    }
    public function __destruct()
    {
      MonPdo::$unPdo = null;
    }
    
    /**
     *fonction static qui crée l'unique instance de la classe
     *appel: $instanceMonPdo = MonPdo::getMonPdo();
     * @return " l'unique objet de la classe
     */
    public static function getInstance(){
        if(self::$unPdo == null){
            self::$monPdo = new MonPdo();
        }
        return self::$unPdo;
    }
    }
?>