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
			$header_data['title'] = "LOG IN";
            $this->load->view('include/header',$header_data);
            $this->load->view('management_dashboard');
             $this->load->view('include/footer');
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
        //$rules = array(
                   // array('field'=>'employeeID', 'label'=>'Employee ID', 'rules'=>'required'),
                   // array('field'=>'name', 'label'=>'Name', 'rules'=>'required'),
                   // array('field'=>'bday', 'label'=>'Birthdate', 'rules'=>'required'),
                   // array('field'=>'date_hired', 'label'=>'Date Hired', 'rules'=>'required'),
                   // array('field'=>'position', 'label'=>'Position', 'rules'=>'required'),
                   // array('field'=>'pg_level', 'label'=>'PG Level', 'rules'=>'required'),
                    //array('field'=>'promo_date', 'label'=>'Date of last promotion', 'rules'=>'required'),
                    //array('field'=>'civil_stat', 'label'=>'Civil Status', 'rules'=>'required'),
                   // array('field'=>'cp_no', 'label'=>'Contact No.', 'rules'=>'required')
                    //array('field'=>'isAdmin', 'label'=>'Admin?', 'rules'=>'required'),
               // );
       // $this->form_validation->set_rules($rules);
       // if($this->form_validation->run()==FALSE){
            $header_data['title'] = "Add Employee";
            $this->load->view('include/header',$header_data);
            $this->load->view('addEmployeeForm');
            $this->load->view('include/footer');
        //}
        //else{
           // if(isset($_POST['isAdmin']))
               // $isAdmin=1;
           // else
              //  $isAdmin=0;
          //  $salesAgentRecord=array('userID'=>$_POST['userID'],'password'=>password_hash($_POST['pass'],PASSWORD_BCRYPT),'fullname'=>$_POST['name'],'birthdate'=>$_POST['bday'],'email'=>$_POST['email'],'contact_no'=>$_POST['cnum'],'isAdmin'=>$isAdmin);
           // $this->SalesAgent->create($salesAgentRecord);
           // redirect('knoxville/viewSalesAgents');
       // }
    }

    public function viewLeave(){
     
        $header_data['title'] = "Leave";
        $this->load->view('include/header',$header_data);
        $this->load->view('leave_view');
       	$this->load->view('include/footer');
        
        
    }

        }
    
     
    

?>