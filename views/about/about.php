<?php
/**
 * Created by PhpStorm.
 * User: xchen2
 * Date: 7/21/16
 * Time: 1:53 PM
 */

?>
<div class="container" style="background-color:#e56969; margin:30px auto">

    <h3 style="text-align:center"> OUR MISSION </h3>

    <p style="text-align:center">Develop a prototype cardiovascular data search engine.</p>
    <div class="about_box" style="background-color:white">
    		<br>
    
    		<p class="about_style">The main purpose of this website is to demonstrate a prototype cardiovascular data search engine. Its goal is to discover data sets across data repositories or data aggregators and present them through the 
    			interface that has been designed and developed based on the latest design and usability principals, making it a hub for researchers to fulfill their searching needs.
    			In addition, the website supports the NIH-endorsed<a style="color:#e56969" href="http://www.nature.com/articles/sdata201618"> FAIR </a> principles of Findability, Accessibility, Interoperability
            and Reusability of datasets with current functionality assisting in finding datasets and providing access information about them.</p>

        <p class="about_style">The data repositories included in this initial release have been selected by the team and represent a sample of cardiovascular datasets that are currently avaliable. 
        		We will include more datasets as we further develop the website.</p>

        <p class="about_style">Currently, AHA indexes the core metadata available for most datasets, but it offers enhanced search functions when repositories provide additional metadata.
            The Data Tag Suite <a style="color:#e56969" href ="https://biocaddie.org/group/working-group/working-group-3-descriptive-metadata-datasets"> (DATS)</a> metadata specification,
            v2.2 is the underlying metadata model which has evolved with input from the biomedical informatics community.</p>

        <p class="about_style">Please provide <a style="color:#e56969" href="./feedback.php"> suggestions </a>  on data repositories that we should cover as well as the quality of search results. This is a prototype in development and your valuable suggestions and comments will help us improve the system.</p>

        <p class="about_style" style="color: #e56969; font-size: 12px;"> * We respect your privacy and will not share your personal information except as needed for access to DataMed. </p>

        <p class="about_style" >   Contact us:</p>
    
       	<div id='contact_form_errorloc' class='err'></div>
        <form method="POST" name="contact_form" onsubmit="return confirm('Are you sure you want to submit?');"
              action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="about_style" data-toggle="validator">
            <div class="about_style" >
                
                <label for="pwd">Name *</label>
                <input type="text" aria-label="Enter your name" name="NAME" class="form-control" id="pwd" placeholder="Your name" required>

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

