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
                    <h2>Application For Leave</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                        <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Leave Application </a>
                           <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">

                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><h3 class="modal-title" id="lineModalLabel">Leave Application Form</h3>
                                    </div>

                                  <div class="modal-body">
                                      <div>&nbsp;</div>
                                        <div class="container">
                                          <?php echo validation_errors(); ?>
                                          <?php echo form_open('process_improvement/addEmployee');?> 

      <form id="demo-form" data-parsley-validate>
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Date of Filing :</span></label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="date" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                      <div>&nbsp;</div>

                      <div>&nbsp;</div>
                      <div class="form-group col">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Leave :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control">
                            <option>Vacation Leave (Local)</option>
                            <option>Vacation Leave (International)</option>
                            <option>Sick Leave</option>
                            <option>Special Leave Priveledge</option>
                          </select>
                        </div>
                      </div>
                      <div>&nbsp;</div><br>

                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="">Where will leave be spent? :</span></label>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        <div>&nbsp;</div>

                        <label for="">INCLUSIVE DATES</label><br>
                       <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="">From</span>
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="date" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>

                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="">To</span>
                          </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="date" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                          <div>&nbsp;</div><br>

                         <label class="control-label col-md-5 col-sm-5 col-xs-12" for="">No. of Working Days Applied For: </span></label>
                        <label class="" for="">1</span></label>
                      <div>&nbsp;</div>

                      <label for="">DETAILS OF ACTION APPLICATION</label><br>
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Recommendations: </span></label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                      <div>&nbsp;</div><br>

                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">ADM,DC/SUPERVISOR: </span></label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                      <div>&nbsp;</div>

                  </form>

                            <!--for spacing only-->
                                            <div class="">
                                              <label class="control-label col-sm-4">&nbsp;</label>
                                            </div>
  
                            <!--for buttons--><div class="form-group">
                                               <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button class="btn btn-success" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('')?>" style="color: white;">Add</a></button>
                                                <button type="submit" class="btn btn-success" value="submit">Cancel</button>

                                               </div>
                                            </div>
    
                                        </div>
  
                                  </div>
                            </div>
                        </div>
                    </div>
<!--end of modal-->

  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/viewEmployeeAdmin'); 
  ?> 
                       
            </li>
                    </ul>
                    <div class="clearfix"></div>
    </div>
 <!--first panel-->                      
<div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" ">
                <div class="x_panel">
                  <div class="">
                    <h4>LIST OF EMPLOYEE</h4>
                  </div>
                  <div class="x_content" >

                    <br />
  <!--table start-->
                    <table id="datatable" class="table table-striped table-bordered"    >
                      <thead>
  
                    <tr id="trHead">
            <th >Date Filled</th>
            <th >Type of Leave</th>
            <th >No. of Days</th>
            <th >Inclusive Dates</th>
            <th >Approver</th>
            <th >Status</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
            <!--<?php
        if($leave!=null){
                foreach($leave as $c){  
                    echo "<tr><td>".$c['date_filled']."</td><td>".$c['type']."</td><td>".$c['no_of_days']."</td><td>".$c['inc_dates']."</td><td>".$c['approver']."</td><td>".$c['status'].'</td>

                    <td><a href="'.base_url('knoxville/updateSalesAgent/'.$c['userID']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit</a>| <a href="'.base_url('knoxville/delSalesAgent/'.$c['userID']).'"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a></td></tr>';
                    //echo base_url('knoxville/delClient/'.c['clientID'])
                }
        }
            ?>-->
        </tbody>
    </table>
              <button style="margin-top: -10px; margin-left: 50%;"><i class="fa fa-print"></i> Print</button>

    </div>
  </div>
</div>

  <div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" ">
                <div class="x_panel">
                  <div class="x_content" style="margin-left: 10%;">
                         <label class="text-danger font-20 m-b-40">Availed Leaves</label>
                    <br />
                   

          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left col-md-5 col-sm-5 col-xs-12">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">From</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">To</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>  

                       <div style="margin-left: 55%;">
                            <button class="btn btn-default" type="reset">Search</button>
                        </div>              
          </form>

                       
                                            


           
                        <div style="margin-right: 15%; ">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12">SLV</label>
                        <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>

                        <div class="">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12">VL</label>
                        <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                      </div>
                      </div>

                      <div style="margin-right: 15%;">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12">FML</label>
                        <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">SL</label>
                        <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                      </div>
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
