<?php
if(!defined('BASEPATH'))
   exit('No direct script access allowed');

   class Video extends Student_Controller
   {
       public function index()
       { 
            $this->load->model('Video_model');
            $data['res']=$this->Video_model->getAllQuestions();
            $this->load->view('student/video',$data);  
       }

       public function form_data()
       {
          $this->load->model('Video_model');
          $data = array(
               'score' => $_POST['score'],
               'StartTime' => $_POST['StartTime'],
               'EndTime' =>  $_POST['EndTime'],
               'TimeSpent' =>  $_POST['TimeSpent'],
               'User' =>  $_POST['user_id'],
               'VideoId' =>  $_POST['videoId'],         
               // $User => $this->session->userdata['student']['student_id'];              
          );

          $res= $this->Video_model->insert_summary($data);
          // echo $res;
          redirect('user/syllabus');
       }

       public function lacture_video_download($doc)
       {
           $this->load->helper('download');
           $filepath = "./uploads/syllabus_attachment/lacture_video/" . $this->uri->segment(4);         
           $data     = file_get_contents($filepath);
           $name     = $this->uri->segment(4);
           force_download($name, $data);
       }

       public function load()
       {
            // $User =  $this->session->userdata(‘student_id’);
          //    $User =$this->session->userdata['student']['username'];
          //   echo $User;
          $openlacture_video    = $this->uri->segment(4);
          $lacture_video=$_POST['lacture_video'];
          $this->load->model('Video_model');
          if(!empty($lacture_video))
          {                 
               $data['res']=$this->Video_model->checkGetdata($openlacture_video);
               $this->load->view('student/video',$data); 
          }
          if(!empty($openlacture_video))
          {
               $data['res']=$this->Video_model->checkGetdata($openlacture_video);
               $this->load->view('student/video',$data); 
          }
          
       }   
     
   }


?>