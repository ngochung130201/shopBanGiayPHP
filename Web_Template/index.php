<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Nhóm 19	</title>	
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<!-- <div id="header">
		<h1>Your Website</h1>
		<h2>catchy slogan..</h2>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="./index.php">Thông Tin Nhóm
					<span>
						<a href="" style=" border-bottom: 1px solid blue;border-right:1px solid ; text-decoration: solid;">
						Click vào xem thông tin nhóm
						</a>
					</span>
			</a></li>
			<li><a href="register.php">Bài Tập</a></li>
			<li><a href="view_users.php">View Users</a></li>
			<li><a href="password.php">Change Password</a></li>
			<li><a href="#">link five</a></li>
		</ul>
	</div>
	 -->
<div class="container"><h1>Nhóm 19</h1></div>
<div id="exTab1" class="container">	
<ul  class="nav nav-pills">
			<li class="active">
        	<a href="#1a" data-toggle="tab">Thông tin nhóm</a>
			</li>
			<li><a href="#2a" data-toggle="tab">Bài Tập</a>
			</li>
			<li><a href="#3a" data-toggle="tab">Website Của Nhóm</a>
			</li>
  		<li><a href="#4a" data-toggle="tab">Trang Hướng Dẫn</a>
			</li>
		</ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
			  	<table border="1">
						<tr>
							<th>STT</th>
							<th>Họ Và Tên</th>
							<th>MSSV</th>
							<th>Lớp</th>
							<th>Công Việc Được Giao</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Huỳnh Ngọc Hưng</td>
							<td>61133707</td>
							<td>61.CNTT-1</td>
							<td>
								<ul>
									<li>Xây dựng Database</li>
								</ul>
								<span>Frontend:</span>
								<ul>
									<li>Sản Phẩm</li>
									<li>Liên Hệ</li>
									<li>Đăng ký và Đăng Nhập cilent và server</li>
									<li>Footer</li>
								</ul>
								<span>Backend:</span>
								<ul>
									<li>Thêm xóa sửa hiển thị (CRUD) bảng sản phẩm</li>
									<li>Đăng ký-Đăng nhập backend </li>
									<li>Chức năng gửi mail</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Ngô Hoàng Phát</td>
							<td>61132017</td>
							<td>61.CNTT-1</td>
							<td>
							<span>Frontend:</span>
								<ul>
									<li>Header</li>
									<li>Tin Tức</li>
								</ul>
								<span>Backend:</span>
								<ul>
									<li>Đăng ký-Đăng nhập Client</li>
									<li>Thêm xóa sửa hiển thị(CRUD)</li>
									<li>Danh mục</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Lê Tuấn Anh</td>
							<td>61136418</td>
							<td>61.CNTT-1</td>
							<td>
							<span>Frontend:</span>
								<ul>
									<li>Giỏ Hàng</li>
								</ul>
								<span>Backend:</span>
								<ul>
									<li>Tìm Kiếm</li>
								</ul>
							</td>
						</tr>
						</table>
				</div>
			<div class="tab-pane" id="2a">
					<ul id="myUL">
						<li><span class="caret1"><i class='bx bxs-folder-open'></i>Huỳnh Ngọc Hưng</span>
							<ul class="nested">
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Bài 3</span>
									<ul class="nested">
										<li><a href="./HuynhNgocHung/BaitapPHP/bai3/pheptinh.php"><i class='bx bxl-php'></i> Bài 3</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Bài Tập Array String</span>
									<ul class="nested">
										<li><a href="./HuynhNgocHung/BaitapPHP/BaitapArrayString/bai1.php"><i class='bx bxl-php'></i> Bài 1</a></li>
									</ul>
								</li> 
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Bài Tập Thực Hành</span>
									<ul class="nested">
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Hướng đối tượng</span>
											<ul class="nested">
												<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/phanhuongdoituong/pheptinhphanso.php"><i class='bx bxl-php'></i> Phép tính phân số</a></li>
												<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/phanhuongdoituong/phetoanphanso.php"><i class='bx bxl-php'></i> Phép Toán Phân số</a></li>
												<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/phanhuongdoituong/quanlythongtin.php"><i class='bx bxl-php'></i> Quản Lý Thông Tin</a></li>
											</ul>
										</li>
										<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/baitap5.php"><i class='bx bxl-php'></i> Bài 5</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/baitapmauCdientich0.php"><i class='bx bxl-php'></i> Tính Diện Tích</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/ketquapheptinh.php"><i class='bx bxl-php'></i> Phép Tính</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/matran.php"><i class='bx bxl-php'></i> Ma Trận</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/pheptinh.php"><i class='bx bxl-php'></i> Phép Tính</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/thongtin.php"><i class='bx bxl-php'></i> Thông Tin</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/timkiem.php"><i class='bx bxl-php'></i> Tìm Kiếm</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/baitapthuchanh/xulythongtin.php"><i class='bx bxl-php'></i> Xử Lý Thông Tin</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Class</span>
									<ul class="nested">
										<li><a href="./HuynhNgocHung/BaitapPHP/class/class.php"><i class='bx bxl-php' ></i> Class</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Chủ Đề 2</span>
									<ul class="nested">
										<li><a href="./HuynhNgocHung/BaitapPHP/ChuDe2/Baitaptrenlop.php"><i class='bx bxl-php' ></i> Chủ đề 2</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Database</span>
									<ul class="nested">
										<li><a href="./HuynhNgocHung/BaitapPHP/databse/table.php"><i class='bx bxl-php' ></i> Database</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Form</span>
									<ul class="nested">
										<li><span class="caret1"> <i class='bx bxs-folder-open'></i> Bài tập tổng hợp</span>
											<ul class="nested">
												<li><a href="./HuynhNgocHung/BaitapPHP/form/baitaptonghop/TinhTienDien.php"><i class='bx bxl-php' ></i> Tính Tiền Điện</a></li>
											</ul>
										</li>
										<li><a href="./HuynhNgocHung/BaitapPHP/form/bai1textfield.php"><i class='bx bxl-php' ></i> Bài 1 Textfield</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/form/bai2textfield.php"><i class='bx bxl-php' ></i> Bài 2 Textfield</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/form/bai3textare.php"><i class='bx bxl-php' ></i> Bài 3 Textarea</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/form/bai4checkbox.php"><i class='bx bxl-php' ></i> Bài 4 Checkbox</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/form/bai5radio.php"><i class='bx bxl-php' ></i> Bài 5 Radio</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/form/bai6combobox.php"><i class='bx bxl-php' ></i> Bài 6 Combobox</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/form/bai7listbox.php"><i class='bx bxl-php' ></i> Bài 7 Listbox</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Mảng Và Chuỗi</span>
									<ul class="nested">
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Bài 2:Thiết kế năm nhuận</span>
											<ul class="nested">
												<li><a href="./HuynhNgocHung/BaitapPHP/MangVaChuoi/Bai2Thietketimnamnhuan/namnhuan.php"><i class='bx bxl-php' ></i> Tính Năm Nhuận</a></li>
											</ul>
										</li>
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Bài 3:Phát sinh mảng</span>
											<ul class="nested">
												<li><a href="./HuynhNgocHung/BaitapPHP/MangVaChuoi/bai3phatsinhmangvatinhtoan/phatsinh.php"><i class='bx bxl-php' ></i> Phát sinh mảng</a></li>
											</ul>
										</li>
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Bài 4: Nhập và tính trên dãy số</span>
											<ul class="nested">
												<li><a href="./HuynhNgocHung/BaitapPHP/MangVaChuoi/Bai4Nhapvatinhtrendayso/dayso.php"><i class='bx bxl-php' ></i> Tính toán trên dãy số</a></li>
											</ul>
										</li>
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Ví dụ Database</span>
											<ul class="nested">
												<li><a href="./HuynhNgocHung/BaitapPHP/MangVaChuoi/vidudatabase/connect.php"><i class='bx bxl-php' ></i> Ví dụ Database</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Phần hướng đối tượng</span>
									<ul class="nested">
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Bài 1:Tạo các lớp đơn giản</span>
											<ul class="nested">
												<li><a href="./HuynhNgocHung/BaitapPHP/PhanHuongDoituong/Bai1TaoCacLopDongian/class.php"><i class='bx bxl-php' ></i> Tạo các lớp đơn giản</a></li>
											</ul>
										</li>
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Bài 2:Thông tin sinh viên</span>
											<ul class="nested">
												<li><a href="./HuynhNgocHung/BaitapPHP/PhanHuongDoituong/Bai2Thongtinnhanvien/quanlythongtin.php"><i class='bx bxl-php' ></i> Thông tin sinh viên</a></li>
											</ul>
										</li>
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Bài 3:Phép tính phân số</span>
											<ul class="nested">
												<li><a href="./HuynhNgocHung/BaitapPHP/PhanHuongDoituong/Bai3PhepTinhPhanSo/pheptinhphanso.php"><i class='bx bxl-php' ></i> Phép tính phân số</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Phần mảng và chuỗi</span>
									<ul class="nested">
										<li><a href="./HuynhNgocHung/BaitapPHP/phanmangvachuoi/bai1.php"><i class='bx bxl-php' ></i> Bài 1</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/phanmangvachuoi/bai4.php"><i class='bx bxl-php' ></i> Bài 4</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/phanmangvachuoi/footerboostrap.php"><i class='bx bxl-php' ></i> FooterBootstrap</a></li>
										<li><a href="./HuynhNgocHung/BaitapPHP/phanmangvachuoi/headerboostrap.php"><i class='bx bxl-php' ></i> HeaderBoostrap</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open'></i>Upload File</span>
									<ul class="nested">
										<li><a href="./HuynhNgocHung/BaitapPHP/uploadFile/upload.php"><i class='bx bxl-php' ></i> Upload File</a></li>
									</ul>
								</li>
								<li><a href="./HuynhNgocHung/BaitapPHP/baitap.php"><i class='bx bxl-php' ></i> baitap</a></li>
								<li><a href="./HuynhNgocHung/BaitapPHP/bangcuuchuong.php"><i class='bx bxl-php' ></i> Bảng Cửu Chương</a></li>
								<li><a href="./HuynhNgocHung/BaitapPHP/file.php"><i class='bx bxl-php' ></i> file</a></li>
								<li><a href="./HuynhNgocHung/BaitapPHP/form.php"><i class='bx bxl-php' ></i> Form</a></li>
								<li><a href="./HuynhNgocHung/BaitapPHP/index.php"><i class='bx bxl-php' ></i> index</a></li>
								<li><a href="./HuynhNgocHung/BaitapPHP/songuyen.php"><i class='bx bxl-php' ></i> Số Nguyên</a></li>
							</ul>
						</li>
						<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Ngô Hoàng Phát</span>
							<ul class="nested">
								<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Bài Tập Thực Hành</span>
									<ul class="nested">
										<li><a href="./NgoHoangPhat/BaiTapThucHanh/Bai1TextField.php"><i class='bx bxl-php'></i> Bài 1:Textfield</a></li>
										<li><a href="./NgoHoangPhat/BaiTapThucHanh/Bai2.php"><i class='bx bxl-php'></i> Bài 2</a></li>
										<li><a href="./NgoHoangPhat/BaiTapThucHanh/Bai3.php"><i class='bx bxl-php'></i> Bài 3</a></li>
										<li><a href="./NgoHoangPhat/BaiTapThucHanh/Bai4CheckBox.php"><i class='bx bxl-php'></i> Bài 4:Checkbox</a></li>
										<li><a href="./NgoHoangPhat/BaiTapThucHanh/Bai5Radio.php"><i class='bx bxl-php'></i> Bài 5:Radio</a></li>
										<li><a href="./NgoHoangPhat/BaiTapThucHanh/Bai6ComboBox.php"><i class='bx bxl-php'></i> Bài 6:Combobox</a></li>
										<li><a href="./NgoHoangPhat/BaiTapThucHanh/Bai7ListBox.php"><i class='bx bxl-php'></i> Bài 7:Listbox</a></li>
										<li><a href="./NgoHoangPhat/BaiTapThucHanh/BaiTapMau.php"><i class='bx bxl-php'></i> Bài tập mẫu</a></li>
										<li><a href="./NgoHoangPhat/BaiTapThucHanh/TinhTienDien.php"><i class='bx bxl-php'></i> Tính Tiền Điện</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Mảng Và Chuỗi</span>
									<ul class="nested">
										<li><a href="./NgoHoangPhat/MangChuoi/Bai1.php">Bài 1</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Thực hành trên lớp</span>
									<ul class="nested">
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> CSDL</span>
											<ul class="nested">
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/CSDL/Bai2.php"><i class='bx bxl-php'></i> Bài 2</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/CSDL/MySQL.php"><i class='bx bxl-php'></i> MySQL</a></li>
											</ul>
										</li>
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Hướng Đối Tượng</span>
											<ul class="nested">
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/HuongDoiTuong/Bai1.php"><i class='bx bxl-php'></i> Bài 1</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/HuongDoiTuong/Bai2.php"><i class='bx bxl-php'></i> Bài 2</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/HuongDoiTuong/Bai3.php"><i class='bx bxl-php'></i> Bài 3</a></li>
											</ul>
										</li>
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Mảng và Chuỗi</span>
											<ul class="nested">
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/MangChuoi/Bai2.php"><i class='bx bxl-php'></i> Bài 2</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/MangChuoi/Bai4.php"><i class='bx bxl-php'></i> Bài 4</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/MangChuoi/Bai5.php"><i class='bx bxl-php'></i> Bài 5</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/MangChuoi/Bai6.php"><i class='bx bxl-php'></i> Bài 6</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/MangChuoi/Bai7.php"><i class='bx bxl-php'></i> Bài 7</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/MangChuoi/Bai8.php"><i class='bx bxl-php'></i> Bài 8</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/MangChuoi/Bai9.php"><i class='bx bxl-php'></i> Bài 9</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/MangChuoi/Bai10.php"><i class='bx bxl-php'></i> Bài 10</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/MangChuoi/Bai11.php"><i class='bx bxl-php'></i> Bài 11</a></li>
											</ul>
										</li>
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Upload</span>
											<ul class="nested">
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/Upload/upload.php"><i class='bx bxl-php'></i> Upload</a></li>
												<li><a href="./NgoHoangPhat/ThucHanhTrenLop/Upload/uploadfile.html"><i class='bx bxs-file-html' ></i> UploadHTML</a></li>
											</ul>
										</li>
										<li><a href="./NgoHoangPhat/ThucHanhTrenLop/Bai2.3a.php"><i class='bx bxl-php' ></i> Bài 2.3a</a></li>
										<li><a href="./NgoHoangPhat/ThucHanhTrenLop/Bai2.3b.php"><i class='bx bxl-php' ></i> Bài 2.3b</a></li>
										<li><a href="./NgoHoangPhat/ThucHanhTrenLop/Bai2.4a.php"><i class='bx bxl-php' ></i> Bài 2.4a</a></li>
										<li><a href="./NgoHoangPhat/ThucHanhTrenLop/Bai2.4b.php"><i class='bx bxl-php' ></i> Bài 2.4b</a></li>
										<li><a href="./NgoHoangPhat/ThucHanhTrenLop/Mang2chieu.php"><i class='bx bxl-php' ></i> Mảng 2 Chiều</a></li>
										<li><a href="./NgoHoangPhat/ThucHanhTrenLop/TrinhChoiNhac.php"><i class='bx bxl-php' ></i> Trình Chơi Nhạc</a></li>
									</ul>
								</li>
								<li><a href="./NgoHoangPhat/Baitap.php"><i class='bx bxl-php' ></i> Bài Tập</a></li>
								<li><a href="./NgoHoangPhat/BaiTapTrenLop.php"><i class='bx bxl-php' ></i> Bài Tập Trên Lớp</a></li>
							</ul>
						</li>
						<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Lê Anh Tuấn</span>
							<ul class="nested">
								<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Bài Làm Ở Lớp</span>
									<ul class="nested">
										<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Mảng Chuỗi</span>
											<ul class="nested">
												<li><a href="./LeAnhTuan/Bailamolop/MangChuoi/Bai2.php"><i class='bx bxl-php' ></i> Bài 2</a></li>
												<li><a href="./LeAnhTuan/Bailamolop/MangChuoi/Bai6.php"><i class='bx bxl-php' ></i> Bài 6</a></li>
												<li><a href="./LeAnhTuan/Bailamolop/MangChuoi/Bai7.php"><i class='bx bxl-php' ></i> Bài 7</a></li>
												<li><a href="./LeAnhTuan/Bailamolop/MangChuoi/Bai8.php"><i class='bx bxl-php' ></i> Bài 8</a></li>
												<li><a href="./LeAnhTuan/Bailamolop/MangChuoi/Bai9.php"><i class='bx bxl-php' ></i> Bài 9</a></li>
												<li><a href="./LeAnhTuan/Bailamolop/MangChuoi/Bai11.php"><i class='bx bxl-php' ></i> Bài 11</a></li>
											</ul>
										</li>
										<li><a href="./LeAnhTuan/Bailamolop/Bai2.php"><i class='bx bxl-php' ></i> Bài 2</a></li>
										<li><a href="./LeAnhTuan/Bailamolop/Bai3.php"><i class='bx bxl-php' ></i> Bài 3</a></li>
										<li><a href="./LeAnhTuan/Bailamolop/Bai4.php"><i class='bx bxl-php' ></i> Bài 4</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open' ></i> String Array</span>
									<ul class="nested">
										<li><a href="./LeAnhTuan/StringArray/Bai1.php"><i class='bx bxl-php' ></i> Bài 1</a></li>
									</ul>
								</li>
								<li><span class="caret1"><i class='bx bxs-folder-open' ></i> Thực Hành</span>
									<ul class="nested">
									<li><a href="./LeAnhTuan/Thuchanh/Bai1Ttextfield.php"><i class='bx bxl-php' ></i> Bài 1:TextField</a></li>
									<li><a href="./LeAnhTuan/Thuchanh/Bai2input.php"><i class='bx bxl-php' ></i> Bài 2:Input</a></li>
									<li><a href="./LeAnhTuan/Thuchanh/Bai3text.php"><i class='bx bxl-php' ></i> Bài 3:Text</a></li>
									<li><a href="./LeAnhTuan/Thuchanh/Bai4checkbox.php"><i class='bx bxl-php' ></i> Bài 4:CheckBox</a></li>
									<li><a href="./LeAnhTuan/Thuchanh/Bai5radio.php"><i class='bx bxl-php' ></i> Bài 5: ComboBox</a></li>
									<li><a href="./LeAnhTuan/Thuchanh/baitap.php"><i class='bx bxl-php' ></i> Bài Tập</a></li>
									<li><a href="./LeAnhTuan/Thuchanh/Listbai7.php"><i class='bx bxl-php' ></i> Bài 7: List</a></li>
									<li><a href="./LeAnhTuan/Thuchanh/Tiendien.php"><i class='bx bxl-php' ></i> Tiền Điện</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
			</div>
        <div class="tab-pane" id="3a">
          <a href="././frontend/page/home.php" style="color:white ;">Website Bán Giày</a>
		</div>
          <div class="tab-pane" id="4a">
			</div>
	</div>
  </div>






<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script>
var toggler = document.getElementsByClassName("caret1");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret1-down");
  });
}
</script>