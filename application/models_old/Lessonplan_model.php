<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lessonplan_model extends MY_model {
 
    public function __construct() {
        parent::__construct();
        $this->current_session = $this->setting_model->getCurrentSession();
        
        $this->current_session_name = $this->setting_model->getCurrentSessionName();
        $this->start_month = $this->setting_model->getStartMonth();
    }

    	public function add_lesson($data){
    		
 
			$this->db->trans_start(); # Starting Transaction
			$this->db->trans_strict(false); # See Note 01. If you wish can remove as well
			//=======================Code Start===========================
			if(isset($data['id']) && $data['id']!=''){

				$this->db->where('id', $data['id']);
			    $query = $this->db->update('lesson', $data);
			    $insert_id =$data['id'];
			    $message      = UPDATE_RECORD_CONSTANT." On lesson id ".$insert_id;
			    $action       = "Update";
			    $record_id    = $insert_id;
			}else{
				$this->db->insert('lesson', $data);
				$insert_id =  $this->db->insert_id();
				$message      = INSERT_RECORD_CONSTANT." On lesson id ".$insert_id;
				$action       = "Insert";
			$record_id    = $insert_id;
			}
			
            
			
            
			
			$this->log($message, $record_id, $action);
			
            
        
    		
			//======================Code End==============================

			$this->db->trans_complete(); # Completing transaction
			/*Optional*/

			if ($this->db->trans_status() === false) {
				# Something went wrong.
				$this->db->trans_rollback();
				return false;

			} else {
				return $insert_id;
			}
		}
    	

        
        public function getlessonBysubjectid($sub_id,$getlessonBysubjectid){
          return  $this->db->select('*')->from('lesson')->where('subject_group_subject_id',$sub_id)->where('subject_group_class_sections_id',$getlessonBysubjectid)->get()->result_array();

        }
		
		 public function getlessonBylessonid($lesson_id){
          return  $this->db->select('*')->from('lesson')->where('id',$lesson_id)->get()->result_array();

        }
		public function getlessonBysubjectidedit($sub_id,$subject_group_class_sections_id){
          return  $this->db->select('*')->from('lesson')->where('subject_group_subject_id',$sub_id)->where('subject_group_class_sections_id',$subject_group_class_sections_id)->get()->result_array();

        }
		
        public function  get_subjectNameBySubjectGroupSubjectId($subject_group_subject_id){
        	return $this->db->select('*')->from('subject_group_subjects')->join("subjects","subjects.id = subject_group_subjects.subject_id")->where('subject_group_subjects.id',$subject_group_subject_id)->get()->row_array();
        }

        //=======================topic==========================

        public function add_topic($data){
			$this->db->trans_start(); # Starting Transaction
			$this->db->trans_strict(false); # See Note 01. If you wish can remove as well
			//=======================Code Start===========================
			if(isset($data['id']) && $data['id']!=''){
			$this->db->where('id',$data['id']);
			$this->db->update('topic', $data);
			
            $message      = UPDATE_RECORD_CONSTANT." On topic id ".$data['id'];
            $insert_id =  $data['id'];
			$action       = "Update";
			$record_id    = $data['id'];
			}else{
			$this->db->insert('topic', $data);
			$insert_id =  $this->db->insert_id();
            $message      = INSERT_RECORD_CONSTANT." On topic id ".$insert_id;
			$action       = "Insert";
			$record_id    = $insert_id;	
			}
            
			$this->log($message, $record_id, $action);
			//======================Code End==============================

			$this->db->trans_complete(); # Completing transaction
			/*Optional*/

			if ($this->db->trans_status() === false) {
				# Something went wrong.
				$this->db->trans_rollback();
				return false;

			} else {
				return $insert_id;
			}
        }

        public function gettopicBylessonid($lessonid,$session){
			return  $this->db->select('*')->from('topic')->where('lesson_id',$lessonid)->where('session_id',$session)->get()->result_array();
        }
		
		public function gettopic($id = null,$session){ 

			$this->db->select('topic.*,subject_groups.name as sgname,subjects.name as subname,sections.section as sname,sections.id as sectionid,subject_groups.id as subjectgroupsid,subjects.id as subjectid,class_sections.id as csectionid,classes.class as cname,classes.id as classid,lesson.name as lessonname,lesson.subject_group_class_sections_id,lesson.subject_group_subject_id')->from('topic');

			if ($id != null) {
				$this->db->where('topic.lesson_id', $id);
			}
			$this->db->where('topic.session_id', $session);

			$this->db->join("lesson","lesson.id = topic.lesson_id");
			$this->db->join("subject_group_subjects","subject_group_subjects.id = lesson.subject_group_subject_id");
			$this->db->join("subject_groups","subject_groups.id = subject_group_subjects.subject_group_id");
			$this->db->join("subjects","subjects.id = subject_group_subjects.subject_id");
			$this->db->join("subject_group_class_sections","subject_group_class_sections.id = lesson.subject_group_class_sections_id",'inner');
		$this->db->join("class_sections","class_sections.id = subject_group_class_sections.class_section_id");		
				
			$this->db->join("sections","sections.id = class_sections.section_id");
			$this->db->join("classes","classes.id = class_sections.class_id");
			$this->db->group_by("lesson.subject_group_subject_id");	
			$this->db->group_by("topic.lesson_id");
		
			$query = $this->db->get();
			if ($id != null) {
				return $query->row_array();
			} else {
				return $query->result_array();
			}
			//echo $this->db->last_query();die;
		}
		public function deletetopic($id,$session){			
			$this->db->where("id",$id)->where("session_id",$session)->delete('topic');			
		}
		public function deletetopicbulk($id,$session){			
			$this->db->where("lesson_id",$id)->where("session_id",$session)->delete('topic');			
		}
		public function changeTopicStatus($data) {
			$this->db->trans_start(); # Starting Transaction
			$this->db->trans_strict(false); # See Note 01. If you wish can remove as well
			//=======================Code Start===========================
			$this->db->where('id', $data['id']);
			$query = $this->db->update('topic', $data);
			
			$message      = UPDATE_RECORD_CONSTANT." On  topic id ". $data['id'];
			$action       = "Update";
			$record_id    = $data['id'];
			$this->log($message, $record_id, $action);			
			//======================Code End==============================

			$this->db->trans_complete(); # Completing transaction
			/*Optional*/

			if ($this->db->trans_status() === false) {
				# Something went wrong.
				$this->db->trans_rollback();
				return false;

			} else {
				return true;
			}
		}

        //==========================syllabus============================

        public function add_syllabus($data)
		{
			//$this->db->trans_start(); # Starting Transaction
			//$this->db->trans_strict(false); # See Note 01. If you wish can remove as well
			//=======================Code Start===========================
			if (isset($data['id']) && $data['id']>0) 
			{
				$this->db->where('id', $data['id']);
				$this->db->update('subject_syllabus', $data);
				// echo $this->db->last_query();die;
				$insert_id =  $data['id'];
				$message      = UPDATE_RECORD_CONSTANT." On Subject Syllabus id ".$insert_id;
				$action       = "Update";
				$record_id    = $insert_id;
				//$this->log($message, $record_id, $action);
				return $record_id;
			} 
			else 
			{
				$this->db->insert('subject_syllabus', $data);
				$insert_id =  $this->db->insert_id();
				$message      = INSERT_RECORD_CONSTANT." On Subject Syllabus id ".$insert_id;
				$action       = "Insert";
				$record_id    = $insert_id;
				//$this->log($message, $record_id, $action);				
				return $this->db->insert_id();
			}
           
			//======================Code End==============================

			//	$this->db->trans_complete(); # Completing transaction
			/*Optional*/

			//if ($this->db->trans_status() === false) {
				# Something went wrong.
			//	$this->db->trans_rollback();
			//	return false;

			//} else {
			//	return $insert_id;
			//}
        }

		public function add_question($questionData)
		{
			//=======================Code Start===========================
			if(isset($questionData['id']) && $questionData['id']>0) 
			{
				$this->db->where('id', $questionData['id']);
				$this->db->update('intractive_video_question', $questionData);
				$insert_id    =  $questionData['id'];
				$message      =  UPDATE_RECORD_CONSTANT." On intractive_video_question id ".$insert_id;
				$action       =  "Update";
				$record_id    =  $insert_id;
				return $record_id;
			} 
			else 
			{
				$this->db->insert('intractive_video_question', $questionData);
				$insert_id 	  =  $this->db->insert_id();
				$message      =  INSERT_RECORD_CONSTANT." On intractive_video_question id ".$insert_id;
				$action       =  "Insert";
				$record_id    =  $insert_id;
				return $this->db->insert_id();
			}
        }

		public function add_question1($data)
		{
			if(isset($questionData['id']) && $questionData['id']>0) 
			{
				$this->db->where('id', $questionData['id']);
				$this->db->update('intractive_video_question', $questionData);
				$insert_id    =  $questionData['id'];
				$message      =  UPDATE_RECORD_CONSTANT." On intractive_video_question id ".$insert_id;
				$action       =  "Update";
				$record_id    =  $insert_id;
				return $record_id;
			} 
			else 
			{
				$this->db->insert('intractive_video_question', $questionData);
				$insert_id 	  =  $this->db->insert_id();
				$message      =  INSERT_RECORD_CONSTANT." On intractive_video_question id ".$insert_id;
				$action       =  "Insert";
				$record_id    =  $insert_id;
				return $this->db->insert_id();
			}
		}

		function add_products($questionData)
		{
			// $sql="INSERT INTO `intractive_video_question`(`question_id`, `video_timing`, `subject_syllabus_id`) VALUES (:question_id,:video_timing,:subject_syllabus_id)";
			// $rs=$this->db->query($sql);
			// return $rs;    
			$this->db->insert('intractive_video_question', $questionData);
			
		}

		public function update_syllabus($data) 
		{
			$this->db->trans_start(); # Starting Transaction
			$this->db->trans_strict(false); # See Note 01. If you wish can remove as well
			//=======================Code Start===========================
			$this->db->where('id', $data['id']);
			$query = $this->db->update('subject_syllabus', $data);			
			$message      = UPDATE_RECORD_CONSTANT." On  Subject Syllabus id ". $data['id'];
			$action       = "Update";
			$record_id    = $data['id'];
			$this->log($message, $record_id, $action);			
			//======================Code End==============================
			$this->db->trans_complete(); # Completing transaction
			/*Optional*/
			if($this->db->trans_status() === false) 
			{
				# Something went wrong.
				$this->db->trans_rollback();
				return false;
			} 
			else 
			{
				return true;
			}
		}

        
	public function get($id = null,$session,$subject_group_subject_id = null)
	{ 

		$this->db->select('lesson.*,subject_groups.name as sgname,subjects.name as subname,sections.section as sname,sections.id as sectionid,subject_groups.id as subjectgroupsid,subjects.id as subjectid,class_sections.id as csectionid,classes.class as cname,classes.id as classid')->from('lesson');

		if ($id != null) {
            $this->db->where('lesson.subject_group_class_sections_id', $id);            
        }
		if ($subject_group_subject_id != null) {
            $this->db->where('subject_group_subjects.id', $subject_group_subject_id);            
        }
        
        
		$this->db->where('lesson.session_id', $session);
		
		$this->db->join("subject_group_subjects","subject_group_subjects.id = lesson.subject_group_subject_id");
		$this->db->join("subject_groups","subject_groups.id = subject_group_subjects.subject_group_id");
		$this->db->join("subjects","subjects.id = subject_group_subjects.subject_id");
		$this->db->join("subject_group_class_sections","subject_group_class_sections.id = lesson.subject_group_class_sections_id",'inner');
		$this->db->join("class_sections","class_sections.id = subject_group_class_sections.class_section_id");		
		$this->db->join("sections","sections.id = class_sections.section_id");
		 $this->db->join("classes","classes.id = class_sections.class_id");
		 $this->db->group_by("lesson.subject_group_subject_id");
		 $this->db->group_by("lesson.subject_group_class_sections_id");		
        $query = $this->db->get();
		if ($id != null) {
            return $query->row_array();
        } else {
            return $query->result_array();
        }
    
    }
 
    public function getsubject_group_class_sectionsId($class_id,$section_id,$subject_group_id)
	{
   
   				$sql = "SELECT subject_groups.name, subject_group_class_sections.* from subject_group_class_sections INNER JOIN class_sections on class_sections.id=subject_group_class_sections.class_section_id INNER JOIN subject_groups on subject_groups.id=subject_group_class_sections.subject_group_id WHERE class_sections.class_id=" . $this->db->escape($class_id) . " and class_sections.section_id=" . $this->db->escape($section_id) . " and subject_groups.id=" . $this->db->escape($subject_group_id) ."and subject_groups.session_id=" . $this->db->escape($this->current_session) ." ORDER by subject_groups.id DESC";
                $query = $this->db->query($sql);
               
                return $query->row_array();
    }

	public function getlesson($subject_group_subjectid,$subject_group_class_sections_id,$session){
		return  $this->db->select('*')->from('lesson')->where('lesson.subject_group_subject_id',$subject_group_subjectid)->where("session_id",$session)->where('subject_group_class_sections_id',$subject_group_class_sections_id)->get()->result_array();
    }
	public function deletelesson($id,$session)
	{			
		$this->db->where("id",$id)->where("session_id",$session)->delete('lesson');			
	}
	public function deletelessonbulk($id,$session,$subject_group_subject_id)
	{			
		$this->db->where("subject_group_class_sections_id",$id)->where("subject_group_subject_id",$subject_group_subject_id)->where("session_id",$session)->delete('lesson');			
	}

	public function get_subjectstatus($id,$subject_group_class_section_id){

		$sql="SELECT COUNT(CASE WHEN topic.status = 0 then 1 ELSE NULL END) as 'incomplete', COUNT(CASE WHEN topic.status = 1 then 1 ELSE NULL END) as 'complete',count('*') as total FROM `lesson` inner join topic on lesson.id=topic.lesson_id WHERE lesson.subject_group_class_section_id=".$this->db->escape($subject_group_class_section_id)."and lesson.subject_group_subject_id=".$this->db->escape($id);

		$query = $this->db->query($sql);
        return $query->result();

	}
	public function get_subject_syllabus($subject_group_subject_id,$subject_id,$time_from,$time_to,$new_date,$staddID,$session){ 

		$this->db->select('subject_syllabus.*,topic.name as tname')
				->join("topic","topic.id = subject_syllabus.topic_id")
				->from('subject_syllabus')
				->where("subject_syllabus.subject_group_subject_id",$subject_group_subject_id)	
				->where("subject_syllabus.subject_id",$subject_id)	
				->where("subject_syllabus.time_from",$time_from)	
				->where("subject_syllabus.time_to",$time_to)		
				->where("subject_syllabus.date",$new_date)	
				->where("subject_syllabus.created_by",$staddID)		
				->where("subject_syllabus.session_id",$session);		
        $query = $this->db->get();
		return $query->result_array();		
    }


    public function ifclassteacher($class_id,$section_id,$staff_id,$subject_group_id,$subject_group_subject_id){
    	$class_teacher=$this->db->select('*')->from('class_teacher')->where('class_id',$class_id)->where('section_id',$section_id)->where('staff_id',$staff_id)->get()->num_rows();
    	 if($class_teacher>0){
    	 	return 1;
    	 }else{
    	$subject_teacher=$this->db->select('*')->from('subject_timetable')->where('class_id',$class_id)->where('section_id',$section_id)->where('staff_id',$staff_id)->where('subject_group_id',$subject_group_id)->where('subject_group_subject_id',$subject_group_subject_id)->get()->num_rows();
    	//echo $this->db->last_query();die;
    	if($subject_teacher>0){
    		return 1;
    	}else{
    		return 0;
    	}
    }
    }

	

}