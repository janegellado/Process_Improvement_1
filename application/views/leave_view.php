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
                 
            <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Request Leave</a>
                    <div class="clearfix"></div>
                  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Leave Details.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
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
            <?php
        if($leave!=null){
                foreach($leave as $c){  
                    echo "<tr><td>".$c['date_filled']."</td><td>".$c['type']."</td><td>".$c['no_of_days']."</td><td>".$c['inc_dates']."</td><td>".$c['approver']."</td><td>".$c['status'].'</td>

                    <td><a href="'.base_url('knoxville/updateSalesAgent/'.$c['userID']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit</a>| <a href="'.base_url('knoxville/delSalesAgent/'.$c['userID']).'"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a></td></tr>';
                    //echo base_url('knoxville/delClient/'.c['clientID'])
                }
        }
            ?>
        </tbody>
    </table>
    </div>
  </div>

