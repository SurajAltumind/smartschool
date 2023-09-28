<div class="content-wrapper" style="min-height: 946px;">
<section class="content-header">
<h1>
<i class="fa fa-map-o"></i> <?php echo $this->lang->line('examinations'); ?> <small><?php echo $this->lang->line('student_fee1'); ?></small>  </h1>
</section>
<!-- Main content -->
<section class="content">
<?php $this->load->view('reports/_examinations'); ?>
<div class="row">
<div class="col-md-12">
<div class="box removeboxmius">
<div class="box-header ptbnull"></div>
<div class="box-header with-border">
<h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('select_criteria'); ?></h3>
</div>
<div class="box-body">

 <form role="form" action="<?php echo site_url('admin/examresult/rankreport2') ?>" method="post">

                            <?php echo $this->customlib->getCSRF(); ?>

                            <div class="row">
                                <div class="col-sm-6 col-lg-3 col-md-3 col20">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('exam') . " " . $this->lang->line('group'); ?></label><small class="req"> *</small>
                                        <select  id="exam_group_id" name="exam_group_id" class="form-control" >
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                            <?php
                                            foreach ($examgrouplist as $ex_group_key => $ex_group_value) {
                                                ?>
                                                <option value="<?php echo $ex_group_value->id ?>" <?php
                                                if (set_value('exam_group_id') == $ex_group_value->id) {
                                                    echo "selected=selected";
                                                }
                                                ?>><?php echo $ex_group_value->name; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('exam_group_id'); ?></span>
                                    </div>
                                </div><!--./col-md-3-->
                                <div class="col-sm-6 col-lg-3 col-md-3 col20">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('exam') ?></label><small class="req"> *</small>
                                        <select  id="exam_id" name="exam_id" class="form-control" >
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('exam_id'); ?></span>
                                    </div>
                                </div><!--./col-md-3-->
                                <div class="col-sm-6 col-lg-3 col-md-3 col20">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('session'); ?></label><small class="req"> *</small>
                                        <select  id="session_id" name="session_id" class="form-control" >
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                            <?php
                                            foreach ($sessionlist as $session) {
                                                ?>
                                                <option value="<?php echo $session['id'] ?>" <?php
                                                if (set_value('session_id') == $session['id']) {
                                                    echo "selected=selected";
                                                }
                                                ?>><?php echo $session['session'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('session_id'); ?></span>
                                    </div>
                                </div><!--./col-md-3-->
                                <div class="col-sm-6 col-lg-3 col-md-12 col20">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('class'); ?></label><small class="req"> *</small>
                                        <select autofocus="" id="class_id" name="class_id" class="form-control" >
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                            <?php
                                            foreach ($classlist as $class) {
                                                ?>
                                                <option value="<?php echo $class['id'] ?>" <?php
                                                if (set_value('class_id') == $class['id']) {
                                                    echo "selected=selected";
                                                }
                                                ?>><?php echo $class['class'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('class_id'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-12 col20">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('section'); ?></label><small class="req"> *</small>
                                        <select  id="section_id" name="section_id" class="form-control" >
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('section_id'); ?></span>
                                    </div>
                                </div>



                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" name="search" value="search_filter" class="btn btn-primary pull-right btn-sm checkbox-toggle"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                    </div>
                                </div>
                            </div>  
                        </form>

</div>
<div class="box-header ptbnull"></div>  
<div class="box-header ptbnull">
<h3 class="box-title titlefix"><i class="fa fa-users"></i> Formative Exam Report</h3>

</div>
<div class="box-body">
<div class="table-responsive no-padding">
<div class="download_label"><?php ?> <?php echo $this->lang->line('student'); ?> <?php echo $this->lang->line('list')."<br>";$this->customlib->get_postmessage(); ?></div>
<table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
    <tr>
    <th>Sr No</th>
    <th>Admission No</th>
    <th>Student Name</th>
    <th>Class-Section</th>
    <th>FA1 / FA2</th>
    </tr>
 <?php
  $i=1;
  foreach($data4 as $row)
  {
      
   echo "<tr>";
         echo "<td>".$i."</td>";
        echo "<td>".$row->admission_no."</td>";
         echo "<td>".$row->firstname."</td>";
         echo "<td>".$row->firstname."</td>";
         echo "<td>".$row->reading_marks."</td>";
    
    echo "</tr>";
  $i++;
  }
   ?>
    
</table>
  <?php

                                                            function getSubjectMarks($subject_results, $subject_id) {
                                                                if (!empty($subject_results)) {
                                                                    foreach ($subject_results as $subject_result_key => $subject_result_value) {
                                                                        if ($subject_id == $subject_result_value->subject_id) {
                                                                            return $subject_result_value;
                                                                        }
                                                                    }
                                                                }
                                                                return false;
                                                            }

                                                            function get_ExamGrade($exam_grades, $percentage) {
                                                                if (!empty($exam_grades)) {
                                                                    foreach ($exam_grades as $exam_grade_key => $exam_grade_value) {

                                                                        if ($exam_grade_value->mark_from >= $percentage && $exam_grade_value->mark_upto <= $percentage) {
                                                                            return $exam_grade_value->name;
                                                                        }
                                                                    }
                                                                }

                                                                return "-";
                                                            }

                                                            function findGradePoints($exam_grades, $percentage) {

                                                                if (!empty($exam_grades)) {
                                                                    foreach ($exam_grades as $exam_grade_key => $exam_grade_value) {

                                                                        if ($exam_grade_value->mark_from >= $percentage && $exam_grade_value->mark_upto <= $percentage) {
                                                                            return $exam_grade_value->point;
                                                                        }
                                                                    }
                                                                }

                                                                return 0;
                                                            }
                                                            function aasort(&$arr) {
                                                                array_multisort(
                                                                        array_column($arr, 'result_status'), SORT_DESC, array_column($arr, 'percentage'), SORT_DESC, $arr);
//                                                           
                                                            }
                                                            function aasort_gpa(&$arr) {
                                                                array_multisort(
                                                                        array_column($arr, 'exam_qulity_point'), SORT_DESC, $arr);
//                                                           
                                                            }
                                                            ?>

                                                            <script type="text/javascript">
                                                                $(document).ready(function () {
                                                                    $.extend($.fn.dataTable.defaults, {
                                                                        searching: true,
                                                                        ordering: true,
                                                                        paging: false,
                                                                        retrieve: true,
                                                                        destroy: true,
                                                                        info: false
                                                                    });
                                                                });

                                                                var date_format = '<?php echo $result = strtr($this->customlib->getSchoolDateFormat(), ['d' => 'dd', 'm' => 'mm', 'Y' => 'yyyy']) ?>';
                                                                var class_id = '<?php echo set_value('class_id') ?>';
                                                                var section_id = '<?php echo set_value('section_id') ?>';
                                                                var session_id = '<?php echo set_value('session_id') ?>';
                                                                var exam_group_id = '<?php echo set_value('exam_group_id') ?>';
                                                                var exam_id = '<?php echo set_value('exam_id') ?>';
                                                                getSectionByClass(class_id, section_id);

                                                                // getExamgroupByClassSectionSession(class_id, section_id, session_id);
                                                                getExamByExamgroup(exam_group_id, exam_id);
                                                                $(document).on('change', '#exam_group_id', function (e) {
                                                                    $('#exam_id').html("");
                                                                    var exam_group_id = $(this).val();
                                                                    getExamByExamgroup(exam_group_id, 0);
                                                                });

                                                                $(document).on('change', '#class_id', function (e) {
                                                                    $('#section_id').html("");
                                                                    var class_id = $(this).val();
                                                                    getSectionByClass(class_id, 0);
                                                                });

                                                                function getSectionByClass(class_id, section_id) {

                                                                    if (class_id !== "") {
                                                                        $('#section_id').html("");
                                                                        var base_url = '<?php echo base_url() ?>';
                                                                        var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';


                                                                        $.ajax({
                                                                            type: "GET",
                                                                            url: base_url + "sections/getByClass",
                                                                            data: {'class_id': class_id},
                                                                            dataType: "json",
                                                                            beforeSend: function () {
                                                                                $('#section_id').addClass('dropdownloading');
                                                                            },
                                                                            success: function (data) {
                                                                                $.each(data, function (i, obj)
                                                                                {
                                                                                    var sel = "";
                                                                                    if (section_id === obj.section_id) {
                                                                                        sel = "selected";
                                                                                    }
                                                                                    div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";
                                                                                });
                                                                                $('#section_id').append(div_data);
                                                                            },
                                                                            complete: function () {
                                                                                $('#section_id').removeClass('dropdownloading');
                                                                            }
                                                                        });
                                                                    }
                                                                }


                                                                function getExamByExamgroup(exam_group_id, exam_id) {

                                                                    if (exam_group_id !== "") {
                                                                        $('#exam_id').html("");
                                                                        var base_url = '<?php echo base_url() ?>';
                                                                        var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';


                                                                        $.ajax({
                                                                            type: "POST",
                                                                            url: base_url + "admin/examgroup/getExamByExamgroup",
                                                                            data: {'exam_group_id': exam_group_id},
                                                                            dataType: "json",
                                                                            beforeSend: function () {
                                                                                $('#exam_id').addClass('dropdownloading');
                                                                            },
                                                                            success: function (data) {
                                                                                $.each(data, function (i, obj)
                                                                                {
                                                                                    var sel = "";
                                                                                    if (exam_id === obj.id) {
                                                                                        sel = "selected";
                                                                                    }
                                                                                    div_data += "<option value=" + obj.id + " " + sel + ">" + obj.exam + "</option>";
                                                                                });
                                                                                $('#exam_id').append(div_data);
                                                                            },
                                                                            complete: function () {
                                                                                $('#exam_id').removeClass('dropdownloading');
                                                                            }
                                                                        });
                                                                    }
                                                                }
                                                            </script>