<?php
require_once 'config.php';
$result = mysqli_query($connection, 'SELECT * FROM `messages` ORDER BY id DESC LIMIT 17');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>ChAt</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>ChAt</h1>
        </div>
        <div class="chat-body">
            <?php
                while ($record = mysqli_fetch_assoc($result)){
                    echo '<div>'. $record['time'].'<br>';
                    echo  $record['message'].'</div>';

                }
            ?>
            <div class="form">
                <form method="post" action="/post.php">
                    <input class="form-size" name="text" title="">
                    <div>
                        <input type="submit" >
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>