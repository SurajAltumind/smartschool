<style type="text/css">
    *{padding: 0; margin:0;}
    body{ font-family: 'arial';}
    .tc-container{width: 100%;position: relative; text-align: center;padding: 2%;}
    .tc-container tr td{vertical-align: bottom;}
    /*.tc-container{
        width: 100%;
        padding: 2%;
        position: relative;
        z-index: 2;
    }*/
    .tcmybg {
        background:top center;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 1;
    }
    .tc-container tr td h1, h2 ,h3{margin-top: 0; font-weight: normal;}
    /*@media (max-width:210mm) and (min-width:297mm){
        .tc-container{
            margin-top: 200px;
            margin-bottom: 100px;}
    }*/
</style>
<?php
if (empty($marksheet)) {
?>
<div class="alert alter-info">
<?php echo $this->lang->line('no_record_found'); ?>
</div>
<?php
} else {

if ($marksheet['exam_connection'] == 0) {
if (!empty($marksheet['students'])) {
foreach ($marksheet['students'] as $student_key => $student_value) {
$percentage_total = 0;

?>
<style type="text/css">
@page {
padding: 0;
margin: 0;
}

body {
padding: 0;
margin: 0;
font-family: arial;
color: #000;
font-size: 15px;
line-height: normal;
}

.tableone {}

.tableone td {
border: 1px solid #000;
padding: 5px 0
}

.denifittable th {
border-top: 1px solid #999;
}

.denifittable th,
.denifittable td {
border-bottom: 1px solid #999;
border-collapse: collapse;
border-left: 1px solid #999;
}

.denifittable tr th {
padding: 10px 10px;
font-weight: normal;
}

.denifittable tr td {
padding: 10px 10px;
font-weight: bold;
}

.tcmybg {
background: top center;
background-size: 100% 100%;
position: absolute;
top: 0;
left: 0;
bottom: 0;
z-index: 1;
width: 100%;
height: 100%;
}

.tablemain {
position: relative;
z-index: 2
}
</style>

<div style="width: 100%; margin: 0 auto; border:1px solid #000; padding: 10px 5px 5px;position: relative; z-index: 2;">
<?php

if ($template->background_img != "") {
?>

<img src="<?php echo base_url('uploads/marksheet/' . $template->background_img); ?>" class="tcmybg" width="100%" height="100%" />
<?php
}
?>
<table cellpadding="0" cellspacing="0" width="100%" class="tablemain">
<?php
if ($template->heading != "" || $template->title != "") {
?>
<tr>


<td valign="top">
<table cellpadding="0" cellspacing="0" width="100%">

<?php
$templateId = $template->id;
if ($template->heading != "") {
?>

<?php
}
if ($template->title != "") {
?>

<?php
}
?>




</table>
</td>
</tr>
<?php
}
?>


</table>
</td>
</tr>


<?php
if ($template->is_admission_no || $template->is_roll_no || $template->is_photo) {
?>
<tr>
<td valign="top">

</td>
</tr>
<?php
}
?>

<tr>
<td valign="top">
<table  width="100%" class="" >


<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url('uploads/marksheet/' . $template->left_logo); ?>" style="height: 100px; width: 150px;"></td>
<td> <b valign="top" style="font-size: 30px; font-weight: bold; text-transform: uppercase;"><?php echo $template->heading; ?></br></b><b>&nbsp;<b style="font-size: 15px;">Thallada, Khammam District, Telangana</b></br>Ph. : +91 8885943802  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Email: admin@ksmbbv.com</b></br><b style="font-size: 22px;"></br><?php echo $template->exam_name; ?> <?php echo $exam->session; ?></b></br><center></center><b style="font-size: 22px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marksheet</b></td>
</tr>
</table>


<table cellpadding="0" cellspacing="0" width="100%" class="" style="    margin-top: 28px;">
<tr>
<?php
if ($template->is_admission_no) {
?>
<td valign=" top" style="text-transform: uppercase; padding-bottom: 15px;padding-left: 90px;"></br>ADMISSION NO<span style="padding-left: 40px; font-weight: bold;"><?php echo $student_value['admission_no']; ?></span></td>

<?php } ?>
<?php
if ($template->is_roll_no) {
?>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;"></br>ROLL NUMBER<span style="padding-left: 30px; font-weight: bold;"><?php echo $student_value['exam_roll_no']; ?></span></td>
<?php } ?>
</tr>


<tr>
<?php
if ($template->is_name) {
?>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;padding-left: 90px;"><?php echo $this->lang->line('name_prefix'); ?><span style="padding-left: 40px; font-weight: bold;"><?php echo $student_value['firstname'] . " " . $student_value['lastname']; ?></span></td>
<?php } ?>

<?php
if ($template->is_father_name) {
?>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;">FATHER NAME<span style="padding-left: 30px; font-weight: bold;"><?php echo $student_value['father_name']; ?></span></td>
<?php } ?>
</tr>
<tr>
<?php
if ($template->is_mother_name) {
?>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;padding-left: 90px;"><?php echo $this->lang->line('exam_mother_name'); ?><span style="padding-left: 40px; font-weight: bold;"><?php echo $student_value['mother_name']; ?></span></td>
<?php } ?>

<?php
if ($template->is_class && $template->is_section) {
$studentClass = $student_value['class'];
?>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;"><?php echo $this->lang->line('class'); ?><span style="padding-left: 30px; font-weight: bold;"><?php echo $student_value['class'] . " (" . $student_value['section'] . ")"; ?> </span></td>
<?php } ?>
</tr>

<?php


if ($template->school_name != "") {
?>
<tr>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;"> <?php echo $this->lang->line('school_name'); ?><span style="padding-left: 30px; font-weight: bold;"><?php echo $template->school_name; ?></span></td>
</tr>
<?php
}
?>
<?php
if ($template->exam_center != "") {
?>
<tr>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;"><?php echo $this->lang->line('exam') . " " . $this->lang->line('center') ?><span style="text-transform: uppercase; padding-top: 15px; font-weight: bold; padding-bottom: 20px; padding-left: 30px;"><?php echo $template->exam_center; ?></span></td>

</tr>
<?php
}
?>
<?php
if ($template->content != "") {
?>
<tr>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px; line-height: normal;"><?php echo $template->content ?></td>
</tr>
<?php
}
?>



</table>
</td>
</tr>
<tr>

<td valign="top">
<?php
if (!empty($student_value['exam_result'])) {
?>
<table style="width: 100%; margin-top: 10px; font-size: 0.8em;" border="1px" cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="text-align: center;">
<thead>

<?php
if ($exam->exam_group_type == "gpa") {
?>
<tr>
<th><?php echo $this->lang->line('subjects') ?></th>
<th valign="middle" rowspan="2"><?php echo $this->lang->line('max') . " " . $this->lang->line('marks') ?></th>
<th valign="middle" rowspan="2"><?php echo $this->lang->line('min') . " " . $this->lang->line('marks') ?></th>
<th valign="middle" rowspan="2"><?php echo $this->lang->line('marks') . " " . $this->lang->line('obtained') ?></th>
<th valign="top" style="text-align: left;border-right:1px solid #999"><?php echo $this->lang->line('remark') ?></th>

</tr>

<?php
} else if ($exam->exam_group_type != "gpa") {
?>


<?php
if ($studentClass == "Class 6" or $studentClass == "Class 7" or $studentClass == "Class 8" or $studentClass == "Class 9" or $studentClass == "Class 10") {
if ($templateId == 1) {


?>     
<tr style="    background-color: #72f1ee;font-size: 15px;">
<th rowspan="2"><b><?php echo $this->lang->line('subjects') ?></b></th>
<th style="padding:2.5px;" colspan="2"><b>Reading Skills </b></br></br>5</th>
<th style="padding:2.5px;" colspan="2"><b>Writing Skills </b></br></br>5</th>
<th style="padding:2.5px;" colspan="2"><b>Project Work </b></br></br>5</th>
<th style="padding:2.5px;" colspan="2"><b>Slip Test </b></br></br>5</th>
<th><b>Total Marks</br></br>20</b></th>
<th><b>Grade</b></th>
<th><b>Grade Point</b></th>
<th><b>Remarks</b></th>
</tr>
<?php }

if ($templateId == 2) {
?>
<tr style="    background-color: #72f1ee;font-size: 15px;">
<th style="padding:2.5px;" rowspan="2"><?php echo $this->lang->line('subjects') ?></th>
<th style="padding:2.5px;">SA-II Marks </br></br>50/80</th>
<th style="padding:2.5px;">FA3 + FA4</br></br>20 M</th>
<th style="padding:2.5px;">Total </br></br>100 M</th>
<th style="padding:2.5px;">GRADE </br></br></th>
<th style="padding:2.5px;">GRADE POINTS </br></br></th>
<th style="padding:2.5px;">Remark </br></br></th>
</tr>
<?php
}
} ?>


<?php

if ($studentClass == "Class 1" or $studentClass == "Class 2" or $studentClass == "Class 3" or $studentClass == "Class 4" or $studentClass == "Class 5") {
if ($templateId == 1) {
?>
<tr style="    background-color: #72f1ee;    font-size: 15px;">
<th style="padding:2.5px;" rowspan="2"><b><?php echo $this->lang->line('subjects') ?></b></th>
<th style="padding:2.5px;"><b>Reading Skills </br></br>10</b></th>
<th style="padding:2.5px;"><b>Writing Skills </br></br>10</b></th>
<th style="padding:2.5px;"><b>Project Work </br></br>10</b></th>
<th style="padding:2.5px;"><b>Slip Test </br></br>20</b></th>
<th><b>Total Marks </br></br>50</b></th>
<th><b>Grade</b></th>
<th><b>Remarks</b></th>
</tr>
<?php
}


if ($templateId == 2) {
?>
<tr style="    background-color: #72f1ee;    font-size: 15px;">
<th style="padding:2.5px;" rowspan="2"><?php echo $this->lang->line('subjects') ?></th>
<th style="padding:2.5px;">SA -II Marks </br></br>50/80</th>
<th style="padding:2.5px;">FA3 + FA4</br></br>20 M</th>
<th style="padding:2.5px;">Total </br></br>100 M</th>
<th style="padding:2.5px;">GRADE </br></br></th>
<th style="padding:2.5px;">Remark </br></br></th>
</tr>

<?php }

if ($templateId == 3) {
?>
<tr style="    background-color: #72f1ee;    font-size: 15px;">
<th style="padding:2.5px;" rowspan="2"><b><?php echo $this->lang->line('subjects') ?></b></th>
<th><b>Total Marks</br></br>50</b></th>
<th><b>Grade</b></th>
<th><b>Remarks</b></th>
</tr>
<?php
}


if ($templateId == 4) {
?>
<tr style="    background-color: #72f1ee;">
<th><b>SCHOLASTIC AREA</b></th>
<th colspan="4"><b>TERM I</b></th>
<th colspan="4"><b>TERM II</b></th>
<th><b>OVERALL</b></th> 
</tr>

<tr style="background-color: #72f1ee;">
<th style="padding:2.5px;" rowspan="2"><b><?php echo $this->lang->line('subjects') ?></b></th>
<th><b>FA-I</b></th>
<th><b>FA-II</b></th>
<th><b>Total</b></th>
<th><b>Grade</b></th>

<th><b>SA-I</b></th>
<th><b>SA-II</b></th>
<th><b>Total</b></th>
<th><b>Grade</b></th>
<th><b>Tearm 1 + Tearm 2 </b></th>



</tr>
<?php
}
?>

<?php
}
?>



<tr style="font-size: 15px;">
<?php
if ($studentClass == "Class 6" or $studentClass == "Class 7" or $studentClass == "Class 8" or $studentClass == "Class 9" or $studentClass == "Class 10") {
if ($templateId == 1) {
?>
<th>M</th>
<th>G</th>
<th>M</th>
<th>G</th>
<th>M</th>
<th>G</th>
<th>M</th>
<th>G</th>
<th></th>
<th></th>
<th></th>
<th></th>
<?php }
} ?>


<?php
if ($studentClass == "Class 1" or $studentClass == "Class 2" or $studentClass == "Class 3" or $studentClass == "Class 4" or $studentClass == "Class 5") {
if ($templateId == 1) {
?>
<th>M</th>
<th>M</th>
<th>M</th>
<th>M</th>
<th></th>
<th></th>
<th></th>
<?php } ?>




<?php  } ?>
</tr>
<?php
}

if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
?>
<!-- <tr>
<th><?php echo $this->lang->line('subjects') ?></th>
<th><?php echo $this->lang->line('grade'); ?></th>
<th valign="top" style="text-align: left;border-right:1px solid #999"><?php echo $this->lang->line('remark') ?></th>

</tr> -->
<?php
}
?>

</thead>
<tbody>
<?php
$total_max_marks = 0;
$total_obtain_marks = 0;
$total_points = 0;
$total_hours = 0;
$total_quality_point = 0;
$result_status = 1;
$absent_status = false;
foreach ($student_value['exam_result'] as $exam_result_key => $exam_result_value) {
$total_max_marks = $total_max_marks + $exam_result_value->max_marks;
$total_obtain_marks = $total_obtain_marks + $exam_result_value->get_marks;

?>
<tr style="font-size: 15px;">
<?php
if ($templateId != 4) {
?>
<td>
<?php echo $exam_result_value->name . "(" . $exam_result_value->code . ")"; ?>

</td>
<?php } ?>

<?php
if ($exam->exam_group_type == "gpa") {
?>
<td>
<?php echo $exam_result_value->max_marks; ?>
</td>
<td>
<?php echo $exam_result_value->min_marks; ?>
</td>
<td>
<?php
echo $exam_result_value->get_marks;
if ($exam_result_value->attendence == "absent") {
echo "&nbsp;" . $this->lang->line('exam_absent');
$absent_status = true;
}
if ($exam_result_value->get_marks < $exam_result_value->min_marks) {
$result_status = 0;
}
?>
</td>
<?php
} else if ($exam->exam_group_type != "gpa") {
?>
<?php
if ($studentClass == "Class 6" or $studentClass == "Class 7" or $studentClass == "Class 8" or $studentClass == "Class 9" or $studentClass == "Class 10") {
if ($templateId == 1) {

?>
<th style="font-size: 15px;"><?php echo $readingMark = $exam_result_value->reading_marks; ?></th>
<th style="font-size: 15px;">
<?php
if ($readingMark >= 4.6 and $readingMark <= 5) {
echo "A1";
}
if ($readingMark >= 4.1 and $readingMark <= 4.5) {
echo "A2";
}
if ($readingMark >= 3.6 and $readingMark <= 4.0) {
echo "B1";
}
if ($readingMark >= 3.1 and $readingMark <= 3.5) {
echo "B2";
}
if ($readingMark >= 2.6 and $readingMark <= 3.0) {
echo "C1";
}
if ($readingMark >= 2.1 and $readingMark <= 2.5) {
echo "C2";
}
if ($readingMark >= 1.6 and $readingMark <= 2) {
echo "D";
}
if ($readingMark <= 1.5) {
echo "E";
}
?>
</th>
<th style="font-size: 15px;"><?php echo $writing_marks = $exam_result_value->writing_marks; ?></th>
<th style="font-size: 15px;">
<?php
if ($writing_marks >= 4.6 and $writing_marks <= 5) {
echo "A1";
}
if ($writing_marks >= 4.1 and $writing_marks <= 4.5) {
echo "A2";
}
if ($writing_marks >= 3.6 and $writing_marks <= 4.0) {
echo "B1";
}
if ($writing_marks >= 3.1 and $writing_marks <= 3.5) {
echo "B2";
}
if ($writing_marks >= 2.6 and $writing_marks <= 3.0) {
echo "C1";
}
if ($writing_marks >= 2.1 and $writing_marks <= 2.5) {
echo "C2";
}
if ($writing_marks >= 1.6 and $writing_marks <= 2) {
echo "D";
}
if ($writing_marks <= 1.5) {
echo "E";
}
?>
</th>
<th style="font-size: 15px;"><?php echo $project_marks = $exam_result_value->project_marks; ?></th>
<th style="font-size: 15px;">
<?php
if ($project_marks >= 4.6 and $project_marks <= 5) {
echo "A1";
}
if ($project_marks >= 4.1 and $project_marks <= 4.5) {
echo "A2";
}
if ($project_marks >= 3.6 and $project_marks <= 4.0) {
echo "B1";
}
if ($project_marks >= 3.1 and $project_marks <= 3.5) {
echo "B2";
}
if ($project_marks >= 2.6 and $project_marks <= 3.0) {
echo "C1";
}
if ($project_marks >= 2.1 and $project_marks <= 2.5) {
echo "C2";
}
if ($project_marks >= 1.6 and $project_marks <= 2) {
echo "D";
}
if ($project_marks <= 1.5) {
echo "E";
}
?>
</th>
<th style="font-size: 15px;"><?php echo $sliptest_marks = $exam_result_value->sliptest_marks; ?></th>
<th style="font-size: 15px;">
<?php
if ($sliptest_marks >= 4.6 and $sliptest_marks <= 5) {
echo "A1";
}
if ($sliptest_marks >= 4.1 and $sliptest_marks <= 4.5) {
echo "A2";
}
if ($sliptest_marks >= 3.6 and $sliptest_marks <= 4.0) {
echo "B1";
}
if ($sliptest_marks >= 3.1 and $sliptest_marks <= 3.5) {
echo "B2";
}
if ($sliptest_marks >= 2.6 and $sliptest_marks <= 3.0) {
echo "C1";
}
if ($sliptest_marks >= 2.1 and $sliptest_marks <= 2.5) {
echo "C2";
}
if ($sliptest_marks >= 1.6 and $sliptest_marks <= 2) {
echo "D";
}
if ($sliptest_marks <= 1.5) {
echo "E";
}
?>

</th>
<th style="font-size: 15px;"><?php // $getMark = $exam_result_value->get_marks;

echo $getMark = $readingMark + $writing_marks + $project_marks + $sliptest_marks;

$totalSumGetMarks = $totalSumGetMarks + $getMark;
?></th>
<th style="font-size: 15px;">
<?php
if ($getMark >= 18.5 and $getMark <= 20) {
echo $totalGrade = "A1";
$totalGradePoint = 10;
}
if ($getMark >= 16.5 and $getMark <= 18) {
echo $totalGrade = "A2";
$totalGradePoint = 9;
}
if ($getMark >= 14.5 and $getMark <= 16) {
echo $totalGrade = "B1";
$totalGradePoint = 8;
}
if ($getMark >= 12.5 and $getMark <= 14) {
echo $totalGrade = "B2";
$totalGradePoint = 7;
}
if ($getMark >= 10.5 and $getMark <= 12) {
echo $totalGrade = "C1";
$totalGradePoint = 6;
}
if ($getMark >= 8.5 and $getMark <= 10) {
echo $totalGrade = "C2";
$totalGradePoint = 5;
}
if ($getMark >= 7 and $getMark <= 8) {
echo $totalGrade = "D";
$totalGradePoint = 4;
}
if ($getMark < 7) {
echo $totalGrade = "E";
$totalGradePoint = 3;
}
?></th>

<th style="font-size: 15px;"><?php
if (!empty($totalGradePoint)) {
echo $totalGradePoint;
}
?></th>

<?php
}
if ($templateId == 2) {
?>
<th style="font-size: 15px;"><?php echo $summative_exam_marks = $exam_result_value->summative_exam_marks; ?></th>

<th style="font-size: 15px;"><?php echo $faone_fatwo_marks = $exam_result_value->faone_fatwo_marks; ?></th>

<th style="font-size: 15px;"><?php echo $get_marks_summative_higherclass = $summative_exam_marks+$faone_fatwo_marks; ?></th>
<!---Column sum of summative marks-------->
<th style="font-size: 15px;">
<?php

if ($get_marks_summative_higherclass >= 91 and $get_marks_summative_higherclass <= 100) {
    echo $totalMarksGrade2 = "A1";
  
    }
    if ($get_marks_summative_higherclass >= 81 and $get_marks_summative_higherclass <= 90) {
    echo $totalMarksGrade2 = "A2";
 
    }
    if ($get_marks_summative_higherclass >= 71 and $get_marks_summative_higherclass <= 80) {
    echo $totalMarksGrade2 = "B1";
    
    }
    if ($get_marks_summative_higherclass >= 61 and $get_marks_summative_higherclass <= 70) {
    echo $totalMarksGrade2 = "B2";

    }
    if ($get_marks_summative_higherclass >= 51 and $get_marks_summative_higherclass <= 60) {
    echo $totalMarksGrade2 = "C1";
    
    }
    if ($get_marks_summative_higherclass >= 41 and $get_marks_summative_higherclass <= 50) {
    echo $totalMarksGrade2 = "C2";
    
    }
    if ($get_marks_summative_higherclass >= 35 and $get_marks_summative_higherclass <= 40) {
    echo $totalMarksGrade2 = "D";
   
    }
    if ($get_marks_summative_higherclass >= 0 and $get_marks_summative_higherclass <= 34) {
    echo $totalMarksGrade2 = "E";
   
    }

$totalSumResult = $get_marks_summative_higherclass + $totalSumResult;
?>
</th>
<th style="font-size: 15px;">
<?php
if ($get_marks_summative_higherclass >= 91 and $get_marks_summative_higherclass <= 100) {

echo $totalGradePointSumativeHigher = 10;
}
if ($get_marks_summative_higherclass >= 81 and $get_marks_summative_higherclass <= 90) {

echo $totalGradePointSumativeHigher = 9;
}
if ($get_marks_summative_higherclass >= 71 and $get_marks_summative_higherclass <= 80) {

echo $totalGradePointSumativeHigher = 8;
}
if ($get_marks_summative_higherclass >= 61 and $get_marks_summative_higherclass <= 70) {

echo $totalGradePointSumativeHigher = 7;
}
if ($get_marks_summative_higherclass >= 51 and $get_marks_summative_higherclass <= 60) {

echo  $totalGradePointSumativeHigher = 6;
}
if ($get_marks_summative_higherclass >= 41 and $get_marks_summative_higherclass <= 50) {

echo  $totalGradePointSumativeHigher = 5;
}
if ($get_marks_summative_higherclass >= 35 and $get_marks_summative_higherclass <= 40) {

echo $totalGradePointSumativeHigher = 4;
}
if ($get_marks_summative_higherclass >= 0 and $get_marks_summative_higherclass <= 34) {

echo $totalGradePointSumativeHigher = 3;
}

$totalhigherGradeSummative = $totalGradePointSumativeHigher + $totalhigherGradeSummative;
?>
</th>
<?php
}
}



if ($studentClass == "Class 1" or $studentClass == "Class 2" or $studentClass == "Class 3" or $studentClass == "Class 4" or $studentClass == "Class 5") {



if ($templateId == 3) {
?>
<?php
$DefaultGetMarks = $exam_result_value->get_marks;
$readingMark = $exam_result_value->reading_marks;
$writing_marks = $exam_result_value->writing_marks;
$project_marks = $exam_result_value->project_marks;
$sliptest_marks = $exam_result_value->sliptest_marks;
if (empty($DefaultGetMarks)) {
$defaultGetMarks = $readingMark + $writing_marks + $project_marks + $sliptest_marks;
}
if (!empty($DefaultGetMarks)) {
$defaultGetMarks = $DefaultGetMarks;
}
$totalDefaultGetMarks = $defaultGetMarks + $totalDefaultGetMarks;
?>
<th style="font-size: 15px;"><?php echo $defaultGetMarks; ?></th>
<th>
<?php
if ($defaultGetMarks >= 45.5 and $defaultGetMarks <= 50) {
echo $DefaultGetMarks = "A+";
}
if ($defaultGetMarks >= 35.5 and $defaultGetMarks <= 45) {
echo $DefaultGetMarks = "A";
}
if ($defaultGetMarks >= 25.5 and $defaultGetMarks <= 35) {
echo $DefaultGetMarks = "B+";
}
if ($defaultGetMarks >= 20.5 and $defaultGetMarks <= 25) {
echo $DefaultGetMarks = "B";
}
if ($defaultGetMarks >= 1 and $defaultGetMarks <= 20) {
echo $DefaultGetMarks = "C";
}

?></th>


<?php
}


if ($templateId == 1) {
?>
<th style="font-size: 15px;"><?php echo $readingMark = $exam_result_value->reading_marks; ?></th>

<th style="font-size: 15px;"><?php echo $writing_marks = $exam_result_value->writing_marks; ?></th>

<th style="font-size: 15px;"><?php echo $project_marks = $exam_result_value->project_marks; ?></th>

<th style="font-size: 15px;"><?php echo $sliptest_marks = $exam_result_value->sliptest_marks; ?></th>

<th style="font-size: 15px;"><?php


//$getMark = $exam_result_value->get_marks;

echo $getMark = $readingMark + $writing_marks + $project_marks + $sliptest_marks;

$totalSumGetMarks = $totalSumGetMarks + $getMark;
?></th>
<th style="font-size: 15px;">
<?php
if ($getMark >= 45.5 and $getMark <= 50) {
echo $totalGrade = "A+";
}
if ($getMark >= 35.5 and $getMark <= 45) {
echo $totalGrade = "A";
}
if ($getMark >= 25.5 and $getMark <= 35) {
echo $totalGrade = "B+";
}
if ($getMark >= 20.5 and $getMark <= 25) {
echo $totalGrade = "B";
}
if ($getMark >= 1 and $getMark <= 20) {
echo $totalGrade = "C";
}

?></th>

<!--<th><?php
//if (!empty($totalGradePoint)) {
//   echo $totalGradePoint;
// }
?></th>-->

<?php
}



if ($templateId == 2) {
?>
<th style="font-size: 15px;"><?php
echo  $summative_exam_marks = $exam_result_value->summative_exam_marks;
$faone_fatwo_marks2 = $exam_result_value->faone_fatwo_marks;
?></th>
<?php
foreach ($student_value['formativeexamstotal'] as $exam_result_key => $exam_result_value9) {

$faone_fatwo_marks_total = $exam_result_value9->TotalMarks;
$examBatchExamStudent2 = $exam_result_value9->exam_group_class_batch_exam_student_id;

$exam_group_class_batch_exam_student_id  = $exam_result_value9->exam_group_class_batch_exam_student_id;
$exam_group_class_batch_exam_subject_id  = $exam_result_value9->exam_group_class_batch_exam_subject_id;

?>
<th style="font-size: 15px;"><?php  echo $faone_fatwo_marks2; ?><?php $examBatchExamStudent2; ?><?php $exam_group_class_batch_exam_student_id; ?><?php $exam_group_class_batch_exam_subject_id; ?></th>
<?php } ?>

<th style="font-size: 15px;"><?php echo $get_marks = $summative_exam_marks+$faone_fatwo_marks2; ?></th>

<th style="font-size: 15px;">
<?php
if ($get_marks >= 91 and $get_marks <= 100) {
echo "A+";
}
if ($get_marks >= 71 and $get_marks <= 90) {
echo "A";
}
if ($get_marks >= 51 and $get_marks <= 70) {
echo "B+";
}
if ($get_marks >= 41 and $get_marks <= 50) {
echo "B";
}
if ($get_marks >= 0 and $get_marks <= 40) {
echo "C";
}
$totalSumResult = $get_marks + $totalSumResult;
?>
</th>
<?php
}
}
}

if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
?>
<!-- <td>

<?php
// $percentage_grade = ($exam_result_value->get_marks * 100) / $exam_result_value->max_marks;
// echo findGrade($exam_grades, $percentage_grade);
?>
</td> -->
<?php
}
if ($templateId!= 4) {
?>
<td valign="top" style="text-align: left;border-right:1px solid #999">
<?php
if ($exam->exam_group_type == "basic_system") {
if ($exam_result_value->get_marks < $exam_result_value->min_marks) {
$result_status = 0;
echo "(F) ";
}
}
echo $exam_result_value->note;
?>
</td>
<?php } ?>
</tr>
<?php
}


if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
if ($templateId == 4) {
if ($studentClass == "Class 1" or $studentClass == "Class 2" or $studentClass == "Class 3" or $studentClass == "Class 4" or $studentClass == "Class 5") 
{
foreach ($student_value['AnnualMarksheet'] as $exam_result_key => $exam_result_AnnualMarks) 
{
?>
<tr>
<td><?php echo $exam_result_AnnualMarks->name . "(" . $exam_result_AnnualMarks->code . ")"; ?></td> 
<td><?php  echo $AnnualFA1Marks = $exam_result_AnnualMarks->formativeOneTotal; ?></td>
<td><?php  echo $AnnualSA1Marks = $exam_result_AnnualMarks->summativeOneTotal; ?> </td>
<td><?php echo $term1_total=$AnnualFA1Marks+$AnnualSA1Marks; ?></td>
<td>
<?php
if ($term1_total >= 91 and $term1_total <= 100) {
echo "A+";
}
if ($term1_total >= 71 and $term1_total <= 90) {
echo "A";
}
if ($term1_total >= 51 and $term1_total <= 70) {
echo "B+";
}
if ($term1_total >= 41 and $term1_total <= 50) {
echo "B";
}
if ($term1_total >= 0  and $term1_total <= 40) {
echo "C";
}
?>

</td>

<td><?php  echo $AnnualFA2Marks = $exam_result_AnnualMarks->formativeTwoTotal; ?></td>
<td><?php  echo $AnnualSA2Marks = $exam_result_AnnualMarks->summativeTwoTotal; ?> </td>
<td><?php echo $term2_total=$AnnualFA2Marks+$AnnualSA2Marks; ?></td>
<td>
<?php
if ($term2_total >= 91 and $term2_total <= 100) {
echo "A+";
}
if ($term2_total >= 71 and $term2_total <= 90) {
echo "A";
}
if ($term2_total >= 51 and $term2_total <= 70) {
echo "B+";
}
if ($term2_total >= 41 and $term2_total <= 50) {
echo "B";
}
if ($term2_total >= 0  and $term2_total <= 40) {
echo "C";
}
?>
</td>

<td><center><?php echo $grandTotal=$term1_total+$term2_total;
$GrandTotalSum=$grandTotal+$GrandTotalSum;
?></center></td>
</tr>
<?php
}
}
}
}
?>


<?php
if ($exam->exam_group_type == "gpa") {
?>
<tr>
<td></td>
<td>
<?php echo number_format($total_max_marks, 2, '.', ''); ?>
</td>
<td><?php echo $this->lang->line('grand_total') ?></td>
<td>

<?php echo number_format($total_obtain_marks, 2, '.', ''); ?>
</td>
<td valign="top" style="text-align: left;border-right:1px solid #999">


</td>
<?php
if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
?>
<td valign="top" style="text-align: left;border-right:1px solid #999"></td>
<?php
}
?>

</tr>
<tr>
<td><?php echo $this->lang->line('percentage') ?></td>
<td>
<?php
echo number_format((($total_obtain_marks * 100) / $total_max_marks), 2, '.', '');

$percentage_total = (($total_obtain_marks * 100) / $total_max_marks);
?>
</td>
<td>
<?php
if ($exam->exam_group_type == "basic_system") {
?>
<?php echo $this->lang->line('result') ?>
<?php
}
?>

</td>

<td>
<?php
if ($exam->exam_group_type == "basic_system") {
if ($result_status == 0) {
echo $this->lang->line('fail');
}
if ($result_status == 1) {
echo $this->lang->line('pass');
}
}
?>

</td>

<td valign="top" style="text-align: left;border-right:1px solid #999"></td>
<?php
if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
?>
<td valign="top" style="text-align: left;border-right:1px solid #999"></td>
<?php
}
?>

</tr>
<?php
} else if ($exam->exam_group_type != "gpa") {
?>
<tr>
<?php
if ($studentClass == "Class 6" or $studentClass == "Class 7" or $studentClass == "Class 8" or $studentClass == "Class 9" or $studentClass == "Class 10") {
if ($templateId == 1) {
?>
<td colspan="9">Total Marks</td>
<td>
<center><b><?php echo $totalSumGetMarks; 
if ($studentClass == "Class 6" or $studentClass == "Class 7")
{
$marksPer=$totalSumGetMarks / 120 * 100;
}
if ($studentClass == "Class 8" or $studentClass == "Class 9"or $studentClass == "Class 10")
{
$marksPer=$totalSumGetMarks / 140 * 100;
}
?></b></center>
</td>
<td>
<center><b>
<?php
if ($marksPer >= 91 and $marksPer <= 100) {
echo $totalGradeSum = "A1";
$totalGradePointSum = 10;
}
if ($marksPer >= 81 and $marksPer <= 90) {
echo $totalGradeSum = "A2";
$totalGradePointSum = 9;
}
if ($marksPer >= 71 and $marksPer <= 80) {
echo $totalGradeSum = "B1";
$totalGradePointSum = 8;
}
if ($marksPer >= 61 and $marksPer <= 70) {
echo $totalGradeSum = "B2";
$totalGradePointSum = 7;
}
if ($marksPer >= 51 and $marksPer <= 60) {
echo $totalGradeSum = "C1";
$totalGradePointSum = 6;
}
if ($marksPer >= 41 and $marksPer <= 50) {
echo $totalGradeSum = "C2";
$totalGradePointSum = 5;
}
if ($marksPer >= 35 and $marksPer <= 40) {
echo $totalGradeSum = "D";
$totalGradePointSum = 4;
}
if ($marksPer >= 0 and $marksPer <= 34) {
echo $totalGradeSum = "E";
$totalGradePointSum = 3;
}
?>
</b></center>
</td>
<td><b>
<center><?php echo $totalGradePointSum; ?>
</b></center>
</td>
<td><?php  
if ($studentClass == "Class 6" or $studentClass == "Class 7")
{
$calPerc=$totalSumGetMarks/120*100;
} 
if ($studentClass == "Class 8" or $studentClass == "Class 9"or $studentClass == "Class 10")
{
    $calPerc=$totalSumGetMarks/120*100;    
}    
echo $roundPerc=round($calPerc);
?> %</td>
<?php }


if ($templateId == 2) {
?>
<td colspan="3">Total Marks</td>
<td>
<center><?php echo $totalSumResult; ?><center><!---Total sum for summative marks--->
</td>
<td>
<center><?php
if ($studentClass == "Class 6" or $studentClass == "Class 7")
{
$percentageSummativeeighttoten = $totalSumResult / 600 * 100;

$twoDecimalPercentage = number_format((float)$percentageSummativeeighttoten, 2, '.', '');


if ($twoDecimalPercentage >= 91 and $twoDecimalPercentage <= 100) {
    echo $totalMarksGrade = "A1";
    $totalGradePointSum = 10;
    }
    if ($twoDecimalPercentage >= 81 and $twoDecimalPercentage <= 90) {
    echo $totalMarksGrade = "A2";
    $totalGradePointSum = 9;
    }
    if ($twoDecimalPercentage >= 71 and $twoDecimalPercentage <= 80) {
    echo $totalMarksGrade = "B1";
    $totalGradePointSum = 8;
    }
    if ($twoDecimalPercentage >= 61 and $twoDecimalPercentage <= 70) {
    echo $totalMarksGrade = "B2";
    $totalGradePointSum = 7;
    }
    if ($twoDecimalPercentage >= 51 and $twoDecimalPercentage <= 60) {
    echo $totalMarksGrade = "C1";
    $totalGradePointSum = 6;
    }
    if ($twoDecimalPercentage >= 41 and $twoDecimalPercentage <= 50) {
    echo $totalMarksGrade = "C2";
    $totalGradePointSum = 5;
    }
    if ($twoDecimalPercentage >= 35 and $twoDecimalPercentage <= 40) {
    echo $totalMarksGrade = "D";
    $totalGradePointSum = 4;
    }
    if ($twoDecimalPercentage >= 0 and $twoDecimalPercentage <= 34) {
    echo $totalMarksGrade = "E";
    $totalGradePointSum = 3;
    }
}


if ($studentClass == "Class 8" or $studentClass == "Class 9" or $studentClass == "Class 10")
{
$percentageSummativeeighttoten = $totalSumResult / 600 * 100;

$twoDecimalPercentage = number_format((float)$percentageSummativeeighttoten, 2, '.', '');

if ($twoDecimalPercentage >= 91 and $twoDecimalPercentage <= 100) {
    echo $totalMarksGrade = "A1";
    $totalGradePointSum = 10;
    }
    if ($twoDecimalPercentage >= 81 and $twoDecimalPercentage <= 90) {
    echo $totalMarksGrade = "A2";
    $totalGradePointSum = 9;
    }
    if ($twoDecimalPercentage >= 71 and $twoDecimalPercentage <= 80) {
    echo $totalMarksGrade = "B1";
    $totalGradePointSum = 8;
    }
    if ($twoDecimalPercentage >= 61 and $twoDecimalPercentage <= 70) {
    echo $totalMarksGrade = "B2";
    $totalGradePointSum = 7;
    }
    if ($twoDecimalPercentage >= 51 and $twoDecimalPercentage <= 60) {
    echo $totalMarksGrade = "C1";
    $totalGradePointSum = 6;
    }
    if ($twoDecimalPercentage >= 41 and $twoDecimalPercentage <= 50) {
    echo $totalMarksGrade = "C2";
    $totalGradePointSum = 5;
    }
    if ($twoDecimalPercentage >= 35 and $twoDecimalPercentage <= 40) {
    echo $totalMarksGrade = "D";
    $totalGradePointSum = 4;
    }
    if ($twoDecimalPercentage >= 0 and $twoDecimalPercentage <= 34) {
    echo $totalMarksGrade = "E";
    $totalGradePointSum = 3;
    }
}
?><center>
</td>
<td>
<center><?php
if ($studentClass == "Class 6" or $studentClass == "Class 7")
{
$totalGradeSumativeHigher = $totalhigherGradeSummative / 60 * 100;
}
if ($studentClass == "Class 8" or $studentClass == "Class 9"or $studentClass == "Class 10")
{
$totalGradeSumativeHigher = $totalhigherGradeSummative / 60 * 100;
}
$TotalGradeSumativeHigher = number_format((float)$totalGradeSumativeHigher, 2, '.', '');


if ($TotalGradeSumativeHigher >= 91 and $TotalGradeSumativeHigher <= 100) {

echo $GradePointHigherSumativeSum = 10;
}
if ($TotalGradeSumativeHigher >= 81 and $TotalGradeSumativeHigher <= 90) {

echo $GradePointHigherSumativeSum = 9;
}
if ($TotalGradeSumativeHigher >= 71 and $TotalGradeSumativeHigher <= 80) {

echo  $GradePointHigherSumativeSum = 8;
}
if ($TotalGradeSumativeHigher >= 61 and $TotalGradeSumativeHigher <= 70) {

echo $GradePointHigherSumativeSum = 7;
}
if ($TotalGradeSumativeHigher >= 51 and $TotalGradeSumativeHigher <= 60) {

echo $GradePointHigherSumativeSum = 6;
}
if ($TotalGradeSumativeHigher >= 41 and $TotalGradeSumativeHigher <= 50) {

echo $GradePointHigherSumativeSum = 5;
}
if ($TotalGradeSumativeHigher >= 35 and $TotalGradeSumativeHigher <= 40) {

echo   $GradePointHigherSumativeSum = 4;
}
if ($TotalGradeSumativeHigher >= 0 and $TotalGradeSumativeHigher <= 34) {

echo $GradePointHigherSumativeSum = 3;
}
?>
</td>
<center>


<?php }
} ?>







<?php
if ($studentClass == "Class 1" or $studentClass == "Class 2" or $studentClass == "Class 3" or $studentClass == "Class 4" or $studentClass == "Class 5") {
if ($templateId == 3) {
?>
<td>Total Marks</td>
<td>
<center><b><?php echo $totalDefaultGetMarks; ?></b></center>
</td>

<td>
<center><b>
<?php
$totalDefaultPercentage = $totalDefaultGetMarks / 250 * 100;
if ($totalDefaultPercentage >= 91 and $totalDefaultPercentage <= 100) {
echo $totalDefGradePer = "A+";
}
if ($totalDefaultPercentage >= 71 and $totalDefaultPercentage <= 90) {
echo $totalDefGradePer = "A";
}
if ($totalDefaultPercentage >= 51 and $totalDefaultPercentage <= 70) {
echo $totalDefGradePer = "B+";
}
if ($totalDefaultPercentage >= 41 and $totalDefaultPercentage <= 50) {
echo $totalDefGradePer = "B";
}
if ($totalDefaultPercentage >= 0 and $totalDefaultPercentage <= 40) {
echo $totalDefGradePer = "C";
}

?>

</b></center>
</td>

<?php }


if ($templateId == 1) {
?>
<td colspan="5">Total Marks</td>
<td>
<center><b><?php 
if ($studentClass == "Class 2")
{
echo $totalSumGetMarks; 
}
else
{
    echo $totalSumGetMarks;    
}

?></b></center>
</td>
<td>
<center><b>
<?php
if ($studentClass == "Class 1" or $studentClass == "Class 2")
{
$totalGradePercentage = $totalSumGetMarks / 250 * 100;
}
if ($studentClass == "Class 3" or $studentClass == "Class 4" or $studentClass == "Class 5")
{
$totalGradePercentage = $totalSumGetMarks / 300 * 100;
}

if ($totalGradePercentage >= 91 and $totalGradePercentage <= 100) {
echo $totalGradePer = "A+";
}
if ($totalGradePercentage >= 71 and $totalGradePercentage <= 90) {
echo $totalGradePer = "A";
}
if ($totalGradePercentage >= 51 and $totalGradePercentage <= 70) {
echo $totalGradePer = "B+";
}
if ($totalGradePercentage >= 41 and $totalGradePercentage <= 50) {
echo $totalGradePer = "B";
}
if ($totalGradePercentage >= 0 and $totalGradePercentage <= 40) {
echo $totalGradePer = "C";
}

?>

</b></center>
</td>

<td><?php  
if ($studentClass == "Class 1" or $studentClass == "Class 2")
{
$totalGradeSum = $totalSumGetMarks / 250 * 100; 
}
if ($studentClass == "Class 3" or $studentClass == "Class 4" or $studentClass == "Class 5")
{
$totalGradeSum = $totalSumGetMarks / 300 * 100; 
}

echo $totalGradeSumPer =number_format((float)$totalGradeSum, 2, '.', '');
?>%</td>
<?php }


if ($templateId == 2) {
?>
<td colspan="3">Total Marks</td>
<td>
<center><?php echo $totalSumResult; ?><center>
</td>
<td>
<center><?php
if ($studentClass == "Class 1" or $studentClass == "Class 2" or $studentClass == "Class 3" or $studentClass == "Class 4" or $studentClass == "Class 5")
{
$percentageSummativesixtoseven = $totalSumResult / 600 * 100;
}
$twoDecimalPercentage = number_format((float)$percentageSummativesixtoseven, 2, '.', '');

if ($twoDecimalPercentage >= 91 and $twoDecimalPercentage <= 100) {
echo $totalMarksGrade = "A+";
}
if ($twoDecimalPercentage >= 71 and $twoDecimalPercentage <= 90) {
echo $totalMarksGrade = "A";
}
if ($twoDecimalPercentage >= 51 and $twoDecimalPercentage <= 70) {
echo $totalMarksGrade = "B+";
}
if ($twoDecimalPercentage >= 41 and $twoDecimalPercentage <= 50) {
echo $totalMarksGrade = "B";
}
if ($twoDecimalPercentage >= 0  and $twoDecimalPercentage <= 40) {
echo $totalMarksGrade = "C";
}
?><center>
</td>


<?php }
} ?>


<?php
if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
?>
<!-- <td valign="top" style="text-align: left;border-right:1px solid #999"></td>-->
<?php
}
?>
</tr>
<?php
}
?>




