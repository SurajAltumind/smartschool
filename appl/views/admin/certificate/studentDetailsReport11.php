
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

$certificate_text="<div style='margin-bottom:3px;text-align:center;'>
        <span style='font-size:24px;color:#114851;font-weight:bold;'>BALA BHARATHI VIDYALAYAM </span>
        </div>
        <div style='margin-top:0px;text-align:center;'>
            <span style='font-size:22px;color:#114851;font-weight:bold;'>Student Details</span>
        </div>
        <div style='margin-top:21px;'>
            <div style='float:left;margin-left:5px;border-style: solid;border-width: 1px 1px;padding:5px;'>Admission No.:<b>[admission_no]</b></div>	
            <div style='float:right;border-style: solid;border-width: 1px 1px;padding:5px;'>Adm. Date:<b>[admission_date]</b></div>
        </div>
        <div style='text-transform: capitalize;line-height:25px;float:left;margin-top:30px;margin-left:0px;'>
            <p>1. Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>[name]</b>
            <br/>2. Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>[dob] </b>
            <br/>3. Religion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>[religion]</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 (a) Caste: <b>[cast]</b>
            <br/>5. Class: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>[class] [section]</b> 
            <br/>6. Father's Name:&nbsp;&nbsp;&nbsp;<b>[father_name]</b> 
            <br/>7. Mother's Name:&nbsp; <b>[mother_name]</b>
            <br/>8. Guardian Name: <b>[guardian]</b> 
            <br/>9. Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>[present_address]</b></p>
        </div>";

// $certificate_text = str_replace('[name]', '[firstname] [lastname]', $certificate_text);


foreach($students as $student) 
{
    $name=$student->firstname.' '.$student->lastname;
    $certificate_text = str_replace('[name]', $name, $certificate_text);
    $certificate_body = "";
    $certificate_body = $certificate_text;
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
    }    
    
    //session 
    $dur=$student->session;
    $session=explode("-",$dur);
    $fromyear=$session[0];
    $toyear=(int)$fromyear+1;  
    $certificate_text=str_replace('[from_year]',$fromyear,$certificate_body);
    $certificate_text=str_replace('[to_year]',$toyear,$certificate_text);
    //session 

    //----getting previous class     
    if($student->class_id>1 && $student->class_id<12)
    {
        $certificate_body=str_replace('[previous_class]',$student->class_id-1,$ccertificate_text);
    }
    else if($student->class=="LKG")
    {
         $certificate_body=str_replace('[previous_class]','Prep',$certificate_text);
    }
    else if($student->class=="UKG")
    {
        $certificate_body=str_replace('[previous_class]','LKG',$certificate_text);
    }
    else if($student->class=="Class 1")
    {
        $certificate_body=str_replace('[previous_class]','UKG',$certificate_text);
    }
    else if($student->class=="Senior BPC") 
    {
        $certificate_body=str_replace('[previous_class]','Junior BPC',$certificate_text);
    }
    else if($student->class=="Junior CEC") 
    {
        $certificate_body=str_replace('[previous_class]','Senior CEC ',$certificate_text);
    }
    else if($student->class=="Senior MPC") 
    {
        $certificate_body=str_replace('[previous_class]','Junior MPC',$certificate_text);
    }
    else if($student->class=="Senior HEC") 
    {
        $certificate_body=str_replace('[previous_class]','Junior HEC ',$certificate_text);
    }
    //----getting previous class 

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
    
    ?>


    <div class="" style="position: relative; text-align: center; font-family: 'arial';">     

        <table width="100%" cellspacing="0" cellpadding="0" style="position: absolute;top: 0; margin-left: auto;margin-right: auto;left: 0;right: 0;width:600px">
            <tr>
                <td style="position: absolute;right:0;">
                </td>
            </tr>
            <tr>
                <td valign="top" style="text-align:left; position: relative; top:100px"></td>
                <td valign="top" style="text-align:center; position: relative; top:100px"></td>
                <td valign="top" style="text-align:right; position: relative; top:100px"></td>
            </tr>
            <tr>
                <td colspan="3" valign="top" style="position: relative;top:120px">
                    <p style="font-size: 14px; line-height: 24px; text-align:center;"><?php echo $certificate_body;?></p></td>
            </tr>
        </table>
    </div>


    <?php
}
?>


