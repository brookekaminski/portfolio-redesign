<?php 
$bodyClass = 'work';
$pageTitle = ' | Landing Page';
include ('header.php'); 
?>
    <main id="content" class="content">
                <article class="project-desc">
            <div class="title">
                <h2>Landing Page</h2> </div> <span class="underline"></span>
            <section>
                               <span class="bold tools"> HTML | CSS | jQuery | Photoshop </span>
                               <div class="clear"></div>
                <p><span class="bold">All these weird things that I’ve done | </span>This is a bit of an odd project for me to include. However, I wanted to showcase this project not based on whether I believe it was a great web project or not but to show my attitude towards my work. As it was the second project we did after learning HTML and CSS, it definitely has room for code improvement (making it responsive!). I got into my mind that I wanted a double exposure portrait, where the video faded into a photo to create the effect. This was for my personal landing page at school, and I wanted to do something that would showcase my personality. I love working with film and the entire dark room process so I wanted to translate that to the web.</p>
                <p>If I get an idea, I will try to execute it. I will give it my all to try to make it work. I will go into the ocean in October and stand in the icy waves until my vision becomes reality. And then I will laugh about it.</p> <a class="button" href="http://bkaminski.htpwebdesign.ca/">View Live<span class="screen-reader-text"> external link to my school landing page</span></a> </section>
            <section class="screenshots">
                <picture>
                    <source srcset="images/lp-crop-1.jpg" media="(max-width: 480px)"> <img src="images/lp-1.jpg" alt="Intro GIF frame of me in ocean"> </picture>
                <picture>
                    <source srcset="images/lp-crop-2.jpg" media="(max-width: 480px)"> <img src="images/lp-2.jpg" alt="GIF fading into my portrait"> </picture>
                <picture>
                    <source srcset="images/lp-crop-3.jpg" media="(max-width: 480px)"> <img src="images/lp-3.jpg" alt="Resulting double exposure portrait from previous fading GI"> </picture>
            </section>
        </article>
            <div class="next-prev"> 
                <a href="london-fog.php">&lt; Previous Project</a> 
                <a href="client-project.php">Next Project &gt;</a>
            </div>
    </main>
    <?php 

include 'footer.php';

?>