</tbody>
</table>

<?php
if ($templateId == 4) {
?>
</br>
</br>
<table style="width: 100%; margin-top: 10px; font-size: 0.8em;" border="1px" cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="text-align: center;">
<thead>
<tr>
<th><b>Percentage</b></th>
<th><b><?php echo $AnnuallyMarksPer=$GrandTotalSum/1000*100;?> %</b></th>

<th><b>Grade</b></th>
<th><b>
<?php
if ($AnnuallyMarksPer >= 91 and $AnnuallyMarksPer <= 100) {
echo "A+";
}
if ($AnnuallyMarksPer >= 71 and $AnnuallyMarksPer <= 90) {
echo "A";
}
if ($AnnuallyMarksPer >= 51 and $AnnuallyMarksPer <= 70) {
echo "B+";
}
if ($AnnuallyMarksPer >= 41 and $AnnuallyMarksPer <= 50) {
echo "B";
}
if ($AnnuallyMarksPer >= 0  and $AnnuallyMarksPer <= 40) {
echo "C";
}
?></b>
</th>

</tr>
</thead>
</table>
</br>
</br>
<?php } ?>


<?php
if ($templateId == 2) {
?>
<table style="width: 100%; margin-top: 10px; font-size: 0.8em;" border="1px" cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="text-align: center;">
<thead>
<tr>
<th>CO-CURRICULAR SUBJECTS</th>
<th>MARKS (50)</th>
<th>GRADE</th>
</tr>

</thead>
<tbody>
<?php
$total_max_marks = 0;
$total_obtain_marks = 0;
$total_points = 0;
$total_hours = 0;
$total_quality_point = 0;
$result_status = 1;
$absent_status = false;
foreach ($student_value['exam_result_cocarricular'] as $exam_result_key => $exam_result_value2) {
?>
<tr>
<td>
<?php echo $exam_result_value2->name . "(" . $exam_result_value2->code . ")"; ?>
</td>
<td>
<center><?php echo  $summativeExamMarks = $exam_result_value2->summative_exam_marks;

$totalcocarricularmarkssum = $summativeExamMarks + $totalcocarricularmarkssum;
?></center>
</td>
<td>
<center><?php
if ($summativeExamMarks >= 45.5 and $summativeExamMarks <= 50) {
echo $cocarriculamGrade = "A+";
}
if ($summativeExamMarks >= 35.5 and $summativeExamMarks <= 45) {
echo $cocarriculamGrade = "A";
}
if ($summativeExamMarks >= 25.5 and $summativeExamMarks <= 35) {
echo $cocarriculamGrade = "B+";
}
if ($summativeExamMarks >= 20.5 and $summativeExamMarks <= 25) {
echo $cocarriculamGrade = "B";
}
if ($summativeExamMarks >= 1 and $summativeExamMarks <= 20) {
echo $cocarriculamGrade = "C";
}

?><center>
</td>
</tr>

<?php } ?>
<tr>
<td>Total</td>
<td>
<center><?php echo $totalcocarricularmarkssum; ?></center>
</td>
<td>
<center>
<?php
$percentagetotalcocarricular = $totalcocarricularmarkssum / 150 * 100;
$twoDecimalPercentagecocarricular = number_format((float)$percentagetotalcocarricular, 2, '.', '');

if ($twoDecimalPercentagecocarricular >= 91 and $twoDecimalPercentagecocarricular <= 100) {
echo "A+";
}
if ($twoDecimalPercentagecocarricular >= 71 and $twoDecimalPercentagecocarricular <= 90) {
echo "A";
}
if ($twoDecimalPercentagecocarricular >= 51 and $twoDecimalPercentagecocarricular <= 70) {
echo "B+";
}
if ($twoDecimalPercentagecocarricular >= 41 and $twoDecimalPercentagecocarricular <= 50) {
echo "B";
}
if ($twoDecimalPercentagecocarricular >= 0  and $twoDecimalPercentagecocarricular <= 40) {
echo "C";
}
?>
</center>
</td>
</tr>

</tbody>
</table>
<?php } ?>



