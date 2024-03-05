<?php
include("../../config.php");
$msg = "";


if (isset($_POST['Supplier'])) {

    $Supplier = mysqli_real_escape_string($dbc, $_POST['Supplier']);
    $ItemName = mysqli_real_escape_string($dbc, $_POST['ItemName']);
    $Description = mysqli_real_escape_string($dbc, $_POST['Description']);
    $Amount = mysqli_real_escape_string($dbc, $_POST['Amount']);
    $SupName = mysqli_real_escape_string($dbc, $_POST['SupName']);

    $currentDateTime = date('Y-m-d H:i:s');
    $sql = "INSERT INTO item(ItemName,Description,SupId,SupName,Amount,DateCreated)VALUES('$ItemName','$Description','$Supplier','$SupName','$Amount','$currentDateTime')";


    mysqli_query($dbc, $sql);

    if (mysqli_error($dbc)) {
        echo (mysqli_error($dbc));
    } else {

        echo "ok";
    }

}

?>