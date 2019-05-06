@extends('master')
@section('js') 
	<script>
				$(function() {
				    var pull        = $('#pull');
				        menu        = $('nav ul');
				 
				    $(pull).on('click', function(e) {
				        e.preventDefault();
				        menu.slideToggle();
				    });
				});
				$(window).resize(function(){
				    var w = $(window).width();
				    if(w > 600 && menu.is(':hidden')) {
				        menu.removeAttr('style');
				    }
				});
			</script>
			<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(window).load(function() {
				 {
					var _top = $('.wrapper-nav').offset().top - parseFloat($('.wrapper-nav').css('marginTop').replace(/auto/, 0));
					$(window).scroll(function(evt) {
						var _y = $(this).scrollTop();
						if (_y > _top) {
							$('.wrapper-nav').addClass('fixed');
							$('.main-1').css("margin-top", "30px")
						} else {
							$('.wrapper-nav').removeClass('fixed');
							$('.main-1').css("margin-top", "0")
						}
					})
				}
			});
		});
		</script>
		<script type="text/javascript">
  function  readURL(input,thumbimage) {

   if  (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
    var  reader = new FileReader();
    var s = input.files[0].type;
    var name=input.files[0].name;
    reader.onload = function (e) {
    $("#thumbimage").attr('src', e.target.result);
     }
     reader.readAsDataURL(input.files[0]);
    }
    else  { // Sử dụng cho IE
      $("#thumbimage").attr('src', input.value);
  
    }
    if(s=="image/jpeg"||s=="image/png"||s=="image/pjpeg"){
	    $("#thumbimage").show();
	    $('.filename').text(name);
	    $('.Choicefile').css('background', '#C4C4C4');
	    $('.Choicefile').css('cursor', 'default');
	    $(".removeimg").show();
	    $(".Choicefile").unbind('click'); //Xóa sự kiện  click trên nút .Choicefile
	}
	else {
		alert("File không đúng định dạng! Hãy chọn lại");
	}
          
  }
  $(document).ready(function () {
   $(".Choicefile").bind('click', function  () { //Chọn file khi .Choicefile Click
    $("#uploadfile").click();

               
   });
   $(".removeimg").click(function () {//Xóa hình  ảnh đang xem
      $("#thumbimage").attr('src', '').hide();
      $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
      $(".removeimg").hide();
      $(".Choicefile").bind('click', function  () {//Tạo lại sự kiện click để chọn file
       $("#uploadfile").click();
      });
      $('.Choicefile').css('background','#0877D8');
      $('.Choicefile').css('cursor', 'pointer');
      $(".filename").text("");
    });
   })
</script>
        <script language="javascript">
            function validateForm()
            {
                var inputs=document.forms['formdkgs'].getElementsByTagName('input');
                var value=inputs[9].value;
                var time=document.getElementsByName('time[]');
                var t=0;
                var khuvuc=document.getElementsByName('khuvuc[]');
                var k=0;
                var mon=document.getElementsByName('mon[]');
                var m=0;
                var lop=document.getElementsByName('lop[]');
                var l=0;
                var err="";
                if(value==""){
                		err=err+ "Avatar,";
                }
                for(var i=0;i<time.length;i++){
                	if(time[i].checked==true){
                		t++
                	}
                }
                for(var i=0;i<khuvuc.length;i++){
                	if(khuvuc[i].checked==true){
                		k++;
                	}
                }
                for(var i=0;i<mon.length;i++){
                	if(mon[i].checked==true){
                		m++
                	}
                }
                for(var i=0;i<lop.length;i++){
                	if(lop[i].checked==true){
                		l++;
                	}
                }
                if(k==0){
                	err=err+" Khu vực,"
                }
                if(m==0){
                	err=err+" Môn dạy,"
                }
                if(l==0){
                	err=err+" Lớp dạy,"
                }
                if(t==0){
                	err=err+" Thời gian!"
                }

                if(err!=""){
                	
                	alert("Bạn chưa chọn "+err);
                	return false;
                }
                else {
                	
                	return true;
                }
            }
        </script>
