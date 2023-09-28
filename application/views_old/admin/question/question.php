<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<style type="text/css">
    .loading-overlay {
    display: none;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 2;
    background: rgba(255,255,255,0.7);
    }
 .overlay-content {
    position: absolute;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    top: 50%;
    left: 0;
    right: 0;
    text-align: center;
    color: #555;
    }
    .div_load{position: relative;}

  /* ---------------- */
    /*REQUIRED*/
    .carousel-row {
        margin-bottom: 10px;
    }
    .slide-row {
        padding: 0;
        background-color: #ffffff;
        min-height: 150px;
        border: 1px solid #e7e7e7;
        overflow: hidden;
        height: auto;
        position: relative;
    }
    .slide-carousel {
        width: 20%;
        float: left;
        display: inline-block;
    }
    .slide-carousel .carousel-indicators {
        margin-bottom: 0;
        bottom: 0;
        background: rgba(0, 0, 0, .5);
    }
    .slide-carousel .carousel-indicators li {
        border-radius: 0;
        width: 20px;
        height: 6px;
    }
    .slide-carousel .carousel-indicators .active {
        margin: 1px;
    }
    .slide-content {
        position: absolute;
        top: 0;
        left: 20%;
        display: block;
        float: left;
        width: 80%;
        max-height: 76%;
        padding: 1.5% 2% 2% 2%;
        overflow-y: auto;
    }
    .slide-content h4 {
        margin-bottom: 3px;
        margin-top: 0;
    }
    .slide-footer {
        position: absolute;
        bottom: 0;
        left: 20%;
        width: 78%;
        height: 20%;
        margin: 1%;
    }
    /* Scrollbars */
    .slide-content::-webkit-scrollbar {
        width: 5px;
    }
    .slide-content::-webkit-scrollbar-thumb:vertical {
        margin: 5px;
        background-color: #999;
        -webkit-border-radius: 5px;
    }
    .slide-content::-webkit-scrollbar-button:start:decrement,
    .slide-content::-webkit-scrollbar-button:end:increment {
        height: 5px;
        display: block;
    }
/* ------------ */
</style>
<script src="<?php echo base_url(); ?>backend/plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>backend/js/ckeditor_config.js"></script>

