<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from paul-themes.com/html/covid-19/tracker.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 12:12:41 GMT -->
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="icon" href="assets/images/favicon.png" type="image/png" />
<title>COVID - 19</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css" />
<link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
<link rel="stylesheet" href="assets/vendors/slick/slick.css" />
<link rel="stylesheet" href="assets/vendors/slick/slick-theme.css" />
<link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />
<link rel="stylesheet" href="assets/vendors/nice-selector/css/nice-select.css" />

<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/responsive.css" />
</head>
<body>
<div class="body_wrapper">

<div class="preloader">
<div class="three-bounce">
<div class="one"></div>
<div class="two"></div>
<div class="three"></div>
</div>
</div>


<?php include 'mobile_canvas_menu.php';?>


<div class="body_capture"></div>
<?php include 'sidebar.php';?>


<?php include 'header.php';?>


<section class="coronavirus_map">
<iframe class="map" src="https://coronavirus-92ebd.web.app/map?embed=true" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen>
            </iframe>
</section>


<section class="world_wide_tracker tracker_page pad_top">
<div class="container">
<img class="tracker_map" src="assets/images/tracker-map-bg.png" alt="" />
<div class="tracker_text">
<h5>Worldwide Tracker</h5>
<h2>Confirmed Coronavirus Cases</h2>
<p>Last updated: April 08, 2020, 01:43 GMT</p>
</div>
<div class="row tracker_inner">
<div class="col-lg-3 col-6">
<div class="media">
<div class="d-flex">
<img src="assets/images/icon/corona-red-1.png" alt="" />
</div>
<div class="media-body">
<h2 id="total_cases"></h2>
<p>Total Cases</p>
</div>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="media">
<div class="d-flex">
<img src="assets/images/icon/corona-black-1.png" alt="" />
</div>
<div class="media-body">
<h2 id="total_deaths"></h2>
<p>Total Deaths</p>
</div>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="media">
<div class="d-flex">
<img src="assets/images/icon/corona-green-1.png" alt="" />
</div>
<div class="media-body">
<h2 id="total_recovered"></h2>
<p>Recovered</p>
</div>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="media">
<div class="d-flex">
<img src="assets/images/icon/corona-yellow-1.png" alt="" />
</div>
<div class="media-body">
<h2 id="new_cases"></h2>
<p>New Cases</p>
</div>
</div>
</div>
</div>
<div class="confirm_boxes row" id="coronaCountryUpdate" data-country="bangladesh">
<div class="col-lg-2">
<div class="confirm_item">
<i class="linearicons-calendar-check"></i>
<h3 class="cuCountryTodayCases"></h3>
<p>Today</p>
</div>
</div>
<div class="col-lg-2">
<div class="confirm_item">
<i class="linearicons-earth-lock"></i>
<h3 class="cuContries"></h3>
<p>Countries</p>
</div>
</div>
<div class="col-lg-2">
<div class="confirm_item">
<i class="linearicons-clipboard-user"></i>
<h3 class="cuCountryTotal"></h3>
<p>Active Cases</p>
</div>
</div>
<div class="col-lg-2">
<div class="confirm_item">
<i class="linearicons-tombstone"></i>
<h3 class="cuTotal"></h3>
<p>Worldwide Cases</p>
</div>
</div>
<div class="col-lg-2">
<div class="confirm_item">
<i class="linearicons-return2"></i>
<h3 class="cuCountryRecovered"></h3>
<p>Recovered</p>
</div>
</div>
</div>
</div>
</section>


<section class="total_cases_chart">
<div class="container">
<div class="total_cases_inner">
<iframe style="width:100%" src="https://coronavirus.app/chart/evolution/infected?embed=true" frameborder="0" allow="autoplay;" allowfullscreen=""></iframe>
</div>
<div class="total_cases_inner">
<iframe style="width:100%" src="https://coronavirus.app/chart/new/infected?embed=true" frameborder="0" allow="autoplay;" allowfullscreen=""></iframe>
</div>
</div>
</section>


<section class="data_table_area">
<div class="container">
<div class="main_title text-center">
<h5>Tracking by countries</h5>
<h2>Coronavirus in numbers</h2>
</div>
<div class="all-country table-responsive">
<table id="world_table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="world_table_info">
<thead>
<tr role="row">
<th>Serial</th>
<th>Flag</th>
<th>Country</th>
<th>Cases</th>
<th>New Cases</th>
<th>Deaths</th>
<th>New Deaths</th>
<th>Recovered
</th>
<th>Active</th>
<th>Critical</th>
</tr>
</thead>
</table>
</div>
</div>
</section>


<section class="app_area">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="app_text">
<h2>Get <span>epidemic</span> app!</h2>
<p>
Download our app now, track Coronavirus cases real-time and
follow instant updates.
</p>
<a href="#"><img src="assets/images/apple-btn.png" alt="" /></a>
<a href="#"><img src="assets/images/google-btn.png" alt="" /></a>
</div>
</div>
<div class="col-lg-6">
<div class="app_mobile">
<div class="mobile_image">
<img src="assets/images/mobile-1.png" alt="" />
<img src="assets/images/mobile-2.png" alt="" />
</div>
<ul class="corona_img nav">
<li>
<img src="assets/images/icon/app-virus-1.png" alt="" />
</li>
<li>
<img src="assets/images/icon/app-virus-2.png" alt="" />
</li>
<li>
<img src="assets/images/icon/app-virus-3.png" alt="" />
</li>
<li>
<img src="assets/images/icon/app-virus-4.png" alt="" />
</li>
<li data-parallax='{"y": 100}'>
<img src="assets/images/icon/app-virus-5.png" alt="" />
</li>
<li>
<img src="assets/images/icon/app-virus-6.png" alt="" />
</li>
<li>
<img src="assets/images/icon/app-virus-7.png" alt="" />
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<section class="subscribe_area">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="media">
<div class="d-flex">
<i class="linearicons-mailbox-full"></i>
</div>
<div class="media-body">
<h4>Subscribe our newsletter</h4>
<p>
Join our subscribers list to get latest news and updates
about COVID-19 delivered directly in your inbox.
</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="mail_box">
<div class="input-group">
<input type="text" class="form-control" placeholder="&#xe997; Enter your email" aria-label="Recipient's username" aria-describedby="button-addon2" />
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button" id="button-addon2">
<i class="linearicons-arrow-right"></i>
</button>
</div>
</div>
<label class="container-checkbox">I accept the <span>Privacy Policy.</span>
<input type="checkbox" />
<span class="checkmark"></span>
</label>
</div>
</div>
</div>
</div>
</section>


<?php include 'footer.php';?>

</div>
<div class="modal fade search_modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<img src="assets/images/icon/close-white.png" alt="">
</button>
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<div class="input-group">
<input type="text" class="form-control" placeholder="Type here..." aria-label="Recipient's username">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button"><i class="linearicons-magnifier"></i></button>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/vendors/corona-live/dashboard.js"></script>
<script src="assets/vendors/corona-live/main.js"></script>
<script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
<script src="assets/vendors/corona-live/jquery.dataTables.min.js"></script>
<script src="assets/vendors/corona-live/datatable.js"></script>
<script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/vendors/nice-selector/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>

<!-- Mirrored from paul-themes.com/html/covid-19/tracker.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 12:12:42 GMT -->
</html>