<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>Assignment Calculator</title>
		
</head>
<body>
<?php 
//include("ac-header.php"); 
include("instructions.php");
?>

<h1 align="left">Research Project <br>Assignment Calculator</h1><br /><br /><br />
<form action="date.php">
<table id="calc" style="margin:auto; border:1px solid #51575b;">
<tr>
<td align="center" colspan="2">
<?php
// Added Jan 2012 to display an error if not everything is filled in
if (isset($_GET["err"]) && $_GET["err"] == 1) {
	print "<span style='color:red'><em> Please enter all dates </em></span>";
	}
	
?>
</td>
</tr>
<tr>
<td align="right"><h4>Date you will begin the assignment:</h4></td>
<td valign="top">

<?php pres_date("one", date("j"), date("n"), date("Y")); ?>

</td>
</tr>
<tr><td align="right"><h4>Date the assignment is due:</h4></td>
<td valign=top>

<?php pres_date("two", "", "", date("Y")); ?>

</td></tr>
<tr><td colspan="2">
<center><input type="submit" value="Calculate Assignment Schedule!"></center></table><br />	<br />	<br />	

</form>

<p style="text-align:center;"><strong>Type in your assignment due date and click on Calculate Assignment Schedule!</strong></p><br>
<p style="font-size:.8em;">The Assignment Calculator is designed to help you break down your writing assignments into a series of steps. Related resources are provided to help you complete each step.</p><br>
<p style="font-size:.8em;"><strong>Disclaimer:</strong> These are <em>generally recommended</em> steps to guide you through the process of writing <em>most</em> research-based assignments. The steps and dates here do not replace your course schedules, requirements or syllabi. Always use your best judgment about which steps are necessary for you. For specific assignment questions, contact your professor.
</p>

<br>
<?php include("ac-footer.php"); ?>		
							
</body></html>