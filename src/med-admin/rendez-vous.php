<?php 
require('Model/Model.php');

class ERV{
    private $pfname;
    private $heure;
    private $nom_type;
    private $pcin;
    private $pphone;

    public function __construct($pfname,$heure,$nom_type,$pcin,$pphone)
    {
        $this->pfname = $pfname;
        $this->heure = $heure;
        $this->nom_type = $nom_type;
        $this->pcin = $pcin;
        $this->pphone = $pphone;
    }

    public static function getRv(){
        $req = 'select p.pfname,r.heure,r.nom_type,p.pcin,p.pphone FROM patient p join rendezvous r
        on p.pemail = r.pemail WHERE r.appo_date = CURRENT_DATE';
        $stm = Model::execreq($req);
        $table = $stm->fetchAll(PDO::FETCH_OBJ);

        return $table;
    }
}

$rendez_vous = ERV::getRv();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des rendez-vous</title>
    <style>
        .contenue{
            position: relative;
            width: calc(100% - 350px);
            left: 295px;
            padding: 20px;
        }
        .table{
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-top: 50px;
        }
        table{
            border-collapse: collapse;
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
        .date{
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 6px;
            background-color: #92E3A9;
        }
    </style>
</head>
<body>
    <?php include("includes/aside.php"); ?>
    <div class="contenue">
        <h1>Liste des rendez-vous d'aujourd'hui</h1>
        <div class="table">
            <span class="date"><?php echo DATE('l j F Y'); ?></span>
            <table>
                <thead>
                    <tr>
                        <th>patient</th>
                        <th>horaire</th>
                        <th>type de rendez-vous</th>
                        <th>CIN</th>
                        <th>Telephone</th>
                    </tr>
                </thead>
                <?php if($rendez_vous) : ?>
                    <tbody>
                        <?php foreach($rendez_vous as $rv) : ?>
                            <tr>
                                <td><?= $rv->pfname ?></td>
                                <td><?= $rv->heure ?></td>
                                <td><?= $rv->nom_type ?></td>
                                <td><?= $rv->pcin ?></td>
                                <td><?= $rv->pphone ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>