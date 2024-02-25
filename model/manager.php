<?php 

    class Manager{
        protected $_connection;

        const DNAME = "f1";
        const HOST = "localhost";
        const LOGIN = "root";
        const PWD = "";

        protected $_pilote_id;

        protected function __construct(){
            $this->_connection = new PDO('mysql:host='.self::HOST.';dbname='.self::DNAME.';charset=utf8', self::LOGIN, self::PWD);
        }

        public function getPiloteId(){
            return $this->_pilote_id;
        }

        public function setPiloteId($piloteId){
            $this->_pilote_id = $piloteId;
        }

        public function getGrandPrix(){
            return $this->_grandprix_id;
        }

        public function setGrandPrix($grandprixId){
            $this->_grandprix_id = $grandprixId;
        }

        public function getResultat(){
            return $this->_resultat_id;
        }

        public function setResultat($resultatId){
            $this->_resultat_id = $resultatId;
        }
    }
    
?>