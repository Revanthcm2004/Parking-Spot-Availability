<?php
include('home_header.php')
?>
<form action="" method="post" enctype="multipart/form-data">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-7">
        <img src="img/5.jpeg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-5">
            <div class="text-center mt-2 pb-2">
                <h3>Customer Registration</h3>
            </div>
            <div class="row">
                <div class="col-sm-4 pb-2">
                    Name
                </div>
                <div class="col-sm-8 pb-2">
                    <input onkeypress="return letters(event)" type="text" class="form-control" name="name" required>
                </div>
                
                <div class="col-sm-4 pb-2">
                    Place
                </div>
                <div class="col-sm-8 pb-2">
                    <input onkeypress="return letters(event)" type="text" class="form-control" name="place" required>
                </div>
                <div class="col-sm-4 pb-2">
                    Street
                </div>
                <div class="col-sm-8 pb-2">
                    <input type="text" class="form-control" name="street" required>
                </div>
                <div class="col-sm-4 pb-2">
                    Pincode
                </div>
                <div class="col-sm-8 pb-2">
                    <input onkeypress="return pincode(event)" type="text" class="form-control" name="pcode" required>
                </div>
                <div class="col-sm-4 pb-2">
                    Contact No
                </div>
                <div class="col-sm-8 pb-2">
                    <input onkeypress="return contact(event)" type="text" class="form-control" name="cno" required>
                </div>
                <div class="col-sm-4 pb-2">
                    E-Mail ID
                </div>
                <div class="col-sm-8 pb-2">
                    <input type="email" class="form-control" name="email" required>
                </div>
               
                
                <div class="col-sm-4 pb-2">
                    User Name
                </div>
                <div class="col-sm-8 pb-2">
                    <input type="text" class="form-control" name="uname" required>
                </div>
                <div class="col-sm-4 pb-2">
                    Password
                </div>
                <div class="col-sm-8 pb-2">
                    <input type="password" class="form-control" name="pass" required>
                </div>
                <div class="col-sm-4 pb-2">
                    
                </div>
                <div class="col-sm-8 pb-2">
                    <input type="submit" value="Register" class="btn btn-success shadow-none" name="save">
                </div>
                

            </div>
        </div>

    </div>
</div>
</form>

<?php
include('home_footer.php');
include('config.php');
if(isset($_POST["save"]))
{
    
   
    $name=$_POST["name"];
   

    $place=$_POST["place"];
    $street=$_POST["street"];
    $pcode=$_POST["pcode"];
    $cno=$_POST["cno"];
    $email=$_POST["email"];
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
   
    $sql1 = mysqli_query($mysqli,"select * from customer where uname='$uname' or email='$email' or cno='$cno'");
    // echo $sql1;
    if ($rs = mysqli_fetch_array($sql1)) {
        echo("<script> $.MessageBox({ customClass: 'custom_messagebox', customOverlayClass: 'custom_messagebox_overlay', message: 'Account Already Found', title: 'Parking' }); </script>");
    }
    else{

    $sql = "INSERT INTO customer  (cname,place,street,pcode,cno,email,uname,pass) VALUES ('$name','$place','$street','$pcode','$cno','$email','$uname','$pass')";

    if ($mysqli->query($sql) === TRUE) {
        echo("<script> alert*'Register Successfully'); </script>");
    
        } else
            echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
}
?>