<?php include('Model.php'); 

    $q="SELECT * FROM meetingtb  WHERE comment_id = 1 ";
    $result = mysqli_query($con,$q);
    $row = mysqli_num_rows($result);

    echo $row;
?>