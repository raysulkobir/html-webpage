<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['name']) && !empty($_POST['name'])) {
            echo "My Name: " . $_POST['name'] . "!".PHP_EOL;
        } 

        if(isset($_POST['email']) && !empty($_POST['email'])) {
            echo "My Email: " . $_GET['email'] . "!".PHP_EOL;
        }
        
        
    ?>

    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email">
        <br>
        <br>
        <label for="message">Message:</label>
        <textarea name="message" rows="5" cols="30"></textarea>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>