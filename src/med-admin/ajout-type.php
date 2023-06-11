<?php
require("model/Model.php");

function getTypes(){
    $stm = Model::execreq("select * from type_rendezvous");
    $tbl = $stm->fetchAll(PDO::FETCH_OBJ);

    return $tbl;
}
function ajoutType(){
    $req = Model::execreq("insert into type_rendezvous values(:nom,:prix)",[
        ":nom"=> $_POST['type'],
        ":prix"=> $_POST['prix']
    ]);

    return $req;
} 

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["type"]) && isset($_POST["prix"])){
    ajoutType();
}

$types = getTypes();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter type de rendz-vous</title>
    <style>
      .contenue{
            position: relative;
            width: calc(100% - 350px);
            left: 295px;
            padding: 20px;
        }
        .contenue form{
            display: flex;
            justify-content: space-evenly;
        }
        .contenue form input{
            padding: 15px;
            width: 220px;
            outline: #ddd 1px solid;
            border: none;
            position: relative;
            border-radius: 6px;
        }
        .contenue form label{
            position: absolute;
            top: 10px;
            padding: 0 7px;
            z-index: 1;
            font-size: 15px;
            color: #707070;
        }
        .contenue form button{
            background-color: #92E3A9;
            width: 150px;
            font-size: 20px;
            margin-left: -90px;
            cursor: pointer;
            border-radius: 6px;
            border: none;
            color: #707070;
        }
        table{
            border-collapse: collapse;
            margin-top: 50px;
            width: 100%;
        }
        th{
            border: #000 1px solid;
            background-color: #92E3A9;
            padding: 10px;
            min-width: 150px;
        }
        td{
            background-color: #e4e9f7;
            border: 1px #000 solid;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php include("includes/aside.php"); ?>

    <div class="contenue">
        <form method="post">
                <span>
                    <label for="type">Nom de type </label>
                    <input type="text" name="type" placeholder="entrez le nom">
                </span>
                <span>
                    <label for="prix">Prix </label>
                    <input type="text" name="prix" placeholder="entrez le prix">
                </span>
            <button type="submit">Ajouter</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nom de type</th>
                    <th>prix</th>
                </tr>
            </thead>
            <?php if($types) : ?>
                <tbody>
                    <?php foreach($types as $typ) : ?>
                        <tr>
                            <td><?= $typ->nom_type?></td>
                            <td><?= $typ->prix?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php endif ; ?>                
        </table>
    </div>
</body>
</html>