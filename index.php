<?php
// echo"<pre>";
// print_r($_POST);
// echo"</pre>";
$message_sent = false;
if(isset($_POST["email"]) && $_POST["email"] != ""){
    if(filter_var($_POST["email "], FILTER_VALIDATE_EMAIL)){
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];
        
        $to = "yogit21@iitk.ac.in";
        $body = "";
        
        $body .= "From: ".$userName."\r\n";
        $body .= "From: ".$userEmail."\r\n";
        $body .= "From: ".$message."\r\n";
        
        mail($to, $messageSubject, $body);
        $message_sent = true;
    }
    else{
        $invalid_class_name = "form-invalid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat:wght@200&family=Noto+Sans&family=Poppins:wght@200&family=Sacramento&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    if($message_sent):
    ?>
        <h3>Thanks for the response!</h3>
    <?php
    else:
    ?>
<div class="container">
    <a href="https://www.iitk.ac.in/counsel/">
        <img class = "image" src="white.png" alt="cslogo"/>
    </a>
  <h1 class= "heading">Registration form 😄 </h1>
    <p class = "para1">Please fill in this form to send a mail.</p>
</div>
<div class="text1">
    <p class="para2"> Feel free to contact me through this form. </p>
    <span class="para2"> This page works on three basic elements of web development.</span>
    <ol class="para2">
        <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML"> HTML: Hyper Text Markup Langauge</a></li>
        <li><a href="https://www.w3schools.com/css/css_intro.asp#:~:text=CSS%20stands%20for%20Cascading%20Style,are%20stored%20in%20CSS%20files">CSS: Cascading Style Sheets</a></li>
        <li><a href="https://www.w3schools.com/php/php_intro.asp#:~:text=What%20is%20PHP%3F,free%20to%20download%20and%20use">PHP: PHP Hypertext Preprocessor</a> </li>
    </ol>
</div>
<div class="forms">
<form action="webform.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Yogit Shankar" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input <?= $invalid_class_name ?? ""?> type="email" class="form-control" id="email" name="email" placeholder="yogit21@iitk.ac.in" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Add a Subject!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message!" tabindex="4"></textarea>
            </div>
            <div>
                <button class="button-48" role="button"><span class="text">Send Message!</span></button>
            </div>
        </form>
    </div>
    <?php
    endif;
    ?>
</body>
</html>