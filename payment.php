<?php
session_start();
include('user_header.php');
include('config.php');

?>
   
    <form action="" method="post">
        <div class="card mb-12">
            <div class="card-header"><strong>Payment Process</strong></div>
            <div class="row p-3">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            Card Holder Name
                        </div>
                        <div class="col-sm-12 mb-2">
                            <input type="text" class="form-control">
                            Card Number
                        </div>
                        <div class="col-sm-12 mb-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 mb-2">
                            Expiry Month & Year

                        </div>
                        <div class="col-sm-6 mb-2">
                            <select name="" id="" class="form-select">
                                <option>JAN</option>
                                <option>FEB</option>
                                <option>MAR</option>
                                <option>APR</option>
                                <option>MAY</option>
                                <option>JUN</option>
                                <option>JUL</option>
                                <option>AUG</option>
                                <option>SEP</option>
                                <option>OCT</option>
                                <option>NOV</option>
                                <option>DEC</option>

                            </select>
                        </div>
                        <div class="col-sm-6 mb-2">
                        <select name="" id="" class="form-select">
                            <?php
                            for($i=date('Y')+1;$i<=2030;$i++)
                            {
                                ?>  <option><?php echo $i; ?></option>
                         <?php    
                        }
                            ?>
                        </select>
                        </div>
                        <div class="col-sm-12 mb-2">
                        Pin Number
                        </div>
                       
                        <div class="col-sm-12 mb-2">
<input type="password" class="form-control">
</div>
<div class="col-sm-12 mb-2 text-center">
<input type="submit" value="Pay" name="pay" class="btn btn-success">
</div>

                    </div></div>
                <div class="col-sm-6">
                <img src="img/5.jpg" class="img-fluid" alt="">
                </div>
            </div>
    </form>



<?php
include('footer.php');
include('config.php');

if (isset($_POST["pay"])) {


    $sql = $_SESSION["sql"];
    $sql1 = $_SESSION["sql1"];
    
    if ($mysqli->query($sql) === TRUE) {
        $mysqli->query($sql1);
        echo ("<script> alert('Payment Paid Successfully'); </script>");
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>