<?php
include("../../config.php");
// Capture selected country 

if (isset($_POST['Id'])) {


    $Id = mysqli_real_escape_string($dbc, $_POST['Id']);
    $query = "SELECT * FROM item where itemId =" . $Id . "";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($result);
    $ItemName = "$row[ItemName]";
    $Description = "$row[Description]";
    $SupId = "$row[SupId]";
    $SupName = "$row[SupName]";
    $Amount = "$row[Amount]";

    echo $Id . '!' . $ItemName . '!' . $Description . '!' . $SupId . '!' . $SupName . '!' . $Amount;



}


?>