@endsection
@section('main')
	@if ($errors->any())
    <div id="err">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	<form action="" id="formdkgs" method="post" enctype="multipart/form-data" >
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="formgs1">
					<p>Họ và tên</p>
					<input type="text" name="hoten">
				</div>
				<div class="formgs1">	
					<p>Ngày sinh</p>
					<input type="date" name="ngay">
				</div>
				<div class="formgs1">	
					<p>Quê quán</p>
					<input type="text" name="que">
				</div>
				<div class="formgs1">	
					<p>Địa chỉ</p>
					<input type="text" name="diachi">
				</div>
				<div class="formgs1">	
					<p>Số chứng minh thư</p>
					<input type="text" name="cmt">
				</div>
				<div class="formgs1">
					<p>Email</p>
					<input type="text" name="email">	
				</div>
				<div class="formgs1">	
					<p>Số điện thoại</p>
					<input type="text" name="sdt">
				</div>
				<div class="formgs1">	
					<p>Mật khẩu</p>
					<input type="password" name="password" id="pass">
				</div>
				<div class="formgs1">	
					<p>Nhập lại mật khẩu</p>
					<input type="password" name="repass">
				</div>
				<hr>
				<div class="formgs1">
					<p>Avatar</p>
					<div class="input">
						<div id="myfileupload">
					   		<input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
					   <!--      Name  mà server request về sẽ là ImageUpload-->
					  
					 	</div>
						<div id="thumbbox">
						  <img height="140" width="100" alt="Thumb image" id="thumbimage" style="display: none" />
						  <a class="removeimg" href="javascript:" ></a>
						</div>
						<div id="boxchoice">
						  <a href="javascript:" class="Choicefile">Chọn file</a>
						  <p style="clear:both"></p>
						</div>
					
						<div>
							<span class="filename" ></span>
						</div>
					</div>
				</div>
				<hr>
				<div class="formgs">
					<p>Khu vực dạy</p>	
					<ul class="check">
                           <li>
                                <label class="container">Quận Ba Đình
								  <input type="checkbox" value="1" name="khuvuc[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Quận Hoàn Kiếm
								  <input type="checkbox" value="2" name="khuvuc[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Quận Tây Hồ
								  <input type="checkbox" value="3" name="khuvuc[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Quận Long Biên
								  <input type="checkbox" value="4" name="khuvuc[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Quận Cầu Giấy
								  <input type="checkbox" value="5" name="khuvuc[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Quận Đống Đa
								  <input type="checkbox" value="6" name="khuvuc[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Quận Hai Bà Trưng
								  <input type="checkbox" value="7" name="khuvuc[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Quận Hoàng Mai
								  <input type="checkbox" value="8" name="khuvuc[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Quận Thanh Xuân
								  <input type="checkbox" value="9" name="khuvuc[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            
                    </ul>	
				</div>
				<hr>
				<div class="formgs">
					<p>Môn dạy</p>	
					<ul class="check">
                            <li>
                                <label class="container">Toán
								  <input type="checkbox" value="1" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Vật lý
								  <input type="checkbox" value="2" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Hóa học
								  <input type="checkbox" value="3" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Sinh học
								  <input type="checkbox" value="4" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tiếng Việt
								  <input type="checkbox" value="5" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Ngữ văn
								  <input type="checkbox" value="6" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lịch sử
								  <input type="checkbox" value="7" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Địa lý
								  <input type="checkbox" value="8" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tin học
								  <input type="checkbox" value="9" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tiếng Anh
								  <input type="checkbox" value="10" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tiếng Pháp
								  <input type="checkbox" value="11" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Âm nhạc
								  <input type="checkbox" value="12" name="mon[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                         </ul>
						
				</div>
				<hr>
				
				<div class="formgs">
					<p>Lớp dạy</p>	
					<ul class="check">
                           <li>
                                <label class="container">Lớp 1
								  <input type="checkbox" value="1" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 2
								  <input type="checkbox" value="2" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 3
								  <input type="checkbox" value="3" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 4
								  <input type="checkbox" value="4" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 5
								  <input type="checkbox" value="5" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 6
								  <input type="checkbox" value="6" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 7
								  <input type="checkbox" value="7" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 8
								  <input type="checkbox" value="8" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 9
								  <input type="checkbox" value="9" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 10
								  <input type="checkbox" value="10" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 11
								  <input type="checkbox" value="11" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Lớp 12
								  <input type="checkbox" value="12" name="lop[]">
								  <span class="checkmark"></span>
								</label>
                            </li> 
                    </ul>
							
				</div>
				<hr>
				<div class="formgs">
					<p >Thời gian dạy</p>
					<ul class="check">
						<br>
							<div>
								<p>Thứ 2</p>
                        	<li>
                                <label class="container">Sáng
								  <input type="checkbox" value="1" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Chiều
								  <input type="checkbox" value="2" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tối
								  <input type="checkbox" value="3" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li></div>
                            <div><p>Thứ 3</p>
                            <li>
                                <label class="container">Sáng
								  <input type="checkbox" value="4" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Chiều
								  <input type="checkbox" value="5" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tối
								  <input type="checkbox" value="6" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li></div>
                            <div><p>Thứ 4</p>
                           	<li>
                                <label class="container">Sáng
								  <input type="checkbox" value="7" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Chiều
								  <input type="checkbox" value="8" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tối
								  <input type="checkbox" value="9" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li></div>
							<div><p>Thứ 5</p>
                            <li>
                                <label class="container">Sáng
								  <input type="checkbox" value="10" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Chiều
								  <input type="checkbox" value="11" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tối
								  <input type="checkbox" value="12" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li></div>
							<div><p>Thứ 6</p>
                            <li>
                                <label class="container">Sáng
								  <input type="checkbox" value="13" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Chiều
								  <input type="checkbox" value="14" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tối
								  <input type="checkbox" value="15" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li></div>
							<div><p>Thứ 7</p>
                            <li>
                                <label class="container">Sáng
								  <input type="checkbox" value="16" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Chiều
								  <input type="checkbox" value="17" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tối
								  <input type="checkbox" value="18" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li></div>
							<div><p>Chủ nhật</p>
                            <li>
                                <label class="container">Sáng
								  <input type="checkbox" value="19" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Chiều
								  <input type="checkbox" value="20" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li>
                            <li>
                                <label class="container">Tối
								  <input type="checkbox" value="21" name="time[]">
								  <span class="checkmark"></span>
								</label>
                            </li></div>
                    </ul>	
				</div>	
				<input type="submit" value="Đăng ký" style="margin-bottom: 30px;">
					
			</form>
			
		    <script>

				$( "#formdkgs" ).validate({
				   rules: {
		                		hoten: {
									required: true,
									minlength: 4,
									maxlength:50
								},
								ngay:{
									required: true,
								},
								que:{
									required: true,
								},
								diachi:{
									required: true,
								},
								cmt:{
									required: true,
								},
								email:{
									required: true,
									email:true
								},
								sdt:{
									required: true,
									number:true,
									maxlength:12,
									minlength:10
								},
								password: {
									required: true,
									minlength: 3
								},
								repass:{
									required: true,
									equalTo: "#pass"
								}
								
		            },
		            messages: {
		                hoten: {
		                  required: "Bạn chưa nhập thông tin này",
		                  minlength: "Tên quá ngắn",
		                  maxlength:"Nhập tối đa 50 ký tự"
		                },
		                ngay:{
		                  required:  "Bạn chưa nhập thông tin này",
		                },
		                que:{
		                  required:  "Bạn chưa nhập thông tin này",
		                },
		                diachi:{
		                  required:  "Bạn chưa nhập thông tin này",
		                },
		                cmt:{
		                  required:  "Bạn chưa nhập thông tin này",
		                },
		                email:{
		                  required:  "Bạn chưa nhập thông tin này",
		                  email: "Email sai định dạng"
		                },
		                sdt:{
		                  required:  "Bạn chưa nhập thông tin này",
		                  maxlength: "Số điện thoại quá dài",
		                  minlength:" Số điện thoại quá ngắn",
		                  number: "Số điện thoại không được chứa ký tự chữ"
		                },
		                password: {
		                  required:  "Bạn chưa nhập thông tin này",
		                  minlength: "Mật khẩu quá ngắn"
		                },
		                repass:{
									
		                  			required:  "Bạn chưa nhập thông tin này",
									equalTo: "Mật khẩu không trùng nhau"
								}
		                
		      }
				});
				</script>
@endsection