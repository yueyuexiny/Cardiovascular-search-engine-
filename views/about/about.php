<?php
/**
 * Created by PhpStorm.
 * User: xchen2
 * Date: 7/21/16
 * Time: 1:53 PM
 */

?>
<div class="container" style="background-color:#DCDCDC">

    <h3 style="text-align:center"> OUR MISSION </h3>

    <p style="text-align:center">Develop a prototype of a cardiovascular research data discovery index.</p>
    <div class="about_box" style="background-color:white">
        <br>

        <!-- <p style="text-align:center;font-size:20px">              About</p>-->

        <p class="about_style">Something about Cardiovascular Research Data Discovery Index System </p>

        <p class="about_style" >   Contact us:</p>

        <div id='contact_form_errorloc' class='err'></div>
        <form method="POST" name="contact_form" onsubmit="return confirm('Are you sure you want to submit?');"
              action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="about_style" data-toggle="validator">
            <div class="about_style" >
                <label for="name">Name *</label>
                <input type="text" name="NAME" class="form-control" id="pwd" placeholder="Your name" value="<?php echo $name;?>" required>


                <label for="email">E-mail address *</label>
                <input type="email" name="EMAIL" class="form-control" id="email" placeholder="Your email"  value="<?php echo $email;?>"required>
                <div class="form-group">
                    <label for="">Subject *</label>
                    <input type="text" name="SUBJECT" class="form-control" id="subject" value="<?php echo $subject;?>" required >
                </div>
                <div class="form-group">
                    <label for="">Message * </label>
                    <textarea type="text" name="MESSAGE" class="form-control" id="message" rows="4" required><?php echo htmlspecialchars($message)?></textarea>
                </div>
                <?php if(!empty($errors)) {
                    echo "<p class='err' style='color:red'>" . nl2br($errors) . "</p>";
                }	?>

                <p>
                    <img src="lib/html-contact-form-captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
                    <label for='message'>Enter the code above here :</label><br>
                    <input id="6_letters_code" name="6_letters_code" type="text"><br>
                    <small>Can't read the image? click <a href='javascript: refreshCaptcha();' class="hyperlink">here</a> to refresh</small>
                </p>
                <div class="row" >
                    <div class ="col-md-1">
                        <!--<input type="submit" value="Submit" name='submit'  class="btn btn-warning" onclick="process()" id="submitBtn" style="margin-bottom: 20px">-->
                        <input type="submit" value="Submit" name='submit'  class="btn btn-warning"  id="submitBtn" style="margin-bottom: 20px">
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

