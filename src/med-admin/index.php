<?php
require("model/Model.php");

function getCountP(){
    $stm = Model::execreq('select count(pemail) as num_pts from patient where pemail not like "admin@gmail.com"');
    $tbl = $stm->fetchAll(PDO::FETCH_OBJ);

    return $tbl;
}
function getRvA(){
    $stm = Model::execreq('select count(pfname) as num_rv FROM patient p join rendezvous r
    on p.pemail = r.pemail WHERE r.appo_date = CURRENT_DATE');
    $tbl = $stm->fetchAll(PDO::FETCH_OBJ);

    return $tbl;
}
function getCountyP(){
    $stm = Model::execreq('select count(nom_type) as num_typ from type_rendezvous');
    $tbl = $stm->fetchAll(PDO::FETCH_OBJ);

    return $tbl;
}

$pts = getCountP();
$rvas = getRvA();
$typs = getCountyP();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        .contenue{
            position: relative;
            width: calc(100% - 350px);
            left: 295px;
            padding: 20px;
            display: flex;
            justify-content: space-evenly;
        }
        .contenue .card{
            width: 220px;
            height: 200px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contenue .card .content{
            margin: 5px;
            color: #707070;
            position: relative;
            height: 100%; 
        }
        .contenue .card .content p{
            font-size: 45px;
            font-weight: 700;
            text-align: center;
            margin-top: 15px;
        }
        .contenue .card .content a{
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 5px;
            padding-right: 0;
        }

    </style>
</head>
<body>
    <?php include("includes/aside.php"); ?>
    <div class="contenue">
        <div class="card">
            <div class="content">
                <h3>Nombre de patients</h3>
                <?php foreach($pts as $p) : ?>
                    <p><?= $p->num_pts ?></p>
                <?php endforeach; ?>    
                <a href="clients.php">Consulter</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h3>Rendez-vous d'aujourd'hui</h3>
                <?php foreach($rvas as $rv) : ?>
                    <p><?= $rv->num_rv ?></p>
                <?php endforeach; ?> 
                <a href="rendez-vous.php">Consulter</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h3>Nombre de type du rendez-vous</h3>
                <?php foreach($typs as $ty) : ?>
                    <p><?= $ty->num_typ ?></p>
                <?php endforeach; ?> 
                <a href="ajout-type.php">Consulter</a>
            </div>
        </div>
    </div>
</body>
</html>