 <?php
include("config.php");
name=$_POST['name'];
id=$_POST['id'];
$sql = "insert into insertcandidate  (cid,cname)
VALUES ('name','id')";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?> 
