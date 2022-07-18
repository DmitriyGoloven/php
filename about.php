<?php
$title = 'ABOUT';
require "./blocks/header.php";
?>
<div class="container mt-5">
    <h2 style="color: red">Form</h2>

    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="enter name" class="form-control"><br>
        <input type="email" name="email" placeholder="enter email" class="form-control"><br>
        <input type="password" name="password" placeholder="enter password" class="form-control"><br>
        <textarea name="message" placeholder="enter message" class="form-control"></textarea><br>
        <input type="submit" value="send" class="btn btn-success">
    </form>
</div>

<?php
require "./blocks/footer.php";
?>
