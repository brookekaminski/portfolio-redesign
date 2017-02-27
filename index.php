<?php include ('header.php'); ?>
    <main id="content" class="content">
        <div class="intro">
            <div class="intro-container">
                <h2>Hey There</h2> <span class="underline"></span> </div>
            <section class="intro-container">
                <p><span class="bold">What I'm About </span>I'm a freshly created web designer/developer who just graduated in March 2017 from BCIT's Technical Web Designer program in Vancouver, BC. But I've made my way over to Toronto to experience life in a new city.</p>
                <p>I walk the line between developing and design. I have a passion for accessible, clean code that not only functions smoothly but also looks and feels good to use. If for some reason this is interesting to you, why not <a href="about.php">read more<span class="screen-reader-text"> link to about page</span></a>...</p>
            </section>
        </div>
        <div class="dark-contain">
        <section class="projects">
            <div class="project-intro">
                <h2>Projects</h2> <span class="underline"></span>
                <p>Come take a look at some of the projects I did in school. I'm showcasing a few to show my range of skills, from working with external clients to being left to my imagination to create whatever vision I had...</p>
            </div>
            <div class="previews">
                <div class="col">
                    <div class="box">
                        <a href="#">
                           <span class="screen-reader-text"> link to client project details page</span>
                            <div class="text">
                                
                                <h3>Client Project</h3>
                                
                                <p>Bella Coastal Events site redesign with team of 3.</p>
                                
                                <button>View Details<span class="screen-reader-text"> of client project</span></button>
                                
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="box">
                        <a href="#">
                            <div class="text">Portfolio</div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="box">
                        <a href="london-fog.php">
                            <div class="text">London Fog</div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="box">
                        <a href="landing-page.php">
                            <div class="text">Landing Page</div>
                        </a>
                    </div>
                </div>
                
            </div>
        </section>
        </div>
        <section class="contact">
           <div class="contact-intro">
            <h2>Get in Touch</h2> <span class="underline"></span>
            <p>I hope you were able to get to know me a little better through here but if you want to find out more then I'd love to hear from you!</p> <a href="mailto:hello@brookekaminski.ca">hello@brookekaminski.ca<span class="screen-reader-text"> to email message</span></a>
            </div>
            <div class="form">
                <form method="post" action="submit.php">
                    <label for="name"></label>
                    <input type="text" name="name" id="name" value="" placeholder="name" />
                    <label for="subject"></label>
                    <input type="text" name="subject" id="subject" placeholder="subject" />
                    <br>
                    <label for="email"></label>
                    <input type="text" name="email" id="email" placeholder="e-mail" />
                    <label for="message"></label>
                    <textarea name="message" rows="8" cols="10" id="message" placeholder="message"></textarea>
                    <input type="submit" name="submit" value="Send" class="submit" /> </form>
            </div>
        </section>
    </main>
    
    <?php include('footer.php'); ?>