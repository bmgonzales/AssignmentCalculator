<?php
/**********************************************************
 Copyright (C) The Regents of the University of Minnesota

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 version 2 as published by the Free Software Foundation.
   
 This program is distributed in the hope that it will be useful,  
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License in COPYRIGHT for more details.



File: instructions.php
Original Author: John Hickey (a former student worker)
Modified:  Shane Nackerud snackeru@tc.umn.edu
Last Modified: 09.Jan.2012 Michael Berkowski <mjb@umn.edu>
***********************************************************
Comments:
This is the main file of steps for the Assignment Calculator.
The steps are located in a big array called $instructions[].
The decimal point in the array describes the amount of time 
each step should take.  Make sure that your numbers equal 1
(one), or in other words make sure it equals 100% of the time.

The file also contains various functions necessary for the AC.

Jan 2012: MJB Changed this from numerically indexed sub-arrays
to a proper associative array 
**********************************************************/


//main array.  Each element has three parts.  A decimal that 
//represents fraction of total time, a description, and an 
//array of tips

$instructions = array(

//Step 1
array(
  "time" => .03,
  "title" => "Get started",
  "items" => array(
    "<a href='http://libguides.ollusa.edu/understandtheassignment' target='_blank'>Understand the Assignment</a>",
	"<a href='https://ezproxy.ollusa.edu/login?url=http://vle.credoreference.com/literati-school/the-research-process' target='_blank'>The Research Process <i class='fa fa-video-camera' aria-hidden='true'></i></a> (3:31)",
	"<a href='https://ezproxy.ollusa.edu/login?url=http://vle.credoreference.com/literati-academic/writing-help' target='_blank'>Writing Help <i class='fa fa-video-camera' aria-hidden='true'></i></a> (3:51)"
  ),
  "due" => NULL
),

//Step 2 
array(
  "time" => .04,
  "title" => "Select and focus your topic",
  "items" => array(
    "<a href='http://libguides.ollusa.edu/findtopic' target='_blank'>Find a Topic</a>",
    "<a href='https://ezproxy.ollusa.edu/login?url=http://vle.credoreference.com/literati-academic/brainstorming-with-concept-maps' target='_blank'>Brainstorming with Concept Maps <i class='fa fa-video-camera' aria-hidden='true'></i></a> (2:04)"
  ),
  "due" => NULL
),

//Step 3
array(
  "time" => .01,
  "title" => "Write working thesis",
  "items" => array(
    "<a href='https://owl.english.purdue.edu/owl/resource/545/1/' target='_blank'>Tips and Examples for Writing Thesis Statements</a>"
  ),
  "due" => NULL
),

//Step 4
array(
  "time" => .03,
  "title" => "Strategize",
  "items" => array(
   	"<a href='https://ezproxy.ollusa.edu/login?url=http://vle.credoreference.com/literati-academic/keywords-and-search-terms.html' target='_blank'>Keywords and Search Terms <i class='fa fa-video-camera' aria-hidden='true'></i></a> (3:17)",
	"<a href='https://ezproxy.ollusa.edu/login?url=http://vle.credoreference.com/literati-academic/refining-search-results-new' target='_blank'>Refining Search Results <i class='fa fa-video-camera' aria-hidden='true'></i></a> (3:16)"
  ),
  "due" => NULL
),

//Step 5
array(
  "time" => .41,
  "title" => "Find, review, and evaluate resources",
  "items" => array(
    "<a href='http://libguides.ollusa.edu/' target='_blank'>Find Your Subject Research Starter</a>",
    "<a href='http://libguides.ollusa.edu/worldcat' target='_blank'>Search WorldCat Discovery (Books & Articles)</a>",
	"<a href='https://ezproxy.ollusa.edu/login?url=http://vle.credoreference.com/literati-academic/primary-sources' target='_blank'>Primary and Secondary Sources <i class='fa fa-video-camera' aria-hidden='true'></i></a> (3:43)",
	"<a href='https://owl.english.purdue.edu/owl/resource/614/01/' target='_blank'>Annotated Bibliography</a>",
	"<a href='http://libguides.ollusa.edu/ld.php?content_id=24087402' target='_blank'>Literature Review Worksheet <i class='fa fa-file-pdf-o' aria-hidden='true'></i></a>",
	"<a href='http://libguides.ollusa.edu/evaluating' target='_blank'>Evaluate Sources</a>",
	"<a href='https://ezproxy.ollusa.edu/login?url=http://vle.credoreference.com/literati-academic/evaluating-information.html' target='_blank'>Evaluting Information <i class='fa fa-video-camera' aria-hidden='true'></i></a> (4:39)"
  ),
  "due" => NULL
),


//Step 6
array(
  "time" => .02,
  "title" => "Outline or describe overall structure",
  "items" => array(
    "<a href='https://owl.english.purdue.edu/owl/resource/544/01/' target='_blank'>Four Main Components for Effective Outlines</a>"
  ),
  "due" => NULL
),

//Step 7
array(
  "time" => .10,
  "title" => "Write 1st draft",
  "items" => array(
    "<a href='https://ollusa.mywconline.com/' target='_blank'>Make an Appointment with the Writing Center</a>",
    "<a href='http://libguides.ollusa.edu/understandtheassignment' target='_blank'>Understand the Assignment</a>"
   ),
  "due" => NULL
),

//Step 8
array(
  "time" => .10,
  "title" => "Conduct additional research",
  "items" => array(
    "<a href='http://libguides.ollusa.edu/' target='_blank'>Find Your Subject Research Starter</a>",
    "<a href='http://libguides.ollusa.edu/worldcat' target='_blank'>Search WorldCat Discovery (Books & Articles)</a>"
  ),
  "due" => NULL
),

//Step 9
array(
  "time" => .20,
  "title" => "Revise, rewrite, edit",
  "items" => array(
    "<a href='https://ollusa.mywconline.com/' target='_blank'>Make an Appointment with the Writing Center</a>",
	"<a href='https://owl.english.purdue.edu/owl/resource/600/01/' target='_blank'>Improving Sentence Clarity</a>"
  ),
  "due" => NULL
),

//Step 10
array(
  "time" => .06,
  "title" => "Put paper in final form",
  "items" => array(
    "<a href='https://owl.english.purdue.edu/owl/resource/561/01/' target='_blank'>Proofreading</a>",
    "<a href='http://libguides.ollusa.edu/citingresources' target='_blank'>Citing Resources</a>",
    "<a href='https://ezproxy.ollusa.edu/login?url=http://vle.credoreference.com/literati-academic/the-10-most-common-writing-errors' target='_blank'>The 10 Most Common Writing Errors</a>"
  ),
  "due" => NULL
)
);


