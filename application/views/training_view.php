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
                    <h2>Training Attended</h2>
                    <div class="clearfix"></div>
                  </div>
                    <div class="clearfix"></div>
                    <div class="x_content" >
                      <p class="text-muted font-13 m-b-30">Training Details.</p>
                    <div>&nbsp;</div>

                         <div class="x_content">
                  <div class="col-md-5" style="padding: 0px; text-align: center; position: absolute;">

                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left row">

                     <div class="form-group col">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Title of Seminar/Workshop/Conference/Short Courses (Write in full)</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
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
                  <label class="control-label col-md-6 col-sm-6 col-xs-12">No. of hours: </label>
                   <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
                  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Conducted/Sponsored By:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
                    </div>
  </form>               
 

 
                    <div class="form-group" style="margin-left: 18%;top: 260px; ">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-default" type="reset">Clear</button>
                          <button type="submit" class="btn btn-default" value="submit">Add</button>
                        </div>
                      </div>  
                             

  </div>

<div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" ">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>List of Trainings</h4>
                  </div>
                  <div class="x_content" >

                    <br />
  <!--table start-->
                    <table id="datatable" class="table table-striped table-bordered"    >
                      <thead>
  
                    <tr id="trHead">
            <th >Title</th>
            <th >Inclusive Dates</th>
            <th >No. of Hours</th>
            <th >Conducted/Sponsored By:</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
            <!--<?php
        if($leave!=null){
                foreach($leave as $c){  
                    echo "<tr><td>".$c['title']."</td><td>".$c['id_from']."</td><td>".$c['id_to']."</td><td>".$c['no_of_hours']."</td><td>".$c['conducted_by']."</td><td>".$c['status'].'</td>

                    <td><a href="'.base_url('knoxville/updateSalesAgent/'.$c['userID']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit</a>| <a href="'.base_url('knoxville/delSalesAgent/'.$c['userID']).'"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a></td></tr>';
                    //echo base_url('knoxville/delClient/'.c['clientID'])
                }
        }
            ?>-->
        </tbody>
    </table>
              
     
    </div>
  </div>


</body>
