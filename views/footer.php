<!--<section id="footer" class="footersection">
    <div class="container">
        <div class="row center-block">
            <div class="col-lg-12 ">
                <img src="./imgAHA/cardiovascularDDIFooter.png" class="img-responsivefooter" alt="DDI logo">
            </div>
            <div>


             <p class="muted text-center blackgray add_padding">Cardiovascular DDI..... is supported by the
                    <a href="http://grants.nih.gov/grants/guide/rfa-files/RFA-HL-14-031.html" target="_blank"
                       class="white hyperlink">National Institutes of Health</a>
                    through the ........, Grant 1U24AI117966-01.
                                    </p>
            </div>
        </div>
    </div>
</section>-->
<section id="footer">
    <footer class="footerbg">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="hidden-xs hidden-sm">
                        <img src="img/SBMI-logo.png" alt="UTHealth Logo" />
                    </div>
                    <div class="visible-xs visible-sm text-center" style="margin-bottom: 20px;">
                        <img src="img/SBMI-logo.png" alt="UTHealth Logo" />
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="footer-text-lg hidden-xs hidden-sm">
                        <p class="text-right">&copy; 2008 - <?php echo date("Y"); ?></p>
                        <p class="text-right">Supported by the AHA grant 17IG33660386  to UTHealth</p>
                        <p class="text-right">The University of Texas Health Science Center at Houston (UTHealth)</p>
                    </div>
                    <div class="footer-text-xs visible-xs visible-sm">
                        <p class="text-center">&copy; 2008 - <?php echo date("Y"); ?></p>
                        <p class="text-center">Supported by the AHA grant 17IG33660386  to UTHealth</p>
                        <p class="text-center">The University of Texas Health Science Center at Houston</p>
                        <h3 class="text-center">(UTHealth)</h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>

<?php
if (isset($scripts)) {
    foreach ($scripts as $script) {
        echo '<script type="text/javascript" src="' . $script . '"></script>';
        echo "\r\n";
    }
}
?>

<!--Usability Tracking-->
<script src="./js/usertesting.js"></script>

</body>

</html>
