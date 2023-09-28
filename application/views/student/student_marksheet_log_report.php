<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<style type="text/css">
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
</style>

<div class="content-wrapper" style="min-height: 946px;">

    <section class="content-header">
        <h1>
            <i class="fa fa-user-plus"></i> <?php echo $this->lang->line('student_information'); ?>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box removeboxmius">
                    <div class="box-header ptbnull"></div>
                    <div class="">
                        <div class="box-header ptbnull"></div>
                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-users"></i>Marksheet Logs Report</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <div class="download_label"><?php echo $this->lang->line('guardian_report') . "<br>";
                                                        $this->customlib->get_postmessage(); ?></div>

                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Admission No.</th>
                                        <th>Student Name</th>
                                        <th>Exam Name</th>
                                        <th>Marksheet Issue Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($marksheetLogsDetails)) {  ?>
                                        <?php } else {
                                        $count = 1;
                                        foreach ($marksheetLogsDetails as $MarksheetRecord) {  ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $MarksheetRecord['admission_no']; ?></td>
                                                <td><?php echo $MarksheetRecord['firstname']; ?> <?php echo $student['lastname']; ?></td>
                                                <td><?php echo $MarksheetRecord['name']; ?> | <?php echo $MarksheetRecord['exam']; ?></td>
                                                <td><?php echo $MarksheetRecord['published_date']; ?></td>
                                            </tr>
                                    <?php $count++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--./box box-primary-->
            </div>
            <!--./col-md-12-->
        </div>
</div>
</section>
</div>