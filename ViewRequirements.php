<?php 
		session_start();

	if(!isset($_SESSION['user'][0]['name'])){
		header("Location:index.php");	
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Create Requirement Enratec</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

		<style>
.jobs-section ul li .inner-wrap {
    background: #fefefe;
    border: 1px solid #f4f4f4;
    padding: 10px 15px 0;
    transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
    -webkit-transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
    -moz-transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
    -o-transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
    -ms-transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
}
.jobs-section ul li .job-source {
    float: right;
    margin-left: 10px;
    margin-top: 4px;
}
.jobs-section ul li h3 {
    color: #424242;
    height: 50px;
    overflow: hidden;
    font-size: 18px;
    line-height: 25px;
    margin-bottom: 6px;
}
.jobs-section ul li header {
    margin-bottom: 15px;
}.jobs-section ul li p.job-info {
    height: 62px;
    overflow: hidden;
}.jobs-section ul li header p {
    margin-bottom: 7px;
    font-size: 13px;
    line-height: 18px;
    font-family: 'open_sanssemibold',Helvetica,Arial,sans-serif;
    height: 19px;
    overflow: hidden;
}
.jobs-section ul li p.job-info {
    height: 62px;
    overflow: hidden;
}
.jobs-section ul li p {
    color: #bbb;
    font-size: 12px;
    line-height: 21px;
}
.jobs-section ul li .location-info {
    border-right: 1px solid #ccc;
    padding-right: 8px;
    margin-right: 8px;
}
.jobs-section ul li footer {
    background: #EAEAEA;
    padding: 8px;
    margin: 0 -15px;
    position: relative;
}
.jobs-section ul li p .detail {
    margin-right: 20px;
    color: #bbb;
}
.jobs-section ul li .apply {
    text-align: center;
    height: 62px;
}
.jobs-section ul li .jb-apply-btn-sml {
    -moz-user-select: none;
    border: 1px solid transparent;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857;
    margin-bottom: 0;
    padding: 6px 12px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    position: relative;
    background: #fff;
    border: 1px solid #eb494f;
    color: #eb494f;
    text-align: center;
    transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
    -webkit-transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
    -moz-transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
    -o-transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
    -ms-transition: all .1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
    outline: none;
    width: 115px;
    margin: 0 auto 3px;
}
.jobs-section ul li footer p {
    font-size: 13px;
    color: #999;
    margin: 0;
}
.jobs-section ul li .metadata {
    float: right;
}
.jobs-section ul {
    list-style: none;
    margin: 0 -15px;
    padding: 0;
}
.jobs-section ul li {
    margin-bottom: 30px;
    text-align: left;
}
.jobs-section ul li footer p {
    font-size: 13px;
    color: #999;
    margin: 0;
}

</style>
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="home.php">Enratec</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li ><a href="home.html"><i class="icon-home"></i><span>Home</span> </a> </li>
		 <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span></i><span>Requirements</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
           <?php if($_SESSION['user'][0][$dbCreateAccess] == '1'){ ?>
            <li><a href="CreateRequirements.php">Create Requirements</a></li>
			<?php } ?>
            <li><a href="ViewRequirements.php">View & Edit Requirements</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container" style="">
        <div id="job_list" class="jobs-section">
<ul class="row">
<!-- start -->

<?php 
	
	require 'operations/constants.php';
	require_once 'operations/requirementViewProcess.php';
	for($i=0;$i< count($requireResults);$i++){
?>

		<li class="span6">
<div class="inner-wrap">

<h3><?php echo  $requireResults[$i][$requireClient];?></h3>
<h4><?php echo  $requireResults[$i][$requireSkill];?></h4>
<header>
<p class="clearfix"><span class="company-name">Hire type: <?php echo $requireResults[$i][$requireHire]; ?>   | Joining Location: <?php echo $requireResults[$i][$requireWorkLocation]; ?> | TAT Date:<i class="icon-calendar"> <?php echo $requireResults[$i][$requireTat]; ?></i></span></p>
</header>
<p class="job-info">
<span class="location-info"><i class="icon-map-marker"></i>Interview/Walkin Location: <?php echo $requireResults[$i][$requireInterviewLocation]; ?> </span>
<span class="detail"><i class="icon-calendar"></i> <strong>Notice: <?php echo $requireResults[$i][$requireNotice]; ?>  </strong></span><br>
<span><strong>Job description: <?php echo $requireResults[$i][$requireDescription]; ?> </strong></span>
</p>

<footer>
<p class="clearfix">
<span class="experience"><i class="icon-user"></i> Experience: <?php echo $requireResults[$i][$requireExperience];?>&nbsp;/Band:  <?php echo $requireResults[$i][$requireBand];?></span>
 <span class="metadata"><i class="icon-calendar"></i> Interview/walkin Date:  <?php echo $requireResults[$i][$requireInterviewDate];?> &nbsp&nbsp&nbsp&nbsp<span><a href="EditRequirements.php?id=<?php echo $requireResults[$i][$requireid] ?>">Edit<span></span>
</p>
</footer>
</div>
</li>
	<?php } ?>
  </ul>     
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>

<div class="footer navbar navbar-fixed-bottom">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2016 <a href="index.php">Enratec Consultancy Services PVT LTD</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 

</body>
</html>
