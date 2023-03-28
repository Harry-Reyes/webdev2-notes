<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        :root {
            --theme-color: dodgerblue;
            --light-gray: #f4f4f4;
            --error-color: #ff6c6c;
        }
        * {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            box-sizing: border-box;
        }
        body {
            display: grid;
            place-content: center;
            height: 100vh;
        }
        .container {
            width: 350px;
            background: var(--light-gray);
            padding: 50px 10px 10px 10px;
            border-radius: 10px;
            position: relative;
        }
        .btn {
            padding: 7px;
            border-radius: 10px;
            outline: none;
            border: 1px solid lightblue;
            width: 100px;
            background: var(--theme-color);
            color: white;
            cursor: grabbing;
            text-transform: uppercase;
            font-weight: bold;
        }
        input[type]:not([type="submit"]),
        textarea {
            margin-bottom: 10px;
            width: 100%;
            padding: 5px;
        }
        .error {
            border-color: var(--error-color);
        }
        .header {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            padding: 10px;

            background: var(--theme-color);
            color: var(--light-gray);

            border-radius: 10px 10px 0 0;
        }

        form {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>OSAS & BOGDANOFF</h2>
        </div>
        <form action="<?=$_SERVER['PHP_SELF']?>" method='GET'>
            <input type="text" name="username" placeholder="Manim"><br>
            <input type="email" name="email" placeholder="Highly Confidential Electronic Mail"><br>
            <input type="password" name="password" placeholder="Encryption Key Code"><br>
            <textarea name="comment" placeholder="Ma puhpos" cols="30" rows="10"></textarea><br>
            <input type="submit" name="submit" value="Dumpit" class="btn">
        </form>
    </div>
</body>
</html>