<?php
if ($templateId == 4) {
?>
<table style="width: 100%; margin-top: 10px; font-size: 0.8em;" border="1px" cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="text-align: center;">
<thead>
<tr>
<th>CO-CURRICULAR SUBJECTS</th>
<th>MARKS (50)</th>
<th>GRADE</th>
</tr>

</thead>
<tbody>
<?php
$total_max_marks = 0;
$total_obtain_marks = 0;
$total_points = 0;
$total_hours = 0;
$total_quality_point = 0;
$result_status = 1;
$absent_status = false;
foreach ($student_value['exam_result_cocarricular'] as $exam_result_key => $exam_result_value2) {
?>
<tr>
<td>
<?php echo $exam_result_value2->name . "(" . $exam_result_value2->code . ")"; ?>
</td>
<td>
<center><?php echo  $summativeExamMarks = $exam_result_value2->summative_exam_marks;

$totalcocarricularmarkssum = $summativeExamMarks + $totalcocarricularmarkssum;
?></center>
</td>
<td>
<center><?php
if ($summativeExamMarks >= 45.5 and $summativeExamMarks <= 50) {
echo $cocarriculamGrade = "A+";
}
if ($summativeExamMarks >= 35.5 and $summativeExamMarks <= 45) {
echo $cocarriculamGrade = "A";
}
if ($summativeExamMarks >= 25.5 and $summativeExamMarks <= 35) {
echo $cocarriculamGrade = "B+";
}
if ($summativeExamMarks >= 20.5 and $summativeExamMarks <= 25) {
echo $cocarriculamGrade = "B";
}
if ($summativeExamMarks >= 1 and $summativeExamMarks <= 20) {
echo $cocarriculamGrade = "C";
}

?><center>
</td>
</tr>

<?php } ?>
<tr>
<td>Total</td>
<td>
<center><?php echo $totalcocarricularmarkssum; ?></center>
</td>
<td>
<center>
<?php
$percentagetotalcocarricular = $totalcocarricularmarkssum / 150 * 100;
$twoDecimalPercentagecocarricular = number_format((float)$percentagetotalcocarricular, 2, '.', '');

if ($twoDecimalPercentagecocarricular >= 91 and $twoDecimalPercentagecocarricular <= 100) {
echo "A+";
}
if ($twoDecimalPercentagecocarricular >= 71 and $twoDecimalPercentagecocarricular <= 90) {
echo "A";
}
if ($twoDecimalPercentagecocarricular >= 51 and $twoDecimalPercentagecocarricular <= 70) {
echo "B+";
}
if ($twoDecimalPercentagecocarricular >= 41 and $twoDecimalPercentagecocarricular <= 50) {
echo "B";
}
if ($twoDecimalPercentagecocarricular >= 0  and $twoDecimalPercentagecocarricular <= 40) {
echo "C";
}
?>
</center>
</td>
</tr>

</tbody>
</table>
<?php } ?>



