<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- external library -->
<script src="libs/jquery/jquery-2.1.1.min.js"></script>
<script src="libs/jquery/jquery-ui-1.11.2.min.js"></script>
<link href="libs/jquery/jquery-ui-1.11.2.min.css" rel="stylesheet" />
<link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="libs/bootstrap/bootstrap.min.js"></script>

<!--Own coding -->
<link href="css/student.css" rel="stylesheet" />
</head>
<body>

	<div class="page-header">
		<h1>
			Peer System <small>Shar, Welcome!</small>
		</h1>
	</div>
	<!--end of header-->

	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-style"><a href="student_home.php">Home</a></li>
			<li class="tab-style"><a href="student_group.php">Group</a></li>
			<li class="tab-style"><a href="student_report.php">Report</a></li>
			<li class="tab-style active"><a>Assessment</a></li>
			<li class="tab-style"><a href="student_logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-assessment-style"><a href="html_assessment/assessment1.php">Group A Report</a></li>
			<li class="tab-assessment-style"><a href="html_assessment/assessment2.php">Group B Report</a></li>
			<li class="tab-assessment-style"><a href="html_assessment/assessment3.php">Group C Report</a></li>
		</ul>
	</div>
	<div class="content"></div>
</body>
</html>