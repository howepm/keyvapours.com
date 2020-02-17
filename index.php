<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    require 'phpmailer/OAuth.php';
    require 'phpmailer/POP3.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    function isEmail($email)
    {

        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

        if (preg_match($pattern, $email) === 1)
        {
            return true;
        }
        else
        {
          return false;
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title>KeyVapours.com &bull; South Wales e-Cigarette and CBD specialists</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="final.css">
  <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="Description" content="A chain of e-Cigarette and CBD stores based out of South Wales - also home to our best selling own brand of e-Liquid, juiced monkey!">
<meta name="Keywords" content="cbd ecig ecigarette ecigs smoking vaping vape vapes eliquid e-liquid e-cigs e-cig e-cigarette cbd cannabis oil livewell juiced monkey juicedmonkey slushie eleaf wismec smok coopoo innokin merthyr brecon south wales southwales specialist cigarette cigarettes fag fags give up giveup giveupsmoking how to give up smoking howtogiveupsmoking howto">
</head>
<body>
  <nav id="sidebar">
    <img alt="KeyVapours" src="images/logo.png" id="logo">
    <div id="strapline">
      e-Cigarette and CBD specialists with over 25 years combined experience
    </div>
    <div class="pad">
      <nav id="links">
        <h1>Navigation</h1>
        <a href="#about"><i class="fa fa-bullseye"></i> About Us</a>
        <a href="#contact"><i class="fa fa-bullseye"></i> Contact</a>
        <a href="#locations"><i class="fa fa-bullseye"></i> Locations</a>
        <a href="#staff"><i class="fa fa-bullseye"></i> Staff</a>
        <a href="http://www.juicedmonkey.net"><i class="fa fa-external-link"></i> Juiced Monkey Store</a>
        <h1>Social Media</h1>
        <a href="http://facebook.com/KeyVapoursMerthyr"><i class="fa fa-facebook"></i> Key Vapours Merthyr</a>
        <a href="http://facebook.com/KeyVapoursBrecon"><i class="fa fa-facebook"></i> Key Vapours Brecon</a>
        <a href="http://facebook.com/KeyVapoursCBD"><i class="fa fa-facebook"></i> Key Vapours CBD</a>
        <a href="https://www.instagram.com/keyvapourswales/"><i class="fa fa-instagram"></i> Key Vapours</a>
      </nav>
    </div>
  </nav>
  <div id="main">
    <a name="about"></a>
    <div class="pad">
      <img src="images/logoBlack.png" alt="black logo variant" id="subLogo">
      <?php
        $sendSuccess = false;
        if($_POST['name'] != ''||$_POST['email'] != ''||$_POST['subject'] != ''||$_POST['message'] != '')
        {
          if($_POST['name'] == ''||$_POST['email'] == ''||!isEmail($_POST['email'])||$_POST['subject'] == ''||$_POST['message'] == '')
          {
            echo('<div id="contactError"><strong>There were errors with your contact submission');
            if($_POST['name'] == '')
            {
              echo('<em class="sendError">The name was left blank</em>');
            }
            if($_POST['email'] == '')
            {
              echo('<em class="sendError">The e-mail was left blank</em>');
            }
            if(!isEmail($_POST['email']))
            {
              echo("<em class=\"sendError\">$_POST[email] is not a valid e-mail address.</em>");
            }
            if($_POST['subject'] == '')
            {
              echo('<em class="sendError">The subject was left blank</em>');
            }
            if($_POST['message'] == '')
            {
              echo('<em class="sendError">The message was left blank</em>');
            }
            echo('</div>');
          }
          else
          {
            foreach($_POST as $key => $value)
            {
              $_POST[$key] = htmlspecialchars(addslashes($value));
            }
            $sendSuccess = true;
            echo("<div id=\"contactSuccess\">Thank you, <strong>$_POST[name]</strong> for your contact submission. One of our members of staff will be in touch. <a href=\"#locations\">If you would like to contact a specific store, please use the locations information below</a> or if you'd like to e-mail an individual member of staff, <a href=\"#staff\">see our staff section</a>. Please note that your best chance of getting a reply would be using this contact form or the facebooks - not every member of staff checks their inboxes regularly. <strong>Facebook has the best chance at a quick reply.</strong> Thank you.</div>");

              try {
        //Server settings
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'main.howe.pm';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'mailer@keyvapours.com';                     // SMTP username
                $mail->Password   = 'TQkcAG8VtG';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
                $mail->setFrom('mailer@keyvapours.com', 'Key Vapours Mailer');
                $mail->addAddress('ahvapeden@gmail.com', 'Alex Howe');
                $mail->addAddress('crooty7@gmail.com', 'Warren Croot');
                $mail->addReplyTo($_POST['email'], $_POST['name']);

        // Content
                $mail->isHTML(true);
                $mail->Subject = 'e-Mail from ' & $_POST['name'] & ': ' & $_POST['subject'];
                $mail->Body    = 'From: ' & $_POST['name'] &'<br>Email: ' & $_POST['email'] & '<br><br>Message:<br>' & $_POST['message'] & '<br><br><em>' & date('l jS \of F Y h:i:s A') & '</em>';
                $mail->AltBody = 'From: ' & $_POST['name'] &'
        Email: ' & $_POST['email'] & '

        Message:<br>' & $_POST['message'] & '

               ' & date('l jS \of F Y h:i:s A');

               $mail->send();
             } catch (Exception $e) {
                  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
              }

          }
        }
      ?>
      <h1>About Us</h1>
      <img alt="products" src="images/products1.png" class="accompany-right">
      <p>Key Vapours is a chain of e-Cigarette and CBD stores scattered throughout South Wales. We've currently got three locations - two in Merthyr, one for e-Cigarettes, one for CBD - and one in Brecon which specialises in both, leaning more towards vaping products. We stock hardware, coils, e-Liquids, vaping CBD, oral CBD, CBD drinks &amp; edibles and much, much more. We've been selling e-Cigarettes for almost ten years now and were one of the first stores in Wales to stock such products. Our staff have years of expertise in helping people give up smoking for good - we've saved thousands of people millions of pounds <strong>and we can help you too!</strong></p>
      &nbsp;
      <img alt="juiced monkey" src="images/juicedmonkey.png" class="accompany-left">
      <p>As well as stocking multiple high quality brands of e-Liquid, we also stock our own fan favourite, in-house brand Juiced Monkey. It's available in 10ml bottles and 50/60ml shortfills in many, many flavours and has been a best seller in our areas for over 5 years. It's exclusive to us and not available anywhere else, and the price is <strong>unbeatable</strong> for high quality, UK made premium e-Liquid! The 10ml bottles are <strong>&pound;2.50</strong> or <strong>6 for &pound;10</strong> (60ml for &pound;10, and you can mix and match 6 different flavours if you like!) or the 50ml shortfills are <strong>&pound;7 each, 3 for &pound;20</strong>, including one nic shot each to make 3mg (extra shots are available).</p>
      &nbsp;
      <img alt="cbd products" src="images/cbdProduct.png" class="accompany-right">
      <p>We also stock CBD (cannabis based) products and were one of if not the first dedicated shop for CBD in the whole of Wales. We've helped many, many people change their lives using our products and are very happy with the results. We're not allowed to make medical claims so customers will have to do their own research to an extent, but please feel free to get in touch or pop in-store (especially the CBD store in Merthyr) and we'll do whatever we can to help!</p>
      &nbsp;
      <div class="clear"></div>
      <div id="bestSellers">
        <h2>Some of our best selling brands</h2>
        <img src="images/logos/jmuk.png" alt="Juiced Monkey e-Liquid">
        <img src="images/logos/slushie.png" alt="Slushie e-Liquid">
        <img src="images/logos/lvwell.png" alt="LiveWell CBD">
        <img src="images/logos/vamp.png" alt="Vampire Vape e-Liquid">
        <img src="images/logos/more.png" alt="Moreish Puff e-Liquid">
        <img src="images/logos/eleaf.png" alt="eLeaf e-Cigarette Manufacturer">
        <img src="images/logos/joy.png" alt="Joyetech e-Cigarette Manufacturer">
        <img src="images/logos/wismec.png" alt="Wismec e-Cigarette Manufacturer">
        <img src="images/logos/aspire.png" alt="Aspire e-Cigarette Manufacturer">
        <img src="images/logos/voopoo.png" alt="VooPoo e-Cigarette Manufacturer">
        <img src="images/logos/smok.png" alt="SMOK e-Cigarette Manufacturer">
        <img src="images/logos/innokin.png" alt="Innokin e-Cigarette Manufacturer">
        <img src="images/logos/samsung.png" alt="Samsung Battery Manufacturer">
        <br>
        <h2>&amp; much, much more!</h2>
      </div>

    </div>
    <a name="contact"></a>
    <div class="pad">
      <h1>Contact</h1>
      <p>You can contact us through our Facebook pages on the side bar or in <a href="#locations">locations portion of the site</a> which also lists our addresses and phone numbers, or fill in the form below and we'll get back to you via e-mail. <strong>Facebook has the best chance at a quick reply.</strong></p>
      <form id="contact" method="post">
        <input <?php if($_POST['name'] != '' && $sendSuccess == false) { echo("value=\"$_POST[name]\""); } ?> name="name" placeholder="Your name" class="formInput">
        <input <?php if($_POST['email'] != '' && $sendSuccess == false) { echo("value=\"$_POST[email]\""); } ?>  name="email" placeholder="Your e-mail address" class="formInput">
        <input <?php if($_POST['subject'] != '' && $sendSuccess == false) { echo("value=\"$_POST[subject]\""); } ?>  name="subject" placeholder="Subject of your message" class="formInput">
        <textarea name="message" class="bigInput" placeholder="Your message"> <?php if($_POST['name'] != '' && $sendSuccess == false) { echo($_POST['message']); } ?></textarea>
        <input name="send" value="Send message" class="formSubmit" type="submit">
      </form>
    </div>
    <a name="locations"></a>
    <div class="pad">
      <h1>Locations</h1>
      <div id="locations">
        <div class="location">
          <strong class="name">Key Vapours LTD (Merthyr)</strong>
          <img alt="merthyr store" src="images/merthyr.png" class="photo">
          <em class="address">
            <i class="fa fa-home"></i> 
            Key Vapours LTD, 2A John Street, Merthyr Tydfil. CF47 0AE
            <br>
            <small>(opposite Select in the arcade next to Tesco)</small>
            <br>
            <i class="fa fa-phone"></i>
            01685 388034
          </em>
          <span class="facebook"><a href="http://facebook.com/KeyVapoursMerthyr"><i class="fa fa-facebook"></i> Key Vapours Merthyr</a></span>
        </div>
        <div class="location">
          <strong class="name">Key Vapours Brecon</strong>
          <img alt="brecon store" src="images/brecon.png" class="photo">
          <em class="address">
            <i class="fa fa-home"></i> 
            Key Vapours LTD, 2A John Street, Merthyr Tydfil. CF47 0AE
            <br>
            <i class="fa fa-phone"></i>
            01874 611753
          </em>
          <span class="facebook"><a href="http://facebook.com/KeyVapoursBrecon"><i class="fa fa-facebook"></i> Key Vapours Brecon</a></span>
        </div>
        <div class="location">
          <strong class="name">Key Vapours CBD</strong>
          <img alt="merthyr cbd store" src="images/cbd.png" class="photo">
          <em class="address">
            <i class="fa fa-home"></i> 
            Key Vapours CBD, 4A John Street, Merthyr Tydfil. CF47 0AE
            <br>
            <small>(next door to Greggs in the arcade next to Tesco)</small>
            <br>
            <i class="fa fa-phone"></i>
            01685 388034
          </em>
          <span class="facebook"><a href="http://facebook.com/KeyVapoursCBD"><i class="fa fa-facebook"></i> Key Vapours CBD</a></span>
        </div>
      </div>
    </div>
    <a name="staff"></a>
    <div class="pad">
      <h1>Staff</h1>
      <div id="staff">

        <div class="member">
          <img alt="Warren Croot" src="images/people/warren.png">
          <strong>Warren Croot</strong>
          <em>Owner</em>
          <small>warren.croot@keyvapours.com / warren@keyvapours.com</small>
        </div>
        <div class="member">
          <img alt="Lewis Owens" src="images/people/lewis.png">
          <strong>Lewis Owens</strong>
          <em>Manager</em>
          <small>lewis.owens@keyvapours.com / lewis@keyvapours.com</small>
        </div>
        <div class="member">
          <img alt="Alex Howe" src="images/people/alex.png">
          <strong>Alex Howe</strong>
          <em>Manager</em>
          <small>alex.howe@keyvapours.com / alex@keyvapours.com</small>
        </div>
        <div class="member">
          <img alt="Bev Spink" src="images/people/bev.png">
          <strong>Bev Spink</strong>
          <em>Manager</em>
          <small>bev.spink@keyvapours.com / bev@keyvapours.com</small>
        </div>
        <div class="member">
          <img alt="Alun Thomas" src="images/people/alun.png">
          <strong>Alun Thomas</strong>
          <em>Manager</em>
          <small>alun.thomas@keyvapours.com / alun@keyvapours.com</small>
        </div>
        <div class="member">
          <img alt="Leigh Whellans" src="images/people/leigh.png">
          <strong>Leigh Whellans</strong>
          <em>Sales Associate</em>
          <small>leigh.whellans@keyvapours.com / leigh@keyvapours.com</small>
        </div>
        <div class="member">
          <img alt="Emily Maull" src="images/people/emily.png">
          <strong>Emily Maull</strong>
          <em>Sales Associate</em>
          <small>emily.maull@keyvapours.com / emily@keyvapours.com</small>
        </div>
        <div class="member">
          <img alt="Sasha Creedon" src="images/people/sasha.png">
          <strong>Sasha Creedon</strong>
          <em>Sales Associate</em>
          <small>sasha.creedon@keyvapours.com / sasha@keyvapours.com</small>
        </div>
        <div class="member">
          <img alt="Bethany Loveitt" src="images/people/beth.png">
          <strong>Bethany Loveitt</strong>
          <em>Sales Associate</em>
          <small>bethany.loveitt@keyvapours.com / bethany@keyvapours.com</small>
        </div>

      </div>
      <div id="bottomMargin"></div>
    </div>
  </div>
</body>
</html>