<?php
if ($templateId != 3) {
?>
<table align="right" style=" width: 40%; margin-top: 10px; font-size: 0.8em;" border="1px" cellpadding="0" cellspacing="0" width="100%" class="denifittable">
<thead>
<tr>
<th colspan="4"><b>Attendance</b></th> 
</tr>

<tr>
<th>Month</th>
<th>Working Days</th>
<th>Days Attended</th>
<th>Days Absent</th>
</tr>

</thead>
<tbody>
<?php
foreach ($student_value['TotalAttendanceDay'] as $exam_result_key => $exam_result_value4) {
$totaldayschool = $exam_result_value4->totaldayschool;
}

foreach ($student_value['TotalPresentDay'] as $exam_result_key => $exam_result_value5) {
$totalPresentDay = $exam_result_value5->totalPrsentDay;
}

$startMonth = substr($startDate, 5, 2);
$endMonth = substr($endDate, 5, 2);

$dateObj1   = DateTime::createFromFormat('!m', $startMonth);
$monthName1 = $dateObj1->format('F');

$dateObj2   = DateTime::createFromFormat('!m', $endMonth);
$monthName2 = $dateObj2->format('F');
?>
<tr>
<td>
<center><?php echo $monthName1; ?> to <?php echo $monthName2; ?></center>
</td>

<td>
<center><?php echo $totaldayschool; ?></center>
</td>

<td>
<center><?php echo $totalPresentDay; ?></center>
</td>

<td>
<center><?php echo $totalAbsentDay = $totaldayschool - $totalPresentDay; ?></center>
</td>

</tr>




</tbody>
</table>
<?php } ?>
</br>
</br>
</br>
<?php
if ($templateId == 2) {
?>
<b>** Congratulations! Promoted to class </b>

<?php }?>
<?php
}
?>
</td>
</tr>

