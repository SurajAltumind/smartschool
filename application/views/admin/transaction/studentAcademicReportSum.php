<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>

<div class="content-wrapper" style="min-height: 946px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-money"></i> <?php echo $this->lang->line('fees_collection'); ?> <small> <?php echo $this->lang->line('filter_by_name1'); ?></small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php $this->load->view('reports/_finance'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box removeboxmius">
                    <div class="box-header ptbnull"></div>
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('select_criteria'); ?></h3>
                    </div>
                    <form action="<?php echo site_url('admin/transaction/studentacademicreportonlysum') ?>" method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <?php echo $this->customlib->getCSRF(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Class From</label>
                                        <select autofocus="" id="class_from" name="class_from" class="form-control" required>
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                            <?php
                                            foreach ($classlist as $class) {
                                            ?>
                                                <option value="<?php echo $class['id'] ?>" <?php if (set_value('class_id') == $class['id']) echo "selected=selected" ?>><?php echo $class['class'] ?></option>
                                            <?php
                                                $count++;
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Class to</label>
                                        <select autofocus="" id="class_to" name="class_to" class="form-control" required>
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                            <?php
                                            foreach ($classlist as $class) {
                                            ?>
                                                <option value="<?php echo $class['id'] ?>" <?php if (set_value('class_id') == $class['id']) echo "selected=selected" ?>><?php echo $class['class'] ?></option>
                                            <?php
                                                $count++;
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                        </div>
                    </form>


                    <div class="row">

                        <?php
                        if (isset($student_due_fee) && !empty($student_due_fee)) {
                        ?>

                            <div class="" id="transfee">
                                <div class="box-header ptbnull">
                                    <h3 class="box-title titlefix"><i class="fa fa-users"></i> <?php echo $this->lang->line('balance_fees_report'); ?></h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <div class="download_label"><?php echo $this->lang->line('balance_fees_report') . "<br>";
                                                                $this->customlib->get_postmessage(); ?></div>
                                    <a class="btn btn-default btn-xs pull-right" id="print" onclick="printDiv()"><i class="fa fa-print"></i></a> <button class="btn btn-default btn-xs pull-right" id="btnExport" onclick="fnExcelReport();"> <i class="fa fa-file-excel-o"></i> </button>
                                    <table class="table table-striped table-hover " id="headerTable">
                                        <thead>
                                            <tr>
                                                <th class="text-left"><?php echo $this->lang->line('class'); ?></th>
                                                <th class="text-left"><?php echo $this->lang->line('section'); ?></th>
                                                <th class="text-right"><?php echo $this->lang->line('total_fees'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                                <th class="text-right"><?php echo $this->lang->line('paid_fees'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                                <th class="text text-right"><?php echo $this->lang->line('discount'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                                <th class="text text-right"><?php echo $this->lang->line('fine'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                                <th class="text-right"><?php echo $this->lang->line('balance'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!empty($resultarray)) {
                                                $grand_total = array();
                                                $grand_depositfee = array();
                                                $grand_discount = array();
                                                $grand_fine = array();
                                                $grand_balance = array();
                                                // $grand_total=array();
                                                foreach ($resultarray as $key => $value) {


                                                    $class = $value[0]['class_name'];
                                                    foreach ($value as $key => $section) {

                                                        $name = array();
                                                        $admission_no = array();
                                                        $roll_no = array();
                                                        $father_name = array();
                                                        $totalfeelabel = array();
                                                        $depositfeelabel = array();
                                                        $discountlabel = array();
                                                        $finelabel = array();
                                                        $balancelabel = array();
                                                        foreach ($section['result'] as $students) {

                                                            $name[] = $students->name;
                                                            $admission_no[] = $students->admission_no;
                                                            $roll_no[] = $students->roll_no;
                                                            $father_name[] = $students->father_name;

                                                            $totalfeelabel[] = number_format($students->totalfee, 2, '.', '');

                                                            $depositfeelabel[] = number_format($students->deposit, 2, '.', '');

                                                            $discountlabel[] = number_format($students->discount, 2, '.', '');

                                                            $finelabel[] = number_format($students->fine, 2, '.', '');

                                                            $balancelabel[] = $students->balance;
                                                        }

                                                        if (!empty($balancelabel)) {

                                            ?>
                                                            <tr>
                                                                <td><?php echo $class; ?></td>
                                                                <td><?php echo $section['section_name']; ?></td>




                                                                <td class="text-right">
                                                                    <table width="100%"><?php foreach ($totalfeelabel as $totalfeelabel_detail) { ?>
                                                                            <tr>
                                                                                <td><?php $totalfeelabel_detail; ?></td>
                                                                            <tr>
                                                                            <?php
                                                                                        } ?>
                                                                    </table>
                                                                </td>
                                                                <td class="text-right">
                                                                    <table width="100%"><?php foreach ($depositfeelabel as $depositfeelabel_detail) { ?>
                                                                            <tr>
                                                                                <td><?php $depositfeelabel_detail; ?></td>
                                                                            <tr>
                                                                            <?php
                                                                                        } ?>
                                                                    </table>
                                                                </td>
                                                                <td class="text-right">
                                                                    <table width="100%"><?php foreach ($discountlabel as $discountlabel_detail) { ?>
                                                                            <tr>
                                                                                <td><?php $discountlabel_detail; ?></td>
                                                                            <tr>
                                                                            <?php
                                                                                        } ?>
                                                                    </table>
                                                                </td>
                                                                <td class="text-right">
                                                                    <table width="100%"><?php foreach ($finelabel as $finelabel_detail) { ?>
                                                                            <tr>
                                                                                <td><?php $finelabel_detail; ?></td>
                                                                            <tr>
                                                                            <?php
                                                                                        } ?>
                                                                    </table>
                                                                </td>
                                                                <td class="text-right">
                                                                    <table width="100%"><?php foreach ($balancelabel as $balancelabel_detail) { ?>
                                                                            <tr>
                                                                                <td><?php $balancelabel_detail; ?></td>
                                                                            <tr>
                                                                            <?php
                                                                                        } ?>
                                                                    </table>
                                                                </td>
                                                            </tr>

                                                    <?php
                                                            $class = '';
                                                            $grand_total[] = array_sum($totalfeelabel);
                                                            $grand_depositfee[] = array_sum($depositfeelabel);
                                                            $grand_discount[] = array_sum($discountlabel);
                                                            $grand_fine[] = array_sum($finelabel);
                                                            $grand_balance[] = array_sum($balancelabel);
                                                        }
                                                    }

                                                    ?>

                                                    <?php
                                                    ?>
                                                    <tr class="box box-solid total-bg">


                                                        <td></td>
                                                        <td>Total</td>
                                                        <td class="text-right"><?php echo $total = array_sum($grand_total); ?></td>
                                                        <td class="text-right"><?php echo $depositFees = array_sum($grand_depositfee); ?></td>
                                                        <td class="text-right"><?php echo $grandDiscount = array_sum($grand_discount); ?></td>
                                                        <td class="text-right"><?php echo $grandFinal = array_sum($grand_fine); ?></td>
                                                        <td class="text-right"><?php echo $grandBalance = array_sum($grand_balance); ?></td>
                                                    </tr>
                                                <?php

                                                    $totalGrandTotal = $total + $totalGrandTotal;
                                                    $totaldepositFees = $depositFees + $totaldepositFees;
                                                    $totalgrandDiscount = $grandDiscount + $totalgrandDiscount;
                                                    $totalgrandFinal = $grandFinal + $totalgrandFinal;
                                                    $totalgrandBalance = $grandBalance + $totalgrandBalance;
                                                } ?>

                                                <tr style="background-color: #857c6f7a;">
                                                    <td></td>
                                                    <td>
                                                        <h5>Grand Total
                                                    </td>
                                                    <td class="text-right">
                                                        <h5><b><?php echo $totalGrandTotal; ?></h5>
                                                    </td>
                                                    <td class="text-right">
                                                        <h5><?php echo $totaldepositFees; ?></h5>
                                                    </td>
                                                    <td class="text-right">
                                                        <h5><?php echo $totalgrandDiscount; ?></h5>
                                                    </td>
                                                    <td class="text-right">
                                                        <h5><?php echo $totalgrandFinal; ?></h5>
                                                    </td>
                                                    <td class="text-right">
                                                        <h5><?php echo $totalgrandBalance; ?></h5>
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>

                <?php

                                            }
                                        } else {
                ?>
                <div class="box-body table-responsive">
                    <div class="tab-pane active table-responsive no-padding">
                        <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-left"><?php echo $this->lang->line('class'); ?></th>
                                    <th class="text-left"><?php echo $this->lang->line('section'); ?></th>

                                    <th class="text-right"><?php echo $this->lang->line('total_fees'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                    <th class="text-right"><?php echo $this->lang->line('paid_fees'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>

                                    <th class="text text-right"><?php echo $this->lang->line('discount'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                    <th class="text text-right"><?php echo $this->lang->line('fine'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>



                                    <th class="text-right"><?php echo $this->lang->line('balance'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>

            <?php
                                        } ?>



                </div>
            </div>
    </section>
</div>

<script type="text/javascript">
    function removeElement() {
        document.getElementById("imgbox1").style.display = "block";
    }

    function getSectionByClass(class_id, section_id) {
        if (class_id != "" && section_id != "") {
            $('#section_id').html("");
            var base_url = '<?php echo base_url() ?>';
            var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
            $.ajax({
                type: "GET",
                url: base_url + "sections/getByClass",
                data: {
                    'class_id': class_id
                },
                dataType: "json",
                success: function(data) {
                    $.each(data, function(i, obj) {
                        var sel = "";
                        if (section_id == obj.section_id) {
                            sel = "selected";
                        }
                        div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";
                    });
                    $('#section_id').html(div_data);
                }
            });
        }
    }
    $(document).ready(function() {
        $(document).on('change', '#class_id', function(e) {
            $('#section_id').html("");
            var class_id = $(this).val();
            var base_url = '<?php echo base_url() ?>';
            var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
            $.ajax({
                type: "GET",
                url: base_url + "sections/getByClass",
                data: {
                    'class_id': class_id
                },
                dataType: "json",
                success: function(data) {
                    $.each(data, function(i, obj) {
                        div_data += "<option value=" + obj.section_id + ">" + obj.section + "</option>";
                    });

                    $('#section_id').html(div_data);
                }
            });
        });
        $(document).on('change', '#section_id', function(e) {
            getStudentsByClassAndSection();
        });
        var class_id = $('#class_id').val();
        var section_id = '<?php echo set_value('section_id') ?>';
        getSectionByClass(class_id, section_id);
    });

    function getStudentsByClassAndSection() {
        $('#student_id').html("");
        var class_id = $('#class_id').val();
        var section_id = $('#section_id').val();
        var base_url = '<?php echo base_url() ?>';
        var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
        $.ajax({
            type: "GET",
            url: base_url + "student/getByClassAndSection",
            data: {
                'class_id': class_id,
                'section_id': section_id
            },
            dataType: "json",
            success: function(data) {
                $.each(data, function(i, obj) {
                    div_data += "<option value=" + obj.id + ">" + obj.firstname + " " + obj.lastname + "</option>";
                });
                $('#student_id').append(div_data);
            }
        });
    }

    $(document).ready(function() {
        $("ul.type_dropdown input[type=checkbox]").each(function() {
            $(this).change(function() {
                var line = "";
                $("ul.type_dropdown input[type=checkbox]").each(function() {
                    if ($(this).is(":checked")) {
                        line += $("+ span", this).text() + ";";
                    }
                });
                $("input.form-control").val(line);
            });
        });
    });
    $(document).ready(function() {
        $.extend($.fn.dataTable.defaults, {
            ordering: false,
            paging: false,
            bSort: false,
            info: false
        });
    });
</script>
<script>
    document.getElementById("print").style.display = "block";
    document.getElementById("btnExport").style.display = "block";

    function printDiv() {
        document.getElementById("print").style.display = "none";
        document.getElementById("btnExport").style.display = "none";
        var divElements = document.getElementById('transfee').innerHTML;
        var oldPage = document.body.innerHTML;
        document.body.innerHTML =
            "<html><head><title></title></head><body>" +
            divElements + "</body>";
        window.print();
        document.body.innerHTML = oldPage;

        location.reload(true);
    }

    function fnExcelReport() {
        var tab_text = "<table border='2px'><tr >";
        var textRange;
        var j = 0;
        tab = document.getElementById('headerTable'); // id of table

        for (j = 0; j < tab.rows.length; j++) {
            tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
            //tab_text=tab_text+"</tr>";
        }

        tab_text = tab_text + "</table>";
        tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
        tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
        tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer
        {
            txtArea1.document.open("txt/html", "replace");
            txtArea1.document.write(tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
        } else //other browser not tested on IE 11
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

        return (sa);
    }
</script>