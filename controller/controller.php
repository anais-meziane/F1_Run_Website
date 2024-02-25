<?php
    require('./model/piloteManager.php');

    function listPilotes(){
        $piloteM = new PiloteManager();
        $pilotes = $piloteM->getPilotes();
        require("./view/indexView.php");
    }

    function getPilote($pilote_id){
        $piloteM = new PiloteManager($pilote_id);
        $pilote = $piloteM->getPilote();
        require('./view/piloteView.php');
    }

    function listGrandPrix(){
        $grandprixM = new GrandPrixManager();
        $grandprixs = $grandprixM->getGrandPrixs();
        require("./view/indexGrandPrixView.php");
    }

    function getGrandPrix($grandprix_id){
        $grandprixM = new GrandPrixManager($grandprix_id);
        $grandprix = $grandprixM->getGrandPrix();
        require('./view/grandPrixView.php');
    }

    function listResultat(){
        $resultatM = new ResultatManager();
        $resultats = $resultatM->getResultats();
        require("./view/indexResultatView.php");
    }

    function getResultat($resultat_id){
        $resultatM = new ResultatManager($resultat_id);
        $resultat = $resultatM->getResultat();
        require('./view/resultatView.php');
    }

?>