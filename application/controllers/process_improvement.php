<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process_Improvement extends CI_Controller {
	public function __construct(){
        parent::__construct();

        $this->load->model('employee_model','employee');
        $this->load->model('leavedb_model','leavedb');
		$this->load->model('mr_model','mr');
		$this->load->model('ot_model','ot');
		$this->load->model('training_model','training');
		$this->load->model('trainingsched_model','trainingsched');
		

    }

    public function index()
    { 

          $data['employee'] = $this->employee->users();
        	$this->load->view('include/header');
            $this->load->view('pick', $data);
        	$this->load->view('include/footer');
    }

    public function display()
    {			

    $employeeID = $this->input->post('employeeID');
    $data = $this->employee->data($employeeID);
    if(count($data)>0)
    	{
    		$array=$data;
    	}
    	echo json_encode($data);
    }

    public function viewEmployeeAdmin(){
        $result_array = $this->employee->read();
        $data['employee'] = $result_array; 
        $id =  $this->employee->count();
        $data['employeeID'] = (string) $id++;
        $header_data['title'] = "View Employees";
        $this->load->view('include/header',$header_data);
        $this->load->view('employee_admin',$data);
       $this->load->view('include/footer');
        
    }
   
    public function addEmployee(){
        //load the view
        //get form data
        //add to db
        $rules = array(
                   array('field'=>'employeeID', 'label'=>'Employee ID', 'rules'=>'required'),
                   array('field'=>'employee_name', 'label'=>'Name', 'rules'=>'required'),
                   array('field'=>'pg_level', 'label'=>'PG_Level', 'rules'=>'required'),
                   array('field'=>'birthday', 'label'=>'Birthdate', 'rules'=>'required'),
                   array('field'=>'date_hired', 'label'=>'Date Hired', 'rules'=>'required'),
                   array('field'=>'position', 'label'=>'Position', 'rules'=>'required'),
                   array('field'=>'email', 'label'=>'Email', 'rules'=>'required'),
                   array('field'=>'promo_date', 'label'=>'Date of last promotion', 'rules'=>'required'),
                   array('field'=>'civil_stat', 'label'=>'Civil Status', 'rules'=>'required'),
                   array('field'=>'cp_no', 'label'=>'Contact No', 'rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run()==FALSE){
            $header_data['title'] = "Add Employee";
            $this->load->view('include/header',$header_data);
            $this->load->view('include/footer');
        }
       else{
          
            $employeeRecord=array(
                'employeeID'=>$_POST['employeeID'],
                'employee_name'=>$_POST['employee_name'],
                'pg_level'=>$_POST['pg_level'],
                'birthday'=>$_POST['birthday'],
                'date_hired'=>$_POST['date_hired'],
                'position'=>$_POST['position'],
                'email'=>$_POST['email'],
                'promo_date'=>$_POST['promo_date'],
                'civil_stat'=>$_POST['civil_stat'],
                'cp_no'=>$_POST['cp_no']
            );
            $this->employee->createemployee($employeeRecord);
            redirect('process_improvement/viewEmployeeAdmin');
            }
    }

    public function updateEmployee($employeeID){
         $record['employeeID']=$employeeID;
         $condition = array('employeeID' => $employeeID);
         $oldRecord = $this->employee->read($condition);
        
        foreach($oldRecord as $o){
                $data['employeeID']=$o['employeeID'];
                $data['employee_name']=$o['employee_name'];
                $data['pg_level']=$o['pg_level'];
                $data['birthday']=$o['birthday'];
                $data['date_hired']=$o['date_hired'];
                $data['position']=$o['position'];
                $data['email']=$o['email'];
                $data['promo_date']=$o['promo_date'];
                $data['civil_stat']=$o['civil_stat'];
                $data['cp_no']=$o['cp_no'];
              }
            
             $rules = array(
                   array('field'=>'employeeID', 'label'=>'Employee ID', 'rules'=>'required'),
                   array('field'=>'employee_name', 'label'=>'Name', 'rules'=>'required'),
                   array('field'=>'pg_level', 'label'=>'PG_Level', 'rules'=>'required'),
                   array('field'=>'birthday', 'label'=>'Birthdate', 'rules'=>'required'),
                   array('field'=>'date_hired', 'label'=>'Date Hired', 'rules'=>'required'),
                   array('field'=>'position', 'label'=>'Position', 'rules'=>'required'),
                   array('field'=>'email', 'label'=>'Email', 'rules'=>'required'),
                   array('field'=>'promo_date', 'label'=>'Date of last promotion', 'rules'=>'required'),
                   array('field'=>'civil_stat', 'label'=>'Civil Status', 'rules'=>'required'),
                   array('field'=>'cp_no', 'label'=>'Contact No', 'rules'=>'required')
                );
            
            $this->form_validation->set_rules($rules);
            
            if($this->form_validation->run()==FALSE){
            
                    $header_data['title'] = "Update Employee";
                    $this->load->view('include/header',$header_data);
                    $this->load->view('updateEmployeeForm',$data);
                    $this->load->view('include/footer');
             }
            else{
          
                $newRecord=array(
                    'employeeID'=>$_POST['employeeID'],
                    'employee_name'=>$_POST['employee_name'],
                    'pg_level'=>$_POST['pg_level'],
                    'birthday'=>$_POST['birthday'],
                    'date_hired'=>$_POST['date_hired'],
                    'position'=>$_POST['position'],
                    'email'=>$_POST['email'],
                    'promo_date'=>$_POST['promo_date'],
                    'civil_stat'=>$_POST['civil_stat'],
                    'cp_no'=>$_POST['cp_no']
                     );
                    
                    $this->employee->update($newRecord);
                    redirect('process_improvement/viewEmployeeAdmin');
                 }
        }

    public function delEmployee($employeeID){
        $where_array = array('employeeID'=>$employeeID);
        $this->employee->del($where_array);
        redirect('process_improvement/viewEmployeeAdmin');
          }

    public function viewLeave(){
     
        $header_data['title'] = "Leave";
        $result_array = $this->leavedb->read();
        $data['leavedb'] = $result_array; 
        $this->load->view('include/header',$header_data);
        $this->load->view('leave_view',$data);
       	$this->load->view('include/footer');   
    }

    public function addLeave(){
        
        $rules = array(
                   array('field'=>'date_of_filing', 'label'=>'Date of Filing', 'rules'=>'required'),
                   array('field'=>'place', 'label'=>'Place', 'rules'=>'required'),
                   array('field'=>'type', 'label'=>'Type of Leave', 'rules'=>'required'),
                   array('field'=>'no_of_days', 'label'=>'No. of Days', 'rules'=>'required'),
                   array('field'=>'inc_dates', 'label'=>'Inclusive Dates', 'rules'=>'required'),
                   array('field'=>'supervisor', 'label'=>'Approver', 'rules'=>'required'),
                   array('field'=>'status', 'label'=>'Status', 'rules'=>'required'),
                );
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run()==FALSE){
            $header_data['title'] = "Add Leave Application";
            $this->load->view('include/header',$header_data);
            $this->load->view('include/footer');
        }
       else{
          
            $leaveRecord=array(
                'date_of_filing'=>$_POST['date_of_filing'],
                'place'=>$_POST['place'],
                'type'=>$_POST['type'],
                'no_of_days'=>$_POST['no_of_days'],
                'inc_dates' =>$_POST['inc_dates'],
                'supervisor'=>$_POST['supervisor'],
                'status'=>$_POST['status'],
                
            );
            $this->leavedb->createleave($leaveRecord);
            redirect('process_improvement/viewLeave');
            }
    }

    public function viewProperties(){
     
        $header_data['title'] = "Property Assigned";
        $this->load->view('include/header',$header_data);
        $this->load->view('mradmin_view');
        $this->load->view('include/footer');
        
    }

    public function updateProperties(){
        
            $title['title']="Update Property Assigned";
            $this->load->view('include/header',$title);
            $this->load->view('updatePropertyForm',$data);
            $this->load->view('include/footer');
        
    }

    public function viewTraining(){
     
        $header_data['title'] = "Training Attended";
        $this->load->view('include/header',$header_data);
        $this->load->view('training_view');
        $this->load->view('include/footer');
        
    }


    public function updateTraining(){
        
            $title['title']="Update Training Attended";
            $this->load->view('include/header',$title);
            $this->load->view('updateTrainingForm',$data);
            $this->load->view('include/footer');
        
    }

     public function viewOvertimeRegular(){
     
        $header_data['title'] = "Employee Admin";
        $this->load->view('include/header',$header_data);
        $this->load->view('otregular_view');
       $this->load->view('include/footer');
        
        
    }


     public function viewOvertimeContractual(){
     
        $header_data['title'] = "Employee Admin";
        $this->load->view('include/header',$header_data);
        $this->load->view('otcontractual_view');
       $this->load->view('include/footer');
        
        
    }
    public function viewMR(){
     
        $header_data['title'] = "MR";
        $this->load->view('include/header',$header_data);
        $this->load->view('mr_view');
        $this->load->view('include/footer');
        
    }
    public function newdisplay()
    {
    	$this->load->view('include/header');
        $this->load->view('management_dashboard');
        $this->load->view('include/footer');
    }


    public function viewSVLeave(){
     
        $header_data['title'] = "Supervisor's Leave";
        $this->load->view('include/header',$header_data);
        $this->load->view('sv_leave');
        $this->load->view('include/footer');
        
    }

   


        }
    
     
    

?>