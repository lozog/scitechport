<?php 
include 'connect_db.php'; ?>
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
	$student_number = $_COOKIE['ID_my_site'];
	$student_items = mysqli_query($connection, "SELECT * FROM Progress WHERE '$student_number' = student_number ");

while($student = mysqli_fetch_array($student_items))
  {
  if ($student['10a1']==1){ $a1 = "#F5F5A2"; }
  else if ($student['10a1']==2) {$a1 = "#CEFACD"; }
  else if ($student['10a1']==3) {$a1 = "#B1C9FC"; }
  else {$a1 = "#F7D2D2";}
   if ($student['10a2']==1){ $a2 = "#F5F5A2"; }
  else if ($student['10a2']==2) {$a2 = "#CEFACD"; }
  else if ($student['10a2']==3) {$a2 = "#B1C9FC"; }
  else {$a2 = "#F7D2D2";}
   if ($student['10a3']==1){ $a3 = "#F5F5A2"; }
  else if ($student['10a3']==2) {$a3 = "#CEFACD"; }
  else if ($student['10a3']==3) {$a3 = "#B1C9FC"; }
  else {$a3 = "#F7D2D2";}
  if ($student['10a4']==1){ $a4 = "#F5F5A2"; }
  else if ($student['10a4']==2) {$a4 = "#CEFACD"; }
  else if ($student['10a4']==3) {$a4 = "#B1C9FC"; }
  else {$a4 = "#F7D2D2";}
  if ($student['10a5']==1){ $a5 = "#F5F5A2"; }
  else if ($student['10a5']==2) {$a5 = "#CEFACD"; }
  else if ($student['10a5']==3) {$a5 = "#B1C9FC"; }
  else {$a5 = "#F7D2D2";}
  
   if ($student['10b1']==1){ $b1 = "#F5F5A2"; }
  else if ($student['10b1']==2) {$b1 = "#CEFACD"; }
  else if ($student['10b1']==3) {$b1 = "#B1C9FC"; }
  else {$b1 = "#F7D2D2";}
   if ($student['10b2']==1){ $b2 = "#F5F5A2"; }
  else if ($student['10b2']==2) {$b2 = "#CEFACD"; }
  else if ($student['10b2']==3) {$b2 = "#B1C9FC"; }
  else {$b2 = "#F7D2D2";}
   if ($student['10b3']==1){ $b3 = "#F5F5A2"; }
  else if ($student['10b3']==2) {$b3 = "#CEFACD"; }
  else if ($student['10b3']==3) {$b3 = "#B1C9FC"; }
  else {$b3 = "#F7D2D2";}
  
  
   if ($student['10c1']==1){ $c1 = "#F5F5A2"; }
  else if ($student['10c1']==2) {$c1 = "#CEFACD"; }
  else if ($student['10c1']==3) {$c1 = "#B1C9FC"; }
  else {$c1 = "#F7D2D2";}
      
   if ($student['10d1']==1){ $d1 = "#F5F5A2"; }
  else if ($student['10c1']==2) {$c1 = "#CEFACD"; }
  else {$d1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='?editrubric=101';" style="background-color: <?php echo $a1; ?>">Semester 1 and 2 report cards</td>
		<td><?php if ($a1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=102';" style="background-color: <?php echo $a2; ?>">Employability learning skills "Who am I?"</td>
		<td><?php if ($a2 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=103';" style="background-color: <?php echo $a3; ?>">Career investigation summary (e.g. Career Cruising, Ontario Skills Passport, MyBlueprint.ca, Making My Way)</td>
		<td><?php if ($a3 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=104';" style="background-color: <?php echo $a4; ?>">Young Worker Awareness Program Certificate</td>
		<td><?php if ($a4 == "#B1C9FC") { echo "Signed"; }?></td>
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=105';" style="background-color: <?php echo $a5; ?>">Updated Resume and Cover Letter</td>
		<td><?php if ($a5 == "#B1C9FC") { echo "Signed"; }?></td>
	</tr>
	<tr>
		<td class="title" colspan="2">Scitech Skills &#38; Knowledge Certifications</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=106';" style="background-color: <?php echo $b1; ?>">Science Lab Notebook</td>
		<td><?php if ($b1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=107';" style="background-color: <?php echo $b2; ?>">Evidence of at least two completed technology projects (VEX Robotics, Lathe work, Milling work, Welding work, etc.) including reflections</td>
		<td><?php if ($b2 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=108';" style="background-color: <?php echo $b3; ?>">Passport to Safety certificate</td>
		<td><?php if ($b3 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Community Work &#38; Extracurricular Involvement</td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=109';" style="background-color: <?php echo $c1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td><?php if ($c1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Extracurricular Sci-Tech Experiences</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=1010';" style="background-color: <?php echo $d1; ?>">At least one unique item about your SciTech experiences that shows evidence of growth from the previous grade. Include a completed reflection(s).</td>
		<td><?php if ($d1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
</table>
