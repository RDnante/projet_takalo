<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <?php foreach ($obj as $o) {
        ?>
        <form action="<?php echo site_url('Proposition/proposer') ?>" method="get">
            <p>mine<?php echo $idobj; ?></p><input type="hidden" value="<?php echo $idobj; ?>" name="yours">
            <p>yours<?php echo $o['idobject']; ?></p><input type="hidden" value="<?php echo $o['idobject']; ?>" name="mine">
            <p>destinateur<?php echo $iddestinateur; ?></p> <input type="hidden" name="destinateur" value="<?php echo $iddestinateur; ?>">
            <p><?php echo $o['nom']; ?></p>
            <input type="submit" value="ok">
        </form>
    <?php } ?>
</body>
</html>