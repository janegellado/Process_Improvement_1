<div class="right_col" role="main">
          <div class="">
           
    
    <div class="clearfix"></div>
  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>Employee Details</h4>
                    
                    <div class="clearfix"></div>
               </div>
                  <div class="x_content">
                    <div class="" style="width: 32%; height: 398px; border: 3px solid gray; position: absolute; margin-left: 10%; margin-top: 50px;"> </div>
                    <br />
        <div class="col-md-6" style="padding: 10px; text-align: center; margin-left: 450px;">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">PG Level</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Birthdate</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Hired</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Position</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of last promotion</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group" style="margin-left: 25%;">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
                      </div>
                     
                      
  </form>
  </div>
  </div>
 
   </div>
  </div>

      </div>



            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>List of Employee</h4>
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
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">PG Level</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Birthdate</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Hired</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Position</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Promotion</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
            
                  
                   
                    

             
      

    
  
  <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 30%;"><a href="<?php echo base_url('process_improvement/listEmployee')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
      </div>
    
  </div>
  </form>
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
            <th >Birthday</th>
            <th >Date Hired</th>
            <th >Position</th>
            <th >Pg Level</th>
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
                    echo "<tr><td>".$c['employeeID']."</td><td>".$c['name']."</td><td>".$c['bday']."</td><td>".$c['date_hired']."</td><td>".$c['position']."</td><td>".$c['position']."</td><td>".$c['pg_level']."</td><td>".$c['promo_date']."</td><td>".$c['civil_stat']."</td><td>".$c['cp_no'].'</td>

                    <td><a href="'.base_url('knoxville/updateSalesAgent/'.$c['userID']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit</a>| <a href="'.base_url('knoxville/delSalesAgent/'.$c['userID']).'"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a></td></tr>';
                    //echo base_url('knoxville/delClient/'.c['clientID'])
                }
        }
            ?>
        </tbody>
    </table>
    </div>


 