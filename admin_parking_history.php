<?php
include('config.php');
include('admin_header.php')
?>
<div class="card">
    <div class="card-header">
        <strong>Parking History
</strong>
    </div>
  
   
        <div class="row p-2">
        <div class="col-sm-12">
            <div class="table-responsive">
            <table id="example" class="table">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Vehicle Reg.No		</th>
                        <th>Vehicle Name		</th>
                       
                            <th>Vehicle Type	</th>
                          
                            <th>Owner Name	</th>
                            <th>Contact No	</th>
                            <th>E-Mail</th>
                            <th>Date</th>
                            <th>Time IN</th>
                            <th>Time OUT</th>
                            
                            <th>Parking ID</th>
                           
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php
          
       
            $i = 1;
            $sql = mysqli_query($mysqli, "SELECT * FROM vregister");
            
            while ($rs = mysqli_fetch_array($sql)) {
            ?>
                                    <tr>
                                        <td><?php echo $i; ?> </td>
                                        <td><?php echo $rs['rno']; ?>  </td>
                                        <td><?php echo $rs['vname']; ?> </td>
                                        <td><?php echo $rs['vtype']; ?> </td>
                                        <td> <?php echo $rs['oname']; ?></td>
                                        <td> <?php echo $rs['cno']; ?></td>
                                        <td> <?php echo $rs['email']; ?></td>
                                        <td> <?php echo $rs['dt']; ?></td>
                                        <td> <?php echo $rs['tm']; ?></td>
                                        <td> <?php echo $rs['tm1']; ?></td>
                                        <td> <?php echo $rs['pid']; ?></td>
                                   
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
        
            
        </div>
        <?php
        if(isset($_GET["id"]))
{
  

    $id=$_GET["id"];

    

    $sql = "delete from slot where id=$id";

if ($mysqli->query($sql) === TRUE) {
    echo("<script> alert('Slot Delete Successfully'); </script>");
    echo "<script> window.location.href='admin_slot_display.php' </script>";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    
}

?>
                        
       