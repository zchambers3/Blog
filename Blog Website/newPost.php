<html lang="en">
<head><link rel="stylesheet" type="text/css" href="newPost.css">

    <title>Create a new Post</title>

</head>
<body>
<?php include("navigation.php")?>
<h1 class="header">BEHIND THE CONSOLE</h1>
<h1 class="subheader">Write your post below</h1>
<div class="container">
    <form class="gridHolder" action="newPost.php" method="post">
        <input id="username" type="text" placeholder="Enter your username" name="userid" required>
        <input id="title" type="text" placeholder="Title" name="title" required>
        <input id="date" type="text" placeholder="Date" name="date" value="<?php echo date("l jS \of F Y");?>" required>
        <textarea id="textarea" placeholder="Write your post here" name="textarea" required></textarea>
        <input id="submit" type="submit" name="Submit" value="Submit">
    </form>


</div>


</body>
</html>

<?php
session_start();
include("./index/server.php");

//initialize variables
$userid = "";
$title = "";
$date = "";
$textarea = "";

 if (isset($_POST['Submit'])) {
     $userid = $_POST['userid'];
     $title = $_POST['title'];
     $date = $_POST['date'];
     $textarea = $_POST['textarea'];

     //insert values into blog_post table
     $sql = "INSERT INTO `blog_post` (userid, title, date, textarea)
             VALUES ('" . addslashes($userid) . "', '" . addslashes($title) . "',
            '" . addslashes($date) . "', '" . addslashes($textarea) . "')";
 }

//error message for failed connection
if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
