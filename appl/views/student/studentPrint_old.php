<link rel="stylesheet" href="<?=base_url()?>css/admission.css">

<?php

           
foreach($res as $r => $rv) 
{
    	$id=$rv['id'];
	$fname=$rv['firstname'];

    $lname=$rv['lastname'];


    $adnum = $rv['admission_no'];

    $roll = $rv['roll_no'];

    $admissiondate = $rv['admission_date'];

    $rte = $rv['rte'];

   $mobileno = $rv['mobileno'];

    $email = $rv['email'];

    $state = $rv['state'];

    $city = $rv['city'];

     $pincode = $rv['pincode'];

     $religion = $rv['religion'];

     $caste = $rv['cast'];

         $dob = $rv['dob'];

    $gender = $rv['gender'];
     $currentAddress = $rv['current_address'];
    $permanentAddress = $rv['permanent_address'];
    $aadharnum = $rv['adhar_no'];
    $samagraid = $rv['samagra_id'];
    $bank_account_no = $rv['bank_account_no'];
    $bank_name = $rv['bank_name'];
    $ifsc_code = $rv['ifsc_code'];
    $blood_group =$rv['blood_group'];
    $mwasure_date = $rv['as_on_date'];
    $guardian = $rv['guardian_is'];
    $father_name = $rv['father_name'];
    $father_occupation = $rv['father_occupation'];
    $father_phone = $rv['father_phone'];
    $mother_name = $rv['mother_name'];
    $mother_occupation = $rv['mother_occupation'];
    $mother_phone = $rv['mother_phone'];
    $guardian_name = $rv['guardian_name'];
    $guardian_occupation = $rv['guardian_occupation'];
    $guardian_phone = $rv['guardian_phone'];
    $height = $rv['height'];
    $weight = $rv['weight'];
    $name = $fname. " ".$lname;
    $previous_school =$rv['previous_school'];
    $stu_pic = $rv['image'];
    $father_pic = $rv['father_pic'];
    $mother_pic = $rv['mother_pic'];
    $guardian_email = $rv['guardian_email'];
    $measurement_date = $rv['measurement_date'];
    $category = $rv['category_id'];

    if($category == "1"){
        $category = "OC";
    }else if($category = "2"){
        $category = "BC-A";
    }else if($category = "9"){
        $category = "BC-B";
    }else if($category = "10"){
        $category = "BC-C";
    }else if($category = "11"){
        $category = "BC-D";
    }else if($category = "12"){
        $category = "SC";
    }else if($category = "13"){
        $category = "ST";
    }else{
        $category = "BC-E";
    }

}

?>




<h1> Admission Slip</h1>
        <div id="profile"> 
        <h2><?php echo $name?></h2>
        <ul>
        <div class="stu-image">
        <img src="<?=base_url()?>/<?=$stu_pic?>" style="float:right" height="150" width="150">
        </div>

        <li>Admission Number: <?php echo $adnum ?></li>
        <li>Roll Number: <?php echo $roll ?></li>
        <li>Class: <?php echo $class ?></li>
        <li>Section: <?php echo $section ?></li>
        <li>RTE: <?php echo $rte ?></li>
        <li>Gender:  <?php echo $gender ?></li>
        </ul>
        </div>

        <div id="profile">
        <h3>Profile</h3>
        <ul>
        <li>Admission Date: <?php echo $admissiondate ?></li>
        <li>Date Of Birth: <?php echo $dob ?></li>
        <li>Category: <?php echo $category ?></li>
        <li>Mobile Number: <?php echo $mobileno ?></li>
        <li>Caste: <?php echo $caste ?></li>
        <li>Religion:  <?php echo $religion ?></li>
        <li>Email:  <?php echo $email ?></li>
        </ul>
        </div>


        <div id="profile">
        <h3>Address</h3>
        <ul>
        <li>Current Address: <?php echo $currentAddress ?></li>
        <li>Permanent Address: <?php echo $permanentAddress?></li>
        </ul>
        </div>

        <div id="profile">
        <h3>Parent/Guardian Details</h3>
        <ul>
        <div class="father-pic">
        <img src="<?=base_url()?>/<?=$father_pic?>"  height="200" width="200">
        <div class="mother-pic">
        <img src="<?=base_url()?>/<?=$mother_pic?>"  height="200" width="200">
        </div>
        </div>
       

        <li>Father Name: <?php echo $father_name ?></li>
        <li>Father Phone: <?php echo $father_phone ?></li>
        <li>Father Occupation: <?php echo $father_occupation ?></li>
        <li>Mother Name: <?php echo $mother_name ?></li>
        <li>Mother Phone: <?php echo $mother_phone ?></li>
        <li>Mother Occupation: <?php echo $mother_occupation ?></li>
        <li>Guardian Name: <?php echo $guardian_name ?></li>
        <li>Guardian Phone: <?php echo $guardian_phone ?></li>
        <li>Guardian Occupation: <?php echo $guardian_occupation ?></li>
        <li>Guardian Email:  <?php echo $guardian_email ?></li>
        <li>Guardian Relation:  <?php echo $guardian?></li>

        </ul>
        </div>

        <div id="profile">
        <h3>Miscellaneous Details</h3>
        <ul>
        <li>Blood Group: <?php echo $blood_group ?></li>
        <li>Height: <?php echo $height ?></li>
        <li>Weight: <?php echo $weight ?></li>
        <li>As On Date: <?php echo $measurement_date?></li>
        <li>Previous School Details: <?php echo $previous_school ?></li>
        <li>National Identification Number: <?php echo $aadharnum ?></li>
        <li>Local Identification Number: <?php echo $samagraid ?></li>
        <li>Bank Acoount Number: <?php echo $bank_account_no ?></li>
        <li>Bank Name:  <?php echo $bank_name ?></li>
        <li>IFSC:  <?php echo $ifsc_code ?></li>

        </ul>
        </div>

<script>

window.print();
</script>

  

      


