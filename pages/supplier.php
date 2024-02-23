<?php include('header.php'); ?>

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
                                    <table class="table table-hover table-striped">
                                        <colgroup>
                                            <col width="5%">
                                            <col width="10%">
                                            <col width="20%">
                                            <col width="20%">
                                            <col width="20%">
                                            <col width="10%">
                                            <col width="15%">
                                        </colgroup>
                                        <thead>
                                            <tr class="bg-primary disabled">
                                                <th>#</th>
                                                <th>Date Created</th>
                                                <th>Supplier</th>
                                                <th>Contact Person</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

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
                                    <label for="Contact" class="col-sm-2 control-label">Contact Number</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" onfocus="txt_onfocus(this);"
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
</div>


<?php include('footer.php'); ?>
<script>

    $(document).ready(function () { 
        //insert
        $('#insert_form').on('submit', function (e) {
            e.preventDefault();

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
                            text: "Supplier Saved!!",
                            type: "success",
                            timer: 2000
                        }); 

                        setTimeout(function() {
    location.reload();
}, 2000);
                    }
                    // else{
                    // alert(data)
                    // }  
                }
            });
        });
        //edit
        $('#edit_form').on('submit', function (e) {
            e.preventDefault();

            var Firstname = $("#FirstnameE").val();
            var Lastname = $("#LastnameE").val();
            var UserType = $("#UserTypeE").val();
            var Status = $("#StatusE").val();
            var PCA = $("#PCAE").val();

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "progressBar": true,
                "preventDuplicates": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "400",
                "hideDuration": "1000",
                "timeOut": "7000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            if (Firstname == "") {
                toastr.error('Please Enter Firstname', 'Invalid Input!!!')
                return;
            }
            if (Lastname == "") {
                toastr.error('Please Enter Lastname', 'Invalid Input!!!')
                return;
            }
            if (UserType == "") {
                toastr.error('Please Select User Type', 'Invalid Input!!!')
                return;
            }

            if (PCA == "") {
                toastr.error('Please Select Petty Cash Account', 'Invalid Input!!!')
                return;
            }
            if (Status == "") {
                toastr.error('Please Select Status', 'Invalid Input!!!')
                return;
            }



            $.ajax({
                url: 'Update/update_user.php',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == 'exist') {
                        toastr.error('Employee Id No. Already Exist!!', 'Invalid Input!!!')

                        return;
                    } else if (data == 'PCA') {
                        toastr.error('Petty Cash Account Already In use', 'Invalid Input!!!')
                        return;
                    } else if (data == 'ok') {
                        swal({
                            title: "Saved!",
                            text: "User Account Saved!!",
                            type: "success",
                            timer: 2000
                        });
                        location.reload();
                    }
                    // else{
                    // alert(data);
                    // }  
                }
            });
        });

        $('#UserType').on('change', function () {
            if (this.value == '3') {
                $("#Login").hide();
            }
            else {
                $("#Login").show();
            }
        });

    });

    $.fn.capitalize = function () {
        $.each(this, function () {
            this.value = this.value.replace(/\b[a-z]/gi, function ($0) {
                return $0.toUpperCase();
            });
            this.value = this.value.replace(/@([a-z])([^.]*\.[a-z])/gi, function ($0, $1) {
                console.info(arguments);
                return '@' + $0.toUpperCase() + $1.toLowerCase();
            });
            /*
        var href = event.value != '/' ? event.value : '/wall/',
            title = href.slice(1, -1).replace("/", " "),
            myTitle = title.replace(/\b[a-z]/g, function ($0) {
                return $0.toUpperCase();
            });
        */
        });
    }

    //usage
    $(".ProperCase").keyup(function () {
        $(this).capitalize();
    }).capitalize();

    function readURL(input) {
        //alert(input.alt);
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#' + input.alt)
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
        else {
            var img = input.value;
            $('#' + input.alt).attr('src', img);

        }
        $("#x").show().css("margin-right", "10px");
    }

    function CheckIsNumeric(objEvt) {
        var charCode = (objEvt.which) ? objEvt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        else {
            return true;
        }
    }

    function CheckIsCharacter(objEvt) {
        var charCode = (objEvt.which) ? objEvt.which : event.keyCode
        if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 32) {
            return true;
        }
        else {
            return false;
        }
    }

    function GetUser(Id) {

        $.ajax({
            url: 'query/getUserDetail.php',
            method: "POST",
            data: { Id: Id },
            success: function (data) {
                var splitString = data.split("-");

                document.getElementById("UserIdE").value = splitString[0];
                document.getElementById("FirstnameE").value = splitString[1];
                document.getElementById("LastnameE").value = splitString[2];

                $('#UserTypeE').val(splitString[4]);
                $('#UserTypeE').select2().trigger('change');

                $('#PCAE').val(splitString[5]);
                $('#PCAE').select2().trigger('change');

                // alert(splitString[6]);
                $('#StatusE').val(splitString[6]);
                $('#StatusE').select2().trigger('change');


                // document.getElementById("ImageUrl").src = splitString[3];
                // alert(splitString[3]); 
                $("#ImageUrl1").attr('src', splitString[3]);
                // document.getElementById("myfileE").value = splitString[3]; 
                $('#modalEdit').modal('show');
            }
        });

    }

    $(document).on('click', '.btndelete', function (e) {
        var id = $(this).attr('id');
        var type = "User";
        swal({
            title: "Are you sure you want to Inactive this account?",
            text: "ARE YOU SURE YOU WANT TO CONTINUE?",
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
                        url: 'Delete/delete_nonvat.php',
                        method: "POST",
                        data: { id: id, Type: type },
                        success: function (data) {

                            if (data == "ok") {
                                stat = true;
                                swal({
                                    title: "Inactive Account!",
                                    text: "User Account Successfully Inactive!",
                                    type: "success",
                                    timer: 1000
                                });
                                setTimeout(function () { window.location.href = "<?php echo WEB_URL; ?>page/user.php"; }, 1000);


                            }
                        }
                    });
                } else {
                    swal({
                        title: "Saved!",
                        timer: 1
                    });
                }
            });

    });



</script>