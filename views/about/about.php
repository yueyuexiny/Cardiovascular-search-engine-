<?php
/**
 * Created by PhpStorm.
 * User: xchen2
 * Date: 7/21/16
 * Time: 1:53 PM
 */

?>
<div class="container">
<h1 > <span style="text-align:center;background-color: #000000;color:#ffffff">OUR MISSION: </span></h1>
    <span style="text-align:center;background-color: #000000;color:#ffffff">Develop a prototype of a cardiovascular research data discovery index.</span>
    <div class="about_box" style="background-color:white">
       <div id='contact_form_errorloc' class='err'></div>
        <form method="POST" name="contact_form" onsubmit="return confirm('Are you sure you want to submit?');"
              action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="about_style" data-toggle="validator">
            <div class="about_style" >
                <div class="form-group">
                <label for="pwd">Name *</label>
                <input type="text" aria-label="Enter your name" name="NAME" class="form-control" id="pwd" placeholder="Your name" required>
                </div>
                <label for="email">E-mail address *</label>
                <input type="email" aria-label="Enter your email" name="EMAIL" class="form-control" id="email" placeholder="Your email"required>
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" name="SUBJECT" aria-label="Enter subject here" class="form-control" id="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message * </label>
                    <textarea type="text" name="MESSAGE" aria-label="Please let us know how we can help you" aria-multiline="true" class="form-control" id="message" rows="4" required><?php echo htmlspecialchars($message)?></textarea>
                </div>
                <?php if(!empty($errors)) {
                    echo "<p class='err' style='color:red'>" . nl2br($errors) . "</p>";
                }	?>
                <p>
                <img aria-label="Captcha image" alt= "Captcha image" src="lib/html-contact-form-captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
                <label for='message'>Enter the code above here :</label><br>
                <input id="6_letters_code" name="6_letters_code" type="text" aria-label="Captcha code goes here"><br>
                <small>Can't read the image? click <a href='javascript: refreshCaptcha();' class="hyperlink">here</a>to refresh</small>
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

