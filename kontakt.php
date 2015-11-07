<!DOCTYPE html>
<html>
	<head>
		<title>About Sarajevo | Desing Sprint</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		 <link rel="stylesheet" href="css/contact.css">
		<link rel="shortcut icon" href="favicon.ico">
		<meta charset="UTF-8">
		<!-- open graph -->
            <meta property="og:title" content="Design Sprint" />
            <meta property="og:url" content="http://designsprint.eestec-sa.ba"/>
            <meta property="og:site_name" content="Design Sprint"/>
            <meta property="og:description" content="Design sprint is an international workshop for creative electrical engineering students, with a purpose of teaching new graphical design skills. "/>
            <meta property="og:image" content="http://designsprint.eestec-sa.ba/img/og.png"/>
	</head>
	<body>

		<div class="nav-bar">

			<div class="block-container">
				<div class="logo">
					<a href="index.html"><img src="img/DSLogo66.png" /></a>
				</div>
				<a href="kontakt.php" class="dugme"><b>Contact us</b></a>	
				<a href="schedule.html" class="dugme"><b>Schedule</b></a>
				<a href="organizers.html" class="dugme"><b>Organizers</b></a>
				<a href="lcsarajevo.html" class="dugme"><b>EESTEC LC Sarajevo</b></a>
				<a href="aboutsarajevo.html" class="dugme" style="color: #8db0b0"><b>Sarajevo</b></a>
				<a href="designsprint.html" class="dugme"><b>Design Sprint</b></a>
				<a href="index.html" class="dugme"><b>Home</b></a>
			</div>
		</div>

		<div class="cover-sarajevo"></div>
		<div class="block-container">
			<!-- Block sa tekstom -->
			<div class="block-50precent">
				<div class="tekst">
					<div class="naslov">
						<div class="kontakt-naslov">
				            Contact us!
				        </div>	
					</div>
					<div class="info">
					
			        <form class="kontakt-forma" method="post" action="contact.php">
			            <label class="kontakt-labela">Name:</label>
			            <input class="kontakt-text" type="text" name="ime"><br><br>

			            <label class="kontakt-labela">Email:</label>
			            <input class="kontakt-text" type="email" name="email"><br><br>

			            <label class="kontakt-labela">Message:</label>
			            <textarea class="kontakt-pitanje" name="pitanje"></textarea><br><br>
			            
			            <input id="dugme-kontakt" type="submit" value="Submit" name="dodaj">
			        </form>



				        <?php
				            if(isset($_REQUEST['dodaj'])){
				                $imePrezime = $_POST['ime'];
				                $email = $_POST['email'];
				                $sadrzaj = $_POST['pitanje'];
				                if(strlen($imePrezime) > 5 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
				                    $message = "Ime i prezime: ".$imePrezime."<br/>Email: ".$email."<br/><br/>".$sadrzaj;
				                    $message = nl2br($message);
				                    //send mail
				                    $eol = PHP_EOL;
				                    $from = "noreply@ds.eestec-sa.ba";
				                    $subject = "[DS] Contact form!";
				                    $separator = md5(time());
				                    // glavni headeri
				                    $headers  = "From: ".$from.$eol;
				                    $headers .= "Reply-To: ".$from.$eol;
				                    $headers .= "MIME-Version: 1.0".$eol;
				                    $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol;
				                    $headers .= "Content-Transfer-Encoding: 7bit".$eol;
				                    $headers .= "This is a MIME encoded message.".$eol.$eol;
				                    // message
				                    $headers .= "--".$separator.$eol;
				                    $headers .= "Content-Type: text/html; charset=\"UTF-8\"".$eol;
				                    $headers .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
				                    $headers .= $message.$eol.$eol;
				                    // send message
				                    mail("mirza.ohranovic@gmail.com", $subject, "", $headers);
				                    mail("emir.dj93@gmail.com", $subject, "", $headers);
				                    echo '<script>alert("Sent!");</script>';
				                    //header("location:index.php");*/
				                }
				                else {
				                    echo '<script>alert("Invalid name/email!");</script>';
				                }
				            }
				            ob_end_flush();
				        ?>
				    </div>
		       </div>
		    </div>
			<div class="block-50precent">
					<div class="pictures">
					<iframe width="600" height="450" frameborder="0" style="border:0;" 
src="https://www.google.com/maps/embed/v1/view?zoom=11&center=43.8563,18.4131&key=AIzaSyA5kc9YuksnJSzZD07jzEISHGFqWfOScWk" allowfullscreen></iframe>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div>
		<div class="footer">
			<div class="block-container">
				<div class="block-33precent">
					<div style="width:20px;height:20px;"></div>
				</div>
				<div class="block-33precent">
					<div style="color:#fff;padding:20px;">


						<a href="https://www.facebook.com/eestecsarajevo" target="_blank"><img class="hoverfb" src="img/fb.png" style="float:left;margin-bottom:10px;" /> <span style="line-height:46px;margin-left:20px;">Facebook</span></a>
							<div style="clear:both;"></div>
						<a href="https://instagram.com/eestec_lc_sarajevo/" target="_blank"><img class="hoverig" src="img/ig.png" style="float:left;margin-bottom:10px;" /> <span style="line-height:46px;margin-left:20px;">Instagram</span> </a>
							<div style="clear:both;"></div>
						<a href="https://twitter.com/eestecSarajevo" target="_blank"><img class="hovertw" src="img/tw.png"  style="float:left;margin-bottom:10px;"/> <span style="line-height:46px;margin-left:20px;">Twitter</span></a>
							<div style="clear:both;"></div>
						<img src="img/footer-logo.png" style="width:50%;"/>
							<div style="clear:both;"></div><br />
					</div>
				</div>
				<div class="block-33precent">
					<div style="color:#fff;padding:20px;">
					<b>Contact Info</b>
						<br />
							<br />
					<b>Delila Smajlović</b><br />
					<a href="mailto:delila.smajlovic@eestec-sa.ba">delila.smajlovic@eestec-sa.ba</a><br />
					Event Contact Person
						<br />
							<br />
							<b>Mirza Kupusović</b><br />
							<a href="mailto:mirza.kupusovic@eestec-sa.ba">mirza.kupusovic@eestec-sa.ba</a><br />
							Head Organizer
							<br />
								<br />
								<b>Besim Arnautović</b><br />
								<a href="besim.arnautovic@eestec-sa.ba">besim.arnautovic@eestec-sa.ba<br />
								PR Team Leader
					</div>
				</div>


			</div>
		</div>


	</body>
</html>
