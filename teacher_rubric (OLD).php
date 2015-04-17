<table id="rubric">
	<tr>
		<td>Grade 9</td>
		<td>Initials &#38; Date</td>
	</tr>
	<tr>
		<td class="title">Personal Information</td>
		<td></td>
		
	</tr>
	<tr>
	<?php
	
	$student_items = mysqli_query("SELECT * FROM Progress WHERE '$student_number_rubric' = student_number ");

while($student = mysqli_fetch_array($student_items))
  {
  if ($student['9a1']==1){ $ninea1 = "#F5F5A2"; }
  else if ($student['9a1']==2) {$ninea1 = "#CEFACD"; }
  else {$ninea1 = "#F7D2D2";}
   if ($student['9a2']==1){ $ninea2 = "#F5F5A2"; }
  else if ($student['9a2']==2) {$ninea2 = "#CEFACD"; }
  else {$ninea2 = "#F7D2D2";}
   if ($student['9a3']==1){ $ninea3 = "#F5F5A2"; }
  else if ($student['9a3']==2) {$ninea3 = "#CEFACD"; }
  else {$ninea3 = "#F7D2D2";}
  
   if ($student['9b1']==1){ $nineb1 = "#F5F5A2"; }
  else if ($student['9b1']==2) {$nineb1 = "#CEFACD"; }
  else {$nineb1 = "#F7D2D2";}
   if ($student['9b2']==1){ $nineb2 = "#F5F5A2"; }
  else if ($student['9b2']==2) {$nineb2 = "#CEFACD"; }
  else {$nineb2 = "#F7D2D2";}
   if ($student['9b3']==1){ $nineb3 = "#F5F5A2"; }
  else if ($student['9b3']==2) {$nineb3 = "#CEFACD"; }
  else {$nineb3 = "#F7D2D2";}
    if ($student['9b4']==1){ $nineb4 = "#F5F5A2"; }
  else if ($student['9b4']==2) {$nineb4 = "#CEFACD"; }
  else {$nineb4 = "#F7D2D2";}
  
   if ($student['9c1']==1){ $ninec1 = "#F5F5A2"; }
  else if ($student['9c1']==2) {$ninec1 = "#CEFACD"; }
  else {$ninec1 = "#F7D2D2";}
      
   if ($student['9d1']==1){ $nined1 = "#F5F5A2"; }
  else if ($student['9d1']==2) {$nined1 = "#CEFACD"; }
  else {$nined1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9a1.html';" style="background-color: <?php echo $ninea1; ?>">Why I took Sci-Tech</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9a2.html';" style="background-color: <?php echo $ninea2; ?>">My Future Goals (post secondary/career)</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9a3.html';" style="background-color: <?php echo $ninea3; ?>">Semester 1 and 2 Report Cards</td>
		<td></td>
		
	</tr><tr>
		<td class="title">Scitech Skills &#38; Knowledge Certifications</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9b1.html';" style="background-color: <?php echo $nineb1; ?>">Science Lab Notebook</td>
		<td onclick="unsetCookie('<?php echo $student_number; ?>');">Mark as signed</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9b2.html';" style="background-color: <?php echo $nineb2; ?>">Evidence of Science Fair</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9b3.html';" style="background-color: <?php echo $nineb3; ?>">Evidence of at least two completed technology projects (Pop Bottle Rocket, Sumo Robot, Pinhole Camera, CO2 Car, Adobe Flash Animation, etc.) with a completed reflection for each</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9b4.html';" style="background-color: <?php echo $nineb4; ?>">Passport to Safety certificate</td>
		<td></td>
		
	</tr>
	<tr>
		<td class="title">Community Work &#38; Extracurricular Involvement</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9c1.html';" style="background-color: <?php echo $ninec1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td></td>
		
	</tr>
	<tr>
		<td class="title">Extracurricular Sci-Tech Experiences</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/9/9d1.html';" style="background-color: <?php echo $nined1; ?>">At least one unique item about your SciTech experiences (i.e. SciTech Council, Regional Science Fair, contests &#38; competitions, Skills Canada, Rocketry, Robotics, Junior Solar Car) with a completed reflection(s).</td>
		<td></td>
		
	</tr>
	</table>
	<br />
	<table id="rubric">
	<tr>
		<td>Grade 10</td>
		<td>Initials &#38; Date</td>
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
  else {$tena1 = "#F7D2D2";}
   if ($student['10a2']==1){ $tena2 = "#F5F5A2"; }
  else if ($student['10a2']==2) {$tena2 = "#CEFACD"; }
  else {$tena2 = "#F7D2D2";}
   if ($student['10a3']==1){ $tena3 = "#F5F5A2"; }
  else if ($student['10a3']==2) {$tena3 = "#CEFACD"; }
  else {$tena3 = "#F7D2D2";}
  if ($student['10a4']==1){ $tena4 = "#F5F5A2"; }
  else if ($student['10a4']==2) {$tena4 = "#CEFACD"; }
  else {$tena4 = "#F7D2D2";}
  if ($student['10a5']==1){ $tena5 = "#F5F5A2"; }
  else if ($student['10a5']==2) {$tena5 = "#CEFACD"; }
  else {$tena5 = "#F7D2D2";}
  
   if ($student['10b1']==1){ $tenb1 = "#F5F5A2"; }
  else if ($student['10b1']==2) {$tenb1 = "#CEFACD"; }
  else {$tenb1 = "#F7D2D2";}
   if ($student['10b2']==1){ $tenb2 = "#F5F5A2"; }
  else if ($student['10b2']==2) {$tenb2 = "#CEFACD"; }
  else {$tenb2 = "#F7D2D2";}
   if ($student['10b3']==1){ $tenb3 = "#F5F5A2"; }
  else if ($student['10b3']==2) {$tenb3 = "#CEFACD"; }
  else {$tenb3 = "#F7D2D2";}
  
  
   if ($student['10c1']==1){ $tenc1 = "#F5F5A2"; }
  else if ($student['10c1']==2) {$tenc1 = "#CEFACD"; }
  else {$tenc1 = "#F7D2D2";}
      
   if ($student['10d1']==1){ $tend1 = "#F5F5A2"; }
  else if ($student['10d1']==2) {$tend1 = "#CEFACD"; }
  else {$tend1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a1.html';" style="background-color: <?php echo $tena1; ?>">Semester 1 and 2 report cards</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a2.html';" style="background-color: <?php echo $tena2; ?>">Employability learning skills "Who am I?"</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a3.html';" style="background-color: <?php echo $tena3; ?>">Career investigation summary (e.g. Career Cruising, Ontario Skills Passport, MyBlueprint.ca, Making My Way)</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a4.html';" style="background-color: <?php echo $tena4; ?>">Young Worker Awareness Program Certificate</td>
		<td></td>
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10a5.html';" style="background-color: <?php echo $tena5; ?>">Updated Resume and Cover Letter</td>
		<td></td>
	</tr>
	<tr>
		<td class="title" colspan="2">Scitech Skills &#38; Knowledge Certifications</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10b1.html';" style="background-color: <?php echo $tenb1; ?>">Science Lab Notebook</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10b2.html';" style="background-color: <?php echo $tenb2; ?>">Evidence of at least two completed technology projects (VEX Robotics, Lathe work, Milling work, Welding work, etc.) including reflections</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10b3.html';" style="background-color: <?php echo $tenb3; ?>">Passport to Safety certificate</td>
		<td></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Community Work &#38; Extracurricular Involvement</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10c1.html';" style="background-color: <?php echo $tenc1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Extracurricular Sci-Tech Experiences</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/10/10d1.html';" style="background-color: <?php echo $tend1; ?>">At least one unique item about your SciTech experiences that shows evidence of growth from the previous grade. Include a completed reflection(s).</td>
		<td></td>
		
	</tr>
</table>
<br />
<table id="rubric">
	<tr>
		<td>Grade 11</td>
		<td>Initials &#38; Date</td>
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
  else {$elevena1 = "#F7D2D2";}
   if ($student['11a2']==1){ $elevena2 = "#F5F5A2"; }
  else if ($student['11a2']==2) {$elevena2 = "#CEFACD"; }
  else {$elevena2 = "#F7D2D2";}
   if ($student['11a3']==1){ $elevena3 = "#F5F5A2"; }
  else if ($student['11a3']==2) {$elevena3 = "#CEFACD"; }
  else {$elevena3 = "#F7D2D2";}
  if ($student['11a4']==1){ $elevena4 = "#F5F5A2"; }
  else if ($student['11a4']==2) {$elevena4 = "#CEFACD"; }
  else {$elevena4 = "#F7D2D2";}
  if ($student['11a5']==1){ $elevena5 = "#F5F5A2"; }
  else if ($student['11a5']==2) {$elevena5 = "#CEFACD"; }
  else {$elevena5 = "#F7D2D2";}
  
   if ($student['11b1']==1){ $elevenb1 = "#F5F5A2"; }
  else if ($student['11b1']==2) {$elevenb1 = "#CEFACD"; }
  else {$elevenb1 = "#F7D2D2";}
   if ($student['11b2']==1){ $elevenb2 = "#F5F5A2"; }
  else if ($student['11b2']==2) {$elevenb2 = "#CEFACD"; }
  else {$elevenb2 = "#F7D2D2";}
   if ($student['11b3']==1){ $elevenb3 = "#F5F5A2"; }
  else if ($student['11b3']==2) {$elevenb3 = "#CEFACD"; }
  else {$elevenb3 = "#F7D2D2";}
   if ($student['11b4']==1){ $elevenb4 = "#F5F5A2"; }
  else if ($student['11b4']==2) {$elevenb4 = "#CEFACD"; }
  else {$elevenb4 = "#F7D2D2";}
  
   if ($student['11c1']==1){ $elevenc1 = "#F5F5A2"; }
  else if ($student['11c1']==2) {$elevenc1 = "#CEFACD"; }
  else {$elevenc1 = "#F7D2D2";}
      
   if ($student['11d1']==1){ $elevend1 = "#F5F5A2"; }
  else if ($student['11d1']==2) {$elevend1 = "#CEFACD"; }
  else {$elevend1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11a1.html';" style="background-color: <?php echo $elevena1; ?>">Post secondary career plan</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11a2.html';" style="background-color: <?php echo $elevena2; ?>">Semester 1 and 2 report cards</td>
		<td></td>
		
	</tr>
		<td class="title" colspan="2">Scitech Skills &#38; Knowledge Certifications</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11b1.html';" style="background-color: <?php echo $elevenb1; ?>">Avogadro Chemistry Contest - evidence</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11b2.html';" style="background-color: <?php echo $elevenb2; ?>">Science Lab Notebook</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11b3.html';" style="background-color: <?php echo $elevenb3; ?>">Passport to Safety certificate</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11b4.html';" style="background-color: <?php echo $elevenb4; ?>">Evidence of at least two completed technology projects including reflections</td>
		<td></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Community Work &#38; Extracurricular Involvement</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11c1.html';" style="background-color: <?php echo $elevenc1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Extracurricular Sci-Tech Experiences</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/11/11d1.html';" style="background-color: <?php echo $elevend1; ?>">At least one unique item about your SciTech experiences that shows evidence of growth from the previous grade. Include a completed reflection(s).</td>
		<td></td>
		
	</tr>
</table>
<br />
<table id="rubric">
	<tr>
		<td>Grade 12</td>
		<td>Initials &#38; Date</td>
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
  else {$twelvea1 = "#F7D2D2";}
   if ($student['12a2']==1){ $twelvea2 = "#F5F5A2"; }
  else if ($student['12a2']==2) {$twelvea2 = "#CEFACD"; }
  else {$twelvea2 = "#F7D2D2";}
   if ($student['12a3']==1){ $twelvea3 = "#F5F5A2"; }
  else if ($student['12a3']==2) {$twelvea3 = "#CEFACD"; }
  else {$twelvea3 = "#F7D2D2";}
  if ($student['12a4']==1){ $twelvea4 = "#F5F5A2"; }
  else if ($student['12a4']==2) {$twelvea4 = "#CEFACD"; }
  else {$twelvea4 = "#F7D2D2";}
  if ($student['12a5']==1){ $twelvea5 = "#F5F5A2"; }
  else if ($student['12a5']==2) {$twelvea5 = "#CEFACD"; }
  else {$twelvea5 = "#F7D2D2";}
  
   if ($student['12b1']==1){ $twelveb1 = "#F5F5A2"; }
  else if ($student['12b1']==2) {$twelveb1 = "#CEFACD"; }
  else {$twelveb1 = "#F7D2D2";}
   if ($student['12b2']==1){ $twelveb2 = "#F5F5A2"; }
  else if ($student['12b2']==2) {$twelveb2 = "#CEFACD"; }
  else {$twelveb2 = "#F7D2D2";}
   if ($student['12b3']==1){ $twelveb3 = "#F5F5A2"; }
  else if ($student['12b3']==2) {$twelveb3 = "#CEFACD"; }
  else {$twelveb3 = "#F7D2D2";}
   if ($student['12b4']==1){ $twelveb4 = "#F5F5A2"; }
  else if ($student['12b4']==2) {$twelveb4 = "#CEFACD"; }
  else {$twelveb4 = "#F7D2D2";}
  
   if ($student['12c1']==1){ $twelvec1 = "#F5F5A2"; }
  else if ($student['12c1']==2) {$twelvec1 = "#CEFACD"; }
  else {$twelvec1 = "#F7D2D2";}
      
   if ($student['12d1']==1){ $twelved1 = "#F5F5A2"; }
  else if ($student['12d1']==2) {$twelved1 = "#CEFACD"; }
  else {$twelved1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12a1.html';" style="background-color: <?php echo $twelvea1; ?>">Updated  Resume &amp; Cover Letter showcasing Employability/Learning Skills</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12a2.html';" style="background-color: <?php echo $twelvea2; ?>">Semester 1 and 2 report cards</td>
		<td></td>
		
	</tr>
		<td class="title" colspan="2">Scitech Skills &#38; Knowledge Certifications</td>
		
		</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12b1.html';" style="background-color: <?php echo $twelveb1; ?>">Chem13  News Chemistry Contest - evidence</td>
		<td></td>
		
	</tr>
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12b2.html';" style="background-color: <?php echo $twelveb2; ?>">Science Lab Notebook</td>
		<td></td>
		
	</tr>
		<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12b3.html';" style="background-color: <?php echo $twelveb3; ?>">Passport to Safety certificate</td>
		<td></td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12b4.html';" style="background-color: <?php echo $twelveb4; ?>">Evidence of at least two completed technology projects including reflections</td>
		<td></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Community Work &#38; Extracurricular Involvement</td>
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12c1.html';" style="background-color: <?php echo $twelvec1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Extracurricular Sci-Tech Experiences</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='users/<?php echo $student_number_rubric; ?>/12/12d1.html';" style="background-color: <?php echo $twelved1; ?>">At least one unique item about your SciTech experiences that shows evidence of growth from the previous grade. Include a completed reflection(s).</td>
		<td></td>
		
	</tr>
</table>