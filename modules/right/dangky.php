<?php
	if(isset($_POST['register'])){
		$c_name=$_POST['c_name'];
		$c_email=$_POST['c_email'];
		$c_pass=$_POST['c_pass'];
		
		$c_country=$_POST['c_country'];
		$c_city=$_POST['c_city'];
		$c_contact=$_POST['c_contact'];
		$c_address=$_POST['c_address'];
		$c_image=$_FILES['c_image']['name'];
		$c_image_tmp=$_FILES['c_image']['tmp_name'];
		move_uploaded_file($c_image_tmp,"modules/right/customer_images/$c_image");
		$insert_c="insert into customers(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_image,customer_contact,customer_address) values('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_image','$c_contact','$c_address')";
		$run_c=mysql_query($insert_c);
		if($run_c){
			echo '<script>alert("insert thanh cong")</script>';
			
		}
	}
?>

<div class="content_right" style="width:100%;">
<h1 align="center"><p class="loai">Đăng ký tài khoản</p></h1>
	<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
    	<table width="750">
        	<tr>
            	<td>Customer_name</td>
                <td><input type="text" name="c_name"></td>
            </tr>
            <tr>
            	<td>Customer_email</td>
                <td><input type="text" name="c_email"></td>
            </tr>
            <tr>
            	<td>Customer_password</td>
                <td><input type="password" name="c_pass"></td>
            </tr>
              <tr>
            	<td>Customer_image</td>
                <td><input type="file" name="c_image"></td>
            </tr>
            <tr>
            	<td>Customer Country</td>
                <td>
                	<select name="c_country">
                    	<option>--Select a country--</option>
                        <option>Viet Nam</option>
                        <option>US</option>
                        <option>UK</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Customer_city</td>
                <td><input type="text" name="c_city"></td>
            </tr>
            <tr>
            	<td>Customer_phone</td>
                <td><input type="text" name="c_contact"></td>
            </tr>
         <tr>
            	<td>Customer_address</td>
                <td><textarea name="c_address" rows="10" cols="20"></textarea></td>
            </tr>
            <tr>
            	<td align="right"><input type="submit" name="register" value="Đăng ký"></td>
            </tr>
        </table>
    </form>
    <h2><a href="index.php?xem=thanhtoan">Quay lại đăng nhập</a></h2>
</div>