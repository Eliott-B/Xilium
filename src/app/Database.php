<?php

namespace app;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;
    private PDO $db;
    private \PDOStatement|null $req;

    private function __construct($config_path = "../config/bdd.json")
    {
        if (!file_exists($config_path)) throw new \BddException("Le fichier de configuration n'existe pas");

        $config_object = file_get_contents($config_path);
        $config_file = json_decode($config_object, true);


        $dns = $config_file['driver'] .
            ":host=" . $config_file['host'] .
            (!empty($config_file['port']) ? (";port=" . $config_file['port']) : "") .
            ";dbname=" . $config_file['database'];

        $this->db = new \PDO($dns, $config_file['username'], $config_file['password']);
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getDb(){
        return $this->db;
    }

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

    public function getLastId(){
        return $this->db->lastInsertId();
    }

//    function __destruct()
//    {
//        $this->req = null;
//        $this->db = null;
//    }
}