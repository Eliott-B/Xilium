<?php

namespace app;

use PDO;
use PDOException;

/**
 * Module de la base de données
 */
class Database
{
    private static $instance = null;
    private PDO $db;
    private \PDOStatement|null $req;

    /**
     * Constructeur
     * @param string chemin des configs defaut: "../config/bdd.json"
     */
    private function __construct($config_path = "../config/bdd.json")
    {
        if (!file_exists($config_path)) throw new BddException("Le fichier de configuration n'existe pas");

        $config_object = file_get_contents($config_path);
        $config_file = json_decode($config_object, true);


        $dns = $config_file['driver'] .
            ":host=" . $config_file['host'] .
            (!empty($config_file['port']) ? (";port=" . $config_file['port']) : "") .
            ";dbname=" . $config_file['database'];

        try {
            $this->db = new \PDO($dns, $config_file['username'], $config_file['password']);
        } catch (PDOException $e) {
            echo 'Erreur : '.$e->getMessage();
        }
    }

    /**
     * Renvoi une instance de la classe
     * @return Database 
     */
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Database();
        }

        return self::$instance;
    }

    /**
     * Renvoi l'objet PDO de la base de données
     * @return PDO
     */
    public function getDb(){
        return $this->db;
    }

    /**
     * Execute une requête SQL
     * @param string requête
     * @param array arguments
     */
    public function query(string $query, array $args = []){
        $this->req = $this->db->prepare($query); // on prepare la requete
        // pour chaque argument de la requete, on le bind avec la valeur correspondante
        if (count($args) > 0){
            foreach ($args as $k => &$v){
                $this->req->bindParam($k, $v);
            }
        }

        try {
            $this->req->execute();
        }
        catch (PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }

        return $this->req->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Renvoi l'identifiant de la dernière insertion SQL
     * @return int
     */
    public function getLastId(){
        return $this->db->lastInsertId();
    }

    function __destruct()
    {
        unset($this->db, $this->req);
    }
}