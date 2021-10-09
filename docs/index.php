<?php
session_start();

if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en" class="height-full">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Situs web REST API yang menyediakan berbagai macam Api untuk mengembangkan aplikasimu.">
<meta name="robots" content="archive, follow, imageindex, index, odp, snippet, translate">
<meta name="author" content="Loli Killers">
<title> TOBI - REST APIs</title>
<meta property="og:site_name" name="og:site_name" content="TOBI APIs">
<meta property="og:title" name="og:title" content="TOBI - REST APIs">
<meta property="og:url" name="og:url" content="https://ekagans02.herokuapp.com/">
<meta property="og:image" name="og:image" content="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<meta property="og:description" name="og:description" content="Situs web REST API yang menyediakan berbagai macam fitur untuk mengembangkan aplikasimu.">
<link rel="apple-touch-icon" sizes="57x57" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/png" sizes="192x192" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://telegra.ph/file/c793578cfabf67d292dd0.png">
<meta name="theme-color" content="#ffffff">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="../css/nucleo-icons.css" rel="stylesheet" />
<link href="../css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
<link href="../demo/demo.css" rel="stylesheet" />
</head>

<body id="page-top" onload="getvisitor();">
<div class="wrapper">
<div class="sidebar">
<div class="sidebar-wrapper">
<div class="logo">
<a href="javascript:void(0)" class="simple-text logo-mini">
TOBI
</a>
<a href="javascript:void(0)" class="simple-text logo-normal">
Rest Api's
</a>
</div>
<ul class="nav">
<li class="active ">
<a href="/docs">
<i class="tim-icons icon-chart-pie-36"></i>
<p>Dashboard</p>
</a>
</li>
<li>
<a href="/docs/downloader">
<i class="tim-icons icon-cloud-download-93"></i>
<p>Downloader Api</p>
</a>
</li>
<li>
<a href="/docs/photooxy">
<i class="tim-icons icon-camera-18"></i>
<p>Photo Oxy</p>
</a>
</li>
<li>
<li>
<a href="/docs/media">
<i class="tim-icons icon-tablet-2"></i>
<p>Media Api</p>
</a>
</li>
 <li>
<a href="/docs/anime">
<i class="tim-icons icon-spaceship"></i>
<p>Anime Api</p>
</a>
</li>
<li>
<a href="/docs/game">
<i class="tim-icons icon-controller"></i>
<p>Game Api</p>
</a>
</li>
</li>
<li>
<a href="/docs/info">
<i class="tim-icons icon-world"></i>
<p>Info Api</p>
</a>
</li>
<li>
<a href="/docs/other">
<i class="tim-icons icon-planet"></i>
<p>Other Api</p>
</a>
</li>
<li>
<a href="/docs/islami">
<i class="tim-icons icon-istanbul"></i>
<p>Islami Api</p>
</a>
</li>
<li>
<a href="/docs/fun">
<i class="tim-icons icon-satisfied"></i>
<p>Fun Api</p>
</a>
</li>
</ul>
<a href="javascript:void(0)"></a>
<div class="logo">
<a href="javascript:void(0)" class="simple-text logo-mini">
</a>
</div>
<ul class="nav">
<li>
<a href="https://github.com/ekadanuarta">
<i class="tim-icons icon-pencil"></i>
<p>ekadanuarta</p>
</a>
</li>
</ul>
</div>
</div>
<div class="main-panel">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
<div class="container-fluid">
<div class="navbar-wrapper">
<div class="navbar-toggle d-inline">
<button type="button" class="navbar-toggler">
<span class="navbar-toggler-bar bar1"></span>
<span class="navbar-toggler-bar bar2"></span>
<span class="navbar-toggler-bar bar3"></span>
</button>
</div>
<a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-bar navbar-kebab"></span>
<span class="navbar-toggler-bar navbar-kebab"></span>
<span class="navbar-toggler-bar navbar-kebab"></span>
</button>
<div class="collapse navbar-collapse" id="navigation">
<ul class="navbar-nav ml-auto">
<li class="search-bar input-group">
<button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
<span class="d-lg-none d-md-block">Search</span>
</button>
</li>
<li class="dropdown nav-item">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<div class="photo">
<img src="https://telegra.ph/file/77bab9724c416edc8bf61.jpg" alt="Profile Photo">
</div>
<b class="caret d-none d-lg-block d-xl-block"></b>
<p class="d-lg-none">
Profile
</p>
</a>
<ul class="dropdown-menu dropdown-navbar">
<li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
<li class="nav-link"><a href="/login.html" class="nav-item dropdown-item">Login</a></li>
<li class="dropdown-divider"></li>
<li class="nav-link"><a href="/register.html" class="nav-item dropdown-item">Register</a></li>
</ul>
</li>
<li class="separator d-lg-none"></li>
</ul>
</div>
</div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i class="tim-icons icon-simple-remove"></i>
</button>
</div>
</div>
</div>
</div>
<!-- End Navbar -->
	
