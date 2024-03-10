<!-- <section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 login-sec">
        <h3 class="text-center"><b></b></h3>
        <form  action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
            <input type="text" class="form-control" name="txtusername" placeholder="">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" name="txtpassword" placeholder="">
          </div>


          <div class="form-check">
            <button class="btn btn-primary float-right" type="submit" name="submit"> Đăng Nhập</button> 
            
          </div>

        </form>
        <div class="copy-text"><i class="fa fa-heart"></i> <a href="index.php?action=forget">Quên mật khẩu</a></div>
      </div>

    </div>
</section> -->


	<section class="ftco-section img js-fullheight" style="background-image: url(Content/login/images/bg.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Đăng nhập</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Bạn đã có tài khoản?</h3>
		      	<form action="index.php?action=dangnhap&act=dangnhap_action" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="txtusername" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="txtpassword" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Đăng nhập</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">

								</div>
								<div class="w-50 text-md-right">
									<a href="index.php?action=forget" style="color: #fff">Quên mật khẩu</a>
								</div>
	            </div>
	          </form>
	        
				</div>
			</div>
		</div>
	</section>






