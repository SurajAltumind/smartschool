<style type="text/css">
    * {
        padding: 0;
        margin: 0;
    }

    body {
        font-family: 'arial';
        page-break-inside: avoid;
    }

    .tc-container {
        width: 100%;
        position: relative;
        text-align: center;
        padding: 1%;
    }

    .tc-container tr td {
        vertical-align: bottom;
    }

    /*.tc-container{
        width: 100%;
        padding: 2%;
        position: relative;
        z-index: 2;
    }*/
    .tcmybg {
        background: top center;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 1;
    }

    .tc-container tr td h1,
    h2,
    h3 {
        margin-top: 0;
        font-weight: normal;
    }

    /*@media (max-width:210mm) and (min-width:297mm){
        .tc-container{
            margin-top: 200px;
            margin-bottom: 100px;}
    }*/


    .main-content {
        margin-bottom: 30px;
        width: 100%;
        border: 1px solid #333;
        box-shadow: 8px 8px 5px #444;
        padding: 8px 12px;
        background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
    }

    .main-content-title {
        font-weight: bold;
        width: 100%;
        border: 1px solid #333;
        box-shadow: 8px 8px 5px #444;
        padding: 8px 12px;
    }

    .school-logo {
        float: left;
        width: 200px;
        margin-right: 70px;
    }

    .user-img {
        float: right;
        width: 100px;
        margin-left: 0px;
    }

    .table {
        page-break-inside: avoid;
    }

    .scl-title {
        /* line-height:100px; */
        margin-top: -10px;
        font-size: 10px;
        color: #114851;
    }

    th,
    td {
        padding: 4.5px;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #7a6b6b21;
        color: white;
        text-align: center;
    }

    @media print {
        div {
            break-inside: avoid;
        }
    }
</style>


<?php

$certificate_text = "<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <title>Student Report</title>
  </head>
  <body>
    <img src='https://ksmbbv.com/uploads/admissionSlip/header_imageksmbbv.jpg'>
    <div style='text-transform:capitalize;line-height:25px;float:left;'></div>

      
    <div class='card'>
    
      
        <div class='card-header'>
            <h1><b><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Admission Slip</b></center></h1>
        </div>
        <div class='card-body'>
            <p class='card-text'>

            <div style='margin-bottom:0px;'>
               
        <img class='user-img' src='[base_url][studentImage]'>
        <span class='scl-title'></span>  
    </div>
                <table class='table-info'>
                <tr>
                <td>Admission No:</td>
                 <td>[admission_no]</td>
               </tr>
                    <tr>
                        <td>Name of the Student:</td>
                        <td>[name]</td>
                    </tr>
                    <tr>
                        <td>Father / Guardian:</td>
                        <td>[father_name]</td>
                    </tr>

                    <tr>
                    <td>Mother Name:</td>
                    <td>[mother_name]</td>
                   </tr>
                   
                   <tr>
                        <td>Aadhar No:</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Cell No:</td>
                        <td>[mobileno]</td>
                    </tr>

                    <tr>
                    <td>Education Qualification:</td>
                    <td></td>
                    </tr>

                    <tr>
                        <td>Occupation:</td>
                        <td>[father_occupation]</td>
                    </tr>

                    <tr>
                        <td>Date of Birth:</td>
                        <td>[dob]</td>
                    </tr>

                    <tr>
                        <td>Age:</td>
                        <td></td>
                    </tr>
                     
                    <tr>
                        <td>Caste:</td>
                        <td>[cast]</td>
                    </tr>

                    <tr>
                        <td>Religion & Nationality:</td>
                        <td>[religion]</td>
                    </tr>

                    <tr>
                        <td>Mother tongue:</td>
                        <td></td>
                    </tr>

                    <tr>
                    <td>Previous School Details:</td>
                    <td></td>
                </tr>

                    <tr>
                        <td>Class to be admitted:</td>
                        <td>[Class] [Section]</td>
                    </tr>

                    <tr>
                        <td>Date of Joining:</td>
                        <td>[admission_date]</td>
                    </tr>

                    <tr>
                        <td>Personal identification marks:</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Present address:</td>
                        <td>[current_address]</td>
                    </tr>

                        </table>
                    <tr>
                    
                    <td></br>Declaration</td>
                </tr>
                    
                <tr>
                <td><p>I promise to abide by the Rules, Regulations and Orders of the School.</br>if excluded my admission will be cancelled are removed enrolling for study in any other school. I also declare that the statement I have made in this application are correct and complete.</p>
                
                <p style='float: right;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Candidate</p>
                </td>
            </tr>
                    
                    <tr>
                    <td><p>I here by declare that the information given is true to the best of my knowledge.</p></br></td>
                   </tr>
                   <p style='float: right;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent</p>
     
            
            </p>
        </div>
        
    </div>
   <div class='footer'>
  <p>KSMBBV</p>
