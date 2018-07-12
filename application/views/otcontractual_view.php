<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                      <h4>Overtime</h4>

        <div class="col-md-12" style="top: 10px;padding: 10px; text-align: left; ">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-inline">

                     <div class="form-group" style=" width: 50%;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Filed</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
                      <div><br /></div>
                       <div class="form-group">
                        <label class="">Authorized OT Time</label>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">From: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">To: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group" style="margin-left: 20px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">OT Rate</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control"style="width: 35%;" placeholder="Default Input">
                        </div>
                      </div>

                       <div><br /></div>
                       <div class="form-group">
                        <label class="">Actual OT Time</label>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Start</label>
                        <div class="">
                          <input type="text" class="form-control" style="width: 50%;" placeholder="00:00">
                        </div>
                      </div>

                      <div class="form-group" style="width: 25%;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Finish</label>
                        <div>
                          <input type="text" class="form-control"  style="width: 35%;" placeholder="00">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hour</label>
                        <div class="">
                          <input type="text" class="form-control"  style="width: 35%;" placeholder="00">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Minute</label>
                        <div class="">
                          <input type="text" class="form-control"  style="width: 35%;" placeholder="00">
                        </div>
                      </div>

                        <div><br /></div>
                      <div class="form-group"  >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tasked to be Accomplished</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Input Tasks">
                        </div>
                      </div>
 </form>
  </div>
 </div>
                  <div class="form-group pull-right" style="margin-right: 5%;">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
                          <button class="btn btn-success" type="reset">Add</button>
                          <button type="submit" class="btn btn-success" value="submit">Clear</button>
                        </div>
</div>

</div><!--end of first panel-->



            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>Overtime List</h4>
                    <div class="clearfix"></div>
                  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                <div class="x_content">
                   
                   <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                          <tr id="trHead">
                            <th rowspan="3">Date of Filing</th>          
                            <th rowspan="3">Authorized OT Time</th>
                            <th colspan="2">Actual OT Time</th>
                            <th colspan="4">OT Rate</th>
                            <th rowspan="3">Tasks to be Accomplished /<br>Actual Accomplishments<br>(Please attach additional sheet of necessary)</th>
                          </tr>

                          <tr id="trHead">
                            <th rowspan="2">Start</th>          
                            <th rowspan="2">Finish</th>
                            <th colspan="2">1.25</th>
                            <th colspan="2">1.50</th>
                          </tr>

                           <tr id="trHead">
                            <th >Hour</th>          
                            <th >Minute</th>
                            <th >Hour</th>          
                            <th >Minute</th>
                          </tr>


                      </thead>


                       <tbody>
          
                         <tr>
                          <td>11/15/2018</td>
                          <td>15-037-044</td>
                          <td>Franchesca Marie Cortez</td>
                          <td>Vacation Leave</td>
                          <td>7</td>
                          <td>00</td>
                          <td>00</td>
                          <td>00</td>
                          <td>Sample Tasks</td>
                        </tr>
                      </tbody>
                     </table>


     <div class="col-md-6" style="padding: 10px; text-align: center;">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12">AUTHORIZED BY: </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                      </div>
                  </div>

                     </form>
  </div>

              <div style="float: right; margin-top: 10px;">
                <button type="submit" class="btn btn-success" value="submit">Submit</button>
                <button type="submit" class="btn btn-success" value="submit">Clear</button>
              </div>
 </div>

 <!--start of overtime history-->
</div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>Overtime History</h4>
                    <div class="clearfix"></div>
                  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" style="width: 60%; margin-left: 200px;">
                <thead>
  
                    <tr id="trHead">
                      <th >Date of Filing</th>
                      <th >Status</th>
                      <th >Remarks</th>
                      <th >Action</th>
                     </tr>
               </thead>

        <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View</a><a href="" class="btn btn-success btn-xs"><i class="fa fa-print"></i> Print</a></td>
        </tr>
        </tbody>
    </table>
                    
     
</div>
</div>





 