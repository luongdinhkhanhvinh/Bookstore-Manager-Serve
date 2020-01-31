<?php include("includes/header.php");

$file_path = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']).'/';
?>
<div class="row">
      <div class="col-sm-12 col-xs-12">
     	 	<div class="card">
		        <div class="card-header">
		        API urls Mẫu
		        </div>
       			    <div class="card-body no-padding">
         		
         			 <pre><code class="html"><b>Trang chủ</b><br><?php echo $file_path."api.php?home"?><br><br><b>Sách mới nhất</b><br><?php echo $file_path."api.php?latest"?><br><br><b>Tìm kiếm sách</b><br><?php echo $file_path."api.php?search_text=Wi"?><br><br><b>Danh sách chuyên mục</b><br><?php echo $file_path."api.php?cat_list"?><br><br><b>Danh sách tác giả</b><br><?php echo $file_path."api.php?author_list"?><br><br><b>Danh mục sách theo ID danh mục</b><br><?php echo $file_path."api.php?cat_id=3"?><br><br><b>Danh mục sách theo ID tác giả</b><br><?php echo $file_path."api.php?author_id=1"?><br><br><b>Sách duy nhất</b><br><?php echo $file_path."api.php?book_id=20"?><br><br><b>Xếp hạng</b><br><?php echo $file_path."api_rating.php?book_id=20&device_id=123&user_id=2&rate=4"?><br><br><b>Bình luận của thành viên</b><br><?php echo $file_path."api_comment.php?book_id=20&user_name=kuldip&comment_text=test"?><br><br><b>Chi tiết ứng dụng</b><br><?php echo $file_path."api.php?app_details"?><br><br><b>Thành viên đăng ký</b><br><?php echo $file_path."user_register_api.php?name=john&email=john@gmail.com&password=123456&phone=1234567891"?><br><br><b>Thành viên đăng nhập</b><br><?php echo $file_path."user_login_api.php?email=john@gmail.com&password=123456"?><br><br><b>Thông tin thành viên</b><br><?php echo $file_path."user_profile_api.php?id=2"?><br><br><b>Cập nhật thông tin thành viên</b><br><?php echo $file_path."user_profile_update_api.php?user_id=2&name=john&email=john@gmail.com&password=123456&phone=1234567891"?><br><br><b>Quên mật khẩu</b><br><?php echo $file_path."user_forgot_pass_api.php?email=john@gmail.com"?></code></pre>
       		
       				</div>
          	</div>
        </div>
</div>
    <br/>
    <div class="clearfix"></div>
        
<?php include("includes/footer.php");?>       
 