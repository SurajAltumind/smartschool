<div class="divider"></div>
<?php if ($this->rbac->hasPrivilege('marks_import', 'can_view')) {
?>

    <div class="row">
        <div class="col-md-9">
            <form method="POST" enctype="multipart/form-data" id="fileUploadForm">

                <div class="input-group mb10">
                    <input id="my-file-selector" data-height="34" class="dropify" type="file">
                    <div class="input-group-btn">
                        <input type="submit" class="btn btn-primary" value="<?php echo $this->lang->line('submit') ?>" id="btnSubmit" />
                    </div>
                </div>
        </div>
        </form>

        <div class="col-md-3">
            <a class="btn btn-primary pull-right" href="<?php echo site_url('admin/examgroup/exportformat') ?>" target="_blank"><i class="fa fa-download"></i> <?php echo $this->lang->line('export') . " " . $this->lang->line('sample'); ?></a>
        </div>
    </div>
<?php
}
?>


<form method="post" action="<?php echo site_url('admin/examgroup/entrymarks') ?>" id="assign_form1111">
    <input type="hidden" id="max_mark" value="<?php echo $subject_detail->max_marks; ?>">
    <?php
    if (isset($resultlist) && !empty($resultlist)) {
    ?>
        <div class="row">

            <div class="col-lg-12">



                <input type="hidden" name="exam_group_class_batch_exam_subject_id" value="<?php echo $exam_group_class_batch_exam_subject_id; ?>">
                <div class="table-responsive">

                    <table class="table table-striped">
                        <thead>

                            <tr>
                                <th><?php echo $this->lang->line('admission_no'); ?></th>
                                <th><?php echo $this->lang->line('roll_no'); ?></th>
                                <th><?php echo $this->lang->line('student_name'); ?></th>
                                <th><?php echo $this->lang->line('father_name'); ?></th>
                                <th><?php echo $this->lang->line('category'); ?></th>
                                <th><?php echo $this->lang->line('gender'); ?></th>
                                <th><?php echo $this->lang->line('attendence'); ?></th>

                                <?php
                                if ($markEntryType == 1) {
                                ?>
                                    <th>Reading Skills Marks</th>
                                    <th>Writing Skills Marks</th>
                                    <th>Project Work</th>
                                    <th>Slip Test</th>
                                <?php } ?>

                                <?php
                                if ($markEntryType == 2) {
                                ?>
                                    <th>Marks (50/80)</th>
                                    <th>FA1 + FA2 (20 M) </th>
                                <?php } ?>
                                  <?php
                                        //if ($markEntryType == 2) {
                                        ?>
                                <th><?php// echo $this->lang->line('marks') ?></th>
                                <?php //}?>
                                <th><?php echo $this->lang->line('note') ?></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (empty($resultlist)) {
                            ?>
                                <tr>
                                    <td colspan="7" class="text-danger text-center"><?php echo $this->lang->line('no_record_found'); ?></td>
                                </tr>
                                <?php
                            } else {

                                foreach ($resultlist as $student) {

                                ?>
                                    <tr class="std_adm_<?php echo $student['admission_no']; ?>">
                                        <input type="hidden" name="prev_id[<?php echo $student['exam_group_class_batch_exam_students_id'] ?>]" value="<?php echo $student['exam_group_exam_result_id'] ?>">
                                        <input type="hidden" name="exam_group_student_id[]" value="<?php echo $student['exam_group_class_batch_exam_students_id'] ?>">
                                        <td><?php echo $student['admission_no']; ?></td>
                                        <td><?php echo ($student['exam_roll_no'] != 0) ? $student['exam_roll_no'] : '-'; ?></td>
                                        <td><?php echo $student['firstname'] . " " . $student['lastname']; ?></td>
                                        <td><?php echo $student['father_name']; ?></td>
                                        <td><?php echo $student['category']; ?></td>
                                        <td><?php echo $student['gender']; ?></td>
                                        <td>
                                            <div>

                                                <?php
                                                foreach ($attendence_exam as $attendence_key => $attendence_value) {
                                                    $chk = ($student['exam_group_exam_result_attendance'] == $attendence_value) ? "checked='checked'" : "";
                                                ?>
                                                    <label class="checkbox-inline"><input type="checkbox" class="attendance_chk" name="exam_group_student_attendance_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $attendence_value; ?>" <?php echo $chk; ?>><?php echo $this->lang->line($attendence_value); ?></label>
                                                <?php
                                                }
                                                ?>

                                            </div>
                                        </td>
                                        <?php
                                        if ($markEntryType == 1) {
                                        ?>
                                            <td><input type="text" class="form-control" name="exam_group_student_reading_marks_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $student['exam_group_exam_result_reading_marks']; ?>" style="width: 103px;"></td>
                                            <td><input type="text" class="form-control" name="exam_group_student_writing_marks_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $student['exam_group_exam_result_writing_marks']; ?>" style="width: 103px;"></td>
                                            <td><input type="text" class="form-control" name="exam_group_student_project_marks_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $student['exam_group_exam_result_project_marks']; ?>" style="width: 103px;"></td>
                                            <td><input type="text" class="form-control" name="exam_group_student_sliptest_marks_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $student['exam_group_exam_result_sliptest_marks']; ?>" style="width: 103px;">
                                                <input type="hidden" class="form-control" name="exam_group_student_formative_exam_marks_status_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $student['exam_group_exam_result_formative_exam_marks_status']; ?>" style="width: 103px;">
                                            </td>
                                        <?php } ?>


                                        <?php
                                        if ($markEntryType == 2) {
                                        ?>

                                            <td><input type="text" class="form-control" onkeyup="calc()" id="text1" name="exam_group_student_summative_exam_marks_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $student['exam_group_exam_result_summative_exam_marks']; ?>" style="width: 103px;"></td>

                                            <td><input type="text" class="form-control" onkeyup="calc()" id="text1" name="exam_group_student_faone_fatwo_marks_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $student['exam_group_exam_result_faone_fatwo_marks']; ?>" style="width: 103px;"></td>




                                        <?php } ?>
                                        <?php
                                        if ($markEntryType == 2) {
                                        ?>
                                            <td> <input type="hidden" class="marksssss form-control" id="text3" name="exam_group_student_mark_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $student['exam_group_exam_result_get_marks']; ?>" style="width: 103px;"></td>
                                        <?php } ?>
                                        <td> <input type="text" class="form-control note" name="exam_group_student_note_<?php echo $student['exam_group_class_batch_exam_students_id']; ?>" value="<?php echo $student['exam_group_exam_result_note']; ?>" style="width: 140px;"></td>

                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

                <?php // if ($this->rbac->hasPrivilege('exam_marks', 'can_edit')) { ?>
                    <button type="submit" class="allot-fees btn btn-primary btn-sm pull-right" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.."><?php echo $this->lang->line('save'); ?>
                    </button>
                <?php // } ?>

                <br />
                <br />

            </div>
        </div>
    <?php
    } else {
    ?>

        <div class="alert alert-info">
            <?php echo $this->lang->line('no_record_found'); ?>
        </div>
    <?php
    }
    ?>
</form>

<script>
 function calc() {
       var txtFirstNumberValue = document.getElementById('txt1').value;
       var txtSecondNumberValue = document.getElementById('txt2').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('txt3').value = result;
       }
   }
</script>