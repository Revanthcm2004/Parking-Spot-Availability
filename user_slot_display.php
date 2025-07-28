<?php
session_start();

include('config.php');
include('user_header.php')

?>
<form action="" method="post">
<div class="card">
    <div class="card-header  bg-warning pb-0 text-white text-center">
        <nav style="--bs-breadcrumb-divider: '>';" class="">
  <ol class="breadcrumb text-white">
    
    <li class="breadcrumb-item active  text-white" aria-current="page">Slot Booking</li>
  </ol>
</nav>  
    </div>
  
   
        <div class="row p-2">
        <div class="col-sm-12">
           
                    <div class="row">
                        <div class="col-sm-1 mb-2">
                        Place
                        </div>
                        <div class="col-sm-3 mb-2">
                        <select name="place" id="" class="form-select">
                        <?php
             
             $sql = mysqli_query($mysqli, "SELECT * FROM slot group by place");
             while ($rs1 = mysqli_fetch_array($sql)) {
               ?>
                            <option><?php echo $rs1['place']; ?></option>
                            <?php } ?>
                           </select>
                        </div>
                        <div class="col-sm-1 mb-2">
                        Land Mark
                        </div>
                        <div class="col-sm-3 mb-2">
                           <select name="lmark" id="" class="form-select">
                           <?php
             
             $sql = mysqli_query($mysqli, "SELECT lmark FROM slot group by lmark");
             while ($rs1 = mysqli_fetch_array($sql)) {
               ?>
                            <option><?php echo $rs1['lmark']; ?></option>
                            <?php } ?>
                           </select>
                        </div>
                        
                        <div class="col-sm-2 mb-2">
                            <input type="submit" name="search" value="Search" class="btn btn-success">
                        </div>
                        
                    </div>
                </div>
                <?php
             if(isset($_POST["search"]))
             {
                $place=$_POST["place"];
                $lmark=$_POST["lmark"];
                
             $sql = mysqli_query($mysqli, "SELECT * FROM slot where place='$place' and  lmark='$lmark' and  st='N'");
             while ($rs1 = mysqli_fetch_array($sql)) {
               ?>
               <div class="col-sm-1 mb-4">
                <a href="customer_booking.php?id=<?php echo $rs1['id']; ?>&pid=<?php echo $rs1['pid']; ?>">
                <img src="img/green.png" width="50px" alt="">
                </a>
               </div>
                <?php
             }
            }
             ?>
            </div>
           
        </div>
    </form>
    <?php
include('footer.php');