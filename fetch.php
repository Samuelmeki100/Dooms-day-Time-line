<?php
$year=$_GET['year'];
if(isset($year)){

    $connection =mysqli_connect("localhost","root","","dooms_day");
    $query = "select * from claims where year='$year'";
    $resurt = mysqli_query($connection,$query);
    while($row =mysqli_fetch_assoc($resurt)){
        echo $row['Claim_name'];
    }
}else{
    echo "Error No input!";
}

