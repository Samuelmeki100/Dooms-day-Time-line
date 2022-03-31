<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dooms Time Line</title>
    <script src="https://kit.fontawesome.com/cdd144dc35.js" crossorigin="anonymous"></script>
    <script href="popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<div id="container">
    <ul id="Time_line" class="list-group">
<?php
    $connection =mysqli_connect("localhost","root","","dooms_day");
    $query = "select * from claims";
    $resurt = mysqli_query($connection,$query);
    while($row =mysqli_fetch_assoc($resurt)){
        echo '<li class="list-group-item" click="fetchData('.$row['year'].')" data-toggle="popover" title="Year '.$row['year'].'" data-trigger="hover" data-content="'.$row['Claim_name'].'" >'.$row['year'].'</li>';
    }
?>

    </ul>
</div>
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>
