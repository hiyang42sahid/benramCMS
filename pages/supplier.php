<?php

include('header1.php');
$query = "SELECT * FROM supplier Order by SupID DESC LIMIT 1";
$result = mysqli_query($dbc, $query);
$row = mysqli_fetch_array($result);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    $SuppID = $row["SupID"];
} else {
    $SuppID = 0;
}


$SuppCode = $SuppID + 1;
$SuppCode = sprintf("%05d", $SuppCode);

?>

<div class="content-wrapper" style="min-height: 543px;background-color:white;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Supplier List </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Supplier List</li>
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
                            <h3 class="card-title">List of Suppliers</h3>
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
                                                <th>Supplier Code</th>
                                                <th>Supplier Name</th>
                                                <th>Address</th>
                                                <th>Contact Person</th>
                                                <th>Contact No.</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $result = mysqli_query($dbc, "Select * from supplier");
                                            while ($row = mysqli_fetch_array($result)) {
                                                if ($row['SupCode'] == '2') {
                                                    continue;
                                                }
                                                ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo $i++; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['SupCode']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['SupplierName']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['Address']; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row['ContactPerson']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['Contact']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['Email']; ?>
                                                    </td>

                                                    <td style="text-align:center;">
                                                        <?php
                                                        if ($row['Status'] == 1)
                                                            echo '<span class="right badge badge-success">Active</span>';
                                                        else if ($row['Status'] == 0)
                                                            echo '<span class="right badge badge-danger">Inactive</span>';
                                                        ?>
                                                    </td>
                                                    <td style="text-align:center;">

                                                        <a class="btn btn-primary btn-xs" href="#" title="Edit"
                                                            onclick="getSupplier(<?php echo $row['SupID']; ?>);"> <i
                                                                class="fa fa-pencil"></i> </a>

                                                        <button class="btn btn-xs btn-danger btndelete"
                                                            id="<?php echo $row['SupID']; ?>"> <i
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
                    <h4 class="modal-title">Supplier Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>

                </div>
                <form class="form-horizontal" enctype="multipart/form-data" id="insert_form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="SupplierName" class="col-md-2 control-label">Supplier Code</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" name="SupplierCode" id="SupplierCode"
                                            value="<?php echo $SuppCode; ?>" readonly placeholder="Supplier Name">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="SupplierName" class="col-md-2 control-label">Supplier Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" name="SupplierName" id="SupplierName"
                                            placeholder="Supplier Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" id="Address" name="Address"
                                            placeholder="Address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ContactPerson" class="col-sm-2 control-label">Contact Person</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" id="ContactPerson" name="ContactPerson"
                                            placeholder="Contact Person">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Contact" class="col-sm-5 control-label">Contact Number</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onkeypress="return CheckIsNumeric(event);"
                                            onfocusout="txt_onfocusout(this);" id="Contact" name="Contact"
                                            placeholder="Contact Number">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" id="Email" name="Email"
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Status" class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-12">
                                        <select style="width:100%" name="Status" id="Status"
                                            class="form-control select2">
                                            <option value=""></option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
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
                    <h4 class="modal-title">Supplier Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>

                </div>
                <form class="form-horizontal" enctype="multipart/form-data" id="edit_form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="SupplierName" class="col-md-2 control-label">Supplier Code</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" name="SupplierCodeE" id="SupplierCodeE"
                                            value="<?php echo $SuppCode; ?>" readonly placeholder="Supplier Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="SupplierName" class="col-md-2 control-label">Supplier Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" name="SupplierNameE" id="SupplierNameE"
                                            placeholder="Supplier Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" id="AddressE" name="AddressE"
                                            placeholder="Address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ContactPerson" class="col-sm-2 control-label">Contact Person</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" id="ContactPersonE" name="ContactPersonE"
                                            placeholder="Contact Person">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Contact" class="col-sm-5 control-label">Contact Number</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
                                            onkeypress="return CheckIsNumeric(event);"
                                            onfocusout="txt_onfocusout(this);" id="ContactE" name="ContactE"
                                            placeholder="Contact Number">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" onfocus="txt_onfocus(this);"
                                            onfocusout="txt_onfocusout(this);" id="EmailE" name="EmailE"
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Status" class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-12">
                                        <select style="width:100%" name="StatusE" id="StatusE"
                                            class="form-control select2">
                                            <option value=""></option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <input type="hidden" class="form-control" id="SupIDE" name="SupIDE" placeholder="Password">
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

            var SupplierCode = $("#SupplierCode").val();
            var SupplierName = $("#SupplierName").val();
            var Address = $("#Address").val();
            var ContactPerson = $("#ContactPerson").val();
            var Contact = $("#Contact").val();
            var Email = $("#Email").val();
            var Status = $("#Status").val();

            if (SupplierName == "") {
                toastr.error('Please Enter Supplier Name.', 'Invalid Input!!!')
                return;
            }

            if (Address == "") {
                toastr.error('Please Enter Address.', 'Invalid Input!!!')
                return;
            }

            if (ContactPerson == "") {
                toastr.error('Please Enter Contact Person.', 'Invalid Input!!!')
                return;
            }

            if (Contact == "") {
                toastr.error('Please Enter Contact Number.', 'Invalid Input!!!')
                return;
            }

            if (Email == "") {
                toastr.error('Please Enter Email.', 'Invalid Input!!!')
                return;
            }

            if (Status == "") {
                toastr.error('Please Select Status.', 'Invalid Input!!!')
                return;
            }

            // start_loader();
            $.ajax({
                url: 'Insert/insert_supplier.php',
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
                            text: "Supplier Saved!",
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

            var SupplierName = $("#SupplierNameE").val();
            var Address = $("#AddressE").val();
            var ContactPerson = $("#ContactPersonE").val();
            var Contact = $("#ContactE").val();
            var Email = $("#EmailE").val();
            var Status = $("#StatusE").val();

            if (SupplierName == "") {
                toastr.error('Please Enter Supplier Name.', 'Invalid Input!!!')
                return;
            }

            if (Address == "") {
                toastr.error('Please Enter Address.', 'Invalid Input!!!')
                return;
            }

            if (ContactPerson == "") {
                toastr.error('Please Enter Contact Person.', 'Invalid Input!!!')
                return;
            }

            if (Contact == "") {
                toastr.error('Please Enter Contact Number.', 'Invalid Input!!!')
                return;
            }

            if (Email == "") {
                toastr.error('Please Enter Email.', 'Invalid Input!!!')
                return;
            }

            if (Status == "") {
                toastr.error('Please Select Status.', 'Invalid Input!!!')
                return;
            }

            $.ajax({
                url: 'Update/update_supplier.php',
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
                            text: "Supplier Saved!",
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


    });

    function getSupplier(Id) {

        $.ajax({
            url: 'query/getSupplier.php',
            method: "POST",
            data: { Id: Id },
            success: function (data) {
                var splitString = data.split("!");

                document.getElementById("SupIDE").value = splitString[0];
                document.getElementById("SupplierCodeE").value = splitString[1];
                document.getElementById("SupplierNameE").value = splitString[2];
                document.getElementById("AddressE").value = splitString[3];
                document.getElementById("ContactPersonE").value = splitString[4];
                document.getElementById("ContactE").value = splitString[5];
                document.getElementById("EmailE").value = splitString[6];
                document.getElementById("StatusE").value = splitString[7];

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
                        url: 'Delete/delete_supplier.php',
                        method: "POST",
                        data: { id: id },
                        success: function (data) {
                            //  alert(id);
                            if (data == "ok") {
                                swal({
                                    title: "Delete",
                                    text: "Supplier Deleted",
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