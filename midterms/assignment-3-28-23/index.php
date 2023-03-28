<?php
    $username = '';
    $password = '';

    $error = '';
    if(isset($_POST['submit'])) {
        // $username = htmlspecialchars($_POST['username']);
        // $password = $_POST['password'];
        $username = trim(htmlspecialchars($_POST['username']));
        $password = trim($_POST['password']);
        $f = fopen('credentials.csv', 'r') or die('Cannot read file or file "credentials.csv" is missing.');
        while($line = fgets($f)) {
            $line_data = explode(',',$line);
            // echo '<pre>';
            // var_dump($line_data);
            // echo '</pre>';
            if ($line_data[1] == $username && $line_data[2] == $password) {
                header('location: home.php');
            }
        }
        fclose($f);
        $error = 'error';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
    <style>
        :root {
            --theme-color: dodgerblue;
            --error-color: #ff6c6c;
            --error-bg-color: papayawhip;
            --theme-white-color: #ddd;
        }
        * {
            font-family:
                Roboto,
                system-ui,
                -apple-system,
                BlinkMacSystemFont,
                'Segoe UI',
                Oxygen,
                Ubuntu,
                Cantarell,
                'Open Sans',
                'Helvetica Neue',
                sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        @keyframes pan {
            100% {
                background-position: 15% 50%;
            }
        }
        body {
            display: grid;
            place-content: center;
            height: 100vh;

            background-image: url(./img/layered-waves-haikei.svg);
            background-repeat: no-repeat;
            background-size: cover;
        
            animation: pan 4s infinite alternate ease-in-out;
        }
        form {
            margin-top: 15px;
        }
        input[type]:not([type="submit"]) {
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
        }
        .btn {
            padding: 10px;
            border-radius: 10px;
            outline: none;
            border: 1px solid gray;
            width: 70px;
            background-color: var(--theme-color);
            color: white;
            text-transform: uppercase;
            cursor: pointer;
            font-weight: bold;
        }
        .main-container {
            width: 350px;
            background: var(--theme-white-color);
            padding: 60px 20px 20px 20px;
            border-radius: 10px;
            position: relative;
        }
        .header {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            padding: 10px;

            background: var(--theme-color);
            color: white;

            border-radius: 10px 10px 0 0;
        }
        .error {
            background-color: var(--error-bg-color);
            border-color: var(--error-color);
        }
        pre {
            color: white;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <h2>Assignment</h2>
        </div>
        <h2>Login</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input type="text" name="username" placeholder="Username" class="<?=$error?>" autofocus><br>
            <input type="password" name="password" placeholder="Password" class="<?=$error?>"><br>
            <input type="submit" name="submit" value="login" class="btn">
        </form>
    </div>
</body>
</html>