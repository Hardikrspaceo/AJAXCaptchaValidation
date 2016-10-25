<html>
<head>
    <title>Contact us</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/captcha.js"></script>
</head>
<body>

    <div class="container">
        <form id="contact" action="javascript:void(0)" method="post" onsubmit="submit_form()">
            <h3>Contact Form</h3>
            <h4>Contact us for any query</h4>
            <fieldset>
                <input placeholder="Your name" type="text" tabindex="1" autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="text" tabindex="2">
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number (optional)" type="text" tabindex="3">
            </fieldset>
            <fieldset>
                <input placeholder="Your Web Site (optional)" type="text" tabindex="4">
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your message here...." tabindex="5"></textarea>
            </fieldset>
            <fieldset>
                <img src="captcha.php?rand=<?php echo rand(); ?>" id="captchaimg" height="50" width="350">
            </fieldset>
            <fieldset>
                <input placeholder="Captcha" type="text" tabindex="2" id="captcha_code">
                <span class="err captcha-err"></span>
            </fieldset>
            <fieldset>
                Can't read the above code? <a class="ccc" href="javascript:void(0);" onClick="refresh_captcha();">Refresh</a>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit">Submit</button>
            </fieldset>
        </form>

    </div>
</body>
</html>