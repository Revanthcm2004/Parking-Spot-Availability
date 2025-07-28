<?php
include('admin_header.php')
?>
<form action="" method="post">
<div class="card">
    <div class="card-header  bg-primary pb-0 text-white">
        <nav style="--bs-breadcrumb-divider: '>';">
  <ol class="breadcrumb text-white">
    <li class="breadcrumb-item  text-white"><a href="#">Slot</a></li>
    <li class="breadcrumb-item active  text-white" aria-current="page">New Slot</li>
  </ol>
</nav>  
    </div>
  
   
        <div class="row p-2">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4 mb-2">
                        No of Slot
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="text" name="pid" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                        Vehicle Category
                        </div>
                        <div class="col-sm-8 mb-2">
                           <select name="vtype" id="" class="form-select">
                            <option>Car</option>
                           </select>
                        </div>
                        <div class="col-sm-4 mb-2">
                        Parking Place
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="text" name="place" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                        Landmark
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="text" name="lmark" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                            
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="submit" name="save" value="Save" class="btn btn-success">
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="img/3.jpeg" class="img-fluid">
                </div>
                
            </div>
           
        </div>
      
        
        </div>
        
            
        </div>
    </form>
    <?php
include('footer.php');
include('config.php');
if(isset($_POST["save"]))
{  
   
    $pid=$_POST["pid"];
    $vtype=$_POST["vtype"];
    $place=$_POST["place"];
    $lmark=$_POST["lmark"];
    $st='N';  
    $sql=mysqli_query($mysqli,"select * from slot");
    $id=1;
    while ($rs = mysqli_fetch_array($sql)) {
        $id=(int)$rs['Id']+1;
    }
    $pid=$pid+$id;
    echo "ID----".$pid;
    for($i=$id;$i<=$pid;$i++)
    {

    $pid1="P-".$i;
    $sql = "INSERT INTO slot  (pid,vtype,place,lmark,st) VALUES ('$pid1','$vtype','$place','$lmark','$st')";

    if ($mysqli->query($sql) === TRUE) {
        
    
        } else
            echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    echo("<script> alert('Slot Added Successfully'); </script>");
}

?>