/**********************************************************
Function: days_between
Author: John Hickey
Last Modified: 2001
***********************************************************
Purpose:
Generates the number of days between two dates
**********************************************************/ 
function days_between($time1, $time2) {

	$time =  $time2 - $time1;
	return ($time/86400);

}


/**********************************************************
Function: out_of_time
Author: John Hickey
Last Modified: 2012 by Michael Berkowski
***********************************************************
Purpose:
Breaks up the steps into the times designated by the decimals
in the $instructions array

2012: Michael Berkowski made the due dates a component of the
$instructions array rather than a separate array
NOTE: $instructions_array is passed by reference now...
**********************************************************/ 
function out_of_time($time1, $time2, &$instructions_array, $bedTime, $ampm) {

	$time= abs($time1-$time2);
	$div_array = '';
	//depending on the number of day and the number of divisons, we choose different date formats.

		// No idea what $div_array was for...
		if(days_between($time1, $time2)>sizeof($div_array)) {
		
			$format="l M d, Y";
			$stages = $time1; //keep the running total.

			foreach ($instructions_array as &$step) {
				$stages += ($time * $step['time']);	
				$step['due'] = date($format, $stages);
			}
		} else {	
	
		$format="g a D M d";

		$stages = $time1; //keep the running total.

			foreach ($instructions_array as &$step) {
				$stages += ($time * $step['time']);
				$hour24 = date("G", $stages);
				if ($hour24 > 12) $hour24 = $hour24-24; //this keeps the time centered around midnight. 2 is 2 am and -2 is 10pm
				if( ($ampm == 'am' && $hour24 > $bedTime && $hour24 < $bedTime + 10) or ($ampm == 'pm' && $hour24 > $bedTime-12 && $hour24 < $bedTime-2)){//if the time is later than a person wants to get to sleep
					$step['due'] = "$bedTime $ampm " . date("D M d", $stages);
				} else {
					$step['due'] = date($format, $stages);
				}
			}

		}
	return;
}

/**********************************************************
Function: pres_date
Author: John Hickey
Last Modified: 2012 by Michael Berkowski (fixed attribute quoting)
***********************************************************
Purpose:
Generates the form for Start Date and Due Date information
**********************************************************/ 
function pres_date($number = "", $myDay = "", $myMon = "", $myYear = "") {
	
	print "<input type= 'text' name='month$number' size='2' maxlength='2' value='$myMon'> - \n";
	print "<input type= 'text' name='day$number' size='2' maxlength='2' value='$myDay'> - \n";
	print "<input type= 'text' name='year$number' size='4' maxlength='4' value='$myYear'>\n";

}

?>
