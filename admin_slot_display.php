<?php
include('config.php');
include('admin_header.php')
?>
<div class="card">
    <div class="card-header">
        <strong>Display Slot
</strong>
    </div>
  
   
        <div class="row p-2">
        <div class="col-sm-12">
            <div class="table-responsive">
            <table id="example" class="table">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Parking ID	</th>
                        <th>Vehicle Type	</th>
                       
                            <th>Place</th>
                          
                            <th>Landmark</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php
          
       
            $i = 1;
            $sql = mysqli_query($mysqli, "SELECT * FROM slot");
            
            while ($rs = mysqli_fetch_array($sql)) {
            ?>
                                    <tr>
                                        <td><?php echo $i; ?> </td>
                                        <td><?php echo $rs['pid']; ?>  </td>
                                        <td><?php echo $rs['vtype']; ?> </td>
                                        <td><?php echo $rs['place']; ?> </td>
                                        <td> <?php echo $rs['lmark']; ?></td>
                                        <td>
                                       
                                            <?php if(strcmp("P",$rs['st'])==0)
                                    { 
                                       
                                        ?>
                                        <b style="color:red;"><?php echo $rs['st']; ?></b>
                                        <?php
                                    }
                                    else
                                    {
                                    ?>
                                        <b style="color:green;"><?php echo $rs['st']; ?></b>
                                        <?php
                                    }
                                    ?>
                                    </td>
                                        
                                        
                                      
<td> 
    <a href="admin_slot_display.php?id=<?php echo $rs['id']; ?>"><i class="fa-solid fa-trash-can"></i></a>  
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
        
            
        </div>
        <?php
        if(isset($_GET["id"]))
{
  

    $id=$_GET["id"];

    

    $sql = "delete from slot where id=$id";

if ($mysqli->query($sql) === TRUE) {
    // echo("<script> alert('Slot Delete Successfully'); </script>");
    echo "<script> window.location.href='admin_slot_display.php' </script>";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    
}

?>
                        
       