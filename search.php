

<?php
         $link=mysqli_connect("localhost", "root", "","images");

//display all the image present in the database

        $msg="";
        $sql="select * from img";
	$query=mysqli_query($link,$sql);
        if($query)
        {
            $res=mysqli_query($link,$sql);
            while($row=mysqli_fetch_array($res))
            {
                    $id=$row['id'];
                    $name=$row['name'];
                    $image=$row['image'];

                  $msg.= '<a href="search.php?id='.$id.'"><img src="data:image/jpg;base64,'.base64_encode($row['image']). ' " />   </a>';

            }
        }
        else
            $msg.="Query failed";
?>
<div>
<?php
echo $msg;
?>

