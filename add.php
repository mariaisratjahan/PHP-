<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>
<body>
<h1>ADD STUDENT FROM HERE:</h1><br>
    <form action="added.php" method="post">
        <label for="name">STUDENT NAME:</label>
       <input type="text"  id="name" name="name"><br><br>
       <label for="roll">ROLL NO:</label>
       <input type="text" id="roll" name="roll"><br><br>
       <label for="department">DEPARTMENT</label>
       <input type="text" id="department" name="department"><br><br>
       <input type="submit" value="add">

    </form><br><br>

    <a href="list.php">SHOW STUDENT LIST</a>
</body>
</html>