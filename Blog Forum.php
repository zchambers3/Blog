<html>
<head>
    <title>Forum</title><link rel="stylesheet" type="text/css"  href="Blog Forum.css">
</head>
<body>
<?php
include("navigation.php")
?>
<h1 align="center">Welcome to the main Forum!</h1>
<p align="center">View the blog posts below!</p>
</body>

    <?php
        include ("./index/footer.php");
    ?>
<style>
    <?php
        include ("./index/footer.css")
    ?>
</style>

</html>
<?php
session_start();


    //database connection
    include("./index/server.php");


$results = mysqli_query($conn, "SELECT title, textarea, date
                                      FROM blog_post");

    while ($row = mysqli_fetch_array($results)) { ?>

        <table border="2" cellpadding="3">
            <thead>
            <tr>
                <th>Title of Post</th>
                <th>Username</th>
                <th>Date of Post</th>
                <th>Post Body</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <!--Replace everything below in td
                so that is more Generalized-->
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>Here is my Post! I love this posting blog section!</td>
                <td>
                    <a href="#">Edit</a>
                </td>
                <td>
                    <a href="#">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>

	<?php } ?>

<style>
    <?php include("./index/Forum navigation.css")?>
</style>

