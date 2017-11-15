<?php
/**
 * Created by PhpStorm.
 * User: kjaniky
 * Date: 14/11/2017
 * Time: 13:38
 */

class Deployement {

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

    public function createTable(){

        $this->_bdd->query('
            CREATE TABLE `user` (
              `id` int(11) NOT NULL,
              `identifiant` varchar(255) NOT NULL,
              `mdp` varchar(32) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

          ALTER TABLE `user` ADD PRIMARY KEY (`id`);
          ALTER TABLE `user` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
          
          CREATE TABLE `blog` (
              `id` int(11) NOT NULL,
              `titre` varchar(255) NOT NULL,
              `slug` varchar(255) NOT NULL,
              `image` varchar(255) NOT NULL,
              `content` text NOT NULL,
              `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `categorie` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            
          ALTER TABLE `blog` ADD PRIMARY KEY (`id`); 
          ALTER TABLE `blog` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
        
        
        ');

    }
}