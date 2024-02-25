<?php $title = "Home F1 run"; ?>
<?php ob_start(); ?>

<div class="container">
    <?php
        foreach($pilotes as $pilote){
            include('piloteCard.php');
        }
    ?>
</div>
<div class="container">
    <form action="" method="POST">
        <input type="text" name="namePil" placeholder="Pilote Name">
        <input type="text" name="nat"     placeholder="Pilote Nationality">
        <input type="text" name="TV"      placeholder="Pilote Number">
        <button type="submit" name="button">Add Pilote</button>
    </form>
    <?php
        if(isset($_POST['button'])){
            $namePil =$_POST['namePil'];
            $nat = $_POST['nat'];
            $TV = $_POST['TV'];
            $db = new PDO('mysql:host=localhost;dbname=f1;charset=utf8', 'root', '');
            $req_str = "INSERT INTO pilote (NoPil, NatPil, NoTV) VALUES (:namePil, :nat, :TV)";
                        $statement = $db->prepare($req_str);
                        $statement->bindParam("namePil", $namePil, PDO::PARAM_STR);
                        $statement->bindParam("nat", $nat, PDO::PARAM_STR);
                        $statement->bindParam("TV", $TV, PDO::PARAM_STR);
                        $statement->execute();
        }
    ?>
</div>

<?php $content =ob_get_clean(); ?>
<?php require('template.php');  ?>