<?php 
include 'connect_db.php'; ?>
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
 if ($student['12a1']==1){ $a1 = "#F5F5A2"; }
  else if ($student['12a1']==2) {$a1 = "#CEFACD"; }
  else if ($student['12a1']==3) {$a1 = "#B1C9FC"; }
  else {$a1 = "#F7D2D2";}
   if ($student['12a2']==1){ $a2 = "#F5F5A2"; }
  else if ($student['12a2']==2) {$a2 = "#CEFACD"; }
  else if ($student['12a2']==3) {$a2 = "#B1C9FC"; }
  else {$a2 = "#F7D2D2";}
  
   if ($student['12b1']==1){ $b1 = "#F5F5A2"; }
  else if ($student['12b1']==2) {$b1 = "#CEFACD"; }
  else if ($student['12b1']==3) {$b1 = "#B1C9FC"; }
  else {$b1 = "#F7D2D2";}
   if ($student['12b2']==1){ $b2 = "#F5F5A2"; }
  else if ($student['12b2']==2) {$b2 = "#CEFACD"; }
  else if ($student['12b2']==3) {$b2 = "#B1C9FC"; }
  else {$b2 = "#F7D2D2";}
   if ($student['12b3']==1){ $b3 = "#F5F5A2"; }
  else if ($student['12b3']==2) {$b3 = "#CEFACD"; }
  else if ($student['12b3']==3) {$b3 = "#B1C9FC"; }
  else {$b3 = "#F7D2D2";}
   if ($student['12b4']==1){ $b4 = "#F5F5A2"; }
  else if ($student['12b4']==2) {$b4 = "#CEFACD"; }
  else if ($student['12b4']==3) {$b4 = "#B1C9FC"; }
  else {$b4 = "#F7D2D2";}
  
   if ($student['12c1']==1){ $c1 = "#F5F5A2"; }
  else if ($student['12c1']==2) {$c1 = "#CEFACD"; }
  else if ($student['12c1']==3) {$c1 = "#B1C9FC"; }
  else {$c1 = "#F7D2D2";}
      
   if ($student['12d1']==1){ $d1 = "#F5F5A2"; }
  else if ($student['12d1']==2) {$d1 = "#CEFACD"; }
  else if ($student['12d1']==3) {$d1 = "#B1C9FC"; }
  else {$d1 = "#F7D2D2";}
  }
   	?>
		<td onclick="location.href='?editrubric=121';" style="background-color: <?php echo $a1; ?>">Updated  Resume &amp; Cover Letter showcasing Employability/Learning Skills</td>
		<td><?php if ($a1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=122';" style="background-color: <?php echo $a2; ?>">Semester 1 and 2 report cards</td>
		<td><?php if ($a2 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
		<td class="title" colspan="2">Scitech Skills &#38; Knowledge Certifications</td>
		
		</tr>
	<tr>
		<td onclick="location.href='?editrubric=123';" style="background-color: <?php echo $b1; ?>">Chem13  News Chemistry Contest - evidence</td>
		<td><?php if ($b1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=124';" style="background-color: <?php echo $b2; ?>">Science Lab Notebook</td>
		<td><?php if ($b2 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
		<tr>
		<td onclick="location.href='?editrubric=125';" style="background-color: <?php echo $b3; ?>">Passport to Safety certificate</td>
		<td><?php if ($b3 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=126';" style="background-color: <?php echo $b4; ?>">Evidence of at least two completed technology projects including reflections</td>
		<td><?php if ($b4 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Community Work &#38; Extracurricular Involvement</td>
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=127';" style="background-color: <?php echo $c1; ?>">At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</td>
		<td><?php if ($c1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
	<tr>
		<td class="title" colspan="2">Extracurricular Sci-Tech Experiences</td>
		
		
	</tr>
	<tr>
		<td onclick="location.href='?editrubric=128';" style="background-color: <?php echo $d1; ?>">At least one unique item about your SciTech experiences that shows evidence of growth from the previous grade. Include a completed reflection(s).</td>
		<td><?php if ($d1 == "#B1C9FC") { echo "Signed"; }?></td>
		
	</tr>
</table>