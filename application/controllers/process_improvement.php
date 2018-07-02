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
      if($this->session->userdata('username')){
            $session_data=$this->session->userdata('logged_in');
            $data['userID']=$this->session->userdata('username');
			       $header_data['title'] = "LOG IN";
            $this->load->view('include/header',$header_data);
            $this->load->view('management_dashboard');
            $this->load->view('include/footer');
      }
    }
    public function viewEmployeeAdmin(){
        
        $header_data['title'] = "Employee Admin";
        $this->load->view('include/header',$header_data);
        $this->load->view('employee_admin');
       $this->load->view('include/footer');
        
        
    }

     public function addEmployee(){
        //load the view
        //get form data
        //add to db
        $rules = array(
                   array('field'=>'name', 'label'=>'Name', 'rules'=>'required'),
                   array('field'=>'employeeID', 'label'=>'Employee ID', 'rules'=>'required'),
                   array('field'=>'bday', 'label'=>'Birthdate', 'rules'=>'required'),
                   array('field'=>'date_hired', 'label'=>'Date Hired', 'rules'=>'required'),
                   array('field'=>'position', 'label'=>'Position', 'rules'=>'required'),
                   array('field'=>'pg_level', 'label'=>'PG Level', 'rules'=>'required'),
                   array('field'=>'promo_date', 'label'=>'Date of last promotion', 'rules'=>'required'),
                   array('field'=>'civil_stat', 'label'=>'Civil Status', 'rules'=>'required'),
                   array('field'=>'cp_no', 'label'=>'Contact No', 'rules'=>'required')
                );
                 $this->form_validation->set_rules($rules);
        if($this->form_validation->run()==FALSE){
            $header_data['title'] = "Add Employee";
            $this->load->view('include/header',$header_data);
            $this->load->view('viewEmployeeAdmin');
            $this->load->view('include/footer');
        }
       else{
          
            $employeeRecord=array('employeeID'=>$_POST['employeeID']
            //'password'=>password_hash($_POST['pass'],PASSWORD_BCRYPT)
              ,'fullname'=>$_POST['employee_name'],'birthdate'=>$_POST['bday'],'date hired'=>$_POST['date_hired'],'position'=>$_POST['position'],'pg level'=>$_POST['pg_level'],'date of last promotion'=>$_POST['promo_date'],'civil status'=>$_POST['civil_stat'],'contact no'=>$_POST['cp_no'],'isAdmin'=>$isAdmin);
            $this->employee->create($employeeRecord);
            redirect('process_improvement/viewEmployeeAdmin');
        }
    }

    public function updateEmployee(){
        
            $title['title']="Update Employee";
            $this->load->view('include/header',$title);
            $this->load->view('updateEmployeeForm',$data);
            $this->load->view('include/footer');
        
    }

    public function viewLeave(){
     
        $header_data['title'] = "Leave";
        $this->load->view('include/header',$header_data);
        $this->load->view('leave_view');
       	$this->load->view('include/footer');
        
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
    public function viewMR(){
     
        $header_data['title'] = "MR";
        $this->load->view('include/header',$header_data);
        $this->load->view('mr_view');
        $this->load->view('include/footer');
        
    }


        }
    
     
    

?>