<tr>
<td valign="top" height="30"></td>
</tr>

<?php
if ($exam->exam_group_type != "gpa") {
?>
<tr>
<td valign="top" colspan="5" width="20%" style="font-weight: normal; text-align: left; border-top:0">

</td>

</tr>

<tr>
<td valign="top" style="font-weight: bold; padding-left: 30px; padding-top: 10px;"><?php echo $template->date; ?></td>
</tr>
<?php
}
?>

<tr>
<td valign="top" height="30"></td>
</tr>
<?php
if ($template->content_footer != "") {
?>
<tr>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px; line-height: normal;"><?php echo $template->content_footer ?></td>
</tr>
<?php
}
?>


<?php
if ($template->left_sign != "" || $template->middle_sign != "" || $template->right_sign != "") {
?>
<tr>
<td valign="top"></br>
<table cellpadding="0" cellspacing="0" width="100%" class="">
<tr>
<td valign="bottom" style="font-size: 12px;">

</td>
<?php
if ($template->left_sign != "") {
?>
<td valign="bottom"  style="text-transform: uppercase;margin-left: 292px;">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url('uploads/marksheet/' . $template->left_sign); ?>" width="100" height="50"></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Principal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class Teacher&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parent

</td>
<?php
}
?>

<?php
if ($template->middle_sign != "") {
?>
<td valign="bottom"  style="text-transform: uppercase;margin-left: -102px;">

<!--<img src="<?php base_url('uploads/marksheet/' . $template->middle_sign); ?>" width="100" height="50">-->

</td>
<?php
}
?>

<?php
if ($template->right_sign != "") {
?>
<td valign="bottom"  style="text-transform: uppercase;">

<!-- <img src="<?php base_url('uploads/marksheet/' . $template->right_sign); ?>" width="100" height="50">--></br>

</td>
<?php
}
?>



</tr>
</table>
</td>
</tr>
<?php
}
?>

