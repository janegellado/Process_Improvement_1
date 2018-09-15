<!DOCTYPE html>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">

<div class="right_col" role="main">
          <div class="">
    
    <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Employee Management</h2>
                    <ul class="nav navbar-right panel_toolbox">
                  
                      <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Add Employee </a>

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Add Employee</h3>
    </div>
    <div class="modal-body">
    <div>&nbsp;</div>
  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/addEmployee'); 
  ?> 

                      <div class="form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" required="required" for="employeeID" id="inputSuccess2" placeholder=" Employee ID" name="employeeID" value="<?php echo set_value('employeeID')?>" id="employeeID">
                        <span class="fa fa-id-card-o form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  required="required"for="employee_name" id="inputSuccess2" placeholder=" Employee Name" name="employee_name" value="<?php echo set_value('employee_name'); ?>" id="employee_name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  required="required"for="pg_level" id="inputSuccess2" placeholder=" PG Level" name="pg_level" value="<?php echo set_value('pg_level'); ?>" id="pg_level">
                        <span class="fa fa-industry form-control-feedback left" aria-hidden="true"></span>
                      </div>
            
            
                      <div class=" form-group has-feedback">
                        <input type="date" class="form-control has-feedback-left" required="required" for="birthday" id="inputSuccess2" placeholder=" Birthdate" name="birthday" value="<?php echo set_value('birthday'); ?>" id="birthday">
                        <span class="fa fa-birthday-cake form-control-feedback left" aria-hidden="true"></span>
                      </div>
                    
                     <div class=" form-group has-feedback">
                        <input type="date" class="form-control has-feedback-left" required="required" for="date_hired" id="inputSuccess2" placeholder="Date Hired" name="date_hired" value="<?php echo set_value('date_hired'); ?>" id="date_hired">
                        <span class="fa fa-id-card-o form-control-feedback left" aria-hidden="true"></span>
                      </div>
            

                      <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  required="required" for="position" id="inputSuccess2" placeholder="Position" name="position" value="<?php echo set_value('position'); ?>" id="position">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                       <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" required="required" for="email" id="inputSuccess2" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" id="email">
                        <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                      </div>
            
                      <div class=" form-group has-feedback">
                        <input type="date" class="form-control has-feedback-left" required="required" for="promo_date" id="inputSuccess2" placeholder="Last Promotion Date" name="promo_date" value="<?php echo set_value('promo_date'); ?>" id="promo_date">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  required="required" for="civil_stat" id="inputSuccess2" placeholder="Civil Status" name="civil_stat" value="<?php echo set_value('civil_stat'); ?>" id="civil_stat">
                        <span class="fa fa-user-circle-o form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class=" form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" required="required" for="cp_no" id="inputSuccess2" placeholder="  Contact Number" name="cp_no" value="<?php echo set_value('cp_no'); ?>" id="cp_no">
                        <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
                      </div>
    <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewEmployeeAdmin')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
      </div>
    
  </div>
  
</div>
</div>
</div>
</div>


  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/viewEmployeeAdmin'); 
  ?> 
                       
            </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                      <div class="x_content">
                      <p class="text-muted font-13 m-b-30">
                        Manage all the Employees here.
                      </p>
                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
    
                      <tr id="trHead">
            <th >Employee ID</th>
            <th >Name</th>
            <th >Pg Level</th>
            <th >Birthday</th>
            <th >Date Hired</th>
            <th >Position</th>
            <th >Email</th>
            <th >Date of last promotion</th>
            <th >Civil Status</th>
            <th >Contact Number</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
            <?php
        if($employee!=null){
                foreach($employee as $c){  
                    echo "<tr><td>".$c['employeeID']."</td><td>".$c['employee_name']."</td><td>".$c['pg_level']."</td><td>".$c['birthday']."</td><td>".$c['date_hired']."</td><td>".$c['position']."</td><td>".$c['email']."</td><td>".$c['promo_date']."</td><td>".$c['civil_stat']."</td><td>".$c['cp_no']."</td>".'

                    <td><a href="'.base_url('process_improvement/updateEmployee/'.$c['employeeID']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil">Edit</td></tr>';
                    
                }
        }
            ?>
        </tbody>
    </table>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>


 