<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <title>Liste object</title>
</head>
<body>
    <h1>liste object</h1>
    <?php foreach ($obj as $ob)  {
        $id = $ob['idobject']; ?>
    <h4><?php echo $ob['nom']; ?>
        <form action="<?php echo site_url('Proposition/proposer_phase1'); ?>" method="get">
            <input type="hidden" name="idpersonne" value="<?php echo $ob['idpersonne']; ?>">
            <input type="hidden" name="idobjet" value="<?php echo $id; ?>">
            <input type="submit" value="proposer">
        </form>
    </h4>
    <?php } ?>
</body>
</html>