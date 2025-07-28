<?php
session_start();
include('user_header.php')
?>
<form action="" method="post">
<div class="card">
    <div class="card-header  bg-primary pb-0 text-white">
        <nav style="--bs-breadcrumb-divider: '>';">
  <ol class="breadcrumb text-white">
    <li class="breadcrumb-item  text-white"><a href="#">Bus</a></li>
    <li class="breadcrumb-item active  text-white" aria-current="page">New Slot</li>
  </ol>
</nav>  
    </div>
  <?php
    if(isset($_GET["id"]))
{
    $_SESSION["pid"]=$_GET["pid"];
    $_SESSION["id"]=$_GET["id"];
}
    ?>

        <div class="row p-2">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4 mb-2">
                        Vehicle Register Number
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="text" name="rno" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                        Vehicle Type
                        </div>
                        <div class="col-sm-8 mb-2">
                           <select name="vtype" id="" class="form-select">
                            <option>Car</option>
                           </select>
                        </div>
                        <div class="col-sm-4 mb-2">
                        Vehicle Name
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="text" name="vname" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                        Owner Name
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="text" name="oname" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                        Contact Number
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="text" name="cno" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                       Date
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="date" name="dt" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                        Time
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="time" name="tm" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                            
                        </div>
                        <div class="col-sm-8 mb-2">
                            <input type="submit" name="save" value="Save" class="btn btn-success">
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="img/12.jpg" class="img-fluid">
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
    $rno=$_POST["rno"]; 
    $vname=$_POST["vname"];
    $vtype=$_POST["vtype"];
    $oname=$_POST["oname"];
    $cno=$_POST["cno"];
    $dt=$_POST["dt"];
    $tm=$_POST["tm"];
    $dt=$_POST["dt"];
    $pid=$_SESSION["pid"];
    $id=$_SESSION["id"];
    $uid=$_SESSION["uid"];
    $email=$_SESSION["email"];

    $sql = "INSERT INTO vregister  (rno,vname,vtype,oname,cno,dt,tm,pid,uid,email,tm1) VALUES ('$rno','$vname','$vtype','$oname','$cno','$dt','$tm','$pid','$uid','$email','-')";
    $_SESSION["sql"]=$sql;
    $sql1 = "update slot set  st='P' where id=$id";
    $_SESSION["sql1"]=$sql1;
    echo "<script> window.location.href='payment.php' </script>";
    // if ($mysqli->query($sql) === TRUE) {
    //     echo("<script> alert('Slot Booking Successfully'); </script>");
    
    //     } else
    //         echo "Error: " . $sql . "<br>" . $mysqli->error;
    
    
    

    // if ($mysqli->query($sql) === TRUE) {
        
    
    //     } else
    //         echo "Error: " . $sql . "<br>" . $mysqli->error;
    
}
    

?>
