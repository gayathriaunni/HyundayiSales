<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="salesmanagementsystem";

$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);

session_start();
if(isset($_SESSION["scid"])){
    $scid=$_SESSION["scid"];
    $slno=$_SESSION["slno"];
    //echo $slno;
}
$sql2="SELECT `scid`, `scname`, `scusername`, `scemail` FROM `salescordinatorstb` WHERE `scid`='$scid'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
// Output data of each row
    while($row = $result2->fetch_assoc()) {
    
            $scname=$row["scname"];
            $scusername=$row["scusername"];
            $scemail=$row["scemail"];
     }
} else {
    echo "0 results";
    }

$sql = "SELECT * FROM `enquiry_tb` WHERE `cust_id`='$cust_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Output data of each row
    while($row = $result->fetch_assoc()) {
            $name=$row["name"];
            $email=$row["email"];
            $phone=$row["mobile"];
            $model = $row["model"];
            $state = $row["state"];
            $city = $row["city"];
     }
} else {
    echo "0 results";
    }

    $currentDate=date("Y-m-d");

$sql="INSERT INTO `assignmentstb`(`scid`, `scusername`, `scemail`, `slno`, `name`, `email`, `phone`, `city`, `location`, `message`, `dateofallotment`)VALUES ('$scid','$scusername','$scemail','$slno','$name','$email','$phone',' $city','$location',' $message','$currentDate')";

$rs = mysqli_query($conn,$sql);

$sql1="UPDATE `salescordinatorstb` SET `loadsno`=loadsno+1 WHERE `scid`='$scid'";
$rs1 = mysqli_query($conn,$sql1);

$sql2="DELETE FROM `enquiry_tb` WHERE `cust_id`='$cust_id'";
$rs2 = mysqli_query($conn,$sql2);

if($rs){
	echo "<script>alert('TASK ASSIGNED SUCCESSFULLY!');
document.location='viewenquiries.php'</script>";
	
}
else
echo "NOT INSERTED..";

session_abort();
?>