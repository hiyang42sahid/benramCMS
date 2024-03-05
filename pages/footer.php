<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo WEB_URL; ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo WEB_URL; ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="<?php echo WEB_URL; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo WEB_URL; ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo WEB_URL; ?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes 
<script src="../dist/js/demo.js"></script>-->
<!-- Toastr -->
<script src="<?php echo WEB_URL; ?>plugins/toastr/toastr.min.js"></script>
<!-- Sweet alert -->
<script src="<?php echo WEB_URL; ?>plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo WEB_URL ?>dist/js/pre_loader.js"></script>
<!-- DataTables -->

<script src="<?php echo WEB_URL; ?>plugins/datatable/js/jquery.dataTables.min.js"></script>
<!-- Select2 -->
<script src="<?php echo WEB_URL; ?>plugins/select2/js/select2.full.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)

  $('.select2').select2();


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


  function txt_onfocus(txt) {
    txt.style.backgroundColor = "#e8f0fe";
  }

  function txt_onfocusout(txt) {
    txt.style.backgroundColor = "white";
  }
  // function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
  // $(document).on("keydown", disableF5);

  // // simply visual, let's you know when the correct iframe is selected
  // $(window).on("focus", function (e) {
  //   $("html, body").css({ background: "#FFF", color: "#000" })
  //     .find("h2").html("");
  // })
  //   .on("blur", function (e) {
  //     $("html, body").css({ background: "", color: "" })
  //       .find("h2").html("");
  //   });

  $('#tbl').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
  });

</script>
</body>

</html>