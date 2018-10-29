<?php

$pageTitle = "Faq";
require_once 'Model/TrackActivity.php';

?>

<?php include 'views/header.php'; ?>

<section class="cd-faq">
    <div class="page-container" style="margin-bottom: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="cd-faq-categories">
                        <li><a href="#content" class="selected">Data content and quality</a></li>
                        <li><a href="#searching">Searching results and display</a></li>
                        <li><a href="#usability">General Usability</a></li>
                    </ul>
                </div>
                <div class="col-md-9 cd-faq-items">
                    <ul id="content" class="cd-faq-group">
                        <li class="cd-faq-title"><h4>Data content and quality</h4></li>
                        <li>
                            <a class="cd-faq-trigger">How do I change my
                                password?</a>
                            <div class="cd-faq-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis
                                    delectus
                                    corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi
                                    non
                                    a
                                    ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum
                                    et.
                                    Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit
                                    iste
                                    delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut
                                    quidem!
                                    Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime
                                    culpa
                                    nam
                                    soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem
                                    atque
                                    quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at.
                                    Aperiam.</p>
                                <!-- cd-faq-content -->
                        </li>

                        <li>
                            <a class="cd-faq-trigger" href="#0">How do I sign up?</a>
                            <div class="cd-faq-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate et
                                    laudantium
                                    esse
                                    adipisci consequatur modi possimus accusantium vero atque excepturi nobis in
                                    doloremque
                                    repudiandae soluta non minus dolore voluptatem enim reiciendis officia voluptates,
                                    fuga
                                    ullam?
                                    Voluptas reiciendis cumque molestiae unde numquam similique quas doloremque non,
                                    perferendis
                                    doloribus necessitatibus itaque dolorem quam officia atque perspiciatis dolore
                                    laudantium dolor
                                    voluptatem eligendi? Aliquam nulla unde voluptatum molestiae, eos fugit ullam,
                                    consequuntur,
                                    saepe voluptas quaerat deleniti. Repellendus magni sint temporibus, accusantium rem
                                    commodi?</p>
                            </div> <!-- cd-faq-content -->
                        </li>

                        <li>
                            <a class="cd-faq-trigger" href="#0">Can I remove a post?</a>
                            <div class="cd-faq-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident
                                    officiis,
                                    reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore
                                    fugit,
                                    magnam,
                                    reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                            </div> <!-- cd-faq-content -->
                        </li>
                    </ul>
                    <ul id="searching" class="cd-faq-group ">
                        <li class="cd-faq-title"><h4>Searching results and display</h4></li>
                        <li>
                            <a class="cd-faq-trigger">How do I change my password?</a>
                            <div id="contentFirst" class="collapse cd-faq-content"
                            ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus
                                corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non
                                a
                                ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et.
                                Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit
                                iste
                                delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem!
                                Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa
                                nam
                                soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem
                                atque
                                quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                            <!-- cd-faq-content -->
                        </li>

                    </ul>
                    <ul id="usability" class="cd-faq-group ">
                        <li class="cd-faq-title"><h4>General Usability</h4></li>
                        <li>
                            <a class="cd-faq-trigger">How do I change my password?</a>
                            <div id="contentFirst" class="collapse cd-faq-content"
                            ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus
                                corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non
                                a
                                ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et.
                                Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit
                                iste
                                delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem!
                                Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa
                                nam
                                soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem
                                atque
                                quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                            <!-- cd-faq-content -->
                        </li>
                        <li>
                            <a class="cd-faq-trigger">How do I change my password?</a>
                            <div id="contentFirst" class="collapse cd-faq-content"
                            ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus
                                corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non
                                a
                                ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et.
                                Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit
                                iste
                                delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem!
                                Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa
                                nam
                                soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem
                                atque
                                quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                            <!-- cd-faq-content -->
                        </li>
                        <li>
                            <a class="cd-faq-trigger">How do I change my password?</a>
                            <div id="contentFirst" class="collapse cd-faq-content"
                            ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus
                                corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non
                                a
                                ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et.
                                Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit
                                iste
                                delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem!
                                Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa
                                nam
                                soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem
                                atque
                                quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                            <!-- cd-faq-content -->
                        </li>
                        <li>
                            <a class="cd-faq-trigger">How do I change my password?</a>
                            <div id="contentFirst" class="collapse cd-faq-content"
                            ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus
                                corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non
                                a
                                ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et.
                                Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit
                                iste
                                delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem!
                                Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa
                                nam
                                soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem
                                atque
                                quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                            <!-- cd-faq-content -->
                        </li>
                        <li>
                            <a class="cd-faq-trigger">How do I change my password?</a>
                            <div id="contentFirst" class="collapse cd-faq-content"
                            ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus
                                corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non
                                a
                                ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et.
                                Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit
                                iste
                                delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem!
                                Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa
                                nam
                                soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem
                                atque
                                quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                            <!-- cd-faq-content -->
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.page-container-->
    <a href="#0" class="cd-close-panel">Close</a>
</section>
<?php include 'views/footer.php'; ?>
