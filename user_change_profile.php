<?php
session_start();

include('config.php');
include('user_header.php')
?>
<form action="" method="post" enctype="multipart/form-data">
<div class="card mb-12">
            <div class="card-header bg-success text-center"><strong>Change Profile</strong></div>
            
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-7">
<img src="img/43.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-5">
            
            <div class="row">
            <?php
             $uid=$_SESSION["uid"];
             $sql = mysqli_query($mysqli, "SELECT * FROM customer where id='$uid'");
             if ($rs = mysqli_fetch_array($sql)) {
               ?>
                <div class="col-sm-4 pb-2">
                    Name
                </div>
                <div class="col-sm-8 pb-2">
                    <input value="<?php echo $rs['cname']; ?>" onkeypress="return letters(event)" type="text" class="form-control" name="name" required>
                </div>
                
                <div class="col-sm-4 pb-2">
                    Place
                </div>
                <div class="col-sm-8 pb-2">
                    <input value="<?php echo $rs['place']; ?>" onkeypress="return letters(event)" type="text" class="form-control" name="place" required>
                </div>
                <div class="col-sm-4 pb-2">
                    Street
                </div>
                <div class="col-sm-8 pb-2">
                    <input value="<?php echo $rs['street']; ?>" type="text" class="form-control" name="street" required>
                </div>
                <div class="col-sm-4 pb-2">
                    Pincode
                </div>
                <div class="col-sm-8 pb-2">
                    <input value="<?php echo $rs['pcode']; ?>" onkeypress="return pincode(event)" type="text" class="form-control" name="pcode" required>
                </div>
                <div class="col-sm-4 pb-2">
                    Contact No
                </div>
                <div class="col-sm-8 pb-2">
                    <input value="<?php echo $rs['cno']; ?>" onkeypress="return contact(event)" type="text" class="form-control" name="cno" required>
                </div>
                <div class="col-sm-4 pb-2">
                    E-Mail ID
                </div>
                <div class="col-sm-8 pb-2">
                    <input value="<?php echo $rs['email']; ?>" type="email" class="form-control" name="email" required>
                </div>
               
                
                <div class="col-sm-4 pb-2">
                    User Name
                </div>
                <div class="col-sm-8 pb-2">
                    <input value="<?php echo $rs['uname']; ?>" type="text" class="form-control" name="uname" required>
                </div>
                <div class="col-sm-4 pb-2">
                    Password
                </div>
                <div class="col-sm-8 pb-2">
                    <input value="<?php echo $rs['pass']; ?>" type="password" class="form-control" name="pass" required>
                </div>
                <div class="col-sm-4 pb-2">
                    
                </div>
                <div class="col-sm-8 pb-2">
                    <input type="submit" value="Change" class="btn btn-success shadow-none" name="save">
                </div>
                
<?php } ?>
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
    $uid=$_SESSION["uid"];
   
    $name=$_POST["name"];
   

    $place=$_POST["place"];
    $street=$_POST["street"];
    $pcode=$_POST["pcode"];
    $cno=$_POST["cno"];
    $email=$_POST["email"];
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
   
    

    $sql = "update customer set  cname='$name',place='$place',street='$street',pcode='$pcode',cno='$cno',email='$email',uname='$uname',pass='$pass' where id='$uid'";

    if ($mysqli->query($sql) === TRUE) {
        echo("<script> alert('Register Successfully'); </script>");
    
        } else
            echo "Error: " . $sql . "<br>" . $mysqli->error;
   
    
}
?>