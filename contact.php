<?php include ('header.php'); ?>
       <main id="content" class="content">
    <section class="contact" id="contact">
            <div class="contact-intro">
                <h2>Get in Touch</h2> <span class="underline"></span>
                <p>I hope you were able to get to know me a little better through here but if you want to find out more then I'd love to hear from you!</p> <a href="mailto:hello@brookekaminski.ca">hello@brookekaminski.ca<span class="screen-reader-text"> to email message</span></a> </div>
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