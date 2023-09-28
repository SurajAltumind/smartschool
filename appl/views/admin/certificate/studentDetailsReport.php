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

      
    .main-content
    {
        margin-bottom:30px;
        width: 100%;
        border: 1px solid #333;
        box-shadow: 8px 8px 5px #444;
        padding: 8px 12px;
        background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
    }
    .main-content-title
    {
        font-weight:bold;
        width: 100%;
        border: 1px solid #333;
        box-shadow: 8px 8px 5px #444;
        padding: 8px 12px;
    }
    .school-logo{
        float:left;
        width:100px;
        margin-right:70px;
    }
    .user-img{float:right;width:100px;margin-left:0px;}
    .scl-title
    {
        /* line-height:100px; */
        margin-top:-10px;     
        font-size:20px;
        color:#114851;
    }
    th, td 
    {
     padding: 4.5px;
    }
</style>


<?php

$certificate_text="<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <title>Student Report</title>
  </head>
  <body>
    <div style='margin-bottom:20px;'>
        <img class='school-logo' src='[base_url]/uploads/school_content/admin_small_logo/1.png'>             
        <img class='user-img' src='[studentImage]'>
        <span class='scl-title'>BALA BHARATHI VIDYALAYAM</span>  
    </div>
    <div style='text-transform:capitalize;line-height:25px;float:left;'></div>
   
    <div class='card'>
        <div class='card-header'>
            Academic Details
        </div>
        <div class='card-body'>
            <p class='card-text'>
                <table class='table-info'>
                    <tr class='alert alert-success'>  
                        <td>Student Profile</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Student Name:</td>
                        <td>[name]</td>
                    </tr>
                    <tr>
                        <td>Admission No:</td>
                        <td>[admission_no]</td>
                    </tr>
                    <tr>
                        <td>Roll Number:</td>
                        <td>[roll_no]</td>
                    </tr>
                    <tr>
                        <td>Class:</td>
                        <td>[Class]</td>
                    </tr>
                    <tr>
                        <td>Section:</td>
                        <td>[Section]</td>
                    </tr>
                    <tr>
                        <td>RTE:</td>
                        <td>[RTE]</td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>[Gender]</td>
                    </tr>        
                    <tr>
                        <td>Category:</td>
                        <td>[category]</td>
                    </tr>
                    <tr>
                        <td>Date of Birth::</td>
                        <td>[dob]</td>
                    </tr>
                    <tr>
                        <td>Admission Date:</td>
                        <td>[admission_date]</td>
                    </tr>
                    <tr>
                        <td>Mobile Number:</td>
                        <td>[mobileno]</td>
                    </tr>
                    <tr>
                        <td>Caste:</td>
                        <td>[cast]</td>
                    </tr>
                    <tr>
                        <td>Religion:</td>
                        <td>[religion]</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>[email]</td>
                    </tr>
                    <tr>
                        <td>Identification Marks 1:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Identification Marks 2:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>First language under part 1:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Second language under part 2:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Optional under part 3:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Mother Tongue and Medium of instruction ::</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Class and year in which the pupil was first admitted into the intermediate course :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Class and year in which the pupil was first admitted into the intermediate course :</td>
                        <td></td>
                    </tr>
                    
                    <tr>            
                        <td><br><br></td>
                        <td> </td>
                    </tr>
                    <tr class='alert alert-success'>            
                        <td>Student Address -</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Current Address:</td>
                        <td>[current_address]</td>
                    </tr>
                    <tr>
                        <td>Permanent Address:</td>
                        <td>[permanent_address]</td>
                    </tr>

                    <tr>            
                        <td><br><br></td>
                        <td> </td>
                    </tr>
                    <tr class='alert alert-success'>            
                        <td >Student Parent / Guardian Details -</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Father Name:</td>
                        <td>[father_name]</td>
                    </tr>
                    <tr>
                        <td>Father Phone:</td>
                        <td>[father_phone]</td>
                    </tr>
                        <tr>
                        <td>Father Occupation: </td>
                        <td>[father_occupation]</td>
                    </tr>
                    <tr>
                        <td>Mother Name:</td>
                        <td>[mother_name]</td>
                    </tr>
                    <tr>
                        <td>Mother Phone</td>
                        <td>[mother_phone]</td>
                    </tr>
                    <tr>
                        <td>Mother Occupation:</td>
                        <td>[mother_occupation]</td>
                    </tr>
                    <tr>
                        <td>Guardian Name:</td>
                        <td>[guardian_name]</td>
                    </tr>
                    <tr>
                        <td>Guardian Email:</td>
                        <td>[guardian_email]</td>
                    </tr>
                    <tr>
                        <td>Guardian Relation:</td>
                        <td>[guardian_relation]</td>
                    </tr>
                    <tr>
                        <td>Guardian Phone:</td>
                        <td>[guardian_phone]</td>
                    </tr>
                    <tr>
                        <td>Guardian Occupation:</td>
                        <td>[guardian_occupation]</td>
                    </tr>
                    <tr>
                        <td>Guardian Address:</td>
                        <td>[guardian_address]</td>
                    </tr>

                    <tr>            
                        <td><br><br></td>
                        <td> </td>
                    </tr>
                    <tr class='alert alert-success'>            
                        <td >Student Miscellaneous Details -</td>
                        <td></td>
                    </tr>    
                    <tr>
                        <td>Blood Group:</td>
                        <td>[blood_group]</td>
                    </tr>
                    <tr>
                        <td>Student House:</td>
                        <td>[house_name]</td>
                    </tr>
                    <tr>
                        <td>Height:</td>
                        <td>[height]</td>
                    </tr>
                    <tr>
                        <td>As on Date:</td>
                        <td>[measurement_date]</td>
                        </tr>
                    <tr>
                        <td>Previous School Details:</td>
                        <td>[previous_school]</td>
                    </tr>
                    <tr>
                        <td>National Identification Number:</td>
                        <td>[adhar_no]</td>
                    </tr>
                    <tr>
                        <td>Local Identification Number:</td>
                        <td>[adhar_no]</td>
                    </tr>
                    <tr>
                        <td>Bank Account Number:</td>
                        <td>[bank_account_no]</td>
                    </tr>
                    <tr>
                        <td>Bank Name:</td>
                        <td>[bank_name]</td>
                    </tr>
                    <tr>
                        <td>IFSC Code:</td>
                        <td>[ifsc_code]</td>
                    </tr>
        
                </table>
            </p>
        </div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
  </body>
