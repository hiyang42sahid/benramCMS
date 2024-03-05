<?php
include('header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
  <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
    <div class="nav-item dropdown">
      <a class="nav-link bg-danger dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">Close</a>
      <div class="dropdown-menu mt-0">
        <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Close All</a>
        <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Close All Other</a>
      </div>
    </div>

    <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
    <ul class="navbar-nav overflow-hidden" role="tablist">

    </ul>
    <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
    <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
  </div>
  <div class="tab-content">
    <div class="tab-empty">
      <h2 class="display-4">No tab selected!</h2>
    </div>
    <div class="tab-loading">
      <div>
        <h2 class="display-4">Tab is loading <i class="fa fa-sync fa-spin"></i></h2>
      </div>
    </div>
  </div>
</div>
<?php
include('footer.php');
?>
<script>
  $(document).ready(function () {
    //document.getElementById("dashboard").click();

    function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
    $(document).on("keydown", disableF5);

    // simply visual, let's you know when the correct iframe is selected
    $(window).on("focus", function (e) {
      $("html, body").css({ background: "#FFF", color: "#000" })
        .find("h2").html("");
    })
      .on("blur", function (e) {
        $("html, body").css({ background: "", color: "" })
          .find("h2").html("");
      });


    // document.getElementById("dashboard").click();
  });
</script>