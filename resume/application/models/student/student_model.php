<?php
/*   Student Model - Main Model Class */
class student_model extends CI_Model
{
    public function insert_data($data){
        $this->db->trans_start();
        $this->db->insert('address',elements(array('zipcode', 'city', 'state','address1'), $data));
       // log_message('debug','LAST_INSERT_ID'.$courseId);
        $this->db->insert('student_details', elements(array('first_name', 'email_id','mobile_no','qualification','zipcode'), $data));
        $studentId= $this->getLastInsertId();
        // Multiselect when none selected will be parsed as String and not as array. So check if it is an array
        if ( is_array($data['courses'] ) && count($data['courses'] )>0 ) {
          $dataStudentCourses= $this->prepareStudentCourses($studentId,$data['courses']);
          $this->db->insert_batch('student_courses',$dataStudentCourses);
        }
        $dataStudentSkills= $this->addskills($studentId,$data['skill_name']);
        if(count ($dataStudentSkills) >0 )
          $this->db->insert_batch('skills',$dataStudentSkills);
      
        $this->db->trans_complete(); 
        return TRUE;
    }
	
// This method prepares two dimensional array for inseting the data into student courses
    function prepareStudentCourses($studentId, $courses){
        $counter=0;
        foreach ($courses as $key => $value) {
             $data [$counter++]= array(
                'sid' => $studentId,
                'course_id' => $value);
        }
        return $data;
    }
    function addskills($studentId,$skills)
          {
        $counter=0;
        $data= array();
        foreach ($skills as $key => $value) {
          if($value != null){
             $data [$counter++]= array(
                'sid' => $studentId,
                'skill_name' => $value);

          }
       }
      return $data; 
     }
    function getLastInsertId(){
            $id=0;
            $query=$this->db->query("select LAST_INSERT_ID() as lastInsertID");
           $val=$query->result();
            foreach($val as $v)
            {
                $id=$v->lastInsertID;
            }
            return $id;
    }
 
     public function view_data(){

          // $this->db->select('*');
      // $this->db->from('student_details');
        //$this->db->join('address', 'address.zipcode = student_details.zipcode');
        //$query = $this->db->get();

        //return $query->result();
            
        $query=$this->db->query("SELECT * FROM student_details ");
        //return $query->result_array();
        return $query->result();


           }

     public function single_record($id){
             $this->db->select('*');
             $this->db->form('student_details sd');
             $this->db->where('sd.sid',$id);
             $query = $this->db->get();
             $data['student']= $query->result();
           $data['skills'] = $this->getStudentSkills($id);
           $data['courses'] = $this-> getStudentCourses ($id);
          return $data;

               //$query=$this->db->query("SELECT *,concat(first_name,' ',last_name) as name FROM student_details sd
                                         //inner join address ad on sd.zipcode=ad.zipcode
                                         //inner join student_courses sc on sd.sid=sc.sid
                                          //inner join courses c on sc.course_id=c.course_id where sd.sid='".$id."'");
                 //return $query->result();
              }
  
   public function getStudentSkills($id){
      $this->db->select('*');
      $this->db->form('student_details sd');
      $this->db->join('skills sk', 'sk.sid=s.sid','left');
      $this->db->where('sd.sid',$id);
      $query = $this->db->get();
      return $query->result();
    
        }
         public function getStudentCourses($id){
      $this->db->select('*');
      $this->db->form('student_details sd');
      $this->db->join('student_courses sc', 'sc.sid=sd.sid','left');
      $this->db->join('courses cu', 'cu.course_id=sc.course_id','left');
      $this->db->where('sd.sid',$id);
      $query = $this->db->get();
      return $query->result();
    
        }
     public function  getcourse()
           {
            
            $query=$this->db->query("SELECT * FROM courses ");
            $val=$query->result();
            foreach($val as $v)
            {
                $courses[$v->course_id] = $v->course_name;
            }
            return $courses;
             
           }
}
?>


<!-- $query=$this->db->query("SELECT * FROM student_details st,student_courses sc,courses c 
                                 where st.sid=sc.sid
                                 AND sc.course_id=c.course_id"); -->