<tr>
<td valign="top" height="20"></td>
</tr>
</table>
</div>

<div class="pagebreak"> </div>
<?php
}
}
}

if ($marksheet['exam_connection'] == 1) {

foreach ($marksheet['students'] as $student_key => $student_value) {

$percentage_total = 0;
?>



<style type="text/css">
@page {
padding: 0;
margin: 0;
}

body {
padding: 0;
margin: 0;
font-family: arial;
color: #000;
font-size: 15px;
line-height: normal;
}

.tableone {}

.tableone td {
border: 1px solid #000;
padding: 5px 0
}

.denifittable th {
border-top: 1px solid #999;
}

.denifittable th,
.denifittable td {
border-bottom: 1px solid #999;
border-collapse: collapse;
border-left: 1px solid #999;
}

.denifittable tr th {
padding: 10px 10px;
font-weight: normal;
}

.denifittable tr td {
padding: 10px 10px;
font-weight: bold;
}

.tcmybg {
background: top center;
background-size: 100% 100%;
position: absolute;
top: 0;
left: 0;
bottom: 0;
z-index: 1;
width: 100%;
height: 100%;
}

.tablemain {
position: relative;
z-index: 2
}
</style>

<div style="width: 100%; margin: 0 auto; border:1px solid #000; padding: 10px 5px 5px;position: relative; z-index: 2;">
<?php

if ($template->background_img != "") {
?>

<img src="<?php echo base_url('uploads/marksheet/' . $template->background_img); ?>" class="tcmybg" width="100%" height="100%" />
<?php
}
?>
<table cellpadding="0" cellspacing="0" width="100%" class="tablemain">
<tr>
<td valign="top">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" style="font-size: 42px; font-weight: bold; text-align: center;"><?php echo $template->heading; ?></td>
</tr>

<tr>
<td valign="top" style="font-size: 20px; font-weight: 900; text-align: center; text-transform: uppercase;"><?php echo $template->title; ?></td>
</tr>
<tr>
<td valign="top" height="5"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td valign="top">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" align="center">
<?php
if ($template->left_logo != "") {
?>
<img src="<?php echo base_url('uploads/marksheet/' . $template->left_logo); ?>" style="width:100%">

<?php } ?>

</td>
<td valign="top">
<table cellpadding="0" cellspacing="0" width="100%">

<tr>
<td valign="top" style="font-size: 20px; font-weight: bold; text-align: center; text-transform: uppercase;">
<?php echo $template->exam_name; ?></td>
</tr>
<tr>
<td valign="top" height="5"></td>
</tr>


<?php
if ($template->exam_session) {
?>
<tr>
<td valign="top" style="font-weight: bold; text-align: left; text-transform: uppercase; display: inline-block; margin-top: -10px;">
<?php echo $exam->session; ?></td>
</tr>
<?php
}
?>

</table>
</td>

<td valign="top" align="center">
<?php
if ($template->left_logo != "") {
?>
<img src="<?php echo base_url('uploads/marksheet/' . $template->left_logo); ?>" style="width:100%">
<?php } ?>
</td>


</tr>
</table>
</td>
</tr>

<?php
if ($template->is_admission_no || $template->is_roll_no || $template->is_photo) {
?>
<tr>
<td valign="top">
<table cellpadding="0" cellspacing="0" width="100%" class="">
<tr>
<td valign="top">
<table cellpadding="0" cellspacing="0" width="98%" class="denifittable">

<tr>

<?php
if ($template->is_admission_no) {
?>
<th valign="top" style="text-align: center; text-transform: uppercase;">
<?php echo $this->lang->line('admission_no') ?>
</th>
<?php
}
if ($template->is_roll_no) {
?>
<th valign="top" style="text-align: center; text-transform: uppercase; border-right:1px solid #999"><?php echo $this->lang->line('roll_no') ?></th>
<?php
}
?>



</tr>

<tr>
<?php
if ($template->is_admission_no) {
?>

<td valign="" style="text-transform: uppercase;text-align: center;"><?php echo $student_value['admission_no']; ?></td>
<?php
}
if ($template->is_roll_no) {
?>
<td valign="" style="text-transform: uppercase;text-align: center;border-right:1px solid #999"> <?php echo $student_value['exam_result']['exam_roll_no_' . $exam->id]; ?>
</td>
<?php
}
?>



</tr>

<tr>
<td valign="top" colspan="5" style="text-align: center; text-transform: uppercase; border:0">

<?php echo $this->lang->line('certificated_that') ?></td>
</tr>
</table>
</td>
<?php
if ($template->is_photo) {
?>
<td valign="top" align="center"><?php if ($student_value['image'] != '') { ?><img src="<?php echo base_url() . $student_value['image']; ?>" width="120" height="150" style="border: 2px solid #fff;
outline: 1px solid #000000;"><?php } ?>
</td>
<?php
}
?>

</tr>

</table>
</td>
</tr>
<?php
}
?>

<tr>
<td valign="top">
<table cellpadding="0" cellspacing="0" width="100%" class="">


<?php
if ($template->is_name) {
?>
<tr>

<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;"><?php echo $this->lang->line('name_prefix'); ?><span style="padding-left: 30px; font-weight: bold;"><?php echo $student_value['firstname'] . " " . $student_value['lastname']; ?></span></td>
</tr>
<?php
}

if ($template->is_father_name) {
?>
<tr>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;"><?php echo $this->lang->line('marksheet_father_name') ?><span style="padding-left: 30px; font-weight: bold;"><?php echo $student_value['father_name']; ?></span></td>
</tr>
<?php
}

if ($template->is_mother_name) {
?>
<tr>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;"><?php echo $this->lang->line('exam_mother_name'); ?><span style="padding-left: 30px; font-weight: bold;"><?php echo $student_value['mother_name']; ?></span></td>
</tr>
<?php
}
?>


<?php
if ($template->school_name != "") {
?>
<tr>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px;"> <?php echo $this->lang->line('school_name'); ?><span style="padding-left: 30px; font-weight: bold;"><?php echo $template->school_name; ?></span></td>
</tr>
<?php
}
?>

<tr>
<td valign="top" style="text-transform: uppercase; padding-top: 15px; padding-bottom: 20px;"><?php echo $this->lang->line('exam') . " " . $this->lang->line('center') ?><span style="text-transform: uppercase; padding-top: 15px; font-weight: bold; padding-bottom: 20px; padding-left: 30px;"><?php echo $template->exam_center; ?></span></td>

</tr>
<?php
if ($template->content != "") {
?>
<tr>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px; line-height: normal;"><?php echo $template->content ?></td>
</tr>
<?php
}
?>
</table>
</td>
</tr>
<?php
if (!empty($student_value['exam_result']['exam_result_' . $exam->id])) {
?>

<tr>
<td valign="top">


<?php
if (!empty($student_value['exam_result']['exam_result_' . $exam->id])) {
?>
<table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="text-align: center;">
<thead>
<tr>
<th><?php echo $this->lang->line('subjects') ?></th>
<?php
if ($exam->exam_group_type != "gpa") {
?>
<th><?php echo $this->lang->line('max') ?></th>
<th><?php echo $this->lang->line('min') ?></th>
<th><?php echo $this->lang->line('marks') . " " . $this->lang->line('obtained') ?></th>
<?php
} else if ($exam->exam_group_type == "gpa") {
?>
<th class="text-center"><?php echo $this->lang->line('grade') . " " . $this->lang->line('point') ?></th>
<th class="text-center"><?php echo $this->lang->line('credit') . " " . $this->lang->line('hours') ?></th>
<th class="text-center"><?php echo $this->lang->line('quality') . " " . $this->alng->line('point') ?></th>
<?php
}

if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
?>
<th><?php echo $this->lang->line('grade') ?>></th>
<?php
}
?>
<th valign="top" style="text-align: left;border-right:1px solid #999"><?php echo $this->lang->line('remark') ?></th>
</tr>
</thead>
<tbody>
<?php
$total_max_marks = 0;
$total_obtain_marks = 0;
$total_points = 0;
$total_hours = 0;
$total_quality_point = 0;
$result_status = 1;
$absent_status = false;

foreach ($student_value['exam_result']['exam_result_' . $exam->id] as $exam_result_key => $exam_result_value) {

$total_max_marks = $total_max_marks + $exam_result_value->max_marks;
$total_obtain_marks = $total_obtain_marks + $exam_result_value->get_marks;
if ($exam_result_value->attendence == "absent") {
$absent_status = true;
}
?>
<tr>
<td>

<?php echo $exam_result_value->name . "(" . $exam_result_value->code . ")"; ?>
</td>
<?php
if ($exam->exam_group_type != "gpa") {
?>
<td>
<?php echo $exam_result_value->max_marks; ?>
</td>
<td>
<?php echo $exam_result_value->min_marks; ?>
</td>
<td>
<?php
echo $exam_result_value->get_marks;

if ($exam_result_value->attendence == "absent") {
echo "&nbsp;" . $this->lang->line('exam_absent');
}
if ($exam_result_value->get_marks < $exam_result_value->min_marks) {

$result_status = 0;
}
?>
</td>
<?php
} else if ($exam->exam_group_type == "gpa") {
?>
<td class="text-center">
<?php
$percentage_grade = ($exam_result_value->get_marks * 100) / $exam_result_value->max_marks;
$point = findGradePoints($exam_grades, $percentage_grade);
$total_points = $total_points + $point;
echo $point;
?>

</td>
<td class="text-center">
<?php
$total_hours = $total_hours + $exam_result_value->credit_hours;
echo ($exam_result_value->credit_hours);
?>

</td>
<td class="text-center">
<?php
echo ($exam_result_value->credit_hours * $point);
$total_quality_point = $total_quality_point + ($exam_result_value->credit_hours * $point);
?>

</td>
<?php
}

if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
?>
<td>

<?php
$percentage_grade = ($exam_result_value->get_marks * 100) / $exam_result_value->max_marks;
echo findGrade($exam_grades, $percentage_grade);
?>
</td>
<?php
}
?>

<td valign="top" style="text-align: left;border-right:1px solid #999">
<?php
if ($exam->exam_group_type == "basic_system") {
if ($exam_result_value->get_marks < $exam_result_value->min_marks) {
$result_status = 0;
echo "(F) ";
}
}
echo $exam_result_value->note;
?>
</td>
</tr>
<?php
}
?>


<?php
if ($exam->exam_group_type != "gpa") {
?>
<tr>
<td></td>
<td>
<?php echo number_format($total_max_marks, 2, '.', ''); ?>
</td>
<td><?php echo $this->lang->line('grand_total') ?></td>
<td>
<?php echo number_format($total_obtain_marks, 2, '.', ''); ?>
</td>
<td valign="top" style="text-align: left;border-right:1px solid #999"></td>
<?php
if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
?>
<td valign="top" style="text-align: left;border-right:1px solid #999"></td>
<?php
}
?>

</tr>
<tr>
<td><?php echo $this->lang->line('percentage') ?></td>
<td>
<?php
echo number_format((($total_obtain_marks * 100) / $total_max_marks), 2, '.', '');
$percentage_total = (($total_obtain_marks * 100) / $total_max_marks);
?>
</td>
<td></td>
<td>


</td>
<td valign="top" style="text-align: left;border-right:1px solid #999"></td>
<?php
if ($exam->exam_group_type == "school_grade_system" || $exam->exam_group_type == "coll_grade_system") {
?>
<td valign="top" style="text-align: left;border-right:1px solid #999"></td>
<?php
}
?>

</tr>
<?php
} else if ($exam->exam_group_type == "gpa") {
?>
<tr>
<td></td>
<td></td>
<td class="text-center">
<?php
echo number_format($total_hours, 2, '.', '');
?>

</td>
<td class="text-center">
<?php
$exam_qulity_point = number_format($total_quality_point / $total_hours, 2, '.', '');

echo $total_quality_point . "/" . $total_hours . "=" . $exam_qulity_point;
?>

</td>
<td></td>

<?php
}
?>


</tbody>
</table>

<?php
}
?>
</td>
</tr>
<tr>
<td valign="top" height="30"></td>
</tr>
<?php
if ($exam->exam_group_type != "gpa") {
?>
<tr>
<td valign="top" colspan="5" width="20%" style="font-weight: normal; text-align: left; border-top:0">
Result
<span style="border-left:0;text-align: left;font-weight: bold; padding-left: 30px;">
<?php
if ($result_status == 0 || $absent_status) {
echo $this->lang->line('fail');
} else {

if ($percentage_total > 40) {
echo $this->lang->line('pass');
} else {
echo $this->lang->line('fail');
}
}
?>

</span>
</td>

</tr>

<?php
if ($template->is_division) {
?>
<tr>
<td valign="top" colspan="5" width="20%" style="font-weight: normal; text-align: left; border-top:0">
Division
<span style="border-left:0;text-align: left;font-weight: bold; padding-left: 30px;">
<?php
if ($percentage_total >= 60) {
echo $this->lang->line('first');
} elseif ($percentage_total >= 50 && $percentage_total < 60) {
echo $this->lang->line('second');
} elseif ($percentage_total >= 0 && $percentage_total < 50) {
echo $this->lang->line('third');
} else {
}
?>

</span>
</td>

</tr>
<?php
}
?>

<tr>
<td valign="top" style="font-weight: bold; padding-left: 30px; padding-top: 10px;"><?php echo $template->date; ?></td>
</tr>
<?php
}
?>
<tr>
<td valign="top" height="30"></td>
</tr>
<tr>
<td valign="top" style="padding-top: 10px;">
<?php
if (!empty($student_value['exam_result'])) {
$consolidate_weightage_marks_total = 0;
$consolidate_marks_exam_total = 0;
$is_consoledate = 1;
$consolidate_exam_status = true;

foreach ($marksheet['exams'] as $each_exam_key => $each_exam_value) {

if (empty($marksheet['students'][$student_key]['exam_result']['exam_result_' . $each_exam_value->id])) {
$is_consoledate = 0;
}
}
?>
<table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="text-align: center; text-transform: uppercase;">
<thead>

<tr>
<th> <?php echo $this->lang->line('exam'); ?></th>

<?php
// print_r($marksheet['exams']);

foreach ($marksheet['exams'] as $each_exam_key => $each_exam_value) {
?>
<th> <?php echo $each_exam_value->exam; ?></th>
<?php
}
?>
<th valign="top" style="text-align: left;border-right:1px solid #999"><?php echo $this->lang->line('consolidate') ?></th>
</tr>
</thead>
<tbody>
<tr>
<td>Marks Obtained</td>
<?php
foreach ($marksheet['exams'] as $each_exam_key => $each_exam_value) {
if ($is_consoledate) {
?>
<td>
<?php
$s = examTotalResult($marksheet['students'][$student_key]['exam_result']['exam_result_' . $each_exam_value->id]);
$sss = json_decode($s);

if (!$sss->exam_result) {
$consolidate_exam_status = false;
}

$percentage_grade = (($sss->get_marks * 100) / $sss->max_marks);
// echo $sss->get_marks . "/" . $sss->max_marks . "[" . findGrade($exam_grades, $percentage_grade) . "]";

$consolidate_marks_exam_total = $consolidate_marks_exam_total + $sss->max_marks;
$weightage_marks = getWeightageExam($marksheet['exam_connection_list'], $each_exam_value->id, $sss->get_marks);
$consolidate_weightage_marks_total = $weightage_marks + $consolidate_weightage_marks_total;
echo number_format($weightage_marks, 2, '.', '');
if (!$sss->exam_result) {
echo "&nbsp;(F) ";
}
?>


</td>
<?php
} else {
?>
<td>
--

</td>
<?php
}
}

if ($is_consoledate) {
?>
<td valign="top" style="text-align: left;border-right:1px solid #999">
<?php
$percentage_grade_weightage = (($consolidate_weightage_marks_total * 100) / $consolidate_marks_exam_total);
echo $consolidate_weightage_marks_total . "/" . $consolidate_marks_exam_total . " [" . findGrade($exam_grades, $percentage_grade_weightage) . "]";
?>
</td>
<?php
} else {
?>
<td>
--

</td>
<?php
}
?>




</tr>
</tbody>

</table>


<?php
if (!$consolidate_exam_status) {

echo $this->lang->line('result') . " " . $this->lang->line('fail');
} else {

echo $this->lang->line('result') . " " . $this->lang->line('pass');
}
?>
Division
<span style="border-left:0;text-align: left;font-weight: bold; padding-left: 30px;">
<?php
$consolidate_percentage_total = ($consolidate_weightage_marks_total * 100) / $consolidate_marks_exam_total;
if ($consolidate_percentage_total >= 60) {
echo $this->lang->line('first');
} elseif ($consolidate_percentage_total >= 50 && $consolidate_percentage_total < 60) {
echo $this->lang->line('second');
} elseif ($consolidate_percentage_total >= 0 && $consolidate_percentage_total < 50) {
echo $this->lang->line('third');
} else {
}
?>

</span>

<?php
}
?>
</td>
</tr>

<?php
}
?>



