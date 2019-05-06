@extends('master')
@section('search')
<div id="timkiem">
	<img src="images/anh.jpg"style="float: left;" height="100%" width="75%" alt="anhnen">
	<div id="search">
		<h3>Tìm kiếm lớp</h3>
		<form action="">
			<ul>
								<li>
									<select id="mon">
										<option>Môn học</option>
										<option value="">Toán</option>
										<option value="">Lý</option>
										<option value="">Hóa</option>
										<option value="">Sinh</option>
										<option value="">Văn</option>
										<option value="">Sử</option>
										<option value="">Địa</option>
										<option value="">Tiếng Anh</option>
										<option value="">Khác</option>
									</select>
								</li>
								<li>
									<select id="lop">
										<option>Lớp</option>
										<option value="">Lớp 1</option>
										<option value="">Lớp 2</option>
										<option value="">Lớp 3</option>
										<option value="">Lớp 4</option>
										<option value="">Lớp 5</option>
										<option value="">Lớp 6</option>
										<option value="">Lớp 7</option>
										<option value="">Lớp 8</option>
										<option value="">Lớp 9</option>
										<option value="">Lớp 10</option>
										<option value="">Lớp 11</option>
										<option value="">Lớp 12</option>
									</select>
								</li>
								<li>
									<select id="time">
										<option>Thời gian</option>
										<option value="">Thứ 2</option>
										<option value="">Thứ 3</option>
										<option value="">Thứ 4</option>
										<option value="">Thứ 5</option>
										<option value="">Thứ 6</option>
										<option value="">Thứ 7</option>
										<option value="">Chủ nhật</option>

									</select>
								</li>
								<li>
									<select id="diachi">
										<option>Địa chỉ</option>
										<option value="">Quận Ba Đình</option>
										<option value="">Quận Hoàn Kiếm</option>
										<option value="">Quận Tây Hồ</option>
										<option value="">Quận Long Biên</option>
										<option value="">Quận Cầu Giấy</option>
										<option value="">Quận Đống Đa</option>
										<option value="">Quận Hai Bà Trưng</option>
										<option value="">Quận Hoàng Mai</option>
										<option value="">Quận Thanh Xuân</option>
									</select>
								</li>
							</ul>
							<input type="submit" value="Tìm kiếm!" class="button">
		</form>
	</div>
</div>
@endsection
@section('main')
<div id="featured">
						<h4><span>Đề cử</span></h4>
						<ul class="items">
							<li>
								<a href="product.html" > <p>Toán<br>Lớp 12</p> <br> <span>120k/b</span> Quận Long Biên </a>
							</li>
							<li>
								<a href="product.html"> <p>Vật lý<br>Lớp 12</p> <br> <span>150k/b</span> Quận Cầu Giấy </a>
							</li>
							<li>
								<a href="product.html"> <p>Hóa học<br>Lớp 12</p> <br> <span>150k/b</span>Quận Hoàn Kiếm</a>
							</li>
							<li>
								<a href="product.html"><p>Toán<br>Lớp 12</p> <br> <span>200k/b</span> Quận Cầu Giấy </a>
							</li>

						</ul>
					</div>
					<div id="sale">
						<h4><span>Lớp mới</span></h4>
						<ul class="items">
							<li>
								<a href="product.html" > <p>Toán<br>Lớp 12</p> <br> <span>120k/b</span> Quận Long Biên </a>
								
							</li>
							<li>
								<a href="product.html"> <p>Vật lý<br>Lớp 12</p> <br> <span>150k/b</span> Quận Cầu Giấy </a>
							</li>
							<li>

								<a href="product.html"> <p>Hóa học<br>Lớp 12</p> <br> <span>150k/b</span>Quận Hoàn Kiếm</a>
							</li>
							<li>
								<a href="product.html"><p>Toán<br>Lớp 12</p> <br> <span>200k/b</span> Quận Cầu Giấy </a>
							</li>
							<li>
								<a href="product.html" > <p>Toán<br>Lớp 12</p> <br> <span>120k/b</span> Quận Long Biên </a>
							</li>
							<li>
								<a href="product.html"> <p>Vật lý<br>Lớp 12</p> <br> <span>150k/b</span> Quận Cầu Giấy </a>
							</li>
							<li>
								<a href="product.html"> <p>Hóa học<br>Lớp 12</p> <br> <span>150k/b</span>Quận Hoàn Kiếm</a>
							</li>
							<li>
								<a href="product.html"><p>Toán<br>Lớp 12</p> <br> <span>200k/b</span> Quận Cầu Giấy </a>
							</li>
							<li>
								<a href="product.html" > <p>Toán<br>Lớp 12</p> <br> <span>120k/b</span> Quận Long Biên </a>
							</li>
							<li>
								<a href="product.html"> <p>Vật lý<br>Lớp 12</p> <br> <span>150k/b</span> Quận Cầu Giấy </a>
							</li>
							<li>
								<a href="product.html"> <p>Hóa học<br>Lớp 12</p> <br> <span>150k/b</span>Quận Hoàn Kiếm</a>
							</li>
							
							
						</ul>

					</div>
					
				
@endsection