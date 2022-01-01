
<?php
	if (isset($_POST['generate'])) {

		$post_uppr_case = $_POST['uppr_case'];
		$post_lower_case = $_POST['lower_case'];
		$post_numbers = $_POST['numbers'];
		$post_special_chars = $_POST['special_chars'];


		$uppr_case ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$lower_case ="abcdefghijklmnopqrstuvwxyz";
		$numbers ="0123456789";
		$special_chars ="!@#$%^&*()_+< >?:";

		$generate_uppr_case =	substr(str_shuffle($uppr_case), 0, $post_uppr_case);
		$generate_lower_case =	substr(str_shuffle($lower_case), 0, $post_lower_case);
		$generate_numbers =	substr(str_shuffle($numbers), 0, $post_numbers);
		$generate_special_chars =	substr(str_shuffle($special_chars), 0, $post_special_chars);


		  $mixed = "$generate_uppr_case$generate_lower_case$generate_numbers$generate_special_chars";

		  $sum = $post_uppr_case+$post_lower_case+$post_numbers+$post_special_chars;

		  $generate_mixed =	substr(str_shuffle($mixed), 0, $sum);

		}
?>
<!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Password Generator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />

		<!-- Stylesheet <-->

		<!-- Fontawesome CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" crossorigin="anonymous">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- normalize -->
        <link rel="stylesheet" href="assets/css/normalize.css">

		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700&display=swap" rel="stylesheet"> 
		
		
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!--===============================================
					Start Header Area Design
        ================================================ -->


			<div class="main">
				<div class="main_contetn">
					<div class="pass_top">
						<p>PASSWORD GENERATOR TOOL</p>
						<h1>Generate a secure password</h1>
						<h4>Use our online password generator to instantly create a secure, random password.</h4>
						
					</div>
						<form action="" method="POST">
							<div class="select_single_left">
								<div class="select_single">
									<label for="">Uppercase Value : </label>
									<select name="uppr_case" id="">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected>4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>  
								</div>

								<div class="select_single">
									<label for="">Lowercase Value : </label>
									<select name="lower_case" id="">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected>4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>
								</div>  

								<div class="select_single">
									<label for="">Numbers : </label>
									<select name="numbers" id="">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected>4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>  
									</div>

								<div class="select_single">
									<label for="">Special Characters : </label>
									<select name="special_chars" id="">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4"selected >4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select> 
								</div>
							</div>

							<div class="password_area">

								<div class="input_password_g">
									 <!-- The text field -->
									 <input type="text" value="<?php if(isset($generate_mixed)){echo $generate_mixed;}?>" id="myInput">
								 </div>
								<div class="input_password_btn">	
									 <input type="submit" value="Generate" name="generate">
								 </div>
								 <div class="input_password_btn">
							   		 <button onclick="myFunction()">Copy text</button> 
							   	</div>
							</div>
						</form>
				 </div>
				 <div class="main_content_top text-center">
				 	<h1>To prevent your passwords from being hacked by social engineering, brute force or dictionary attack method, and keep your online accounts safe, you should notice that.</h1>
				 	
				 </div>
					 <div class="main_contetn_content">
					 	<p>1. Do not use the same password, security question and answer for multiple important accounts.</p>
					 	<p>2. Use a password that has at least 16 characters, use at least one number, one uppercase letter, one lowercase letter and one special symbol.</p>
					 	<p>3. Do not use the names of your families, friends or pets in your passwords.</p>
					 	<p>4. Do not use postcodes, house numbers, phone numbers, birthdates, ID card numbers, social security numbers, and so on in your passwords.</p>
					 	<p>5. Do not use any dictionary word in your passwords. Examples of strong passwords: ePYHc~dS*)8$+V-' , qzRtC{6rXN3N\RgL , zbfUMZPE6`FC%)sZ. Examples of weak passwords: qwert12345, Gbt3fC79ZmMEFUFJ, 1234567890, 987654321, nortonpassword. </p>
					 	<p>6. Do not use two or more similar passwords which most of their characters are same, for example, ilovefreshflowersMac, ilovefreshflowersDropBox, since if one of these passwords is stolen, then it means that all of these passwords are stolen.</p>
					 	<p>7. Do not use something that can be cloned( but you can't change ) as your passwords, such as your fingerprints.</p>
					 	<p>8. Do not let your Web browsers( FireFox, Chrome, Safari, Opera, IE ) to store your passwords, since all passwords saved in Web browsers can be revealed easily.</p>
					 	<p>9. Do not log in to important accounts on the computers of others, or when connected to a public Wi-Fi hotspot, Tor, free VPN or web proxy.</p>
					 	<p>10. Do not send sensitive information online via unencrypted( e.g. HTTP or FTP ) connections, because messages in these connections can be sniffed with very little effort. You should use encrypted connections such as HTTPS, SFTP, FTPS, SMTPS, IPSec whenever possible.</p>
					 	<p>10. It's recommended to change your passwords every 10 weeks.</p>
					 	<p>11. It's recommended that you remember a few master passwords, store other passwords in a plain text file and encrypt this file with 7-Zip, GPG or a disk encryption software such as BitLocker, or manage your passwords with a password management software.</p>
					 	<p>12. 15. Encrypt and backup your passwords to different locations, then if you lost access to your computer or account, you can retrieve your passwords back quickly </p>
					 	<p>13. Turn on 2-step authentication whenever possible. </p>
					 	<p>14. 1 Do not store your critical passwords in the cloud.</p>
					 	<p>15.  Access important websites( e.g. Paypal ) from bookmarks directly, otherwise please check its domain name carefully, it's a good idea to check the popularity of a website with Alexa toolbar to ensure that it's not a phishing site before entering your password.</p>
					 	<p> 16. Protect your computer with firewall and antivirus software, block all incoming connections and all unnecessary outgoing connections with the firewall. Download software from reputable sites only, and verify the MD5 / SHA1 / SHA256 checksum or GPG signature of the installation package whenever possible.</p>
					 	<p>17. Keep the operating systems( e.g. Windows 7, Windows 10, Mac OS X, iOS, Linux ) and Web browsers( e.g. FireFox, Chrome, IE, Microsoft Edge ) of your devices( e.g. Windows PC, Mac PC, iPhone, iPad, Android tablet ) up-to-date by installing the latest security update.</p>
				 	
				 </div>
			</div>



        <!--===============================================
					End Header Area Design
        ================================================ -->
		
		
		
		
		<!-- Js Files -->
		<!-- modernizr -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

		<!-- jQuery -->
        <script type="text/javascript" src="assets/js/vendor/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Popper -->
        <script src="assets/js/popper.js"></script>

		<!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        
		<!-- Custom Scripts -->
        <script src="assets/js/main.js"></script>


        <script type="text/javascript" src="/App/durandal/amd/require.js" data-main="/App/main"></script>
		<script>
			function myFunction() {
			  var copyText = document.getElementById("myInput");
			  copyText.select();
			  document.execCommand("copy");
			}
			 var isNS = (navigator.appName == "Netscape") ? 1 : 0;
			 	if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
			 	function mischandler(){
			 	return false;
			 	}
			 	function mousehandler(e){
			 	var myevent = (isNS) ? e : event;
			 	var eventbutton = (isNS) ? myevent.which : myevent.button;
			 	if((eventbutton==2)||(eventbutton==3)) return false;
			 	}
			    document.oncontextmenu = mischandler;
				document.onmousedown = mousehandler;
				document.onmouseup = mousehandler;

		</script>

    </body>
</html>
