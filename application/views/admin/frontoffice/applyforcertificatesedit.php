<div class="content-wrapper" style="min-height: 348px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-ioxhost"></i> <?php echo $this->lang->line('front_office'); ?>
    </section>
    <?php $call_type = $this->customlib->getCalltype(); ?>
    <section class="content">
        <div class="row">
            <?php if ($this->rbac->hasPrivilege('applyforcertificates', 'can_add') || $this->rbac->hasPrivilege('applyforcertificates', 'can_edit')) { ?>
                <div class="col-md-4">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo $this->lang->line('edit'); ?> <?php echo $this->lang->line('applyforcertificates'); ?></h3>
                        </div><!-- /.box-header -->

                        <form id="form1" action="<?php echo site_url('admin/applyforcertificates/edit/' . $Call_data['id']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="box-body">

                                <?php echo $this->session->flashdata('msg') ?>



                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo $this->lang->line('name'); ?></label>
                                    <input type="text" id="name" class="form-control" value="<?php echo set_value('name', $Call_data['name']); ?>" name="name">

                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="pwd"><?php echo $this->lang->line('phone'); ?></label> <small class="req"> *</small>
                                    <input type="text" class="form-control" value="<?php echo set_value('contact', $Call_data['contact']); ?>" name="contact">
                                    <span class="text-danger"><?php echo form_error('contact'); ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="pwd"><?php echo $this->lang->line('date'); ?></label>
                                    <input id="date" name="date" placeholder="" type="text" class="form-control date" value="<?php echo set_value('date', date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($Call_data['date']))); ?>" readonly="readonly" />

                                </div>
                                <div class="form-group">
                                    <label for="email"><?php echo $this->lang->line('reason'); ?></label>
                                    <input type="text" class="form-control" id="description" value="<?php echo set_value('description', $Call_data['description']); ?>" name="description">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="pwd"><?php echo $this->lang->line('next_follow_up_date'); ?></label>
                                        <input id="follow_up_date" name="follow_up_date" placeholder="" type="text" class="form-control date" value="<?php if ($Call_data['follow_up_date'] != '0000-00-00') {
                                                                                                                                                            echo set_value('follow_up_date', date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($Call_data['follow_up_date'])));
                                                                                                                                                        }  ?>" readonly="readonly" />
                                        <span class="text-danger"><?php echo form_error('follow_up_date'); ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pwd"><?php echo $this->lang->line('approved_by'); ?></label>
                                    <input type="text" class="form-control" value="<?php echo set_value('approved_by', $Call_data['approved_by']); ?>" name="approved_by">
                                    <span class="text-danger"><?php echo form_error('approved_by'); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo $this->lang->line('status'); ?></label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="status"><?php echo set_value('status', $Call_data['status']); ?></option>
                                        <option value="In Process"><?php echo $this->lang->line('in_process') ?>In-Process</option>
                                        <option value="Completed"><?php echo $this->lang->line('completed') ?>Completed</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pwd"><?php echo $this->lang->line('admission_no'); ?></label>
                                    <textarea class="form-control" id="note" name="note" rows="3"><?php echo set_value('note', $Call_data['note']); ?></textarea>
                                    <span class="text-danger"><?php echo form_error('note'); ?></span>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('certificate_type'); ?></label><small class="req"> *</small>
                                        <select id="certificate_type" name="certificate_type" class="form-control">
                                            <option value="certificate_type"><?php echo set_value('certificate_type', $Call_data['certificate_type']); ?></option>
                                            <?php

                                            $count = 0;
                                            foreach ($certificates as $r => $rv) {
                                                $certificate_type = $rv['certificate_name'];
                                                $count++;
                                            ?>
                                                <option value="<?php echo $certificate_type ?> " id="certificate_type" name="certificate_type"><?php echo $certificate_type ?> </option>

                                            <?php
                                            }
                                            ?>



                                            ?>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('certificate_name'); ?></span>
                                    </div>
                                </div>

                            </div><!-- /.box-body -->








                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                                <button type="button" onClick="printData()" class="btn btn-info pull-right"><?php echo $this->lang->line('print'); ?></button>
                            </div>
                        </form>
                    </div>

                </div>
                <!--/.col (right) -->
                <!-- left column -->
            <?php } ?>
            <div class="col-md-<?php
                                if ($this->rbac->hasPrivilege('applyforcertificates', 'can_add') || $this->rbac->hasPrivilege('applyforcertificates', 'can_edit')) {
                                    echo "8";
                                } else {
                                    echo "12";
                                }
                                ?>">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><?php echo $this->lang->line('applied'); ?> <?php echo $this->lang->line('list'); ?></h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="download_label"><?php echo $this->lang->line('applyforcertificates'); ?></div>
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped table-bordered example">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('name'); ?>
                                        </th>
                                        <th><?php echo $this->lang->line('phone'); ?>
                                        </th>
                                        <th><?php echo $this->lang->line('date'); ?>
                                        </th>
                                        <th><?php echo $this->lang->line('status'); ?>
                                        </th>
                                        <th><?php echo $this->lang->line('next_follow_up_date'); ?></th>
                                        <th><?php echo $this->lang->line('certificate_type'); ?>
                                        </th>
                                        <th class="text-right"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (empty($CallList)) {
                                    ?>

                                        <?php
                                    } else {
                                        foreach ($CallList as $key => $value) {
                                            // print_r($value);
                                        ?>
                                            <tr>
                                                <td class="mailbox-name"><?php echo $value['name']; ?></td>
                                                <td class="mailbox-name"><?php echo $value['contact']; ?></td>
                                                <td class="mailbox-name"><?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($value['date'])); ?> </td>
                                                <td class="mailbox-name"><?php echo $value['status']; ?></td>
                                                <td class="mailbox-name"> <?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($value['follow_up_date'])); ?></td>
                                                <td class="mailbox-name"> <?php echo $value['certificate_type']; ?></td>
                                                <td class="mailbox-date pull-right">

                                                    <a onclick="getRecord(<?php echo $value['id']; ?>)" class="btn btn-default btn-xs" data-target="#calldetails" data-toggle="modal" title="View"><i class="fa fa-reorder"></i></a>
                                                    <?php if ($this->rbac->hasPrivilege('phone_call_log', 'can_edit')) { ?>
                                                        <a data-placement="left" href="<?php echo base_url('admin/applyforcertificates/edit/' . $value['id']) ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="<?php echo $this->lang->line('edit'); ?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    <?php } ?>
                                                    <?php if ($this->rbac->hasPrivilege('phone_call_log', 'can_delete')) { ?>
                                                        <a data-placement="left" href="<?php echo base_url('admin/applyforcertificates/delete/' . $value['id']) ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="" onclick="return confirm('<?php echo $this->lang->line('delete_confirm') ?>');" data-original-title="<?php echo $this->lang->line('delete'); ?>">
                                                            <i class="fa fa-remove"></i>
                                                        </a>
                                                    <?php } ?>
                                                </td>


                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table><!-- /.table -->



                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>
            </div>
            <!--/.col (left) -->

        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- new END -->
