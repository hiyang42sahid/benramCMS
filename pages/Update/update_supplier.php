<?php
include("../../config.php");

if (isset($_POST['SupplierCodeE'])) {

    $SupplierName = mysqli_real_escape_string($dbc, $_POST['SupplierNameE']);
    $Address = mysqli_real_escape_string($dbc, $_POST['AddressE']);
    $ContactPerson = mysqli_real_escape_string($dbc, $_POST['ContactPersonE']);
    $Contact = mysqli_real_escape_string($dbc, $_POST['ContactE']);
    $Email = mysqli_real_escape_string($dbc, $_POST['EmailE']);
    $Status = mysqli_real_escape_string($dbc, $_POST['StatusE']);
    $currentDateTime = date('Y-m-d H:i:s');

    // SupCode,SupplierName,Address,ContactPerson,Contact,Email,Status,

    $sql = "UPDATE `supplier` SET `SupplierName`='" . $SupplierName . "', `Address`='" . $Address . "', `ContactPerson`='" . $ContactPerson . "', `Contact`='" . $Contact . "', `Email`='" . $Email . "', `Status`='" . $Status . "' WHERE SupID =" . $_POST['SupIDE'] . "";

    mysqli_query($dbc, $sql);

    if (mysqli_error($dbc)) {
        echo "Un Unknown Error Occured, Unable To Update Supplier " . mysqli_error($dbc);
    } else {
        echo 'ok';
    }

}

?>