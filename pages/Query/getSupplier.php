<?php
include("../../config.php");
// Capture selected country 

if (isset($_POST['Id'])) {


    $Id = mysqli_real_escape_string($dbc, $_POST['Id']);
    $query = "SELECT * FROM supplier where SupId =" . $Id . "";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($result);
    $SupCode = "$row[SupCode]";
    $SupplierName = "$row[SupplierName]";
    $Address = "$row[Address]";
    $ContactPerson = "$row[ContactPerson]";
    $Contact = "$row[Contact]";
    $Email = "$row[Email]";
    $Status = "$row[Status]";


    echo $Id . '!' . $SupCode . '!' . $SupplierName . '!' . $Address . '!' . $ContactPerson . '!' . $Contact . "!" . $Email . "!" . $Status;



}


?>