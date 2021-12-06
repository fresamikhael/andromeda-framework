<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo $GLOBALS['path'] ?>/css/style.css">
</head>
<body>    
    <?php foreach ($data['users'] as $user){ ?>
        <p>
            <?php echo $user['username']; ?>
        </p>
    <?php } ?>
</body>
</html>

