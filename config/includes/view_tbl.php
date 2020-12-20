<?php
$query = "SHOW TABLES;";
$result = mysqli_query($con, $query);
$static_tables = array();

while($row = mysqli_fetch_array($result)){
    array_push($static_tables, $row[0]);
}
?>
<div id="page-content-wrapper">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <section class="content-header">
            <h1>
                Static <small>tables</small>
            </h1>
        </section>
    </div>
</div>
<hr class="style-four">

<div class="spacer"></div>

<div class="row">
    <div class="col-xs-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Table</th>
                    <th>Records</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="searchable">
                <tr>
                    <td>1</td>
                    <td>Users</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `users`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("users", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_users_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_users_tbl=true">Create</a>';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Groups</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as gr FROM `groups`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['gr'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("groups", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_group_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_group_tbl=true">Create</a>';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Modules</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `modules`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("modules", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_modules_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_modules_tbl=true">Create</a>';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Menus</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `menus`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("menus", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_menus_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_menus_tbl=true">Create</a>';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Temperature</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `temperature`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("temperature", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=true">Create</a>';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Switches</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `pin_status`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("pin_status", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_pin_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_pin_tbl=true">Create</a>';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Arduino</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as ar FROM `arduino`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['ar'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("arduino", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_ard_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_ard_tbl=true">Create</a>';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Log</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as log FROM `logs`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['log'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("logs", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_log_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_log_tbl=true">Create</a>';
                            }
                        ?>
                    </td>
                </tr>
                 <tr>
                     <td>9</td>
                    <td> Humidity</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `humidity`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("humidity", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_humidity_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_humidity_tbl=true">Create</a>';
                            }
                        ?>
                    </td> 
                 </tr>
                 
                 <tr>
                    <td>10</td>
                    <td>Temperature2</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `temperature2`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("temperature2", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=true">Create</a>';
                            }
                        ?>
                    </td>                   
                   </tr>
                   
                   <tr>
                    <td>11</td>
                    <td>Humidity2</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `humidity2`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("humidity2", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=true">Create</a>';
                            }
                        ?>
                    </td> 
                  </tr>
                  
                  <tr>
                    <td>12</td>
                    <td>Temperature3</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `temperature3`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("temperature3", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=true">Create</a>';
                            }
                        ?>
                    </td> 
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Humidity3</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `humidity3`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("humidity3", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=true">Create</a>';
                            }
                        ?>
                    </td> 
                  </tr>
                  
                  <tr>
                    <td>14</td>
                    <td>Temperature4</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `temperature4`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("temperature4", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=true">Create</a>';
                            }
                        ?>
                    </td> 
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Humidity4</td>
                    <td>
                        <?php
                            $rec_num = 0;
                            $query = "SELECT COUNT(*) as co FROM `humidity4`;";
                            $result = mysqli_query($con, $query);
                            $rec_num = mysqli_fetch_assoc($result);
                            $rec_num = $rec_num['co'];
                        ?>
                        <span class="label label-success"><?php echo $rec_num; ?></span>
                    </td>
                    <td>
                        <?php
                            if(in_array("humidity4", $static_tables)){
                                echo '<a class="btn btn-danger btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=false">Delete</a>';
                            }
                            else{
                                echo '<a class="btn btn-primary btn-xs" role="button" href="includes/cr_tables.php?create_temp_tbl=true">Create</a>';
                            }
                        ?>
                    </td> 
                  </tr>
                                                   
            </tbody>
        </table>
    </div>
</div>
