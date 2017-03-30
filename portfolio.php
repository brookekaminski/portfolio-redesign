<?php 
$bodyClass = 'portfolio';
$pageTitle = ' | Portfolio';
include ('header.php'); 
?>
    <main id="content" class="content">
        <article class="project-desc">
            <div class="title">
                <h2>Portfolio</h2> </div> <span class="underline"></span>
            <section> <span class="bold tools"> HTML | SCSS | jQuery | PHP | Git | Adobe AI, PS, XD</span>
                <div class="clear"></div>
                <p><span class="bold">This is me | </span>My portfolio is meant to showcase work, so I wanted it to be simple and quick to use to not waste anyone’s time. I focused on this by making sure everything was optimized. The design is simple and clean to make it easy to view information efficiently. Also, I care about inclusive design so I wanted to ensure it was easy to view and use for all users by being mindful of users of screen readers and keyboard only.</p> <a class="button" href="https://brookekaminski.ca/">View Live<span class="screen-reader-text"> internal link to my portfolio home page</span></a> </section>
            <div class="clear"></div>
            <section class="screenshots">
                <picture>
                    <source srcset="images/p-crop-1.jpg" media="(max-width: 480px)"> <img src="images/p-0.jpg" alt="Portfolio project page header"> </picture>
            </section>
            <section class="details">
                <h3 class="section-titles">Planning</h3>
                <p> I started by getting an idea of what the content would be and made some rough wireframes to lay it all out. I was pretty set on a simple layout framed by a thick border with an image gallery of my projects. </p>
                <div class="wireframes"> <img src="images/mobile-wire.jpg" alt=""> <img src="images/desktop-wire.jpg" alt=""> </div>
            </section>
            <section class="details">
                <h3 class="section-titles">Mobile Process</h3>
                <p>After learning how to approach a website desktop down, I wanted to make sure I also went mobile first. Below are my design iterations, I like to start with visual mockups. This usually helps me work out some of the design bugs as I typically do more than one. Because this is my portfolio, I did more than usual which ended up being roughly 5 variations.</p>
                <div class="mobile">
                    <picture> <img src="images/p-ver-0.jpg" alt="Mobile view of portfolio front page version 1"> </picture>
                    <picture> <img src="images/p-ver-1.jpg" alt="Mobile view of portfolio front page version 2"> </picture>
                    <picture> <img src="images/p-ver-2.jpg" alt="Mobile view of portfolio front page version 3"> </picture>
                    <picture> <img src="images/p-mobile-1.jpg" alt="Mobile view of portfolio front page current version"> </picture>
                </div>
            </section>
            <section class="details">
                <h3 class="section-titles">Continued Process</h3> 
                <p>I went from having a gallery on the front page to a single page website to what it is now.</p>
                <div class="desktop">
                    <img src="images/p-ver-2.1.jpg" alt="Tablet view of portfolio front page version 3">    
                    <img src="images/p-ver-3.jpg" alt="Tablet view of portfolio front page version 4">   
                </div> 
            </section>
                 <section class="details">
                <h3 class="section-titles">Navigation</h3> 
                <p>Initially set on an overlay navigation because I like the aesthetics of it. However, as I used my own website I found it a bit irritating to have a full screen navigation take over the entire screen. I then did some UX research and thought that having an accessible navigation on the bottom so it is easily reached and that hides on scroll to save screen real estate would make for the best UX in this case.</p>
                <div class="nav-details">
                    <picture> 
                        <img src="images/p-nav-1.jpg" alt="">
                    </picture>
                    <picture>
                        <img src="images/p-nav-2.jpg" alt="">
                    </picture>
                </div>
                </section>
<!--
            
                         <section class="details">
                <h3 class="section-titles">Logo Design</h3>
                <div class="logos">
                    <img src="images/logo-1.jpg" alt="">
                    <img src="images/logo-2.jpg" alt="">
                </div>
            </section>

            <section class="details">
-->
<!--                <h3 class="section-titles">Security</h3> </section> -->
                         
                <a class="button" href="https://github.com/brookekaminski/portfolio-redesign" target="_blank">View Code<span class="screen-reader-text"> external link to portfolio project on github</span></a>
            <div class="clear"></div>
        </article>
        <div class="next-prev"> <a href="client-project.php">Previous Project</a> <a href="london-fog.php">Next Project</a> </div>
    </main>
    <?php 

include 'footer.php';

?>