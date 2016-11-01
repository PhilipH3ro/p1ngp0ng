
<?php
$con=mysqli_connect("31.220.21.83","philiphe_ping","Slack123","philiphe_pingpong");
$check="SELECT * FROM user WHERE CardID = '$_POST[Card]'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
//    var_dump($data);
    echo "$data[1]";
}

else
{   
    $newUser="INSERT INTO user(Name,CardID) values('$_POST[Name]','$_POST[Card]')";
    if (mysqli_query($con,$newUser))
    {
        echo "registered<br/>";
    }
    else
    {
        echo "Error<br/>";
    }
}
?>
