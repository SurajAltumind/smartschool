<script src="<?php echo base_url(); ?>backend/plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>backend/js/ckeditor_config.js"></script>

<div class="content-wrapper" style="min-height: 946px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-calendar-times-o"></i> <?php echo $this->lang->line('class_timetable'); ?> </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('manage_lesson_plan'); ?></h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>

                    <div class="box-body">
                        <?php
                            if ($role_id == 7) 
                            {
                                ?>

                        <form action="<?php echo site_url('admin/syllabus/getteachertimetable'); ?>" id="getTimetable" class="row">
                         <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="teacher"><?php echo $this->lang->line('teachers'); ?><small class="req"> *</small></label>
                                <select class="form-control" name="teacher" id="teacher">
                                    <option value=""><?php echo $this->lang->line('select') ?></option>
                                    <?php
if (!empty($staff_list)) {
        foreach ($staff_list as $staff_key => $staff_value) {
            ?>
                                            <option value="<?php echo $staff_value['id']; ?>"><?php echo $staff_value["name"] . " " . $staff_value["surname"] . " (" . $staff_value['employee_id'] . ")"; ?></option>
                                            <?php
}
    }
    ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                             <div class="form-group">
                                <label class="dhide" style="display: block; visibility:hidden;"><?php echo $this->lang->line('teacher') ?></label>
                                <button type="submit" class="btn btn-primary btn-sm smallbtn28" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait"><?php echo $this->lang->line('search') ?></button>
                            </div>
                         </div>
                        </form>
                    <?php }?>
                        <div id="weekdates_result"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

<div class="modal fade syllbus" id="assignsyllabus"  role="dialog" aria-labelledby="evaluation" style="padding-left: 0 !important">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-media-content">
            <div class="modal-header modal-media-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="box-title" ><?php echo $this->lang->line('lesson_plan'); ?> </h4>

            </div>
                <div class="modal-body pt0 pb0">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div id="syllabus_result"></div>
                            </div><!--./row-->
                        </div><!--./col-md-12-->
                    </div><!--./row-->
                </div>
        </div>
    </div>
</div>


