<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/contact.css">
    </head>
    
    <body>
        <!--<h1>CONTACT</h1>
        <div id="content">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">

                <label for="inputEmail" style="display:block;margin:0 0 10px 0" >Name and surname:</label>
                <input type="text" name="l_imePrezime" style="display:block;margin:0 0 10px 0;width:60%;padding:5px;" id="inputEmail" placeholder="Name and Surname">


                <label for="inputEmail"  style="display:block;margin:0 0 10px 0" >Email :</label>
                <input type="text" name="l_email" style="display:block;margin:0 0 10px 0;width:60%;padding:5px;" id="inputEmail" placeholder="Email">


                <div class="form-group" >
                  <label for="inputPassword" style="display:block;margin:0 0 10px 0" >Content :</label>

                    <textarea class="form-control" name="sadrzaj" rows="10" placeholder="Content" style="display:block;margin:0 0 10px 0;width:60%;padding:5px;"></textarea>
                    <button  class="btn-send" style="width:180px;background:rgb(30, 81, 128);border:0;color:#fff;padding:5px;border-radius:2px;" name ="dodaj" type"submit">Send</button>

                </div>
            </form>
        </div> -->
        <div class="kontakt-naslov">
            <h1 class="kontakt-heading">Contact us!</h1><br>
        </div>
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
    </body>
</html>