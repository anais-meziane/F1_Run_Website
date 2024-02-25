<?php
    require("./controller/controller.php");
    
    try{

        $action = isset($_GET['list']);
        //if (isset($_POST['list'])) {
            $button_value = $_GET['list'];
            switch($button_value) {
                case '1':
                    listPilotes();
                    break;
                case '2':
                    listGrandPrix();
                    break;
                case '3':
                    listResultat();
                    break;
                default:
                    listPilotes();
                    break;
            }
        }

        // $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
        // switch($action){
        //     case 'listPilotes':
        //         listPilotes();
        //         break;
    
        //     case 'pilote':
        //         if(isset($_REQUEST['pilote_id']) && $_REQUEST['pilote_id']>0){
        //             getPilote($_REQUEST['pilote_id']);
        //         }else{
        //             throw new Exception('Pilote does not exist');
        //         }
        //         break;
                
        //     case 'listGrandPrix':
        //         listGrandPrix();
        //         break;
        
        //     case 'grandPrix':
        //         if(isset($_REQUEST['grandprix_id']) && $_REQUEST['grandprix_id']>0){
        //             getGrandPrix($_REQUEST['grandprix_id']);
        //         }else{
        //             throw new Exception('Grand Prix does not exist');
        //         }
        //         break;
    
        //     case 'listResultat':
        //         listResultat();
        //         break;
            
        //     case 'resultat':
        //         if(isset($_REQUEST['grandprix_id']) && $_REQUEST['resultat_id']>0){
        //             getResultat($_REQUEST['resultat_id']);
        //         }else{
        //             throw new Exception('Resultat does not exist');
        //         }
        //         break;
    
        //     default:
        //         listResultat();               
        //         break;
        
        // }
    //}
    catch(ErrorException $e){
        //require('./view/errorView.php');
    }
    catch(Exception $e){
        require('./view/exceptionView.php');
    }

    $content = ob_get_clean();
?>

<?php $title = "Stage Finder | Recherche"; ?>
<?php ob_start();                          ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php');   ?>