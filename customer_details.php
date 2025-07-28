<?php
include('config.php');
include('admin_header.php')
?>
<div class="card">
    <div class="card-header">
        <strong>Customer Details
</strong>
    </div>
  
   
        <div class="row p-2">
        <div class="col-sm-12">
            <div class="table-responsive">
            <table id="example" class="table">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Customer Name	</th>
                        <th>Place		</th>
                       
                            <th>Street	</th>
                          
                            <th>Pincode</th>
                            <th>Contact No	</th>
                            <th>E-Mail</th>
                         
                        </tr>
                        </thead>
                        <tbody>
                        <?php
          
       
            $i = 1;
            $sql = mysqli_query($mysqli, "SELECT * FROM customer");
            
            while ($rs = mysqli_fetch_array($sql)) {
            ?>
                                    <tr>
                                        <td><?php echo $i; ?> </td>
                                        <td><?php echo $rs['cname']; ?>  </td>
                                        <td><?php echo $rs['place']; ?> </td>
                                        <td><?php echo $rs['street']; ?> </td>
                                        <td> <?php echo $rs['pcode']; ?></td>
                                        <td> <?php echo $rs['cno']; ?></td>
                                        <td> <?php echo $rs['email']; ?></td>
                                        <td> 
    <a href="customer_details.php?id=<?php echo $rs['id']; ?>"><i class="fa-solid fa-trash-can"></i></a>  
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

    

    $sql = "delete from customer where id=$id";

if ($mysqli->query($sql) === TRUE) {
    echo("<script> alert('Slot Delete Successfully'); </script>");
    echo "<script> window.location.href='admin_slot_display.php' </script>";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    
}

?>
                        
       