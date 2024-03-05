<?php

include('header1.php');


?>

<div class="content-wrapper" style="min-height: 543px;background-color:white;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Item List </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Item List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">List of Item</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-success btn-sm" title="Create New" data-toggle="modal"
                                    data-target="#modaldefault">Create New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="container-fluid">
                                    <table class="table table-hover table-striped" id="tbl">

                                        <thead>
                                            <tr class="bg-primary disabled">
                                                <th>#</th>
                                                <th>Supplier Name</th>
                                                <th>Item</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $result = mysqli_query($dbc, "Select * from item");
                                            while ($row = mysqli_fetch_array($result)) {
                                                if ($row['Status'] == '0') {
                                                    continue;
                                                }
                                                ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo $i++; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['SupName']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['ItemName']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['Description']; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row['Amount']; ?>
                                                    </td>

                                                    <td style="text-align:center;">

                                                        <a class="btn btn-primary btn-xs" href="#" title="Edit"
                                                            onclick="getItem(<?php echo $row['itemId']; ?>);"> <i
                                                                class="fa fa-pencil"></i> </a>

                                                        <button class="btn btn-xs btn-danger btndelete"
                                                            id="<?php echo $row['itemId']; ?>"> <i
                                                                class="ionicons ion-trash-b"></i> </button>



                                                    </td>
                                                </tr>
                                            <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--New Account -->
    <div class="modal fade" id="modaldefault" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Item Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>

                </div>
                <form class="form-horizontal" enctype="multipart/form-data" id="insert_form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="Particulars" class="col-sm-6 control-label">Supplier</label>
                                    <div class="col-sm-12">
                                        <select style="width:100%" name="Supplier" id="Supplier"
                                            class="form-control select2">
                                            <option value=""> </option>
                                            <?php

                                            $result1 = mysqli_query($dbc, "Select * from supplier WHERE Status = 1 ORDER BY SupplierName ");
                                            while ($row = mysqli_fetch_array($result1)) {

                                                echo '<option value="' . $row['SupID'] . '" >' . $row['SupplierName'] . '</option>';

                                            }

                                            ?>

                                        </select>
                                        <input type="hidden" class="form-control" name="SupName" id="SupName"
                                            placeholder="Item Name">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="SupplierName" class="col-md-2 control-label">Item Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" name="ItemName" id="ItemName"
                                            placeholder="Item Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Description" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" id="Description" name="Description"
                                            placeholder="Description">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Amount" class="col-sm-5 control-label">Amount</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onkeypress="return CheckIsNumeric(event);"
                                            onfocusout="txt_onfocusout(this);" id="Amount" name="Amount"
                                            placeholder="0">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-info" value="Save" name="save" id="save" />
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <!--Edit Account -->
    <div class="modal fade" id="modalEdit" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Item Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>

                </div>
                <form class="form-horizontal" enctype="multipart/form-data" id="edit_form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="Particulars" class="col-sm-6 control-label">Supplier</label>
                                    <div class="col-sm-12">
                                        <select style="width:100%" name="SupplierE" id="SupplierE"
                                            class="form-control select2">
                                            <option value=""> </option>
                                            <?php

                                            $result1 = mysqli_query($dbc, "Select * from supplier WHERE Status = 1 ORDER BY SupplierName ");
                                            while ($row = mysqli_fetch_array($result1)) {

                                                echo '<option value="' . $row['SupID'] . '" >' . $row['SupplierName'] . '</option>';

                                            }

                                            ?>

                                        </select>
                                        <input type="hidden" class="form-control" name="SupNameE" id="SupNameE"
                                            placeholder="Item Name">
                                        <input type="hidden" class="form-control" name="ItemID" id="ItemID"
                                            placeholder="Item Name">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="SupplierName" class="col-md-2 control-label">Item Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" name="ItemNameE" id="ItemNameE"
                                            placeholder="Item Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Description" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" id="DescriptionE" name="DescriptionE"
                                            placeholder="Description">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Amount" class="col-sm-5 control-label">Amount</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onkeypress="return CheckIsNumeric(event);"
                                            onfocusout="txt_onfocusout(this);" id="AmountE" name="AmountE"
                                            placeholder="0">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-info" value="Save" name="saveE" id="saveE" />
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



</div>


<?php include('footer.php'); ?>
<script>

    $(document).ready(function () {
        //insert
        $('#insert_form').on('submit', function (e) {
            e.preventDefault();

            var Supplier = $("#Supplier").val();
            var ItemName = $("#ItemName").val();
            //var Description = $("#Description").val();
            var Amount = $("#Amount").val();


            if (Supplier == "") {
                toastr.error('Please Select Supplier.', 'Invalid Input!!!')
                return;
            }

            if (ItemName == "") {
                toastr.error('Please Enter Item Name.', 'Invalid Input!!!')
                return;
            }

            if (Amount == "") {
                toastr.error('Please Enter Amount.', 'Invalid Input!!!')
                return;
            }


            // start_loader();
            $.ajax({
                url: 'Insert/insert_item.php',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == 'exist') {
                        toastr.error('Employee Id No. Already Exist!!', 'Invalid Input!!!')
                        return;
                    } else if (data == 'ok') {
                        swal({
                            title: "Saved!",
                            text: "Item Saved!",
                            type: "success",
                            timer: 2000
                        });

                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    }
                    else {
                        toastr.error(data, 'Invalid Input!!!')
                        return;
                    }
                }
            });
        });




        //edit
        $('#edit_form').on('submit', function (e) {
            e.preventDefault();

            var Supplier = $("#SupplierE").val();
            var ItemName = $("#ItemNameE").val();
            //var Description = $("#Description").val();
            var Amount = $("#AmountE").val();


            if (Supplier == "") {
                toastr.error('Please Select Supplier.', 'Invalid Input!!!')
                return;
            }

            if (ItemName == "") {
                toastr.error('Please Enter Item Name.', 'Invalid Input!!!')
                return;
            }

            if (Amount == "") {
                toastr.error('Please Enter Amount.', 'Invalid Input!!!')
                return;
            }

            $.ajax({
                url: 'Update/update_item.php',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == 'exist') {
                        toastr.error('Employee Id No. Already Exist!!', 'Invalid Input!!!')

                        return;
                    } else if (data == 'ok') {
                        swal({
                            title: "Updated!",
                            text: "Item Saved!",
                            type: "success",
                            timer: 2000
                        });
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    }
                    else {
                        toastr.error(data, 'Invalid Input!!!')
                        return;
                    }
                }
            });
        });


        $('#Supplier').on('change', function () {

            document.getElementById("SupName").value = $("#Supplier option:selected").text();

        });

        $('#SupplierE').on('change', function () {

            document.getElementById("SupNameE").value = $("#SupplierE option:selected").text();

        });

    });

    function getItem(Id) {

        $.ajax({
            url: 'query/getItem.php',
            method: "POST",
            data: { Id: Id },
            success: function (data) {
                var splitString = data.split("!");
                document.getElementById("ItemID").value = splitString[0];
                document.getElementById("ItemNameE").value = splitString[1];
                document.getElementById("DescriptionE").value = splitString[2];
                document.getElementById("AmountE").value = splitString[5];

                $('#SupplierE').val(splitString[3]);
                $('#SupplierE').select2().trigger('change');

                $('#modalEdit').modal('show');
            }
        });

    }

    $(document).on('click', '.btndelete', function (e) {
        var id = $(this).attr('id');
        var type = "User";
        swal({
            title: "Are you sure you want to delete?",
            text: "",
            type: "error",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false
        },
            function (isConfirm) {
                if (isConfirm) {

                    $.ajax({
                        url: 'Delete/delete_item.php',
                        method: "POST",
                        data: { id: id },
                        success: function (data) {
                            //  alert(id);
                            if (data == "ok") {
                                swal({
                                    title: "Delete",
                                    text: "Item Deleted",
                                    type: "success",
                                    timer: 2000
                                });
                                setTimeout(function () {
                                    location.reload();
                                }, 2000);
                            } else {
                                alert(data);
                            }
                        }
                    });
                } else {
                    swal({
                        title: "Cancel",
                        timer: 1
                    });
                }
            });

    });



</script>