<div class="modal fade" id="add_assignsyllabus"  role="dialog" aria-labelledby="evaluation" style="padding-left: 0 !important">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-media-content">
            <div class="modal-header modal-media-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="box-title" id="title"> </h4>
            </div>
            <div class="modal-body pt0 pb0">
                <form id="syllabus_form" method="post" class="ptt10" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <div class="">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('lesson'); ?></label><small class="req"> *</small>
                                        <select  id="lessonid" name="lesson_id" class="form-control" >
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                        </select>
                                        <input type="hidden" id="class_id" name="class_id" class="form-control" >
                                        <input type="hidden" id="section_id" name="section_id" class="form-control" >
                                        <input type="hidden" id="subject_group_id" name="subject_group_id" class="form-control" >
                                        <input type="hidden" id="subject_id" name="subject_id" class="form-control" >
                                        <input type="hidden" id="subject_group_subject_id" name="subject_group_subject_id" class="form-control" >
                                        <input type="hidden" id="created_for" name="created_for" >
                                        <input id="subject_syllabusid" type="hidden" name="subject_syllabusid" >
                                        <span class="section_id_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('topic'); ?></label><small class="req"> *</small>
                                        <select  id="topicid" name="topic_id" class="form-control" >
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                        </select>
                                        <span class="section_id_error text-danger"></span>
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('sub_topic'); ?></label>
                                        <input type="text" id="sub_topic" name="sub_topic" class="form-control " />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('date'); ?></label><small class="req"> *</small>
                                        <input type="text" id="date" readonly name="date" class="form-control " >
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('time') . " " . $this->lang->line('from'); ?></label><small class="req"> *</small>
                                        <div class="input-group ">
                                            <input class="form-control time" readonly name="time_from" id="time_from" type="text" value="">
                                            <span class="input-group-addon" id="basic-addon2">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                            </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group ">
                                        <label for="pwd"><?php echo $this->lang->line('time') . " " . $this->lang->line('to'); ?></label><small class="req"> *</small>
                                        <div class="input-group "><input type="text" readonly id="time_to" name="time_to" class="form-control " >
                                            <span class="input-group-addon" id="basic-addon2">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="pwd"><?php echo $this->lang->line('lecture_youtube_url'); ?></label>
                                        <input type="text" id="lacture_youtube_url" name="lacture_youtube_url" class="form-control " >


                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="pwd"><?php echo $this->lang->line('lecture_video'); ?></label>
                                        <input type="file" id="lacture_video" name="lacture_video" class="form-control filestyle" >


                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('attachment'); ?></label>
                                        <input type="file" id="file"  name="file" class="form-control filestyle">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('teaching_method'); ?></label>
                                        <textarea type="text" id="teaching_method" name="teaching_method" class="form-control " ></textarea>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('general_objectives'); ?></label>
                                        <textarea type="text" id="general_objectives" name="general_objectives" class="form-control " ></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('previous_knowledge'); ?></label>
                                        <textarea type="text" id="previous_knowledge" name="previous_knowledge" class="form-control " ></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('comprehensive_questions'); ?>  </label>
                                        <textarea type="text" id="comprehensive_questions" name="comprehensive_questions" class="form-control " ></textarea>
                                    </div>
                                </div>
                                <div class="row">
                        <input type="hidden" name="ci_csrf_token" value="">
                            <?php echo $this->customlib->getCSRF(); ?>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label><?php echo $this->lang->line('class'); ?></label><small class="req"> *</small>
                                    <select autofocus="" id="class_id_filter" name="class_id_filter" class="form-control" >
                                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                                        <?php
                                        foreach ($classlistNEW as $class) 
                                        {
                                            ?>
                                            <option value="<?php echo $class['id'] ?>" <?php if (set_value('class_id') == $class['id']) echo "selected=selected" ?> ><?php echo $class['class'] ?></option>
                                            
                                            <?php
                                            $count++;
                                        }
                                        ?>
                                    </select>
                                    <span class="text-danger"><?php echo form_error('class_id'); ?></span>
                                </div>
                            </div> 
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">  
                                    <label><?php echo $this->lang->line('section'); ?></label><small class="req"> *</small>
                                    <select id="section_id_filter" name="section_id_filter" class="form-control">
                                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                                    </select>
                                    <span class="text-danger"><?php echo form_error('section_id'); ?></span>
                                </div>  
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="subject_id"><?php echo $this->lang->line('subject') ?></label><small class="req"> *</small>
                                    <select class="form-control" id="subject_id_filter" name="subject_id_filter">
                                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                                        <?php
                                        foreach ($subjectlist as $subject_key => $subject_value) {
                                            ?>
                                            <option value="<?php echo $subject_value['id']; ?>"><?php echo $subject_value['name']; ?></option>
                                             <?php
                                        }
                                        ?>
                                    </select>
                                    <span class="text text-danger subject_id_error"></span>
                                </div>
                            </div>
                            <div id="add_question">
                            <div class="col-md-6">
                                    <div class="form-group">  
                                        <label><?php echo $this->lang->line('question'); ?></label><small class="req"> *</small>
                                        <select id="question_id_filter" name="question_id_filter" class="form-control">
                                        </select>
                                    </div>  
                                </div> 

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">Timing in seconds</label>
                                        <input type="text" id="time" name="time" class="form-control">
                                    </div>
                                </div>
                                </div>
                                <button id="add_question_button" type="button" style="background-color:Green; position:absolute; bottom: 427px; left: 720px;" name="Add Question">Add Question</button>
                               <input type="number" id="question_count" name="question_count" value="" hidden>

                                <div class="col-md-12">
                                    <div class="form-group" id="get_ckeditor">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('presentation'); ?></label>
                                       <button class="btn btn-primary pull-right btn-xs" type="button" id="question" data-toggle="modal" data-location="question" data-target="#myimgModal"><i class="fa fa-plus"></i> <?php echo $this->lang->line('add') . " " . $this->lang->line('image') ?></button>
                                        <textarea name="presentation" id="question_textbox"  class="form-control ckeditor" >
                                        </textarea>
                                    </div>
                                </div>



                            </div><!--./row-->
                        </div><!--./col-md-12-->
                    </div><!--./row-->
                     <div class="box-footer row">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info pull-right" id="submit" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Please wait"><?php echo $this->lang->line('save') ?></button>
                    </div>
                </div>
                </div>

            </form>
            </div>
        </div>
    </div>