<div class="content">
<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
<div class="card overflow-hidden dash1-card border-0">
<div class="card-body">
<div class="d-flex align-items-end justify-content-between">
<div>
<p class=" mb-1 ">Time</p>
<h2 class="mb-1 number-font">
<div id="browser_info"></div>
</h2>
<small class="fs-12 text-warning">
<div id="browser_sholat"></div>
</small>
<small class="fs-12 text-success">Sudah berbuat hal baik apa hari ini?</small>
</div>
<span class="text-info fs-35 dash1-iocns bg-success-transparent border-success"><i class="tim-icons icon-time-alarm" aria-hidden="true"></i></span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-12 col-xm-12">
<div class="card overflow-hidden dash1-card border-0">
<div class="card-body">
<div class="d-flex align-items-end justify-content-between">
<div>
<p class=" mb-1 ">Visitor</p>
<h2 class="mb-1 number-font">
<div class="visitor" id="visitor">00</div>
</h2>
<small class="fs-12 text-success">Total visitor from ekagans02.herokuapp.com</small>
</div>
<span class="text-info fs-35 dash1-iocns bg-info-transparent border-info"><i class="fa fa-eye" aria-hidden="true"></i></span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-12 col-xm-12">
<div class="card overflow-hidden dash1-card border-0">
<div class="card-body">
<div class="d-flex align-items-end justify-content-between">
<div>
<p class=" mb-1 ">IP</p>
<h2 class="mb-1 number-font">
<div id="ip"></div>
</h2>
<small class="fs-12 text-muted">Your IP Address</small>
</div>
<span class="text-info fs-35 dash1-iocns bg-info-transparent border-info"><i class="fa fa-wifi" aria-hidden="true"></i></span>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12">
<div class="card">
<div class="card-header">
<h3 class="card-title"><i class="tim-icons icon-key-25" aria-hidden="true"></i> Apikey Check</h3>
</div>
<div class="card-body text-sm-left font-weight-bold">
<p class="status" style="color: white; font-size: 20px;"></p>
<h2 class="warn" style="color: red"></h2>
<label for="URL">Enter Your ApiKey:</label>
<input type="text" class="form-control" id="responapikeymucoooookkk" placeholder="apikey" name="apiKey" required="">
<small id="textHelp" class="font">Gapunya Apikey om? Contact me on
<a href="https://wa.me/380944292908">
Whatsapp
</a>
</small>
</br></br>
<button type="submit" id="diklikcok" class="btn btn-success" onclick="sendata()">Submit</button>
</div>
</div>
</div>
</div>
	
