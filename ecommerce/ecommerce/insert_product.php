<!DOCTYPE html>
<?php
include ("db.php");
?>

<html>
<head>
	<title>Inserting Product</title>


	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="purple">


<form action="insert_product.php" method="post" enctype="multipart/form-data">
	
	<table align="center" width="750" border="1" bgcolor="red">
		<tr align="center">
			<td colspan="8"><h2>Insert New Post Here</h2></td>
		</tr>

		<tr >
			<td align="right"><b>Product Title:</b></td>
			<td><input type="text" name="product_title" required="please fill out" /></td>
		</tr>

		<tr >
			<td align="right"><b>Product Category:</b></td>
			<td>
				<select name="product_cat">
					<option>Select a Category</option>
					<?php
					global $con; 
	
	$get_cats = "select * from categories";
	
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
		$cat_title = $row_cats['cat_title'];
	
	echo "<option value='$cat_id'>$cat_title</option>";
	
	
	}

					?>

				</select>
			</td>
		</tr>

		<tr >
			<td align="right"><b>Product Brand:</b></td>
			<td>
				<select name="product_brand " required="please select">
					<option>Select a Brand</option>
					<?php
					$get_brands = "select * from brands";
	
	$run_brands = mysqli_query($con, $get_brands);
	
	while ($row_brands=mysqli_fetch_array($run_brands)){
	
		$brand_id = $row_brands['brand_id']; 
		$brand_title = $row_brands['brand_title'];
	
	echo "<option value='brand_id'>$brand_title</option>";
	
	
	}
					?>
				</select>
			</td>
		</tr>

		<tr >
			<td align="right"><b>Product Image:</b></td>
			<td><input type="file" name="product_image" required="please choose Image" /></td>
		</tr>

		<tr >
			<td align="right"><b>Product Price:</b></td>
			<td><input type="text" name="product_price"/></td>
		</tr>

		<tr >
			<td align="right"><b>Product Description:</b></td>
			<td><textarea name="product_desc" cols="20" rows="10" rows="20"></textarea></td>
		</tr>

		<tr >
			<td align="right"><b>Product Keywords:</b></td>
			<td><input type="text" name="product_keywords"/></td>
		</tr>

		<tr align="center">
			
			<td colspan="8"><input type="submit" name="insert_post" value="Insert Now"/></td>
		</tr>

		<tr align="center">
			
			<td colspan="8"><a href="index.php"> Go To Home</a></td>
		</tr>




	</table>
</form>



</body>
</html>

<?php 
//gets text data
	if(isset($_POST['insert_post'])){

		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];


//gets images

		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];




		move_uploaded_file($product_image_tmp,'product_images/$product_image');


	echo $insert_product = "insert into products (product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";


		$insert_pro = mysqli_query($con, $insert_product);

		if($insert_pro) {

			echo "<script>alert('Product has been uploaded!')</script>";
			echo "<script>window.open('insert_product.php','_self'</script>";

		}

	}

?>