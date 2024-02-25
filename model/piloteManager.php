<?php

    require_once("manager.php");
    class PiloteManager extends Manager{
        public function __construct($pilote_id=0){
            parent::__construct();
            $this->_pilote_id = $pilote_id;
        }

        public function getPilotes(){
            $req = $this->_connection->query('SELECT NoPil, NomPil, NatPil, pilote.NoTV, NomTV, Moteur FROM pilote, typevoiture WHERE typevoiture.NoTV = pilote.NoTV ORDER BY pilote.NoPil');
            $pilotes = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
            return $pilotes;
        }

        public function getPilote(){
            $req = $this->_connection->prepare('SELECT NoPil, NomPil, NatPil, pilote.NoTV, NomTV, Moteur FROM pilote, typevoiture WHERE typevoiture.NoTV = pilote.NoTV ORDER BY pilote.NoPil AND NoPil = ? ');
            $req->execute(array($this->_pilote_id));
            $pilote = $req->fetch(PDO::FETCH_ASSOC);
            $req->closeCursor();
            return $pilote;
        }
    }

    class GrandPrixManager extends Manager{
        public function __construct($grandprix_id=0){
            parent::__construct();
            $this->_grandprix_id = $grandprix_id;
        }

        public function getGrandPrixs(){
            $req = $this->_connection->query('SELECT pilote.NoPil, NomPil, NatPil, NoTV, NomGP, DateGP, LieuCirc, RecTour FROM pilote, grandprix WHERE pilote.NoPil = grandprix.NoPil ORDER BY NomGP');
            $grandprixs = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
            return $grandprixs;
        }

        public function getGrandPrix(){
            $req = $this->_connection->prepare('SELECT pilote.NoPil, NomPil, NatPil, NoTV, NomGP, DateGP, LieuCirc, RecTour FROM pilote, grandprix WHERE pilote.NoPil = grandprix.NoPil AND NoGP = ? ');
            $req->execute(array($this->_grandprix_id));
            $grandprix = $req->fetch(PDO::FETCH_ASSOC);
            $req->closeCursor();
            return $grandprix;
        }
    }

    class ResultatManager extends Manager{
        public function __construct($resultat_id=0){
            parent::__construct();
            $this->_resultat_id = $resultat_id;
        }

        public function getResultats(){
            $req = $this->_connection->query('SELECT NoGP,resultat.NoPil,Place, pilote.NomPil, PtObt FROM resultat inner JOIN pilote ON pilote.NoPil=resultat.NoPil ORDER BY NoGP, Place');
            $resultats = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
            return $resultats;
        }

        public function getResultat(){
            $req = $this->_connection->prepare('SELECT NoGP,resultat.NoPil,Place, pilote.NomPil, PtObt FROM resultat inner JOIN pilote ON pilote.NoPil=resultat.NoPil WHERE NoGP = ? AND Place = ? ORDER BY NoGP, Place');
            $req->execute(array($this->_resultat_id));
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
            $req->closeCursor();
            return $resultat;
        }
    }

?>


