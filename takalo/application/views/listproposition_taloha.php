<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste proposition</title>
</head>
<body>
    <h2>liste proposition</h2>
    <?php foreach ($prop as $p) { 
        $id = $p['idproposition'];
        ?>
        <h3><?php echo $p['idproposition']; ?>fasdf</h3>
        <a href="<?php echo site_url("Echange/accept/".$id); ?>">accepter</a>
    <?php } ?>  
</body>
</html>