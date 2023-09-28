<?php

class Question_model extends MY_model 
{
	public function add($data) 
    {
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('questions', $data);
			$message      = UPDATE_RECORD_CONSTANT." On  questions id ".$data['id'];
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
				//return $return_value;
			}
        } else {
            $this->db->insert('questions', $data);          
			$id=$this->db->insert_id();
			$message      = INSERT_RECORD_CONSTANT." On  questions id ".$id;
			$action       = "Insert";
			$record_id    = $id;
			$this->log($message, $record_id, $action);
			//echo $this->db->last_query();die;
			//======================Code End==============================

			$this->db->trans_complete(); # Completing transaction
			/*Optional*/

			if ($this->db->trans_status() === false) {
				# Something went wrong.
				$this->db->trans_rollback();
				return false;

			} else {
				//return $return_value;
			}
			return $id;
        }
    }

    public function get($id) 
    {
        // $sql="SELECT q.id,q.question,q.correct,q.`opt_a`, q.`opt_b`, q.`opt_c`, q.`opt_d`, q.`opt_e`,cs.class_id,cs.section_id,s.name,q.subject_id,c.`class`,sc.`section` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section where q.id=$id";
        // $rs = $this->db->query($sql);
        // return $rs->row();
        $this->db->select('questions.*,subjects.name')->from('questions');
        $this->db->join('subjects', 'subjects.id = questions.subject_id');
        if ($id!=null) 
        {
            $this->db->where('questions.id', $id);
        } 
        else 
        {
            $this->db->order_by('questions.id');
        }
        $query = $this->db->get();
        if ($id!=null) {
            return $query->row();
        } else {
            return $query->result();
        }
    }

    public function getByClassSection($class_id,$section_id,$subject_id_filter) 
    {
        if($class_id!=null && $class_id!=null && $subject_id_filter!=null) 
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section  where c.id='$class_id' and sc.id='$section_id' and s.id='$subject_id_filter'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else if($class_id!=null && $class_id!=null && $subject_id_filter==null)
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section  where c.id='$class_id' and sc.id='$section_id'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else 
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
    }

    // -------------custom--------
    public function getQuestionFilter($class_id,$section_id,$subject_id_filter)
    {
        if($class_id!=null && $section_id!=null && $subject_id_filter!=null) 
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section  where c.id='$class_id' and sc.id='$section_id' and s.id='$subject_id_filter'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else if($class_id!=null && $section_id!=null && $subject_id_filter==null)
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section  where c.id='$class_id' and sc.id='$section_id'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else if($class_id!=null && $section_id==null && $subject_id_filter==null)
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section  where c.id='$class_id'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else if($class_id==null && $section_id==null && $subject_id_filter!=null)
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section  where s.id='$subject_id_filter'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else 
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
    }
    
    public function getVideoQuestionFilter($class_id,$section_id,$subject_id_filter)
    {
        if($class_id!=null && $section_id!=null && $subject_id_filter!=null) 
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section  where c.id='$class_id' and sc.id='$section_id' and s.id='$subject_id_filter' and q.isVideoPopup='yes'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else if($class_id!=null && $section_id!=null && $subject_id_filter==null)
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section  where c.id='$class_id' and sc.id='$section_id' and q.isVideoPopup='yes'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else if($class_id!=null && $section_id==null && $subject_id_filter==null)
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section  where c.id='$class_id' and q.isVideoPopup='yes'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else if($class_id==null && $section_id==null && $subject_id_filter!=null)
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section where s.id='$subject_id_filter' and q.isVideoPopup='yes'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
        else 
        {
            $sql="SELECT q.id,c.class,sc.section,s.name,q.`question`,q.`correct` FROM `questions` q INNER JOIN subjects s on s.id=q.`subject_id` INNER JOIN class_sections cs on q.`class`=cs.`class_id` and q.`section`=cs.`section_id` INNER JOIN classes c on c.id=q.class INNER JOIN sections sc on sc.id=q.section where q.isVideoPopup='yes'";
            $rs = $this->db->query($sql);
            return $rs->result();
        }
    }
    
    // -------------custom--------

    public function remove($id){
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id', $id);
        $this->db->delete('questions');
		$message      = DELETE_RECORD_CONSTANT." On questions id ".$id;
        $action       = "Delete";
        $record_id    = $id;
        $this->log($message, $record_id, $action);
		//======================Code End==============================
        $this->db->trans_complete(); # Completing transaction
        /*Optional*/
        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
        //return $return_value;
        }
    }

    public function image_add($id,$image)
    {
        $this->db->where('id', $id);
        $this->db->update('questions', $image);

    }

    public function add_option($data){
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('question_options', $data);
        } else {
            $this->db->insert('question_options', $data);
            return $this->db->insert_id();
        }
    }

    public function add_question_answers($data)
    {
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('question_answers', $data);
        } else {
            $this->db->insert('question_answers', $data);
            return $this->db->insert_id();
        }
    }

    public function get_result($id){
        return $this->db->select('*')->from('questions')->join('question_answers','question.id=question_answers.question_id')->get()->row_array();

    }
    public function get_option($id){
        return $this->db->select('id,option')->from('question_options')->where('question_id',$id)->get()->result_array();
    }

    public function get_answer($id){
        return $this->db->select('option_id as answer_id')->from('question_answers')->where('question_id',$id)->get()->row_array();
    }
}