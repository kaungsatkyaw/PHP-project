<?php
include 'connection.php';
error_reporting(1);

if(isset($_POST['submit1'])){
		$filename=$_FILES["file"]['name'];
		$name1=$_POST['name1'];
		$des=$_POST['description'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$qty=$_POST['qty'];
		$run="INSERT INTO phone(p_img,p_name,p_txt,p_price,category,qty)VALUES('$filename','$name1','$des','$price','$category','$qty')";
		$ok=mysqli_query($conn,$run);

		if($ok)			
			   {mkdir("image/$i");
					move_uploaded_file($_FILES['file']['tmp_name'],"image/$i".$_FILES['file']['name']);	
		  // move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
				
			    $err="<font size='+2'>item inserted successfully</font>";
			
				}
			else
			 {
			   echo "item is not inserted";
			   }
				echo '<script>alert("Item added successfully!")</script>';
				echo '<script>window.location="add_new.php"</script>';
	}
	


?>




