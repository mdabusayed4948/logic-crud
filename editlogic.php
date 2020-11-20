<?php
include 'db.php';

if (isset($_POST['idLogic']))
{

    $idLogic = $_POST["idLogic"];

    $query = "SELECT * FROM logic WHERE id = '$idLogic' ";
    $result = mysqli_query($db, $query);

    $data = mysqli_fetch_assoc($result);

    echo json_encode($data);
}
