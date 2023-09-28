<div class="content-wrapper" style="min-height: 348px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-ioxhost"></i> Create Student Record Sheet
    </section>
    <?php $call_type = $this->customlib->getCalltype(); ?>
    <section class="content">
        <div class="row">
            
                <div class="col-md-4">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Student Record Sheet</h3>
                        </div><!-- /.box-header -->

                        <form id="form1" action="<?php echo site_url('admin/CreateStudentRecordSheet') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="box-body">

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Admission No</label>
                                    <input type="text" class="form-control" id="admission_no"  name="admission_no">
                                </div> 

                               <div class="form-group">
                                    <label for="exampleInputEmail1">June &  Aug Class.</label>
                                    <input type="text" class="form-control" id="juneJulyClass"  name="juneJulyClass">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">June &  Aug Working Days.</label>
                                    <input type="text" class="form-control" id="juneJulyWrkDay"  name="juneJulyWrkDay">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">June &  Aug Days of Present.</label>
                                    <input type="text" class="form-control" id="juneJulyPrstDay"  name="juneJulyPrstDay">
                                </div>
                                

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sept &  Nov Class.</label>
                                    <input type="text" class="form-control" id="septNovClass"  name="septNovClass">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sept &  Nov Working Days.</label>
                                    <input type="text" class="form-control" id="septNovWrkDay"  name="septNovWrkDay">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sept &  Nov Days of Present.</label>
                                    <input type="text" class="form-control" id="septNovPrstDay"  name="septNovPrstDay">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dec &  Feb Class.</label>
                                    <input type="text" class="form-control" id="decFebClass"  name="decFebClass">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dec &  Feb Working Days.</label>
                                    <input type="text" class="form-control" id="decFebWrkDay"  name="decFebWrkDay">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dec &  Feb Days of Present.</label>
                                    <input type="text" class="form-control" id="decFebPrstDay"  name="decFebPrstDay">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mar &  May Class.</label>
                                    <input type="text" class="form-control" id="marMayClass"  name="marMayClass">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mar &  May Working Days.</label>
                                    <input type="text" class="form-control" id="marMayWrkDay"  name="marMayWrkDay">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mar &  May Days of Present.</label>
                                    <input type="text" class="form-control" id="marMayPrstDay"  name="marMayPrstDay">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Conduct</label>
                                    <input type="text" class="form-control" id="conduct"  name="conduct">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date of Leaving School </label>
                                    <input type="text" class="form-control" id="dateOfLeavingSchool"  name="dateOfLeavingSchool">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vth Class Course on</label>
                                    <input type="text" class="form-control" id="classCourseOn"  name="classCourseOn">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Identification of Marks: </label>
                                    <input type="text" class="form-control" id="identitymarkone"  name="identitymarkone">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Identification of Marks:</label>
                                    <input type="text" class="form-control" id="identitymarktwo"  name="identitymarktwo">
                                </div>

                               
                         



                            </div><!-- /.box-body -->


                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                                
                            </div>
                        </form>
                    </div>
                
                </div>
                <!--/.col (right) -->
                <!-- left column -->
                
                

        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- new END -->
<div id="calldetails" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog2 modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $this->lang->line('details') ?></h4>
            </div>
            <div class="modal-body" id="getdetails">


            </div>
        </div>
    </div>
</div>
</div><!-- /.content-wrapper -->
