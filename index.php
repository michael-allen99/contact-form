<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap Styles-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Contact Form</title>
</head>
<body>


    <div class = "page-header jumbotron-fluid col-sm-12 col-lg-12 col-xl-12 col-md-12">
        <h1 class="h1 pageheading">
            Contact Form
        </h1>
    </div>
    <?php
    if (isset($_GET['mailsent'])){

        echo "<p class='confirmation'>Email sent. I'll be in touch shortly</p>";
        echo "<div class='underline'></div>";

    }
    ?>
    <form action="contactform.php" method="post">
        <input type="text" name="name" id="name" placeholder="Your Name" required>
        <input type="email" name="email" id="email" placeholder="Your Email" required>
        <input type="text" name="subject" id="subject" placeholder="Subject" required>
        <textarea name="message" id="message" cols="100" rows="10" placeholder="Let's Chat!" required></textarea>
        <button class="btn-lg badge-primary" name="submit">Send E-Mail</button>
    </form>


<!--Boostrap JS Requirements (jQuery, Popper and BS.js)-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>