<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<div class="content-wrapper" style="min-height: 946px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-line-chart"></i> <?php echo $this->lang->line('reports'); ?> <small> <?php echo $this->lang->line('filter_by_name1'); ?></small></h1>
    </section>
    <!-- Main content -->
    <section class="content" >
        <?php $this->load->view('reports/_studentinformation'); ?>
        <div class="row">
            <div class="col-md-12">
            <div class="box removeboxmius">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-users"></i>
                        <?php echo form_error('student'); ?>  Active <?php echo $this->lang->line('student') . " " . $this->lang->line('report'); ?></h3>
                    </div>
                    <div class="box-body table-responsive">
					<div class="download_label">Active<?php echo $this->lang->line('student') . " " . $this->lang->line('report')."<br>";$this->customlib->get_postmessage();
                        ?></div>
                        <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sno.</th>
                                    <th>Class.</th>
                                    <th>Total Students</th>
                                    <th>RTE</th>
                                    <th>Male</th>
                                    <th>Female</th>
                                    <th>General</th>
                                    <th>OBC</th>
                                    <th>ST</th>
                                    <th>SC</th>
                                    <th>SBC</th>
                                    <th>Minority</th>
                                    <th>Unknown</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if (empty($resultlist)) 
                                    { 
                                ?>
                                <?php 
                                } 
                                    else 
                                    { $count = 1;
                                    foreach ($resultlist as $student) 
                                    {
                                       $class= $this->student_model->activestudentsbyClass($student['class']);
                                       $rte= $this->student_model->activestudents_rte($student['class']);
                                       $male= $this->student_model->activestudents_male($student['class']);
                                       $female= $this->student_model->activestudents_female($student['class']);
                                       $stud= $this->student_model->allactivestudents($student['class']);
                                       $student_cat=array();
                                       foreach($class as $clas)
                                       {
                                        if($clas['category_id']=='')
                                        {
                                            $cat=0;
                                        }
                                        else
                                        {
                                                $cat=$clas['category_id'];
                                        }
                                        $student_cat[$cat]=$clas;
                                    }
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                   <td><?php echo $student['class']; ?></td>
                                    <td><?php echo $stud[0]['total']?></td>
                                    <td><?php echo $rte[0]['rte']?></td>
                                    <td><?php echo $male[0]['gender']?></td>
                                    <td><?php echo $female[0]['gender']?></td>
                                    <td><?php echo $student_cat[1]['students_cat']?></td>
                                    <td><?php echo $student_cat[2]['students_cat']?></td>
                                    <td><?php echo $student_cat[4]['students_cat']?></td>
                                    <td><?php echo $student_cat[3]['students_cat']?></td>
                                    <td><?php echo $student_cat[5]['students_cat']?></td>
                                    <td><?php echo $student_cat[6]['students_cat']?></td>
                                    <td><?php echo $student_cat[0]['students_cat']?></td>								    
                                </tr>
                                <?php   $count++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
               </div>           
           </div><!-- ./col-md-12 -->  
        </div>       
</div>  
</section>
</div>

<script type="text/javascript">
    function getSectionByClass(class_id, section_id) {
        if (class_id != "" && section_id != "") {
            $('#section_id').html("");
            var base_url = '<?php echo base_url() ?>';
            var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
            $.ajax({
                type: "GET",
                url: base_url + "sections/getByClass",
                data: {'class_id': class_id},
                dataType: "json",
                success: function (data) {
                    $.each(data, function (i, obj)
                    {
                        var sel = "";
                        if (section_id == obj.section_id) {
                            sel = "selected";
                        }
                        div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";
                    });
                    $('#section_id').append(div_data);
                }
            });
        }
    }

    $(document).ready(function () {
        var class_id = $('#class_id').val();
        var section_id = '<?php echo set_value('section_id') ?>';
        getSectionByClass(class_id, section_id);
        $(document).on('change', '#class_id', function (e) {
            $('#section_id').html("");
            var class_id = $(this).val();
            var base_url = '<?php echo base_url() ?>';
            var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
            $.ajax({
                type: "GET",
                url: base_url + "sections/getByClass",
                data: {'class_id': class_id},
                dataType: "json",
                success: function (data) {
                    $.each(data, function (i, obj)
                    {
                        div_data += "<option value=" + obj.section_id + ">" + obj.section + "</option>";
                    });
                    $('#section_id').append(div_data);
                }
            });
        });
    });
</script>