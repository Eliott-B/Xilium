<?php

namespace app\models;

use app\Database;

abstract class Model
{
    protected Database $db;

    protected string $table;
    /**
     * @var array Les données du model qui peuvent être remplies sur la bdd
     */
    protected array $fillable = [];
    protected int $id;


    public function __construct()
    {
        $instance = Database::getInstance();
        $this->db = $instance;
    }

    /** Fonction qui affiche l'ensemble du contenu d'une table
     * @return array|false
     */
    public function all()
    {
        return $this->db->query("select * from $this->table");
    }

    /** Fonction qui permet de faire une requête en
     * prenant en compte l'id en paramètre dans le where
     * @param int $id L'identifiant
     * @return Model
     */
    public function find($id)
    {
        $res = $this->db->query("select * from $this->table where " . substr($this->table, 0, 3) . "_id = :id", ['id' => $id]);
        foreach ($res as $rep){
            $ret = $rep;
        }
        $this->id = $ret['lab_id'];
        return $ret;
    }

    /** Fonction qui permet d'exécuter une requête personnalisée
     * @param $query
     * @param $args
     * @return array|false
     */
    public function custom($query, $args){
        return $this->db->query($query, $args);
    }

    /** Fonction qui permet de insérer une nouvelle ligne dans la table
     * @param array $args
     * @return void
     */
    public function create(array $args){
        $values = [];
        foreach ($args as $k => $v){
            if (in_array($k, $this->fillable)){
                $values = array_merge($values, [$k => $v]);
            }
        }
        var_dump($values);
        echo "<br>";
        $fillable_string = "";
        foreach ($this->fillable as $fill_str) {
            if(!in_array($fill_str, array_keys($values))){
                $values[] = [$fill_str => NULL];
            }

            $fillable_string .= ":" . $fill_str . ",";
        }
        $fillable_string = substr($fillable_string, 0, -1);
        var_dump($fillable_string);
        echo "<br>";


        $this->db->query("insert into $this->table value (NULL, $fillable_string)", $values);
        $this->id = $this->db->getLastId();

    }

    /** Fonction qui permet de mettre à jour
     * un table en prenant un array en paramètre
     * @param array $args
     * @return void
     */
    public function update(array $args){
        var_dump($args);
        $values = [];
        foreach ($args as $k => $v){
            if (in_array($k, $this->fillable)){
                $values[] = [$k => $v];
            }
        }

        $fillable_string = "";
        foreach (array_keys($values) as $k) {
            $fillable_string .= "" . $k . "= :" . $k . ",";
        }

        $this->db->query("UPDATE $this->table SET $fillable_string WHERE " . substr($this->table, 0, 3) . "_id = $this->id", $values);
    }

    /** Fonction qui permet de supprimer une ligne dans une table
     * @return void
     */
    public function delete($id){
        $this->db->query("DELETE FROM $this->table WHERE " . substr($this->table, 0, 3) . "_id = $id");
    }
}