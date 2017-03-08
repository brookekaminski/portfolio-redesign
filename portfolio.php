<?php 
$bodyClass = 'portfolio';
$pageTitle = ' | Portfolio';
include ('header.php'); 
?>
    <main id="content" class="content">
                <article class="project-desc">
            <div class="title">
                <h2>Portfolio</h2> </div> <span class="underline"></span>
            <section>
                               <span class="bold tools"> HTML | SASS | jQuery | PHP | Git | Adobe AI | Adobe XD</span>
                               <div class="clear"></div>
                <p><span class="bold">This is me</span> My portfolio is meant to showcase work, so I wanted it to be simple, fast, and easy to use to not waste anyone’s time. I focused on this by making sure everything was optimized. Also, I care about inclusive design so I wanted to make sure it was easy to view and use for all users by being mindful of users of screen readers and keyboard only.</p>
                <p>I also want to talk about my process on this portfolio because I feel as thought it represents my work flow quite well. I usually have a bunch of ideas and then I’ll write/draw a terrible drawing so I’ll remember it for later. Then I’ll realize that it’s too over the top and I need to simplify and focus on content. I’ll get a rough idea of what the content will be and I start mobile up so i ensure that only necessary content is used. Then I created some wireframes in Illustrator. Then I discovered Adobe’s beta Experience Design (XD) and fell in love. Then I went crazy making pretty mock-ups. Usually I go with one idea and just improve upon it as I code it. However I think because the portfolio is so personal it took awhile for my to find a design I was happy with. </p> 
                <a class="button" href="https://brookekaminski.ca/">View Live<span class="screen-reader-text"> internal link to my portfolio home page</span></a> </section>
            <section class="screenshots">
                <picture>
                    <source srcset="images/p-crop-1.jpg" media="(max-width: 480px)"> 
                    <img src="images/p-0.jpg" alt="Portfolio project page header"> 
                </picture>
            </section>
                          <h3>Mobile Process</h3>
              <section class="mobile">
                       

                   
                    <picture>
                    <source srcset="images/lf-crop-3.jpg" media="(max-width: 480px)"> <img src="images/p-ver-1.jpg" alt="View of website blog posts section"> 
                    </picture>
                     <picture>
                    <source srcset="images/lf-crop-4.jpg" media="(max-width: 480px)"> <img src="images/p-ver-2.jpg" alt="View of website blog posts section"> 
                    
                </picture>
                                       <picture>
                    <source srcset="images/lf-crop-4.jpg" media="(max-width: 480px)"> <img src="images/p-mobile-1.jpg" alt="View of website blog posts section"> 
                    
                </picture>
                    </section>
        </article>
            <div class="next-prev"> 
                <a href="client-project.php">Previous Project</a> 
                <a href="london-fog.php">Next Project</a>
            </div>
    </main>
    <?php 

include 'footer.php';

?>