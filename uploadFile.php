<?php
if(isset($_POST['submit']))
{
$file=$_FILES["fileToUpload"]["name"];

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"docs/".$_FILES["fileToUpload"]["name"]);
}
?>

<html>
<form name="uploadfile" action="" method="post" enctype="multipart/form-data">
<div>
<label for="basicinput">Select the Document to Upload</label>
<input type="file" name="fileToUpload" id="fileToUpload">
<button type="submit" name="submit">Submit</button>
</div>
</form>
</html>
