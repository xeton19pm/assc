<?php
	session_start();
	if(isset($_POST['login'])){
		$c_email=$_POST['email'];
		$c_pass=$_POST['password'];
		$sel_c="select * from customers where customer_pass='$c_pass' and customer_email='$c_email'";
		$run_login=mysql_query($sel_c);
		$check_login=mysql_num_rows($run_login);
		if($check_login==0){
			echo '<script>alert("password or email incorrect")</script>';
		}else{
			$_SESSION['dangnhap']=$c_email;
			header('location:index.php?xem=cart');
		}
	}
?>

<div class="content_right" style="width:100%;">
	<h1 align="center"><p class="loai">Đăng nhập và mua hàng</p></h1>
    <form action="" method="post">
    <table width="500"  align="center">
    	<tr>
        	<td>Email</td>
            <td><input type="text" name="email" placeholder="Enter email..." /></td>
        </tr>
        	<tr>
        	<td>Password</td>
            <td><input type="password" name="password" placeholder="Enter pass..." /></td>
        </tr>
        <tr>
        	<td><input type="submit" name="login" value="Đăng Nhập" /></td>
        </tr>
    </table>
		<h2 align="right"><a href="index.php?xem=dangky">Đăng ký một tài khoản mới</a></h2>
</form>

</div>
