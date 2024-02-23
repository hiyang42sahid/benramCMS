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
<script>
  $.widget.bridge('uibutton', $.ui.button)

  function txt_onfocus(txt) {  
        txt.style.backgroundColor = "#e8f0fe"; 
    }

    function txt_onfocusout(txt) {   
        txt.style.backgroundColor = "white"; 
    }
</script>
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
</body>
</html>