<div class="col-lg-4">
<div class="card card-chart">
<div class="card-header">
<h3 style="margin-bottom: 0">
<i class="far fa-browser text-info"></i> Browser Info
</h3>
<div class="card-body mb-2">
<p></p>
<script data-cfasync="false" src="../js/email-decode.min.js"></script><script>
arrBulan = [
"Januari",
"Februari",
"Maret",
"April",
"Mei",
"Juni",
"Juli",
"Agustus",
"September",
"Oktober",
"November",
"Desember",
];
var txt = "";
txt +=
"<p><b>Browser CodeName</b>: " +
navigator.appCodeName +
"</p>";
txt +=
"<p><b>Browser Name</b>: " + navigator.appName + "</p>";
txt +=
"<p><b>Langueage </b>: " + window.navigator.language +"</p>";
txt +=
"<p><b>Web Driver</b>: " + navigator.webdriver + "</p>";
txt +=
"<p><b>Cookies Enabled</b>: " + navigator.cookieEnabled + "</p>";
txt +=
"<p><b>Browser Online</b>: " + navigator.onLine + "</p>";
txt +=
"<p><b>Platform</b>: " + navigator.platform + "</p>";
txt +=
"<p><b>User-agent header</b>: " + navigator.userAgent + "</p>";
document.write(txt);
</script>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="card card-chart">
<div class="card-header">
<h3 style="margin-bottom: 0">
<i class="far fa-browser text-info"></i> Device Info
</h3>
<div class="card-body mb-2">
<p></p>
<script data-cfasync="false" src="../js/email-decode.min.js"></script><script>
var txt = "";
txt +=
"<p><b>Memory</b>: " + navigator.deviceMemory + "</p>";
txt +=
"<p><b>Product </b>: " + navigator.product + "</p>";
txt +=
"<p><b>Product Sub</b>: " + navigator.productSub +"</p>";
txt +=
"<p><b>Vendor</b>: " + navigator.vendor + "</p>";
txt +=
"<p><b>Version</b>: " + navigator.appVersion + "</p>";
document.write(txt);
</script>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card ">
<div class="col-xl-3 col-lg-6 col-md-12 col-xm-12">
<div class="card-header">
<h4 class="card-title"> Thanks To</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table tablesorter " id="">
<thead class=" text-primary">
<tr>
<th>
</>
</th>
</thead>
<tbody>
<tr>
<p> Allah SWT</p>
<p> My Perents</p>
<p> Loli Killers [ Ari ]</p>
<p> Rynz [ Riyan ]</p>
<p> Creative Time [ For Template ]</p>
<p> ALL HUMAN</p>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer">
<div class="container-fluid">
<ul class="nav">
<li class="nav-item">
<a href="javascript:void(0)" class="nav-link">
E K A  D A N U
</a>
</li>
</ul>
<div class="copyright">
©
<script>
document.write(new Date().getFullYear())
</script> made with <i class="tim-icons icon-heart-2"></i> by
<a href="javascript:void(0)" target="_blank">ekadanuarta</a> for a better web.
</div>
</div>
</footer>
</div>
</div>
<div class="fixed-plugin">
<div class="dropdown show-dropdown">
<a href="#" data-toggle="dropdown">
<i class="fa fa-cog fa-2x"> </i>
</a>
<ul class="dropdown-menu">
<li class="header-title"> Sidebar Background</li>
<li class="adjustments-line">
<a href="javascript:void(0)" class="switch-trigger background-color">
<div class="badge-colors text-center">
<span class="badge filter badge-info" data-color="blue"></span>
<span class="badge filter badge-primary active" data-color="primary"></span>
<span class="badge filter badge-success" data-color="green"></span>
</div>
<div class="clearfix"></div>
</a>
</li>
<li class="adjustments-line text-center color-change">
<span class="color-label">LIGHT MODE</span>
<span class="badge light-badge mr-2"></span>
<span class="badge dark-badge ml-2"></span>
<span class="color-label">DARK MODE</span>
</li>
<li class="button-container">
<a class="text-center">Contact Me</a>
<a href="https://wa.me/380944292908?text=Hallo%20bang" target="_blink" class="btn btn-success btn-block btn-round">Whatsapp</a>
<a href="https://t.me/ekagans" target="_blink" class="btn btn-info btn-block btn-round">Telegram</a>
<a href="https://instagram.com/ekagans_02" target="_blink" class="btn btn-primary btn-block btn-round">Instagram</a>
</li>
</ul>
</div>
</div>
<script>
f=
_=>navigator.getBattery().then(b=>alert('Dibilangin batray kamu tinggal ' +b.level*100+'%, batu amat ini orang :('))
f()
</script>
<!-- Core JS Files -->
<script src="../js/core/jquery.min.js"></script>
<script src="../js/core/popper.min.js"></script>
<script src="../js/core/bootstrap.min.js"></script>
<script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="../js/plugins/apikey.js"></script>
<script src="../js/plugins/jamsalam.js"></script>
 <!-- Place this tag in your head or just before your close body tag. -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../js/plugins/chartjs.min.js"></script>
