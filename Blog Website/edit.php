<?php
session_start();
      include_once("./index/server.php");
      include_once("navigation.php");


if (isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $results = mysqli_query($conn, "SELECT textarea FROM blog_post WHERE id='$id'");
    $row = mysqli_fetch_array($results);
}

if (isset($_POST['newTextarea']))
{
    $newTextarea  =   $_POST['newTextarea'];
    $id           =   $_POST['id'];
    $sql          =  "UPDATE blog_post SET id ='$id' textarea = '$textarea' WHERE id='$id'";
    $results      =   mysqli_query($conn, $sql) or die ("Could not update records" . mysqli_error($conn));
    echo "<meta http-equiv='refresh' content='0; url=Blog Forum.php'>";
}

?>
<?php
    while ($row = mysqli_fetch_array($results)) { ?>

<form class="gridHolder" action="edit.php" method="POST">
    <textarea id="textarea" placeholder="Enter the new blog post here" name=newTextarea" form="<?php echo $row['textarea'];?>"></textarea><br><br>
    <input type="hidden" name="id" value="<?php echo $row[0];?>"><br><br>
    <input id="submit" type="submit" name="Submit" value="Update">
</form>
    <?php } ?>