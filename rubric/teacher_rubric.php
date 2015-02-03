<script src="js/goback.js"></script>
<?php
$student_info2 = mysql_query("SELECT * FROM Users WHERE '$student_number_rubric' = student_number ");
while($student1 = mysql_fetch_array($student_info2))
{
$first = $student1['first_name'];
$last = $student1['last_name'];
$number = $student1['student_number'];
}
?>
<h2>Now viewing: <?php echo $first;?> <?php echo $last;?>, <?php echo $number;?></h2>
<table id="rubric">
	<tr>
		<td>Grade 9</td>
		<td></td>
	</tr>
	<tr>
		<td class="title">Personal Information</td>
		<td></td>
		
	</tr>
	<tr>
	<?php
	
	$student_items = mysql_query("SELECT * FROM Progress WHERE '$student_number_rubric' = student_number ");

while($student = mysql_fetch_array($student_items))
  {
  if ($student['9a1']==1){ $ninea1 = "#F5F5A2"; }
  else if ($student['9a1']==2) {$ninea1 = "#CEFACD"; }
  else if ($student['9a1']==3) {$ninea1 = "#B1C9FC"; }
  else {$ninea1 = "#F7D2D2";}
   if ($student['9a2']==1){ $ninea2 = "#F5F5A2"; }
  else if ($student['9a2']==2) {$ninea2 = "#CEFACD"; }
  else if ($student['9a2']==3) {$ninea2 = "#B1C9FC"; }
  else {$ninea2 = "#F7D2D2";}
   if ($student['9a3']==1){ $ninea3 = "#F5F5A2"; }
  else if ($student['9a3']==2) {$ninea3 = "#CEFACD"; }
  else if ($student['9a3']==3) {$ninea3 = "#B1C9FC"; }
  else {$ninea3 = "#F7D2D2";}
  
   if ($student['9b1']==1){ $nineb1 = "#F5F5A2"; }
  else if ($student['9b1']==2) {$nineb1 = "#CEFACD"; }
  else if ($student['9b1']==3) {$nineb1 = "#B1C9FC"; }
  else {$nineb1 = "#F7D2D2";}
   if ($student['9b2']==1){ $nineb2 = "#F5F5A2"; }
  else if ($student['9b2']==2) {$nineb2 = "#CEFACD"; }
  else if ($student['9b2']==3) {$nineb2 = "#B1C9FC"; }
  else {$nineb2 = "#F7D2D2";}
   if ($student['9b3']==1){ $nineb3 = "#F5F5A2"; }
  else if ($student['9b3']==2) {$nineb3 = "#CEFACD"; }
  else if ($student['9b3']==3) {$nineb3 = "#B1C9FC"; }
  else {$nineb3 = "#F7D2D2";}
    if ($student['9b4']==1){ $nineb4 = "#F5F5A2"; }
  else if ($student['9b4']==2) {$nineb4 = "#CEFACD"; }
  else if ($student['9b4']==3) {$nineb4 = "#B1C9FC"; }
  else {$nineb4 = "#F7D2D2";}
  
   if ($student['9c1']==1){ $ninec1 = "#F5F5A2"; }
  else if ($student['9c1']==2) {$ninec1 = "#CEFACD"; }
  else if ($student['9c1']==3) {$ninec1 = "#B1C9FC"; }
  else {$ninec1 = "#F7D2D2";}
      
   if ($student['9d1']==1){ $nined1 = "#F5F5A2"; }
  else if ($student['9d1']==2) {$nined1 = "#CEFACD"; }
  else if ($student['9d1']==3) {$nined1 = "#B1C9FC"; }
  else {$nined1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9a1.html';" style="background-color: <?php echo $ninea1; ?>">Why I took Sci-Tech</td>
		<td class="a" onclick="setCookie('signed', '9a1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9a2.html';" style="background-color: <?php echo $ninea2; ?>">My Future Goals (post secondary/career)</td>
		<td class="a" onclick="setCookie('signed', '9a2', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9a3.html';" style="background-color: <?php echo $ninea3; ?>">Semester 1 and 2 Report Cards</td>
		<td class="a" onclick="setCookie('signed', '9a3', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr><tr>
		<td class="title">Scitech Skills &#38; Knowledge Certifications</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9b1.html';" style="background-color: <?php echo $nineb1; ?>">Science Lab Notebook</td>
		<td class="a" onclick="setCookie('signed', '9b1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9b2.html';" style="background-color: <?php echo $nineb2; ?>">Evidence of Science Fair</td>
		<td class="a" onclick="setCookie('signed', '9b2', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9b3.html';" style="background-color: <?php echo $nineb3; ?>">Evidence of at least two completed technology projects (Pop Bottle Rocket, Sumo Robot, Pinhole Camera, CO2 Car, Adobe Flash Animation, etc.) with a completed reflection for each</td>
		<td class="a" onclick="setCookie('signed', '9b3', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9b4.html';" style="background-color: <?php echo $nineb4; ?>">Passport to Safety certificate</td>
		<td class="a" onclick="setCookie('signed', '9b4', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td class="title">Community Work &#38; Extracurricular Involvement</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9c1.html';" style="background-color: <?php echo $ninec1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td class="a" onclick="setCookie('signed', '9c1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td class="title">Extracurricular Sci-Tech Experiences</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9d1.html';" style="background-color: <?php echo $nined1; ?>">At least one unique item about your SciTech experiences (i.e. SciTech Council, Regional Science Fair, contests &#38; competitions, Skills Canada, Rocketry, Robotics, Junior Solar Car) with a completed reflection(s).</td>
		<td class="a" onclick="setCookie('signed', '9d1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	</table>
	<br />
	<table id="rubric">
	<tr>
		<td>Grade 10</td>
		<td></td>
	</tr>
	<tr>
		<td class="title" colspan="2">Personal Information</td>
		
		
	</tr>
	<tr>
	<?php
$student_items = mysql_query("SELECT * FROM Progress WHERE '$student_number_rubric' = student_number ");
while($student = mysql_fetch_array($student_items))
  {
  if ($student['10a1']==1){ $tena1 = "#F5F5A2"; }
  else if ($student['10a1']==2) {$tena1 = "#CEFACD"; }
  else if ($student['10a1']==3) {$tena1 = "#B1C9FC"; }
  else {$tena1 = "#F7D2D2";}
   if ($student['10a2']==1){ $tena2 = "#F5F5A2"; }
  else if ($student['10a2']==2) {$tena2 = "#CEFACD"; }
  else if ($student['10a2']==3) {$tena2 = "#B1C9FC"; }
  else {$tena2 = "#F7D2D2";}
   if ($student['10a3']==1){ $tena3 = "#F5F5A2"; }
  else if ($student['10a3']==2) {$tena3 = "#CEFACD"; }
  else if ($student['10a3']==3) {$tena3 = "#B1C9FC"; }
  else {$tena3 = "#F7D2D2";}
  if ($student['10a4']==1){ $tena4 = "#F5F5A2"; }
  else if ($student['10a4']==2) {$tena4 = "#CEFACD"; }
  else if ($student['10a4']==3) {$tena4 = "#B1C9FC"; }
  else {$tena4 = "#F7D2D2";}
  if ($student['10a5']==1){ $tena5 = "#F5F5A2"; }
  else if ($student['10a5']==2) {$tena5 = "#CEFACD"; }
  else if ($student['10a5']==3) {$tena5 = "#B1C9FC"; }
  else {$tena5 = "#F7D2D2";}
  
   if ($student['10b1']==1){ $tenb1 = "#F5F5A2"; }
  else if ($student['10b1']==2) {$tenb1 = "#CEFACD"; }
  else if ($student['10b1']==3) {$tenb1 = "#B1C9FC"; }
  else {$tenb1 = "#F7D2D2";}
   if ($student['10b2']==1){ $tenb2 = "#F5F5A2"; }
  else if ($student['10b2']==2) {$tenb2 = "#CEFACD"; }
  else if ($student['10b2']==3) {$tenb2 = "#B1C9FC"; }
  else {$tenb2 = "#F7D2D2";}
   if ($student['10b3']==1){ $tenb3 = "#F5F5A2"; }
  else if ($student['10b3']==2) {$tenb3 = "#CEFACD"; }
  else if ($student['10b3']==3) {$tenb3 = "#B1C9FC"; }
  else {$tenb3 = "#F7D2D2";}
  
  
   if ($student['10c1']==1){ $tenc1 = "#F5F5A2"; }
  else if ($student['10c1']==2) {$tenc1 = "#CEFACD"; }
  else if ($student['10c1']==3) {$tenc1 = "#B1C9FC"; }
  else {$tenc1 = "#F7D2D2";}
      
   if ($student['10d1']==1){ $tend1 = "#F5F5A2"; }
  else if ($student['10c1']==2) {$tenc1 = "#CEFACD"; }
  else {$tend1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a1.html';" style="background-color: <?php echo $tena1; ?>">Semester 1 and 2 report cards</td>
		<td class="a" onclick="setCookie('signed', '10a1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a2.html';" style="background-color: <?php echo $tena2; ?>">Employability learning skills "Who am I?"</td>
		<td class="a" onclick="setCookie('signed', '10a2', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a3.html';" style="background-color: <?php echo $tena3; ?>">Career investigation summary (e.g. Career Cruising, Ontario Skills Passport, MyBlueprint.ca, Making My Way)</td>
		<td class="a" onclick="setCookie('signed', '10a3', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a4.html';" style="background-color: <?php echo $tena4; ?>">Young Worker Awareness Program Certificate</td>
		<td class="a" onclick="setCookie('signed', '10a4', 3); window.location = 'index_teacher.php';">Mark as signed</td>
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a5.html';" style="background-color: <?php echo $tena5; ?>">Updated Resume and Cover Letter</td>
		<td class="a" onclick="setCookie('signed', '10a5', 3); window.location = 'index_teacher.php';">Mark as signed</td>
	</tr>
	<tr>
		<td class="title" colspan="2">Scitech Skills &#38; Knowledge Certifications</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10b1.html';" style="background-color: <?php echo $tenb1; ?>">Science Lab Notebook</td>
		<td class="a" onclick="setCookie('signed', '10b1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10b2.html';" style="background-color: <?php echo $tenb2; ?>">Evidence of at least two completed technology projects (VEX Robotics, Lathe work, Milling work, Welding work, etc.) including reflections</td>
		<td class="a" onclick="setCookie('signed', '10b2', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10b3.html';" style="background-color: <?php echo $tenb3; ?>">Passport to Safety certificate</td>
		<td class="a" onclick="setCookie('signed', '10b3', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Community Work &#38; Extracurricular Involvement</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10c1.html';" style="background-color: <?php echo $tenc1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td class="a" onclick="setCookie('signed', '10c1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Extracurricular Sci-Tech Experiences</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10d1.html';" style="background-color: <?php echo $tend1; ?>">At least one unique item about your SciTech experiences that shows evidence of growth from the previous grade. Include a completed reflection(s).</td>
		<td class="a" onclick="setCookie('signed', '10d1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
</table>
<br />
<table id="rubric">
	<tr>
		<td>Grade 11</td>
		<td></td>
	</tr>
	<tr>
		<td class="title" colspan="2">Personal Information</td>
		
		
	</tr>
	<tr>
	<?php
	$student_number = $_COOKIE['ID_my_site'];
	$student_items = mysql_query("SELECT * FROM Progress WHERE '$student_number' = student_number ");

while($student = mysql_fetch_array($student_items))
  {
  if ($student['11a1']==1){ $elevena1 = "#F5F5A2"; }
  else if ($student['11a1']==2) {$elevena1 = "#CEFACD"; }
  else if ($student['11a1']==3) {$elevena1 = "#B1C9FC"; }
  else {$elevena1 = "#F7D2D2";}
   if ($student['11a2']==1){ $elevena2 = "#F5F5A2"; }
  else if ($student['11a2']==2) {$elevena2 = "#CEFACD"; }
  else if ($student['11a2']==3) {$elevena2 = "#B1C9FC"; }
  else {$elevena2 = "#F7D2D2";}
  
   if ($student['11b1']==1){ $elevenb1 = "#F5F5A2"; }
  else if ($student['11b1']==2) {$elevenb1 = "#CEFACD"; }
  else if ($student['11b1']==3) {$elevenb1 = "#B1C9FC"; }
  else {$elevenb1 = "#F7D2D2";}
   if ($student['11b2']==1){ $elevenb2 = "#F5F5A2"; }
  else if ($student['11b2']==2) {$elevenb2 = "#CEFACD"; }
  else if ($student['11b2']==3) {$elevenb2 = "#B1C9FC"; }
  else {$elevenb2 = "#F7D2D2";}
   if ($student['11b3']==1){ $elevenb3 = "#F5F5A2"; }
  else if ($student['11b3']==2) {$elevenb3 = "#CEFACD"; }
  else if ($student['11b3']==3) {$elevenb3 = "#B1C9FC"; }
  else {$elevenb3 = "#F7D2D2";}
   if ($student['11b4']==1){ $elevenb4 = "#F5F5A2"; }
  else if ($student['11b4']==2) {$elevenb4 = "#CEFACD"; }
  else if ($student['11b4']==3) {$elevenb4 = "#B1C9FC"; }
  else {$elevenb4 = "#F7D2D2";}
  
   if ($student['11c1']==1){ $elevenc1 = "#F5F5A2"; }
  else if ($student['11c1']==2) {$elevenc1 = "#CEFACD"; }
  else if ($student['11c1']==3) {$elevenc1 = "#B1C9FC"; }
  else {$elevenc1 = "#F7D2D2";}
      
   if ($student['11d1']==1){ $elevend1 = "#F5F5A2"; }
  else if ($student['11d1']==2) {$elevend1 = "#CEFACD"; }
  else if ($student['11c1']==3) {$elevenc1 = "#B1C9FC"; }
  else {$elevend1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11a1.html';" style="background-color: <?php echo $elevena1; ?>">Post secondary career plan</td>
		<td class="a" onclick="setCookie('signed', '11a1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11a2.html';" style="background-color: <?php echo $elevena2; ?>">Semester 1 and 2 report cards</td>
		<td class="a" onclick="setCookie('signed', '11a2', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
		<td class="title" colspan="2">Scitech Skills &#38; Knowledge Certifications</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11b1.html';" style="background-color: <?php echo $elevenb1; ?>">Avogadro Chemistry Contest - evidence</td>
		<td class="a" onclick="setCookie('signed', '11b1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11b2.html';" style="background-color: <?php echo $elevenb2; ?>">Science Lab Notebook</td>
		<td class="a" onclick="setCookie('signed', '11b2', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11b3.html';" style="background-color: <?php echo $elevenb3; ?>">Passport to Safety certificate</td>
		<td class="a" onclick="setCookie('signed', '11b3', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11b4.html';" style="background-color: <?php echo $elevenb4; ?>">Evidence of at least two completed technology projects including reflections</td>
		<td class="a" onclick="setCookie('signed', '11b4', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Community Work &#38; Extracurricular Involvement</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11c1.html';" style="background-color: <?php echo $elevenc1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td class="a" onclick="setCookie('signed', '11c1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Extracurricular Sci-Tech Experiences</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11d1.html';" style="background-color: <?php echo $elevend1; ?>">At least one unique item about your SciTech experiences that shows evidence of growth from the previous grade. Include a completed reflection(s).</td>
		<td class="a" onclick="setCookie('signed', '11d1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
</table>
<br />
<table id="rubric">
	<tr>
		<td>Grade 12</td>
		<td></td>
	</tr>
	<tr>
		<td class="title" colspan="2">Personal Information</td>
		
		
	</tr>
	<tr>
	<?php
	$student_number = $_COOKIE['ID_my_site'];
	$student_items = mysql_query("SELECT * FROM Progress WHERE '$student_number' = student_number ");

while($student = mysql_fetch_array($student_items))
  {
  if ($student['12a1']==1){ $twelvea1 = "#F5F5A2"; }
  else if ($student['12a1']==2) {$twelvea1 = "#CEFACD"; }
  else if ($student['12a1']==3) {$twelvea1 = "#B1C9FC"; }
  else {$twelvea1 = "#F7D2D2";}
   if ($student['12a2']==1){ $twelvea2 = "#F5F5A2"; }
  else if ($student['12a2']==2) {$twelvea2 = "#CEFACD"; }
  else if ($student['12a2']==3) {$twelvea2 = "#B1C9FC"; }
  else {$twelvea2 = "#F7D2D2";}
  
   if ($student['12b1']==1){ $twelveb1 = "#F5F5A2"; }
  else if ($student['12b1']==2) {$twelveb1 = "#CEFACD"; }
  else if ($student['12b1']==3) {$twelveb1 = "#B1C9FC"; }
  else {$twelveb1 = "#F7D2D2";}
   if ($student['12b2']==1){ $twelveb2 = "#F5F5A2"; }
  else if ($student['12b2']==2) {$twelveb2 = "#CEFACD"; }
  else if ($student['12b2']==3) {$twelveb2 = "#B1C9FC"; }
  else {$twelveb2 = "#F7D2D2";}
   if ($student['12b3']==1){ $twelveb3 = "#F5F5A2"; }
  else if ($student['12b3']==2) {$twelveb3 = "#CEFACD"; }
  else if ($student['12b3']==3) {$twelveb3 = "#B1C9FC"; }
  else {$twelveb3 = "#F7D2D2";}
   if ($student['12b4']==1){ $twelveb4 = "#F5F5A2"; }
  else if ($student['12b4']==2) {$twelveb4 = "#CEFACD"; }
  else if ($student['12b4']==3) {$twelveb4 = "#B1C9FC"; }
  else {$twelveb4 = "#F7D2D2";}
  
   if ($student['12c1']==1){ $twelvec1 = "#F5F5A2"; }
  else if ($student['12c1']==2) {$twelvec1 = "#CEFACD"; }
  else if ($student['12c1']==3) {$twelvec1 = "#B1C9FC"; }
  else {$twelvec1 = "#F7D2D2";}
      
   if ($student['12d1']==1){ $twelved1 = "#F5F5A2"; }
  else if ($student['12d1']==2) {$twelved1 = "#CEFACD"; }
  else if ($student['12d1']==3) {$twelved1 = "#B1C9FC"; }
  else {$twelved1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12a1.html';" style="background-color: <?php echo $twelvea1; ?>">Updated  Resume &amp; Cover Letter showcasing Employability/Learning Skills</td>
		<td class="a" onclick="setCookie('signed', '12a1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12a2.html';" style="background-color: <?php echo $twelvea2; ?>">Semester 1 and 2 report cards</td>
		<td class="a" onclick="setCookie('signed', '12a2', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
		<td class="title" colspan="2">Scitech Skills &#38; Knowledge Certifications</td>
		
		</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12b1.html';" style="background-color: <?php echo $twelveb1; ?>">Chem13  News Chemistry Contest - evidence</td>
		<td class="a" onclick="setCookie('signed', '12b1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12b2.html';" style="background-color: <?php echo $twelveb2; ?>">Science Lab Notebook</td>
		<td class="a" onclick="setCookie('signed', '12b2', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
		<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12b3.html';" style="background-color: <?php echo $twelveb3; ?>">Passport to Safety certificate</td>
		<td class="a" onclick="setCookie('signed', '12b3', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12b4.html';" style="background-color: <?php echo $twelveb4; ?>">Evidence of at least two completed technology projects including reflections</td>
		<td class="a" onclick="setCookie('signed', '12b4', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Community Work &#38; Extracurricular Involvement</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12c1.html';" style="background-color: <?php echo $twelvec1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td class="a" onclick="setCookie('signed', '12c1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Extracurricular Sci-Tech Experiences</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12d1.html';" style="background-color: <?php echo $twelved1; ?>">At least one unique item about your SciTech experiences that shows evidence of growth from the previous grade. Include a completed reflection(s).</td>
		<td class="a" onclick="setCookie('signed', '12d1', 3); window.location = 'index_teacher.php';">Mark as signed</td>
		
	</tr>
</table>