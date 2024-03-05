<?php
include("../../config.php");

if (isset($_POST['id'])) {



    // SupCode,SupplierName,Address,ContactPerson,Contact,Email,Status,

    $sql = "UPDATE `item` SET `Status`='0' WHERE itemId =" . $_POST['id'] . "";

    mysqli_query($dbc, $sql);

    if (mysqli_error($dbc)) {
        echo "Un Unknown Error Occured, Unable To Delete Item " . mysqli_error($dbc);
    } else {
        echo 'ok';
    }

}

?>