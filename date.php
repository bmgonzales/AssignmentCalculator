<?php
// Redirect to index if dates are not all specified
$datevars = array('monthone','monthtwo','dayone','daytwo','yearone','yeartwo');
foreach ($datevars as $var) {
	if (empty($_GET[$var]) || !is_numeric($_GET[$var])) {
		header("Location: index.php?err=1");
		exit();
	}
}
?>
<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>Assignment Calculator</title>

</head><body>

<?php
/**********************************************************
File: date.php
Modified: Matthew Decker matthew@wayne.edu
Last Modified: 12.19.2005
***********************************************************
Comments:
Modified to allow register_globals to be turned off.
**********************************************************/


//include("ac-header.php");
include("instructions.php");



$today = date("Ymd"); 

print "<h1>Research Project <br>Assignment Calculator</h1><br /><br /><br />\n";
print "<table width='100%'><tr><td width='50%'>";

//set up the times

$date1 = "{$_GET['monthone']}/{$_GET['dayone']}/{$_GET['yearone']}";
$date2 = "{$_GET['monthtwo']}/{$_GET['daytwo']}/{$_GET['yeartwo']}";

$time1 = strtotime($date1) + 43200;
$time2 = strtotime($date2);

print "<table border='0'>";

print "<tr><td><b>Starting on:</b></td><td valign='top'>$date1</td></tr>\n";
print "<tr><td><b>Ending on:</b></td><td valign='top'>$date2</td></tr></table>\n";

$days = days_between($time1, $time2);

print "<br><b>According to the dates you have entered, you have " . (int) $days . " days to finish.<br><br></b><p>\n";
?>
<br>
<form action='email.php' method='post'>
<label for 'email'>Email Results:</label>
<input type='email' name='email' id='email'>
<input type='hidden' name='time1' value="<?php echo $time1 ?>">
<input type='hidden' name='time2' value="<?php echo $time2 ?>">
<input type='hidden' name='date1' value="<?php echo $date1 ?>">
<input type='hidden' name='date2' value="<?php echo $date2 ?>">
<input type='hidden' name='days' value="<?php echo $days ?>">
<input type='submit' name='send' value='Send'>
</form>	
<br>
<hr>
<?php
// Hack to remove notices for undefined var
$bedTime = "";
$ampm = isset($_GET['ampm']) ? htmlentities($_GET['ampm'], ENT_QUOTES) : "";


// out_of_time() no longer returns anything since the dates are added to $instructions
out_of_time($time1, $time2, $instructions, $bedTime, $ampm);
//$dates = out_of_time($time1, $time2, $instructions, $bedTime, $ampm);

print "</td><td></td><td valign=middle align=center><P><table style='border:1px solid #51575b;'><tr><td style='padding:10px;'>\n";
print "<center><b>Want to try a different date?</b></center><br>\n";
print "<form action='date.php'>\n";

print "<input type='hidden' name='ampm' VALUE='$ampm'>";
		
print "<table><tr><td>Start Date:</td><td>\n";

pres_date("one", date("j"), date("n"), date("Y"));

print "</td></tr><tr><td>Due Date:</td><td>\n";

pres_date("two", "", "", date("Y"));

print "</td></tr></table><br><center><input type='submit' value='Re-Calculate Schedule!'></center></form>";
print "</td></tr></table></td></tr></table>";
		
		
//Stuff to say on certain dates

if(days_between($time1, $time2)<0) {
	
	print "<span style='color:red'><b>Negative Number of Days:</b> You probably entered the dates wrong ...<br /></span>\n";

} else if(days_between($time1, $time2)<1) {
	
	print "<span style='color:red'>You have <b>less than one day</b> to get this done.  I hope you're just playing with this thing.<br /></span>\n";
}

if(days_between($time1, $time2)>99) {
	
	print "It's never too early to start!<br />\n";
}

print "<p> <br><table width='100%'>";

$j = 1;
$results = '';
foreach ($instructions as $step) {

	$results .= "<tr><td align=left style='vertical-align:top; padding:10px; width:200px; height:150px;'><h1>Step $j</h1></td><td style='margin-left:50px; vertical-align:top; padding:10px;'>\n";

	//description
	$results .= "<b>By {$step['due']}:</b> <i>\n";
	$datum = date("Ymd", strtotime($step['due']));
	$results .= htmlspecialchars($step['title']) . " </i><br>\n";
	
	// Jan 2012 MJB made a real <ul> here instead of 
	// entity encoded bullets
	if (count($step['items'])) {
	$results .= "<ul style='margin-left:18px;'>\n";
		//what should be done
		foreach ($step['items'] as $item) {
			$results .= "<li>" . $item . "</li>\n";
		}
	}
	$results .= "</ul>";

	$results .= "<br/>";
	$results .= "</td></tr>\n";
	$j++;
}
print $results;
print "</table><br><br><br>\n";
print "<center><p><h1>".$step['due'].": </h1>



<br><p style='color:#005481;font-size:36px;'>You are finished: Turn it in!</p>
	<br><br>


<br><br>
	<img id='finishline' width='400px' style='margin:auto;' src='https://s3.amazonaws.com/libapps/accounts/27791/images/finishline.JPG'>
	
	</p></center>"

?>
	
	</body></html>