<?php

require('model/Model.php');


function getDates(){
    $stm = Model::execreq("select d_debut,d_fin from indisponible order by d_debut");
    $tbl = $stm->fetchAll(PDO::FETCH_OBJ);

    return $tbl;
}

function ajoutTemps(){
    $date1 = date('Y-m-d',strtotime($_POST['d_debut']));
    $date2 = date('Y-m-d',strtotime($_POST['d_fin']));
    $req = Model::execreq('insert into indisponible values(:id,:dd,:df)',[
        ":id"=>random_int(0,5000),
        ":dd"=>$date1,
        ":df"=>$date2
    ]);

    return $req;
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['d_debut']) && isset($_POST['d_fin'])){
    ajoutTemps();
}

$dates = getDates();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disponibilité</title>
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
                <label for="d_debut">Date de debut</label>
                <input type="date" name="d_debut">
            </span>
            <span>
                <label for="d_fin">Date de fin</label>
                <input type="date" name="d_fin">
            </span>
            <button type="submit">Reservez</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Date de debut</th>
                    <th>Date de fin</th>
                </tr>
            </thead>
            <?php if($dates) : ?>
                <tbody>
                    <?php foreach($dates as $dt) : ?>
                        <tr>
                            <td><?= $dt->d_debut ?></td>
                            <td><?= $dt->d_fin ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php endif ; ?>                
        </table>
    </div>
</body>
</html>