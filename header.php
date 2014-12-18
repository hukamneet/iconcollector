
<div class="header" style="background:url(./images/background.jpg) no-repeat; height: 300px; ">
 <div class="menu" style="width:70%; height:60px; float:left; overflow:hidden; ">
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>
<a href="#">about us</a>
</li>
<li>
<a href="#">Upload Icon</a>
</li>
<li>
<a href="#">General</a>
</li>
<li>
<a href="#">Blog</a>
</li>
<li>
<a href="#">Privacy Policy</a>
</li>

</ul>
</div>
<!--
<div class="sign-menus">
<ul>
<li>
<a id="modal_trigger"  class="btn" href="#">Login</a>
</li>
<li>
<a href="#">Sign up</a>
</li>
</ul>
</div>
-->
   
<div class="container">
    <?php
    if(isset($_SESSION['userName']))
    {
    ?>
    <a id="" href="?account" class="btn" style="float: right; margin: 0; background-color: transparent; color: white; font-size: 16px; width: auto; "><h3 style="margin: 0;"><?php echo "Welcome ".$_SESSION['userName']; ?></h3></a>
    <?php
    }else
    {
    ?>
    <a id="modal_trigger" href="#modal" class="btn" style="float: right; margin: 0; background-color: transparent; color: white; font-size: 16px; width: 150px;">Login / register</a>
    <?php
    }
    ?>
	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>

		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>

					</a>

					
				</div>

				<div class="centeredText">
					<span>Or Use Your Email Address</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
                            <form id="login">
					<label>Email / Username</label>
                                        <input type="text" id="email" />
					<br />

					<label>Password</label>
                                        <input type="password" id="pass" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                                <div class="one_half last"><input type="submit" value="Login" class="btn btn_red"></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>

			<!-- Register Form -->
			<div class="user_register">
                            <form action="" id="signup" method="post">
                                        <label>Full Name</label>
                                        <input required="required" type="text" name="fname" id="fname" />
					<br />
					<label>User Name</label>
					<input required="required" type="text" id="uname" />
					<br />

					<label>Email Address</label>
					<input required="required" type="email" id="email" />
					<br />

					<label>Password</label>
					<input required="required" type="password" id="pass" />
					<br />

					<div class="checkbox">
						<input id="send_updates" type="checkbox" />
						<label for="send_updates">Send me occasional email updates</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                                <div class="one_half last"><input type="submit" class="btn btn_red" value="Register"></div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>

 <div id="search">
        <h1>ICONCOLLECTION</h1>
        <input type="search" placeholder="Search Icons"  />
    </div>

</div>