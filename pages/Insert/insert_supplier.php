<?php
include("../../config.php");
$msg = "";


if (isset($_POST['SupplierCode'])) {

    $SupplierCode = mysqli_real_escape_string($dbc, $_POST['SupplierCode']);
    $SupplierName = mysqli_real_escape_string($dbc, $_POST['SupplierName']);
    $Address = mysqli_real_escape_string($dbc, $_POST['Address']);
    $ContactPerson = mysqli_real_escape_string($dbc, $_POST['ContactPerson']);
    $Contact = mysqli_real_escape_string($dbc, $_POST['Contact']);
    $Email = mysqli_real_escape_string($dbc, $_POST['Email']);
    $Status = mysqli_real_escape_string($dbc, $_POST['Status']);
    $currentDateTime = date('Y-m-d H:i:s');
    $sql = "INSERT INTO supplier(SupCode,SupplierName,Address,ContactPerson,Contact,Email,Status,DateCreated)VALUES('$SupplierCode','$SupplierName','$Address','$ContactPerson','$Contact','$Email','$Status','$currentDateTime')";


    mysqli_query($dbc, $sql);

    if (mysqli_error($dbc)) {
        echo (mysqli_error($dbc));
    } else {

        echo "ok";
    }

}

?>