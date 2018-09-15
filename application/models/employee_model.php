<?php

class Employee_model extends CI_Model {
    private $table = 'employee';
    
   public function create($employeeRecord){

        $this->db->insert($this->table, $employeeRecord);
    }
    
    function read($condition=null){
        $this->db->select('*');
        $this->db->from($this->table);
        
        if(isset($condition))
            $this->db->where($condition);
        
        $query = $this->db->get();

        
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
          }

    function update($newRecord){
        $this->db->replace($this->table,$newRecord);
    }
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }

    function count(){
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    $query = $this->db->query('SELECT * FROM employee');
    return $query->num_rows();

    }

    function users()
    {
        $query = $this->db->get('employee');
        return $query->result();
    }
    function data($employeeID)
    {
        $query = $this->db->get_where('employee', array('employeeID' => $employeeID));
        return $query->result();
    }
}
?>