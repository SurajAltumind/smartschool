
<style type="text/css">
    *{padding: 0; margin:0;}
    body{ font-family: 'arial';}
    .tc-container{width: 100%;position: relative; text-align: center;padding: 2%;}
    .tc-container tr td{vertical-align: bottom;}
    /*.tc-container{
        width: 100%;
        padding: 2%;
        position: relative;
        z-index: 2;
    }*/
    .tcmybg {
        background:top center;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 1;
    }
    .tc-container tr td h1, h2 ,h3{margin-top: 0; font-weight: normal;}
    /*@media (max-width:210mm) and (min-width:297mm){
        .tc-container{
            margin-top: 200px;
            margin-bottom: 100px;}
    }*/
</style>



<?php

$certificate[0]->certificate_text = str_replace('[name]', '[firstname] [lastname]', $certificate[0]->certificate_text);
// $certificate[0]->certificate_text = str_replace('[cast]', '[category]', $certificate[0]->certificate_text);
// $certificate[0]->certificate_text = str_replace('[cast]', '[category]', $certificate[0]->certificate_text);
$certificate[0]->certificate_text = str_replace('[present_address]', '[current_address]', $certificate[0]->certificate_text);
$certificate[0]->certificate_text = str_replace('[guardian]', '[guardian_name]', $certificate[0]->certificate_text);
$certificate[0]->certificate_text = str_replace('[phone]', '[mobileno]', $certificate[0]->certificate_text);

// ---by me--
$certificate[0]->certificate_text=str_replace('[current_date]',date("d/m/Y"),$certificate[0]->certificate_text);

