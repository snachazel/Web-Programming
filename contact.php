<?php
if (isset($_POST["name"])) {
	do the php shit to put it in the dfatabase
}
else {
	print <<<INIT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us!</title>
    <link rel="stylesheet" href="./foodstrap.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
</head>
<body>
    <header>
        <a href="./foodstrap.html">
            <h1>Foodstrap</h1>
        </a>
    </header>
   <nav class = "navbar navbar-default">
        <a href="./browse.html" class="navlink" id="link1">Browse Recipes</a>
        <a href="./submit.html" class="navlink" id="link2">Submit Recipes</a>
        <a href="./registration.php" class="navlink" id="link3">Log in</a>
        <a href="./foodfacts.html" class="navlink" id="link4">Advice</a>
        <a href="./contact.html" class="navlink" id="link5">Contact Us</a>
    </nav>
    <div  class = "container" id = "cform">
        <form id="contact_form" action="contact.php" method="post">
            <div class="row form-group">
                <div class = "col-sm-3"><p> </p></div>
                <div class = "col-sm-3"><label for="name">Name</label></div>
                <div class = "col-sm-3"><input type="text" id="name" name="name" required></div>
                <div class = "col-sm-3"><p> </p></div>
            </div>
            <div class="form-group" >
                <div class = "col-sm-3"><p> </p></div>
                <div class = "col-sm-3"><label for="email">Email address</label></div>
                <div class = "col-sm-3"><input type="email" id="email" name="email" required></div>
                <div class = "col-sm-3"><p> </p></div>
            </div>
            <div class="form-group">
                <div class = "col-sm-3"><p> </p></div>
                <div class = "col-sm-3"><label for="comments">Comments</label></div>
                <div class = "col-sm-3"><textarea name="comments" id="comments" cols="50" rows="10" required></textarea></div>
                <div class = "col-sm-3"><p> </p></div>
            </div>
            <div class="form-group">
                <div class = "col-sm-3"><p> </p></div>
                <div class = "col-sm-3"><input type="submit" value="Submit"></div>
                <div class = "col-sm-3"><input type="reset" value="Reset"></div>
                <div class = "col-sm-3"><p> </p></div>
            </div>
        </form>
    </div>
    <footer>
        &copy; 2019 Sunny Ananthanarayan and Stephen Nachazel
    </footer>
</body>
</html>
INIT;
}
?>