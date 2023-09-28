<?php
class Video_model extends MY_model
{

    function insert_summary1($score,$TimeSpent,$StartTime,$EndTime,$User,$video_id)
    {
        $sql="INSERT INTO `summary`(`score`,`StartTime`,`EndTime`,`TimeSpent`,`User`,`VideoId`) VALUES ($score,'$StartTime','$EndTime','$TimeSpent','$User','$video_id')";
        $rs=$this->db->query($sql);
        return $rs;    
    }

    public function insert_summary($data)
    {
            $this->db->select('*');
            $this->db->from('summary');
            $this->db->where('User', $data['User'] );
            $this->db->where('VideoId', $data['VideoId'] );
            $query = $this->db->get();
            if($query->num_rows() > 0 )
            {
                $row = $query->row_array();
                // return $row;
                $recordId = $row['id'];
                $attempts= $row['attempts'];
                $attempts++;
                // return $recordId;
                $data['attempts']=$attempts;
                if($recordId)
                {
                    // $sql="UPDATE `summary` SET `attempts`='$attempts' WHERE `id`='$recordId'";
                    // $rs=$this->db->query($sql);
                    // return $rs;

                    $this->db->where('id', $recordId);
                    $this->db->update('summary', $data);
                    $insert_id =  $data['id'];
                    $message      = UPDATE_RECORD_CONSTANT." On summary id ".$insert_id;
                    $action       = "Update";
                    $record_id    = $insert_id;
                    //$this->log($message, $record_id, $action);
                    return $record_id;
                }
            }
            else
            {
                $data['attempts']=1;
                $this->db->insert('summary', $data);
                $insert_id =  $this->db->insert_id();
                $message      = INSERT_RECORD_CONSTANT." On summary id ".$insert_id;
                $action       = "Insert";
                $record_id    = $insert_id;
                return $this->db->insert_id();
            }          
    }

    function getdata()
    {
        $sql="SELECT ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id";
        // $sql="SELECT ss.`id`, ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id";
        // $sql="SELECT ss.`id`,ss.`lacture_video`,ss.`question_id`, ss.`video_timing` ,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct FROM `subject_syllabus` ss INNER JOIN questions q ON q.id=ss.question_id";
        $rs=$this->db->query($sql);
        return $rs->result_array();    
    }

    function getAllQuestions()
    {
        $row = $this->db->select("*")->limit(1)->order_by('id',"DESC")->get("subject_syllabus")->row();

        // return $row->id;
        $latest_id = $row->id;

        $sql="SELECT ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id where ss.id=".$latest_id;

        $Lid =  $row->id;
    
        $sql="SELECT ss.`lacture_video`,`lacture_youtube_url`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id WHERE ss.id= $Lid ";

        $rs=$this->db->query($sql);
        return $rs->result_array();    
    }

    public function checkGetdata($lacture_video)
    {         
        $sql="SELECT ss.id,ss.`lacture_video`,iv.video_timing,iv.question_id ,iv.subject_syllabus_id,q.question,q.opt_a,q.opt_b,q.opt_c,q.opt_d,q.opt_e,q.correct,q.class,q.section,q.subject_id FROM `subject_syllabus` ss INNER JOIN `intractive_video_question` iv ON ss.id=iv.subject_syllabus_id INNER JOIN questions q ON iv.question_id=q.id where ss.`lacture_video`='$lacture_video'";
        $rs=$this->db->query($sql);
        return $rs->result_array();
    }

    // function getReport()
    // {
    //     $q = "SELECT * FROM `summary` ";  
    //     $res = $this->db->query($q);
    //     return $res->result_array(); 

    // }

}
?>