<div id="calldetails" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog2 modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $this->lang->line('details'); ?></h4>
            </div>
            <div class="modal-body" id="getdetails">
            </div>
        </div>
    </div>
</div>
</div><!-- /.content-wrapper -->
<script type="text/javascript">
    function getRecord(id) {
        //alert(id);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/applyforcertificates/details/' + id,
            success: function(result) {
                //alert(result);
                $('#getdetails').html(result);
            }


        });
    }

    function printData() {
        <?php
        date_default_timezone_set("Asia/kolkata");
        $date = date('Y-m-d');
        ?>
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";

        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html>');
        frameDoc.document.write('<head>');
        frameDoc.document.write('<link href="' + "<?= base_url() ?>css/printCertificate.css" + '" rel="stylesheet" type="text/css" />');
        frameDoc.document.write('<title></title>');
        frameDoc.document.write('</head>');
        frameDoc.document.write('<body>');
        frameDoc.document.write('<div id="salutation">');
        frameDoc.document.write('<h4>Place:Thallada,</h4>');
        frameDoc.document.write('<h4>Date:<?php echo $date ?>.</h4>');
        frameDoc.document.write('</div>')
        frameDoc.document.write('<div id="salutation1">');
        frameDoc.document.write('<h4>To,</h4>');
        frameDoc.document.write('<h4>The Headmaster,</h4>');
        frameDoc.document.write('<h4>Bala bharathi vidyalayam, Thallada</h4>');
        frameDoc.document.write('</div>')
        frameDoc.document.write('<div id="subject">');
        frameDoc.document.write('<h4>Subject:Application for ' + document.getElementById("certificate_type").value + '</h4>');
        frameDoc.document.write('</div>')
        frameDoc.document.write('<div id="salutation1">');
        frameDoc.document.write('<h4>Respected sir,</h4>');
        frameDoc.document.write('</div>')
        frameDoc.document.write('<div id="print_certificate">');
        frameDoc.document.write('<h4>With due respect,this is to inform you that Iam completed my 10th class in academic year 2020-21 in your school. For higher studies i want my ' + document.getElementById("certificate_type").value + ' and study conduct.So I request you to kindly grant my certificates.</h4>');
        frameDoc.document.write('</div>');
        frameDoc.document.write('<div id="thank">');
        frameDoc.document.write('<h4>Thank you sir,</h4>');
        frameDoc.document.write('</div>')
        frameDoc.document.write('<div id="sign">');
        frameDoc.document.write('<h3>Yours Obediently</h3>');
        frameDoc.document.write('<h3>' + document.getElementById("name").value + '</h3>');
        frameDoc.document.write('</body>');
        frameDoc.document.write('</html>');
        frameDoc.document.close();
        setTimeout(function() {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);


        return true;

    }
</script>