<div class="content-wrapper">
    <section class="content-header">
        <h1><i class="fa fa-bus"></i> <?php echo $this->lang->line('question'); ?></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary" id="route">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><?php echo $this->lang->line('question') . " " . $this->lang->line('bank'); ?></h3>
                        <?php
                                if ($this->rbac->hasPrivilege('question_bank', 'can_add')) 
                                {
                                    ?>
                                <button class="btn btn-primary btn-sm pull-right question-btn" data-recordid="0"><i class="fa fa-plus"></i> <?php echo $this->lang->line('add') . " " . $this->lang->line('question'); ?></button>
                                <?php
                                }
                        ?>
                        
                    </div>
                    
                    

                    <div id="question_filter" class="box-body">
                        <div class="mailbox-controls">
                            <div class="pull-right">
                            </div>
                        </div>
                        <div class="mailbox-messages table-responsive">
                        <!-- <form role="form" action="<?php echo site_url('admin/question') ?>" method="post" class=""> -->
                        <form role="form" name="que" method="POST" class="">
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
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a class="btn btn-primary btn-sm checkbox-toggle pull-right que-filter" name="search" value="search_filter"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></a>
                                </div>
                            </div>
                        </div><!--./row-->    
                    </form>
                                
                            <div class="download_label"><?php echo $this->lang->line('question') . " " . $this->lang->line('bank'); ?></div>
                            <!-- <textarea class="form-control question" id="question" name="question"></textarea> -->
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('class') ?></th>
                                        <th><?php echo $this->lang->line('section') ?></th>
                                        <th><?php echo $this->lang->line('subject') ?></th>
                                        <th><?php echo $this->lang->line('question') ?></th>
                                        <th><?php echo $this->lang->line('answer') ?></th>

                                        <th class="pull-right no-print"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                
                                <tbody id="question_f">

                                </tbody>

                                <!-- <tbody>
                                    <?php
                                            $count = 1;
                                            foreach ($questionList as $subject_key => $subject_value) {
                                                ?>
                                        <tr>
                                            <td class="mailbox-name"> <?php echo $subject_value->class ?></td>
                                            <td class="mailbox-name"> <?php echo $subject_value->section ?></td>
                                            <td class="mailbox-name"> <?php echo $subject_value->name; ?></td>
                                            <td class="mailbox-name"> <?php echo readmorelink($subject_value->question); ?></td>
                                            <td class="mailbox-name"> <?php echo findOption($questionOpt, $subject_value->correct); ?></td>
                                            <td class="pull-right">
                                                <?php if ($this->rbac->hasPrivilege('question_bank', 'can_edit')) {?>
                                                <button type="button" data-placement="left" class="btn btn-default btn-xs question-btn-edit" data-toggle="tooltip" id="load" data-recordid="<?php echo $subject_value->id; ?>" title="<?php echo $this->lang->line('edit'); ?>" ><i class="fa fa-pencil"></i></button>
                                            <?php }
                                                if ($this->rbac->hasPrivilege('question_bank', 'can_delete')) {
                                                    ?>
                                                <a data-placement="left" href="<?php echo base_url(); ?>admin/question/delete/<?php echo $subject_value->id; ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm('<?php echo $this->lang->line('delete_confirm') ?>');">
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            <?php }?>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        $count++;
                                        ?>
                                </tbody> -->
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </section>
</div>


<?php
function findOption($questionOpt, $find)
{

    foreach ($questionOpt as $quet_opt_key => $quet_opt_value) {
        if ($quet_opt_key == $find) {
            return $quet_opt_value;
        }
    }
    return false;
}

?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $this->lang->line('question') ?></h4>
            </div>
            <form action="<?php echo site_url('admin/question/add'); ?>" method="POST" id="formsubject">
                <div class="modal-body">
                    <input type="hidden" name="recordid" value="0">
                    <!-- custom code start -->
                     			
                                <div class="form-group">
                                    <label><?php echo $this->lang->line('class'); ?></label><small class="req"> *</small>
                                    <select autofocus="" id="class_id" name="class_id" class="form-control" >
                                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                                        <?php
                                        foreach ($classlistNEW as $class) {
                                            ?>
                                            <option value="<?php echo $class['id'] ?>" <?php if (set_value('class_id') == $class['id']) echo "selected=selected" ?> ><?php echo $class['class'] ?></option>
                                            <?php
                                            $count++;
                                        }
                                        ?>
                                    </select>
                                    <span class="text-danger"><?php echo form_error('class_id'); ?></span>
                                </div>
                           
                                <div class="form-group">  
                                    <label><?php echo $this->lang->line('section'); ?></label><small class="req"> *</small>
                                    <select id="section_id" name="section_id" class="form-control">
                                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                                    </select>
                                    <span class="text-danger"><?php echo form_error('section_id'); ?></span>
                                </div>
                    <!-- custom code end -->
                    <div class="form-group">
                        <label for="subject_id"><?php echo $this->lang->line('subject') ?></label><small class="req"> *</small>

                        <select class="form-control" name="subject_id">
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
                    <div class="form-group">

                        <label for="question"><?php echo $this->lang->line('question') ?></label><small class="req"> *</small>

                    <button class="btn btn-primary pull-right btn-xs" type="button" id="question" data-toggle="modal" data-location="question" data-target="#myimgModal"><i class="fa fa-plus"></i><?php echo $this->lang->line('add_image'); ?></button>

                        <textarea class="form-control ckeditor" id="question_textbox" name="question"></textarea>
                        <span class="text text-danger question_error"></span>
                    </div>
                    <?php
                    foreach ($questionOpt as $question_opt_key => $question_opt_value) {
                        ?>
                        <div class="form-group">
                            <label for="<?php echo $question_opt_key; ?>"><?php echo $this->lang->line('option_' . $question_opt_value); ?><?php if ($question_opt_value != 'E') {?><small class="req"> *</small><?php }?></label>

                        <button class="btn btn-primary pull-right btn-xs" type="button" data-location="<?php echo $question_opt_key; ?>" id="<?php echo $question_opt_key; ?>" data-toggle="modal" data-target="#myimgModal"><i class="fa fa-plus"></i><?php echo $this->lang->line('add_image'); ?></button>

                            <textarea class="form-control ckeditor" name="<?php echo $question_opt_key; ?>" id="<?php echo $question_opt_key . "_textbox"; ?>"></textarea>
                            <span class="text text-danger <?php echo $question_opt_key; ?>_error"></span>
                        </div>
                        <?php
                                }
                                ?>
                    <div class="form-group">
                        <label for="subject_id"><?php echo $this->lang->line('answer') ?></label><small class="req"> *</small>

                        <select class="form-control" name="correct">
                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                            <?php
                                            foreach ($questionOpt as $question_opt_key => $question_opt_value) {
                                                ?>
                                                                            <option value="<?php echo $question_opt_key; ?>"><?php echo $question_opt_value; ?></option>
                                                                            <?php
                                            }
                                            ?>
                        </select>
                        <span class="text text-danger correct_error"></span>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Saving..."><?php echo $this->lang->line('save') ?></button>
                </div>
        </div>
        </form>
    </div>
</div>


<!-- Modal -->
<div id="myimgModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title imgModal-title"><?php echo $this->lang->line('images'); ?> </h4>
      </div>
      <div class="modal-body imgModal-body pupscroll">
          <div class="form-group">
            <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Search..." />
          </div>
          <div class="div_load">

          <div class="loading-overlay">
            <div class="overlay-content"> <?php echo $this->lang->line('loading'); ?> </div>
        </div>
             <label class="total displaynone"></label>
<div class="row" id="media_div">

</div>
<div class="row" id="pagination">

</div>
          </div>

      </div>
<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?> </button>
                <button type="button" class="btn btn-primary add_media"><?php echo $this->lang->line('add'); ?></button>
            </div>
    </div>

  </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#myModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: false
        })

        $('#myModal').on('hidden.bs.modal', function () {

             CKupdate();
            $(this)
                    .find("input,textarea,select")
                    .val('')
                    .end()
                    .find("input[type=checkbox], input[type=radio]")
                    .prop("checked", "")
                    .end();
        });
        $(document).on('click', '.question-btn', function () {
            var recordid = $(this).data('recordid');
            $('input[name=recordid]').val(recordid);
            $('#myModal').modal('show');

        });

        $(document).on('click', '.question-btn-edit', function () 
        {
            var $this = $(this);
            var recordid = $this.data('recordid');
            $('input[name=recordid]').val(recordid);
            $.ajax({
                type: 'POST',
                url: baseurl + "admin/question/getQuestionByID",
                data: {'recordid': recordid},
                dataType: 'JSON',
                beforeSend: function () {
                    $this.button('loading');
                },
                success: function (data) 
                {
                    if(data.status) {
                        $('select[name=class_id]').val(data.result.class);
                        $('select[name=section_id]').val(data.result.section);
                        $('select[name=subject_id]').val(data.result.subject_id);
                        $('select[name=correct]').val(data.result.correct);
                        CKEDITOR.instances['question_textbox'].setData(data.result.question);
                        CKEDITOR.instances['opt_a_textbox'].setData(data.result.opt_a);
                        CKEDITOR.instances['opt_b_textbox'].setData(data.result.opt_b);
                        CKEDITOR.instances['opt_c_textbox'].setData(data.result.opt_c);
                        CKEDITOR.instances['opt_d_textbox'].setData(data.result.opt_d);
                        CKEDITOR.instances['opt_e_textbox'].setData(data.result.opt_e);
                        $('#myModal').modal('show');
                    }
                    $this.button('reset');
                },
                error: function (xhr) { // if error occured
                    alert("Error occured.please try again");
                    $this.button('reset');
                },
                complete: function () {
                    $this.button('reset');
                }
            });

        });



    });

    $("form#formsubject").submit(function (e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        // $("span[id$='_error']").html("");
        var form = $(this);
        var url = form.attr('action');
        var submit_button = form.find(':submit');
        var post_params = form.serialize();

        for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            dataType: "JSON", // serializes the form's elements.
            beforeSend: function () {
                $("[class$='_error']").html("");
                submit_button.button('loading');
            },
            success: function (data)
            {

                if (!data.status) {
                    $.each(data.error, function (index, value) {
                        var errorDiv = '.' + index + '_error';
                        $(errorDiv).html(value);
                    });
                } else {
                    location.reload();
                }
            },
            error: function (xhr) { // if error occured
                submit_button.button('reset');
                alert("Error occured.please try again");

            },
            complete: function () {
                submit_button.button('reset');
            }
        });


    });

