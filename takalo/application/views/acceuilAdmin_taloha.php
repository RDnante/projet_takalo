<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
    <?php $this->load->view('Header');?>
    <div>
        <h1>
            bienvenue a l'accueil <?php echo $ad; ?>
        </h1>
    </div>
    <?php $this->load->view('Footer');?>
</body>
</html>