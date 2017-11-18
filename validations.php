<?php
if(isset($_POST["check_time_spent"]))

{



	$name =  $_POST["user_name" ];
	$date = $_POST["user_date" ];
	$month = $_POST["user_month"];
	$year = $_POST["user_year"];
	$secs_spent = @mktime(10,14,54,$date,$month,$year);
$present_year = date("Y");
$age = $present_year-$_POST["user_year"];

 if($name  =="" || 	$date  ==""  ||  $month==""  || $year=="")

{ 
	echo'<script> alert("all fields must be entered")</script>';

}

else{
echo '
<div class="container">
<div class="alert alert-success">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10"></div>
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
Dear<b> ' . $name . ' </b> you have spent ' . $secs_spent . ' secs currently and your are ' .$age. ' years old,further more your next birthday is on the ' .$date. ' of ' .$month. ' next year

</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10"></div>
</div>';
}
}
?>