<!--Notifications Plugin-->
<script src="../js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="../demo/demo.js"></script>
<script src="../js/ipanda.js"></script>
<script>
$(document).ready(function() {
$().ready(function() {
$sidebar = $('.sidebar');
$navbar = $('.navbar');
$main_panel = $('.main-panel');

$full_page = $('.full-page');

$sidebar_responsive = $('body > .navbar-collapse');
sidebar_mini_active = true;
white_color = false;

window_width = $(window).width();

fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



$('.fixed-plugin a').click(function(event) {
if ($(this).hasClass('switch-trigger')) {
if (event.stopPropagation) {
event.stopPropagation();
} else if (window.event) {
window.event.cancelBubble = true;
}
}
});

$('.fixed-plugin .background-color span').click(function() {
$(this).siblings().removeClass('active');
$(this).addClass('active');

var new_color = $(this).data('color');

if ($sidebar.length != 0) {
$sidebar.attr('data', new_color);
}

if ($main_panel.length != 0) {
$main_panel.attr('data', new_color);
}

if ($full_page.length != 0) {
$full_page.attr('filter-color', new_color);
}

if ($sidebar_responsive.length != 0) {
$sidebar_responsive.attr('data', new_color);
}
});

$('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
var $btn = $(this);

if (sidebar_mini_active == true) {
$('body').removeClass('sidebar-mini');
sidebar_mini_active = false;
blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
} else {
$('body').addClass('sidebar-mini');
sidebar_mini_active = true;
blackDashboard.showSidebarMessage('Sidebar mini activated...');
}

var simulateWindowResize = setInterval(function() {
window.dispatchEvent(new Event('resize'));
}, 180);

setTimeout(function() {
clearInterval(simulateWindowResize);
}, 1000);
});

$('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
var $btn = $(this);

if (white_color == true) {

$('body').addClass('change-background');
setTimeout(function() {
$('body').removeClass('change-background');
$('body').removeClass('white-content');
}, 900);
white_color = false;
} else {

$('body').addClass('change-background');
setTimeout(function() {
$('body').removeClass('change-background');
$('body').addClass('white-content');
}, 900);

white_color = true;
}


});

$('.light-badge').click(function() {
$('body').addClass('white-content');
});

$('.dark-badge').click(function() {
$('body').removeClass('white-content');
});
});
});
</script>
<script>
  function getvisitor(){
              var xhr = new XMLHttpRequest();
              var url = 'https://api.countapi.xyz/hit/apriliya.herokuapp.com./visits';
              xhr.onloadend = function(){
             data = JSON.parse(this.responseText);
  document.getElementById("visitor").textContent = data.value
              };
              xhr.open("GET", url, true);
              xhr.send();
  }
 
 </script>
 <script>
    $.getJSON("https://api.ipify.org?format=json",
      function(data) {
        $("#ip").html(data.ip);
      })
  </script>
<script>
$(document).ready(function() {
demo.initDashboardPageCharts();

});
</script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
window.TrackJS &&
TrackJS.install({
token: "ee6fab19c5a04ac1a32a645abde4613a",
application: "black-dashboard-free"
});
</script>
</body>
  
</script>
</html>
