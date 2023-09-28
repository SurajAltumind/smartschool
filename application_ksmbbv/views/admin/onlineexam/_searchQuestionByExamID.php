<style type="text/css">
    .hrexam {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}

</style>

    
<?php

if (!empty($questionList)) {

    foreach ($questionList as $question_key => $question_value) {
    $checkbox_status="";

if($question_value->onlineexam_question_id != 0){
    $checkbox_status="checked";
}

        ?>
<div class="display">
                <div class="row">

                    <div class="col-xs-12 col-md-12 section-box">
                        <?php if($this->rbac->hasPrivilege('add_questions_in_exam','can_edit')){?>
                         <div class="checkbox" style="margin-left: 20px"><input type="checkbox" class="question_chk" value="<?php echo $question_value->id; ?>" <?php echo $checkbox_status; ?>></div>
                     <?php } ?>
                       <div class="rltpaddleft">
                     
                        <?php echo readmorelink($question_value->question,site_url('admin/question/read/'.$question_value->id)); ?>
                        <p> 
                            <b><?php echo $this->lang->line('class')?>:</b>
                            <span class="class_text <?php echo str_replace(' ', '', $question_value->class);?>"><?php echo $question_value->class; ?></span><br>
                            <b><?php echo $this->lang->line('section')?>:</b>
                            <span class="section_text <?php echo str_replace(' ', '', $question_value->section);?>"><?php echo $question_value->section; ?></span><br>
                            <b><?php echo $this->lang->line('subject')?>:</b>
                            <span class="subject_text"><?php echo $question_value->subject_name; ?></span>
                        </p>
                     </div>

                    </div>
                </div>
                <div class="hrexam"></div>
            </div>
    <?php
}

}

?>
</form>