foreach ($students as $student) 
{
    $certificate_body = "";
    $certificate_body = $certificate[0]->certificate_text;
    foreach ($student as $std_key => $std_value) 
    {
        if ($std_key == "dob") 
        {
            if ($std_value != "0000-00-00") 
            {
                $std_value = date($this->customlib->getSchoolDateFormat(), $this->customlib->dateYYYYMMDDtoStrtotime($std_value));
            }
        }
		if ($std_key == "admission_date") 
        {
            if ($std_value != "0000-00-00") 
            {
                $std_value = date($this->customlib->getSchoolDateFormat(), $this->customlib->dateYYYYMMDDtoStrtotime($std_value));
            }
        }
		if ($std_key == "created_at") 
        {
            if ($std_value != "0000-00-00") 
            {
                $std_value = date($this->customlib->getSchoolDateFormat(), $this->customlib->dateYYYYMMDDtoStrtotime($std_value));
            }

        }
       $certificate_body = str_replace('[' . $std_key . ']', $std_value , $certificate_body);

        //--certificate number
            $tcCount=$student->Certificate_No+1;
            $sid=$student->id;
            $tcID=$sid.'-'.$tcCount;            
            $certificate_body=str_replace('[Certi NO]',$tcID,$certificate_body);
            $this->student_model->updateCertificateNumber($tcCount,$sid);
       //--certificate number

        //----------session 
            $dur=$student->session;
            $session=explode("-",$dur);
            $fromyear=$session[0];
            $toyear=(int)$fromyear+1;  
            // $certificate[0]->certificate_text=str_replace('[from_year]',$fromyear,$certificate_body);
            // $certificate[0]->certificate_text=str_replace('[to_year]',$toyear,$certificate[0]->certificate_text);
            
            $certificate_body=str_replace('[from_year]', $fromyear, $certificate_body);
            $certificate_body=str_replace('[to_year]', $toyear, $certificate_body);
        //-----------session 

        //----getting previous class     
         if($student->class_id>1 && $student->class_id<12)
         {
             $certificate_body=str_replace('[previous_class]',$student->class_id-1,$certificate_body);
         }
         else if($student->class=="LKG")
         {
             $certificate_body=str_replace('[previous_class]','Prep',$certificate_body);
         }
         else if($student->class=="UKG")
         {
             $certificate_body=str_replace('[previous_class]','LKG',$certificate_body);
         }
         else if($student->class=="Class 1")
         {
             $certificate_body=str_replace('[previous_class]','UKG',$certificate_body);
         }
         else if($student->class=="Senior BPC") 
         {
             $certificate_body=str_replace('[previous_class]','Junior BPC',$certificate_body);
         }
         else if($student->class=="Junior CEC") 
         {
             $certificate_body=str_replace('[previous_class]','Senior CEC ',$certificate_body);
         }
         else if($student->class=="Senior MPC") 
         {
             $certificate_body=str_replace('[previous_class]','Junior MPC',$certificate_body);
         }
         else if($student->class=="Senior HEC") 
         {
             $certificate_body=str_replace('[previous_class]','Junior HEC ',$certificate_body);
         }
        //----getting previous class  
    }

      

    //------------------------conversion date in words-------------------------
       $date=$student->dob;
       $month=date("F", strtotime($date));
       $date=date_create($date);
       $date=date_format($date,"d-m-Y");
       $a = str_replace('-','',$date);
       $result = '';
       for($i=0;$i<strlen($a);$i++)
       {
           if($i==2 || $i==3)
           {
               //$month=$a[$i+1]+$a[$i+2];
               // $result .='/ '.$month.'/ ';
               $result .=$month;
               $i=$i+2;
           }
           if($a[$i]=='0')
               $result .= ' zero ';
           else if($a[$i]=='1')
               $result .= ' one ';  
           else if($a[$i]=='2')
               $result .= ' two ';
           else if($a[$i]=='3')
               $result .= ' three ';
           else if($a[$i]=='4')
               $result .= ' four ';
           else if($a[$i]=='5')
               $result .= ' five ';
           else if($a[$i]=='6')
               $result .= ' six ';
           else if($a[$i]=='7')
               $result .= 'seven ';
           else if($a[$i]=='8')
               $result .= ' eight ';
           else if($a[$i]=='9')
               $result .= ' nine ';
       }
       $certificate_body = str_replace('[dob_in_words]', $result , $certificate_body);
    //------------------------date in words-------------------------

    $id=$student->student_session_id;
    $total=0;
    $student_due= $this->studentfeemaster_model->getStudentFees($id);
    
									$total_amount = 0;
                                    $total_deposite_amount = 0;
                                    $total_fine_amount = 0;
                                    $total_discount_amount = 0;
                                    $total_balance_amount = 0;
                                    $alot_fee_discount = 0;

                                    foreach ($student_due as $key => $fee) {

                                        foreach ($fee->fees as $fee_key => $fee_value) {
                                            $fee_paid = 0;
                                            $fee_discount = 0;
                                            $fee_fine = 0;

                                            if (!empty($fee_value->amount_detail)) {
                                                $fee_deposits = json_decode(($fee_value->amount_detail));

                                                foreach ($fee_deposits as $fee_deposits_key => $fee_deposits_value) {
                                                   if(!$fee_deposits_value->accepted){
                                                    $fee_paid = $fee_paid + $fee_deposits_value->amount;
                                                    $fee_discount = $fee_discount + $fee_deposits_value->amount_discount;
                                                    $fee_fine = $fee_fine + $fee_deposits_value->amount_fine;
                                                    }
                                                }
                                            }
                                            $total_amount = $total_amount + $fee_value->amount;
                                            $total_discount_amount = $total_discount_amount + $fee_discount;
                                            $total_deposite_amount = $total_deposite_amount + $fee_paid;
                                            $total_fine_amount = $total_fine_amount + $fee_fine;
                                            $feetype_balance = $fee_value->amount - ($fee_paid + $fee_discount);
                                            $total_balance_amount = $total_balance_amount + $feetype_balance;}}
                                            
                                             $certificate_body = str_replace('[' . 'fee_total' . ']',  number_format($total_amount, 2, '.', '') , $certificate_body);
                                             $certificate_body = str_replace('[' . 'fee_paid' . ']',  number_format($total_deposite_amount, 2, '.', '') , $certificate_body);
                                             $certificate_body = str_replace('[' . 'fee_due' . ']',  number_format($total_balance_amount - $alot_fee_discount, 2, '.', ''), $certificate_body);
                                        ?>


    <div class="" style="position: relative; text-align: center; font-family: 'arial';">
        <?php if (!empty($certificate[0]->background_image)) {?>
            <img src="<?php echo base_url('uploads/certificate/' . $certificate[0]->background_image); ?>" style="width: 100%; height: 100vh" />
        <?php }?>

        <table width="100%" cellspacing="0" cellpadding="0" style="position: absolute;top: 0; margin-left: auto;margin-right: auto;left: 0;right: 0;<?php echo "width:" . $certificate[0]->content_width . "px" ?>">
            <tr>
                <td style="position: absolute;right:0;">
                    <?php if ($certificate[0]->enable_student_image == 1) {?>
                        <img style="position: relative; <?php echo "top:" . $certificate[0]->enable_image_height . "px" ?>;" src="<?php echo base_url($student->image); ?>" width="100" height="auto">
                    <?php }?>
                </td></tr>
            <tr>
                <td valign="top" style="text-align:left; position: relative; <?php echo "top:" . $certificate[0]->header_height . "px" ?>"><?php echo $certificate[0]->left_header ?></td>
                <td valign="top" style="text-align:center; position: relative; <?php echo "top:" . $certificate[0]->header_height . "px" ?>"><?php echo $certificate[0]->center_header ?></td>
                <td valign="top" style="text-align:right; position: relative; <?php echo "top:" . $certificate[0]->header_height . "px" ?>"><?php echo $certificate[0]->right_header ?></td>
            </tr>
            <tr>
                <td colspan="3" valign="top" style="position: relative; <?php echo "top:" . $certificate[0]->content_height . "px" ?>">
                    <p style="font-size: 14px; line-height: 24px; text-align:center;"><?php echo $certificate_body;

    ?></p></td>
            </tr>
            <tr>
                <td valign="top" style="text-align:left;position: relative; <?php echo "top:" . $certificate[0]->footer_height . "px" ?>"><?php echo $certificate[0]->left_footer ?></td>
                <td valign="top" style="text-align:center;position: relative; <?php echo "top:" . $certificate[0]->footer_height . "px" ?>"><?php echo $certificate[0]->center_footer ?></td>
                <td valign="top" style="text-align:right;position: relative; <?php echo "top:" . $certificate[0]->footer_height . "px" ?>"><?php echo $certificate[0]->right_footer ?></td>
            </tr>
        </table>
    </div>


    <?php
}
?>