</html>
";

$certificate_text = str_replace('[base_url]',base_url(), $certificate_text);


foreach($students as $student) 
{
    $name=$student->firstname.' '.$student->lastname;
    $certificate_text = str_replace('[studentImage]',base_url().$student->image, $certificate_text);
    $certificate_text = str_replace('[name]', $name, $certificate_text);
    $certificate_text = str_replace('[Class]', $student->class, $certificate_text);
    $certificate_text = str_replace('[Section]', $student->section, $certificate_text);
    $certificate_text = str_replace('[RTE]', $student->rte, $certificate_text);
    $certificate_text = str_replace('[Gender]', $student->gender, $certificate_text);
    $certificate_text=str_replace('[admission_date]',$student->admission_date,$certificate_text);
    $certificate_text=str_replace('[category]',$student->category,$certificate_text);
    $certificate_text=str_replace('[mobileno]',$student->mobileno,$certificate_text);
    $certificate_text=str_replace('[cast]',$student->cast,$certificate_text);
    $certificate_text=str_replace('[religion]',$student->religion,$certificate_text);
    $certificate_text=str_replace('[email]',$student->email,$certificate_text);
    $certificate_text=str_replace('[current_address]',$student->current_address,$certificate_text);
    $certificate_text=str_replace('[permanent_address]',$student->permanent_address,$certificate_text);
    $certificate_text=str_replace('[father_name]',$student->father_name,$certificate_text);
    $certificate_text=str_replace('[father_phone]',$student->father_phone,$certificate_text);
    $certificate_text=str_replace('[father_occupation]',$student->father_occupation,$certificate_text);
    $certificate_text=str_replace('[mother_name]',$student->mother_name,$certificate_text);
    $certificate_text=str_replace('[mother_phone]',$student->mother_phone,$certificate_text);
    $certificate_text=str_replace('[guardian_name]',$student->guardian_name,$certificate_text);
    $certificate_text=str_replace('[guardian_email]',$student->guardian_email,$certificate_text);
    $certificate_text=str_replace('[guardian_relation]',$student->guardian_relation,$certificate_text);
    $certificate_text=str_replace('[guardian_phone]',$student->guardian_phone,$certificate_text);
    $certificate_text=str_replace('[guardian_occupation]',$student->guardian_occupation,$certificate_text);
    $certificate_text=str_replace('[guardian_address]',$student->guardian_address,$certificate_text);
    $certificate_text=str_replace('[blood_group]',$student->blood_group,$certificate_text);
    $certificate_text=str_replace('[house_name]',$student->house_name,$certificate_text);
    $certificate_text=str_replace('[height]',$student->height,$certificate_text);
    $certificate_text=str_replace('[weight]',$student->weight,$certificate_text);
    $certificate_text=str_replace('[measurement_date]',$student->measurement_date,$certificate_text);
    $certificate_text=str_replace('[previous_school]',$student->previous_school,$certificate_text);
    $certificate_text=str_replace('[adhar_no]',$student->adhar_no,$certificate_text);
    $certificate_text=str_replace('[bank_account_no]',$student->bank_account_no,$certificate_text);
    $certificate_text=str_replace('[bank_name]',$student->bank_name,$certificate_text);
    $certificate_text=str_replace('[ifsc_code]',$student->ifsc_code,$certificate_text);
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

        <table width="100%" cellspacing="0" cellpadding="0" style="position:absolute;width:670px">
            <tr>
                <td style="position: absolute;right:0;">
                </td>
            </tr>
            <tr>
                <td valign="top" style="text-align:left; position: relative; top:50px"></td>
                <td valign="top" style="text-align:center; position: relative; top:50px"></td>
                <td valign="top" style="text-align:right; position: relative; top:50px"></td>
            </tr>
            <tr>
                <td colspan="3" valign="top" style="position: relative;top:20px">
                    <p style="font-size: 14px; line-height: 24px; text-align:center;"><?php echo $certificate_body;?></p></td>
            </tr>
        </table>
    </div>


    <?php
}
?>


