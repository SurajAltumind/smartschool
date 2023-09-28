<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
$banklll=array('','bankname a','bankname b');
unset($banklll[0]);
$this->session->set_userdata('bank',$banklll);
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
            <i class="fa fa-bus"></i> <?php echo $this->lang->line('transport'); ?></h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php $this->load->view('reports/_finance');?>
        <div class="row">
            <div class="col-md-12">
                <div class="box removeboxmius">
                    <div class="box-header ptbnull"></div>
                      <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('select_criteria'); ?></h3>
                        <?php $bank=$this->income_model->searchbank('1',$start_date, $end_date,2);
                       // echo '<pre>';print_r($bank);die;
                       $total=0;
                         foreach ($bank as  $values) {
                                                    if($values['type']==1){
                                                               $total = $total - $values['amount'];
                 
                                                    }elseif($values['type']==0){
                                                        $total = $total + $values['amount'];
                                       
                                                    }}
                                                    $bank1=$this->income_model->searchbank('1',$start_date, $end_date,1);
                       // echo '<pre>';print_r($bank);die;
                       $total1=0;
                         foreach ($bank1 as  $values) {
                                                    if($values['type']==1){
                                                               $total1 = $total1 - $values['amount'];
                 
                                                    }elseif($values['type']==0){
                                                        $total1 = $total1 + $values['amount'];
                                       
                                                    }}
                                       
                        ?>
                                                <a href="<?php echo site_url('report/cash_handover') ?>" class="btn btn-success  pull-right">Cash Handover</a>

                        <a href="<?php echo site_url('report/transfer_to_bank') ?>" class="btn btn-success  pull-right">Transfer to bank</a>
                        <a href="<?php echo site_url('report/withdraw_from_bank') ?>" class="btn btn-danger  pull-right">Withdraw from bank</a>
                        <?php   $banklists=        $this->session->userdata('bank');  ?>
                       <h4  class="  pull-right" style="padding-right: 10px;">Balance   <?php echo $banklists[2];  echo  ($currency_symbol . number_format($total, 2, '.', '')); ;?>        </h4>
                      <h4  class="  pull-right" style="padding-right: 10px;">Balance   <?php  echo $banklists[1]; echo  ($currency_symbol . number_format($total1, 2, '.', '')); ;?>        </h4>
                      
                     
                    </div>

                     <form role="form" action="<?php echo site_url('report/combinedincome') ?>" method="post" class="">
                        <div class="box-body row">

                            <?php echo $this->customlib->getCSRF(); ?>

                            <div class="col-sm-6 col-md-3" >
                                <div class="form-group">
                                    <label><?php echo $this->lang->line('search') . " " . $this->lang->line('type'); ?></label>
                                    <select class="form-control" name="search_type" onchange="showdate(this.value)">
                                       
                                        <?php foreach ($searchlist as $key => $search) {
                                            ?>
                                            <option value="<?php echo $key ?>" <?php
                                            if ((isset($search_type)) && ($search_type == $key)) {

                                                echo "selected";

                                                }
                                            ?>><?php echo $search ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="text-danger"><?php echo form_error('search_type'); ?></span>
                                </div>
                            </div>
                               
                            <div id='date_result'>
                                
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="search" value="search_filter" class="btn btn-primary btn-sm checkbox-toggle pull-right"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                </div>
                            </div>
                        </div>
                    </form>
             

            <div class="">
                <div class="box-header ptbnull"></div>
                <div class="box-header ptbnull">
                    <h3 class="box-title titlefix"><i class="fa fa-money"></i> Combined <?php echo $this->lang->line('report'); ?></h3>
                </div>
                <div class="box-body table-responsive">
                 <div class="download_label"><?php echo  $this->lang->line('income')." ".$this->lang->line('report')."<br>";$this->customlib->get_postmessage(); ?></div>
                     <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                          
                                                    <th><?php echo $this->lang->line('date'); ?></th>
                                          
                                                    <th><?php echo $this->lang->line('name'); ?></th>
                                                    <th>Detail</th>
                                                    

                                                    <th class="text text-right">Debit (-)</span></th>
                                                    <th class="text text-right">Credit (+)</span></th>

                                                </tr>
                                </thead>
                               <tbody>
                                 <?php

                                              

                                                $grand_total = 0;

                                                if (empty($incomeList) && empty($expenseList) && empty($collectlist) && empty($banklist)) {

                                                    ?>

                                              

                                                <?php

                                            } else {

                                                foreach ($incomeList as $key => $values) {

                                                    $grand_total = $grand_total + $values['amount'];

                                                    ?>

                                                    <tr>

                                                      

                                                        <td>

                                                            <?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($values['date'])); ?>

                                                        </td>

                                                        <td>

                                                            <?php echo $values['name']; ?>

                                                        </td>
                                                        <td>

                                                            <?php echo $values['income_category']; ?>

                                                        </td>

                                                      
                                                      

                                                        <td class="text text-right">

                                                            

                                                        </td>
                                                         <td class="text text-right">

                                                            <?php echo ($values['amount']); ?>

                                                        </td>
                                                         

                                                    </tr>

                                                    <?php

                                              

                                                }
                                                
                                                foreach ($expenseList as $key => $values) {

                                                    $grand_debit_total = $grand_debit_total + $values['amount'];

                                                    ?>

                                                    <tr>

                                                      

                                                        <td>

                                                            <?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($values['date'])); ?>

                                                        </td>

                                                        <td>

                                                            <?php echo $values['name']; ?>

                                                        </td>
                                                        <td>

                                                            <?php echo $values['exp_category']; ?>

                                                        </td>

                                                      
                                                      

                                                        <td class="text text-right">

                                                            <?php echo ($values['amount']); ?>

                                                        </td>
                                                         <td class="text text-right">

                                                          

                                                        </td>
                                                         

                                                    </tr>

                                                    <?php

                                                 

                                                }
                                                  foreach ($banklist as $key => $values) {
                                                    if($values['type']==1){
                                                               $grand_total = $grand_total + $values['amount'];
                 
                                                    }else{
                                                        $grand_debit_total = $grand_debit_total + $values['amount'];
                                       
                                                    }


                                                    ?>

                                                    <tr>

                                                      

                                                        <td>

                                                            <?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($values['date'])); ?>

                                                        </td>

                                                        <td>

                                                            <?php echo $values['name']; ?>

                                                        </td>
                                                        <td>

                                                            <?php echo $values['detail']; ?>

                                                        </td>

                                                      <?php    if($values['type']==1){
                                                        ?>
                                                        <td class="text text-right"></td>
                                                          <td class="text text-right"> <?php echo ($values['amount']); ?>  </td>
                                                        <?php
                                                    }else{
                                                        ?>
                                                          <td class="text text-right"> <?php echo ($values['amount']); ?>  </td>
                                                        <td class="text text-right"></td>
                                                        <?php
                                                    }
                                                    ?>
                                                      

                                                        
                                                         

                                                    </tr>

                                                    <?php

                                                 

                                                }
                                                 foreach ($collectlist as $key => $values) {

                                                    $grand_total = $grand_total + $values['amount'];

                                                    ?>

                                                    <tr>

                                                      

                                                        <td>

                                                            <?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($values['date'])); ?>

                                                        </td>

                                                        <td>

                                                            <?php echo $values['name'].'( '.$values['code'].' )'; ?>

                                                        </td>
                                                        <td>

                                                            <?php echo $values['firstname'].' '.$values['lastname'].' ( '.$values['description'].' )'; ?>

                                                        </td>

                                                      
                                                      

                                                        <td class="text text-right">

                                                            

                                                        </td>
                                                         <td class="text text-right">

                                                            <?php echo ($values['amount']); ?>

                                                        </td>
                                                         

                                                    </tr>

                                                    <?php

                                                    

                                                }

                                                ?>
                                                