</div>
<div id="myimgModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title imgModal-title"><?php echo $this->lang->line('image') ?></h4>
            </div>
            <div class="modal-body imgModal-body pupscroll">
                <div class="form-group">
                    <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Search..." />
                </div>
                <div class="div_load">
                    <div class="loading-overlay">
                        <div class="overlay-content">Loading...</div>
                    </div>
                    <label class="total displaynone"></label>
                    <div class="row" id="media_div">

                    </div>
                    <div class="row" id="pagination">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('cancel') ?></button>
                <button type="button" class="btn btn-primary add_media"><?php echo $this->lang->line('add') ?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade syllbus" id="lacture_youtube_modal"  role="dialog" aria-labelledby="evaluation" >
    <div class="modal-dialog modal-lg" role="document" style="width:100%;height:100%">
        <div class="modal-content modal-media-content">
            <div class="modal-header modal-media-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="box-title" ><?php echo $this->lang->line('youtube_link')?></h4>

            </div>
                <div class="modal-body pt0 pb0">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row"  style="width:100%;height:660px">
                                <div id="video_url" ></div>
                            </div><!--./row-->
                        </div><!--./col-md-12-->
                    </div><!--./row-->
                </div>
        </div>
    </div>
</div>
<script>
   var  i = 2;
   
    $('#add_question_button').click(function (){
        $('#subject_id_filter').prop("disabled",true)
        $('#section_id_filter').prop("disabled",true)
        $('#class_id_filter').prop("disabled",true)
        
        if(i < 6) { 
            document.getElementById("question_count").value = i;
            var $add_div = $(' <div class="col-md-6"> <div class="form-group">  <label><?php echo $this->lang->line('question'); ?></label><small class="req"> *</small> <select id="question_id_filter'+i+'" name="question_id_filter'+i+'" class="form-control"> </select> </div> </div> <div class="col-md-4"> <div class="form-group"> <label for="pwd">Timing in seconds</label> <input type="text" id="time'+i+'" name="time'+i+'" class="form-control"> </div> </div> </div>');
        // var $add_div = $(' <div class="col-md-6"> <div class="form-group">  <label><?php echo $this->lang->line('question'); ?></label><small class="req"> *</small> <select id="question_id_filter'+i+'" name="question_id_filter'+i+'" class="form-control"> </select> </div> </div> <div class="col-md-4"> <div class="form-group"> <label for="pwd">Timing in seconds</label> <input type="text" id="time'+i+'" name="time'+i+'"class="form-control"> </div> </div> </div>');
        $('#add_question').append($add_div);
        $('#question_id_filter option').clone().appendTo('#question_id_filter'+i+'')
        // $('#question_id_filter option').clone().appendTo('#question_id_filter')
        i++;

         }
   else{
    $('#add_question_button').off("click");
   }
}
);
    function run_video(lacture_youtube_url){		
		$('#lacture_youtube_modal').modal('show');  
		var str = lacture_youtube_url;
        var res = str.split("=");
		$('#video_url').html('<iframe modestbranding=1 width="100%" height="650px" src="//www.youtube.com/embed/' + res[1] + '" allowfullscreen></iframe>');
    }
