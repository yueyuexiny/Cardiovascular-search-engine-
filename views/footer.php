<section id="footer" class="footersection">
    <div class="container">
        <div class="row center-block">
            <div class="col-lg-12 ">
                <img src="./imgAHA/cardiovascularDDIFooter.png" class="img-responsivefooter" alt="DDI logo">
            </div>
            <div>


             <!--   <p class="muted text-center blackgray add_padding">Cardiovascular DDI..... is supported by the
                    <a href="http://grants.nih.gov/grants/guide/rfa-files/RFA-HL-14-031.html" target="_blank"
                       class="white hyperlink">National Institutes of Health</a>
                    through the ........, Grant 1U24AI117966-01.
                                    </p>-->
            </div>
        </div>
    </div>
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
