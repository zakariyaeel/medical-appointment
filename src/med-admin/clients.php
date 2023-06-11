<?php
require("Model/Model.php");

class Patient{

    private $pfname;
    private $pcin;
    private $pphone;
    private $pemail;
    private $address;

    public function __construct($fullname,$p_cin,$p_tel,$p_email,$p_adress)
    {
        $this->pfname = $fullname;
        $this->pcin = $p_cin;
        $this->pphone = $p_tel;
        $this->pemail = $p_email;
        $this->address = $p_adress;
    }

    public static function getAllPatient(){
        $stm = Model::execreq('select * from patient where pemail not like "admin@gmail.com"');
        $table = $stm->fetchAll(PDO::FETCH_OBJ);

        return $table;
    }
}
$patients = Patient::getAllPatient();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de clients</title>
    <style>
        .contenue{
            position: relative;
            width: calc(100% - 350px);
            left: 295px;
            padding: 20px;
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
        <h1>Liste des Patients</h1>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Fullname</th>
                        <th>CIN</th>
                        <th>Phone</th>
                        <th>E-Mail</th>
                        <th>Adress</th>
                    </tr>
                </thead>
                <?php if($patients) : ?>
                    <tbody>
                        <?php foreach($patients as $pt) : ?>
                            <tr>
                                <td><?= $pt->pfname ?></td>
                                <td><?= $pt->pcin ?></td>
                                <td><?= $pt->pphone ?></td>
                                <td><?= $pt->pemail ?></td>
                                <td><?= $pt->address ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>