</script>	
<script>	
	function get_subject_syllabus(id)
    {
        $('#assignsyllabus').modal('show');
        $('#syllabus_result').html('');
        $.ajax({
            type: "POST",
            url: base_url + "admin/syllabus/get_subject_syllabus",
            data: {'id': id},
            success: function (data) {
                $('#syllabus_result').html(data);
            },
        });
    }

    function subject_syllabusedit(id){
        $('#title').html('<?php echo $this->lang->line('edit')." ".$this->lang->line('lesson_plan')?>');
         $.ajax({
            url: "<?php echo site_url("admin/syllabus/getsubject_syllabus/") ?>"+id,
            type: "POST",
            //data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
            },
            success: function (res)
            {

                    $('#time_from').val(res.time_from);
                    $('#time_to').val(res.time_to);
                    $('#date').val(res.date);
                    $('#created_for').val(res.created_for);
                    $('#subject_group_subject_id').val(res.subject_group_subject_id);
                    $('#teaching_method').val(res.teaching_method);
                    $('#general_objectives').val(res.general_objectives);
                    $('#previous_knowledge').val(res.previous_knowledge);
                    $('#comprehensive_questions').val(res.comprehensive_questions);
                    $('#subject_syllabusid').val(res.id);
                    $('#sub_topic').val(res.sub_topic);
                    $('#lacture_youtube_url').val(res.lacture_youtube_url);
                    get_lesson(res.subject_group_subject_id,res.lesson_id,res.subject_group_class_sections_id);
                    get_topic(res.lesson_id,res.topic_id);
                
   CKEDITOR.instances['question_textbox'].setData(res.presentation);
                $('#add_assignsyllabus').modal('show');
                 

            },
            error: function (xhr) { // if error occured
                alert("Error occured.please try again");

            }

        });

    }
 
    function get_topic(lesson_id,topic_id){
          var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
        var lessonid=lesson_id;
       $.ajax({
                type: "POST",
                url: base_url + "admin/lessonplan/gettopicBylessonid/"+lessonid,
                data: {'lessonid': lessonid},
                dataType: "json",
                beforeSend: function () {
                    $('#topicid').addClass('dropdownloading');
                },
                success: function (data) {

                    $.each(data, function (i, obj)
                    {
                        var sel = "";
                        if (topic_id == obj.id) {
                            sel = "selected";
                        }
                        div_data += "<option value=" + obj.id + " " + sel + ">" + obj.name + "</option>";
                    });
                    $('#topicid').html(div_data);
                },
                complete: function () {
                    $('#topicid').removeClass('dropdownloading');
                }
            });
    }

</script>

<script>
                function add_syllabus(subject_group_subject_id,time_from,time_to,new_date,subject_group_class_section_id){
                    $('#add_assignsyllabus').modal('show');
                     $('#title').html('<?php echo $this->lang->line('add')." ".$this->lang->line('lesson_plan')?>');
       
                    $('#time_from').val(time_from);
                    $('#time_to').val(time_to);
                    $('#date').val(new_date);

                    $('#subject_group_subject_id').val(subject_group_subject_id);
                    
                    $('#teaching_method').val('');
                    $('#general_objectives').html('');
                    $('#previous_knowledge').html('');
                    $('#comprehensive_questions').html('');
                    $('#subject_syllabusid').val('');
                    $('#sub_topic').val('');
                    $('#lacture_youtube_url').val('');
                     $(document).on('focus', '.time', function () {
                    var $this = $(this);
                    $this.datetimepicker({
                        format: 'LT'
                    });
                });

                    get_lesson(subject_group_subject_id,'',subject_group_class_section_id);

                }

                function get_lesson(subject_group_subject_id,lesson_id,subject_group_class_section_id){
                    var div_data="";

                    $('#lessonid').html('');
                    var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
                         $.ajax({
                type: "POST",
                url: base_url + "admin/lessonplan/getlessonBysubjectidedit/"+subject_group_subject_id,
                data: {'subject_group_class_sections_id': subject_group_class_section_id},
                dataType: "json",
                beforeSend: function () {
                    $('#lessonid').addClass('dropdownloading');
                },
                success: function (data) {

                    $.each(data, function (i, obj)
                    {
                        var sel = "";
                       if (lesson_id == obj.id) {
                            sel = "selected";
                        }
                        div_data += "<option value=" + obj.id + " " + sel + ">" + obj.name + "</option>";
                    });
                    $('#lessonid').append(div_data);
                },
                complete: function () {
                    $('#lessonid').removeClass('dropdownloading');
                }
            });
                }

                  $(document).on('change', '#lessonid', function () {
                 var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
                 var lessonid = $('#lessonid').val();
       $.ajax({
                type: "POST",
                url: base_url + "admin/lessonplan/gettopicBylessonid/"+lessonid,
                data: {'lessonid': lessonid},
                dataType: "json",
                beforeSend: function () {
                    $('#topicid').addClass('dropdownloading');
                },
                success: function (data) {

                    $.each(data, function (i, obj)
                    {
                        var sel = "";

                        div_data += "<option value=" + obj.id + " " + sel + ">" + obj.name + "</option>";
                    });
                    $('#topicid').html(div_data);
                },
                complete: function () {
                    $('#topicid').removeClass('dropdownloading');
                }
            });

    });


      $("#syllabus_form").on('submit', (function (e) {
        e.preventDefault();
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var $this = $(this).find("button[type=submit]:focus");

        $.ajax({
            url: "<?php echo site_url("admin/syllabus/add_syllabus") ?>",
            type: "POST",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $this.button('loading');

            },
            success: function (res)
            {

                if (res.status == "fail") {

                    var message = "";
                    $.each(res.error, function (index, value) {

                        message += value;
                    });
                    errorMsg(message);

                } else {

                    successMsg(res.message);

                   window.location.reload(true);
                }
            },
            error: function (xhr) { // if error occured
                alert("Error occured.please try again");
                $this.button('reset');
            },
            complete: function () {
                $this.button('reset');
            }

        });
    }));


 $(".ckeditor").each(function(_, ckeditor) {

 CKEDITOR.replace(ckeditor, {
                 toolbar: 'Ques',
                     customConfig: baseurl+'/backend/js/ckeditor_config.js'
                });
  });


