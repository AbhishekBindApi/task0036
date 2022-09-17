<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
       <form action="" method="POST">
            NAME = <input type="text" name="name"></input>
            <button name="submit">submit</button>
        </form>

        <h1>Get data type</h1>
       <?php
            if(isset($_POST['submit']))
            {
                $name = $_POST['name'];
            }
            echo "$name";
            echo "<br>";
            echo gettype($name) . "<br>";
        ?>
    </div>
</body>
</html>