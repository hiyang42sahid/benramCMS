<?php include('header1.php'); ?>

<div class="content-wrapper" style="min-height: 543px;background-color:white;">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger" id="DateTime">

              <div class="inner ">
                <span style="text-align:right;font-size:x-large;font-weight:bolder;" id="date"></span>
                <h3 id="time"> </h3>
              </div>
              <div class="icon ">
                <i class="ionicons ion-ios-alarm"></i>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</div>


<?php include('footer.php'); ?>
<script>

  $(document).ready(function () {
    date('date');
    time('time');
    //  load_data("");
    var tblHeight = $("#smllPanel").outerHeight();
    var styl = "height:" + parseInt(tblHeight - 20) + "px;";
    $('#DateTime').attr('style', styl);



    // showGraph();

  });


  function date(id) {
    date = new Date;
    year = date.getFullYear();
    month = date.getMonth();
    months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    d = date.getDate();
    day = date.getDay();
    days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    h = date.getHours();

    if (h < 10) {
      h = "0" + h;
    }
    m = date.getMinutes();
    if (m < 10) {
      m = "0" + m;
    }
    s = date.getSeconds();
    if (s < 10) {
      s = "0" + s;
    }
    result = '' + days[day] + ', ' + months[month] + ' ' + d + ', ' + year;
    document.getElementById(id).innerHTML = result;

    //setTimeout('date_time("'+id+'");','1000');
    return true;
  }

  function time(id) {


    date = new Date;
    h = date.getHours();
    h1 = date.getHours();
    // h=h-12;

    if (h < 10) {
      h = "0" + h;
    }
    if (h == 0) {
      h = "01";
    }

    m = date.getMinutes();
    if (m < 10) {
      m = "0" + m;
    }
    s = date.getSeconds();
    if (s < 10) {
      s = "0" + s;
    }
    var ampm = (h1 >= 12) ? "PM" : "AM";

    result = h + ':' + m + ':' + s + ' ' + ampm;



    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    var strTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;

    document.getElementById(id).innerHTML = strTime;

    setTimeout('time("' + id + '");', '1000');
    return true;
  }





</script>