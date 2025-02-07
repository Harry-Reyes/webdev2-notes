<?php
    require_once('./db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anti SQL Injection | Login</title>
</head>
<body>
    <?php
        $error = '';
        if(isset($_POST['submit'])) {
            $username = mysqli_escape_string($conn, htmlspecialchars($_POST['name']));
            $password = mysqli_escape_string($conn, $_POST['pass']);

            $sql_query = 'SELECT * FROM users WHERE name=?';

            $result = prepare_username($sql_query, [$username]);

            $row = mysqli_fetch_assoc($result);

            if ($row > 0) {
                if (password_verify($password, $row['pass'])) {
                    header('location: home.php');
                }
            } else {
                $error = 'Invalid credentials. Try again.';
            }
        }
    ?>
    <div class="main-container">
        <div class="header">
            <h2>Assignment</h2>
        </div>
        <h2>Login</h2>
        <?php
            if($error) {
                echo "<div class='error'>$error</div>";
            }
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input type="text" name="name" placeholder="Username"><br>
            <input type="password" name="pass" placeholder="Password"><br>
            <input type="submit" name="submit" value="submit" class="btn">
        </form>
    </div>
</body>
</html>