<tr class="box box-solid total-bg">
                                                <td class="text-right"><?php echo $this->lang->line('grand_total'); ?></td>

                                                <td align="left"></td>

                                                <td align="left"></td>

                                                
                                                <td class="text text-right">

                                                    <?php echo ($currency_symbol . number_format($grand_debit_total, 2, '.', '')); ?>

                                                </td>
                                                <td class="text text-right">

                                                    <?php echo ($currency_symbol . number_format($grand_total, 2, '.', '')); ?>

                                                </td>

                                            </tr>

<tr class="box box-solid total-bg">
                                                <td class="text-right">DIfference</td>

                                                <td align="left"></td>

                                                <td align="left"></td>

                                                
                                                <td class="text text-right">

                                                    <?php $diff=$grand_debit_total-$grand_total;
                                                    if($diff>0){
                                                    echo '- '.($currency_symbol . number_format($diff, 2, '.', ''));} ?>

                                                </td>
                                                <td class="text text-right">

                                                    <?php  if($diff<0){
                                                    echo ($currency_symbol . number_format($grand_total-$grand_debit_total, 2, '.', ''));} ?>

                                                </td>

                                            </tr>
                                                <?php
                                            }
                                            ?>
                               </tbody>
                            </table>
                </div>
            </div>
        </div>
      </div>
    </div>   
</div>  
</section>
</div>

<script>
    <?php 
    if($search_type=='period'){
        ?>

          $(document).ready(function () {
            showdate('period');
          });

        <?php
    }
    ?>
   
    </script>