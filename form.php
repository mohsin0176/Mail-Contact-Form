<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>A Contact Form Using Phpmailer - reusable form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="form-container">
            <h1>Contact Us</h1>
        <form method="POST" id="reused_form">
        <label for="name">Your Name:</label>
        <input type="text" name="Name" id="name" required maxlength="50">
        <label for="email">Email Address:</label>
        <input type="email" name="Email" id="email" required maxlength="50">
        <label for="message">Message:</label>
        <textarea id="message" name="Message" rows="10" maxlength="6000"required></textarea>
        <button class="button-primary" type="submit">Post</button>
        </form>
        <div id="success_message" style="display: none">
            <h3>Submitted The Form Successfully!</h3>
            <p>We Will Get Back to You Soon</p>
        </div>
        <div id="error_message" style="width: 100%;height: 100%;display: none">
          <h3>Error</h3>
          Sorry There was error sending the form  
        </div>
        </div>
    </body>
</html>