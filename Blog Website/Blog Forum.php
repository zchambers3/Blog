<!--Blog Forum
Developers: James-Ryan Stampley, Zachary Chambers, David Pratt Jr., Brandon Labat
Version 3.0
PHP Storm version 2018.1
References: https://www.formget.com/update-data-in-database-using-php/
            https://www.youtube.com/watch?v=MYhw4-Bc-oM


This is the main Forum page, where a user will go to view all
the recent posts from other users There is an add and delete button
on the blog's so a user can update or delete their blog post.-->

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

$results = mysqli_query($conn, "SELECT id, title, userid, date, textarea
                                      FROM blog_post");

while ($row = mysqli_fetch_array($results)) { ?>

    <table border="2" cellpadding="3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
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
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['userid']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['textarea']; ?></td>
            <td>
                <a href='edit.php?edit=<?php echo $row['id'];?>'>Edit</a>
            </td>
            <td>
                <a href='delete.php?del=<?php echo $row['id'];?>'>Delete</a>
            </td>
        </tr>
        </tbody>
    </table>

<?php } ?>

<style>
    <?php include("./index/Forum navigation.css")?>
</style>
<?php include("./index/footer.php"); ?>
