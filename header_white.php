<style type="text/css">
	.navbar_fixed .main_menu .container .navbar .navbar-brand span{

		color: #58547e !important;
	}

	.header_area.navbar_fixed.white_header .main_menu .navbar .navbar-brand img{

		display: block;
	}
</style>
<header class="header_area white_header">
<!-- <ul class="nav menu_social flex-column">
<li>
<a href="#"><i class="fab fa-facebook"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-twitter"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-instagram"></i></a>
</li>
</ul> -->
<div class="main_menu">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<?php if(@$_GET['lang']=='en'){?>
<a class="navbar-brand" href="index.php?lang=en"><span style="font-size: 28px;font-weight:bold;color: white"><img id="covidshebalogos" src="assets/images/covidshebalogo.png" style="width: 220px;height: 50px"></span><!-- <img src="assets/images/logo.png" srcset="assets/images/logo-2x.png 2x" alt="" /> --></a>
<?php }elseif(@$_GET['lang']=='bn'){?>
	<a class="navbar-brand" href="index.php?lang=bn"><span class="notranslate" style="font-size: 28px;font-weight:bold;color: white"><img id="covidshebalogos" src="assets/images/covidshebalogo.png" style="width: 220px;height: 50px"></span><!-- <img src="assets/images/logo.png" srcset="assets/images/logo-2x.png 2x" alt="" /> --></a>
<?php }else{?>
	<a class="navbar-brand" href="index.php?lang=bn"><span class="notranslate" style="font-size: 28px;font-weight:bold;color: white"><img id="covidshebalogos" src="assets/images/covidshebalogo.png" style="width: 220px;height: 50px"></span><!-- <img src="assets/images/logo.png" srcset="assets/images/logo-2x.png 2x" alt="" /> --></a>
<?php }?>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="nav navbar-nav ml-auto">
<li class="active">
	<?php if(@$_GET['lang']=='en'){?>
	<a href="index.php?lang=en">Home</a>
<?php }elseif(@$_GET['lang']=='bn'){?>
	<a href="index.php?lang=bn"><?php echo BanglaConverter::en2bn("Home");?></a>
<?php }else{?>
	<a href="index.php?lang=bn"><?php echo BanglaConverter::en2bn("Home");?></a>
<?php }?>
</li>
<!-- <li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="prevention.php" role="button" aria-haspopup="true" aria-expanded="false">Prevention </a>
<i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
<ul class="dropdown-menu">
<li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="symptom.php" role="button" aria-haspopup="true" aria-expanded="false">Symptoms
<i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
</a>
<ul class="dropdown-menu">
<li><a href="symptom.php">Typical Symptoms</a></li>
<li><a href="symptom-checker.php">Symptom Checker</a></li>
<li><a href="prevention.php">Prevention</a></li>
<li><a href="virus-checker.php">Coronavirus Checker</a></li>
<li><a href="tracker.php">Tracker</a></li>
</ul>
</li>
<li><a href="maintenance.php">Maintenance</a></li>
<li><a href="faq.php">FAQS</a></li>
</ul>
</li> -->
<!-- <li><a href="appointment.php">Appointment</a></li>
<li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
<i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
<ul class="dropdown-menu">
<li><a href="about.php">About</a></li>
<li><a href="doctors.php">Doctors</a></li>
<li><a href="sample-right-sidebar.php">Simple Sidebar</a></li>
<li><a href="typography.php">Typhography</a></li>
<li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="search.php" role="button" aria-haspopup="true" aria-expanded="false">Search
<i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
</a>
<ul class="dropdown-menu">
<li><a href="search.php">Search</a></li>
<li><a href="search-nothing.php">Not Found</a></li>
</ul>
</li>
<li><a href="comingsoon.php">Coming Soon</a></li>
<li><a href="404.php">Error</a></li>
</ul>
</li> -->
<!-- <li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="blog.php" role="button" aria-haspopup="true" aria-expanded="false">Blog
</a>
<i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
<ul class="dropdown-menu">
<li><a href="blog.php">Blog</a></li>
<li><a href="single-blog.php">Blog Details</a></li>
</ul>
</li> -->
<li><a href="#footer_section">Contact Us</a></li>
<li id="choose_lang1"><a href="#" id="choose_lang">Language: </a></li>
<style type="text/css">
	#choose_lang:hover{
		color: #58547e !important;
		cursor: inherit;
	}

</style>
</ul>
<ul class="nav navbar-nav navbar-right">
<!-- <li class="checker_btn">
<a href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
</li> -->
<li class="checker_btn" style="margin-left: -40px;">
<?php if(@$_GET['lang']=='en'){?>
		<a id="bengali_btn" href="symptom-checker.php?lang=bn"><!-- <i class="linearicons-pulse"></i> --> BENGALI</a>
	<?php }elseif(@$_GET['lang']=='bn'){?>
<a id="english_btn" href="symptom-checker.php?lang=en"><!-- <i class="linearicons-pulse"></i> --> ENGLISH</a>
<?php }else{?>
	<a id="english_btn" href="symptom-checker.php?lang=en"><!-- <i class="linearicons-pulse"></i> --> ENGLISH</a>
<?php }?>
</li>
</ul>
</div>
</nav>
</div>
<div class="right_burger">
<ul class="nav">
<li>
<div class="search_btn" data-toggle="modal" data-target="#exampleModal">
<!-- <img id="search_header" src="assets/images/icon/search-white.png" alt="" /> -->
<ul class="nav navbar-nav navbar-right" id="mbl_lang" style="display: none;">
<li class="checker_btn" style="margin-left: -40px;;margin-top:0px">
	<?php if(@$_GET['lang']=='en'){?>
		<a id="bengali_btn" href="symptom-checker.php?lang=bn" style="background: #01cfbe !important;padding: 5px;border-radius: 4px;color: white;font-size: 12px;"><!-- <i class="linearicons-pulse"></i> --> BENGALI</a>
	<?php }elseif(@$_GET['lang']=='bn'){?>
<a id="english_btn" href="symptom-checker.php?lang=en" style="background: #01cfbe !important;padding: 5px;border-radius: 4px;color: white;font-size: 12px;"><!-- <i class="linearicons-pulse"></i> --> ENGLISH</a>
<?php }else{?>
	<a id="english_btn" href="symptom-checker.php?lang=en" style="background: #01cfbe !important;padding: 5px;border-radius: 4px;color: white;font-size: 12px;"><!-- <i class="linearicons-pulse"></i> --> ENGLISH</a>
<?php }?>
</li>
</ul>
</div>
</li>
<li>
<div class="menu_btn" id="header_menu_bar1" style="display: none;">
<img src="assets/images/icon/burger-white.png" alt="" />
</div>
</li>
</ul>
</div>
</div>
</header>