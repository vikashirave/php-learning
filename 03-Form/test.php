<html>
    <body>
        <form method="POST">
            <input type="text" name="name" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </body>
</html>

<?php 

if (isset($_POST['submit'])) {

    if($_POST['name'] != '') {
        echo 'name='.$_POST['name'].'<br>';
    } else {
        echo 'Username is required<br>';
    }

    if($_POST['password'] != '') {
        echo 'password='.$_POST['password'].'<br>';
    } else {
        echo 'password is required<br>';
    }
}