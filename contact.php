<?php 
$bodyClass = 'contact';
$pageTitle = ' | Contact';
include 'header.php';

// contact form secure from Jem's PHP Mail Form

$yourEmail = "hello@brookekaminski.ca";
$maxPoints = 4;
$requiredFields = "name,email,message";

$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

function clean($data) {
	$data = trim(stripslashes(strip_tags($data)));
	return $data;
}
function isBot() {
	$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

	foreach ($bots as $bot)
		if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
			return true;

	if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
		return true;
	
	return false;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isBot() !== false)
		$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
		
	$points = (int)0;
	
	$badwords = array("adult", "blackjack", "backgammon", "texas", "holdem", "poker", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

	foreach ($badwords as $word)
		if (
			strpos(strtolower($_POST['message']), $word) !== false || 
			strpos(strtolower($_POST['name']), $word) !== false
		)
			$points += 2;
	
	if (strpos($_POST['message'], "http://") !== false || strpos($_POST['message'], "www.") !== false)
		$points += 2;
	if (isset($_POST['nojs']))
		$points += 1;
	if (preg_match("/(<.*>)/i", $_POST['message']))
		$points += 2;
	if (strlen($_POST['name']) < 3)
		$points += 1;
	if (strlen($_POST['message']) < 15 || strlen($_POST['message']) > 1500)
		$points += 2;
	if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $_POST['message']))
		$points += 1;
	// end score assignments

	if ( !empty( $requiredFields ) ) {
		foreach($requiredFields as $field) {
			trim($_POST[$field]);
			
			if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please fill in all the required fields and submit again.\r\n")
				$error_msg[] = "Please fill in all the required fields and submit again.";
		}
	}

	if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name'])))
		$error_msg[] = "The name field must not contain special characters.\r\n";
	if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
		$error_msg[] = "That is not a valid e-mail address.\r\n";
	if (!empty($_POST['url']) && !preg_match('/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i', $_POST['url']))
		$error_msg[] = "Invalid website url.\r\n";
	
	if ($error_msg == NULL && $points <= $maxPoints) {
		$subject = "Automatic Form Email";
		
		$message = "You received this e-mail message through your website: \n\n";
		foreach ($_POST as $key => $val) {
			if (is_array($val)) {
				foreach ($val as $subval) {
					$message .= ucwords($key) . ": " . clean($subval) . "\r\n";
				}
			} else {
				$message .= ucwords($key) . ": " . clean($val) . "\r\n";
			}
		}
		$message .= "\r\n";
		$message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
		$message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
		$message .= 'Points: '.$points;

		if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
			$headers   = "From: $yourEmail\r\n";
		}
		$headers  .= "Reply-To: {$_POST['email']}\r\n";

		if (mail($yourEmail,$subject,$message,$headers)) {
				$result = 'Your mail was successfully sent.';
				$disable = true;
		} else {
			$error_msg[] = 'Your mail could not be sent this time. ['.$points.']';
		}
	} else {
		if (empty($error_msg))
			$error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
	}
}
function get_data($var) {
	if (isset($_POST[$var]))
		echo htmlspecialchars($_POST[$var]);
}
?>
    <main id="content" class="content">
        <section class="contact-page" id="contact-page">
            <div class="contact-intro">
                <h2>Get in Touch</h2> <span class="underline"></span>
                <p>I hope you were able to get to know me a little better through here but if you want to find out more then I'd love to hear from you!</p> <a href="mailto:hello@brookekaminski.ca">hello@brookekaminski.ca<span class="screen-reader-text"> to email message</span></a> </div>
            <div class="form">
                    <?php
if (!empty($error_msg)) {
	echo '<p class="error">Oops! '. implode("<br />", $error_msg) . "</p>";
}
if ($result != NULL) {
	echo '<p class="success">'. $result . "</p>";
}
?>
                <form action="<?php echo basename(__FILE__); ?>" method="post">
                    <noscript>
                            <input type="hidden" name="nojs" id="nojs" />
                    </noscript>
                        <label for="name"></label>
                        <input type="text" name="name" id="name" value="<?php get_data(" name "); ?>" placeholder="name" />
                        <br />
                        <label for="email"></label>
                        <input type="text" name="email" id="email" value="<?php get_data(" email "); ?>" placeholder="e-mail" />
                        <br />
                        <label for="message"></label>
                        <textarea name="message" id="message" rows="8" cols="20" placeholder="message"><?php get_data("message"); ?></textarea><br /> 
                        <input type="submit" name="submit" id="submit" value="Send" <?php if (isset($disable) && $disable===true) echo ' disabled="disabled"'; ?> />
                </form>
            </div>
        </section>
    </main>
    <?php include('footer.php'); ?>