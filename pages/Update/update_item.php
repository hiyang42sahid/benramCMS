<?php
include("../../config.php");

if (isset($_POST['SupplierE'])) {

    $Supplier = mysqli_real_escape_string($dbc, $_POST['SupplierE']);
    $ItemName = mysqli_real_escape_string($dbc, $_POST['ItemNameE']);
    $Description = mysqli_real_escape_string($dbc, $_POST['DescriptionE']);
    $Amount = mysqli_real_escape_string($dbc, $_POST['AmountE']);
    $SupName = mysqli_real_escape_string($dbc, $_POST['SupNameE']);

    $sql = "UPDATE `item` SET `ItemName`='" . $ItemName . "', `Description`='" . $Description . "', `SupId`='" . $Supplier . "', `SupName`='" . $SupName . "', `Amount`='" . $Amount . "' WHERE itemId =" . $_POST['ItemID'] . "";

    mysqli_query($dbc, $sql);

    if (mysqli_error($dbc)) {
        echo "Un Unknown Error Occured, Unable To Update Item " . mysqli_error($dbc);
    } else {
        echo 'ok';
    }

}

?>