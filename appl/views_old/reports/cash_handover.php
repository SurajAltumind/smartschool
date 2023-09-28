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
                        <h3 class="box-title">Cash Handover</h3>
                           <?php $bank=$this->income_model->searchbank('1',$start_date, $end_date);
                       // echo '<pre>';print_r($bank);die;
                       $total=0;
                         foreach ($bank as  $values) {
                                                    if($values['type']==1){
                                                               $total = $total - $values['amount'];
                 
                                                    }elseif($values['type']==0){
                                                        $total = $total + $values['amount'];
                                       
                                                    }}
                                                   
                        ?>
                        <a href="<?php echo site_url('report/transfer_to_bank') ?>" class="btn btn-success  pull-right">Transfer to bank</a>
                        <a href="<?php echo site_url('report/withdraw_from_bank') ?>" class="btn btn-danger  pull-right">Withdraw from bank</a>
                      <h4  class="  pull-right" style="padding-right: 10px;">Balance  <?php   echo  ($currency_symbol . number_format($total, 2, '.', '')); ;?>        </h4>
                   
                    </div>

                     <form role="form" action="<?php echo site_url('report/cash_handover') ?>" method="post" class="">
                        <div class="box-body row">

                            <?php echo $this->customlib->getCSRF(); ?>

                            <div class="col-sm-6 col-md-12" >
                                <div class="form-group">
                                    <label>Enter amount to Handover</label>
                                    <input type="text" name="amount" class="form-control" >
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12" >
                                <div class="form-group">
                                    <label>Enter Details</label>
                                    <input type="text" name="detail" class="form-control" >
                                </div>
                            </div>
                            
                               
                          
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="search" value="search_filter" class="btn btn-primary btn-sm checkbox-toggle pull-right">Handover</button>
                                </div>
                            </div>
                        </div>
                    </form>
             


        </div>
      </div>
    </div>   
<div class="box-body table-responsive">
                 <div class="download_label"><?php echo  $this->lang->line('income')." ".$this->lang->line('report')."<br>";$this->customlib->get_postmessage(); ?></div>
                     <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                          
                                                    <th><?php echo $this->lang->line('date'); ?></th>
                                          
                                                    <th><?php echo $this->lang->line('name'); ?></th>                                                  <th>Detail</th>
        

                                                    <th class="text text-right">Debit (-)</span></th>
                                                    <th class="text text-right">Credit (+)</span></th>

                                                </tr>
                                </thead>
                               <tbody>
                                 <?php
$bank=$this->income_model->searchbank('1',$start_date, $end_date);

                                              foreach ($bank as $key => $values) {
                                                    
if($values['type']!=1){

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

                                                    
                                                          <td class="text text-right"> <?php echo ($values['amount']); ?>  </td>
                                                        <td class="text text-right"></td>
                                                     
                                                      
                                                      

                                                        
                                                         

                                                    </tr>

                                                    <?php
}
                                                 

                                                }
                                            ?>
                               </tbody>
                            </table>
                </div>
</div>  
</section>
</div>

