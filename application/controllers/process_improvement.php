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
        $data=$this->employee->read();
        foreach($data as $d)
            {
          $arr = array(
                'employeeID' => $d['employeeID'],
                'employee_name' => $d['employee_name'],
                'pg_level' => $d['pg_level'],
                'birthday' => $d['birthday'],
                'date_hired' => $d['date_hired'],
                'position' => $d['position'],
                'promo_date'=>$d['promo_date'],
                'email' => $d['email'],
                'civil_stat' => $d['civil_stat'],
                'cp_no' => $d['cp_no'],                                                
              );
          $hold[]=$arr;
            }
      $data['employee'] = $hold;
        $header_data['title'] = "Employee Admin";
        $this->load->view('include/header',$header_data);
        $this->load->view('employee_admin',$data);
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
            $this->load->view('addEmployeeForm');
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