<tr>
<td valign="top" height="30"></td>
</tr>
<?php
if ($template->content_footer != "") {
?>
<tr>
<td valign="top" style="text-transform: uppercase; padding-bottom: 15px; line-height: normal;"><?php echo $template->content_footer ?></td>
</tr>
<?php
}
?>
<tr>
<td valign="top">
<table cellpadding="0" cellspacing="0" width="100%" class="">
<tr>
<td valign="bottom" style="font-size: 12px;">

</td>
<td valign="bottom" align="center" style="text-transform: uppercase;">
<?php
if ($template->left_sign != "") {
?>
<img src="<?php echo base_url('uploads/marksheet/' . $template->left_sign); ?>" width="100" height="50"><?php } ?>
</td>
<td valign="bottom" align="center" style="text-transform: uppercase;">
<?php
if ($template->middle_sign != "") {
?>
<img src="<?php echo base_url('uploads/marksheet/' . $template->middle_sign); ?>" width="100" height="50">
<?php } ?>
</td>
<td valign="bottom" align="center" style="text-transform: uppercase;">
<?php
if ($template->right_sign != "") {
?>
<img src="<?php echo base_url('uploads/marksheet/' . $template->right_sign); ?>" width="100" height="50">
<?php } ?>
</td>


</tr>
</table>
</td>
</tr>
<tr>
<td valign="top" height="20"></td>
</tr>
</table>
</div>