</div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
  </body>
</html>
";

$certificate_text = str_replace('[base_url]', base_url(), $certificate_text);


foreach ($students as $student) {
    $name = $student->firstname . ' ' . $student->lastname;
    $certificate_text = str_replace('[studentImage]', $student->image, $certificate_text);
    $certificate_text = str_replace('[name]', $name, $certificate_text);
    $certificate_text = str_replace('[Class]', $student->class, $certificate_text);
    $certificate_text = str_replace('[Section]', $student->section, $certificate_text);
    $certificate_text = str_replace('[RTE]', $student->rte, $certificate_text);
    $certificate_text = str_replace('[Gender]', $student->gender, $certificate_text);
    $certificate_text = str_replace('[admission_date]', $student->admission_date, $certificate_text);
    $certificate_text = str_replace('[category]', $student->category, $certificate_text);
    $certificate_text = str_replace('[mobileno]', $student->mobileno, $certificate_text);
    $certificate_text = str_replace('[cast]', $student->cast, $certificate_text);
    $certificate_text = str_replace('[religion]', $student->religion, $certificate_text);
    $certificate_text = str_replace('[email]', $student->email, $certificate_text);
    $certificate_text = str_replace('[current_address]', $student->current_address, $certificate_text);
    $certificate_text = str_replace('[permanent_address]', $student->permanent_address, $certificate_text);
    $certificate_text = str_replace('[father_name]', $student->father_name, $certificate_text);
    $certificate_text = str_replace('[father_phone]', $student->father_phone, $certificate_text);
    $certificate_text = str_replace('[father_occupation]', $student->father_occupation, $certificate_text);
    $certificate_text = str_replace('[mother_name]', $student->mother_name, $certificate_text);
    $certificate_text = str_replace('[mother_phone]', $student->mother_phone, $certificate_text);
    $certificate_text = str_replace('[mother_occupation]', $student->mother_occupation, $certificate_text);
    $certificate_text = str_replace('[guardian_name]', $student->guardian_name, $certificate_text);
    $certificate_text = str_replace('[guardian_email]', $student->guardian_email, $certificate_text);
    $certificate_text = str_replace('[guardian_relation]', $student->guardian_relation, $certificate_text);
    $certificate_text = str_replace('[guardian_phone]', $student->guardian_phone, $certificate_text);
    $certificate_text = str_replace('[guardian_occupation]', $student->guardian_occupation, $certificate_text);
    $certificate_text = str_replace('[guardian_address]', $student->guardian_address, $certificate_text);
    $certificate_text = str_replace('[blood_group]', $student->blood_group, $certificate_text);
    $certificate_text = str_replace('[house_name]', $student->house_name, $certificate_text);
    $certificate_text = str_replace('[height]', $student->height, $certificate_text);
    $certificate_text = str_replace('[weight]', $student->weight, $certificate_text);
    $certificate_text = str_replace('[measurement_date]', $student->measurement_date, $certificate_text);
    $certificate_text = str_replace('[previous_school]', $student->previous_school, $certificate_text);
    $certificate_text = str_replace('[adhar_no]', $student->adhar_no, $certificate_text);
    $certificate_text = str_replace('[bank_account_no]', $student->bank_account_no, $certificate_text);
    $certificate_text = str_replace('[bank_name]', $student->bank_name, $certificate_text);
    $certificate_text = str_replace('[ifsc_code]', $student->ifsc_code, $certificate_text);
    $certificate_body = "";
    $certificate_body = $certificate_text;
    foreach ($student as $std_key => $std_value) {
        if ($std_key == "dob") {
            if ($std_value != "0000-00-00") {
                $std_value = date($this->customlib->getSchoolDateFormat(), $this->customlib->dateYYYYMMDDtoStrtotime($std_value));
            }
        }
        if ($std_key == "admission_date") {
            if ($std_value != "0000-00-00") {
                $std_value = date($this->customlib->getSchoolDateFormat(), $this->customlib->dateYYYYMMDDtoStrtotime($std_value));
            }
        }
        if ($std_key == "created_at") {
            if ($std_value != "0000-00-00") {
                $std_value = date($this->customlib->getSchoolDateFormat(), $this->customlib->dateYYYYMMDDtoStrtotime($std_value));
            }
        }
        $certificate_body = str_replace('[' . $std_key . ']', $std_value, $certificate_body);
    }

    //session 
    // $dur=$student->session;
    // $session=explode("-",$dur);
    // $fromyear=$session[0];
    // $toyear=(int)$fromyear+1;  
    // $certificate_text=str_replace('[from_year]',$fromyear,$certificate_body);
    // $certificate_text=str_replace('[to_year]',$toyear,$certificate_text);
    //session 

    //----getting previous class     
    // if($student->class_id>1 && $student->class_id<12)
    // {
    //     $certificate_body=str_replace('[previous_class]',$student->class_id-1,$ccertificate_text);
    // }
    // else if($student->class=="LKG")
    // {
    //      $certificate_body=str_replace('[previous_class]','Prep',$certificate_text);
    // }
    // else if($student->class=="UKG")
    // {
    //     $certificate_body=str_replace('[previous_class]','LKG',$certificate_text);
    // }
    // else if($student->class=="Class 1")
    // {
    //     $certificate_body=str_replace('[previous_class]','UKG',$certificate_text);
    // }
    // else if($student->class=="Senior BPC") 
    // {
    //     $certificate_body=str_replace('[previous_class]','Junior BPC',$certificate_text);
    // }
    // else if($student->class=="Junior CEC") 
    // {
    //     $certificate_body=str_replace('[previous_class]','Senior CEC ',$certificate_text);
    // }
    // else if($student->class=="Senior MPC") 
    // {
    //     $certificate_body=str_replace('[previous_class]','Junior MPC',$certificate_text);
    // }
    // else if($student->class=="Senior HEC") 
    // {
    //     $certificate_body=str_replace('[previous_class]','Junior HEC ',$certificate_text);
    // }
    //----getting previous class 

    //------------------------conversion date in words-------------------------
    // $date=$student->dob;
    // $month=date("F", strtotime($date));
    // $date=date_create($date);
    // $date=date_format($date,"d-m-Y");
    // $a = str_replace('-','',$date);
    // $result = '';
    // for($i=0;$i<strlen($a);$i++)
    // {
    //     if($i==2 || $i==3)
    //     {
    //         //$month=$a[$i+1]+$a[$i+2];
    //         // $result .='/ '.$month.'/ ';
    //         $result .=$month;
    //         $i=$i+2;
    //     }
    //     if($a[$i]=='0')
    //         $result .= ' zero ';
    //     else if($a[$i]=='1')
    //         $result .= ' one ';  
    //     else if($a[$i]=='2')
    //         $result .= ' two ';
    //     else if($a[$i]=='3')
    //         $result .= ' three ';
    //     else if($a[$i]=='4')
    //         $result .= ' four ';
    //     else if($a[$i]=='5')
    //         $result .= ' five ';
    //     else if($a[$i]=='6')
    //         $result .= ' six ';
    //     else if($a[$i]=='7')
    //         $result .= 'seven ';
    //     else if($a[$i]=='8')
    //         $result .= ' eight ';
    //     else if($a[$i]=='9')
    //         $result .= ' nine ';
    // }
    // $certificate_body = str_replace('[dob_in_words]', $result , $certificate_body);
    //------------------------date in words-------------------------

    $id = $student->student_session_id;

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
                    <p style="font-size: 14px; line-height: 24px; text-align:center;"><?php echo $certificate_body; ?></p>
                </td>
            </tr>
        </table>
    </div>


<?php
}
?>