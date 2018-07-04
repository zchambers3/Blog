<!--
Home Page
Developers: James-Ryan Stampley, Zachary Chambers, David Pratt Jr., Brandon Labat
Version 3.0
PHP Storm version 2018.1
References:
			https://www.w3schools.com/html/
			https://www.w3schools.com/css/css_margin.asp

This is the main home page for returning snd new users.
In the header section is a short paragraph that outlines
the mission statement or idea of the website
From this page, the user can navigate to the
Login Page if they're a returning member of the
site, or be directed to the registration page to
sign up.
 -->
<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title><link rel="stylesheet" type="text/css" href="Homepage.css">
</head>

<body>
<br>
<h1>Welcome to a home for audio engineers</h1>
<p>Welcome to a community for audio engineers to share<br>
    creative and collaborative ideas. No matter what type of audio<br>
    Engineer you are, there is a home for you on this page.<br>
    Want to become a part of something great? <br>
    Sign up below, or login if you're a returning member.</p>
<div id="main">
    <br><br>
    <label>Are you a new member? Click Below!<br><br><a href="RegistrationPage.php"><button>Sign up</button></a></label>
    <br><br>
    <label>Are you a returning member? <br><br><a
                href="BlogLoginPage.php"><button>Login</button></a></label>
    <br><br>
</div>

</body>

//include footer and style elements of footer
    <?php
        include ("./index/footer.php");
    ?>
<style>
    <?php
        include ("./index/footer.css")
    ?>
</style>
</html>

