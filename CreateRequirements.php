<?php 
		session_start();

	if(!isset($_SESSION['user'][0]['name'])){
		header("Location:index.php");	
	}else if($_SESSION['user'][0][$dbCreateAccess] != '1'){
		header("Location:home.php");
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
	<script>
	 function selectrow1() {
var selectedValue = document.getElementById('client').value
if (selectedValue == 'IBM'){

document.getElementById('bandid').style.display='inline';
 document.getElementById("Band").setAttribute("required","required");
}
if (selectedValue == 'CTS'){

document.getElementById('bandid').style.display='none';
  document.getElementById("Band").required = false;
 
     }
 }
 function validateinterview(){
	document.getElementById('InterviewLoc').style.display='inline';
		document.getElementById('Interviewdat').style.display='inline';
	document.getElementById('walkinLoc').style.display='none';
		document.getElementById('walkindat').style.display='none';
		 document.getElementById("InterviewLocation").setAttribute("required","required");
		  document.getElementById("InterviewDate").setAttribute("required","required");
		    document.getElementById("WalkinDate").required = false;
			  document.getElementById("WalkinLocation").required = false;
 }
  function validatewalkin(){
	document.getElementById('InterviewLoc').style.display='none';
		document.getElementById('Interviewdat').style.display='none';
	document.getElementById('walkinLoc').style.display='inline';
		document.getElementById('walkindat').style.display='inline';
		 document.getElementById("WalkinLocation").setAttribute("required","required");
		  document.getElementById("WalkinDate").setAttribute("required","required");
		    document.getElementById("InterviewDate").required = false;
			  document.getElementById("InterviewLocation").required = false;
 }
	</script>
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
            <li><a href="CreateRequirements.php">Create Requirements</a></li>
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
      <div class="row">
        <div class="span12">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Post Requirement</h3>
            </div>
            <!-- /widget-header -->
			
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
				
                  <form action="requirementCreateBack.php" method="post" margin-top:30px" class="span6 form-horizontal">
					<!-- Select Basic -->
					  <!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="JobId">Job Id</label>  
					  <div class="controls">
					  <input id="JobId" name="JobId" type="text" placeholder="" class="form-control span4 input-md" required="">
						
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="client">Client</label>
					  <div class="controls">
						<select id="client" name="client" required onchange="selectrow1();" class="span4 form-control">
						<option value="" disabled selected hidden>Select Client</option>
						  <option value="IBM">IBM</option>
						  <option value="CTS">CTS</option>
						</select>
					  </div>
					</div>


					<!-- Select Basic -->
					<div class="control-group">
					  <label class="control-label" for="HireType">Hire Type</label>
					  <div class="controls">
						<select id="HireType" name="HireType" required class="span4 form-control">
						<option value="" disabled selected hidden>Select hire type</option>
						  <option value="Permenent">Permenent</option>
						  <option value="Contract">Contract</option>
						  <option value="Contract to Hire">Contract to Hire</option>
						</select>
					  </div>
					</div>
					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="Skill">Skill</label>  
					  <div class="controls">
						<input id="Skill" name="Skill" type="text" placeholder="" class="form-control span4  input-md" required="">
						
					  </div>
					</div>
					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="Notice">Notice</label>  
					  <div class="controls">
					    <input id="Notice" name="Notice" type="text" placeholder="" required class="form-control span4 input-md">
					  </div>
					</div>
					<!-- Select Basic -->
					<div id="bandid" class="control-group">
					  <label class="control-label" for="Band">Band</label>
					  <div class="controls">
						<select id="Band" name="Band" class="span4 form-control">
						<option value="" disabled selected hidden>Select Band</option>
						  <option value="6G">6G</option>
						  <option value="6A">6A</option>
						  <option value="6B">6B</option>
						  <option value="7A">7A</option>
						  <option value="7B">7B</option>
						  <option value="8">8</option>
						</select>
					  </div>
					</div>
					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="Experience">Experience</label>  
					  <div class="controls">
					  <input id="Experience" name="Experience" type="text" placeholder="" class="form-control span4 input-md" required="">
						
					  </div>
					</div>
					<!-- Textarea -->
					<div class="control-group">
					  <label class="control-label" for="JobDescription">Job Description</label>
					  <div class="controls">                     
						<textarea class="form-control span4" id="JobDescription" required name="JobDescription"></textarea>
					  </div>
					</div>
					<!-- Text input-->
					<div class="control-group">
					  <label class="col-md-4 control-label" for="WorkingLocation">WorkingLocation</label>  
					  <div class="controls">
					  <input id="WorkingLocation" name="WorkingLocation" type="text" placeholder="" class="form-control span4 input-md" required="">
						
					  </div>
					</div>
					<div class="control-group">											
						<label class="control-label">Interview/Walkin</label>
							 <div class="controls">
                                <label class="radio inline">
                                     <input type="radio" name="InterviewWalkin" onclick="validateinterview();" id="InterviewWalkin-0" value="Interview" >
      Interview
                                 </label>
                                <label class="radio inline">
                                     <input type="radio" name="InterviewWalkin" onclick="validatewalkin();" id="InterviewWalkin-1" value="Walkin">
      Walkin
                                </label>
                            </div>	<!-- /controls -->			
					</div> <!-- /control-group -->

					<!-- Text input-->
					<div id="InterviewLoc" >
					<div class="control-group">
					  <label class="control-label" for="InterviewLocation">Interview Location</label>  
					  <div class="controls">
					  <input id="InterviewLocation" name="InterviewLocation" type="text" placeholder="" class="form-control span4 input-md" >
						
					  </div>
					</div>
					</div>
					<!-- Text input-->
					<div id="walkinLoc" style="display:none;">
					<div class="control-group">
					  <label class="control-label" for="WalkinLocation">Walkin Location</label>  
					  <div class="controls">
					  <input id="WalkinLocation" name="WalkinLocation" type="text" placeholder="" class="form-control span4 input-md" >
						
					  </div>
					</div>
					</div>
					<!-- Text input-->
					<div id="Interviewdat">
					<div  class="control-group">
					  <label class="col-md-4 control-label" for="InterviewDate">Interview Date</label>  
					  <div class="controls">
					  <input id="InterviewDate" name="InterviewDate" type="date" placeholder="" class="form-control span4 input-md" >
						
					  </div>
					</div>
					</div>
					<!-- Text input-->
					<div id="walkindat" style="display:none;" >
					<div class="control-group">
					  <label class="col-md-4 control-label" for="WalkinDate">Walkin Date</label>  
					  <div class="controls">
					  <input id="WalkinDate" name="WalkinDate" type="date" placeholder="" class="form-control span4 input-md" >
						
					  </div>
					</div>
					</div>
					<!-- Text input-->
					<div class="control-group">
					  <label class="col-md-4 control-label" for="RequirementAssign">Requirement Assign</label>  
					  <div class="controls">
					 
						<select name="assign" class="form-control span4 input-md">
							<option value="" disabled selected hidden>Select Assign</option>
							<?php   require_once'operations/assignProcess.php';  ?>
						</select>
					  </div>
					</div>
					<!-- Text input-->
					<div class="control-group">
					  <label class="col-md-4 control-label" for="TAT">TAT Date</label>  
					  <div class="controls">
					  <input id="TAT" name="TATDate" type="date" placeholder="" class="form-control span4 input-md" required="">
						
						
						
					  </div>
					</div>
					<!-- Button -->
					<div class="form-group">
					  <label class="span4 control-label" for="Submit"></label>
					  <div class="Span4">
						<button id="Submit" name="Submit" class="btn btn-success">Submit</button>
					  </div>
					</div>

</form>

                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>
          <!-- /widget -->
          
         </div>
        <!-- /span12 -->
       
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