<div class="pagebreak"> </div>
<?php
}
} else {
}
}
?>

<?php

function findGrade($exam_grades, $percentage)
{

if (!empty($exam_grades)) {
foreach ($exam_grades as $exam_grade_key => $exam_grade_value) {

if ($exam_grade_value->mark_from >= $percentage && $exam_grade_value->mark_upto <= $percentage) {
return $exam_grade_value->name;
}
}
}

return "-";
}

function findGradePoints($exam_grades, $percentage)
{

if (!empty($exam_grades)) {
foreach ($exam_grades as $exam_grade_key => $exam_grade_value) {

if ($exam_grade_value->mark_from >= $percentage && $exam_grade_value->mark_upto <= $percentage) {
return $exam_grade_value->point;
}
}
}

return 0;
}

function examTotalResult($array)
{
$return_array = array('max_marks' => 0, 'min_marks' => 0, 'credit_hours' => 0, 'get_marks' => 0, 'exam_result' => true);
if (!empty($array)) {
$max_marks = 0;
$min_marks = 0;
$credit_hours = 0;
$get_marks = 0;
$exam_result = true;
foreach ($array as $array_key => $array_value) {
if ($array_value->attendence == "absent") {
$exam_result = false;
}
$max_marks = $max_marks + $array_value->max_marks;
$min_marks = $min_marks + $array_value->min_marks;
$credit_hours = $credit_hours + $array_value->credit_hours;
$get_marks = $get_marks + $array_value->get_marks;
}
$return_array = array('max_marks' => $max_marks, 'min_marks' => $min_marks, 'credit_hours' => $credit_hours, 'get_marks' => $get_marks, 'exam_result' => $exam_result);
}
return json_encode($return_array);
}

function getWeightageExam($exam_connection_list, $examid, $get_marks)
{

foreach ($exam_connection_list as $exam_connection_key => $exam_connection_value) {
if ($exam_connection_value->exam_group_class_batch_exams_id == $examid) {
return ($get_marks * $exam_connection_value->exam_weightage) / 100;
}
}
return "";
}
?>