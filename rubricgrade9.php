<?php 
include 'connect_db.php'; ?>
<table id="rubric">
	<tr>
		<td>Grade 9</td>
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
  if ($student['9a1']==1){ $a1 = "#F5F5A2"; }
  else if ($student['9a1']==2) {$a1 = "#CEFACD"; }
  else if ($student['9a1']==3) {$a1 = "#B1C9FC"; }
  else {$a1 = "#F7D2D2";}
   if ($student['9a2']==1){ $a2 = "#F5F5A2"; }
  else if ($student['9a2']==2) {$a2 = "#CEFACD"; }
  else if ($student['9a2']==3) {$a2 = "#B1C9FC"; }
  else {$a2 = "#F7D2D2";}
   if ($student['9a3']==1){ $a3 = "#F5F5A2"; }
  else if ($student['9a3']==2) {$a3 = "#CEFACD"; }
  else if ($student['9a3']==3) {$a3 = "#B1C9FC"; }
  else {$a3 = "#F7D2D2";}
  
   if ($student['9b1']==1){ $b1 = "#F5F5A2"; }
  else if ($student['9b1']==2) {$b1 = "#CEFACD"; }
  else if ($student['9b1']==3) {$b1 = "#B1C9FC"; }
  else {$b1 = "#F7D2D2";}
   if ($student['9b2']==1){ $b2 = "#F5F5A2"; }
  else if ($student['9b2']==2) {$b2 = "#CEFACD"; }
  else if ($student['9b2']==3) {$b2 = "#B1C9FC"; }
  else {$b2 = "#F7D2D2";}
   if ($student['9b3']==1){ $b3 = "#F5F5A2"; }
  else if ($student['9b3']==2) {$b3 = "#CEFACD"; }
  else if ($student['9b3']==3) {$b3 = "#B1C9FC"; }
  else {$b3 = "#F7D2D2";}
    if ($student['9b4']==1){ $b4 = "#F5F5A2"; }
  else if ($student['9b4']==2) {$b4 = "#CEFACD"; }
  else if ($student['9b4']==3) {$b4 = "#B1C9FC"; }
  else {$b4 = "#F7D2D2";}
  
   if ($student['9c1']==1){ $c1 = "#F5F5A2"; }
  else if ($student['9c1']==2) {$c1 = "#CEFACD"; }
  else if ($student['9c1']==3) {$c1 = "#B1C9FC"; }
  else {$c1 = "#F7D2D2";}
      
   if ($student['9d1']==1){ $d1 = "#F5F5A2"; }
  else if ($student['9d1']==2) {$d1 = "#CEFACD"; }
  else if ($student['9d1']==3) {$d1 = "#B1C9FC"; }
  else {$d1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='?editrubric=91';" style="background-color: <?php echo $a1; ?>">Why I took Sci-Tech</td>
		<td><?php if ($a1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=92';" style="background-color: <?php echo $a2; ?>">My Future Goals (post secondary/career)</td>
		<td><?php if ($a2 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=93';" style="background-color: <?php echo $a3; ?>">Semester 1 and 2 Report Cards</td>
		<td><?php if ($a3 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr><tr>
		<td class="title" colspan="2">Scitech Skills &#38; Knowledge Certifications</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=94';" style="background-color: <?php echo $b1; ?>">Science Lab Notebook</td>
		<td><?php if ($b1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=95';" style="background-color: <?php echo $b2; ?>">Evidence of Science Fair</td>
		<td><?php if ($b2 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=96';" style="background-color: <?php echo $b3; ?>">Evidence of at least two completed technology projects (Pop Bottle Rocket, Sumo Robot, Pinhole Camera, CO2 Car, Adobe Flash Animation, etc.) with a completed reflection for each</td>
		<td><?php if ($b3 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=97';" style="background-color: <?php echo $b4; ?>">Passport to Safety certificate</td>
		<td><?php if ($b4 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Community Work &#38; Extracurricular Involvement</td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=98';" style="background-color: <?php echo $c1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td><?php if ($c1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Extracurricular Sci-Tech Experiences</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=99';" style="background-color: <?php echo $d1; ?>">At least one unique item about your SciTech experiences (i.e. SciTech Council, Regional Science Fair, contests &#38; competitions, Skills Canada, Rocketry, Robotics, Junior Solar Car) with a completed reflection(s).</td>
		<td><?php if ($d1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
</table>
