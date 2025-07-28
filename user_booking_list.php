<?php
session_start();
set_error_handler("var_dump");
include('config.php');
include('user_header.php');

?>

   <div class="card mb-12">
            <div class="card-header bg-success text-center"><strong>Slot Booking Status</strong></div>
            <div class="container">
        <div class="row mb-3 mt-3">
        <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Vehicle Reg.No</th>
                            <th>Vehicle Name	</th>
                            <th>Vehicle Type	</th>
                            <th>Owner Name	</th>
                           
                            <th>Contact No	</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Parking ID</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
        <?php
           $uid=$_SESSION["uid"];
       
            $i = 1;
            $sql = mysqli_query($mysqli, "SELECT * FROM vregister where uid='$uid' and tm1='-'");
            
            while ($rs = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                                <td><?php echo $i ; ?></td>
                                
                                <td><?php echo $rs['rno']; ?></td>
                                <td><?php echo $rs['vname']; ?></td>
                                <td><?php echo $rs['vtype']; ?></td>
                                <td><?php echo $rs['oname']; ?></td>
                                <td><?php echo $rs['cno']; ?></td>
                                <td><?php echo $rs['dt']; ?></td>
                                <td><?php echo $rs['tm']; ?></td>
                                <td><?php echo $rs['pid']; ?></td>
                               
                                <td>
                                    
                                        <div class="badge bg-warning">
                                            <a  style="text-decoration: none;" href="user_booking_list.php?id=<?php echo $rs['id']; ?>&pid=<?php echo $rs['pid']; ?>">Check out</a>
                                        </div>
                                       
                                    </td>
                                    
                            </tr>
                            <?php
                            $i++;
            }
            ?>
                        </tbody>
                    </table>
                    </div>

                </div>
               
                  </div>

            <?php
include('footer.php');

if(isset($_GET["pid"]))
{
 
    $id=$_GET["id"];
    $pid=$_GET["pid"];
    
    $tm1=date('H:i');
   $sql = "update vregister set tm1='$tm1' where id=$id";

if ($mysqli->query($sql) === TRUE) {
   
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    $sql = "update slot set st='N' where pid='$pid'";

        if ($mysqli->query($sql) === TRUE) {
            
            } else
                echo "Error: " . $sql . "<br>" . $mysqli->error;
                echo "<script> alert('Checkout Successfully'); </script>";
    
}

   

?>