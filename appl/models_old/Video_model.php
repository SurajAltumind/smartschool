<?php
class Video_model extends MY_model
{

    function insert_summary($score,$TimeSpent,$StartTime,$EndTime,$User)
    {
        $sql="INSERT INTO `summary`(`score`,`StartTime`,`EndTime`,`TimeSpent`,`User`) VALUES ($score,'$StartTime','$EndTime','$TimeSpent','$User')";
        $rs=$this->db->query($sql);
        return $rs;    
    }

    // function getdata()
    // {
    //     $sql="SELECT ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id";
    //     // $sql="SELECT ss.`id`, ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id";
    //     // $sql="SELECT ss.`id`,ss.`lacture_video`,ss.`question_id`, ss.`video_timing` ,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct FROM `subject_syllabus` ss INNER JOIN questions q ON q.id=ss.question_id";
    //     $rs=$this->db->query($sql);
    //     return $rs->result_array();    
    // }

    function getLatest()
    {
        $row = $this->db->select("*")->limit(1)->order_by('id',"DESC")->get("subject_syllabus")->row();
        $Lid =  $row->id;
    
        $sql="SELECT ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id WHERE ss.id= $Lid ";
        $rs=$this->db->query($sql);
        return $rs->result_array(); 
    }

    function getAllQuestions()
    {
        $row = $this->db->select("*")->limit(1)->order_by('id',"DESC")->get("subject_syllabus")->row();
        // return $row->id;
        $latest_id = $row->id;

        $sql="SELECT ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id where ss.id=".$latest_id;
        $rs=$this->db->query($sql);
        return $rs->result_array();    
    }
}
?>