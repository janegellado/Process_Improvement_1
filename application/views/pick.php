 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="row"></div>
            </div>

            <div class="clearfix"></div>
           
      
      <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>My Profile</h2>
      
                    <div class="clearfix"></div>
                  
                  <div class="x_content">
          <div>&nbsp;</div>
<!--start of eployee picker-->

                      <div class="form-group col" style="margin-left: 36%; margin-bottom: 50px;">
                        <div class="col-md-10 col-sm-10 col-xs-10" style=" width: 96.5%;">
                        <select class="form-control" name="dropdown" id="dropdown">
                        <option value="">Select Employee</option>
                        <?php foreach($employee as $employee): ?>
                            <option value="<?php echo $employee->employeeID; ?>"><?php echo $employee->employee_name; ?></option>
                        <?php endforeach; ?>
                       </select>
                        </div>
                      </div>


                    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>

                        <script type="text/javascript">
                            $(document).ready(function(){
                               $('#dropdown').on('change', function(e){
                                e.preventDefault();
                                var employeeID = $(this).val();
                                    if(employeeID == '')
                                    {
                                        alert('error');
                                    }
                                    else
                                    {
                                        $.ajax({
                                            url:"<?php echo base_url() ?>process_improvement/display",
                                            type: "POST",
                                            data: {'employeeID' : employeeID},
                                            dataType: 'json',
                                            success: function(data){
                                              $('#name').html(data[0]['employee_name']);
                                              $('#employeeID').html(data[0]['employeeID']);
                                              $('#pl').html(data[0]['pg_level']);
                                              $('#cs').html(data[0]['civil_stat']);
                                              $('#cp').html(data[0]['cp_no']);
                                              $('#prom').html(data[0]['promo_date']);
                                              $('#pos').html(data[0]['position']);
                                              $('#dh').html(data[0]['date_hired']);      
                                              $('#of').html(data[0]['office']);  
                                              $('#ea').html(data[0]['email']);  
                                              $('#birth').html(data[0]['birthday']); 
                                              },
                                            error: function(){
                                                alert(employeeID);
                                            }
                                        });
                                    }
                               }); 
                            });
                        </script>
<!--end of employee picker-->
                    <div>
                      <div class="" style="width: 32%; height: 398px; border: 3px solid gray; position: absolute; margin-left: 3%;"> </div>
 <table  class="table table-striped table-bordered" style="width: 60%; align: center; margin-left: 37%;">
                      <thead > 
           <tr id="trHead">
            <th style="width: 35%;" scope="row">NAME</th>
            <td name="name" id="name"> </td> 
          </tr>
        
          <tr id="trHead">
            <th scope="row">EMPLOYEE ID NO </th>
            <td name="employeeID" id="employeeID"> </td> 
          </tr>
          
          <tr id="trHead">
            <th >BIRTHDAY</th>
            <td name="birth" id="birth"> </td> 
        
          </tr>
          
          <tr id="trHead">
            <th >DATE HIRED</th>
            <td name="dh" id="dh"> </td> 
          </tr>
          
          <tr id="trHead">
            <th >POSITION</th>
            <td name="pos" id="pos"> </td>
          </tr>
          
          <tr id="trHead">
            <th >DATE OF LAST PROMOTION</th>
            <td name="prom" id="prom"> </td>
          </tr>
          
          <tr id="trHead">
            <th >CIVIL STATUS</th>
            <td name="cs" id="cs"> </td>
          </tr>
          
          <tr id="trHead">
            <th >PG LEVEL</th>
            <td name="pl" id="pl"> </td>
          </tr>
          
          <tr id="trHead">
            <th >OFFICE</th>
            <td name="of" id="of"> </td>
          </tr>
          
          <tr id="trHead">
            <th >CELLPHONE NUMBER</th>
            <td name="cp" id="cp"> </td>
          </tr>
          
          <tr id="trHead">
            <th >EMAIL ADDRESS</th>
            <td name="ea" id="ea"> </td>
          </tr>
          
        </thead>
      <tbody>
        
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
        <!-- /page content -->

        

</body>
</html>

