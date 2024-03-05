<?php
include("../../config.php");

if (isset($_POST['id'])) {



    // SupCode,SupplierName,Address,ContactPerson,Contact,Email,Status,

    $sql = "UPDATE `supplier` SET `Status`='2' WHERE SupID =" . $_POST['id'] . "";

    mysqli_query($dbc, $sql);

    if (mysqli_error($dbc)) {
        echo "Un Unknown Error Occured, Unable To Delete Supplier " . mysqli_error($dbc);
    } else {
        echo 'ok';
    }

}

?>