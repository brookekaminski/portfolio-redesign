<?php 
$bodyClass = 'work';
$pageTitle = ' | London Fog Blog';
include ('header.php'); 
?>
    <main id="content" class="content">
        <article class="project-desc">
            <div class="title">
                <h2>London Fog Blog</h2> </div> <span class="underline"></span>
            <section> <span class="bold tools"> HTML | Sass | jQuery | Git | Illustrator </span>
                <div class="clear"></div>
                <p><span class="bold">In summary</span> This was a project we were basically given free range on, the only requirement was that it was a one page responsive website. Because we had just learned to use media queries, not only did I want to provide a fluid experience so users could view the website comfortably on any device but I wanted to provide unique experiences. I did this by having three different looks to the header in different queries. And I wanted to further explore media queries by having things change rather than just resize on different screens. The posts turn from a masonry style to a interlocking grid when switched to mobile to save screen space, for example.</p> <a class="button" href="http://bkaminski.htpwebdesign.ca/the-london-fog-blog/">View Live<span class="screen-reader-text"> external link to my school landing page</span></a> </section>
            <section class="screenshots">
                <picture>
                    <source srcset="images/lf-crop-1.jpg" media="(max-width: 480px)"> <img src="images/lf-1.jpg" alt="Website top with intro animated SVG"> </picture>
                <picture>
                    <source srcset="images/lf-crop-2.jpg" media="(max-width: 480px)"> <img src="images/lf-2.jpg" alt="View of website blog posts section"> </picture>
            </section>
            <section class="details">
                <h3 class="section-titles">Mobile View</h3>
                <div class="mobile">
                    <picture>
                        <source srcset="images/lf-crop-3.jpg" media="(max-width: 480px)"> <img src="images/lf-mobile-2.jpg" alt="View of website blog posts section"> </picture>
                    <picture>
                        <source srcset="images/lf-crop-4.jpg" media="(max-width: 480px)"> <img src="images/lf-mobile-1.jpg" alt="View of website blog posts section"> </picture>
                </div>
            </section>
            <h3 class="section-titles">Tablet View</h3>
            <section class="details"> 
               <div class="tablet">
                <img src="images/lf-tablet-1.jpg" alt="">
                </div> 
            </section>
        </article>
        <div class="next-prev"> <a href="portfolio.php">Previous Project</a> <a href="landing-page.php">Next Project</a> </div>
    </main>
    <?php 

include 'footer.php';

?>