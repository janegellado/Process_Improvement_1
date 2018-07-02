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
                    <div class="clearfix"></div>
                  </div>
                    <div class="clearfix"></div>
                    <div class="x_content" >
                      <p class="text-muted font-13 m-b-30">Leave Details.</p>
                    <div>&nbsp;</div>

                         <div class="x_content">
                  <div class="col-md-5" style="padding: 0px; text-align: center; position: absolute;">

                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left row">

                     <div class="form-group col">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Filing</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group col">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Leave</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div>&nbsp;</div>
                      <label style="margin-left: -74%;">INCLUSIVE DATES</label>
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

                      <div class="form-group" style="margin-top: 20px;">
                  <label class="control-label col-md-6 col-sm-6 col-xs-12">No. of working days applied for: </label>
                
                  <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                      </div>

                       <div>&nbsp;</div>
                          <div>&nbsp;</div>
                       <div style="margin-top: -10px;">
                       <label style="margin-left:-55%;margin-bottom: 3%;">DETAILS OF ACTION APPLICATION</label>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Recommendation</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
                    </div>
  </form>               
  </div>

 <!--right side-->  
        <div class="col-md-6" style=" text-align: center; margin-left: 420px; ">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                     <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12">Where will leave be spent?</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12">Remarks</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                  <div style="height: 240px;"></div> 
                      <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12">ADM, DC/SUPERVISOR</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>



                     <!--     -->          
  </form>
  </div>
                    <div class="form-group" style="margin-left: 18%;top: 260px; ">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-default" type="reset">Clear</button>
                          <button type="submit" class="btn btn-default" value="submit">Submit</button>
                        </div>
                      </div>  
                             

  </div>

<div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" ">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>List of Employee</h4>
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