$(document).ready(function(){
    var target_textbox="";
    $(document).on('click','#question',function(){
     getImages(1);
    });
});

function getImages(page,query=""){
         $.ajax({
            type: "POST",
            url: baseurl+'admin/question/getimages',
           data:{page:page, query:query},
            dataType: "JSON", // serializes the form's elements.
            beforeSend: function () {
$('.loading-overlay').css("display", "block");
            },
            success: function (data)
            {

             $('label.total').html("").html("<?php echo $this->lang->line('total_record'); ?> :"+data.count).css("display", "block");

            $('.imgModal-body #media_div').html("").html(data.page);
            $('.imgModal-body #pagination').html("").html(data.pagination);
$('.loading-overlay').css("display", "none");
            },
            error: function (xhr) { // if error occured

                alert("Error occured.please try again");
$('.loading-overlay').css("display", "none");
            },
            complete: function () {
$('.loading-overlay').css("display", "none");
            }
        });
}


        $(document).on('click', '.img_div_modal', function (event) {
            $('.img_div_modal div.fadeoverlay').removeClass('active');
            $(this).closest('.img_div_modal').find('.fadeoverlay').addClass('active');

        });

		$(document).on('click', '.add_media', function (event) {

            var content_html = $('div#media_div').find('.fadeoverlay.active').find('img').data('img');
            var is_image = $('div#media_div').find('.fadeoverlay.active').find('img').data('is_image');
            var content_name = $('div#media_div').find('.fadeoverlay.active').find('img').data('content_name');
            var content_type = $('div#media_div').find('.fadeoverlay.active').find('img').data('content_type');
            var vid_url = $('div#media_div').find('.fadeoverlay.active').find('img').data('vid_url');
            var content = "";


                if (typeof content_html !== "undefined") {
                    if (is_image === 1) {
                        content = '<img src="' + content_html + '">';
                    }
                    InsertHTML(content);
                    $('#myimgModal').modal('hide');
                }

        });


    function InsertHTML(content_html) {
        var aaa=target_textbox+"_textbox";
        // Get the editor instance that we want to interact with.
        var editor = CKEDITOR.instances[aaa];
        console.log(editor);


        // Check the active editing mode.
        if (editor.mode == 'wysiwyg')
        {
            editor.insertHtml(content_html);
        } else
            alert('You must be in WYSIWYG mode!');
    }
$('#myimgModal').on('shown.bs.modal', function (event) {
      button = $(event.relatedTarget);
      target_textbox = button.data('location');
      console.log(target_textbox);
})

 $('.modal').on("hidden.bs.modal", function (e) { //fire on closing modal box

        if ($('.modal:visible').length) { // check whether parent modal is opend after child modal close
            $('body').addClass('modal-open'); // if open mean length is 1 then add a bootstrap css class to body of the page
        }
    });

 function CKupdate(){
    for ( instance in CKEDITOR.instances ){
        // CKEDITOR.instances[instance].updateElement();
    CKEDITOR.instances[instance].setData('');
    }
}

 $(document).on('keyup', '#search_box', function (event) {
         var query = $('#search_box').val();
         getImages(1, query);

        });

  $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      getImages(page, query);
    });


