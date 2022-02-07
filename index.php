<?php 
    $randint = rand(0,1);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Titre</title>
    </head>
<body>
    <p> <?php if($randint = 0):
        echo "salut";
    else: 
        echo "test" endif; ?>
    </p>
</body>
</html> 
