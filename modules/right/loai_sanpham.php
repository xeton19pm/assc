<?php
	$sql="select tenloai,product_image,product_title,product_price,product_id from products,loai where products.product_cat=loai.loai_id and product_cat='$_GET[id]' ";
	$sql_tenloai="select tenloai from loai where loai_id='$_GET[id]'   ";
	$tenloai=mysql_query($sql_tenloai);
	$dong_tenloai=mysql_fetch_array($tenloai);
	$loai=mysql_query($sql);
	
?>
<p class="loai"><?php echo $dong_tenloai['tenloai'] ?></p>
<ul>

	<?php
	while($dong=mysql_fetch_array($loai)){
	?>
             <li><a href="#">
                	<?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$dong['product_image'].'" width="120" height="150"/>';
					?>
                    <p>Tên sản phẫm: <?php echo $dong['product_title'] ?></p>
                    <p>Giá:<?php echo $dong['product_price'] ?></p>
                    <p style="color:#900;margin-left:20px;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $dong['product_id'] ?>"  style="color:#09C;">Chi tiết</p></a>
                  
                </a></li>
              <?php
	}
			  ?>
            </ul>
          