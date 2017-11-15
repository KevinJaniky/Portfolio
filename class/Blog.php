<?php

class Blog {

    private $_bdd;

    public function __construct()
    {
        require_once 'ENV.php';

        try {
            $this->_bdd = new PDO('mysql:host=' . DATABASE . ';dbname=' . DBNAME . ';charset=utf8', USER, MDP);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getArticles($nb = 0) {
        if($nb == 0 ) {
            $data = $this->_bdd->query('SELECT * FROM blog');
        }else {
            $data = $this->_bdd->query('SELECT * FROM blog LIMIT '.$nb);
        }
        return $data->fetchAll();
    }
}