</script>


        <script>

 $(".ckeditor").each(function(_, ckeditor) {

 CKEDITOR.replace(ckeditor, {
                 toolbar: 'Ques',
                     customConfig: baseurl+'/backend/js/ckeditor_config.js'
                });
  });


$(document).ready(function(){
    var target_textbox="";
    $(document).on('click','#question,#opt_a,#opt_b,#opt_c,#opt_d,#opt_e',function(){
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

             $('label.total').html("").html("<?php echo $this->lang->line('total_record'); ?>: "+data.count).css("display", "block");

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

<script type="text/javascript">
    function getSectionByClass(class_id, section_id) 
    {
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

    $(document).ready(function () 
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
        var class_id = $('#class_id').val();
        var section_id = '<?php echo set_value('section_id') ?>';
        getSectionByClass(class_id, section_id);
        $(document).on('change', '#class_id', function (e) 
        {
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

    $(document).ready(function () 
    {
        getQuestions();
    });
    function getQuestions() 
    {
        var class_id_filter = $('#class_id_filter').val();
        var section_id_filter = $('#section_id_filter').val();
        var subject_id_filter = $('#subject_id_filter').val();
        // var status=$(this).attr('state');
            $.ajax({
                url:'<?=base_url('admin/Question/getQuestionByFilter'); ?>',
                method: 'POST',                
                data:{class_id:class_id_filter,section_id:section_id_filter,subject_id:subject_id_filter},
                dataType:'json',
                success: function(data){
                               var html = '';
                               var i;
                               for(i=0; i<data.length; i++)
                               {
                                   html +='<tr>'+
                                   '<td data-label="username">'+data[i].class+'</td>'+
                                       '<td>'+data[i].section+'</td>'+
                                       '<td>'+data[i].name+'</td>'+
                                       '<td>'+data[i].question+'</td>'+
                                       '<td>'+data[i].correct+'</td>'+
                                       '<td><button type="button" data-placement="left" class="btn btn-default btn-xs question-btn-edit" data-toggle="tooltip" id="load" data-recordid='+data[i].id+' title="<?php echo $this->lang->line('edit'); ?>" ><i class="fa fa-pencil"></i></button></td>'+
                                       '<td><a data-placement="left" href="<?=base_url();?>admin/question/delete/'+data[i].id+'" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm(<?php echo $this->lang->line("delete_confirm") ?>);"><i class="fa fa-remove"></i></a></td>'+
                                       '</tr>';
                               }
                               $('#question_f').html(html);
                           },
                           error:function(){
                               alert('could not get data from database');
                           }
        });
    }

     // filter questions
     $('#question_filter').on('click','.que-filter',function()
     {
        var class_id_filter = $('#class_id_filter').val();
        var section_id_filter = $('#section_id_filter').val();
        var subject_id_filter = $('#subject_id_filter').val();
        // var status=$(this).attr('state');
            $.ajax({
                url:'<?=base_url('admin/Question/getQuestionByFilter'); ?>',
                method: 'POST',                
                data:{class_id:class_id_filter,section_id:section_id_filter,subject_id:subject_id_filter},
                dataType:'json',
                success: function(data){
                               var html = '';
                               var i;
                               for(i=0; i<data.length; i++)
                               {
                                html +='<tr>'+
                                   '<td data-label="username">'+data[i].class+'</td>'+
                                       '<td>'+data[i].section+'</td>'+
                                       '<td>'+data[i].name+'</td>'+
                                       '<td>'+data[i].question+'</td>'+
                                       '<td>'+data[i].correct+'</td>'+
                                       '<td><button type="button" data-placement="left" class="btn btn-default btn-xs question-btn-edit" data-toggle="tooltip" id="load" data-recordid='+data[i].id+' title="<?php echo $this->lang->line('edit'); ?>" ><i class="fa fa-pencil"></i></button></td>'+
                                       '<td><a data-placement="left" href="<?=base_url();?>admin/question/delete/'+data[i].id+'" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm(<?php echo $this->lang->line("delete_confirm") ?>);"><i class="fa fa-remove"></i></a></td>'+
                                       '</tr>';
                               }
                               $('#question_f').html(html);
                           },
                           error:function(){
                               alert('could not get data from database');
                           }
        });
    });
</script>


