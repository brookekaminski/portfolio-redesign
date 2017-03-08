<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Brooke Kaminski, a Vancouver trained and Toronto based Web Designer and Developer Portfolio.">
    <title>Brooke Kaminski | Web Designer/Developer Portfolio <?php echo $pageTitle; ?></title>
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://use.typekit.net/pwx0uko.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        }
        catch (e) {}
    </script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o)
                , m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-88004634-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body class="<?php echo $bodyClass; ?>">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
   
    <header> <a class="logo" href="index.php"><h1><span>B</span>ro<br>o<span>K</span>e</h1></a>
        <nav class="nav">
            <ul>
                <li><a class="home-link" href="index.php">Home</a></li>
                <li><a class="work-link" href="work.php">Work</a> </li>
                <li><a class="about-link" href="about.php">About</a></li>
                <li><a class="contact-link" href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>