</script>
<script>
    var base_url="<?php echo base_url(); ?>";
    <?php if ($role_id == 7) {
    ?>

         $("form#getTimetable").submit(function (e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        var staff_id=$('#teacher').val();
        $('#created_for').val(staff_id);
        if(staff_id!==''){
            get_weekdates('current_week','<?php echo $this_week_start; ?>',staff_id);
        }else{
            errorMsg('<?php echo $this->lang->line('teachers') . " " . "field is required"; ?>');
             $('#weekdates_result').html('');
        }




    });
        <?php
} else {?>
        var staff_id='<?php echo $staff_id; ?>';
$('#created_for').val(staff_id);
    get_weekdates('current_week','<?php echo $this_week_start; ?>',staff_id);
    <?php }?>


    function get_weekdates(status,date,staff_id){
        $.ajax({
            type: "POST",
            url: base_url + "admin/syllabus/get_weekdates",
            data: {'status': status,'date':date,'staff_id':staff_id},
            //dataType: "json",
            beforeSend: function () {
                //  $('#weekdates_result').addClass('dropdownloading');
            },
            success: function (data) {
                $('#weekdates_result').html(data);
            },
            complete: function () {
                //  $('#weekdates_result').removeClass('dropdownloading');
            }
        });
    }
</script>

<script type="text/javascript">
      $('#add_assignsyllabus').on('hidden.bs.modal', function () {
        CKupdate();
            $(this)
                    .find("input,textarea")
                    .val('')
                    .end()
                    .find("input[type=checkbox], input[type=radio]")
                    .prop("checked", "")
                    .end();
                       $('#lessonid').find('option').not(':first').remove();
        });

       function CKupdate(){
    for ( instance in CKEDITOR.instances ){
        // CKEDITOR.instances[instance].updateElement();
    CKEDITOR.instances[instance].setData('');
    }
}

</script>

<script> 

//   document.getElementById("printModal").style.display = "block";
//   document.getElementById("btnExportModal").style.display = "block";

        function printDivModal() { 
		
            // document.getElementById("noprint").style.display = "none";
			$("#visibleModal").removeClass("hide");
			$(".pull-right").addClass("hide");
			
            document.getElementById("printModal").style.display = "none";
             document.getElementById("btnExportModal").style.display = "none";
            var divElements = document.getElementById('transfeeModal').innerHTML;
            var oldPage = document.body.innerHTML;
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";
            window.print();
            document.body.innerHTML = oldPage;

            location.reload(true);
        }
    
 function fnExcelReportModal()
{
    var tab_text="<table border='2px'><tr >";
    var textRange; var j=0;
    tab = document.getElementById('headerTableModal'); // id of table
	
    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }
	 $("#visibleModal").removeClass("hide");
    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 
	$("#visibleModal").addClass("hide");
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}  


//modified question popup 
      //--custom
      function getSectionByClass(class_id, section_id) 
    {
        if(class_id != "" && section_id != "") 
        {
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

    $(document).ready(function() 
    {
        var class_id = $('#class_id_filter').val();
        var section_id = '<?php echo set_value('section_id_filter') ?>';
        getSectionByClass(class_id, section_id);
        $(document).on('change', '#class_id_filter', function (e) 
        {
            $('#section_id_filter').html("");
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
                    $('#section_id_filter').append(div_data);
                }
            });
        });
    });

   
    $(document).ready(function () 
    {
        var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
        $(document).on('change', '#subject_id_filter', function (e) 
        {
            var class_id_filter = $('#class_id_filter').val();
            var section_id_filter = $('#section_id_filter').val();
            var subject_id_filter = $('#subject_id_filter').val();        
            // var status=$(this).attr('state');
            $.ajax({
                url:'<?=base_url('admin/Question/getVideoQuestionByFilter'); ?>',
                method: 'POST',                
                data:{class_id:class_id_filter,section_id:section_id_filter,subject_id:subject_id_filter},
                dataType:'json',
                success: function(data)
                {                   
                               var html = '';
                               var i;
                               for(i=0; i<data.length; i++)
                               {
                                   html +="<option value="+data[i].id+" data-id='"+ i +"' ques='"+data[i].question+"'>"+data[i].question+"</option>";
                               }
                               $('#question_id_filter').html(html);
                           },
                           error:function(){
                               alert('could not get data from database');
                           }
        });
            // getQuestions();
        });
    });

    //--custom
</script>